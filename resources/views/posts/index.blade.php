@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <div class="container">
            <div class="sidebar">
                <div class="sidebar_fixed">
                    <h2 class="tagtop">Tag</h2>
                    <div class="tag">
                        <a class="tagmenu" href="">＃目標</a>
                    </div>
                    <div class="tag">
                        <a class="tagmenu" href="">＃練習</a>
                    </div>
                    <div class="tag">
                        <a class="tagmenu" href="">＃試合</a>
                    </div>
                    <div class="tag">
                        <a class="tagmenu" href="">＃フリー</a>
                    </div>
                    <a href="/posts/create">
                        <div class="contribution">
                            <p>投稿する +</p>
                        </div>
                    </a>
                    
                </div>
            </div>    
            <div class='posts'>
                @foreach($posts as $post)
                    <div class='post'>
                        <h2 class='title'>
                            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                        </h2>
                        <p class='body'>{{ $post->free }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection