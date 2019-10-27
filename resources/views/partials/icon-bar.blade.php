<nav class="level mt05 mb03">
    <div class="level-item has-text-centered">
        <a href="{{route('home')}}"><img src="{{asset('storage/icons/tticonblackred.png')}}"></a>
    </div>
</nav>
@guest
<nav class="breadcrumb has-bullet-separator is-medium is-centered" aria-label="breadcrumbs" style="direction: ltr">
    <ul>
            <li><a href="{{ route('login') }}">התחברות</a></li>
            <li><a  href="{{ route('register') }}">הרשמה חינם</a></li>
    </ul>
</nav>
@endguest

@auth
<user-tabs :liked="{{$liked}}"></user-tabs>
@endauth
