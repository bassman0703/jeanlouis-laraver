@extends('client.layout.master')


@section('title', 'Page Title')
@section('title', ' article-page')

@section('content')


        <div class="stickyBookingButton">
            <a href="https://reservations.jeanlouisdavid.com" target="_blank">
                <p>Book now</p>
            </a>
        </div>
        <div id="mobileMenuBlock" class="wide78" data-tracking-category="Header" data-tracking-action="Clic rubriques">
            <div class="mainPadding">
                <div id="mobileMenuBlock__button">
                    <a class="locationButton locationButton--noEvermaps"></a>
                </div>
                <a href="/" class="headerLogoMobileWrapper">
                    <img src="/web/skins/images/logo.png" class="headerLogoMobile"></a>
                <a class="mobileMenuButton fontAwesome">
                    <span class="fa fa-bars"></span>
                </a>
            </div>
        </div>
        <div class="wide78 breadCrumbs">
            <div class="mainPadding">
                <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a itemprop="item" href="https://www.jeanlouisdavid.us"><span itemprop="name">Jean Louis
                                David</span></a>
                        <meta itemprop="position" content="1">
                        &gt;
                    </li>
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a itemprop="item" href="https://www.jeanlouisdavid.us/collections"><span
                                itemprop="name">Collections</span></a>
                        <meta itemprop="position" content="2">
                        &gt;
                    </li>
                    <span class="current">Spring-Summer collection</span>
                </ol>
            </div>
        </div>
        

        <script>
            var infoIcon = document.querySelectorAll('.salonSearchForm__info');
            var popup = document.querySelectorAll('.salonSearchForm__popup');
            var changeSalon = document.querySelector('.locator__on__list .changeSalon');
            var windowWidth = window.innerWidth;

            if (changeSalon) {
                changeSalon.addEventListener('click', function() {
                    document.querySelector('.locator-toggle').classList.remove('active');
                    document.querySelector('.salon-search-toggle').classList.add('active');
                });
            }

            if (windowWidth > 768) {
                infoIcon.forEach(function(item) {
                    item.addEventListener('mouseover', function() {
                        popup.forEach(function(itemP) {
                            itemP.style.opacity = 1;
                        })
                    })
                    item.addEventListener('mouseout', function() {
                        popup.forEach(function(itemP) {
                            itemP.style.opacity = 0;
                        })
                    })
                })
            } else {
                infoIcon.forEach(function(item) {
                    item.addEventListener('click', function() {
                        popup.forEach(function(itemP) {
                            if (itemP.style.opacity == 1) {
                                itemP.style.opacity = 0;
                            } else {
                                itemP.style.opacity = 1;
                            }
                        })
                    })

                });
            }

        </script>

        <div id="teaserShp">
            <div class="wide80 lineHeight0">
                <div class="carusel">
                    <div class="positionRel">
                        <img alt="Crazy About JLD, Jean Louis David's Spring-Summer 2020 collection"
                            src="https://via.placeholder.com/1280x660">
                    </div>
                    <div class="blockInfo">
                        <h1 class="title">
                            Crazy About JLD, Jean Louis David's Spring-Summer 2020 collection
                        </h1>
                        <p>Discover the looks!</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="quoteBlock">
            <div class="wide78">
                <div class="spacer1"></div>
                <div class="titledNews shpNewsCol2" style="margin-top: 10px">
                    <div class="articleBlock1 hpArticleBlock"
                        data-tracking-label="Colouring treatments from the Crazy About JLD Collection">
                        <a class=" _hrl" href="/sumwin-collection/detail">
                            <img src="https://via.placeholder.com/371x240"
                                alt="Colouring treatments from the Crazy About JLD Collection">
                        </a>
                        <div class="infoBlock">
                            <div class="typeInfo">Spring-Summer collection</div>
                            <a href="/sumwin-collection/detail"
                                class="title">Colouring treatments from the Crazy About JLD Collection</a>

                            <p>This season it's all about colour! With the Crazy About JLD collection, Jean Louis David has
                                created looks full of radiant shine by adorning our locks with highlights and contrasts, for
                                an ultra-luminous result. Read on to discover three techniques you should choose this
                                Spring-Summer 2020 season.
                                The Sunlight treatment: adorning your hair with...</p>
                        </div>
                    </div>
                </div>
                <div class="titledNews shpNewsCol2" style="margin-top: 10px">
                    <div class="articleBlock1 hpArticleBlock" data-tracking-label="Layers: for a touch of 90s style at JLD">
                        <a class=" _hrl" href="/sumwin-collection/detail"> 
                            <img src="https://via.placeholder.com/371x240"
                                alt="Layers: for a touch of 90s style at JLD">
                        </a>
                        <div class="infoBlock">
                            <div class="typeInfo">Spring-Summer collection</div>
                            <a href="/sumwin-collection/detail" class="title">Layers: for a
                                touch of 90s style at JLD</a>

                            <p>Do you remember how layers were all the rage (almost) thirty years ago? Well, the cult layers
                                trend from the 90s is well and truly back, but with a more structured, modern look and above
                                all, a rock'n'roll vibe!
                                JLD's version of the 90s look
                                For this season, Jean Louis David decided to bring back some of the most flagship haircuts
                                from the past...</p>
                        </div>
                    </div>
                </div>
                <div class="titledNews shpNewsCol2" style="margin-top: 10px">
                    <div class="articleBlock1 hpArticleBlock"
                        data-tracking-label="The Contrast treatment: a JLD exclusive technique for gradual lightening">
                        <a class=" _hrl"
                            href="/sumwin-collection/detail">
                            <img src="https://via.placeholder.com/371x240"
                                alt="The Contrast treatment: a JLD exclusive technique for gradual lightening">
                        </a>
                        <div class="infoBlock">
                            <div class="typeInfo">Spring-Summer collection</div>
                            <a href="/sumwin-collection/detail"
                                class="title">The Contrast treatment: a JLD exclusive technique for...</a>

                            <p>Is your hair looking limp and lifeless? Do you want to make it more radiant than ever? If so,
                                look no further. We have just what you need! With this exclusive JLD Contrast technique, a
                                new-generation highlighting treatment, you can restore a luminous shine to your locks in no
                                time!
                                The Contrast treatment: Jean Louis David's new highlighting...</p>
                        </div>
                    </div>
                </div>
                <div class="titledNews shpNewsCol2">
                    <div class="articleBlock1 hpArticleBlock"
                        data-tracking-label="Men: the influence of the fifties on the Spring-Summer 2020 hairstyles">
                        <a class=" _hrl"
                            href="/sumwin-collection/detail">
                            <img src="https://via.placeholder.com/371x240"
                                alt="Men: the influence of the fifties on the Spring-Summer 2020 hairstyles">
                        </a>
                        <div class="infoBlock">
                            <div class="typeInfo">Spring-Summer collection</div>
                            <a href="/sumwin-collection/detail"
                                class="title">Men: the influence of the fifties on the Spring-Summer...</a>

                            <p>Gentlemen, this summer is the time to say goodbye to bohemian styles, rock looks and man
                                buns. Now Jean Louis David's Spring-Summer collection injects a touch of 1950s
                                sophistication and glamour into current trends. Think Paul Newman's wild style or James Dean
                                and Elvis Presley's sex appeal: this season you can give the 50s look a go for...</p>
                        </div>
                    </div>
                </div>
                <div class="titledNews shpNewsCol2">
                    <div class="articleBlock1 hpArticleBlock"
                        data-tracking-label="The mullet trend, JLD's must-have of the season!">
                        <a class=" _hrl" href="/sumwin-collection/detail">
                             <img src="https://via.placeholder.com/371x240"
                                alt="The mullet trend, JLD's must-have of the season!">
                        </a>
                        <div class="infoBlock">
                            <div class="typeInfo">Spring-Summer collection</div>
                            <a href="/sumwin-collection/detail" class="title">The
                                mullet trend, JLD's must-have of the season!</a>

                            <p>The mullet enjoyed a glorious heyday in the 70s and made a low-key comeback a few years ago.
                                But now the mullet is coming back for good, with more style than ever, in Jean Louis David's
                                Crazy about JLD spring-summer 2020 collection. Inveterate rock chicks and fashionistas
                                better take note – Jean Louis David's new and improved take on the mullet...</p>
                        </div>
                    </div>
                </div>
                <div class="titledNews shpNewsCol2">
                    <div class="articleBlock1 hpArticleBlock"
                        data-tracking-label="Fringes take centre stage for spring-summer 2020">
                        <a class=" _hrl" href="/sumwin-collection/detail"> 
                            <img src="https://via.placeholder.com/371x240"
                                alt="Fringes take centre stage for spring-summer 2020">
                        </a>
                        <div class="infoBlock">
                            <div class="typeInfo">Spring-Summer collection</div>
                            <a href="/sumwin-collection/detail"
                                class="title">Fringes take centre stage for spring-summer 2020</a>

                            <p>Now more than ever before, Jean Louis David is shining a light on the style power of the
                                fringe with his spring-summer 2020 Crazy about JLD collection. Loathed by some and adored by
                                others, this summer the JLD take on the fringe could well appeal to everyone. Thick yet
                                slightly tapered, or long with a hardcore rock chick vibe – find the fringe...</p>
                        </div>
                    </div>
                </div>
                <div class="spacer2"></div>
            </div>
        </div>
      

        

@endsection
