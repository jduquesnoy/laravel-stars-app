@extends('layouts.app')

@section('content')
        @foreach ($stars as $star)
            <tr>
                <td>{{ $star->firstname }}</td>
                <td>{{ $star->lastname }}</td>
                <td>{{ $star->description }}</td>
                <td>{{ $star->photo }}</td>
            </tr>
        @endforeach
    </table>


@endsection