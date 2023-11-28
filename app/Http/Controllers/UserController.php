<?php

namespace App\Http\Controllers;

use App\Services\UserService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $service;

    public function __construct(UserService $userService)
    {
        $this->service = $userService;
    }

    public function create(Request $request)
    {
        return $this->service->createUser($request);
    }
}