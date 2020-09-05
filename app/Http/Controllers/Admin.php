<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\View\View;

class Admin extends Controller
{

    public function getusers()
    {
        return user::get();

    }

    public function get_regestration_form()
    {
        return view('Admin/regestration');
    }

    public function stored(Request $request)
    {
        user::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'address' => $request->address,
            'telephone_number' => $request->telephone_number
        ]);
        return view('Admin/login');

    }

    public function login()
    {
        return view('Admin/login');

    }

    public function logged(Request $request)
    {
        $data = $this->getusers();
        foreach ($data as $_data) {

            if (strcmp($_data->email, $request->email) == 0 && strcmp($_data->password, $request->password) == 0) {


                return view('Admin/Welcome', compact('_data'));
            }

        }


        return view('Admin/login');

    }

    public function Home()
    {
        return View('Admin/Home');
    }
}