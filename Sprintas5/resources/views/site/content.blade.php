@if(isset($pages) && is_object($pages))
@foreach($pages as $k=>$page)
@if($k%2 == 0)
<!--Hero_Section pradzia-->
<section id="home" class="top_cont_outer">
    <div class="hero_wrapper">
        <div class="container">
            <div class="hero_section">
                <div class="row">
                    <div class="col-lg-5 col-sm-7">
                        <div class="top_left_cont zoomIn wow animated">
                            {!! $page->text !!}
                            <a href="{{ route('page', array('alias'=>$page->alias)) }}" class="read_more2">Plačiau</a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-5">
                        {!! Html::image('img/'.$page->images) !!}
                        <!-- panaudojame laravelcollective sintakse -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Hero_Section pabaiga-->
@else

<!--Aboutus pradzia-->
<section id="aboutUs">
    <div class="inner_wrapper">
        <div class="container">
            <h2>{{ $page->name }}</h2> <!-- dinamiskai pasiimame irasus is db -->
            <div class="inner_section">
                <div class="row">
                    <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
                        {!! Html::image('img/'.$page->images, '', array('class'=>'delay-03s animated wow zoomIn')) !!}
                    </div>
                    <div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
                        <div class=" delay-01s animated fadeInDown wow animated">
                            {!! $page->text !!}
                            <!-- panaudojame laravelcollective sintakse pasiimdami duomenis is db-->
                        </div>
                        <div class="work_bottom">
                            <span>Norite sužinoti daugiau?</span> <a
                                href="{{ route('page', array('alias'=>$page->alias)) }}"
                                class="contact_btn">Plačiau</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Aboutus pabaiga-->
@endif
@endforeach
@endif

@if(isset($services) && is_object($services))
<!--Service pradzia-->
<section id="service">
    <div class="container">
        <h2>Paslaugos</h2>
        <div class="service_wrapper">

            @foreach($services as $k=>$service)
            @if($k == 0 || $k%3 == 0)
            <!-- apsirasome salyga, kuri rodo, kad formuojame 3 dinaminiu elementu rinkiniu eile -->
            <div class="row {{ ($k !=0) ? 'borderTop':'' }}">
                <!-- pirmai eilei pabraukimo virsuje nereikia -->
                @endif
                <div class="col-lg-4 {{ ($k%3 >0) ? 'borderLeft':'' }} {{ ($k>2)? 'mrgTop' : '' }}">
                    <!-- jei elementas nera pirmasis naudojame pabraukima is kaires; jei dinamiskai perduodamo elemento indeksas didesnis uz 2 (t.y. 4 ir toliau irasas) pridedame papildoma margin parametra-->
                    <div class="service_block">
                        <div class="service_icon delay-03s animated wow  zoomIn">
                            <span><i class="fa {{ $service->icon }}"></i></span>
                        </div>
                        <h3 class="animated fadeInUp wow">{{ $service->name }}</h3>
                        <p class="animated fadeInDown wow">{{ $service->text }}</p>
                    </div>
                </div>
                @if(($k+1)%3 == 0)
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>
<!--Service pabaiga-->
@endif




@if(isset($portfolios) && is_object($portfolios))
<!-- Portfolio pradzia-->
<section id="Portfolio" class="content">

    <!-- Container pradzia-->
    <div class="container portfolio_title">

        <!-- Title pradzia-->
        <div class="section-title">
            <h2>Galimi sprendimų pavyzdžiai</h2>
        </div>
        <!--/Title pabaiga-->

    </div>
    <!-- Container pabaiga-->

    <div class="portfolio-top"></div>


    <div class="portfolio">
        <!-- Portfolio Filters pradzia-->
        @if(isset($tags))
        <div id="filters" class="sixteen columns">
            <ul class="clearfix">
                <li><a id="all" href="#" data-filter="*" class="active">
                        <h5>All</h5>
                    </a></li>
                @foreach($tags as $tag)
                <li>
                    <a class="" href="#" data-filter=".{{ $tag }}">
                        <h5>{{ $tag }}</h5>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        @endif
        <!--/Portfolio Filters pabaiga-->


        <!-- Portfolio Wrapper pradzia-->
        <div class="isotope fadeInLeft animated wow" style="position: relative; overflow: hidden; height: 480px;"
            id="portfolio_wrapper">
            @foreach($portfolios as $item)
            <!-- Portfolio Item pradzia-->
            <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
                class="portfolio-item one-four {{ $item->filter }} isotope-item">
                <div class="portfolio_img"> {{ Html::image('img/'.$item->images, $item->name) }} </div>
                <div class="item_overlay">
                    <div class="item_info">
                        <h4 class="project_name">{{ $item->name }}</h4>
                    </div>
                </div>
            </div>
            <!--/Portfolio Item pabaiga-->
            @endforeach
        </div>
        <!--/Portfolio Wrapper pabaiga-->
    </div>
    <!--/Portfolio Filters pabaiga-->
    <div class="portfolio_btm"></div>

    <div id="project_container">
        <div class="clear"></div>
        <div id="project_data"></div>
    </div>
</section>
<!--/Portfolio pabaiga -->
@endif


