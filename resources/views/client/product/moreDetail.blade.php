@extends('client.layout.master')


@section('title', 'Page Title')
@section('body-class', ' page_product_productline page_product')

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
                        <a itemprop="item" href="https://www.jeanlouisdavid.us/products/range/our-products_g5/1"><span
                                itemprop="name">Our Products</span></a>
                        <meta itemprop="position" content="3">
                        &gt;
                    </li>
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a itemprop="item" href="https://www.jeanlouisdavid.us/products/range/urban-care_g10/1"><span
                                itemprop="name">Urban Care</span></a>
                        <meta itemprop="position" content="4">
                        &gt;
                    </li>
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a itemprop="item" href="https://www.jeanlouisdavid.us/products/range/oil-therapy_g25/1"><span
                                itemprop="name">Oil Therapy</span></a>
                        <meta itemprop="position" content="5">
                        &gt;
                    </li>
                    <span class="current">Moisture and Lightness Shampoo</span>
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
            <div itemscope="" itemtype="http://schema.org/Product" class="content table">
                <meta itemprop="brand" content="Jean Louis David">
                <div class="product_info tableCell">
                    <img src="https://via.placeholder.com/125x42"
                        class="logo">

                    <span itemprop="name" class="title">
                        Moisture and Lightness Shampoo
                    </span>

                    <img itemprop="image" src="https://via.placeholder.com/370x420"
                        class="img_product" alt="Moisture and Lightness Shampoo">

                    <div id="sharebox" class="sharebox blockSocial grids"
                        data-url-unescaped="https://www.jeanlouisdavid.us/products/moisture-and-lightness-shampoo_p5/1"
                        data-title="Moisture and Lightness Shampoo" data-content-type="product" data-id="5"
                        data-image="https://via.placeholder.com/220x220">

                        <div class="label">Share</div>

                        <div class="iconContainer">
                            <div class="fontAwesome">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </div>
                        </div>

                        <div class="iconContainer">
                            <div class="fontAwesome">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                        </div>

                        <div class="iconContainer">
                            <div class="fontAwesome">
                               <a href="#">
                                   <i class="fab fa-pinterest-p"></i>
                               </a>
                            </div>
                        </div>

                        <div class="iconContainer">
                            <div class="fontAwesome">
                             <a href="#">
                                 <i class="fab fa-google-plus-g"></i>
                             </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="description_wrapper tableCell">
                    <div itemprop="description" class="description">
                        <p>This shampoo combines the benefits of three precious oils: Argan, Jojoba, and Date Palm. Suitable
                            for all hair types, it softly cleans the scalp while eliminating impurities. Hair is nourished
                            and back to its natural softness and shine.</p>
                    </div>

                </div>
            </div>


            <div class="related_content table">
                <div class="expert_council_wrapper tableCell">
                    <h2 class="expert_title"><span>Advice</span> of the Expert</h2>

                    <div class="expert_description">
                        <p>Apply evenly to damp hair by massaging the scalp. Emulsify, then rinse thoroughly.</p>
                    </div>
                </div>
                <div class="related_products_wrapper tableCell">
                    <h2 class="related_products_title">Also adopt</h2>

                    <div id="related_products">

                        <div class="flex-viewport" style="overflow: hidden; position: relative;">
                            <ul class="slides"
                                style="width: 400%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                <li class="item product" style="width: 270px; float: left; display: block;">
                                    <a class=" _hrl" href="/products/repair-and-radiance-mask_p65/1"> <img
                                            src="https://via.placeholder.com/220x220"
                                            class="img_product" alt="Repair and Radiance Mask" draggable="false">
                                        <div class="title_wrapper">
                                            <div class="table">
                                                <a href="/products/repair-and-radiance-mask_p65/1" class="title">Repair and
                                                    Radiance Mask</a>
                                            </div>
                                        </div>
                                        <a href="/product/moreDetail"><div class="more_link"><span>Discover</span> the product</div></a>
                                    </a> </li>
                                <li class="item product" style="width: 270px; float: left; display: block;">
                                    <a class=" _hrl" href="/products/nutrition-and-luminosity-oil_p70/1"> <img
                                            src="https://via.placeholder.com/220x220"
                                            class="img_product" alt="Nutrition and Luminosity Oil" draggable="false">
                                        <div class="title_wrapper">
                                            <div class="table">
                                                <a href="/products/nutrition-and-luminosity-oil_p70/1"
                                                    class="title">Nutrition and Luminosity Oil</a>
                                            </div>
                                        </div>
                                        <a href="/product/moreDetail"><div class="more_link"><span>Discover</span> the product</div></a>
                                    </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <script>
                    $j('#related_products').flexslider({
                        animation: "slide",
                        controlNav: false,
                        animationLoop: false,
                        slideshow: false,
                        itemWidth: 270,
                        itemMargin: 30,
                        minItems: 2,
                        maxItems: 2,
                        move: 2,
                        prevText: '<',
                        nextText: '>',
                        directionNav: false
                    });

                </script>
            </div>
        </div>
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
                        <a class=" articleThumbnail _hrl" href="/mostRead/index"> 
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
                            href="/mostRead/index"> <img
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
