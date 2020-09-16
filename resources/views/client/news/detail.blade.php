@extends('client.layout.master')


@section('title', 'Page Title')
@section('body-class', 'article-page')

@section('content')

<div id="pageContent">
    <div class="stickyBookingButton">
        <a href="https://reservations.jeanlouisdavid.com" target="_blank"><p>Book now</p></a>
    </div>
    <div id="mobileMenuBlock" class="wide78" data-tracking-category="Header"
         data-tracking-action="Clic rubriques">
        <div class="mainPadding">
            <div id="mobileMenuBlock__button">
                <a class="locationButton locationButton--noEvermaps"></a>
            </div>
            <a href="/" class="headerLogoMobileWrapper">
            <img src="{{ asset('img/logo.png') }}" class="headerLogoMobile"></a>
            <a class="mobileMenuButton fontAwesome">
                <span class="fa fa-bars"></span>
            </a>
        </div>
    </div>
    <div class="wide78 breadCrumbs">
        <div class="mainPadding">
            <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="https://www.jeanlouisdavid.us"><span
                            itemprop="name">Jean Louis David</span></a>
                    <meta itemprop="position" content="1"/>
                    >
                </li>
                <span class="current">The last news</span>
            </ol>
        </div>
    </div>

    <script>
        var infoIcon = document.querySelectorAll('.salonSearchForm__info');
        var popup = document.querySelectorAll('.salonSearchForm__popup');
        var changeSalon = document.querySelector('.locator__on__list .changeSalon');
        var windowWidth = window.innerWidth;

        if (changeSalon) {
            changeSalon.addEventListener('click', function () {
                document.querySelector('.locator-toggle').classList.remove('active');
                document.querySelector('.salon-search-toggle').classList.add('active');
            });
        }

        if (windowWidth > 768) {
            infoIcon.forEach(function (item) {
                item.addEventListener('mouseover', function () {
                    popup.forEach(function (itemP) {
                        itemP.style.opacity = 1;
                    })
                })
                item.addEventListener('mouseout', function () {
                    popup.forEach(function (itemP) {
                        itemP.style.opacity = 0;
                    })
                })
            })
        } else {
            infoIcon.forEach(function (item) {
                item.addEventListener('click', function () {
                    popup.forEach(function (itemP) {
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
                <img src="https://via.placeholder.com/1280x449" alt="The last news">
                <h1 class="transparent livenews">The last <span>news</span></h1>
            </div>
        </div>
    </div>

    <div class="wide78 livenewsContent">
        <div class="mainPadding">
            <div class="grids hpGrid clearfix">
                <div class="articleBlock1 hpArticleBlock"
                     data-tracking-label="Looks from the Crazy about JLD collection">

                        <span class="hrl 1321B44AC1CB464248431321B4484F4F47C21E44C14F4E1ECB45431E42C14ACDC61E4A414FC3CB1E4D484B1E424F48484342CB464F493F4A2A222420221321B42A">
                           <a href="home-page.html">
                               <img src="https://via.placeholder.com/371x240"
                                    alt="Looks from the Crazy about JLD collection"/>
                     </a>
                        </span>

                    <div class="infoBlock">
                        <div class="typeInfo">Spring-Summer collection</div>
                        <a href="home-page.html" class="title">Looks
                            from the Crazy about JLD collection</a>

                        <p>With the Spring-Summer 2020 Crazy about JLD collection, Jean Louis David pays homage
                            to some of the most memorable hairstyles from past decades. From the 50s to the 90s,
                            quiffs, mullets and cult looks which went down in history, these retro hairstyles
                            are now making a huge comeback without having aged a single day!
                            90s layers
                            In the fashion...</p>
                    </div>
                </div>
                <div class="articleBlock2 hpArticleBlock"
                     data-tracking-label="Colouring treatments from the Crazy About JLD Collection">
                    <div class="table">
                        <div class="tableCell">
                            <span class="hrl 1321B44AC1CB464248431321B4424F484FC3C146494C1ECBC1434ACB4E4349CBC21E44C14F4E1ECB45431E42C14ACDC61E4A414FC3CB1E4D484B1E424F48484342CB464F493F4A2A222420201321B42A">
                                <a href="home-page.html">
                                    <div class="borderBlock">
                                        <img src="https://via.placeholder.com/170x151"
                                             alt="Colouring treatments from the Crazy About JLD Collection"/>

                                    <div class="border">
                                        <img src="img/border_line.png">
                                    </div>
                                     </div>
                                </a>
    </span>
                        </div>
                        <div class="infoBlock">
                            <div class="typeInfo">
                                Spring-Summer collection

                            </div>
                            <a href="home-page.html"
                               class="title">Colouring treatments from the Crazy About JLD Collection</a>

                        </div>
                    </div>
                </div>
                <div class="articleBlock1 hpArticleBlock"
                     data-tracking-label="Layers: for a touch of 90s style at JLD">
<span class="hrl 1321B44AC1CB464248431321B4484AC643C1C21E444FC11E4A1ECB4FC342451E4F441E2620C21EC2CBC648431E4ACB1E4D484B3F4A2A2223262C1321B42A">        <img
        src="https://via.placeholder.com/170x151"
        alt="Layers: for a touch of 90s style at JLD"/>
</span>
                    <div class="infoBlock">
                        <div class="typeInfo">Spring-Summer collection</div>
                        <a href="/article/layers-for-a-touch-of-90s-style-at-jld_a13597/1" class="title">Layers:
                            for a touch of 90s style at JLD</a>

                        <p>Do you remember how layers were all the rage (almost) thirty years ago? Well, the
                            cult layers trend from the 90s is well and truly back, but with a more structured,
                            modern look and above all, a rock'n'roll vibe!
                            JLD's version of the 90s look
                            For this season, Jean Louis David decided to bring back some of the most flagship
                            haircuts from the past...</p>
                    </div>
                </div>
                <div class="articleBlock2 hpArticleBlock"
                     data-tracking-label="The Contrast treatment: a JLD exclusive technique for gradual lightening">
                    <div class="table">
                        <div class="tableCell">
                            <span class="hrl 1321B44AC1CB464248431321B4CB45431E424F49CBC14AC2CB1ECBC1434ACB4E4349CB1E4A1E4D484B1E43C54248C3C246C4431ECB4342454946CAC3431E444FC11E4CC14A4BC34A481E48464C45CB434946494C3F4A2A2223262B1321B42A">
                               <a href="home-page.html">
                                    <div class="borderBlock">
                                        <img src="https://via.placeholder.com/170x151"
                                             alt="The Contrast treatment: a JLD exclusive technique for gradual lightening"/>

                                        <div class="border">
                                            <img src="img/border_line.png">
                                        </div>
                                    </div>
                               </a>
                </span>
                        </div>
                        <div class="infoBlock">
                            <div class="typeInfo">
                                Spring-Summer collection

                            </div>
                            <a href="home-page.html"
                               class="title">The Contrast treatment: a JLD exclusive technique for gradual
                                lightening</a>
                        </div>
                    </div>
                </div>
                <div class="articleBlock1 hpArticleBlock"
                     data-tracking-label="Men: the influence of the fifties on the Spring-Summer 2020 hairstyles">
                    <span class="hrl 1321B44AC1CB464248431321B44E43491ECB45431E46494448C3434942431E4F441ECB45431E444644CB4643C21E4F491ECB45431EC2C0C146494C1EC2C34E4E43C11E212021201E454A46C1C2CBC64843C23F4A2A2223262A1321B42A">
                        <a href="home-page.html">
                        <img src="https://via.placeholder.com/371x240"
                             alt="Men: the influence of the fifties on the Spring-Summer 2020 hairstyles"/>
                        </a>
                    </span>
                    <div class="infoBlock">
                        <div class="typeInfo">Spring-Summer collection</div>
                        <a href="home-page.html"
                           class="title">Men: the influence of the fifties on the Spring-Summer...</a>

                        <p>Gentlemen, this summer is the time to say goodbye to bohemian styles, rock looks and
                            man buns. Now Jean Louis David's Spring-Summer collection injects a touch of 1950s
                            sophistication and glamour into current trends. Think Paul Newman's wild style or
                            James Dean and Elvis Presley's sex appeal: this season you can give the 50s look a
                            go for...</p>
                    </div>
                </div>
                <div class="articleBlock2 hpArticleBlock"
                     data-tracking-label="The mullet trend, JLD&#039;s must-have of the season!">
                    <div class="table">
                        <div class="tableCell">
                            <span class="hrl 1321B44AC1CB464248431321B4CB45431E4EC3484843CB1ECBC143494B1E4D484B1EC21E4EC3C2CB1E454AC4431E4F441ECB45431EC2434AC24F493F4A2A222325231321B42A">
                               <a href="home-page.html">
                                <div class="borderBlock">
                                    <img src="https://via.placeholder.com/170x151"
                                         alt="The mullet trend, JLD&#039;s must-have of the season!"/>

                                    <div class="border">
                                        <img src="img/border_line.png">
                                    </div>
                                </div>
                               </a>
    </span>
                        </div>
                        <div class="infoBlock">
                            <div class="typeInfo">
                                Spring-Summer collection

                            </div>
                            <a href="/article/the-mullet-trend-jld-s-must-have-of-the-season_a13585/1"
                               class="title">The mullet trend, JLD's must-have of the season!</a>

                        </div>
                    </div>
                </div>
                <div class="articleBlock2 hpArticleBlock"
                     data-tracking-label="Fringes take centre stage for spring-summer 2020">
                    <div class="table">
                        <div class="tableCell">
                            <span class="hrl 1321B44AC1CB464248431321B444C146494C43C21ECB4A47431E424349CBC1431EC2CB4A4C431E444FC11EC2C0C146494C1EC2C34E4E43C11E212021203F4A2A222325211321B42A">
                               <a href="home-page.html">
                                <div class="borderBlock">
                            <img src="https://via.placeholder.com/170x151"
                                 alt="Fringes take centre stage for spring-summer 2020"/>

                             <div class="border">
                                 <img src="img/border_line.png">
                             </div>
                                </div>
                               </a>
    </span>
                        </div>
                        <div class="infoBlock">
                            <div class="typeInfo">
                                Spring-Summer collection

                            </div>
                            <a href="home-page.html"
                               class="title">Fringes take centre stage for spring-summer 2020</a>

                        </div>
                    </div>
                </div>
                <div class="articleBlock2 hpArticleBlock"
                     data-tracking-label="The JLD review of emblematic hairstyles">
                    <div class="table">
                        <div class="tableCell">
                            <span class="hrl 1321B44AC1CB464248431321B4CB45431E4D484B1EC143C44643CC1E4F441E434E4148434E4ACB46421E454A46C1C2CBC64843C23F4A2A222325251321B42A">
                               <a href="home-page.html">
                                <div
                                    class="borderBlock">
                                    <img src="https://via.placeholder.com/170x151"
                                         alt="The JLD review of emblematic hairstyles"/>
                                        <div class="border">
                                            <img src="img/border_line.png">
                                        </div>
                                </div>
                               </a>
    </span>
                        </div>
                        <div class="infoBlock">
                            <div class="typeInfo">
                                Spring-Summer collection
                            </div>
                            <a href="home-page.html" class="title">
                                The JLD review of emblematic hairstyles
                            </a>
                        </div>
                    </div>
                </div>
                <div class="articleBlock2 hpArticleBlock"
                     data-tracking-label="Hair treatments: in which order should you use them?">
                    <div class="table">
                        <div class="tableCell">
                            <span class="hrl 1321B44AC1CB464248431321B4454A46C11ECBC1434ACB4E4349CBC21E46491ECC454642451E4FC14B43C11EC2454FC3484B1EC64FC31EC3C2431ECB45434E3F4A2A22232C261321B42A">
                                <div
                                        class="borderBlock">
            <img src="https://via.placeholder.com/170x151"
                 alt="Hair treatments: in which order should you use them?"/>

            <div class="border">
                <img src="img/border_line.png">
            </div>
        </div>
    </span></div>
                        <div class="infoBlock">
                            <div class="typeInfo">
                                Hair care

                            </div>
                            <a href="/article/hair-treatments-in-which-order-should-you-use-them_a13579/1"
                               class="title">Hair treatments: in which order should you use them?</a>

                        </div>
                    </div>
                </div>
                <div class="articleBlock1 hpArticleBlock"
                     data-tracking-label="Brunette hair colouring: which shade of brown to choose if you have pale skin?">
            <span class="hrl 1321B44AC1CB464248431321B441C1C34943CBCB431E454A46C11E424F484FC3C146494C1ECC454642451EC2454A4B431E4F441E41C14FCC491ECB4F1E42454F4FC2431E46441EC64FC31E454AC4431EC04A48431EC24746493F4A2A22232C2C1321B42A">
                <a href="home-page.html">
                    <img src="https://via.placeholder.com/371x240"
                         alt="Brunette hair colouring: which shade of brown to choose if you have pale skin?"/>
                </a>
            </span>
                    <div class="infoBlock">
                        <div class="typeInfo">Hair colouring</div>
                        <a href="home-page.html"
                           class="title">Brunette hair colouring: which shade of brown to choose...</a>

                        <p>If you have pale skin, you can still opt for a shade of brunette. However, certain
                            precautions are needed to avoid an overly pasty complexion. We take a closer look at
                            all of the brunette shades which will enhance your fair skin tone.
                            Chocolate brown to enhance pale skin
                            With its golden highlights, enhanced by a hint of mahogany, chocolate brown...</p>
                    </div>
                </div>
                <div class="articleBlock2 hpArticleBlock"
                     data-tracking-label="The masculine undercut from the Jean Louis David Autumn-Winter 19/20 collection">
                    <div class="table">
                        <div class="tableCell">
                            <span class="hrl 1321B44AC1CB464248431321B4CB45431E4E4AC242C3484649431EC3494B43C142C3CB1E44C14F4E1ECB45431E4D434A491E484FC346C21E4B4AC4464B1E4AC3CBC34E491ECC4649CB43C11E2A261E21201E424F48484342CB464F493F4A2A22232C2B1321B42A">
                                <a href="home-page.html">
                                    <div class="borderBlock">
                                        <img src="https://via.placeholder.com/170x151"
                                             alt="The masculine undercut from the Jean Louis David Autumn-Winter 19/20 collection"/>

                                        <div class="border">
                                            <img src="img/border_line.png">
                                        </div>
                                    </div>
                                </a>
    </span>
                        </div>
                        <div class="infoBlock">
                            <div class="typeInfo">
                                Collections
                            </div>
                            <a href="home-page.html"
                               class="title">The masculine undercut from the Jean Louis David Autumn-Winter
                                19/20 collection</a>

                        </div>
                    </div>
                </div>
                <div class="articleBlock1 hpArticleBlock"
                     data-tracking-label="Everyone is rocking the 80s trend this season!">
<span class="hrl 1321B44AC1CB464248431321B443C443C1C64F49431E46C21EC14F424746494C1ECB45431E2520C21ECBC143494B1ECB4546C21EC2434AC24F493F4A2A22232C2A1321B42A">        <img
        src="https://via.placeholder.com/371x240"
        alt="Everyone is rocking the 80s trend this season!"/>
</span>
                    <div class="infoBlock">
                        <div class="typeInfo">Collections</div>
                        <a href="/article/everyone-is-rocking-the-80s-trend-this-season_a13571/1" class="title">Everyone
                            is rocking the 80s trend this season!</a>

                        <p>With the new Autumn-Winter 2019/2020 collection, Jean Louis David has decided to give
                            80s styles a contemporary modern-day twist. What can we expect to see this season?
                            XXL volume, glamourous curls and punk hairstyles, for looks which are both daring
                            and modern.
                            A glamourous touch to boost volume
                            Although under-twenties may never have heard of...</p>
                    </div>
                </div>
                <div class="articleBlock2 hpArticleBlock"
                     data-tracking-label="The side parting for extra movement">
                    <div class="table">
                        <div class="tableCell">
                            <span class="hrl 1321B44AC1CB464248431321B4CB45431EC2464B431EC04AC1CB46494C1E444FC11E43C5CBC14A1E4E4FC4434E4349CB3F4A2A222324251321B42A">
                              <a href="home-page.html">
                                <div class="borderBlock">
                                    <img src="https://via.placeholder.com/170x151"
                                         alt="The side parting for extra movement"/>
                                        <div class="border">
                                            <img src="img/border_line.png">
                                        </div>
                                </div>
                              </a>
    </span>
                        </div>
                        <div class="infoBlock">
                            <div class="typeInfo">
                                Collections
                            </div>
                            <a href="home-page.html" class="title">
                                The side parting for extra movement
                            </a>

                        </div>
                    </div>
                </div>
                <div class="articleBlock1 hpArticleBlock" data-tracking-label="The short layered cut by Jean Louis David: a major trend this season">
                    <span class="hrl 1321B44AC1CB464248431321B4CB45431EC2454FC1CB1E484AC643C1434B1E42C3CB1E41C61E4D434A491E484FC346C21E4B4AC4464B1E4A1E4E4A4D4FC11ECBC143494B1ECB4546C21EC2434AC24F493F4A2A222324231321B42A">
                       <a href="home-page.html">
                            <img src="https://via.placeholder.com/371x240"
                                 alt="The short layered cut by Jean Louis David: a major trend this season"/>
                       </a>
                    </span>
                    <div class="infoBlock">
                        <div class="typeInfo">Collections</div>
                        <a href="home-page.html"
                           class="title">The short layered cut by Jean Louis David: a major trend...</a>
                        <p>For the new Autumn-Winter 2019/2020 "At The Top" collection, Jean Louis David has
                            created a short layered cut full of vitality and character. It's enough to convince
                            women to go for the chop this season.
                            The haircut: two-dimensional layers for more character
                            For the new season, this short cut is full of personality, embracing a
                            strong,...</p>
                    </div>
                </div>
                <div class="articleBlock2 hpArticleBlock"
                     data-tracking-label="Volume and movement for Autumn-Winter 2019/2020">
                    <div class="table">
                        <div class="tableCell">
                            <span class="hrl 1321B44AC1CB464248431321B4C44F48C34E431E4A494B1E4E4FC4434E4349CB1E444FC11E4AC3CBC34E491ECC4649CB43C11E21202A261E212021203F4A2A222324211321B42A">                <div
                                    class="borderBlock">
            <img src="https://via.placeholder.com/170x151"
                 alt="Volume and movement for Autumn-Winter 2019/2020"/>

            <div class="border"><img src="img/border_line.png"></div>
        </div>
    </span></div>
                        <div class="infoBlock">
                            <div class="typeInfo">
                                Collections

                            </div>
                            <a href="/article/volume-and-movement-for-autumn-winter-2019-2020_a13562/1"
                               class="title">Volume and movement for Autumn-Winter 2019/2020</a>

                        </div>
                    </div>
                </div>
                <div class="articleBlock2 hpArticleBlock"
                     data-tracking-label="Looks from the At The Top collection">
                    <div class="table">
                        <div class="tableCell">
                            <span class="hrl 1321B44AC1CB464248431321B4484F4F47C21E44C14F4E1ECB45431E4ACB1ECB45431ECB4FC01E424F48484342CB464F493F4A2A222323261321B42A">
                               <a href="home-page.html">
                                    <div class="borderBlock">
                                        <img src="https://via.placeholder.com/170x151"
                                             alt="Looks from the At The Top collection"/>

                                        <div class="border">
                                            <img src="img/border_line.png">
                                        </div>
                                    </div>
                               </a>
    </span>
                        </div>
                        <div class="infoBlock">
                            <div class="typeInfo">
                                Collections
                            </div>
                            <a href="home-page.html" class="title">Looks
                                from the At The Top collection
                            </a>
                        </div>
                    </div>
                </div>
                <div class="articleBlock2 hpArticleBlock"
                     data-tracking-label="Colouring treatments from the At The Top collection">
                    <div class="table">
                        <div class="tableCell">
                            <span class="hrl 1321B44AC1CB464248431321B4424F484FC3C146494C1ECBC1434ACB4E4349CBC21E44C14F4E1ECB45431E4ACB1ECB45431ECB4FC01E424F48484342CB464F493F4A2A222323241321B42A">
                               <a href="home-page.html">
                                    <div class="borderBlock">
                                        <img src="https://via.placeholder.com/170x151"
                                             alt="Colouring treatments from the At The Top collection"/>
                                        <div class="border">
                                            <img src="img/border_line.png">
                                        </div>
                                    </div>
                               </a>
    </span>
                        </div>
                        <div class="infoBlock">
                            <div class="typeInfo">
                                Collections
                            </div>
                            <a href="home-page.html"
                               class="title">Colouring treatments from the At The Top collection</a>
                        </div>
                    </div>
                </div>
                <div class="articleBlock2 hpArticleBlock"
                     data-tracking-label="Jean Louis David&#039;s sleek hairstyle for a vintage look">
                    <div class="table">
                        <div class="tableCell">
                            <span class="hrl 1321B44AC1CB464248431321B44D434A491E484FC346C21E4B4AC4464B1EC21EC2484343471E454A46C1C2CBC648431E444FC11E4A1EC44649CB4A4C431E484F4F473F4A2A222323221321B42A">                <div
                                    class="borderBlock">
            <img src="https://via.placeholder.com/170x151"
                 alt="Jean Louis David&#039;s sleek hairstyle for a vintage look"/>

            <div class="border"><img src="img/border_line.png"></div>
        </div>
    </span></div>
                        <div class="infoBlock">
                            <div class="typeInfo">
                                Collections

                            </div>
                            <a href="/article/jean-louis-david-s-sleek-hairstyle-for-a-vintage-look_a13553/1"
                               class="title">Jean Louis David's sleek hairstyle for a vintage look</a>

                        </div>
                    </div>
                </div>
                <div class="articleBlock1 hpArticleBlock"
                     data-tracking-label="Summer holidays: 3 essential hair treatments for your suitcase">
                        <span class="hrl 1321B44AC1CB464248431321B4C2C34E4E43C11E454F48464B4AC6C21E221E43C2C24349CB464A481E454A46C11ECBC1434ACB4E4349CBC21E444FC11EC64FC3C11EC2C346CB424AC2433F4A2A222323201321B42A">
                            <a href="home-page.html">
                            <img
                                src="https://via.placeholder.com/371x240"
                                alt="Summer holidays: 3 essential hair treatments for your suitcase"/>
                            </a>
                        </span>
                    <div class="infoBlock">
                        <div class="typeInfo">Hair care</div>
                        <a href="home-page.html"
                           class="title">Summer holidays: 3 essential hair treatments for your...</a>

                        <p>The summer holidays have arrived! Time to get your swimsuits, beach towels, sandals
                            and sun cream out. However, to complete your set of summer must-haves, be sure to
                            pop targeted hair treatments into your suitcase as well. We take a closer look at
                            the essentials.
                            Although the harmful effects of the sun on our skin have been deeply instilled
                            in...</p>
                    </div>
                </div>
                <div class="articleBlock2 hpArticleBlock"
                     data-tracking-label="Hair colouring: what are the trends for autumn 2019?">
                    <div class="table">
                        <div class="tableCell">
                            <span class="hrl 1321B44AC1CB464248431321B4454A46C11E424F484FC3C146494C1ECC454ACB1E4AC1431ECB45431ECBC143494BC21E444FC11E4AC3CBC34E491E21202A263F4A2A22232B2C1321B42A">                <div
                                    class="borderBlock">
            <img src="https://via.placeholder.com/170x151"
                 alt="Hair colouring: what are the trends for autumn 2019?"/>

            <div class="border"><img src="img/border_line.png"></div>
        </div>
    </span></div>
                        <div class="infoBlock">
                            <div class="typeInfo">
                                Hair colouring

                            </div>
                            <a href="/article/hair-colouring-what-are-the-trends-for-autumn-2019_a13547/1"
                               class="title">Hair colouring: what are the trends for autumn 2019?</a>

                        </div>
                    </div>
                </div>
                <div class="articleBlock1 hpArticleBlock"
                     data-tracking-label="Massaging your scalp: what are the benefits?">
<span class="hrl 1321B44AC1CB464248431321B44E4AC2C24A4C46494C1EC64FC3C11EC2424A48C01ECC454ACB1E4AC1431ECB45431E414349434446CBC23F4A2A222321261321B42A">        <img
        src="https://via.placeholder.com/371x240"
        alt="Massaging your scalp: what are the benefits?"/>
</span>
                    <div class="infoBlock">
                        <div class="typeInfo">Hair care</div>
                        <a href="/article/massaging-your-scalp-what-are-the-benefits_a13529/1" class="title">Massaging
                            your scalp: what are the benefits?</a>

                        <p>Praised for its relaxing effects, a scalp massage has many other virtues. Here are
                            three which should convince you to include this practice in your regime.
                            The hair's nourishing foundation, the scalp, deserves our utmost attention . To
                            pamper it, there is just one solution: regular massage. This regime is both simple
                            and effective because:
                            It...</p>
                    </div>
                </div>
                <div class="articleBlock2 hpArticleBlock"
                     data-tracking-label="How can you detangle your hair without damaging it?">
                    <div class="table">
                        <div class="tableCell">
                            <span class="hrl 1321B44AC1CB464248431321B4454FCC1E424A491EC64FC31E4B43CB4A494C48431EC64FC3C11E454A46C11ECC46CB454FC3CB1E4B4A4E4A4C46494C1E46CB3F4A2A22232B2B1321B42A">
                                <a href="home-page.html">
                                    <div class="borderBlock">
                                        <img src="https://via.placeholder.com/170x151"
                                             alt="How can you detangle your hair without damaging it?"/>
                                            <div class="border">
                                                <img src="img/border_line.png">
                                            </div>
                                    </div>
                                </a>
                            </span>
                        </div>
                        <div class="infoBlock">
                            <div class="typeInfo">
                                Hair care
                            </div>
                            <a href="home-page.html"
                               class="title">How can you detangle your hair without damaging it?</a>

                        </div>
                    </div>
                </div>
                <div class="articleBlock1 hpArticleBlock"
                     data-tracking-label="Hair masks: how long should I leave them in for?">
            <span class="hrl 1321B44AC1CB464248431321B4454A46C11E4E4AC247C21E454FCC1E484F494C1EC2454FC3484B1E461E48434AC4431ECB45434E1E46491E444FC13F4A2A22232B2A1321B42A">
                       <a href="home-page.html">
                        <img src="https://via.placeholder.com/371x240"
                             alt="Hair masks: how long should I leave them in for?"/>
                       </a>
            </span>
                    <div class="infoBlock">
                        <div class="typeInfo">Hair care</div>
                        <a href="home-page.html"
                           class="title">Hair masks: how long should I leave them in for?</a>

                        <p>We could sing the praises of hair masks all day long. Yet, there still remains one
                            grey area: how long should you leave a mask in for? Overnight, for an hour or a
                            minute? Jean Louis David sets the record straight.
                            You have without doubt heard that the longer you leave your hair mask to soak in,
                            the better the results. Certain traditional...</p>
                    </div>
                </div>
                <div class="articleBlock2 hpArticleBlock"
                     data-tracking-label="3 mistakes to avoid in summer to keep your hair looking beautiful">
                    <div class="table">
                        <div class="tableCell">
                            <span class="hrl 1321B44AC1CB464248431321B4221E4E46C2CB4A4743C21ECB4F1E4AC44F464B1E46491EC2C34E4E43C11ECB4F1E474343C01EC64FC3C11E454A46C11E484F4F4746494C1E41434AC3CB4644C3483F4A2A222322251321B42A">
                                <div
                                        class="borderBlock">
            <img src="https://via.placeholder.com/170x151"
                 alt="3 mistakes to avoid in summer to keep your hair looking beautiful"/>

            <div class="border">
                <img src="img/border_line.png">
            </div>
        </div>
    </span></div>
                        <div class="infoBlock">
                            <div class="typeInfo">
                                Hair care

                            </div>
                            <a href="/article/3-mistakes-to-avoid-in-summer-to-keep-your-hair-looking-beautiful_a13538/1"
                               class="title">3 mistakes to avoid in summer to keep your hair looking
                                beautiful</a>

                        </div>
                    </div>
                </div>
                <div class="articleBlock2 hpArticleBlock"
                     data-tracking-label="Sun exposure: how to stop the yellowing effect on my blonde hair?">
                    <div class="table">
                        <div class="tableCell">
                            <span class="hrl 1321B44AC1CB464248431321B4C2C3491E43C5C04FC2C3C1431E454FCC1ECB4F1EC2CB4FC01ECB45431EC64348484FCC46494C1E4344444342CB1E4F491E4EC61E41484F494B431E454A46C13F4A2A222322231321B42A">
                               <a href="home-page.html">
                                <div class="borderBlock">
                                    <img src="https://via.placeholder.com/170x151"
                                         alt="Sun exposure: how to stop the yellowing effect on my blonde hair?"/>
                                    <div class="border">
                                <img src="img/border_line.png">
                                </div>
                               </a>
                        </div>
                            </span>
                        </div>
                        <div class="infoBlock">
                            <div class="typeInfo">
                                Blonde hair
                            </div>
                            <a href="home-page.html"
                               class="title">Sun exposure: how to stop the yellowing effect on my blonde hair?
                            </a>
                        </div>
                    </div>
                </div>
                <div class="articleBlock2 hpArticleBlock"
                     data-tracking-label="Is a fringe in summer a good or bad idea?">
                    <div class="table">
                        <div class="tableCell">
                            <span class="hrl 1321B44AC1CB464248431321B446C21E4A1E44C146494C431E46491EC2C34E4E43C11E4A1E4C4F4F4B1E4FC11E414A4B1E464B434A3F4A2A222322211321B42A">
                                <a href="home-page.html">
                                <div class="borderBlock">
                                    <img src="https://via.placeholder.com/170x151"
                                         alt="Is a fringe in summer a good or bad idea?"/>
                                    <div class="border">
                                        <img src="img/border_line.png">
                                    </div>
                                 </div>
                                </a>
                            </span>
                        </div>
                        <div class="infoBlock">
                            <div class="typeInfo">
                                Hairstyle
                            </div>
                            <a href="home-page.html" class="title">Is
                                a fringe in summer a good or bad idea?</a>
                        </div>
                    </div>
                </div>
                <div class="articleBlock2 hpArticleBlock"
                     data-tracking-label="Gloss vs patina: which technique should you choose ?">
                    <div class="table">
                        <div class="tableCell">
                            <span class="hrl 1321B44AC1CB464248431321B44C484FC2C21EC4C21EC04ACB46494A1ECC454642451ECB4342454946CAC3431EC2454FC3484B1EC64FC31E42454F4FC2433F4A2A222321241321B42A">                <div
                                    class="borderBlock">
            <img src="https://via.placeholder.com/170x151"
                 alt="Gloss vs patina: which technique should you choose ?"/>

            <div class="border"><img src="img/border_line.png"></div>
        </div>
    </span></div>
                        <div class="infoBlock">
                            <div class="typeInfo">
                                Caring for coloured hair

                            </div>
                            <a href="/article/gloss-vs-patina-which-technique-should-you-choose_a13526/1"
                               class="title">Gloss vs patina: which technique should you choose ?</a>

                        </div>
                    </div>
                </div>
                <div class="articleBlock2 hpArticleBlock"
                     data-tracking-label="Curly or frizzy hair: what are the differences?">
                    <div class="table">
                        <div class="tableCell">
                            <span class="hrl 1321B44AC1CB464248431321B442C3C148C61E4FC11E44C146CDCDC61E454A46C11ECC454ACB1E4AC1431ECB45431E4B46444443C143494243C23F4A2A222321201321B42A">
                                <a href="home-page.html">
                                    <div class="borderBlock">
                                        <img src="https://via.placeholder.com/170x151"
                                             alt="Curly or frizzy hair: what are the differences?"/>

                                        <div class="border">
                                            <img src="img/border_line.png">
                                        </div>
                                    </div>
                                </a>
                            </span>
                        </div>
                        <div class="infoBlock">
                            <div class="typeInfo">
                                Curly hair
                            </div>
                            <a href="home-page.html"
                               class="title">Curly or frizzy hair: what are the differences?
                            </a>
                        </div>
                    </div>
                </div>
                <div class="articleBlock2 hpArticleBlock"
                     data-tracking-label="Men: 3 secrets to having healthy hair">
                    <div class="table">
                        <div class="tableCell">
                            <span class="hrl 1321B44AC1CB464248431321B44E43491E221EC24342C143CBC21ECB4F1E454AC446494C1E45434A48CB45C61E454A46C13F4A2A22232A2C1321B42A">                <div
                                    class="borderBlock">
            <img src="https://via.placeholder.com/170x151"
                 alt="Men: 3 secrets to having healthy hair"/>

            <div class="border"><img src="img/border_line.png"></div>
        </div>
    </span></div>
                        <div class="infoBlock">
                            <div class="typeInfo">
                                Men

                            </div>
                            <a href="/article/men-3-secrets-to-having-healthy-hair_a13517/1" class="title">Men:
                                3 secrets to having healthy hair</a>

                        </div>
                    </div>
                </div>
                <div class="articleBlock2 hpArticleBlock"
                     data-tracking-label="Changing colour – is it bad for your hair?">
                    <div class="table">
                        <div class="tableCell">
                            <span class="hrl 1321B44AC1CB464248431321B442454A494C46494C1E424F484FC3C11E46C21E46CB1E414A4B1E444FC11EC64FC3C11E454A46C13F4A2A22232A2B1321B42A">                <div
                                    class="borderBlock">
            <img src="https://via.placeholder.com/170x151"
                 alt="Changing colour – is it bad for your hair?"/>

            <div class="border">
                <img src="img/border_line.png"></div>
        </div>
    </span>
                        </div>
                        <div class="infoBlock">
                            <div class="typeInfo">
                                Hair colouring

                            </div>
                            <a href="/article/changing-colour-is-it-bad-for-your-hair_a13514/1" class="title">Changing
                                colour – is it bad for your hair?</a>

                        </div>
                    </div>
                </div>
                <div class="articleBlock2 hpArticleBlock"
                     data-tracking-label="Preconceptions about dry shampoo">
                    <div class="table">
                        <div class="tableCell">
                            <span class="hrl 1321B44AC1CB464248431321B4C0C143424F494243C0CB464F49C21E4A414FC3CB1E4BC1C61EC2454A4EC04F4F3F4A2A222320251321B42A">
                                <a href="home-page.html">
                                    <div class="borderBlock">
                                        <img src="https://via.placeholder.com/170x151"
                                             alt="Preconceptions about dry shampoo"/>
                                        <div class="border">
                                            <img src="img/border_line.png">
                                        </div>
                                    </div>
                                </a>
                            </span>
                        </div>
                        <div class="infoBlock">
                            <div class="typeInfo">
                                Hair care
                            </div>
                            <a href="home-page.html" class="title">Preconceptions
                                about dry shampoo</a>
                        </div>
                    </div>
                </div>
                <div class="articleBlock2 hpArticleBlock"
                     data-tracking-label="3 ideas for perfect hot-weather hairstyles">
                    <div class="table">
                        <div class="tableCell">
                            <span class="hrl 1321B44AC1CB464248431321B4221E464B434AC21E444FC11EC043C1444342CB1E454FCB1ECC434ACB4543C11E454A46C1C2CBC64843C23F4A2A22232A2A1321B42A">
                                <div
                                        class="borderBlock">
            <img src="https://via.placeholder.com/170x151"
                 alt="3 ideas for perfect hot-weather hairstyles"/>

            <div class="border">
                <img src="img/border_line.png">
            </div>
        </div>
    </span></div>
                        <div class="infoBlock">
                            <div class="typeInfo">
                                Hairstyle

                            </div>
                            <a href="/article/3-ideas-for-perfect-hot-weather-hairstyles_a13511/1"
                               class="title">3 ideas for perfect hot-weather hairstyles</a>

                        </div>
                    </div>
                </div>
                <div class="articleBlock2 hpArticleBlock"
                     data-tracking-label="3 good reasons to opt for a hair gloss treatment">
                    <div class="table">
                        <div class="tableCell">
                            <span class="hrl 1321B44AC1CB464248431321B4221E4C4F4F4B1EC1434AC24F49C21ECB4F1E4FC0CB1E444FC11E4A1E454A46C11E4C484FC2C21ECBC1434ACB4E4349CB3F4A2A222320231321B42A">                <div
                                    class="borderBlock">
            <img src="https://via.placeholder.com/170x151"
                 alt="3 good reasons to opt for a hair gloss treatment"/>

            <div class="border"><img src="img/border_line.png"></div>
        </div>
    </span></div>
                        <div class="infoBlock">
                            <div class="typeInfo">
                                Hair colouring

                            </div>
                            <a href="/article/3-good-reasons-to-opt-for-a-hair-gloss-treatment_a13505/1"
                               class="title">3 good reasons to opt for a hair gloss treatment</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="pagination" class="">
        <div class="wide78">
            <div class="line">
                <div class="paginationLinks">
                    <a href="/livenews/1" class="current">1</a> <a href="/livenews/2" class="">2</a> <a
                        href="/livenews/3" class="">3</a> <a href="/livenews/4" class="">4</a> <a
                        href="/livenews/5" class="">5</a> <a href="/livenews/6" class="">6</a> <a
                        href="/livenews/7" class="">7</a> <a href="/livenews/8" class="">8</a> <a
                        href="/livenews/9" class="">9</a>
                    <div class="buttonAfter">
                        <span class="hrl 1321B44846C4434943CCC21321B421"><i
                                class="fa fa-chevron-right"></i></span></div>
                </div>
                <div class="paginationLinks">
                    <a href="/livenews/10" class="">10</a> <a href="/livenews/20" class="">20</a> <a
                        href="/livenews/30" class="">30</a> <a href="/livenews/40" class="">40</a> <a
                        href="/livenews/50" class="">50</a> <a href="/livenews/60" class="">60</a> <a
                        href="/livenews/70" class="">70</a></div>
            </div>
        </div>
    </div>

    <div id="sideBarBlock" class="wide78">
        <div class="sidebar">
            <div class="wrap tracking-click-parent" data-tracking-category="Les plus lus"
                 data-tracking-action="Clic articles">
                <h2>Most read articles</h2>

                <div class="articlePreviewBlock">
                    <div class="articlePreview" data-tracking-label="How to apply a hair mask correctly">
<span class="hrl 1321B44AC1CB464248431321B4454FCC1ECB4F1E4AC0C048C61E4A1E454A46C11E4E4AC2471E424FC1C14342CB48C63F4A262B251321B42A articleThumbnail">        <img
    src="https://via.placeholder.com/77x77"
    alt="How to apply a hair mask correctly">
<div class="border"><img src="img/border_line.png"></div>
</span>
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
<span class="hrl 1321B44AC1CB464248431321B4CC454ACBC21ECB45431E4B46444443C1434942431E4143CBCC4343491EC1434B1E4A494B1EC2CBC14ACC4143C1C1C61E41484F494B431E454A46C13F4A232A26251321B42A articleThumbnail">        <img
    src="https://via.placeholder.com/77x77"
    alt="What’s the difference between red and strawberry blonde hair?">
<div class="border"><img src="img/border_line.png"></div>
</span>
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
<span class="hrl 1321B44AC1CB464248431321B4454FCC1ECB4F1E454F484B1EC64FC3C11EC2CBC648431ECC46CB454FC3CB1E454A46C1C2C0C14AC63F4A232A22221321B42A articleThumbnail">        <img
    src="https://via.placeholder.com/77x77"
    alt="How to hold your style without hairspray">
<div class="border"><img src="img/border_line.png"></div>
</span>
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
<span class="hrl 1321B44AC1CB464248431321B4CC454ACB1E4AC1431ECB45431E4B46444443C143494243C21E4143CBCC4343491EC2CBC1434A47C21E4A494B1E45464C4548464C45CBC23F4A262A26241321B42A articleThumbnail">        <img
    src="https://via.placeholder.com/77x77"
    alt="What are the differences between streaks and highlights?">
<div class="border"><img src="img/border_line.png"></div>
</span>
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
                    <div class="articlePreview"
                         data-tracking-label="Fine hair: which colours can make it look thicker?">
<span class="hrl 1321B44AC1CB464248431321B4444649431E454A46C11ECC454642451E424F484FC3C1C21E424A491E4E4A47431E46CB1E484F4F471ECB4546424743C13F4A2A2A2A25211321B42A articleThumbnail">        <img
    src="https://via.placeholder.com/77x77"
    alt="Fine hair: which colours can make it look thicker?">
<div class="border"><img src="img/border_line.png"></div>
</span>
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
<span class="hrl 1321B44AC1CB464248431321B4454FCC1ECB4F1EC3C2431EC2CBC64846494C1E4E4FC3C2C2433F4A212B22221321B42A articleThumbnail">        <img
    src="https://via.placeholder.com/77x77"
    alt="How to use styling mousse">
<div class="border"><img src="img/border_line.png"></div>
</span>
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
                    <div class="articlePreview"
                         data-tracking-label="How can I keep my hair looking wavy after braiding?">
<span class="hrl 1321B44AC1CB464248431321B4454FCC1E424A491E461E474343C01E4EC61E454A46C11E484F4F4746494C1ECC4AC4C61E4A44CB43C11E41C14A464B46494C3F4A242421251321B42A articleThumbnail">        <img
    src="https://via.placeholder.com/77x77"
    alt="How can I keep my hair looking wavy after braiding?">
<div class="border"><img src="img/border_line.png"></div>
</span>
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
                </div>
            </div>
        </div>
        <div class="content">
            <div class="wrap">
                <h2>The latest hairstyles folders</h2>

                <div class="contentCols clearfix">
                    <div class="contentCol"
                         data-tracking-label="The dossier: which hairstyle for a wedding ceremony?">
                        <div class="contentColWrap">
                            <div class="imgWrap">
                                <img src="https://via.placeholder.com/317x216"
                                     alt="The dossier: which hairstyle for a wedding ceremony?"/>
                                <span class="hrl 1321B4444F484B43C11321B4CB45431E4B4FC2C24643C11ECC454642451E454A46C1C2CBC648431E444FC11E4A1ECC434B4B46494C1E4243C1434E4F49C63F4B2A222321221321B42A">
                                    <div
                                            class="striped">
            <div class="white">
                <p class="labelTitle">folder</p>
                <a class="labelName" href="/folder/the-dossier-which-hairstyle-for-a-wedding-ceremony_d13523/1">The dossier: which hairstyle for a wedding ceremony?</a>
            </div>
        </div>
    </span></div>
                            <ul>
                                <li><a href="/article/how-can-i-create-a-rock-bride-hairstyle_a10413/1">How can
                                    I create a rock bride hairstyle?</a></li>
                                <li><a href="/article/my-chic-hairstyle-for-a-last-minute-invitation_a6698/1">My
                                    chic hairstyle for a last-minute invitation</a></li>
                                <li>
                                    <a href="/article/wedding-hairstyles-3-instagram-accounts-to-inspire-you_a9186/1">Wedding
                                        hairstyles: 3 Instagram accounts to inspire you</a></li>
                            </ul>

                            <span class="hrl 1321B4444F484B43C11321B4CB45431E4B4FC2C24643C11ECC454642451E454A46C1C2CBC648431E444FC11E4A1ECC434B4B46494C1E4243C1434E4F49C63F4B2A222321221321B42A more">        More articles
</span></div>
                    </div>
                    <div class="contentCol" data-tracking-label="How best to prepare your hair for summer?">
                        <div class="contentColWrap">
                            <div class="imgWrap">
                                <img src="https://via.placeholder.com/317x216"
                                     alt="How best to prepare your hair for summer?"/>
                                <span class="hrl 1321B4444F484B43C11321B4454FCC1E4143C2CB1ECB4F1EC0C143C04AC1431EC64FC3C11E454A46C11E444FC11EC2C34E4E43C13F4B2A222320211321B42A">
                                    <div
                                            class="striped">
                                    <div class="white">
                                        <p class="labelTitle">folder</p>
                                        <a class="labelName"
                                           href="/folder/how-best-to-prepare-your-hair-for-summer_d13502/1">How best to prepare your hair for summer?</a>
                                    </div>
                        </div>
            </span></div>
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

                            <span class="hrl 1321B4444F484B43C11321B4454FCC1E4143C2CB1ECB4F1EC0C143C04AC1431EC64FC3C11E454A46C11E444FC11EC2C34E4E43C13F4B2A222320211321B42A more">
                                More articles
                            </span></div>
                    </div>
                </div>
                <a href="/folders" class="buttonView">
                    <p>All the folders</p>
                </a>
            </div>
        </div>
    </div>

    <script>
        WB.utils.sortNews();
    </script>


@endsection