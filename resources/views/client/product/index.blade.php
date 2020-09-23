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
                    <span class="current">Our products</span>
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

                <h1 class="productpage_header_title"><span class="preTitle"><span>Our</span> Products</span> Our Products
                </h1>
            </div>
        </div>
        <div class="wide78 productContent">
            <div class="mainPadding">

                <div class="productlines_list_roots_2">
                    <div class="productline_root odd">
                        <a class=" _hrl" href="/product/home">
                             <a href="/product/home"
                                class="title">Urban Care</a>
                            <div class="visuel_wrapper">
                                <img src="https://via.placeholder.com/570x238"
                                    class="visuel">
                            </div>
                            <div class="description">
                                Watching women entering Jean Louis David salons each year, the idea was to offer a range of
                                products that was different to all the others... one...
                            </div>
                            <a href="/product/home"><div class="more_link"><span>Discover</span> the range</div></a>
                        </a> </div>
                    <div class="productline_root even">
                        <a class=" _hrl" href="/product/home"> <a
                                href="/product/home" class="title">Urban Style</a>
                            <div class="visuel_wrapper">
                                <img src="https://via.placeholder.com/570x238"
                                    class="visuel">
                            </div>
                            <div class="description">
                                A perfect hairstyle 24/7? It's possible! Jean Louis David's Urban Style line was designed
                                especially with city hair in mind. Practical, fast, and...
                            </div>
                            <a href="/product/home"><div class="more_link"><span>Discover</span> the range</div></a>
                        </a> </div>
                </div>
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
                        <a class=" articleThumbnail _hrl" href="/article/how-to-apply-a-hair-mask-correctly_a948/1"> <img
                                src="https://static1.jeanlouisdavid.us/articles/8/94/8/@/1928-masque1-article_preview-1.jpg"
                                alt="How to apply a hair mask correctly">
                            <div class="border"><img src="/web/skins/images/border_line.png"></div>
                        </a>
                        <div class="articleDescription">
                            <p class="category">
                                Experts
                            </p>

                            <p class="articleTitle">
                                <a href="/article/how-to-apply-a-hair-mask-correctly_a948/1">
                                    <span>How to apply a hair mask correctly</span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="articlePreview"
                        data-tracking-label="What’s the difference between red and strawberry blonde hair?">
                        <a class=" articleThumbnail _hrl"
                            href="/article/whats-the-difference-between-red-and-strawberry-blonde-hair_a5198/1"> <img
                                src="https://static1.jeanlouisdavid.us/articles/8/51/98/@/6178-sem01-conseil-roux-article_preview-1.jpg"
                                alt="What’s the difference between red and strawberry blonde hair?">
                            <div class="border"><img src="/web/skins/images/border_line.png"></div>
                        </a>
                        <div class="articleDescription">
                            <p class="category">
                                Experts
                            </p>

                            <p class="articleTitle">
                                <a href="/article/whats-the-difference-between-red-and-strawberry-blonde-hair_a5198/1">
                                    <span>What’s the difference between red and strawberry blonde...</span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="articlePreview" data-tracking-label="How to hold your style without hairspray">
                        <a class=" articleThumbnail _hrl" href="/article/how-to-hold-your-style-without-hairspray_a5133/1">
                            <img src="https://static1.jeanlouisdavid.us/articles/3/51/33/@/6113-sem52-conseil-cheveuxsanslaque-article_preview-1.jpg"
                                alt="How to hold your style without hairspray">
                            <div class="border"><img src="/web/skins/images/border_line.png"></div>
                        </a>
                        <div class="articleDescription">
                            <p class="category">
                                Experts
                            </p>

                            <p class="articleTitle">
                                <a href="/article/how-to-hold-your-style-without-hairspray_a5133/1">
                                    <span>How to hold your style without hairspray</span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="articlePreview"
                        data-tracking-label="What are the differences between streaks and highlights?">
                        <a class=" articleThumbnail _hrl"
                            href="/article/what-are-the-differences-between-streaks-and-highlights_a9196/1"> <img
                                src="https://static1.jeanlouisdavid.us/articles/6/91/96/@/10686-what-are-the-differences-between-article_preview-1.jpg"
                                alt="What are the differences between streaks and highlights?">
                            <div class="border"><img src="/web/skins/images/border_line.png"></div>
                        </a>
                        <div class="articleDescription">
                            <p class="category">
                                Hair colouring
                            </p>

                            <p class="articleTitle">
                                <a href="/article/what-are-the-differences-between-streaks-and-highlights_a9196/1">
                                    <span>What are the differences between streaks and highlights?</span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="articlePreview" data-tracking-label="Fine hair: which colours can make it look thicker?">
                        <a class=" articleThumbnail _hrl"
                            href="/article/fine-hair-which-colours-can-make-it-look-thicker_a11182/1"> <img
                                src="https://static1.jeanlouisdavid.us/articles/2/11/18/2/@/14507-find-out-about-a-new-way-making-your-loc-article_preview-2.jpg"
                                alt="Fine hair: which colours can make it look thicker?">
                            <div class="border"><img src="/web/skins/images/border_line.png"></div>
                        </a>
                        <div class="articleDescription">
                            <p class="category">
                                Fine hair
                            </p>

                            <p class="articleTitle">
                                <a href="/article/fine-hair-which-colours-can-make-it-look-thicker_a11182/1">
                                    <span>Fine hair: which colours can make it look thicker?</span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="articlePreview" data-tracking-label="How to use styling mousse">
                        <a class=" articleThumbnail _hrl" href="/article/how-to-use-styling-mousse_a2433/1"> <img
                                src="https://static1.jeanlouisdavid.us/articles/3/24/33/@/3413-bien-utiliser-sa-mousse-coiffante-article_preview-1.jpg"
                                alt="How to use styling mousse">
                            <div class="border"><img src="/web/skins/images/border_line.png"></div>
                        </a>
                        <div class="articleDescription">
                            <p class="category">
                                Hairstyle
                            </p>

                            <p class="articleTitle">
                                <a href="/article/how-to-use-styling-mousse_a2433/1">
                                    <span>How to use styling mousse</span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="articlePreview" data-tracking-label="How can I keep my hair looking wavy after braiding?">
                        <a class=" articleThumbnail _hrl"
                            href="/article/how-can-i-keep-my-hair-looking-wavy-after-braiding_a6628/1"> <img
                                src="https://static1.jeanlouisdavid.us/articles/8/66/28/@/7608-sem33-conseil-ondule-article_preview-1.jpg"
                                alt="How can I keep my hair looking wavy after braiding?">
                            <div class="border"><img src="/web/skins/images/border_line.png"></div>
                        </a>
                        <div class="articleDescription">
                            <p class="category">
                                Hairstyle
                            </p>

                            <p class="articleTitle">
                                <a href="/article/how-can-i-keep-my-hair-looking-wavy-after-braiding_a6628/1">
                                    <span>How can I keep my hair looking wavy after braiding?</span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="articlePreview" data-tracking-label="Trimming your baby's hair for the first time">
                        <a class=" articleThumbnail _hrl"
                            href="/article/trimming-your-baby-s-hair-for-the-first-time_a11254/1"> <img
                                src="https://static1.jeanlouisdavid.us/articles/4/11/25/4/@/14604-find-out-when-and-how-to-cut-your-little-article_preview-2.jpg"
                                alt="Trimming your baby's hair for the first time">
                            <div class="border"><img src="/web/skins/images/border_line.png"></div>
                        </a>
                        <div class="articleDescription">
                            <p class="category">
                                Hairstyle
                            </p>

                            <p class="articleTitle">
                                <a href="/article/trimming-your-baby-s-hair-for-the-first-time_a11254/1">
                                    <span>Trimming your baby's hair for the first time</span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="articlePreview"
                        data-tracking-label="Why your fringe gets greasy quickly and how to avoid it">
                        <a class=" articleThumbnail _hrl"
                            href="/article/why-your-fringe-gets-greasy-quickly-and-how-to-avoid-it_a2963/1"> <img
                                src="https://static1.jeanlouisdavid.us/articles/3/29/63/@/3943-sem08-conseils-frangeregraisser-article_preview-1.jpg"
                                alt="Why your fringe gets greasy quickly and how to avoid it">
                            <div class="border"><img src="/web/skins/images/border_line.png"></div>
                        </a>
                        <div class="articleDescription">
                            <p class="category">
                                Hairstyle
                            </p>

                            <p class="articleTitle">
                                <a href="/article/why-your-fringe-gets-greasy-quickly-and-how-to-avoid-it_a2963/1">
                                    <span>Why your fringe gets greasy quickly and how to avoid it</span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
