@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="row justify-content-center">
                Twitterのつぶやき画像
            </div>
        </div>
        <br />
        <?php $count=0; ?>
        @foreach ($discussion as $discuss)
        <div calss="row">
            @if($count  % 2 === 0)
            <div class="col-md-10 mb-10" style="float: left;">
            @else
            <div class="col-md-10 mb-10" style="float: right;">
            @endif
               <div class="card">
                    <div class="card-header">{{ $discuss->topic_no }}</div>
                    <div class="card-body">  {{ $discuss->text }}    </div>
                </div>
            </div>
        </div>
        <br />
        <?php $count++; ?>
        @endforeach
    </div>
@endsection
