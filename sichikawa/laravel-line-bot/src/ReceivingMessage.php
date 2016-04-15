<?php
namespace Sichikawa\LaravelLineBot;

class ReceivingMessage
{
    protected $from;
    protected $fromChannel;
    protected $to;
    protected $toChannel;
    protected $eventType;
    protected $id;

    /**
     * @var Content
     */
    protected $content;

    /**
     * Message constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->init($data);
    }

    private function init($data)
    {
        if (empty($data['content'])) {
            throw new Exceptions\LineBotException;
        }
        foreach ($data as $key => $value) {
            if ($key === 'content') {
                $this->$key = new Content($value);
            } else {
                $this->$key = $value;
            }
        }
    }

    public function getContentType()
    {
        return $this->content->getContentType();
    }
}