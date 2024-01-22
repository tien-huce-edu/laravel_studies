<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($id = null)
    {
        return $id ? "this is home page with id = $id" : "this is home page";
    }
    public function showForm()
    {
        return view('form');
    }

}
