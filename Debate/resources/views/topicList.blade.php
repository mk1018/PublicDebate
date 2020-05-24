@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-left">
                @foreach ($topics as $topic)
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <div class="card-header">
                            <img src="/storage/logo.png">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $topic->title }}</h5>
                            <p class="card-text">{{ $topic->content }}</p>
                            <form method="GET" action="discuss" class="form-inline m-1">
                                <input type="hidden" name="topic_no" value="{{ $topic->topic_no }}">
                                <button type="submit" class="btn btn-primary col-md-6">部屋へ移動する</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
@endsection
