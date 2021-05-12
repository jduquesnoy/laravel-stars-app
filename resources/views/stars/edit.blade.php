@extends('layouts.app_admin')

@section('content')
    <div class="row">
        <div class="col-lg-6 margin-tb">
            <div class="pull-left">
                <h2>modifier la fiche star</h2>
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
            <div class="col-xs-12 col-sm-12 col-md-8">
                <div class="form-group">
                    <strong>firstname:</strong>
                    <input type="text" name="firstname" value="{{ $star->firstname }}" class="form-control" placeholder="firstname">
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <div class="form-group">
                        <strong>lastname:</strong>
                        <input type="text" name="lastname" value="{{ $star->lastname }}" class="form-control" placeholder="lastname">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <div class="form-group">
                        <strong>description:</strong>
                        <input type="text" name="description" value="{{ $star->description }}" class="form-control" placeholder="description">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <div class="form-group">
                        <strong>photo:</strong>
                        <input type="text" name="photo" value="{{ $star->photo }}" class="form-control" placeholder="photo">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 text-center">
                    <button type="submit" class="btn btn-primary">Soumettre</button>
                </div>
            </div>

    </form>
@endsection
