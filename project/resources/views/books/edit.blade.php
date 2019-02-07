@extends('layouts.main')
@section('content')
    <div class="card m-5">
        <div class="card-body">
            <div class="card-title">
                <h5>{{__('message.update Book')}}</h5>
            </div>
                <form method="post" action="{{route('books.update',['id'=>$book->id])}}">
                {{csrf_field()}}
                @method('PATCH')

                <div class="form-group">
                    <label for="name">{{__('message.Name')}}</label>
                    <input type="text" class="form-control" id="name" value="{{$book->name}}" name="name" placeholder="{{__('message.Enter Name')}}">
                </div>
                <div class="form-group">
                    <label for="description">{{__('message.Pages')}}</label>
                    <input type="number" class="form-control" id="pages" value="{{$book->pages}}" name="pages" placeholder="{{__('message.Enter Pages')}}">
                </div>
                <div class="form-group">
                    <label for="price">{{__('message.ISBN')}}</label>
                    <input type="text" class="form-control" id="ISBN" name="ISBN"  value="{{$book->ISBN}}" placeholder="{{__('message.Enter ISBN')}}">
                </div>
                <div class="form-group">
                    <label for="price">{{__('message.Price')}}</label>
                    <input type="number" class="form-control" id="price" name="price"  value="{{$book->price}}" placeholder="{{__('message.Enter Price')}}">
                </div>
                <div class="form-group">
                    <label for="weight">{{__('message.Published At')}}</label>
                    <input type="date" class="form-control" id="published_at" name="published_at" value="{{$book->published_at}}"  placeholder="{{__('message.Enter Published At')}}">
                </div>
                <div class="form-group">
                    <label for="category">{{__('message.Categories')}}</label>
                    <select class="form-control" name="category_id[]" id="category" multiple>
                        @foreach($categories as $category)
                            <option {{$book->categories->contains('id',$category->id) ? 'selected': ''}}
                                    value="{{$category->id}}" >
                                {{$category->name}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="author">{{__('message.Authors')}}</label>
                    <select class="form-control" name="author_id[]" id="author" multiple>
                        @foreach($authors as $author)
                            <option {{$book->authors->contains('id',$author->id) ? 'selected': ''}}
                                    value="{{$author->id}}" >
                                {{$author->name}}
                            </option>
                        @endforeach
                    </select>
                </div>
                @include('books.error')
                <button type="submit" class="btn btn-success">{{__('message.update')}}</button>
            </form>
        </div>
    </div>
@endsection
