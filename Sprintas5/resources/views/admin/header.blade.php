<div class="container portfolio_title">

    <!-- Title -->
    <div class="section-title">
        <h2>{{$title}}</h2>
    </div>
    <!--/Title -->

</div>
<!-- Container -->

<div class="portfolio">

    <div id="filters" class="sixteen columns">
        <ul style="padding:0px 0px 0px 0px">
            <li><a href="{{route('login')}}">
                    <h5 style="background:mediumseagreen; color:white">Logout zona</h5>
                </a>
            </li>
            <li><a href="{{route('pages')}}">
                    <h5>Puslapių redagavimas</h5>
                </a>
            </li>

            <li><a href="{{route('portfolio')}}">
                    <h5>Portfolio redagavimas</h5>
                </a>
            </li>

            <li><a href="{{route('services')}}">
                    <h5>Teikiamų paslaugų redagavimas</h5>
                </a>
            </li>
            <li><a href="{{route('home')}}" target="_blank">
                    <h5 style="background:#FB8122; color:white">Pereiti į donatas.space</h5>
                </a>
            </li>
        </ul>
    </div>

</div>