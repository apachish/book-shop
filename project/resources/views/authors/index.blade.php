@extends('layouts.main')
@section('content')

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">{{__('message.List Authors')}}</h1>
            <p class="lead text-muted"> </p>
            <p>
                <a href={{"authors/create"}} class="btn btn-primary my-2">{{__('message.Create New author')}}</a>
            </p>
        </div>
    </section>
    <main role="main" class="container">

        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <h6 class="border-bottom border-gray pb-2 mb-0">{{__('message.Authors')}}</h6>
            @foreach($authors as $author)

                <div class="media text-muted pt-3">
                    <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect fill="#007bff" width="100%" height="100%"></rect><text fill="#007bff" dy=".3em" x="50%" y="50%">32x32</text></svg>
                    <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <strong class="text-gray-dark">{{$author->name}}</strong>
                            <a href={{"/authors/".$author->id}} type="button" class="btn btn-sm btn-outline-secondary">{{__('message.View Details')}}</a>
                        </div>
                        <span class="d-block"></span>
                    </div>
                </div>
            @endforeach
            <small class="d-block text-right mt-3">
            </small>
        </div>
    </main>
@endsection













