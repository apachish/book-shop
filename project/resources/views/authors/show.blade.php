@extends('layouts.main')
@section('content')
    <h3>
        {{$author->name}}
    </h3>
    <p>
        <label>{{__('message.BirthDay')}}</label> :{{$author->birthDate}}
    </p>
@endsection