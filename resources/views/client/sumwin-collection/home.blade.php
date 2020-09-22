@extends('client.layout.master')


@section('title', 'Page Title')
@section('body-class', ' shp shp-collection')

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
                    <span class="current">Collections</span>
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
                        <img alt="The latest Hairstyles and Haircolouring"
                            src="https://via.placeholder.com/1280x660">
                    </div>

                    <div class="blockInfo">
                        <h1 class="title">
                            The latest Hairstyles and Haircolouring
                        </h1>

                        <p>Find out the looks of the collections! </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="quoteBlock">
            <div class="wide78 servicesShp">
                <div class="padding clearfix">
                    <div class="quote servicesBlock">
                        <div class="quoteWrap">
                            <div class="textWrap">
                                <p>Discover the latest trends as seen by Jean Louis David each season, in autumn-winter and
                                    spring-summer. Find out about all the latest hair news, from cuts to colour to exclusive
                                    Jean Louis David salon treatments to get you looking your best. Learn about our most
                                    requested style and the latest picks from our Style Bar service.</p>
                            </div>
                        </div>
                    </div>
                    <div class="servicesBlock service specialCollection">
                        <div class="imgWrap">
                            <img src="https://via.placeholder.com/362x221"
                                alt="Autumn-Winter collection">
                            <div class="buttonWrap">
                                <a class="buttonGold" href="/sumwin-collection/index">Autumn-Winter
                                    collection</a>
                            </div>
                        </div>
                        <div class="text">
                            <p>For this Autumn-Winter 2019/2020 season, Jean Louis David is heading for the mountains and
                                shows no fear of taking to the heights! Entitled At The Top, this collection combines
                                different styles with great panache, showcasing a free, intrepid and independent femininity.
                                At times straightened, at others adorned with large loose curls, this season's haircuts are
                                both sensible and wild, so every woman can adapt them to suit her own style.</p>
                            <p>Whether cut into a bob or a short pixie crop, everyone is rocking layers this winter season.
                                What with glossy, matt or wet-look finishes, there is a hairstyle to suit everyone's
                                personality and mood! Hair colours are staying natural this season, lifted by a few
                                highlights on top for a contrasting effect, all made possible by Jean Louis David's
                                exclusive techniques.</p>
                            <p></p>
                        </div>
                    </div>
                    <div class="servicesBlock service specialCollection">
                        <div class="imgWrap">
                            <img src="https://via.placeholder.com/362x221"
                                alt="Spring-Summer collection">
                            <div class="buttonWrap">
                                <a class="buttonGold" href="/sumwin-collection/index">Spring-Summer
                                    collection</a>
                            </div>
                        </div>
                        <div class="text">
                            <p dir="ltr">Jean Louis David brings a touch of craziness to summer with a sensual audacious
                                colection where splashing water makes clothes stick to the skin but leaves hair and
                                hairstyles intact.</p>
                            <p dir="ltr">The dazzing whiteness of a sun-drenched wall in summer onto which the shadows of
                                soaked-through models are projected.</p>
                            <p dir="ltr">Surprising graphic cuts, tousled ou stylished rock and roll styles, shiny or matte
                                textures, and trompe-l'oeil techniques, the SPLASH OUT collection channels the spirit of
                                Jean Louis David for this summer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       

        <div class="previewShp">
            <div class="wide78">
                <div class="mainPadding">
                    <h2>Most read articles</h2>

                    <div class="articlePreviewBlock">
                        <div class="articlePreview" data-tracking-label="How to apply a hair mask correctly">
                            <a class=" articleThumbnail _hrl" href="/mostRead/index">
                                <img src="https://via.placeholder.com/85x85"
                                    alt="How to apply a hair mask correctly">
                                <div class="border">
                                    <img src="/img/border_line.png">
                                </div>
                            </a>
                            <div class="articleDescription">
                                <p class="category">
                                    Experts
                                </p>

                                <p class="articleTitle">
                                    <a href="/mostRead/index">
                                        <span>How to apply a hair mask correctly</span>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="articlePreview"
                            data-tracking-label="What’s the difference between red and strawberry blonde hair?">
                            <a class=" articleThumbnail _hrl"
                                href="/mostRead/index">
                                <img
                                    src="https://via.placeholder.com/85x85"
                                    alt="What’s the difference between red and strawberry blonde hair?">
                                <div class="border">
                                    <img src="/img/border_line.png">
                                </div>
                            </a>
                            <div class="articleDescription">
                                <p class="category">
                                    Experts
                                </p>

                                <p class="articleTitle">
                                    <a href="/mostRead/index">
                                        <span>What’s the difference between red and strawberry blonde...</span>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="articlePreview" data-tracking-label="How to hold your style without hairspray">
                            <a class=" articleThumbnail _hrl"
                                href="/mostRead/index"> 
                                <img
                                    src="https://via.placeholder.com/85x85"
                                    alt="How to hold your style without hairspray">
                                <div class="border">
                                    <img src="/img/border_line.png">
                                </div>
                            </a>
                            <div class="articleDescription">
                                <p class="category">
                                    Experts
                                </p>

                                <p class="articleTitle">
                                    <a href="/mostRead/index">
                                        <span>How to hold your style without hairspray</span>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="articlePreview"
                            data-tracking-label="What are the differences between streaks and highlights?">
                            <a class=" articleThumbnail _hrl"
                                href="/mostRead/index"> 
                                <img
                                    src="https://via.placeholder.com/85x85"
                                    alt="What are the differences between streaks and highlights?">
                                <div class="border">
                                    <img src="/img/border_line.png">
                                </div>
                            </a>
                            <div class="articleDescription">
                                <p class="category">
                                    Hair colouring
                                </p>

                                <p class="articleTitle">
                                    <a href="/mostRead/index">
                                        <span>What are the differences between streaks and highlights?</span>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="articlePreview"
                            data-tracking-label="Fine hair: which colours can make it look thicker?">
                            <a class=" articleThumbnail _hrl"
                                href="/mostRead/index"> 
                                <img
                                    src="https://via.placeholder.com/85x85"
                                    alt="Fine hair: which colours can make it look thicker?">
                                <div class="border">
                                    <img src="/img/border_line.png">
                                </div>
                            </a>
                            <div class="articleDescription">
                                <p class="category">
                                    Fine hair
                                </p>

                                <p class="articleTitle">
                                    <a href="/mostRead/index">
                                        <span>Fine hair: which colours can make it look thicker?</span>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="articlePreview" data-tracking-label="How to use styling mousse">
                            <a class=" articleThumbnail _hrl" href="/mostRead/index">
                                <img
                                    src="https://via.placeholder.com/85x85"
                                    alt="How to use styling mousse">
                                <div class="border">
                                    <img src="/img/border_line.png">
                                </div>
                            </a>
                            <div class="articleDescription">
                                <p class="category">
                                    Hairstyle
                                </p>

                                <p class="articleTitle">
                                    <a href="/mostRead/index">
                                        <span>How to use styling mousse</span>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="articlePreview"
                            data-tracking-label="How can I keep my hair looking wavy after braiding?">
                            <a class=" articleThumbnail _hrl"
                                href="/mostRead/index">
                                <img
                                    src="https://via.placeholder.com/85x85"
                                    alt="How can I keep my hair looking wavy after braiding?">
                                <div class="border">
                                    <img src="/img/border_line.png">
                                </div>
                            </a>
                            <div class="articleDescription">
                                <p class="category">
                                    Hairstyle
                                </p>

                                <p class="articleTitle">
                                    <a href="/mostRead/index">
                                        <span>How can I keep my hair looking wavy after braiding?</span>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="articlePreview" data-tracking-label="Trimming your baby's hair for the first time">
                            <a class=" articleThumbnail _hrl"
                                href="/mostRead/index"> 
                                <img
                                    src="https://via.placeholder.com/85x85"
                                    alt="Trimming your baby's hair for the first time">
                                <div class="border">
                                    <img src="/img/border_line.png">
                                </div>
                            </a>
                            <div class="articleDescription">
                                <p class="category">
                                    Hairstyle
                                </p>

                                <p class="articleTitle">
                                    <a href="/mostRead/index">
                                        <span>Trimming your baby's hair for the first time</span>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="articlePreview"
                            data-tracking-label="Why your fringe gets greasy quickly and how to avoid it">
                            <a class=" articleThumbnail _hrl"
                                href="/mostRead/index">
                                <img
                                    src="https://via.placeholder.com/85x85"
                                    alt="Why your fringe gets greasy quickly and how to avoid it">
                                <div class="border">
                                    <img src="/img/border_line.png">
                                </div>
                            </a>
                            <div class="articleDescription">
                                <p class="category">
                                    Hairstyle
                                </p>

                                <p class="articleTitle">
                                    <a href="/mostRead/index">
                                        <span>Why your fringe gets greasy quickly and how to avoid it</span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
