<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function items() {
        return view('Business/Items/Index');
    }

    public function invoices() {
        return view('Business/Invoices/Index');
    }

    public function add_invoice() {
        return view('Business/Invoices/Add');
    }

    public function quotes() {
        return view('Business/Quotes/Index');
    }

    public function add_quote() {
        return view('Business/Quotes/Add');
    }

    public function bills() {
        return view('Business/Bills/Index');
    }

    public function add_bill() {
        return view('Business/Bills/Add');
    }
}
