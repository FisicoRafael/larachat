<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessage;
use App\Http\Resources\MessageResource;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class ChatAPIController extends Controller
{
    protected $message;

    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    public function store(StoreMessage $request)
    {
        $messages = $request->user()->message()->create($request->all());

        return new MessageResource($messages);
    }
}
