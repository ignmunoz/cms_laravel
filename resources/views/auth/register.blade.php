@extends('layouts.app')

@section('content')

<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-30">
        <div class="card">
            <div class="card-content">
                <h1 class="title">Register</h1>

                <form action="{{route('register')}}" method="POST" role="form">
                    {{csrf_field()}}
                    <div class="field">
                        <label for="name" class="label">Name</label>
                        <p class="control">
                            <input type="text" class="input {{$errors->has('name') ? 'is-danger' : ''}}" name="name" id="name" placeholder="Name" value="{{old('name')}}" required></p>
                        @if ($errors->has('name'))
                            <p class="help is-danger">{{$errors->first('name')}}</p>
                        @endif
                    </div>

                    <div class="field">
                        <label for="email" class="label">Email Address</label>
                        <p class="control">
                            <input type="text" class="input {{$errors->has('email') ? 'is-danger' : ''}}" name="email" value="{{old('email')}}" required></p>
                        @if ($errors->has('email'))
                            <p class="help is-danger">{{$errors->first('email')}}</p>
                        @endif
                    </div>
                    <div class="columns">
                        <div class="column">
                            <div class="field">
                                <label for="password" class="label">Password</label>
                                <p class="control">
                                    <input type="password" class="input {{$errors->has('password') ? 'is-danger' : ''}}" name="password" id="password" required>
                                </p>
                                @if ($errors->has('password'))
                                    <p class="help is-danger">{{$errors->first('password')}}</p>
                                @endif
                            </div>
                        </div>

                        <div class="column">
                            <div class="field">
                                <label for="password_comfirmation" class="label">Confirm Password</label>
                                <p class="control">
                                    <input type="password" class="input {{$errors->has('password_comfirmation') ? 'is-danger' : ''}}" name="password_comfirmation" id="password_comfirmation" required>
                                </p>
                                @if ($errors->has('password_confirmation'))
                                    <p class="help is-danger">{{$errors->first('password_confirmation')}}</p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <button class="button is-success is-outlined is-fullwidth m-t-30">Log In</button>
                </form>
            </div> <!-- end of .card-content -->
        </div>
        <h5 class="has-text-centered m-t-20"><a href="{{route('home')}}" class="is-muted">Already have an Account</a></h5>
    </div>
</div>

@endsection
