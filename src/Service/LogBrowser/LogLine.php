<?php

namespace App\Service\LogBrowser;


use App\Service\LogBrowser\Exception\LogLineParseException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class LogLine
{
    /**
     * @var \DateTime
     */
    private $time;

    /**
     * @var string
     */
    private $level;

    /**
     * @var string
     *
     */
    private $type;

    /**
     * @var string
     */
    private $action;

    /**
     * @var string
     */
    private $message;

    /**
     * @var UrlGeneratorInterface
     */
    private $generator;

    public function __construct(string $line, UrlGeneratorInterface $generator)
    {
        $this->generator = $generator;

        $data = explode(' ', $line, 5);

        if( sizeof($data) != 5 ) throw new LogLineParseException('Wrong log format');

        $this->time = new \DateTime($this->removeSquareBrackets($data[0]));
        $this->level = $this->removeSquareBrackets($data[1]);
        $this->type = $this->removeSquareBrackets($data[2]);
        $this->action = $this->removeSquareBrackets($data[3]);
        $this->message = $data[4];
    }

    public function setDate(\DateTime $date) : void
    {
        $this->time->setDate($date->format('Y'), $date->format('m'), $date->format('d'));
    }

    private function removeSquareBrackets(string $text) : string
    {
        return str_replace(['[', ']'], ['', ''], $text);
    }

    /**
     * @return \DateTime
     */
    public function getTime(): \DateTime
    {
        return $this->time;
    }

    /**
     * @return string
     */
    public function getLevel(): string
    {
        return $this->level;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    public function getMessageForDisplay() : string
    {
        $html = preg_replace('/<([a-z]*):([0-9]*)>/', '<span class="token element" data-element-tab-url="%s">&lt;$1:$2&gt;</span>', $this->message);

        preg_match('/{([^{}]+)}/', $html, $matches);

        if( is_array($matches) && !empty($matches) )
        {
            $html = str_replace(
                $matches[0],
                '<span class="token data">{' . preg_replace('/([^;][A-z_]+):( ?[^},]+,?)/', '$1: <span class="token datavalue">$2 </span>', $matches[1]) . '}</span>',
                $html
            );

            $html = preg_replace(['/{/', '/ ?\<\/span\>}/'],['<span class="token data">{', '</span>}</span>'], $html);
        }

        return $html;
    }

    public function __toString() : string
    {
        return sprintf("{%s} %s", $this->time->format('H:i:s'), $this->message);
    }
}