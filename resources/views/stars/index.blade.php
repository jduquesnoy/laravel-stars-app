@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>STAR BLOG</h1>
    </div>
    <div class="row">
        <div class="col-12 col-md-4">
            <ul class="list-group">
            @foreach ($stars as $star)
                <li><div class="list-group-item" data-id="{{$star->id}}"
                      data-firstname="{{ $star->firstname }}" data-lastname="{{ $star->lastname }}" data-description="{{ $star->description }}" data-photo="{{ $star->photo }}">{{ $star->firstname }} {{ $star->lastname }}</div></li>      
            @endforeach
            </ul>
        </div>
    </div>
</div>
                         

@endsection