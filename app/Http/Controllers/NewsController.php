<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('news/index', ['id' => 0]);
    }
    
    public function all()
    {
        return __METHOD__;
    }
    
    public function one($id)
    {
        return view('news/one', ['id' => $id]);
    }

    public function categories()
    {
        return __METHOD__;
    }
    
    public function showCategory($slug)
    {
        return __METHOD__ . ' Категория: ' . $slug;
    }

    public function add()
    {
        return __METHOD__;
    }
}
