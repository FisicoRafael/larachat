<?php

namespace App\Http\Controllers;

use App\Http\Controllers\User\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ChatController extends Controller
{
    public function index()
    {
        $userController = UserController::getUsers();
        $users = $userController;

        // dd($users);

        // return $users;
        return Inertia::render('Chat/ChatComponent', compact('users'));
    }
}
