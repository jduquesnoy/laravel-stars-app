@extends('layouts.app')


@section('content')
            <tr>
                <td>{{ $star->firstname }}</td>
                <td>{{ $star->lastname }}</td>
                <td>{{ $star->description }}</td>
                <td>{{ $star->photo }}</td>
            </tr>
@endsection