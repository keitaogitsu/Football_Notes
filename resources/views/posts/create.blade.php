@extends('layouts.app')

@section('content')
    <form action="/posts" method="POST">
        @csrf
        <div class="title">
            <h2>Title</h2>
            <input type="text" name="post[title]" placeholder="タイトル"/>
        </div>
        <div class="free">
            <h2>Free</h2>
            <textarea name="post[free]" placeholder="フリー"></textarea>
        </div>
        <input type="submit" value="保存"/>
    </form>
    <div class="back">[<a href="/">戻る</a>]</div>

@endsection