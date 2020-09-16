@extends('client.layout.master')


@section('title', 'Page Title')
@section('body-class', 'home')

@section('content')
    <div class="stickyBookingButton">
        <a href="https://reservations.jeanlouisdavid.com" target="_blank">
            <p>Book now</p>
        </a>
    </div>
    <div id="mobileMenuBlock" class="wide78" data-tracking-category="Header" data-tracking-action="Clic rubriques">
        <div class="mainPadding">
            <div id="mobileMenuBlock__button">
                <a class="locationButton"></a>
            </div>
            <a href="/" class="headerLogoMobileWrapper">
                <img src="img/logo.png" class="headerLogoMobile"></a>
            <a class="mobileMenuButton fontAwesome">
                <span class="fa fa-bars"></span>
            </a>
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
    <div class="wide80 lineHeight0">
        <div class="carusel">
            <div class="positionRel">
                <div class="positionRel hpSlider">
                    <span
                        class="hrl 45CBCBC0C21322BA1321B41321B4CCCCCC194D434A49484FC346C24B4AC4464B19C3C21321B44AC1CB464248431321B4484F4F47C21E44C14F4E1ECB45431E42C14ACDC61E4A414FC3CB1E4D484B1E424F48484342CB464F493F4A2A222420221321B42A hpSlide positionRel">
                        <a href="/news/newsDetail">
                            <picture>
                                <source media="(max-width: 640px)"
                                    srcset="img/20869997-0-20869997-2020-03-jld-website-maj-home-looks-header-1280x450-375x225-1.jpg">
                                <source media="(max-width: 1023px)"
                                    srcset="img/20869997-0-20869997-2020-03-jld-website-maj-home-looks-header-1280x450-768x279-1.jpg">
                                <img src="https://via.placeholder.com/1280x450" alt="">
                            </picture>


                            <div class="blockInfo blockInfoViewerImg">
                                <div class="title">Crazy About JLD
                                    <span>Discover the looks from Jean Louis David’s Spring Summer 2020 collection</span>
                                </div>
                                <div class="counter"></div>
                                <div class="line"></div>
                            </div>
                        </a>
                    </span>
                    <span
                        class="hrl 45CBCBC0C21322BA1321B41321B4CCCCCC194D434A49484FC346C24B4AC4464B19C3C21321B44AC1CB464248431321B444C146494C43C21ECB4A47431E424349CBC1431EC2CB4A4C431E444FC11EC2C0C146494C1EC2C34E4E43C11E212021203F4A2A222325211321B42A hpSlide positionRel">
                        <a href="/news/newsDetail">
                            <picture>
                                <source media="(max-width: 640px)"
                                    srcset="img/20870063-0-20870063-jld-ss2020-16-375x225-1.jpg">
                                <source media="(max-width: 1023px)"
                                    srcset="img/20870063-0-20870063-jld-ss2020-16-768x279-1.jpg">
                                <img src="https://via.placeholder.com/1280x450" alt="">
                            </picture>

                            <div class="blockInfo blockInfoViewerImg">
                                <div class="title">
                                    Spring Summer 2020 Collection
                                    <span>Fringes take center stage</span>
                                </div>
                                <div class="counter"></div>
                                <div class="line"></div>
                            </div>
                        </a>
                    </span>
                    <span
                        class="hrl 45CBCBC0C21322BA1321B41321B4CCCCCC194D434A49484FC346C24B4AC4464B19C3C21321B4454A46C11EC24A484F491321B4424FC349CBC1C61321B4C34946CB434B1EC2CB4ACB43C2 hpSlide positionRel">
                        <a href="/news/newsDetail">
                            <picture>
                                <source media="(max-width: 640px)"
                                    srcset="img/16345472-0-16345472-180420-03-467-375x225-1.jpg">
                                <source media="(max-width: 1023px)"
                                    srcset="img/16345472-0-16345472-180420-03-467-768x279-1.jpg">
                                <img src="https://via.placeholder.com/1280x450" alt="">
                            </picture>
                            <div class="blockInfo blockInfoViewerImg">
                                <div class="title">
                                    Find your hair salon
                                    <span>Closest to you</span>
                                </div>
                                <div class="counter"></div>
                                <div class="line"></div>
                            </div>
                        </a>

                    </span></div>
                <div class="blockPointsMobile blockPointHeight">
                    <div class="pointLeft pointLeft--hp"></div>
                    <div class="pointRight pointRight--hp"></div>
                </div>
            </div>
            <div class="blockInfo blockInfoViewer">
                <div class="blockPoints ">
                    <div class="pointLeft pointLeft--hp"></div>
                    <div class="pointRight pointRight--hp"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="hpNewsBlock wide78 paddingBottom2">
        <div id="newsBlockMain">
            <div class="">
                <div class="mainPadding">
                    <h2 class="h1 hpGridHeader">News : all the news</h2>

                    <div class="hpLatest grids hpGrid clearfix">

                        <div class="articleBlock1 hpArticleBlock" data-index="0"
                            data-tracking-label="Looks from the Crazy about JLD collection">

                            <div class="infoBlock">
                                <div class="typeInfo">Spring-Summer collection</div>
                                <a href="/news/newsDetail" class="title">Looks from the Crazy about JLD collection</a>
                            </div>
                            <a href="/news/newsDetail">
                                <picture>
                                    <source media="(max-width: 640px)"
                                        srcset="img/18412-discover-the-jean-louis-david-spring-sum-342x240-1.jpg">
                                    <source media="(max-width: 1023px)"
                                        srcset="img/18412-discover-the-jean-louis-david-spring-sum-344x240-1.jpg">
                                    <img src="https://via.placeholder.com/373x240"
                                        alt="Looks from the Crazy about JLD collection">
                                </picture>

                                <p>With the Spring-Summer 2020 Crazy about JLD collection, Jean Louis David pays
                                    homage to some of the most memorable hairstyles from past decades. From the
                                    50s
                                    to the 90s, quiffs, mullets and cult...</p>
                        </div>

                        <div class="articleBlock1 hpArticleBlock" data-index="1"
                            data-tracking-label="Colouring treatments from the Crazy About JLD Collection">

                            <div class="infoBlock">
                                <div class="typeInfo">Spring-Summer collection</div>
                                <a href="home-page-2.html" class="title">Colouring treatments from the Crazy About JLD
                                    Collection</a>
                            </div>
                            <a href="home-page-2.html">
                                <picture>
                                    <source media="(max-width: 640px)"
                                        srcset="img/18403-trendy-colouring-techniques-for-the-summ-342x240-1.jpg">
                                    <source media="(max-width: 1023px)"
                                        srcset="img/18403-trendy-colouring-techniques-for-the-summ-344x240-1.jpg">
                                    <img src="https://via.placeholder.com/373x240"
                                        alt="Colouring treatments from the Crazy About JLD Collection">
                                </picture>
                            </a>
                            <p>This season it's all about colour! With the Crazy About JLD collection, Jean
                                Louis David has created looks full of radiant shine by adorning our locks with
                                highlights and contrasts, for an...</p>
                        </div>

                        <div class="articleBlock2 hpArticleBlock" data-index="2"
                            data-tracking-label="Layers: for a touch of 90s style at JLD">
                            <div class="table">
                                <div class="tableCell">
                                    <a href="/news/newsDetail">
                                        <div class="borderBlock">
                                            <picture>
                                                <source media="(max-width: 640px)"
                                                    srcset="img/18397-choose-layers-for-this-summer-85x85-1.jpg">
                                                <source media="(max-width: 1023px)"
                                                    srcset="img/18397-choose-layers-for-this-summer-170x150-1.jpg">
                                                <img src="https://via.placeholder.com/150"
                                                    alt="Layers: for a touch of 90s style at JLD">
                                            </picture>
                                            <div class="border"><img src="https://via.placeholder.com/150"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="infoBlock">
                                    <div class="typeInfo">
                                        Spring-Summer collection

                                    </div>
                                    <a href="/news/newsDetail" class="title">Layers: for a touch of 90s style at JLD</a>

                                    <p>Do you remember how layers were all the rage (almost) thirty years ago?
                                        Well, the cult layers trend from the 90s is well and truly back, but
                                        with a more structured, modern look and above all, a...</p>

                                </div>
                            </div>
                        </div>

                        <div class="articleBlock2 hpArticleBlock" data-index="3"
                            data-tracking-label="The Contrast treatment: a JLD exclusive technique for gradual lightening">
                            <div class="table">
                                <div class="tableCell">
                                    <a href="/news/newsDetail">
                                        <div class="borderBlock">
                                            <picture>
                                                <source media="(max-width: 640px)"
                                                    srcset="img/18391-the-contrast-technique-85x85-1.jpg">
                                                <source media="(max-width: 1023px)"
                                                    srcset="img/18391-the-contrast-technique-170x150-1.jpg">
                                                <img src="https://via.placeholder.com/150"
                                                    alt="The Contrast treatment: a JLD exclusive technique for gradual lightening">
                                            </picture>
                                            <div class="border"><img src="https://via.placeholder.com/150"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="infoBlock">
                                    <div class="typeInfo">
                                        Spring-Summer collection

                                    </div>
                                    <a href="/news/newsDetail" class="title">The Contrast treatment: a JLD exclusive technique
                                        for
                                        gradual lightening</a>

                                    <p>Is your hair looking limp and lifeless? Do you want to make it more
                                        radiant than ever? If so, look no further. We have just what you need!
                                        With this exclusive JLD Contrast technique, a...</p>

                                </div>
                            </div>
                        </div>

                        <div class="articleBlock2 hpArticleBlock" data-index="4"
                            data-tracking-label="Men: the influence of the fifties on the Spring-Summer 2020 hairstyles">
                            <div class="table">
                                <div class="tableCell">
                                    <a href="/news/newsDetail">
                                        <div class="borderBlock">
                                            <picture>
                                                <source media="(max-width: 640px)"
                                                    srcset="img/18385-men-s-looks-for-spring-summer-2020-85x85-1.jpg">
                                                <source media="(max-width: 1023px)"
                                                    srcset="img/18385-men-s-looks-for-spring-summer-2020-170x150-1.jpg">
                                                <img src="https://via.placeholder.com/150"
                                                    alt="Men: the influence of the fifties on the Spring-Summer 2020 hairstyles">
                                            </picture>
                                            <div class="border"><img src="https://via.placeholder.com/150"></div>
                                        </div>
                                    </a>

                                </div>
                                <div class="infoBlock">
                                    <div class="typeInfo">
                                        Spring-Summer collection

                                    </div>
                                    <a href="/news/newsDetail" class="title">Men: the influence of the fifties on the
                                        Spring-Summer 2020
                                        hairstyles</a>

                                    <p>Gentlemen, this summer is the time to say goodbye to bohemian styles,
                                        rock looks and man buns. Now Jean Louis David's Spring-Summer collection
                                        injects a touch of 1950s sophistication and glamour...</p>

                                </div>
                            </div>
                        </div>

                        <div class="articleBlock2 hpArticleBlock" data-index="5"
                            data-tracking-label="The mullet trend, JLD&#039;s must-have of the season!">
                            <div class="table">
                                <div class="tableCell">
                                    <a href="/news/newsDetail">
                                        <div class="borderBlock">
                                            <picture>
                                                <source media="(max-width: 640px)"
                                                    srcset="img/18376-the-70s-mullet-85x85-2.jpg">
                                                <source media="(max-width: 1023px)"
                                                    srcset="img/18376-the-70s-mullet-170x150-2.jpg">
                                                <img src="https://via.placeholder.com/150"
                                                    alt="The mullet trend, JLD&#039;s must-have of the season!">
                                            </picture>
                                            <div class="border"><img src="https://via.placeholder.com/150"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="infoBlock">
                                    <div class="typeInfo">
                                        Spring-Summer collection

                                    </div>
                                    <a href="/news/newsDetail" class="title">The mullet trend, JLD's must-have of the
                                        season!</a>

                                    <p>The mullet enjoyed a glorious heyday in the 70s and made a low-key
                                        comeback a few years ago. But now the mullet is coming back for good,
                                        with more style than ever, in Jean Louis David's Crazy about...</p>

                                </div>
                            </div>
                        </div>

                        <div class="articleBlock2 hpArticleBlock" data-index="6"
                            data-tracking-label="Fringes take centre stage for spring-summer 2020">
                            <div class="table">
                                <div class="tableCell">

                                    <a href="/news/newsDetail">
                                        <div class="borderBlock">
                                            <picture>
                                                <source media="(max-width: 640px)"
                                                    srcset="img/18367-the-long-fringe-85x85-2.jpg">
                                                <source media="(max-width: 1023px)"
                                                    srcset="img/18367-the-long-fringe-170x150-2.jpg">
                                                <img src="https://via.placeholder.com/150"
                                                    alt="Fringes take centre stage for spring-summer 2020">
                                            </picture>
                                            <div class="border"><img src="https://via.placeholder.com/150"></div>
                                        </div>
                                    </a>

                                </div>
                                <div class="infoBlock">
                                    <div class="typeInfo">
                                        Spring-Summer collection

                                    </div>
                                    <a href="/news/newsDetail" class="title">Fringes take centre stage for spring-summer
                                        2020</a>

                                    <p>Now more than ever before, Jean Louis David is shining a light on the
                                        style power of the fringe with his spring-summer 2020 Crazy about JLD
                                        collection. Loathed by some and adored by others, this...</p>

                                </div>
                            </div>
                        </div>

                    </div>
                    <a href="/news/detail" class="moreNews">More news</a>
                </div>
            </div>
        </div>

        <div class="sidebar">
            <div class="sidebarWrap">
                <div class="singleBanner">
                    <div class="item special">
                        <span target="_self" class="hrl 1321B4CB4A4C1321B44E43493FCB2B2B1321B42A">
                            <picture>
                                <source media="(max-width: 640px)"
                                    srcset="img/20869934-0-20869934-2020-03-jld-website-maj-home-push-homme-455x370-343x303-1.jpg">
                                <source media="(max-width: 1023px)"
                                    srcset="img/20869934-0-20869934-2020-03-jld-website-maj-home-push-homme-455x370-402x215-1.jpg">
                                <img src="https://via.placeholder.com/455x370" alt=""> </picture>

                            <div class="textBanner">
                                <div class="info">Trends</div>
                                <div class="text">Men</div>
                            </div>
                            <span target="_self" class="hrl 1321B4CB4A4C1321B44E43493FCB2B2B1321B42A buttonGold"> Discover
                            </span>
                        </span></div>
                </div>
                <div class="wrap tracking-click-parent hpArticles" data-tracking-category="Les plus lus"
                    data-tracking-action="Clic articles">
                    <h2>Most read articles</h2>

                    <div class="articlePreviewBlock">
                        <div class="articlePreview" data-tracking-label="How to apply a hair mask correctly">
                        
                            <span class="hrl 1321B44AC1CB464248431321B4454FCC1ECB4F1E4AC0C048C61E4A1E454A46C11E4E4AC2471E424FC1C14342CB48C63F4A262B251321B42A articleThumbnail">
                                <a href="/mostRead/index">>    
                                    <img src="https://via.placeholder.com/85x85" alt="How to apply a hair mask correctly">
                                    <div class="border"><img src="img/border_line.png"></div>
                                
                          </a>  
                        </span>
                        
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
                            <span class="hrl 1321B44AC1CB464248431321B4CC454ACBC21ECB45431E4B46444443C1434942431E4143CBCC4343491EC1434B1E4A494B1EC2CBC14ACC4143C1C1C61E41484F494B431E454A46C13F4A232A26251321B42A articleThumbnail">
                               <a href="/mostRead/index">
                                <img src="https://via.placeholder.com/85x85"
                                    alt="What’s the difference between red and strawberry blonde hair?">
                                <div class="border"><img src="img/border_line.png"></div>
                                </a>
                            </span>
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
                            <span class="hrl 1321B44AC1CB464248431321B4454FCC1ECB4F1E454F484B1EC64FC3C11EC2CBC648431ECC46CB454FC3CB1E454A46C1C2C0C14AC63F4A232A22221321B42A articleThumbnail">
                                <a href="/mostRead/index">
                                    <img src="https://via.placeholder.com/85x85" alt="How to hold your style without hairspray">
                                    <div class="border"><img src="img/border_line.png"></div>
                                </a>
                            </span>
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
                            <span class="hrl 1321B44AC1CB464248431321B4CC454ACB1E4AC1431ECB45431E4B46444443C143494243C21E4143CBCC4343491EC2CBC1434A47C21E4A494B1E45464C4548464C45CBC23F4A262A26241321B42A articleThumbnail">
                                <a href="/mostRead/index">
                                    <img src="https://via.placeholder.com/85x85"
                                        alt="What are the differences between streaks and highlights?">
                                    <div class="border"><img src="img/border_line.png"></div>
                                </a>
                            </span>
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
                    </div>
                </div>
            </div>

            <div data-tracking-category="Trouvez votre salon" data-tracking-action="module article"
                class="article-sidebar__location">
                <p>This article inspired you? Take action and find your salon <span>Take action and find your salon</span>
                </p>
                <div class="article-sidebar__location__toggle">

                    <div class="article-sidebar__location__locator">
                        <div id="store-locator">
                            <div class="article-sidebar__location__locator__img"></div>

                            <div class="search-field">
                                <div id="search-form">

                                    <span
                                        class="hrl 1321B4454A46C11EC24A484F491321B44446494B1EC64FC3C11E454A46C14BC143C2C243C1 geolocate-btn buttonGold">
                                        Find your salon Jean Louis David
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wide80">
        <div id="adviceExperts">
            <div class="clearfix">
                <div class="wide78">
                    <h2>Our experts advice</h2>
                </div>

                <div class="adviceCarousel clearfix">
                    <div class="advice ">
                        <span
                            class="hrl 1321B44AC1CB464248431321B4251EC0C143424F49424346C4434B1E464B434AC21E4A414FC3CB1E41484F494B431E454A46C13F4A2A2122202C1321B42A">
                            <div class="carousel-block">
                                <div class="blockGradient">
                                    <picture>
                                        <source media="(max-width: 640px)"
                                            srcset="img/19544807-0-19544807-16247-put-an-end-to-prejudices-about-blonde-ha-268x515-2.jpg">
                                        <source media="(max-width: 1023px)"
                                            srcset="img/19544807-0-19544807-16247-put-an-end-to-prejudices-about-blonde-ha-284x481-2.jpg">
                                        <img class="grayscale" src="https://via.placeholder.com/284x534"
                                            alt="8 preconceived ideas about blonde hair">
                                    </picture>

                                    <div class="gradient"></div>
                                </div>
                                <div class="info">
                                    <a href="/article/8-preconceived-ideas-about-blonde-hair_a12307/1" class="title"><span>8
                                            preconceived ideas about blonde hair</span></a>
                                    <p>By our expert Vanessa Giani</p>
                                    <p class="button">See the advice</p>
                                </div>

                            </div>
                        </span></div>
                    <div class="advice ">
                        <span
                            class="hrl 1321B44AC1CB464248431321B4454FCC1E4F44CB43491EC2454FC3484B1EC64FC31E4C43CB1EC64FC3C11E454A46C11E42C3CB3F4A2A212222211321B42A">
                            <div class="carousel-block">
                                <div class="blockGradient">
                                    <picture>
                                        <source media="(max-width: 640px)"
                                            srcset="img/19544825-0-19544825-16272-find-out-the-ideal-frequency-for-getting-268x515-2.jpg">
                                        <source media="(max-width: 1023px)"
                                            srcset="img/19544825-0-19544825-16272-find-out-the-ideal-frequency-for-getting-284x481-2.jpg">
                                        <img class="grayscale" src="https://via.placeholder.com/284x534"
                                            alt="How often should you get your hair cut?">
                                    </picture>

                                    <div class="gradient"></div>
                                </div>
                                <div class="info">
                                    <a href="/article/how-often-should-you-get-your-hair-cut_a12332/1"
                                        class="title"><span>How often should you get your hair cut?</span></a>
                                    <p>By our expert Vanessa Giani</p>
                                    <p class="button">See the advice</p>
                                </div>

                            </div>
                        </span></div>
                    <div class="advice ">
                        <span
                            class="hrl 1321B44AC1CB464248431321B4454A46C11ECC454642451E454A46C11EC1434C464E431EC2454FC3484B1EC64FC31E4A4B4FC0CB1E4A44CB43C11E22203F4A2A21222B211321B42A">
                            <div class="carousel-block">
                                <div class="blockGradient">
                                    <picture>
                                        <source media="(max-width: 640px)"
                                            srcset="img/19544834-0-19544834-16282-how-you-should-alter-your-hair-regime-af-268x515-2.jpg">
                                        <source media="(max-width: 1023px)"
                                            srcset="img/19544834-0-19544834-16282-how-you-should-alter-your-hair-regime-af-284x481-2.jpg">
                                        <img class="grayscale" src="https://via.placeholder.com/284x534"
                                            alt="Hair: which hair regime should you adopt after 30?">
                                    </picture>

                                    <div class="gradient"></div>
                                </div>
                                <div class="info">
                                    <a href="/article/hair-which-hair-regime-should-you-adopt-after-30_a12342/1"
                                        class="title">
                                        <span>Hair: which hair regime should you adopt after 30?</span>
                                    </a>
                                    <p>By our expert Vanessa Giani</p>
                                    <p class="button">See the advice</p>
                                </div>

                            </div>
                        </span></div>
                    <div class="advice expert-info">
                        <span class="hrl 1321B443C5C043C1CBC21321B4C44A4943C2C24A1E4C464A49463FCB2C231321B42A">
                            <div class="carousel-block">
                                <div class="blockGradient">
                                    <picture>
                                        <source media="(max-width: 640px)"
                                            srcset="img/12963937-0-75-55ccc4b9c7e7a-tag-expert-thumbnail-1-268x515-1.png">
                                        <source media="(max-width: 1023px)"
                                            srcset="img/12963937-0-75-55ccc4b9c7e7a-tag-expert-thumbnail-1-284x481-1.png">
                                        <img class="grayscale" src="https://via.placeholder.com/284x534"
                                            alt="Head of training in Paris">
                                    </picture>

                                    <div class="gradient"></div>
                                </div>
                                <div class="info">
                                    <a href="/experts/vanessa-giani_t75/1" class="title"><span>The expert of the
                                            month</span></a>
                                    <div class="desc">
                                        <p>Vanessa Giani</p>
                                        <p>Head of training in Paris</p>
                                        <p class="button">Discover the expert of the month</p>
                                    </div>
                                </div>

                            </div>
                        </span></div>
                    <div class="advice ">
                        <span
                            class="hrl 1321B44AC1CB464248431321B4454A46C11E424F484FC3C146494C1ECC454642451EC2454A4B431E4F441E41484F494B431ECB4F1E4C4F1E444FC11E46491E4AC3CBC34E493F4A2A21222C2C1321B42A">
                            <div class="carousel-block">
                                <div class="blockGradient">
                                    <picture>
                                        <source media="(max-width: 640px)"
                                            srcset="img/19544846-0-19544846-16317-find-the-perfect-shade-of-blonde-for-thi-268x515-1.jpg">
                                        <source media="(max-width: 1023px)"
                                            srcset="img/19544846-0-19544846-16317-find-the-perfect-shade-of-blonde-for-thi-284x481-1.jpg">
                                        <img class="grayscale" src="https://via.placeholder.com/284x534"
                                            alt="Hair colouring: which shade of blonde to go for in autumn?">
                                    </picture>

                                    <div class="gradient"></div>
                                </div>
                                <div class="info">
                                    <a href="/article/hair-colouring-which-shade-of-blonde-to-go-for-in-autumn_a12377/1"
                                        class="title"><span>Hair colouring: which shade of blonde to go for in
                                            autumn?</span></a>
                                    <p>By our expert Vanessa Giani</p>
                                    <p class="button">See the advice</p>
                                </div>

                            </div>
                        </span>
                    </div>
                    <div class="advice ">
                        <span
                            class="hrl 1321B44AC1CB464248431321B4CC454ACB1EC21E49C34B431E454A46C11E424F484FC3C146494C3F4A2A212A2C2C1321B42A">
                            <div class="carousel-block">
                                <div class="blockGradient">
                                    <picture>
                                        <source media="(max-width: 640px)"
                                            srcset="img/19544852-0-19544852-16102-find-out-more-about-the-most-natural-hai-268x515-2.jpg">
                                        <source media="(max-width: 1023px)"
                                            srcset="img/19544852-0-19544852-16102-find-out-more-about-the-most-natural-hai-284x481-2.jpg">
                                        <img class="grayscale" src="https://via.placeholder.com/284x534"
                                            alt="What&#039;s nude hair colouring?">
                                    </picture>

                                    <div class="gradient"></div>
                                </div>
                                <div class="info">
                                    <a href="/article/what-s-nude-hair-colouring_a12177/1" class="title"><span>What&#039;s
                                            nude hair colouring?</span></a>
                                    <p>By our expert Vanessa Giani</p>
                                    <p class="button">See the advice</p>
                                </div>

                            </div>
                        </span></div>
                    <div class="advice ">
                        <span
                            class="hrl 1321B44AC1CB464248431321B44E43491E4AC3CBC34E491E454A46C1C2CBC64843C23F4A2A202C262A1321B42A">
                            <div class="carousel-block">
                                <div class="blockGradient">
                                    <picture>
                                        <source media="(max-width: 640px)"
                                            srcset="img/19544855-0-19544855-13731-men-autumn-hairstyles-268x515-1.jpg">
                                        <source media="(max-width: 1023px)"
                                            srcset="img/19544855-0-19544855-13731-men-autumn-hairstyles-284x481-1.jpg">
                                        <img class="grayscale" src="https://via.placeholder.com/284x534"
                                            alt="Men: autumn hairstyles">
                                    </picture>

                                    <div class="gradient"></div>
                                </div>
                                <div class="info">
                                    <a href="/article/men-autumn-hairstyles_a10791/1" class="title">
                                        <span>Men: autumn hairstyles</span>
                                    </a>
                                    <p>By our expert Vanessa Giani</p>
                                    <p class="button">See the advice</p>
                                </div>

                            </div>
                        </span>
                    </div>
                </div>

                <div class="wide78 padding">
                    <a href="/experts" class="moreNews">More experts advice</a>
                </div>
            </div>
        </div>
    </div>

    <div id="sideBarBlock" class="wide78 hpDossier">
        <div class="content">
            <div class="wrap">
                <h2>The latest hairstyles folders</h2>

                <div class="contentCols clearfix">
                    <div class="contentCol" data-tracking-label="The dossier: which hairstyle for a wedding ceremony?">
                        <div class="contentColWrap">
                            <div class="imgWrap">
                                <picture>
                                    <source media="(max-width: 640px)"
                                        srcset="img/18203-porque-cada-gran-ocasion-tiene-su-peinad-344x253-3.jpg">
                                    <source media="(max-width: 1023px)"
                                        srcset="img/18203-porque-cada-gran-ocasion-tiene-su-peinad-344x253-3.jpg">
                                    <img src="https://via.placeholder.com/150x66"
                                        alt="The dossier: which hairstyle for a wedding ceremony?">
                                </picture>
                                <span
                                    class="hrl 1321B4444F484B43C11321B4CB45431E4B4FC2C24643C11ECC454642451E454A46C1C2CBC648431E444FC11E4A1ECC434B4B46494C1E4243C1434E4F49C63F4B2A222321221321B42A">
                                    <div class="striped">
                                        <div class="white">
                                            <p class="labelTitle">folder</p>
                                            <a class="labelName"
                                                href="/folder/the-dossier-which-hairstyle-for-a-wedding-ceremony_d13523/1">The
                                                dossier: which hairstyle for a wedding ceremony?</a>
                                        </div>
                                    </div>
                                </span>
                            </div>
                            <p class="description">Articles in the same folder:</p>
                            <ul>
                                <li><a href="/article/how-can-i-create-a-rock-bride-hairstyle_a10413/1">How can
                                        I create a rock bride hairstyle?</a></li>
                                <li><a href="/article/my-chic-hairstyle-for-a-last-minute-invitation_a6698/1">My
                                        chic hairstyle for a last-minute invitation</a></li>
                                <li>
                                    <a href="/article/wedding-hairstyles-3-instagram-accounts-to-inspire-you_a9186/1">Wedding
                                        hairstyles: 3 Instagram accounts to inspire you</a></li>
                            </ul>

                            <span
                                class="hrl 1321B4444F484B43C11321B4CB45431E4B4FC2C24643C11ECC454642451E454A46C1C2CBC648431E444FC11E4A1ECC434B4B46494C1E4243C1434E4F49C63F4B2A222321221321B42A more">
                                More articles
                            </span>
                        </div>
                    </div>
                    <div class="contentCol" data-tracking-label="How best to prepare your hair for summer?">
                        <div class="contentColWrap">
                            <div class="imgWrap">
                                <picture>
                                    <source media="(max-width: 640px)"
                                        srcset="img/18182-your-hair-will-be-grateful-for-these-top-344x253-2.jpg">
                                    <source media="(max-width: 1023px)"
                                        srcset="img/18182-your-hair-will-be-grateful-for-these-top-344x253-2.jpg">
                                    <img src="https://via.placeholder.com/150x66"
                                        alt="How best to prepare your hair for summer?">
                                </picture>
                                <span
                                    class="hrl 1321B4444F484B43C11321B4454FCC1E4143C2CB1ECB4F1EC0C143C04AC1431EC64FC3C11E454A46C11E444FC11EC2C34E4E43C13F4B2A222320211321B42A">
                                    <div class="striped">
                                        <div class="white">
                                            <p class="labelTitle">folder</p>
                                            <a class="labelName"
                                                href="/folder/how-best-to-prepare-your-hair-for-summer_d13502/1">How best to
                                                prepare your hair for summer?</a>
                                        </div>
                                    </div>
                                </span>
                            </div>
                            <p class="description">Articles in the same folder:</p>
                            <ul>
                                <li><a href="/article/taking-care-of-my-dry-hair_a878/1">Taking care of my dry
                                        hair</a></li>
                                <li>
                                    <a href="/article/greasy-hair-how-should-you-take-care-of-it-in-summer_a11824/1">Greasy
                                        hair: How should you take care of it in summer?</a></li>
                                <li>
                                    <a href="/article/fine-hair-change-your-haircare-routine-for-summer_a8663/1">Fine
                                        hair: change your haircare routine for summer?</a></li>
                            </ul>

                            <span
                                class="hrl 1321B4444F484B43C11321B4454FCC1E4143C2CB1ECB4F1EC0C143C04AC1431EC64FC3C11E454A46C11E444FC11EC2C34E4E43C13F4B2A222320211321B42A more">
                                More articles
                            </span>
                        </div>
                    </div>
                </div>
                <a href="/folders" class="buttonView">
                    <p>All the folders</p>
                </a>
            </div>
        </div>
    </div>


    <div id="shopBlock" class="wide78 clearfix">
        <div class="mainPadding">
            <h2>This season's <span>essentials</span></h2>
        </div>
        <div class="carousel clearfix">
            <div class="carousel-wrapper">
                <div class="carousel-items">
                    <div class="carousel-block">
                        <span
                            class="hrl 1321B4C0C14F4BC342CBC21321B4424F49CBC14F481EC24E4F4FCB4546494C1E4E4AC2473FC0212A2C1321B42A">
                            <img src="https://via.placeholder.com/271x200" alt="&lt;p class=&quot;Grillemoyenne21&quot;&gt;Controlled Straightening: thanks to its silk protein agents and cotton oil, this shampoo-accompanying mask prolongs the effect of the Liss Therapy Rituel to obtain maximum hair strength. It provides hair with softness and shine. The hair regains its slick silky feel, styling is made easy, and its volume and kinks are brought under control for longer periods of time.&lt;/p&gt;
                            &lt;p class=&quot;Grillemoyenne21&quot;&gt;200ml&lt;/p&gt;" class="thumb" />
                            <span
                                class="hrl 1321B4C0C14F4BC342CBC21321B4424F49CBC14F481EC24E4F4FCB4546494C1E4E4AC2473FC0212A2C1321B42A popUp"
                                target="_blank">
                                <p>Discover it</p>
                            </span>
                            <img src="https://via.placeholder.com/81x27.jpg" class="productLogo" alt="" />
                            <h3>Control Smoothing Mask</h3>
                        </span></div>
                    <div class="carousel-block">
                        <span
                            class="hrl 1321B4C0C14F4BC342CBC21321B44E4F46C2CBC3C1431E4A494B1E48464C45CB4943C2C21EC2454A4EC04F4F3FC0231321B42A">
                            <img src="https://via.placeholder.com/271x200.png"
                                alt="&lt;p&gt;This shampoo combines the benefits of three precious oils: Argan, Jojoba, and Date Palm. Suitable for all hair types, it softly cleans the scalp while eliminating impurities. Hair is nourished and back to its natural softness and shine.&lt;/p&gt;"
                                class="thumb" />
                            <span
                                class="hrl 1321B4C0C14F4BC342CBC21321B44E4F46C2CBC3C1431E4A494B1E48464C45CB4943C2C21EC2454A4EC04F4F3FC0231321B42A popUp"
                                target="_blank">
                                <p>Discover it</p>
                            </span>
                            <img src="https://via.placeholder.com/81x27.jpg" class="productLogo" alt="" />
                            <h3>Moisture and Lightness Shampoo</h3>
                        </span></div>
                    <div class="carousel-block">
                        <span
                            class="hrl 1321B4C0C14F4BC342CBC21321B442C3C1481E4B4344464946CB464F491E48434AC4431E46491ECBC1434ACB4E4349CB3FC02C231321B42A">
                            <img src="https://via.placeholder.com/271x200.png"
                                alt="&lt;p class=&quot;Grillemoyenne21&quot;&gt;This no rinse Curl Bounce Complex-enriched treatment made of hyaluronic acid and a silicone and guaranteed paraben-free complex, redefines and hydrates curls without freezing them in place. They regain their spring and elasticity and take on a fresh and floral scent. Kinks are removed and the fiber is coated for the utmost in resilience!&lt;/p&gt;"
                                class="thumb" />
                            <span
                                class="hrl 1321B4C0C14F4BC342CBC21321B442C3C1481E4B4344464946CB464F491E48434AC4431E46491ECBC1434ACB4E4349CB3FC02C231321B42A popUp"
                                target="_blank">
                                <p>Discover it</p>
                            </span>
                            <img src="https://via.placeholder.com/81x27.jpg" class="productLogo" alt="" />
                            <h3>Curl & Definition Leave-In Treatment</h3>
                        </span></div>
                    <div class="carousel-block">
                        <span class="hrl 1321B4C0C14F4BC342CBC21321B44B43C2464C491EC2C0C14AC63FC02A2C201321B42A">
                            <img src="https://via.placeholder.com/271x200.png"
                                alt="&lt;p&gt;The Design Spray Urban Style Jean Louis David comes to the rescue of hair lacking in substance and hold. With its Dry Set style application it creates volume and especially long-lasting hold!&lt;/p&gt;"
                                class="thumb" />
                            <span class="hrl 1321B4C0C14F4BC342CBC21321B44B43C2464C491EC2C0C14AC63FC02A2C201321B42A popUp"
                                target="_blank">
                                <p>Discover it</p>
                            </span>
                            <img src="https://via.placeholder.com/81x27.jpg" class="productLogo" alt="" />
                            <h3>Design Spray</h3>
                        </span></div>
                    <div class="carousel-block">
                        <span
                            class="hrl 1321B4C0C14F4BC342CBC21321B4424F49CBC14F481ECB4543C14AC0C61EC2454A4EC04F4F3FC022231321B42A">
                            <img src="https://via.placeholder.com/271x200.png"
                                alt="&lt;p class=&quot;Grillemoyenne21&quot;&gt;This shampoo recreates balance and controls sebum production for sparkling clean hair. At the same time, dry strands are nourished completely. Your hair will be perfectly healthy, from the roots to the ends.&lt;/p&gt;"
                                class="thumb" />
                            <span
                                class="hrl 1321B4C0C14F4BC342CBC21321B4424F49CBC14F481ECB4543C14AC0C61EC2454A4EC04F4F3FC022231321B42A popUp"
                                target="_blank">
                                <p>Discover it</p>
                            </span>
                            <img src="https://via.placeholder.com/81x27.jpg" class="productLogo" alt="" />
                            <h3>Control Therapy Shampoo</h3>
                        </span></div>
                    <div class="carousel-block">
                        <span class="hrl 1321B4C0C14F4BC342CBC21321B442421E42C1434A4E3FC02A21231321B42A">
                            <img src="https://via.placeholder.com/271x200.png"
                                alt="&lt;p&gt;A 2-in-1 no rinse product featuring both Treatment and Styling which hydrates, protects, repairs, and brightens in just one action! Like BB Cream/CC Cream for your face, CC Cream Urban Style Jean Louis David offers total repair for your hair!&lt;/p&gt;"
                                class="thumb" />
                            <span class="hrl 1321B4C0C14F4BC342CBC21321B442421E42C1434A4E3FC02A21231321B42A popUp"
                                target="_blank">
                                <p>Discover it</p>
                            </span>
                            <img src="https://via.placeholder.com/81x27.jpg" class="productLogo" alt="" />
                            <h3>CC Cream</h3>
                        </span></div>
                </div>
            </div>
        </div>

        <div class="blockInfo blockInfoViewer">
            <div class="blockPoints">
                <div class="pointLeft pointLeft--sb"></div>
                <div class="pointRight pointRight--sb"></div>
            </div>
        </div>
    </div>

    <script>
        // WB.utils.sortNews();
        WB.utils.socialWall();

    </script>

@endsection
