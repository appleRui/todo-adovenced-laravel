<?php

namespace App\Http\Controllers;

use App\Models\User;
use Validator;
use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{

    public function index()
    {
        return DB::select('select * from users');
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'unique:users',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 400);
        }
        $user = User::create($request->all());
        return $user;
    }

    public function delete(Request $request)
    {
        $user = User::find($request->id);
        $user->delete();
        return response()->json([
            'status' => 'success',
        ], 200);
    }
}
