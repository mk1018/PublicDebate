@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-left">
            @foreach ($discussion as $discuss)
            <div class="col-md-4 mb-2">
                <div class="card">
                    <div class="card-header">{{ $discuss->topic_no }}</div>
                    <div class="card-body">
                        {{ $discuss->text }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
