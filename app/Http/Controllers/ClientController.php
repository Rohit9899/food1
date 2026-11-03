<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class ClientController extends Controller
{
    public function ClientLogin(){
        return view('client.client_login');
    }

    public function ClientRegister(){
        return view('client.client_register');
    }
}
