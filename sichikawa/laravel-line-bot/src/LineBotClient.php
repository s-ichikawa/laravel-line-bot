<?php
namespace Sichikawa\LaravelLineBot;

class LineBotClient
{
    private $client;

    /**
     * LineBotClient constructor.
     * @param $client
     */
    public function __construct($client)
    {
        $this->client = $client;
    }

    /**
     * @return array
     */
    public function getReceivingMessages()
    {
        $messages = json_decode(\Request::getContent(), true);
        return isset($messages['result']) ? $messages['result'] : [];
    }

    /**
     * @param $text
     */
    public function text($text)
    {
        \Log::debug($text);
    }
}