@include('partials.about')
@include('partials.help')
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm d-print-none">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                @can('admin')
                    {{--  --}}
                @elsecan('')
                    {{--  --}}
                @endcan
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#about">
                   <b>О программе</b>
                </button>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#help">
                   <b>Помощь</b>
                </button>
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        {{-- <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a> --}}
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            {{-- <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> --}}
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
{{--                             <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">{{ __('Logout') }}</button>
                            </form> --}}
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
