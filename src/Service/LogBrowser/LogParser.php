<?php

namespace App\Service\LogBrowser;


use App\Service\LogBrowser\Exception\LogLineParseException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class LogParser
{
    /**
     * @var LogLine[]
     */
    private $logs = [];

    /**
     * @var \DateTime
     */
    private $date;

    /** @var array|null */
    private $filters;

    public function __construct(\DateTime $date, ?array $filters)
    {
        $this->date = $date;
        $this->filters = $filters;
    }

    public function parseLogs(array $logLines, int $maxLinesToload, UrlGeneratorInterface $generator) : void
    {
        $linesLoaded = 0;
        foreach($logLines as $logLine)
        {
            try {
                $log = new LogLine($logLine, $generator);
                $log->setDate($this->date);

                if( $this->matchFilters($log) )
                {
                    $this->logs[] = $log;
                    $linesLoaded++;

                    if( $linesLoaded == $maxLinesToload ) break;
                }
            }
            catch(LogLineParseException $e) {
                die('SHIT HAPPENS');
            }
        }
    }

    public function getLogs() : array
    {
        return $this->logs;
    }

    public function getLogsCount() : int
    {
        return count($this->logs);
    }

    private function matchFilters(LogLine $log) : bool
    {
        if( $this->filters['from'] )
        {
            if( $log->getTime() < $this->filters['from'] ) return false;
        }

        if( $this->filters['to'] )
        {
            if( $log->getTime() > $this->filters['to'] ) return false;
        }

        return true;
    }
}