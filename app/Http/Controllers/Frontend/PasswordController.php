<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function update(Request $request)
    {
           $password = Hash::make($request->newPassword);

           echo json_encode([
                'msg' => $password,
            ]);
    }




}
