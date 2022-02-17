@extends('layouts.app')

@section('content')
<!-- body内だけを表示しています。 -->
<body>
    <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>Title</h2>
                <input type='text' name='post[title]' value="{{ $post->title }}">
            </div>
            <div class='content__body'>
                <h2>free</h2>
                <input type='text' name='post[free]' value="{{ $post->free }}">
            </div>
            <input type="submit" value="保存">
        </form>
    </div>
</body>

@endsection