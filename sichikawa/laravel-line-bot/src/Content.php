<?php
namespace Sichikawa\LaravelLineBot;

class Content
{
    protected $location;
    protected $id;
    protected $contentType;
    protected $from;
    protected $createdTime;
    protected $to;
    protected $toType;
    protected $contentMetadata;
    protected $text;

    /**
     * Content constructor.
     * @param $content
     */
    public function __construct($content)
    {
        $this->init($content);
    }

    private function init($content)
    {
        foreach ($content as $key => $value) {
            $this->$key = $value;
        }
    }

    public function getContentType()
    {
        return $this->contentType ?? null;
    }
}