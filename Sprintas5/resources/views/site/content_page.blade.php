<section>
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
                            <a href="{{ route('home') }}"
                                class="contact_btn">Atgal</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>