@extends('layouts.app_admin')


@section('content')

<div class="row justify-content-center">
    <div class="col-12 col-sm-8">
        <article class="card" style="width: auto;max-width:600px;" id="${event.currentTarget.dataset.id}">
        <img class="card-img-top" src="{{ $star->photo }}" alt="${event.currentTarget.dataset.firstname} ${event.currentTarget.dataset.lastname}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{ $star->firstname }} {{ $star->lastname }}</h5>
            <p class="card-text">{{ $star->description }}</p>
        </div>
        </article>
    </div>
</div>
<div class="mt-3">
<div class="row justify-content-center">
        <div class="col-12 col-sm-8">
                <form action="{{ route('stars.destroy',$star->id) }}" method="POST" >
                <div class="d-flex align-items-center">
                <a href="{{ route('stars.index') }}" class="btn btn-primary mr-3">blog</a>
                <a href="{{ route('stars.edit', $star->id) }}" class="btn btn-info text-white mr-3">modifier</a>

                            @csrf
                            @method('DELETE')

                <button type="submit" class="btn btn-danger" onclick="return confirm('Sure Want Delete?')">supprimer</button>
                </div>
            </form>
        </div>
    </div>
</div>



@endsection