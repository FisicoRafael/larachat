<?php

namespace App\Http\Controllers;

use App\Http\Controllers\User\UserController;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ChatController extends Controller
{
    public function index()
    {
        $userController = new UserController;
        $users = $userController->index();

        dd($users);


        return Inertia::render('Chat/ChatComponent', compact('users'));
    }
}
