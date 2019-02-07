@extends('layouts.main')
@section('content')
    <div class="card m-5">
        <div class="card-body">
            <div class="card-title">
                <h5>{{__('message.create Book')}}</h5>
            </div>
            <form method="post" action="{{route('books.store')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">{{__('message.Name')}}</label>
                    <input type="text" class="form-control" id="name" value="{{old('name')}}" name="name" placeholder="{{__('message.Enter Name')}}">
                </div>
                <div class="form-group">
                    <label for="description">{{__('message.Pages')}}</label>
                    <input type="number" class="form-control" id="pages" value="{{old('pages')}}" name="pages" placeholder="{{__('message.Enter Pages')}}">
                </div>
                <div class="form-group">
                    <label for="price">{{__('message.ISBN')}}</label>
                    <input type="text" class="form-control" id="ISBN" name="ISBN"  value="{{old('ISBN')}}" placeholder="{{__('message.Enter ISBN')}}">
                </div>
                <div class="form-group">
                    <label for="price">{{__('message.Price')}}</label>
                    <input type="number" class="form-control" id="price" name="price"  value="{{old('price')}}" placeholder="{{__('message.Enter Price')}}">
                </div>
                <div class="form-group">
                    <label for="weight">{{__('message.Published At')}}</label>
                    <input type="date" class="form-control" id="published_at" name="published_at" value="{{old('published_at')}}"  placeholder="{{__('message.Enter Published At')}}">
                </div>
                @include('books.error')
                <button type="submit" class="btn btn-success">{{__('message.send')}}</button>
            </form>
        </div>
    </div>
@endsection
