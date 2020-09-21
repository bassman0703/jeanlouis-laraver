@extends('client.layout.master')


@section('title', 'Page Title')

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
                    <span class="current">News</span>
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
                    <img src="https://via.placeholder.com/1280x450" alt="News">
                    <h1 class="transparent">Section<span>News</span></h1>
                </div>
            </div>
        </div>

       
        
        <div class="shpNewsRow">
            <div class="wide78 noPaddingMobile">
                <div class="mainPadding">
                    <div class="articleBlock2 hpArticleBlock"
                        data-tracking-label="Hair tattoo: everything you should know to rock this summer hairstyle">
                        <div class="table">
                            <div class="tableCell">
                                <a class=" _hrl"
                                    href="/news/newsDetail">
                                    <div class="borderBlock">
                                        <img src="https://via.placeholder.com/170x151"
                                            alt="Hair tattoo: everything you should know to rock this summer hairstyle">

                                        <div class="border">
                                            <img src="/img/border_line.png">
                                        </div>
                                    </div>
                                </a> </div>
                            <div class="infoBlock">
                                <div class="typeInfo">
                                    News
                                </div>
                                <a href="/news/newsDetail"
                                    class="title">Hair tattoo: everything you should know to rock this summer hairstyle</a>

                            </div>
                        </div>
                    </div>
                    <div class="articleBlock2 hpArticleBlock"
                        data-tracking-label="[Instahair]5 hairstyles inspired by Game of Thrones">
                        <div class="table">
                            <div class="tableCell">
                                <a class=" _hrl"
                                    href="/news/newsDetail">
                                    <div class="borderBlock">
                                        <img src="https://via.placeholder.com/170x151"
                                            alt="[Instahair]5 hairstyles inspired by Game of Thrones">

                                        <div class="border">
                                            <img src="/img/border_line.png">
                                        </div>
                                    </div>
                                </a> </div>
                            <div class="infoBlock">
                                <div class="typeInfo">
                                    News

                                </div>
                                <a href="/news/newsDetail"
                                    class="title">[Instahair]5 hairstyles inspired by Game of Thrones</a>

                            </div>
                        </div>
                    </div>
                    <div class="articleBlock2 hpArticleBlock"
                        data-tracking-label="4 hairstyling tips for a successful selfie">
                        <div class="table">
                            <div class="tableCell">
                                <a class=" _hrl" href="/news/newsDetail">
                                    <div class="borderBlock">
                                        <img src="https://via.placeholder.com/170x151"
                                            alt="4 hairstyling tips for a successful selfie">

                                        <div class="border">
                                            <img src="/img/border_line.png">
                                        </div>
                                    </div>
                                </a> </div>
                            <div class="infoBlock">
                                <div class="typeInfo">
                                    News

                                </div>
                                <a href="/news/newsDetail" class="title">4
                                    hairstyling tips for a successful selfie</a>

                            </div>
                        </div>
                    </div>
                    <div class="articleBlock2 hpArticleBlock"
                        data-tracking-label="[Twitthair] A review of the latest hair-centric tweets">
                        <div class="table">
                            <div class="tableCell">
                                <a class=" _hrl"
                                    href="/news/newsDetail">
                                    <div class="borderBlock">
                                        <img src="https://via.placeholder.com/170x151"
                                            alt="[Twitthair] A review of the latest hair-centric tweets">

                                        <div class="border">
                                            <img src="/img/border_line.png">
                                        </div>
                                    </div>
                                </a> </div>
                            <div class="infoBlock">
                                <div class="typeInfo">
                                    News

                                </div>
                                <a href="/news/newsDetail"
                                    class="title">[Twitthair] A review of the latest hair-centric tweets</a>

                            </div>
                        </div>
                    </div>
                    <div class="articleBlock2 hpArticleBlock" data-tracking-label="[Instahair]5 ways to sport Space buns">
                        <div class="table">
                            <div class="tableCell">
                                <a class=" _hrl" href="/news/newsDetail">
                                    <div class="borderBlock">
                                        <img src="https://via.placeholder.com/170x151"
                                            alt="[Instahair]5 ways to sport Space buns">

                                        <div class="border">
                                            <img src="/img/border_line.png">
                                        </div>
                                    </div>
                                </a> </div>
                            <div class="infoBlock">
                                <div class="typeInfo">
                                    News

                                </div>
                                <a href="/news/newsDetail" class="title">[Instahair]5
                                    ways to sport Space buns</a>

                            </div>
                        </div>
                    </div>
                    <div class="articleBlock2 hpArticleBlock"
                        data-tracking-label="#BlackHairChallenge: the all-new Twitter trend">
                        <div class="table">
                            <div class="tableCell">
                                <a class=" _hrl" href="/news/newsDetail">
                                    <div class="borderBlock">
                                        <img src="https://via.placeholder.com/170x151"
                                            alt="#BlackHairChallenge: the all-new Twitter trend">

                                        <div class="border">
                                            <img src="/img/border_line.png">
                                        </div>
                                    </div>
                                </a> </div>
                            <div class="infoBlock">
                                <div class="typeInfo">
                                    News

                                </div>
                                <a href="/news/newsDetail"
                                    class="title">#BlackHairChallenge: the all-new Twitter trend</a>

                            </div>
                        </div>
                    </div>
                    <div class="articleBlock2 hpArticleBlock"
                        data-tracking-label="#BlackHairChallenge: the all-new Twitter trend">
                        <div class="table">
                            <div class="tableCell">
                                <a class=" _hrl" href="/news/newsDetail">
                                    <div class="borderBlock">
                                        <img src="https://via.placeholder.com/170x151"
                                            alt="#BlackHairChallenge: the all-new Twitter trend">

                                        <div class="border">
                                            <img src="/img/border_line.png">
                                        </div>
                                    </div>
                                </a> </div>
                            <div class="infoBlock">
                                <div class="typeInfo">
                                    News

                                </div>
                                <a href="/news/newsDetail"
                                    class="title">#BlackHairChallenge: the all-new Twitter trend</a>

                            </div>
                        </div>
                    </div>
                    <div class="articleBlock2 hpArticleBlock"
                        data-tracking-label="#BlackHairChallenge: the all-new Twitter trend">
                        <div class="table">
                            <div class="tableCell">
                                <a class=" _hrl" href="/news/newsDetail">
                                    <div class="borderBlock">
                                        <img src="https://via.placeholder.com/170x151"
                                            alt="#BlackHairChallenge: the all-new Twitter trend">

                                        <div class="border">
                                            <img src="/img/border_line.png">
                                        </div>
                                    </div>
                                </a> </div>
                            <div class="infoBlock">
                                <div class="typeInfo">
                                    News

                                </div>
                                <a href="/news/newsDetail"
                                    class="title">#BlackHairChallenge: the all-new Twitter trend</a>

                            </div>
                        </div>
                    </div>
                    <div class="articleBlock2 hpArticleBlock"
                        data-tracking-label="#BlackHairChallenge: the all-new Twitter trend">
                        <div class="table">
                            <div class="tableCell">
                                <a class=" _hrl" href="/news/newsDetail">
                                    <div class="borderBlock">
                                        <img src="https://via.placeholder.com/170x151"
                                            alt="#BlackHairChallenge: the all-new Twitter trend">

                                        <div class="border">
                                            <img src="/img/border_line.png">
                                        </div>
                                    </div>
                                </a> </div>
                            <div class="infoBlock">
                                <div class="typeInfo">
                                    News

                                </div>
                                <a href="/news/newsDetail"
                                    class="title">#BlackHairChallenge: the all-new Twitter trend</a>

                            </div>
                        </div>
                    </div>
                    <div class="articleBlock2 hpArticleBlock"
                        data-tracking-label="#BlackHairChallenge: the all-new Twitter trend">
                        <div class="table">
                            <div class="tableCell">
                                <a class=" _hrl" href="/news/newsDetail">
                                    <div class="borderBlock">
                                        <img src="https://via.placeholder.com/170x151"
                                            alt="#BlackHairChallenge: the all-new Twitter trend">

                                        <div class="border">
                                            <img src="/img/border_line.png">
                                        </div>
                                    </div>
                                </a> </div>
                            <div class="infoBlock">
                                <div class="typeInfo">
                                    News

                                </div>
                                <a href="/news/newsDetail"
                                    class="title">#BlackHairChallenge: the all-new Twitter trend</a>

                            </div>
                        </div>
                    </div>
                    <div class="articleBlock2 hpArticleBlock"
                        data-tracking-label="#BlackHairChallenge: the all-new Twitter trend">
                        <div class="table">
                            <div class="tableCell">
                                <a class=" _hrl" href="/news/newsDetail">
                                    <div class="borderBlock">
                                        <img src="https://via.placeholder.com/170x151"
                                            alt="#BlackHairChallenge: the all-new Twitter trend">

                                        <div class="border">
                                            <img src="/img/border_line.png">
                                        </div>
                                    </div>
                                </a> </div>
                            <div class="infoBlock">
                                <div class="typeInfo">
                                    News

                                </div>
                                <a href="/news/newsDetail"
                                    class="title">#BlackHairChallenge: the all-new Twitter trend</a>

                            </div>
                        </div>
                    </div>
                    <div class="articleBlock2 hpArticleBlock"
                        data-tracking-label="#BlackHairChallenge: the all-new Twitter trend">
                        <div class="table">
                            <div class="tableCell">
                                <a class=" _hrl" href="/news/newsDetail">
                                    <div class="borderBlock">
                                        <img src="https://via.placeholder.com/170x151"
                                            alt="#BlackHairChallenge: the all-new Twitter trend">

                                        <div class="border">
                                            <img src="/img/border_line.png">
                                        </div>
                                    </div>
                                </a> </div>
                            <div class="infoBlock">
                                <div class="typeInfo">
                                    News

                                </div>
                                <a href="/news/newsDetail"
                                    class="title">#BlackHairChallenge: the all-new Twitter trend</a>

                            </div>
                        </div>
                    </div>
                    <div class="articleBlock2 hpArticleBlock"
                        data-tracking-label="#BlackHairChallenge: the all-new Twitter trend">
                        <div class="table">
                            <div class="tableCell">
                                <a class=" _hrl" href="/news/newsDetail">
                                    <div class="borderBlock">
                                        <img src="https://via.placeholder.com/170x151"
                                            alt="#BlackHairChallenge: the all-new Twitter trend">

                                        <div class="border">
                                            <img src="/img/border_line.png">
                                        </div>
                                    </div>
                                </a> </div>
                            <div class="infoBlock">
                                <div class="typeInfo">
                                    News

                                </div>
                                <a href="/news/newsDetail"
                                    class="title">#BlackHairChallenge: the all-new Twitter trend</a>

                            </div>
                        </div>
                    </div>
                    <div class="articleBlock2 hpArticleBlock"
                        data-tracking-label="#BlackHairChallenge: the all-new Twitter trend">
                        <div class="table">
                            <div class="tableCell">
                                <a class=" _hrl" href="/news/newsDetail">
                                    <div class="borderBlock">
                                        <img src="https://via.placeholder.com/170x151"
                                            alt="#BlackHairChallenge: the all-new Twitter trend">

                                        <div class="border">
                                            <img src="/img/border_line.png">
                                        </div>
                                    </div>
                                </a> </div>
                            <div class="infoBlock">
                                <div class="typeInfo">
                                    News

                                </div>
                                <a href="/news/newsDetail"
                                    class="title">#BlackHairChallenge: the all-new Twitter trend</a>

                            </div>
                        </div>
                    </div>
                    <div class="articleBlock2 hpArticleBlock"
                        data-tracking-label="#BlackHairChallenge: the all-new Twitter trend">
                        <div class="table">
                            <div class="tableCell">
                                <a class=" _hrl" href="/news/newsDetail">
                                    <div class="borderBlock">
                                        <img src="https://via.placeholder.com/170x151"
                                            alt="#BlackHairChallenge: the all-new Twitter trend">

                                        <div class="border">
                                            <img src="/img/border_line.png">
                                        </div>
                                    </div>
                                </a> </div>
                            <div class="infoBlock">
                                <div class="typeInfo">
                                    News

                                </div>
                                <a href="/news/newsDetail"
                                    class="title">#BlackHairChallenge: the all-new Twitter trend</a>

                            </div>
                        </div>
                    </div>
                    <div class="articleBlock2 hpArticleBlock"
                        data-tracking-label="#BlackHairChallenge: the all-new Twitter trend">
                        <div class="table">
                            <div class="tableCell">
                                <a class=" _hrl" href="/news/newsDetail">
                                    <div class="borderBlock">
                                        <img src="https://via.placeholder.com/170x151"
                                            alt="#BlackHairChallenge: the all-new Twitter trend">

                                        <div class="border">
                                            <img src="/img/border_line.png">
                                        </div>
                                    </div>
                                </a> </div>
                            <div class="infoBlock">
                                <div class="typeInfo">
                                    News

                                </div>
                                <a href="/news/newsDetail"
                                    class="title">#BlackHairChallenge: the all-new Twitter trend</a>

                            </div>
                        </div>
                    </div>
                    <div class="articleBlock2 hpArticleBlock"
                        data-tracking-label="#BlackHairChallenge: the all-new Twitter trend">
                        <div class="table">
                            <div class="tableCell">
                                <a class=" _hrl" href="/news/newsDetail">
                                    <div class="borderBlock">
                                        <img src="https://via.placeholder.com/170x151"
                                            alt="#BlackHairChallenge: the all-new Twitter trend">

                                        <div class="border">
                                            <img src="/img/border_line.png">
                                        </div>
                                    </div>
                                </a> </div>
                            <div class="infoBlock">
                                <div class="typeInfo">
                                    News

                                </div>
                                <a href="/news/newsDetail"
                                    class="title">#BlackHairChallenge: the all-new Twitter trend</a>

                            </div>
                        </div>
                    </div><div class="articleBlock2 hpArticleBlock"
                    data-tracking-label="#BlackHairChallenge: the all-new Twitter trend">
                    <div class="table">
                        <div class="tableCell">
                            <a class=" _hrl" href="/news/newsDetail">
                                <div class="borderBlock">
                                    <img src="https://via.placeholder.com/170x151"
                                        alt="#BlackHairChallenge: the all-new Twitter trend">

                                    <div class="border">
                                        <img src="/img/border_line.png">
                                    </div>
                                </div>
                            </a> </div>
                        <div class="infoBlock">
                            <div class="typeInfo">
                                News

                            </div>
                            <a href="/news/newsDetail"
                                class="title">#BlackHairChallenge: the all-new Twitter trend</a>

                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <script>
            WB.utils.scrollbarInit('.dossier-text');

        </script>
        <div id="pagination" class="">
            <div class="wide78">
                <div class="line">
                    <div class="paginationLinks">
                        <a href="#" class="current">1</a> <a
                            href="#" class="">2</a>
                        <div class="buttonAfter">
                            <a class=" _hrl" href="#">
                                <i class="fas fa-chevron-right"></i>
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

        

@endsection
