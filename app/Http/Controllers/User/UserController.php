<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // protected $user;

    // public function __construct()
    // {
    //     $this->user = $user;
    // }

    public function index()
    {
        $user = new User;
        $users = $user->inRandomOrder()->where('id', '!=', auth()->id())->get();

        // dd($users);

        return UserResource::collection($users);
    }
}
