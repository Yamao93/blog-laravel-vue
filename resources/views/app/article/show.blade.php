@extends('layouts.app')
@section('content')
    <div id="app">
        <article-component></article-component>
        <hr>
        <div class="row">
            <form action="">
                <div class="mb-3">
                    <label for="commentSubject" class="form-label">Тема комментария</label>
                    <input type="text" class="form-control" id="commentSubject">
                </div>
                <div class="mb-3">
                    <label for="commentBody" class="form-label">Комментарий</label>
                    <textarea rows="3" id="commentBody" class="form-control"></textarea>
                </div>
                <button class="btn btn-success" type="submit">Отправить</button>
            </form>
            <div class="toast-container pb-5 mt-5 mx-auto">
                @foreach($article->comments as $comment)
                    <div class="toast showing" style="width: 100%">
                        <div class="toast-header">
                            <img src="https://via.placeholder.com/50/5f113b/ffffff/?text=User" class="rounded me-2" alt="">
                            <strong class="me-auto">{{$comment->subject}}</strong>
                            <small class="text-muted">{{$comment->createdAtForHumans()}}</small>
                        </div>
                        <div class="toast-body">
                            {{$comment->body}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
@section('vue')
    <script src="{{mix('/js/app.js')}}"></script>
@endsection
