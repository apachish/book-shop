@extends('layouts.main')
@section('content')
    <div class="card m-5">
        <div class="card-body">
            <div class="card-title">
                <h5>{{__('message.create Category')}}</h5>
            </div>
            <form method="post" action="{{route('categories.store')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">{{__('message.Name')}}</label>
                    <input type="text" class="form-control" id="name" value="{{old('name')}}" name="name" placeholder="{{__('message.Enter Name')}}">
                </div>
                @include('categories.error')
                <button type="submit" class="btn btn-success">{{__('message.send')}}</button>
            </form>
        </div>
    </div>
@endsection
