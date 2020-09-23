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
                            <a itemprop="item" href="https://www.jeanlouisdavid.us/services"><span itemprop="name">Exclusive
                                    Services</span></a>
                            <meta itemprop="position" content="2">
                            &gt;
                        </li>
                        <span class="current">Style Bar</span>
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

            <div class="one_service_page">
                <div id="teaserShp">
                    <div class="wide80 lineHeight0">
                        <div class="carusel">
                            <img src="https://via.placeholder.com/1280x450" alt="Style Bar">
                            <h1 class="oneServiceBlockTitle white">
                                <span class="preTitle">Our Exclusive Services</span>Style Bar
                            </h1>
                        </div>
                    </div>
                </div>
                
            </div>

            <div id="quoteBlock">
                <div class="wide78 servicesShp">
                    <div class="padding clearfix">

                        <div class="servicesBlock service">
                            <div class="imgWrap">
                                <img src="https://via.placeholder.com/370x226" alt="Style Bar">
                                <div class="buttonWrap">
                                    <a class="buttonGold" href="#" "="">Price  list PDF</a>
                        </div>
                    </div>
                    <div class=" text">
                                        <p></p>
                                        <p><span>Perfectly straight hair, incredibly bouncy curls, or a pretty braided look
                                                – fall for the trendy styles at Jean Louis David!<o:p></o:p></span></p>
                                        <p><span>For every occasion you can now style your hair for the price of a cocktail,
                                                whether it's a romantic date, a night out with the girls, a wedding, or job
                                                interview. All you need is 15 minutes and 15€ and you'll have a new style
                                                without any shampoo or scissors! It's really that simple.<br><br>
                                                <o:p></o:p>
                                            </span></p>
                                        <p><span>Pop into your Jean Louis David salon with clean hair, choose your look, and
                                                we'll get you styled up in just three steps:<br><br>
                                                <o:p></o:p>
                                            </span></p>
                                        <p><span>1. A touch of<span class="apple-converted-space">
                                                </span><strong><span>FRESHNESS</span></strong><span
                                                    class="apple-converted-space"> </span>with dry shampoo to add texture to
                                                the hair and assure the style's upkeep<o:p></o:p></span></p>
                                        <p><span>2.<span class="apple-converted-space"> </span><strong><span>A
                                                        PROFESSIONAL</span></strong><span class="apple-converted-space">
                                                </span>touch with the styling tool adapted to your choice in order to
                                                quickly create your style and get the look you're after<o:p></o:p></span>
                                        </p>
                                        <p><span>3.<span class="apple-converted-space"> </span><strong><span>A
                                                        FINISHING</span></strong><span class="apple-converted-space">
                                                </span>touch with the Urban Style line of products: shine, mold,
                                                support...that's it, you're all ready to go!<br><br>
                                                <o:p></o:p>
                                            </span></p>
                                        <p><span>With the Bar à Styles, you can say goodbye to bad hair days!<o:p></o:p>
                                                </span></p>
                                        <p></p>
                                </div>
                            </div>
                            <div class="servicesBlock service">
                                <div class="imgWrap">
                                    <img src="https://via.placeholder.com/370x226" alt="Lightening">
                                    <div class="buttonWrap">
                                        <a class="buttonGold" href="#" "="">Price  list PDF</a>
                        </div>
                    </div>
                    <div class=" text">  
                        <p></p>                  
                        <p>Lightening doesn't necessary mean blond! Brown, red, or sandy, discover the                                              
                            numerous Jean Louis David partial coloring techniques and lighten up your                    
                            hair for sun washed style!</p>
                        <p></p>
                    </div>
                            </div>
                                <div class="servicesBlock service">
                                    <div class="imgWrap">
                                        <img src="https://via.placeholder.com/370x226" alt="Colour">
                                        <div class="buttonWrap">
                                            <a class="buttonGold" href="#" "="">Price  list PDF</a>
                        </div>
                    </div>
                    <div class=" text">
                           <p></p>
                        <p>Energy and shine! For sparkling color all year round with radiant shine
                            and depth, try out our capillary top coats at the salon!</p>
                            <p></p>
                    </div>
                                </div>
                                    
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        WB.utils.serviceScrollbarInit();

                                    </script>

                                    <div class="previewShp">
                                        <div class="wide78">
                                            <div class="mainPadding">
                                                <h2>Most read articles</h2>

                                                <div class="articlePreviewBlock">
                                                    <div class="articlePreview"
                                                        data-tracking-label="How to apply a hair mask correctly">
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
                                                        <a class=" articleThumbnail _hrl" href="/mostRead/index">
                                                            <img src="https://via.placeholder.com/85x85"
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
                                                                    <span>What’s the difference between red and strawberry
                                                                        blonde...</span>
                                                                </a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="articlePreview"
                                                        data-tracking-label="How to hold your style without hairspray">
                                                        <a class=" articleThumbnail _hrl" href="/mostRead/index">
                                                            <img src="https://via.placeholder.com/85x85"
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
                                                        <a class=" articleThumbnail _hrl" href="/mostRead/index">
                                                            <img src="https://via.placeholder.com/85x85"
                                                                alt="What are the differences between streaks and highlights?">
                                                            <div class="border">
                                                                <img src="/mostRead/index/border_line.png">
                                                            </div>
                                                        </a>
                                                        <div class="articleDescription">
                                                            <p class="category">
                                                                Hair colouring
                                                            </p>

                                                            <p class="articleTitle">
                                                                <a href="/mostRead/index">
                                                                    <span>What are the differences between streaks and
                                                                        highlights?</span>
                                                                </a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="articlePreview"
                                                        data-tracking-label="Fine hair: which colours can make it look thicker?">
                                                        <a class=" articleThumbnail _hrl" href="/mostRead/index">
                                                            <img src="https://via.placeholder.com/85x85"
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
                                                                    <span>Fine hair: which colours can make it look
                                                                        thicker?</span>
                                                                </a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="articlePreview"
                                                        data-tracking-label="How to use styling mousse">
                                                        <a class=" articleThumbnail _hrl" href="/mostRead/index">
                                                            <img src="https://via.placeholder.com/85x85"
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
                                                        <a class=" articleThumbnail _hrl" href="/mostRead/index">
                                                            <img src="https://via.placeholder.com/85x85"
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
                                                                    <span>How can I keep my hair looking wavy after
                                                                        braiding?</span>
                                                                </a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="articlePreview"
                                                        data-tracking-label="Trimming your baby's hair for the first time">
                                                        <a class=" articleThumbnail _hrl" href="/mostRead/index">
                                                            <img src="https://via.placeholder.com/85x85"
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
                                                                    <span>Trimming your baby's hair for the first
                                                                        time</span>
                                                                </a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="articlePreview"
                                                        data-tracking-label="Why your fringe gets greasy quickly and how to avoid it">
                                                        <a class=" articleThumbnail _hrl" href="/mostRead/index">
                                                            <img src="https://via.placeholder.com/85x85"
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
                                                                    <span>Why your fringe gets greasy quickly and how to
                                                                        avoid it</span>
                                                                </a>
                                                            </p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                        @endsection
