@extends('client.layout.master')


@section('title', 'Page Title')
@section('body-class', ' page_product_productline page_productline')

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
                        <a itemprop="item" href="https://www.jeanlouisdavid.us/products"><span itemprop="name">Our
                                products</span></a>
                        <meta itemprop="position" content="2">
                        &gt;
                    </li>
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a itemprop="item" href="https://www.jeanlouisdavid.us/products/range/urban-care_g10/1"><span
                                itemprop="name">Urban Care</span></a>
                        <meta itemprop="position" content="3">
                        &gt;
                    </li>
                    <span class="current">Oil Therapy</span>
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

        <div class="wide80">
            <div class="productpage_header">
                <img src="https://via.placeholder.com/1280x449">

                <h1 class="productpage_header_title"><span class="preTitle"><span>Our</span> Products</span> Oil Therapy
                </h1>
            </div>
        </div>
        <div class="wide78 productContent">
            <div class="content">
                <div class="right_col">
                    <div id="description_wrapper" class="description_wrapper" style="height: 361px;">
                        <div class="description">
                            <p>The power of oils!</p>
                            <p>Sensual, intoxicating, delicate, divine...oils are more precious than ever and ready to make
                                your hair beautiful! For the best hair all year long, be seduced by our Oil Therapy line, an
                                innovative formula suitable for all hair types. Guaranteed softness, bounce, and shine!</p>
                            <p>An exclusive formula: Precious Oil Complex</p>
                            <p>Made from jojoba oil to hydrate hair fiber and balance the scalp, argan oil for its
                                nourishing properties and protective anti-oxidants, desert date palm oil for intensive
                                repair and protection against damage, and precious Mother of Pearl for shine.</p>
                        </div>
                    </div>
                </div>

                <div class="item odd abso_logo">
                    <img src="https://via.placeholder.com/500x250"
                        class="productline_logo">
                </div>
                <div class="item product even">
                    <a class=" _hrl" href="/product/moreDetail"> 
                        <img src="https://via.placeholder.com/220x220"
                            class="img_product" alt="Moisture and Lightness Shampoo">
                        <div class="button_new ">
                            Take a look
                        </div>
                        <div class="title_wrapper">
                            <div class="table">
                                <a href="/product/moreDetail" class="title">Moisture and Lightness
                                    Shampoo</a>
                            </div>
                        </div>
                        <a href="/product/moreDetail"><div class="more_link"><span>Discover</span> the product</div></a>
                    </a> </div>
                <div class="item product odd">
                    <a class=" _hrl" href="/product/moreDetail">
                         <img src="https://via.placeholder.com/220x220"
                            class="img_product" alt="Repair and Radiance Mask">
                        <div class="button_new ">
                            Take a look
                        </div>
                        <div class="title_wrapper">
                            <div class="table">
                                <a href="/product/moreDetail" class="title">Repair and Radiance
                                    Mask</a>
                            </div>
                        </div>
                        <a href="/product/moreDetail"><div class="more_link"><span>Discover</span> the product</div></a>
                    </a> </div>
                <div class="item product even">
                    <a class=" _hrl" href="/product/moreDetail">
                         <img
                            src="https://via.placeholder.com/220x220"
                            class="img_product" alt="Nutrition and Luminosity Oil">
                        <div class="button_new ">
                            Take a look
                        </div>
                        <div class="title_wrapper">
                            <div class="table">
                                <a href="/product/moreDetail" class="title">Nutrition and
                                    Luminosity Oil</a>
                            </div>
                        </div>
                        <a href="/product/moreDetail"><div class="more_link"><span>Discover</span> the product</div></a>
                    </a> </div>
            </div>

            <div class="description_wrapper clone">
                <div class="description">
                    <p>The power of oils!</p>
                    <p>Sensual, intoxicating, delicate, divine...oils are more precious than ever and ready to make your
                        hair beautiful! For the best hair all year long, be seduced by our Oil Therapy line, an innovative
                        formula suitable for all hair types. Guaranteed softness, bounce, and shine!</p>
                    <p>An exclusive formula: Precious Oil Complex</p>
                    <p>Made from jojoba oil to hydrate hair fiber and balance the scalp, argan oil for its nourishing
                        properties and protective anti-oxidants, desert date palm oil for intensive repair and protection
                        against damage, and precious Mother of Pearl for shine.</p>
                </div>
            </div>
        </div>

        <script>
            WB.utils.fixProductlineDescriptionHeight('#description_wrapper', '.product');

        </script>

          <script>
            (function() {
                var infoIcon = document.querySelectorAll('.salonSearchForm__info--map');
                var popup = document.querySelectorAll('.salonSearchForm__popup--map');
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
            }());

        </script>
        <div class="previewShp most_read_articles">
            <div class="wide78">
                <div class="mainPadding2 paddingBottom4  tracking-click-parent" data-tracking-category="Les plus lus"
                    data-tracking-action="Clic articles">
                    <h2>Most read articles</h2>
                    <div class="articlePreview" data-tracking-label="How to apply a hair mask correctly">
                        <a class=" articleThumbnail _hrl" href="/article/how-to-apply-a-hair-mask-correctly_a948/1"> 
                            <img
                                src="https://via.placeholder.com/85x85"
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
                    <div class="articlePreview" data-tracking-label="Fine hair: which colours can make it look thicker?">
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
                    <div class="articlePreview" data-tracking-label="How can I keep my hair looking wavy after braiding?">
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

@endsection
