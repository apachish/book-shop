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
    <p>
        <label>{{__('message.The registrant')}}</label> :{{$book->user->name}}
    </p>
    <p>
        <label>{{__('message.Categories')}}</label> :
        @foreach($book->categories as $categoy)
            <em>
                {{$categoy->name.','}}
            </em>
        @endforeach
    </p>
    <p>
        <label>{{__('message.Authors')}}</label> :

        @foreach($book->authors as $author)
            <em>
                {{$author->name.','}}
            </em>
        @endforeach
    </p>
@endsection