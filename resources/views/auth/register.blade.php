@extends('layouts.app')
@section('title','הרשמה - בלוג עם טעם טוב')
@section('css')
    <style>
        .hero.is-success {
            background: #F2F6FA;
        }
        .hero .nav, .hero.is-success .nav {
            box-shadow: none;
        }
        .box {
            margin-top: 5rem;
        }
        .avatar {
            margin-top: -70px;
            padding-bottom: 20px;
        }
        .avatar img {
            padding: 5px;
            background: #fff;
            border-radius: 50%;
            box-shadow: 0 2px 3px rgba(10,10,10,.1), 0 0 0 1px rgba(10,10,10,.1);
        }
        input {
            font-weight: 500;
        }
        .input {
            font-weight: 300;
            border-color: #311818;
            border-radius: 0;
        }
        p {
            font-weight: 700;
        }
        p.subtitle {
            padding-top: 1rem;
        }
    </style>
@endsection
@section('content')
    <section class="hero">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="columns is-centered">
                    <div class="column is-5">
                        <p class="subtitle has-text-grey">הרשמה לאתר בלוג עם טעם טוב</p>
                            <form class="login-form" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="field">
                                    <div class="control">
                                        <input class="input is-large @error('name') is-danger @enderror" type="text" name="name" id="name" placeholder="שם מלא"  value="{{ old('name') }}">
                                    </div>
                                    @if ($errors->has('name'))
                                        <p class="help is-danger">
                                            {{ $errors->first('name') }}
                                        </p>
                                    @endif
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <input class="input is-large @error('user_name') is-danger @enderror" type="text" name="user_name" id="user_name" placeholder="שם משתמש"  value="{{ old('user_name') }}">
                                    </div>
                                    @if ($errors->has('user_name'))
                                        <p class="help is-danger">
                                            {{ $errors->first('user_name') }}
                                        </p>
                                    @endif
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <input class="input is-large @error('email') is-danger @enderror" type="email" name="email" id="email" placeholder="דואר אלקטרוני"  value="{{ old('email') }}">
                                    </div>
                                    @if ($errors->has('email'))
                                        <p class="help is-danger">
                                            {{ $errors->first('email') }}
                                        </p>
                                    @endif
                                </div>

                                <div class="field">
                                    <div class="control">
                                        <input class="input is-large @error('password') is-danger @enderror" id="password" type="password" autocomplete="password" placeholder="סיסמה"  name="password">
                                    </div>
                                    @if ($errors->has('password'))
                                        <p class="help is-danger">
                                            {{ $errors->first('password') }}
                                        </p>
                                    @endif
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <input class="input is-large" id="password-confirm"  type="password" placeholder="אימות סיסמה" autocomplete="password_confirmation" name="password_confirmation">
                                    </div>
                                </div>
                                <button class="button is-block is-danger is-large is-fullwidth is-outlined" type="submit">הרשמה</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
