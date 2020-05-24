@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="row justify-content-center">
                Twitterのつぶやき画像
            </div>
        </div>
        <br />
        <div class="row col-md-12">
            <div class="col-md-4" ><div class="card text-white bg-primary"><div class="card-header text-center">賛成</div></div></div>
            <div class="col-md-4" ><div class="card bg-light"             ><div class="card-header text-center">モデレーター</div></div></div>
            <div class="col-md-4" ><div class="card text-white bg-danger" ><div class="card-header text-center">反対</div></div></div>
        </div>
        <br>
        @foreach ($discussion as $discuss)
            <div class="row col-md-12">
            @if($discuss->faction === 'agree')
                <div class="col-md-4" >
                <div class="card text-white bg-primary">
            @elseif($discuss->faction === 'opposition')
                <div class="col-md-4 ml-auto" >
                <div class="card text-white bg-danger">
            @else
                <div class="col-md-4 offset-4" >
                <div class="card bg-light">
            @endif
                        <div class="card-header">{{ $discuss->discuss_id }}</div>
                        <div class="card-body">  {{ $discuss->text }}    </div>
                    </div>
                </div>
            </div>
        <br />
        @endforeach
    </div>
@endsection
