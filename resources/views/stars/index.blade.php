@extends('layouts.app_admin')

@section('content')
    <div class="row">
        <nav class="col-12 col-md-4">
            <ul class="list-group">
            @foreach ($stars as $star)
                <li><div class="list-group-item" data-id="{{$star->id}}" data-star="{{$star}}"
                data-firstname="{{ $star->firstname }}" data-lastname="{{ $star->lastname }}" data-description="{{ $star->description }}" data-photo="{{ $star->photo }}">{{ $star->firstname }} {{ $star->lastname }}</div></li>      
            @endforeach
            </ul>
        </nav>
    </div>                       
@endsection