<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessage;
use App\Http\Resources\MessageResource;
use App\Models\User;
use Illuminate\Http\Request;

class ChatAPIController extends Controller
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function store(StoreMessage $request)
    {
        $messages = $request->user()->messages()->create($request->all());

        return new MessageResource($messages);
    }
}
