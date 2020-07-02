<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return __METHOD__;
    }

    public function all()
    {
        return __METHOD__;
    }

    public function one($id)
    {
        return __METHOD__ . ' Новость номер: ' . $id;
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