<!-- klientu dalis. uzkomentuojame, nes nenaudosime kol kas  -->
<!-- <section class="page_section" id="clients"> -->
<!--page_section-->
<!-- <h2>Clients</h2> -->
<!--page_section-->
<!-- <div class="client_logos"> -->
<!--client_logos-->
<!-- <div class="container"> -->
<!-- <ul class="fadeInRight animated wow"> -->
<!-- <li><a href="javascript:void(0)"><img src="{{ asset('img/client_logo1.png') }}" alt=""></a></li> -->
<!-- <li><a href="javascript:void(0)"><img src="{{ asset('img/client_logo2.png') }}" alt=""></a></li> -->
<!-- <li><a href="javascript:void(0)"><img src="{{ asset('img/client_logo3.png') }}" alt=""></a></li> -->
<!-- <li><a href="javascript:void(0)"><img src="{{ asset('img/client_logo4.png') }}" alt=""></a></li> -->
<!-- </ul> -->
<!-- </div> -->
<!-- </div> -->
<!-- </section> -->
<!--client_logos-->


@if(isset($peoples) && is_object($peoples))



@endif
<section class="page_section team" id="team">
    <!--main-section team-start-->
    <div class="container">
        <h2>Komanda</h2>
        <h6>Trys - viename!</h6>

        <div class="team_section clearfix">
            @foreach($peoples as $k=>$people)
            <div class="team_area">
                <div class="team_box wow fadeInDown delay-0{{ ($k*3 + 3) }}s">
                    <!-- <div class="team_box_shadow"><a href="javascript:void(0)"></a></div> --><!-- cia galime aktyvuoti lauka, kuriame pateikiame asmeninius kontaktus-->
                    {{ Html::image('img/'.$people->images, $people->name) }}
                    <!-- <ul>
                        <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
                        <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>
                        <li><a href="javascript:void(0)" class="fa fa-pinterest"></a></li>
                        <li><a href="javascript:void(0)" class="fa fa-google-plus"></a></li>
                    </ul> -->
                </div>
                <h3 class="wow fadeInDown delay-0{{ ($k*3 + 3) }}s">{{ $people->name }}</h3>
                <span class="wow fadeInDown delay-0{{ ($k*3 + 3) }}s">{{ $people->position}}</span>
                <p class="wow fadeInDown delay-0{{ ($k*3 + 3) }}s">{{ $people->text }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--/Team-->


<!--Footer-->
<footer class="footer_wrapper" id="contact">
    <div class="container">
        <section class="page_section contact" id="contact">
            <div class="contact_section">
                <h2>Susisiekite</h2>
                <div class="row">
                    <div class="col-lg-4">

                    </div>
                    <div class="col-lg-4">

                    </div>
                    <div class="col-lg-4">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 wow fadeInLeft">
                    <div class="contact_info">
                        <div class="detail">
                            <h4> D | SPACE</h4>
                            <p>Kaunas - Prienai - Alytus, LIETUVA</p>
                        </div>
                        <div class="detail">
                            <h4>Skambučiams</h4>
                            <p>+370 656 55455</p>
                        </div>
                        <div class="detail">
                            <h4>E-Paštas</h4>
                            <p>support@donatas.space</p>
                        </div>
                    </div>



                    <ul class="social_links">
                        <!-- <li class="twitter animated bounceIn wow delay-02s"><a href="javascript:void(0)"><i
                                    class="fa fa-twitter"></i></a></li> -->
                        <li class="facebook animated bounceIn wow delay-03s"><a href="https://www.facebook.com/kulvinskas" target="_blank"><i
                                    class="fa fa-facebook"></i></a></li>
                        <li class="pinterest animated bounceIn wow delay-04s"><a href="https://www.instagram.com/donatas.space/" target="_blank"><i
                                    class="fa fa-instagram"></i></a></li>
                        <!-- <li class="gplus animated bounceIn wow delay-05s"><a href="javascript:void(0)"><i
                                    class="fa fa-google-plus"></i></a></li> -->
                    </ul>
                </div>
                <div class="col-lg-8 wow fadeInLeft delay-06s">
                    <div class="form">

                    <form action="{{ route('home') }}" method="post">
                    
                        <input class="input-text" type="text" name="name" value="Jūsų Vardas *" onFocus="if(this.value==this.defaultValue)this.value='';"
                            onBlur="if(this.value=='')this.value=this.defaultValue;">
                        <input class="input-text" type="text" name="email" value="Jūsų el.p.adresas *"
                            onFocus="if(this.value==this.defaultValue)this.value='';"
                            onBlur="if(this.value=='')this.value=this.defaultValue;">
                        <textarea name="text" class="input-text text-area" cols="0" rows="0"
                            onFocus="if(this.value==this.defaultValue)this.value='';"
                            onBlur="if(this.value=='')this.value=this.defaultValue;">Jūsų žinutė *</textarea>
                        <input class="input-btn" type="submit" value="siųsti užklausą">
                        <!-- laravel apsauga sukuria hide tipo input'a su name=_token -->
                        {{ csrf_field()  }}
                    
                    </form>


                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="container">
        <div class="footer_bottom"><span>Visos teisės saugomos © 2020, Šablonas <a href="http://webthemez.com">WebThemez.com</a>.
            </span> </div>
    </div>
</footer>