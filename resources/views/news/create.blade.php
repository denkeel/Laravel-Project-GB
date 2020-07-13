@extends('layouts/app')
@section('content')
<div class="col-md-8 blog-main">
    <h2 class="blog-post-title">Добавление новости</h2>
    <br>
    <form method="post" action="{{ route('news/store') }}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Заголовок статьи</label>
            <input type="text" class="form-control" name="title" value="{{ old('title') }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Содержание</label>
            <textarea type="text" class="form-control" name="text" id="exampleInputPassword1" placeholder="">{{ old('text') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
</div>
@endsection