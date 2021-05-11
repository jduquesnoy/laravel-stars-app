@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit star</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('stars.index') }}"> retour au BLOG</a>
            </div>
        </div>
    </div>

    <form action="{{ route('stars.update', $star->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>firstname:</strong>
                    <input type="text" name="firstname" value="{{ $star->firstname }}" class="form-control" placeholder="firstname">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>lastname:</strong>
                    <input type="text" name="lastname" value="{{ $star->lastname }}" class="form-control" placeholder="lastname">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>description:</strong>
                    <input type="text" name="description" value="{{ $star->description }}" class="form-control" placeholder="description">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>photo:</strong>
                    <input type="text" name="photo" value="{{ $star->photo }}" class="form-control" placeholder="photo">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Soumettre</button>
            </div>
        </div>

    </form>
@endsection
