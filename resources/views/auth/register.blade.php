@extends('layouts.master')

@section('content')
    <div class="container mt-16 min-h-screen">
        <div class="columns max-w-md mx-auto">
            <div class="column is-quater">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="field">
                      <label class="label">{{ __('Your Name') }}</label>
                      <div class="control">
                        <input id="name" type="text" placeholder="Name" class="input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="email">
                        @error('name')
                            <span>
                                <strong class="help is-danger">{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="field">
                      <label class="label">{{ __('E-Mail Address') }}</label>
                      <div class="control">
                        <input id="email" type="email" placeholder="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span>
                                <strong class="help is-danger">{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="field">
                        <label for="password" class="label">{{ __('Password') }}</label>

                        <div class="control">
                            <input placeholder="password" id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span role="alert">
                                    <strong class="help is-danger">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="field">
                        <label for="password-confirm" class="label">{{ __('Confirm Password') }}</label>

                        <div class="control">
                            <input placeholder="confirm password" id="password-confirm" type="password" class="input" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <button type="submit" class="button is-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


