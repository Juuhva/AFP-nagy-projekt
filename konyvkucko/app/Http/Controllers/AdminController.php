<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view_book()
    {
        return view('admin.book');
    }
    public function view_newbook()
    {
        return view('admin.new_book');
    }
    public function view_orders()
    {
        return view('admin.orders');
    }
    public function view_statistic()
    {
        return view('admin.statistic');
    }
    public function view_users()
    {
        return view('admin.users');
    }
    public function view_settings()
    {
        return view('admin.settings');
    }
}
