@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-left">
                @foreach ($topics as $topic)
                <form method="GET" action="discuss" class="form-inline m-1">
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <div class="card-header">
                            <input type="hidden" name="topic_no" value="{{ $topic->topic_no }}">
                            <button type="submit" class="btn btn-primary col-md-6">部屋へ移動する</button>
                        </div>
                        <div class="card-body">
                            {{ $topic->content }}
                        </div>
                    </div>
                </div>
                </form>
                @endforeach
        </div>
    </div>
@endsection
