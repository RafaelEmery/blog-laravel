<?php

namespace App\Http\Controllers\Sistema;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index() 
    {
        return redirect(route('sistema.posts.index'))->with('success', 'Bem vindo ao Admin do Rafa Talks!');
    }
}
