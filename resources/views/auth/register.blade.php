@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="display: flex; flex-direction: row">
        <div class="col-md-8" style="width: 100%">
            <div class="card" style="display: flex; justify-content: center; align-items: center; text-align: left; flex-direction: column; width: 100%; padding: 15px">
                <div class="card-header card-header-title mb-5"><h2 style="font-size: large; font-weight: bold">{{ __('Register') }}</h2></div>

                <div class="card-body" style="width: 100%">
                    <form method="POST" action="{{ route('register') }}" >
                        @csrf

                        <div class="row mb-3" >
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control input @error('name') is-invalid @enderror"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 fullwidth">
                            <label for="role" class="col-md-4 col-form-label text-md-end">{{ __('User Role') }}</label>

                            <div class="col-md-6">
                                <select id="user_role" class="form-control input select @error('email') is-invalid @enderror" name="user_role" value="{{ old('user_role') }}" required>
                                    <option>Student</option>
                                    <option>Instructor</option>
                                </select>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control input" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="button" style="background: #808000; color: white">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
        <div class="col ml-lg-5 mt-lg-5">
            <img src="{{ asset('/images/register.jpg') }}" style="width: 75%; margin: 40px 0px 0px 120px" />
        </div>
    </div>
</div>
@endsection
