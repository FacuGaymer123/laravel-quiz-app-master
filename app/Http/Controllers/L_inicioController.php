<?php

namespace App\Http\Controllers;
use App\Models\Option;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class L_inicioController extends Controller
{
    public function index()
    {

        $categories = Category::all();
           

        return view('client.l_inicio', compact('categories'));
    }
}

