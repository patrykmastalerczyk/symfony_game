<?php declare(strict_types=1);

namespace App\Service;

class ConfigManager
{
    /**
     * @var array
     */
    private $config;

    public function __construct(array $appConfig)
    {
        $this->config = $appConfig;
    }

    public function getElementsWithDetailsEnabled() : array
    {
        $config = [];

        foreach($this->config['crp_element'] as $key => $element)
        {
            if( isset($element['details']) ) $config[$key] = $element;
        }

        return $config;
    }

    public function getElementWithDetailsTag(string $tag): ?array
    {
        foreach($this->config['crp_element'] as $key => $element)
        {
            if( isset($element['details']) && $element['details']['tag'] == $tag ) return $element;
        }

        return null;
    }

    public function getElementByClass(string $class): ?array
    {
        foreach($this->config['crp_element'] as $key => $element)
        {
            if( $element['class'] == $class ) return $element;
        }

        return null;
    }
}