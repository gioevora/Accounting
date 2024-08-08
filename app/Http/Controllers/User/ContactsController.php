<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index() {
        return view('Contacts/Contacts/Index');
    }

    public function add() {
        return view('Contacts/Contacts/Add');
    }

    public function edit() {
        return view('Contacts/Contacts/Edit');
    }
}
