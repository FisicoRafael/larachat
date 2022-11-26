<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {

        $users = $this->user->inRandomOrder()->where('id', '!=', auth()->id())->get();

        // dd($users);

        return UserResource::collection($users);
    }

    static public function getUsers()
    {
        $user = new User;
        $users = $user->inRandomOrder()->where('id', '!=', auth()->id())->get();

        // dd($users);

        return UserResource::collection($users);
    }
}
