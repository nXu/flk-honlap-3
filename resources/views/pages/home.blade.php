@extends('app')

@section('slider')
    <section id="slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/img/gun-1.jpg" alt="Légfegyveres lövészet">
                <div class="carousel-caption">
                    <h2>Sportlövészet <br>
                        Kicsiknek és nagyoknak
                    </h2>
                </div>
            </div>
            {{--<div class="item">--}}
                {{--<img src="/img/gun-2.jpg" alt="Sportlövészet">--}}
                {{--<div class="carousel-caption">--}}
                    {{--<h2>Sportlövészet</h2>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="item">--}}
                {{--<img src="/img/gun-3.jpg" alt="Íjászat">--}}
                {{--<div class="carousel-caption">--}}
                    {{--<h2>Íjászat</h2>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </section>

    <div id="cta-container">
        <button id="contact-cta" class="btn">
            <i class="fa fa-fw fa-envelope-o"></i> Érdeklődöm
        </button>
    </div>
@endsection

@section('content')
    <div class="container" id="home">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="text-center">Próbáld ki magad!</h2>
            </div>
        </div>

        <div class="row text-center" id="home--services">
            <div class="col-xs-12 col-sm-4">
                <img src="/img/airgun_small.jpg" alt="Légfegyveres lövészet">
                <h3>Légfegyveres lövészet</h3>
                <p>Lövészet légfegyverekkel 10m-es távon <br> Légpuska, légpisztoly</p>
            </div>

            <div class="col-xs-12 col-sm-4">
                <img src="/img/gun_small.jpg" alt="Sportlövészet">
                <h3>Sportlövészet</h3>
                <p>Sportlövészet kiskaliberű fegyverekkel <br> Sportpisztoly 25m-es távon, sportpuska 50m-en</p>
            </div>

            <div class="col-xs-12 col-sm-4">
                <img src="/img/archery_small.jpg" alt="Tradícionális íjászat">
                <h3>Tradícionális íjászat</h3>
                <p>Hagyományőrző íjászat <br> Kicsiknek és nagyoknak egyaránt</p>
            </div>
        </div>


        <hr>

        <div id="edzes-info" class="text-center">
            <h4>Edzések minden szombaton!</h4>
        </div>

        <hr>

        <div class="row">
            <div class="col-xs-12">
                <h2 class="text-center">Híreink</h2>
            </div>
        </div>

        <div class="row">
            @foreach($news as $article)
                <article class="col-xs-12 col-sm-4">
                    <a href="/hirek/{{ $article->slug }}"><h1>{{ $article->title }}</h1></a>
                    <time datetime="{{ $article->published_at->format('Y-m-d') }}">
                        {{ $article->publication->format('Y. F j.') }}
                    </time>

                    <p class="intro">
                        {{ str_limit($article->lead, 250) }}
                        <br>
                        <a href="/hirek/{{ $article->slug }}">Tovább &raquo;</a>
                    </p>
                </article>
            @endforeach
        </div>
    </div>
@endsection
