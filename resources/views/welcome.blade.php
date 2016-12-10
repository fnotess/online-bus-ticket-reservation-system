@extends('layouts.master')

@section('title')
    onlline bus tickets!!!

@endsection

@section('content')
    {{--@include('includes.message-block')--}}
    @if(count($errors)>0)
        <div class="row">
            <div class="col-md-6">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-md-5">
            <h3>sign up</h3>
            <form action="{{route('signup')}}" method="post">
                <div class="form-group {{$errors->has('ID') ? 'has-error' : ''}}">
                    <label for="ID">your ID</label>
                    <input class="form-control" type="text" name="email" id="ID" value="{{Request::old('ID')}}">
                </div>

                <div class="form-group {{$errors->has('first_name') ? 'has-error' : ''}}">
                    <label for="first_name">your first name</label>
                    <input class="form-control" type="text" name="first_name" id="first_name" value="{{Request::old('first_name')}}">
                </div>

                <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                    <label for="password">your password</label>
                    <input class="form-control" type="text" name="password" id="password" >
                </div>


                <button type="submit" class="btn btn-primary">submit </button>
                <input type="hidden" name="_token" value="{{Session::token()}}">
            </form>

        </div>

        <div class="col-md-4">
            <h3>sign in</h3>
            <form action="{{route('signin')}}" method="post">
                <div class="form-group {{$errors->has('ID') ? 'has-error' : ''}}">
                    <label for="ID">your ID</label>
                    <input class="form-control" type="text" name="ID" id="ID" value="{{Request::old('ID')}}">
                </div>


                <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                    <label for="password">your password</label>
                    <input class="form-control" type="text" name="password" id="password" >
                </div>


                <button type="submit" class="btn btn-primary">submit </button>
                <input type="hidden" name="_token" value="{{Session::token()}}">
            </form>

        </div>




    </div>


@endsection
