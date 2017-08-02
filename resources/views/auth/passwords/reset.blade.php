@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="notification is-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="columns m-b-10">
        <div class="column is-one-third is-offset-one-third m-t-100">
            <div class="card">

                <div class="card-content">
                    <h1 class="title">Reset Your Password</h1>
                    <form action="{{ route('register') }}" method="POST" role="form">
                        {{ csrf_field() }}
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="field">
                            <label for="email" class="label">Email Address</label>
                            <p class="control">
                                <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="text"
                                       name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}"
                                       required>
                            </p>
                            @if($errors->has('email'))
                                <p class="help is-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                        <div class="field">
                            <label for="password" class="label">Password</label>
                            <p class="control">
                                <input class="input {{ $errors->has('password') ? 'is-danger' : '' }}" type="password"
                                       name="password" id="password" required>
                            </p>
                            @if($errors->has('password'))
                                <p class="help is-danger">{{ $errors->first('password') }}</p>
                            @endif
                        </div>
                        <div class="field">
                            <label for="password_confirmation" class="label">Password Confirmation</label>
                            <p class="control">
                                <input class="input {{ $errors->has('password_confirmation') ? 'is-danger' : '' }}"
                                       type="password_confirmation" name="password_confirmation"
                                       id="password_confirmation" required>
                            </p>
                            @if($errors->has('password_confirmation'))
                                <p class="help is-success">{{$errors->first('password_confirmation')}}</p>
                            @endif
                        </div>

                        <button class="button is-primary is-outlined is-fullwidth m-t-30">Reset Password</button>
                    </form>
                </div>{{-- End of card-content--}}
            </div> {{-- End of Card--}}
            <h5 class="has-text-centered m-t-10"><a href="{{ route('login') }}" class="is-muted">Already have an
                    Account?</a></h5>
        </div>
    </div>

@endsection
