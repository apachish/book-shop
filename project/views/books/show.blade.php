@extends('layouts.main')
@section('content')
    <h3>
        {{$book->name}}
    </h3>
    <p>
        <label>{{__('message.Pages')}}</label> :{{$book->pages}}
    </p>
    <p>
        <label>{{__('message.ISBN')}}</label> :{{$book->ISBN}}
    </p>
    <p>
        <label>{{__('message.Price')}}</label> :{{$book->price}}
    </p>
    <p>
        <label>{{__('message.Published At')}}</label> :{{$book->published_at}}
    </p>
@endsection