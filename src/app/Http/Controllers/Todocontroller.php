<?php

namespace App\Http\Controllers;

use App\Http\Controllers\TodoController;
use App\Http\Requests\TodoRequest;
use App\Models\Todo;
use Illuminate\Http\Request;

class Todocontroller extends Controller
{
    public function index()
    {
        return view('index');
    }
}
