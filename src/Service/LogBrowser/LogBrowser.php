<?php declare(strict_types=1);

namespace App\Service\LogBrowser;

use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class LogBrowser
{
    private static $LOG_EXT = '.log';
    private static $LINES_LIMIT = 40;
    private static $SORT_ORDER = 'DESC';

    /**
     * @var string
     */
    private $LOGS_DIR;

    /**
     * @var array
     */
    private $LOG_FILES = [];

    /**
     * @var array
     */
    private $filters;

    /**
     * @var UrlGeneratorInterface
     */
    private $generator;

    public function setLogsPath(string $path) : self
    {
        $this->LOGS_DIR = $path;
        return $this;
    }

    public function setUrlGenerator(UrlGeneratorInterface $generator): void
    {
        $this->generator = $generator;
    }

    public function applyFilters(?array $filters) : void
    {
        $this->filters = $filters;

        self::$SORT_ORDER = $this->filters['sort'];
    }

    public function getLogs() : array
    {
        if( empty($this->LOGS_DIR) ) throw new \Exception('No logs path specified');
        if( !file_exists($this->LOGS_DIR) ) throw new \Exception('Specified logs path does not exist');

        $this->scanLogFiles();
        if( empty($this->LOG_FILES) ) throw new \Exception('There\'s no log files in specified path');

        $logs = [];
        $lines = 0;

        foreach($this->LOG_FILES as $date => $file)
        {
            $data = file($this->LOGS_DIR . $file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            if( self::$SORT_ORDER == 'DESC' ) $data = array_reverse($data);

            $linesToLoad = self::$LINES_LIMIT - $lines;

            $logParser = new LogParser(new \DateTime($date), $this->filters);
            $logParser->parseLogs($data, $linesToLoad, $this->generator);

            $logs = array_merge($logs, $logParser->getLogs());
            $lines += $logParser->getLogsCount();

            if( $lines == self::$LINES_LIMIT ) break;
        }

        return $logs;
    }

    private function scanLogFiles() : void
    {
        $logFiles = scandir($this->LOGS_DIR, self::$SORT_ORDER == 'DESC' ? SCANDIR_SORT_DESCENDING : SCANDIR_SORT_ASCENDING);

        foreach( $logFiles as $key => $file )
        {
            if( $file == '.' || $file == '..' || strpos($file, self::$LOG_EXT) === false ) continue;

            $logInfo = str_replace(self::$LOG_EXT, '', $file);

            $this->LOG_FILES[date("d.m.Y", strtotime($logInfo))] = $file;
        }

        if( isset($this->filters['from']) || isset($this->filters['to']) )
        {
            foreach( $this->LOG_FILES as $date => $filename )
            {
                if( $this->filters['from'] )
                {
                    /** @var \DateTime $fromDate */
                    $fromDate = clone $this->filters['from'];
                    $fromDate->setTime(0, 0);

                    if( new \DateTime($date) < $fromDate )
                    {
                        unset($this->LOG_FILES[$date]);
                        continue;
                    }
                }

                if( $this->filters['to'] )
                {
                    /** @var \DateTime $toDate */
                    $toDate = clone $this->filters['to'];
                    $toDate->setTime(0, 0);

                    if( new \DateTime($date) > $toDate )
                    {
                        unset($this->LOG_FILES[$date]);
                        continue;
                    }
                }
            }
        }
    }
}