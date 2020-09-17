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
                <span class="current">Men</span>
            </ol>
        </div>
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
                <img src="https://via.placeholder.com/1280x450" alt="Men">
                <h1 class="transparent">Section<span>Men Hairstyles</span></h1>
            </div>
        </div>
    </div>

    <div id="quoteBlock" class="wide78 clearfix">
        <div class="quote shpNewsCol1">
            <div class="quoteWrap dossier-text scrollable scroll" tabindex="-1">
                <div class="scroll-bar vertical" style="height: 285px; display: none;">
                    <div class="thumb" style="top: 0px; height: 527.435px;"></div>
                </div>
                <div class="viewport" style="height: 285px;">
                    <div class="overview" style="top: 0px;">
                        <p>Calling all guys: discover the top on-trend styles for every season to ensure your look is
                            both masculine and stylish. Like to think of yourself as a fashionista, hipster, sportsman
                            or grungy guy? Learn how to choose the right cut for your individual style. Find out how to
                            look after your hair, which products you'll need for your desired look and how to keep your
                            new cut in shape as well as in great condition.</p>
                    </div>
                </div>
                <div class="scroll-bar horizontal">
                    <div class="thumb"></div>
                </div>
            </div>
        </div>
        <h2 class="h1 hpGridHeader">News : all the news</h2>
        <div class="titledNews shpNewsCol2">
            <div class="articleBlock1 hpArticleBlock"
                data-tracking-label="Men: the influence of the fifties on the Spring-Summer 2020 hairstyles">
                <a class=" _hrl"
                    href="/trand/detail">
                    <img src="https://via.placeholder.com/371x240"
                        alt="Men: the influence of the fifties on the Spring-Summer 2020 hairstyles">
                </a>
                <div class="infoBlock">
                    <div class="typeInfo">Men</div>
                    <a href="/trand/detail"
                        class="title">Men: the influence of the fifties on the Spring-Summer...</a>

                    <p>Gentlemen, this summer is the time to say goodbye to bohemian styles, rock looks and man buns.
                        Now Jean Louis David's Spring-Summer collection injects a touch of 1950s sophistication and
                        glamour into current trends. Think Paul Newman's wild style or James Dean and Elvis Presley's
                        sex appeal: this season you can give the 50s look a go for...</p>
                </div>
            </div>
        </div>
        <div class="shpNewsRow">
            <h2 class="tag-news-title">Men: All the news</h2>
            <div class="wide78">
                <div class="mainPadding">
                    <div class="articleBlock2 hpArticleBlock" data-tracking-label="Men: 3 secrets to having healthy hair">
                        <div class="table">
                            <div class="tableCell">
                                <a class=" _hrl" href="/article/men-3-secrets-to-having-healthy-hair_a13517/1">
                                    <div class="borderBlock">
                                        <img src="https://via.placeholder.com/170x151"
                                            alt="Men: 3 secrets to having healthy hair">

                                        <div class="border"><img src="/web/skins/images/border_line.png"></div>
                                    </div>
                                </a> </div>
                            <div class="infoBlock">
                                <div class="typeInfo">
                                    Men

                                </div>
                                <a href="/article/men-3-secrets-to-having-healthy-hair_a13517/1" class="title">Men: 3
                                    secrets to having healthy hair</a>

                            </div>
                        </div>
                    </div>
                    <div class="articleBlock2 hpArticleBlock" data-tracking-label="3 haircut ideas to conceal baldness">
                        <div class="table">
                            <div class="tableCell">
                                <a class=" _hrl" href="/article/3-haircut-ideas-to-conceal-baldness_a13496/1">
                                    <div class="borderBlock">
                                        <img src="https://via.placeholder.com/170x151"
                                            alt="3 haircut ideas to conceal baldness">

                                        <div class="border"><img src="/web/skins/images/border_line.png"></div>
                                    </div>
                                </a> </div>
                            <div class="infoBlock">
                                <div class="typeInfo">
                                    Men

                                </div>
                                <a href="/article/3-haircut-ideas-to-conceal-baldness_a13496/1" class="title">3 haircut
                                    ideas to conceal baldness</a>

                            </div>
                        </div>
                    </div>
                    <div class="articleBlock2 hpArticleBlock" data-tracking-label="Men: how to tame thick hair?">
                        <div class="table">
                            <div class="tableCell">
                                <a class=" _hrl" href="/article/men-how-to-tame-thick-hair_a13475/1">
                                    <div class="borderBlock">
                                        <img src="https://via.placeholder.com/170x151"
                                            alt="Men: how to tame thick hair?">

                                        <div class="border"><img src="/web/skins/images/border_line.png"></div>
                                    </div>
                                </a> </div>
                            <div class="infoBlock">
                                <div class="typeInfo">
                                    Men

                                </div>
                                <a href="/article/men-how-to-tame-thick-hair_a13475/1" class="title">Men: how to tame
                                    thick hair?</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="expertBlockShp" class="noTags">
        <div class="wide80">

            <div class="col colPhoto">
                <a href="https://www.jeanlouisdavid.us/collections/spring-summer-collection_t46/1">
                    <img class=""
                        src="https://via.placeholder.com/420x300"
                        alt="">

                    <div class="photoBadge">
                        <p class="title">Crazy About JLD</p>

                        <p class="author">by Jean Louis David</p>

                        <p class="subtitle">Spring Summer 2020</p>
                    </div>
                </a> </div>
        </div>
    </div>
    <div class="shpNewsRow">
        <div class="wide78 noPaddingMobile">
            <div class="mainPadding">
                <div class="articleBlock2 hpArticleBlock"
                    data-tracking-label="Men: is it possible to use something other than gel?">
                    <div class="table">
                        <div class="tableCell">
                            <a class=" _hrl" href="/article/men-is-it-possible-to-use-something-other-than-gel_a13382/1">
                                <div class="borderBlock">
                                    <img src="https://via.placeholder.com/170x151"
                                        alt="Men: is it possible to use something other than gel?">

                                    <div class="border"><img src="/img/border_line.png"></div>
                                </div>
                            </a> </div>
                        <div class="infoBlock">
                            <div class="typeInfo">
                                Men

                            </div>
                            <a href="/article/men-is-it-possible-to-use-something-other-than-gel_a13382/1"
                                class="title">Men: is it possible to use something other than gel?</a>

                        </div>
                    </div>
                </div>
                <div class="articleBlock2 hpArticleBlock" data-tracking-label="Beards: Put a stop to ingrown hairs">
                    <div class="table">
                        <div class="tableCell">
                            <a class=" _hrl" href="/article/beards-put-a-stop-to-ingrown-hairs_a13119/1">
                                <div class="borderBlock">
                                    <img src="https://via.placeholder.com/170x151"
                                        alt="Beards: Put a stop to ingrown hairs">

                                    <div class="border"><img src="/img/border_line.png"></div>
                                </div>
                            </a> </div>
                        <div class="infoBlock">
                            <div class="typeInfo">
                                Men

                            </div>
                            <a href="/article/beards-put-a-stop-to-ingrown-hairs_a13119/1" class="title">Beards: Put a
                                stop to ingrown hairs</a>

                        </div>
                    </div>
                </div>
                <div class="articleBlock2 hpArticleBlock"
                    data-tracking-label="Men: 5 (good) reasons not to cut your hair yourself">
                    <div class="table">
                        <div class="tableCell">
                            <a class=" _hrl" href="/article/men-5-good-reasons-not-to-cut-your-hair-yourself_a13104/1">
                                <div class="borderBlock">
                                    <img src="https://via.placeholder.com/170x151"
                                        alt="Men: 5 (good) reasons not to cut your hair yourself">

                                    <div class="border"><img src="/img/border_line.png"></div>
                                </div>
                            </a> </div>
                        <div class="infoBlock">
                            <div class="typeInfo">
                                Men

                            </div>
                            <a href="/article/men-5-good-reasons-not-to-cut-your-hair-yourself_a13104/1" class="title">Men:
                                5 (good) reasons not to cut your hair yourself</a>

                        </div>
                    </div>
                </div>
                <div class="articleBlock2 hpArticleBlock" data-tracking-label="Blow-drying - for men!">
                    <div class="table">
                        <div class="tableCell">
                            <a class=" _hrl" href="/article/blow-drying-for-men_a13009/1">
                                <div class="borderBlock">
                                    <img src="https://via.placeholder.com/170x151"
                                        alt="Blow-drying - for men!">

                                    <div class="border"><img src="/img/border_line.png"></div>
                                </div>
                            </a> </div>
                        <div class="infoBlock">
                            <div class="typeInfo">
                                Men

                            </div>
                            <a href="/article/blow-drying-for-men_a13009/1" class="title">Blow-drying - for men!</a>

                        </div>
                    </div>
                </div>
                <div class="articleBlock2 hpArticleBlock"
                    data-tracking-label="Men's haircut trend: 3 ways to adopt the seventies style">
                    <div class="table">
                        <div class="tableCell">
                            <a class=" _hrl"
                                href="/article/men-s-haircut-trend-3-ways-to-adopt-the-seventies-style_a12912/1">
                                <div class="borderBlock">
                                    <img src="https://via.placeholder.com/170x151"
                                        alt="Men's haircut trend: 3 ways to adopt the seventies style">

                                    <div class="border"><img src="/img/border_line.png"></div>
                                </div>
                            </a> </div>
                        <div class="infoBlock">
                            <div class="typeInfo">
                                Men

                            </div>
                            <a href="/article/men-s-haircut-trend-3-ways-to-adopt-the-seventies-style_a12912/1"
                                class="title">Men's haircut trend: 3 ways to adopt the seventies style</a>

                        </div>
                    </div>
                </div>
                <div class="articleBlock2 hpArticleBlock"
                    data-tracking-label="Men: how can you enhance your salt and pepper hair?">
                    <div class="table">
                        <div class="tableCell">
                            <a class=" _hrl" href="/article/men-how-can-you-enhance-your-salt-and-pepper-hair_a12892/1">
                                <div class="borderBlock">
                                    <img src="https://via.placeholder.com/170x151"
                                        alt="Men: how can you enhance your salt and pepper hair?">

                                    <div class="border"><img src="/img/border_line.png"></div>
                                </div>
                            </a> </div>
                        <div class="infoBlock">
                            <div class="typeInfo">
                                Men

                            </div>
                            <a href="/article/men-how-can-you-enhance-your-salt-and-pepper-hair_a12892/1" class="title">Men:
                                how can you enhance your salt and pepper hair?</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="shopDossieBlock">
        <div class="wide78">
            <div id="shopBlock" class="tagPage">
                <div class="mainPadding">
                    <span class="h2">This season's <span>essentials</span></span>

                    <div class="carousel">
                        <div class="carousel-wrapper">
                            <div class="carousel-items slick-initialized slick-slider">
                                <div aria-live="polite" class="slick-list draggable" tabindex="0">
                                    <div class="slick-track"
                                        style="opacity: 1; width: 2050px; transform: translate3d(-410px, 0px, 0px);">
                                        <div class="carousel-block slick-slide slick-cloned" data-slick-index="-2"
                                            aria-hidden="true" style="width: 205px;">
                                            <a class=" _hrl" href="/products/control-therapy-shampoo_p35/1"> <img
                                                    src="https://via.placeholder.com/63x200"
                                                    alt="<p class=&quot;Grillemoyenne21&quot;>This shampoo recreates balance and controls sebum production for sparkling clean hair. At the same time, dry strands are nourished completely. Your hair will be perfectly healthy, from the roots to the ends.</p>"
                                                    class="thumb">
                                                <span
                                                    class="hrl 1321B4C0C14F4BC342CBC21321B4424F49CBC14F481ECB4543C14AC0C61EC2454A4EC04F4F3FC022231321B42A popUp"
                                                    target="_blank">
                                                    <p>Discover it</p>
                                                </span> <img
                                                    src="https://via.placeholder.com/53x18"
                                                    class="productLogo" alt="">
                                                <div class="border"></div>
                                            </a></div>
                                        <div class="carousel-block slick-slide slick-cloned" data-slick-index="-1"
                                            aria-hidden="true" style="width: 205px;">
                                            <a class=" _hrl" href="/products/cc-cream_p125/1"> <img
                                                    src="https://via.placeholder.com/63x200"
                                                    alt="<p>A 2-in-1 no rinse product featuring both Treatment and Styling which hydrates, protects, repairs, and brightens in just one action! Like BB Cream/CC Cream for your face, CC Cream Urban Style Jean Louis David offers total repair for your hair!</p>"
                                                    class="thumb">
                                                <span
                                                    class="hrl 1321B4C0C14F4BC342CBC21321B442421E42C1434A4E3FC02A21231321B42A popUp"
                                                    target="_blank">
                                                    <p>Discover it</p>
                                                </span>
                                                <div class="border"></div>
                                            </a></div>
                                        <div class="carousel-block slick-slide slick-active" data-slick-index="0"
                                            aria-hidden="false" style="width: 205px;">
                                            <a class=" _hrl" href="/products/control-smoothing-mask_p217/1"> <img
                                                    src="https://via.placeholder.com/63x200"
                                                    alt="<p class=&quot;Grillemoyenne21&quot;>Controlled Straightening: thanks to its silk protein agents and cotton oil, this shampoo-accompanying mask prolongs the effect of the Liss Therapy Rituel to obtain maximum hair strength. It provides hair with softness and shine. The hair regains its slick silky feel, styling is made easy, and its volume and kinks are brought under control for longer periods of time.</p>
        <p class=&quot;Grillemoyenne21&quot;>200ml</p>" class="thumb">
                                                <span
                                                    class="hrl 1321B4C0C14F4BC342CBC21321B4424F49CBC14F481EC24E4F4FCB4546494C1E4E4AC2473FC0212A2C1321B42A popUp"
                                                    target="_blank">
                                                    <p>Discover it</p>
                                                </span> <img
                                                    src="https://via.placeholder.com/53x18"
                                                    class="productLogo" alt="">
                                                <div class="border"></div>
                                            </a></div>
                                        <div class="carousel-block slick-slide slick-active" data-slick-index="1"
                                            aria-hidden="false" style="width: 205px;">
                                            <a class=" _hrl" href="/products/moisture-and-lightness-shampoo_p5/1"> <img
                                                    src="https://via.placeholder.com/63x200"
                                                    alt="<p>This shampoo combines the benefits of three precious oils: Argan, Jojoba, and Date Palm. Suitable for all hair types, it softly cleans the scalp while eliminating impurities. Hair is nourished and back to its natural softness and shine.</p>"
                                                    class="thumb">
                                                <span
                                                    class="hrl 1321B4C0C14F4BC342CBC21321B44E4F46C2CBC3C1431E4A494B1E48464C45CB4943C2C21EC2454A4EC04F4F3FC0231321B42A popUp"
                                                    target="_blank">
                                                    <p>Discover it</p>
                                                </span> <img
                                                    src="https://via.placeholder.com/53x18"
                                                    class="productLogo" alt="">
                                                <div class="border"></div>
                                            </a></div>
                                        <div class="carousel-block slick-slide" data-slick-index="2" aria-hidden="true"
                                            style="width: 205px;">
                                            <a class=" _hrl" href="/products/curl-definition-leave-in-treatment_p75/1">
                                                <img src="https://via.placeholder.com/63x200"
                                                    alt="<p class=&quot;Grillemoyenne21&quot;>This no rinse Curl Bounce Complex-enriched treatment made of hyaluronic acid and a silicone and guaranteed paraben-free complex, redefines and hydrates curls without freezing them in place. They regain their spring and elasticity and take on a fresh and floral scent. Kinks are removed and the fiber is coated for the utmost in resilience!</p>"
                                                    class="thumb">
                                                <span
                                                    class="hrl 1321B4C0C14F4BC342CBC21321B442C3C1481E4B4344464946CB464F491E48434AC4431E46491ECBC1434ACB4E4349CB3FC02C231321B42A popUp"
                                                    target="_blank">
                                                    <p>Discover it</p>
                                                </span> <img
                                                    src="https://via.placeholder.com/53x18"
                                                    class="productLogo" alt="">
                                                <div class="border"></div>
                                            </a></div>
                                        <div class="carousel-block slick-slide" data-slick-index="3" aria-hidden="true"
                                            style="width: 205px;">
                                            <a class=" _hrl" href="/products/design-spray_p170/1"> <img
                                                    src="https://via.placeholder.com/63x200"
                                                    alt="<p>The Design Spray Urban Style Jean Louis David comes to the rescue of hair lacking in substance and hold. With its Dry Set style application it creates volume and especially long-lasting hold!</p>"
                                                    class="thumb">
                                                <span
                                                    class="hrl 1321B4C0C14F4BC342CBC21321B44B43C2464C491EC2C0C14AC63FC02A2C201321B42A popUp"
                                                    target="_blank">
                                                    <p>Discover it</p>
                                                </span>
                                                <div class="border"></div>
                                            </a></div>
                                        <div class="carousel-block slick-slide" data-slick-index="4" aria-hidden="true"
                                            style="width: 205px;">
                                            <a class=" _hrl" href="/products/control-therapy-shampoo_p35/1"> <img
                                                    src="https://via.placeholder.com/63x200"
                                                    alt="<p class=&quot;Grillemoyenne21&quot;>This shampoo recreates balance and controls sebum production for sparkling clean hair. At the same time, dry strands are nourished completely. Your hair will be perfectly healthy, from the roots to the ends.</p>"
                                                    class="thumb">
                                                <span
                                                    class="hrl 1321B4C0C14F4BC342CBC21321B4424F49CBC14F481ECB4543C14AC0C61EC2454A4EC04F4F3FC022231321B42A popUp"
                                                    target="_blank">
                                                    <p>Discover it</p>
                                                </span> <img
                                                    src="https://via.placeholder.com/53x18"
                                                    class="productLogo" alt="">
                                                <div class="border"></div>
                                            </a></div>
                                        <div class="carousel-block slick-slide" data-slick-index="5" aria-hidden="true"
                                            style="width: 205px;">
                                            <a class=" _hrl" href="/products/cc-cream_p125/1"> <img
                                                    src="https://via.placeholder.com/63x200"
                                                    alt="<p>A 2-in-1 no rinse product featuring both Treatment and Styling which hydrates, protects, repairs, and brightens in just one action! Like BB Cream/CC Cream for your face, CC Cream Urban Style Jean Louis David offers total repair for your hair!</p>"
                                                    class="thumb">
                                                <span
                                                    class="hrl 1321B4C0C14F4BC342CBC21321B442421E42C1434A4E3FC02A21231321B42A popUp"
                                                    target="_blank">
                                                    <p>Discover it</p>
                                                </span>
                                                <div class="border"></div>
                                            </a></div>
                                        <div class="carousel-block slick-slide slick-cloned" data-slick-index="6"
                                            aria-hidden="true" style="width: 205px;">
                                            <a class=" _hrl" href="/products/control-smoothing-mask_p217/1"> <img
                                                    src="https://via.placeholder.com/63x200"
                                                    alt="<p class=&quot;Grillemoyenne21&quot;>Controlled Straightening: thanks to its silk protein agents and cotton oil, this shampoo-accompanying mask prolongs the effect of the Liss Therapy Rituel to obtain maximum hair strength. It provides hair with softness and shine. The hair regains its slick silky feel, styling is made easy, and its volume and kinks are brought under control for longer periods of time.</p>
        <p class=&quot;Grillemoyenne21&quot;>200ml</p>" class="thumb">
                                                <span
                                                    class="hrl 1321B4C0C14F4BC342CBC21321B4424F49CBC14F481EC24E4F4FCB4546494C1E4E4AC2473FC0212A2C1321B42A popUp"
                                                    target="_blank">
                                                    <p>Discover it</p>
                                                </span> <img
                                                    src="https://via.placeholder.com/53x18"
                                                    class="productLogo" alt="">
                                                <div class="border"></div>
                                            </a></div>
                                        <div class="carousel-block slick-slide slick-cloned" data-slick-index="7"
                                            aria-hidden="true" style="width: 205px;">
                                            <a class=" _hrl" href="/products/moisture-and-lightness-shampoo_p5/1"> <img
                                                    src="https://via.placeholder.com/63x200"
                                                    alt="<p>This shampoo combines the benefits of three precious oils: Argan, Jojoba, and Date Palm. Suitable for all hair types, it softly cleans the scalp while eliminating impurities. Hair is nourished and back to its natural softness and shine.</p>"
                                                    class="thumb">
                                                <span
                                                    class="hrl 1321B4C0C14F4BC342CBC21321B44E4F46C2CBC3C1431E4A494B1E48464C45CB4943C2C21EC2454A4EC04F4F3FC0231321B42A popUp"
                                                    target="_blank">
                                                    <p>Discover it</p>
                                                </span> <img
                                                    src="https://via.placeholder.com/53x18"
                                                    class="productLogo" alt="">
                                                <div class="border"></div>
                                            </a></div>
                                    </div>
                                </div> <button type="button" data-role="none" class="slick-prev" aria-label="previous"
                                    style="display: block;">Previous</button><button type="button" data-role="none"
                                    class="slick-next" aria-label="next" style="display: block;">Next</button>
                            </div>
                        </div>
                    </div>
                    <a href="/products" class="buttonGold mobileOnly">More products</a>
                </div>
            </div>
            <script>
                WB.utils.tagSlider();

            </script>
            <div id="sideBarBlock" class="dossieBlock">
                <div class="content">
                    <div class="wrap">
                        <h2>The latest hairstyles folders</h2>
                        <div class="contentCols">
                            <div class="contentCol contentMini">
                                <div class="contentColWrap">
                                    <div class="imgWrap">
                                        <img src="https://via.placeholder.com/317x207"
                                            alt="The dossier: which hairstyle for a wedding ceremony?">
                                        <a href="/folder/the-dossier-which-hairstyle-for-a-wedding-ceremony_d13523/1">
                                            <div class="striped">
                                                <div class="white">
                                                    <p class="labelTitle">folder</p>

                                                    <p class="labelName">The dossier: which hairstyle for a wedding
                                                        ceremony?</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <a class=" more _hrl"
                                        href="/folder/the-dossier-which-hairstyle-for-a-wedding-ceremony_d13523/1"> More
                                        articles The dossier: which hairstyle for a wedding ceremony?
                                    </a>
                                </div>
                            </div>
                            <div class="contentCol contentMini">
                                <div class="contentColWrap">
                                    <div class="imgWrap">
                                        <img src="https://via.placeholder.com/317x207"
                                            alt="How best to prepare your hair for summer?">
                                        <a href="/folder/how-best-to-prepare-your-hair-for-summer_d13502/1">
                                            <div class="striped">
                                                <div class="white">
                                                    <p class="labelTitle">folder</p>

                                                    <p class="labelName">How best to prepare your hair for summer?</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <a class=" more _hrl" href="/folder/how-best-to-prepare-your-hair-for-summer_d13502/1">
                                        More articles
                                        How best to prepare your hair for summer?
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="/folders" class="buttonView">
                            <p>All the folders</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shpNewsRow">
        <div class="wide78 noPaddingMobile">
            <div class="mainPadding">
                <div class="articleBlock2 hpArticleBlock"
                    data-tracking-label="Men's hairstyles: a closer look at the quiff haircut">
                    <div class="table">
                        <div class="tableCell">
                            <a class=" _hrl" href="/article/men-s-hairstyles-a-closer-look-at-the-quiff-haircut_a12812/1">
                                <div class="borderBlock">
                                    <img src="https://via.placeholder.com/170x151"
                                        alt="Men's hairstyles: a closer look at the quiff haircut">

                                    <div class="border">
                                        <img src="/img/border_line.png">
                                    </div>
                                </div>
                            </a> </div>
                        <div class="infoBlock">
                            <div class="typeInfo">
                                Men

                            </div>
                            <a href="/article/men-s-hairstyles-a-closer-look-at-the-quiff-haircut_a12812/1"
                                class="title">Men's hairstyles: a closer look at the quiff haircut</a>

                        </div>
                    </div>
                </div>
                <div class="articleBlock2 hpArticleBlock"
                    data-tracking-label="Men: which hairstyles cunningly conceal hair loss?">
                    <div class="table">
                        <div class="tableCell">
                            <a class=" _hrl" href="/article/men-which-hairstyles-cunningly-conceal-hair-loss_a12757/1">
                                <div class="borderBlock">
                                    <img src="https://via.placeholder.com/170x151"
                                        alt="Men: which hairstyles cunningly conceal hair loss?">

                                    <div class="border"><img src="/img/border_line.png"></div>
                                </div>
                            </a> </div>
                        <div class="infoBlock">
                            <div class="typeInfo">
                                Men

                            </div>
                            <a href="/article/men-which-hairstyles-cunningly-conceal-hair-loss_a12757/1" class="title">Men:
                                which hairstyles cunningly conceal hair loss?</a>

                        </div>
                    </div>
                </div>
                <div class="articleBlock2 hpArticleBlock"
                    data-tracking-label="Streetstyle: Guillaume's dandy rock'n'rétro look">
                    <div class="table">
                        <div class="tableCell">
                            <a class=" _hrl" href="/article/streetstyle-guillaume-s-dandy-rock-n-retro-look_a12732/1">
                                <div class="borderBlock">
                                    <img src="https://via.placeholder.com/170x151"
                                        alt="Streetstyle: Guillaume's dandy rock'n'rétro look">

                                    <div class="border"><img src="/img/border_line.png"></div>
                                </div>
                            </a> </div>
                        <div class="infoBlock">
                            <div class="typeInfo">
                                Men

                            </div>
                            <a href="/article/streetstyle-guillaume-s-dandy-rock-n-retro-look_a12732/1"
                                class="title">Streetstyle: Guillaume's dandy rock'n'rétro look</a>

                        </div>
                    </div>
                </div>
                <div class="articleBlock2 hpArticleBlock"
                    data-tracking-label="Men: how should I take care of my mid-length to long hair?">
                    <div class="table">
                        <div class="tableCell">
                            <a class=" _hrl"
                                href="/article/men-how-should-i-take-care-of-my-mid-length-to-long-hair_a12692/1">
                                <div class="borderBlock">
                                    <img src="https://via.placeholder.com/170x151"
                                        alt="Men: how should I take care of my mid-length to long hair?">

                                    <div class="border"><img src="/img/border_line.png"></div>
                                </div>
                            </a> </div>
                        <div class="infoBlock">
                            <div class="typeInfo">
                                Men

                            </div>
                            <a href="/article/men-how-should-i-take-care-of-my-mid-length-to-long-hair_a12692/1"
                                class="title">Men: how should I take care of my mid-length to long hair?</a>

                        </div>
                    </div>
                </div>
                <div class="articleBlock2 hpArticleBlock"
                    data-tracking-label="Men's hairstyles: how should you part your hair this season?">
                    <div class="table">
                        <div class="tableCell">
                            <a class=" _hrl"
                                href="/article/men-s-hairstyles-how-should-you-part-your-hair-this-season_a12657/1">
                                <div class="borderBlock">
                                    <img src="https://via.placeholder.com/170x151"
                                        alt="Men's hairstyles: how should you part your hair this season?">

                                    <div class="border"><img src="/img/border_line.png"></div>
                                </div>
                            </a> </div>
                        <div class="infoBlock">
                            <div class="typeInfo">
                                Men

                            </div>
                            <a href="/article/men-s-hairstyles-how-should-you-part-your-hair-this-season_a12657/1"
                                class="title">Men's hairstyles: how should you part your hair this season?</a>

                        </div>
                    </div>
                </div>
                <div class="articleBlock2 hpArticleBlock"
                    data-tracking-label="The undercut for men: 3 ways to style the front section">
                    <div class="table">
                        <div class="tableCell">
                            <a class=" _hrl"
                                href="/article/the-undercut-for-men-3-ways-to-style-the-front-section_a12667/1">
                                <div class="borderBlock">
                                    <img src="https://via.placeholder.com/170x151"
                                        alt="The undercut for men: 3 ways to style the front section">

                                    <div class="border"><img src="/img/border_line.png"></div>
                                </div>
                            </a> </div>
                        <div class="infoBlock">
                            <div class="typeInfo">
                                Men

                            </div>
                            <a href="/article/the-undercut-for-men-3-ways-to-style-the-front-section_a12667/1"
                                class="title">The undercut for men: 3 ways to style the front section</a>

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
                    <a href="https://www.jeanlouisdavid.us/tag/men_t44/1" class="current">1</a> <a
                        href="https://www.jeanlouisdavid.us/tag/men_t44/2" class="">2</a> <a
                        href="https://www.jeanlouisdavid.us/tag/men_t44/3" class="">3</a> <a
                        href="https://www.jeanlouisdavid.us/tag/men_t44/4" class="">4</a> <a
                        href="https://www.jeanlouisdavid.us/tag/men_t44/5" class="">5</a>
                    <div class="buttonAfter">
                        <a class=" _hrl" href="https://www.jeanlouisdavid.us/tag/men_t44/2"><i
                                class="fa fa-chevron-right"></i></a> </div>
                </div>
            </div>
        </div>
    </div>

    <div class="previewShp">
        <div class="wide78">
            <div class="mainPadding">
                <h2>Most read Men articles</h2>

                <div class="articlePreviewBlock">
                    <div class="articlePreview" data-tracking-label="Men: what hairstyles for men with sticking out ears?">
                        <a class=" articleThumbnail _hrl"
                            href="/article/men-what-hairstyles-for-ears-that-stick-out_a4948/1"> 
                            <img
                                src="https://via.placeholder.com/85x85"
                                alt="Men: what hairstyles for men with sticking out ears?">
                            <div class="border">
                                <img src="/img/border_line.png">
                            </div>
                        </a>
                        <div class="articleDescription">
                            <p class="category">
                                Men
                            </p>

                            <p class="articleTitle">
                                <a href="/article/men-what-hairstyles-for-ears-that-stick-out_a4948/1">
                                    <span>Men: what hairstyles for men with sticking out ears?</span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="articlePreview" data-tracking-label="Should men’s hair be cut when wet or dry? ">
                        <a class=" articleThumbnail _hrl" href="/article/should-mens-hair-be-cut-when-wet-or-dry_a5503/1">
                            <img src="https://via.placeholder.com/85x85"
                                alt="Should men’s hair be cut when wet or dry? ">
                            <div class="border">
                                <img src="/img/border_line.png">
                            </div>
                        </a>
                        <div class="articleDescription">
                            <p class="category">
                                Men
                            </p>

                            <p class="articleTitle">
                                <a href="/article/should-mens-hair-be-cut-when-wet-or-dry_a5503/1">
                                    <span>Should men’s hair be cut when wet or dry? </span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="articlePreview" data-tracking-label="Men: looking after a 3-day beard">
                        <a class=" articleThumbnail _hrl" href="/article/men-looking-after-a-3-day-beard_a3138/1"> <img
                                src="https://via.placeholder.com/85x85"
                                alt="Men: looking after a 3-day beard">
                            <div class="border">
                                <img src="/img/border_line.png">
                            </div>
                        </a>
                        <div class="articleDescription">
                            <p class="category">
                                Men
                            </p>

                            <p class="articleTitle">
                                <a href="/article/men-looking-after-a-3-day-beard_a3138/1">
                                    <span>Men: looking after a 3-day beard</span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="articlePreview" data-tracking-label="Men: how to style your hair with glasses">
                        <a class=" articleThumbnail _hrl" href="/article/men-how-to-style-your-hair-with-glasses_a3998/1">
                            <img src="https://via.placeholder.com/85x85"
                                alt="Men: how to style your hair with glasses">
                            <div class="border">
                                <img src="/img/border_line.png">
                            </div>
                        </a>
                        <div class="articleDescription">
                            <p class="category">
                                Men
                            </p>

                            <p class="articleTitle">
                                <a href="/article/men-how-to-style-your-hair-with-glasses_a3998/1">
                                    <span>Men: how to style your hair with glasses</span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="articlePreview" data-tracking-label="Haircuts for men with mid-length hair">
                        <a class=" articleThumbnail _hrl" href="/article/haircuts-for-men-with-mid-length-hair_a4643/1">
                            <img src="https://via.placeholder.com/85x85"
                                alt="Haircuts for men with mid-length hair">
                            <div class="border">
                                <img src="/img/border_line.png">
                            </div>
                        </a>
                        <div class="articleDescription">
                            <p class="category">
                                Men
                            </p>

                            <p class="articleTitle">
                                <a href="/article/haircuts-for-men-with-mid-length-hair_a4643/1">
                                    <span>Haircuts for men with mid-length hair</span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="articlePreview" data-tracking-label="Guys: how to style your hair with a hat">
                        <a class=" articleThumbnail _hrl" href="/article/guys-how-to-style-your-hair-with-a-hat_a6428/1">
                            <img src="https://via.placeholder.com/85x85"
                                alt="Guys: how to style your hair with a hat">
                            <div class="border">
                                <img src="/img/border_line.png">
                            </div>
                        </a>
                        <div class="articleDescription">
                            <p class="category">
                                Men
                            </p>

                            <p class="articleTitle">
                                <a href="/article/guys-how-to-style-your-hair-with-a-hat_a6428/1">
                                    <span>Guys: how to style your hair with a hat</span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="articlePreview" data-tracking-label="Alain Delon’s hairstyle makes a comeback!">
                        <a class=" articleThumbnail _hrl" href="/article/alain-delons-hairstyle-makes-a-comeback_a6028/1">
                            <img src="https://via.placeholder.com/85x85"
                                alt="Alain Delon’s hairstyle makes a comeback!">
                            <div class="border">
                                <img src="/img/border_line.png">
                            </div>
                        </a>
                        <div class="articleDescription">
                            <p class="category">
                                Men
                            </p>

                            <p class="articleTitle">
                                <a href="/article/alain-delons-hairstyle-makes-a-comeback_a6028/1">
                                    <span>Alain Delon’s hairstyle makes a comeback!</span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="articlePreview" data-tracking-label="Men: hair breakage, our advice for treating it">
                        <a class=" articleThumbnail _hrl"
                            href="/article/men-hair-breakage-our-advice-for-treating-it_a11749/1">
                             <img
                                src="https://via.placeholder.com/85x85"
                                alt="Men: hair breakage, our advice for treating it">
                            <div class="border">
                                <img src="/img/border_line.png">
                            </div>
                        </a>
                        <div class="articleDescription">
                            <p class="category">
                                Men
                            </p>

                            <p class="articleTitle">
                                <a href="/article/men-hair-breakage-our-advice-for-treating-it_a11749/1">
                                    <span>Men: hair breakage, our advice for treating it</span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="articlePreview" data-tracking-label="Men: 4 hairstyles to rock the dandy look">
                        <a class=" articleThumbnail _hrl" href="/article/men-4-hairstyles-to-rock-the-dandy-look_a11839/1">
                            <img src="https://via.placeholder.com/85x85"
                                alt="Men: 4 hairstyles to rock the dandy look">
                            <div class="border">
                                <img src="/img/border_line.png">
                            </div>
                        </a>
                        <div class="articleDescription">
                            <p class="category">
                                Men
                            </p>

                            <p class="articleTitle">
                                <a href="/article/men-4-hairstyles-to-rock-the-dandy-look_a11839/1">
                                    <span>Men: 4 hairstyles to rock the dandy look</span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection
