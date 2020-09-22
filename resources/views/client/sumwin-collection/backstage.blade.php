@extends('client.layout.master')


@section('title', 'Page Title')
@section('body-class', ' shpBackstages')

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
                        <a itemprop="item" href="https://www.jeanlouisdavid.us/backstages"><span itemprop="name">The
                                backstage</span></a>
                        <meta itemprop="position" content="2">
                        &gt;
                    </li>
                    <span class="current">Of the Autumn-Winter collection</span>
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
        <div class="wide80 lineHeight0">
            <div class="carusel">
                <img src="https://static1.jeanlouisdavid.us/tags/0/10/0/@/100-5d889cfe13ef1-tag_full-1.jpg"
                    alt="Of the Autumn-Winter collection">
                <div class="titleWrapper">
                    <div class="pageTitle">
                        <span>Backstages</span>
                        Of the Autumn-Winter collection
                    </div>
                </div>
            </div>
        </div>

        <div id="quoteBlock" class="shpBackstage">
            <div class="wide78">
                <div class="video-title-wrapper">
                    <h2 class="h1 hpGridHeader"><span>The backstage</span> in video</h2>
                </div>
                <div class="clearfix">
                    <div class="quote">
                        <div class="quoteWrap">
                            <div class="textWrap">
                                <p> Natural waves or ultra-straight graphic cuts, Jean Louis David's new Autumn-Winter
                                    2019/2020 collection indisputably plays with volume. The At The Top collection lets your
                                    creative side run wild with its discreet, yet fully embraced vintage style. The rock
                                    spirit, so dear to Jean Louis David's heart, is also an underlying theme. With this new
                                    collection, reinventing your style on a daily basis has become child's play.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wide78 backstageVideo">
            <div class="videoWrapper"><iframe width="560" height="315" src="https://www.youtube.com/embed/sRfQsJyXggA"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen=""></iframe></div>
        </div>

        <div id="backstage" class="wide80">
            <div class="wrapper">
                <h2 class="h1 hpGridHeader"><span>The backstage</span> in pictures</h2>

                <div class="backstageSlider slick-initialized slick-slider">
                    <div aria-live="polite" class="slick-list draggable" tabindex="0" style="padding: 0px;">
                        <div class="slick-track"
                            style="opacity: 1; width: 40000px; transform: translate3d(-1238px, 0px, 0px);">
                            <div class="overflowHidden slide landscape slick-slide slick-cloned" data-slick-index="-4"
                                aria-hidden="true">
                                <div class="backstageImages">
                                    <img src="https://static1.jeanlouisdavid.us/teasers/6/89/6/@/19259189-0-19259189-backstage-6-orig-1.jpg"
                                        alt="">
                                </div>
                            </div>
                            <div class="overflowHidden slide landscape slick-slide slick-cloned" data-slick-index="-3"
                                aria-hidden="true">
                                <div class="backstageImages">
                                    <img src="https://static1.jeanlouisdavid.us/teasers/0/90/0/@/19259195-0-19259195-backstage-7-orig-1.jpg"
                                        alt="">
                                </div>
                            </div>
                            <div class="overflowHidden slide landscape slick-slide slick-cloned" data-slick-index="-2"
                                aria-hidden="true">
                                <div class="backstageImages">
                                    <img src="https://static1.jeanlouisdavid.us/teasers/4/90/4/@/19259204-0-19259204-backstage-8-orig-1.jpg"
                                        alt="">
                                </div>
                            </div>
                            <div class="overflowHidden slide landscape slick-slide slick-cloned slick-active"
                                data-slick-index="-1" aria-hidden="false">
                                <div class="backstageImages">
                                    <img src="https://static1.jeanlouisdavid.us/teasers/8/90/8/@/19259213-0-19259213-backstage-9-orig-1.jpg"
                                        alt="">
                                </div>
                            </div>
                            <div class="overflowHidden slide portrait slick-slide slick-active slick-center"
                                data-slick-index="0" aria-hidden="false">
                                <div class="backstageImages">
                                    <img src="https://static1.jeanlouisdavid.us/teasers/0/88/0/@/19259147-0-19259147-backstage-01-orig-1.jpg"
                                        alt="">
                                </div>
                            </div>
                            <div class="overflowHidden slide landscape slick-slide slick-active" data-slick-index="1"
                                aria-hidden="false">
                                <div class="backstageImages">
                                    <img src="https://static1.jeanlouisdavid.us/teasers/4/88/4/@/19259153-0-19259153-backstage-3-orig-1.jpg"
                                        alt="">
                                </div>
                            </div>
                            <div class="overflowHidden slide landscape slick-slide" data-slick-index="2" aria-hidden="true">
                                <div class="backstageImages">
                                    <img src="https://static1.jeanlouisdavid.us/teasers/8/88/8/@/19259174-0-19259174-backstage-4-orig-1.jpg"
                                        alt="">
                                </div>
                            </div>
                            <div class="overflowHidden slide portrait slick-slide" data-slick-index="3" aria-hidden="true">
                                <div class="backstageImages">
                                    <img src="https://static1.jeanlouisdavid.us/teasers/2/89/2/@/19259183-0-19259183-backstage-5-orig-1.jpg"
                                        alt="">
                                </div>
                            </div>
                            <div class="overflowHidden slide landscape slick-slide" data-slick-index="4" aria-hidden="true">
                                <div class="backstageImages">
                                    <img src="https://static1.jeanlouisdavid.us/teasers/6/89/6/@/19259189-0-19259189-backstage-6-orig-1.jpg"
                                        alt="">
                                </div>
                            </div>
                            <div class="overflowHidden slide landscape slick-slide" data-slick-index="5" aria-hidden="true">
                                <div class="backstageImages">
                                    <img src="https://static1.jeanlouisdavid.us/teasers/0/90/0/@/19259195-0-19259195-backstage-7-orig-1.jpg"
                                        alt="">
                                </div>
                            </div>
                            <div class="overflowHidden slide landscape slick-slide" data-slick-index="6" aria-hidden="true">
                                <div class="backstageImages">
                                    <img src="https://static1.jeanlouisdavid.us/teasers/4/90/4/@/19259204-0-19259204-backstage-8-orig-1.jpg"
                                        alt="">
                                </div>
                            </div>
                            <div class="overflowHidden slide landscape slick-slide" data-slick-index="7" aria-hidden="true">
                                <div class="backstageImages">
                                    <img src="https://static1.jeanlouisdavid.us/teasers/8/90/8/@/19259213-0-19259213-backstage-9-orig-1.jpg"
                                        alt="">
                                </div>
                            </div>
                            <div class="overflowHidden slide portrait slick-slide slick-cloned slick-center"
                                data-slick-index="8" aria-hidden="true">
                                <div class="backstageImages">
                                    <img src="https://static1.jeanlouisdavid.us/teasers/0/88/0/@/19259147-0-19259147-backstage-01-orig-1.jpg"
                                        alt="">
                                </div>
                            </div>
                            <div class="overflowHidden slide landscape slick-slide slick-cloned" data-slick-index="9"
                                aria-hidden="true">
                                <div class="backstageImages">
                                    <img src="https://static1.jeanlouisdavid.us/teasers/4/88/4/@/19259153-0-19259153-backstage-3-orig-1.jpg"
                                        alt="">
                                </div>
                            </div>
                            <div class="overflowHidden slide landscape slick-slide slick-cloned" data-slick-index="10"
                                aria-hidden="true">
                                <div class="backstageImages">
                                    <img src="https://static1.jeanlouisdavid.us/teasers/8/88/8/@/19259174-0-19259174-backstage-4-orig-1.jpg"
                                        alt="">
                                </div>
                            </div>
                            <div class="overflowHidden slide portrait slick-slide slick-cloned" data-slick-index="11"
                                aria-hidden="true">
                                <div class="backstageImages">
                                    <img src="https://static1.jeanlouisdavid.us/teasers/2/89/2/@/19259183-0-19259183-backstage-5-orig-1.jpg"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div> <button type="button" data-role="none" class="slick-prev" aria-label="previous"
                        style="display: block;">Previous</button><button type="button" data-role="none" class="slick-next"
                        aria-label="next" style="display: block;">Next</button>
                </div>
            </div>
        </div>

        

       
@endsection
