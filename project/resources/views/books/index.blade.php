@extends('layouts.main')
@section('css')
    <link rel="stylesheet" href="{{asset("css/book-list.css")}}">
@endsection
@section('content')
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">{{__('message.List Book')}}</h1>
            <p class="lead text-muted"> </p>
            <p>
                <a href={{"books/create"}} class="btn btn-primary my-2">{{__('message.Create New Book')}}</a>
            </p>
        </div>
    </section>
    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                @foreach($books as $book)


                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                     xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                                     focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>
                                        {{$book->name}}</title>
                                    <rect fill="#55595c" width="100%" height="100%"/>
                                    <text fill="#eceeef" dy=".3em" x="50%" y="50%"> </text>
                                </svg>
                                <div class="card-body">
                                    <p class="card-text">{{$book->name}}</p>
                                    <p class="card-text">{{$book->user->name}}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href={{"/books/".$book->id}} type="button" class="btn btn-sm btn-outline-secondary">{{__('message.View Details')}}</a>
                                        </div>
                                        <div class="btn-group">
                                            <a href={{"/books/".$book->id."/edit"}} type="button" class="btn btn-sm btn-outline-secondary">{{__('message.Edit')}}</a>
                                        </div>
                                        <small class="text-muted">{{$book->price}}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
