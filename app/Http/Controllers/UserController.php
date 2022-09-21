<?php

namespace App\Http\Controllers;

use App\Models\User;
use Rap2hpoutre\FastExcel\FastExcel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('web.show', compact('users'));
    }

    public function importInfo(Request $request)
    {
        (new FastExcel)->import($request->excel, function ($line) {
            User::create([
                'name' => $line['Name'],
                'email' => $line['Email'],
            ]);
        });

        User::skip(2)->take(2)->delete();

        $users = User::all();

        return view('web.show', compact('users'));
    }

    public function importTime(Request $request)
    {
        (new FastExcel)->import($request->excel, function ($line) {
            $users = User::all();
            foreach ($users as $user) {
                if ($user->email == $line['Email']) {
                    $user->update(['check_in' => $line['check_in']]);
                    $user->update(['check_out' => $line['check_out']]);
                }
            }
        });

        $users = User::all();

        return view('web.show', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reqleave(Request $request)
    {
        $user =  User::where('email', $request->email)->first();

        $user->update(['description' => $request->description]);

        return redirect()->back()->with('status', 'thank you for request');
    }
}
