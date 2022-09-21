<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Reqleave;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use function Symfony\Component\VarDumper\Dumper\esc;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $message_check_in = 'لقد تأخرت عن وعد الدوام';

        $message_check_out = 'لقد خرجت قبل انتهاء موعد الدوام';

        $users = User::all();

        foreach ($users as $user) {
            if ($user->check_in > '9:30') {
                Mail::to($user->email)->send(new SendMail($message_check_in));
            } elseif ($user->check_out < '18:30') {
                Mail::to($user->email)->send(new SendMail($message_check_out));
            }
        }
        return redirect()->back();
    }
}
