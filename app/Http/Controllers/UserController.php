<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserModel;

class UserController extends Controller
{
    //
	 $users= UserModel::orderBy('userId','DESC')->paginate(5);
}
