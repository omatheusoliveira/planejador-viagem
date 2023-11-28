<?php

namespace App\Services;

use App\Models\User;

use Illuminate\Http\Response;
use Illuminate\Http\Request;

use Exception;

class UserService
{

    public function createUser(Request $request)
    {
        try {
            $user = new User();

            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->balance = $request->balance;

            $user->save();

            return response()->json($user, Response::HTTP_OK);
        } catch (Exception $ex) {
            return response()->json($ex, Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

}