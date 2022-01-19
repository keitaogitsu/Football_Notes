@extends('layouts.app')

@section('content')
    <div class="post">
        <h1 class="title">{{ $post->title }}</h1>
        <div class="content">
            <div class="content__post">
                <p>{{ $post->free }}</p>
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
            <p class="edit">[<a href="/posts/{{ $post->id }}/edit">編集</a>]</p>
            <form action="/posts/{{ $post->id }}" id="form" method="post" style="display:inline">
                @csrf
                @method('DELETE')
                <span onclick="Check(this);"><i class="fa fa-trash" aria-hidden="true"></i></span> 
                <script type="text/javascript">
                    function Check(e){
                        let checked = confirm("削除しますか？");
                        if (checked==true) {
                            document.getElementById("form").submit();
                        } else if (checked==false) {
                            console.log('false if is executed');

                            return false;
                        }
                    }
                </script>
            </form>
        </div>
    </div>

@endsection