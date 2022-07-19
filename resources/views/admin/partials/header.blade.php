
<header>
    <section>

        <a href="#">
            <img src="{{asset('images/dc-logo.png')}}" alt="Logo Dc Comics">
        </a>
        <nav>
            <ul>
                @foreach (config('links') as $menuItem)

                <li><a class="{{(in_array(Route::currentRouteName(), $menuItem['id']) ) ? 'here' : '' }}" href="/{{$menuItem['id'][0]}}">{{ $menuItem['text'] }}</a></li>
                {{-- <li><a class="
                    @if (Route::currentRouteName() === $menuItem['id'])
                        here
                    @endif
                "
                href="/{{$menuItem['id']}}">{{ $menuItem['text'] }}</a></li> --}}
            @endforeach


            </ul>
        </nav>
    </section>
</header>
<section id="jumbo"></section>
