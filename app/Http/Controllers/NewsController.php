<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNewsRequest;
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
        return view('news/create');
    }

    public function store(CreateNewsRequest $request)
    {
        //dd($request->validated());
        $title = $request->input('title');
        $text = $request->input('text');
        $data = $request->path();
        
        $str = $title . ' ' . $text;
        //dd($str);
        file_put_contents(storage_path('app/public/db.txt'), $str, FILE_APPEND);

        return redirect()->route('index');
    }
}
