@extends('master')
@section('content')
    <div class="content">
        
        <h3>SPORTS <span>EVENTS</span></h3>
        <ul class="movies">
            @php
                $events = App\Models\Event::all();
            @endphp
            @foreach ($events as $item)
                <li>
                    <a href="{{ url('event/' . $item->name . '/' . $item->id) }}">
                        <h4>{{ $item->name }}</h4>
                        <img src="images/1page-img2.jpg" alt="" />
                    </a>
                    <p class="text-white">{{ $item->description }}</p>
                    <div class="wrapper"></div>

                </li>
            @endforeach



            <li class="clear">&nbsp;</li>
        </ul>
    </div>
    <div id="slogan">

        <div class="mx-5 px-5">
            <h2 class="mx-5 px-5">Welcome to Sports Stream Live!<span>Your Premier Destination for Live
                    Sports Streaming</span></h2>
            <p>At SportsStream Live, we bring the excitement of live sports right to your screen.
                Whether you're a fan of football, basketball, soccer, tennis, or any other sport, we've
                got you covered with high-quality streams of your favorite games. Our platform is
                designed for sports enthusiasts who want to experience the thrill of live action,
                anywhere, anytime.</p>

        </div>
    </div>
@endsection
