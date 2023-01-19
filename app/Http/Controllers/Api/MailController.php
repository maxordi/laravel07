<?php

namespace App\Http\Controllers\Api;

use App\Mail\HelloMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(){
        $users = User::all();
        foreach ($users as $user){
            Mail::to($user)->send(new HelloMail());
        }
    }
}
