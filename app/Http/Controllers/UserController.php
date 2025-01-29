<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::paginate(2);
        
        return response()->json([
            'status' => true,
            'users' => $users,
        ], 200);
    }
}
