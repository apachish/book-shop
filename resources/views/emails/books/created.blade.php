@extends('emails.layouts.app')
@section('content')
    Hi {{$user->name}}
    your {{$book->name}} Successfully Created.
@endsection