@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-left">
            @foreach ($topics as $topic)
            <div class="col-md-4 mb-2">
                <div class="card">
                    <div class="card-header">{{ $topic->id }}</div>
                    <div class="card-body">
                        {{ $topic->content }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
