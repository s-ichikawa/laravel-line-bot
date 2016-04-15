<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Line;

class LineBotController extends Controller
{
    public function index()
    {
        return 'OK';
    }

    public function store()
    {
        $messages = Line::getReceivingMessages();
        foreach ($messages as $data) {
            $message = Line::parse($data);

            switch ($message->getContentType()) {
                case 'text':
                    Line::text('はろー');
                    break;
            }
        }
    }
}
