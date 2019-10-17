@extends('layouts.app')

@section('content')
    <div class="columns m-1">
        <div class="column is-3"></div>
        <div class="column is-6">
            <div class="card">
                <div class="card-content">
                    <h5 class="subtitle is-5">{{ __('Please confirm your password before continuing.') }}</h5>

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="field">
                            <div class="control">
                                <input id="password" type="password"
                                       class="input @error('password') is-danger @enderror" name="password"
                                       placeholder="הסיסמה הנוכחית שלכם" required autocomplete="current-password">
                            </div>
                        </div>
                        @error('password')
                        <span class="help is-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror


                        <div class="buttons">
                            <button type="submit"
                                    class="button is-info is-outlined is-fullwidth">{{ __('Confirm Password') }}</button>

                            @if (Route::has('password.request'))
                                <a class="button is-link is-fullwidth" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif</div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
