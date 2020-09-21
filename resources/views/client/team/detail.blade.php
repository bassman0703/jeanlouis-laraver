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
                        <a itemprop="item" href="https://www.jeanlouisdavid.us/experts"><span itemprop="name">Our
                                <span>experts</span></span></a>
                        <meta itemprop="position" content="2">
                        &gt;
                    </li>
                    <span class="current">Luis Faria</span>
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

        <div class="wide78 expert-page clearfix">
            <div class="title">
                <h1>LUIS FARIA</h1>

                <p>Trainer in Paris</p>
            </div>
            <div class="foto_area">
                <img src="https://static1.jeanlouisdavid.us/tags/3/73/@/73-55ccc49458bb5-tag_expert_thumbnail-1.png"
                    alt="Luis Faria Trainer in Paris">
            </div>
            <div class="desc_area">
                <div class="desc_background">
                    <div class="desc_text contentArea scrollable scroll" tabindex="-1">
                        <div class="scroll-bar vertical" style="height: 411px; display: block;">
                            <div class="thumb" style="top: 0px; height: 165.285px;"></div>
                        </div>
                        <div class="viewport" style="height: 411px;">
                            <div class="overview" style="top: 0px;">
                                <p><strong>Discover more about Jean Louis David's backstage by getting to know our team of
                                        experts! Meet Luis Faria trainer in Paris for Jean Louis David.</strong></p>
                                <p><strong>What are three adjectives you'd use to describe yourself?</strong></p>
                                <p>Meticulous, funny, and friendly. I put a great amount of attention, passion, and good
                                    humour into my trade.</p>
                                <p><strong>What's your professional background?</strong></p>
                                <p>I started styling really early during an apprenticeship in Paris. I then became a
                                    stylist, before being promoted to salon manager. When I first met the Jean Louis David
                                    trainers seven years later, I knew I wanted to join their team. I'm extremely lucky
                                    because every day I have the exact same passion and drive to style hair as I did in the
                                    beginning. It's pure joy!</p>
                                <p><strong>Your specialty hairstyle?</strong></p>
                                <p>I specialize in all kinds of ties. There isn't a bun, braid, or ponytail I'm not familiar
                                    with and I love to think up new creations each season. I'm into creating glamorous and
                                    on-trend styles.</p>
                                <p><strong>What does the Jean Louis David universe represent to you?</strong></p>
                                <p>It represents fashion in a super urban way. The Jean Louis David brand speaks to such a
                                    large number of people because it's both accessible and at the peak of trendiness. I
                                    like to believe that every woman can identify with our style.</p>
                                <p><strong>An unforgettable salon moment?</strong></p>
                                <p>My arrival at Jean Louis David was one of the greatest memories. For me, the salon had
                                    always been legendary, a goal to reach, with a super strong brand image. Every day I go
                                    to work for the training department is a happy one because I have the privilege to watch
                                    my expertise being passed on to new stylists.</p>
                                <p><strong>If you were... A hashtag?</strong></p>
                                <p>#jeanlouisdavid. Because I love my job!</p>
                                <p><strong>A holiday destination?</strong></p>
                                <p>Cuba. I've already been, I plan on going back, and if I had the choice I'd go every time
                                    I had vacation! I love the country for its energy and landscapes, which never cease to
                                    amaze me. Every time I go it's like I'm discovering it for the first time.</p>
                                <p><strong>An accessory?</strong></p>
                                <p>I wear a watch at all times. I should probably be more specific, because I have lots of
                                    them! I can't leave the house without one.</p>
                                <p><strong>A rock icon?</strong></p>
                                <p>AC/DC! Today's rock bands can't compare with their legendary style! There's nothing like
                                    a good dose of rock 'n roll for putting you in good mood.</p><br><br>
                            </div>
                        </div>
                        <div class="scroll-bar horizontal">
                            <div class="thumb"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <script>
            WB.utils.scrollbarInit('.expert-page .desc_area .desc_text');

        </script>

        <div id="quoteBlock">
            <div class="wide78 wide78Inherit expertSliderWrap">
                <h2 class="mainPadding">The team of the Experts <span>Jean Louis David</span></h2>
                <div class="expertSlider slick-initialized slick-slider">
                    <div aria-live="polite" class="slick-list draggable" tabindex="0">
                        <div class="slick-track"
                            style="opacity: 1; width: 4100px; transform: translate3d(-1230px, 0px, 0px);">
                            <div class="expertSlide slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true"
                                style="width: 380px;">
                                <a class=" _hrl" href="/experts/vanessa-giani_t75/1">
                                    <div class="imgWrap">
                                        <img src="https://static1.jeanlouisdavid.us/tags/5/75/@/75-55ccc4b9c7e7a-tag_expert_thumbnail-1.png"
                                            alt="Head of training in Paris">
                                    </div>
                                </a>
                                <div class="textBlock">
                                    <p class="name"><a href="/experts/vanessa-giani_t75/1">Vanessa Giani</a></p>

                                    <p class="subtitle">Head of training in Paris</p>

                                    <div class="text"> Discover more about Jean Louis David's backstage by getting to know
                                        our team of experts! Meet Vanessa Giani, head of training in Paris for Jean Louis
                                        David.
                                        What are three adjectives you'd use to describe...</div>
                                </div>
                            </div>
                            <div class="expertSlide slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true"
                                style="width: 380px;">
                                <a class=" _hrl" href="/experts/laura-superbi_t76/1">
                                    <div class="imgWrap">
                                        <img src="https://static1.jeanlouisdavid.us/tags/6/76/@/76-55ccc43422c82-tag_expert_thumbnail-1.png"
                                            alt="Trainer in Paris">
                                    </div>
                                </a>
                                <div class="textBlock">
                                    <p class="name"><a href="/experts/laura-superbi_t76/1">Laura Superbi</a></p>

                                    <p class="subtitle">Trainer in Paris</p>

                                    <div class="text"> Discover more about Jean Louis David's backstage by getting to know
                                        our team of experts! Meet Laura Superbi, trainer in Paris for Jean Louis David.
                                        What are three adjectives you'd use to describe yourself?...</div>
                                </div>
                            </div>
                            <div class="expertSlide slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true"
                                style="width: 380px;">
                                <a class=" _hrl" href="/experts/charlotte-tolazzi_t77/1">
                                    <div class="imgWrap">
                                        <img src="https://static1.jeanlouisdavid.us/tags/7/77/@/77-55ccc42010329-tag_expert_thumbnail-1.png"
                                            alt="Trainer in Paris">
                                    </div>
                                </a>
                                <div class="textBlock">
                                    <p class="name"><a href="/experts/charlotte-tolazzi_t77/1">Charlotte Tolazzi</a></p>

                                    <p class="subtitle">Trainer in Paris</p>

                                    <div class="text"> Discover more about Jean Louis David's backstage by getting to know
                                        our team of experts! Meet Charlotte Tolazzi, trainer in Paris for Jean Louis David.
                                        What are three adjectives you'd use to describe yourself?...</div>
                                </div>
                            </div>
                            <div class="expertSlide slick-slide slick-active" data-slick-index="0" aria-hidden="false"
                                style="width: 380px;">
                                <a class=" _hrl" href="/team/detail">
                                    <div class="imgWrap">
                                        <img src="https://static1.jeanlouisdavid.us/tags/4/74/@/74-55ccc409e63ed-tag_expert_thumbnail-1.png"
                                            alt="Trainer in Paris">
                                    </div>
                                </a>
                                <div class="textBlock">
                                    <p class="name"><a href="/team/detail">Aurea Sanchez-Coletto</a>
                                    </p>

                                    <p class="subtitle">Trainer in Paris</p>

                                    <div class="text"> Discover more about Jean Louis David's backstage by getting to know
                                        our team of experts! Meet Aurea Sanchez-Coletto, trainer in Paris for Jean Louis
                                        David.
                                        What are three adjectives you'd use to describe...</div>
                                </div>
                            </div>
                            <div class="expertSlide slick-slide slick-active" data-slick-index="1" aria-hidden="false"
                                style="width: 380px;">
                                <a class=" _hrl" href="/experts/vanessa-giani_t75/1">
                                    <div class="imgWrap">
                                        <img src="https://static1.jeanlouisdavid.us/tags/5/75/@/75-55ccc4b9c7e7a-tag_expert_thumbnail-1.png"
                                            alt="Head of training in Paris">
                                    </div>
                                </a>
                                <div class="textBlock">
                                    <p class="name"><a href="/experts/vanessa-giani_t75/1">Vanessa Giani</a></p>

                                    <p class="subtitle">Head of training in Paris</p>

                                    <div class="text"> Discover more about Jean Louis David's backstage by getting to know
                                        our team of experts! Meet Vanessa Giani, head of training in Paris for Jean Louis
                                        David.
                                        What are three adjectives you'd use to describe...</div>
                                </div>
                            </div>
                            <div class="expertSlide slick-slide slick-active" data-slick-index="2" aria-hidden="false"
                                style="width: 380px;">
                                <a class=" _hrl" href="/experts/laura-superbi_t76/1">
                                    <div class="imgWrap">
                                        <img src="https://static1.jeanlouisdavid.us/tags/6/76/@/76-55ccc43422c82-tag_expert_thumbnail-1.png"
                                            alt="Trainer in Paris">
                                    </div>
                                </a>
                                <div class="textBlock">
                                    <p class="name"><a href="/experts/laura-superbi_t76/1">Laura Superbi</a></p>

                                    <p class="subtitle">Trainer in Paris</p>

                                    <div class="text"> Discover more about Jean Louis David's backstage by getting to know
                                        our team of experts! Meet Laura Superbi, trainer in Paris for Jean Louis David.
                                        What are three adjectives you'd use to describe yourself?...</div>
                                </div>
                            </div>
                            <div class="expertSlide slick-slide" data-slick-index="3" aria-hidden="true"
                                style="width: 380px;">
                                <a class=" _hrl" href="/experts/charlotte-tolazzi_t77/1">
                                    <div class="imgWrap">
                                        <img src="https://static1.jeanlouisdavid.us/tags/7/77/@/77-55ccc42010329-tag_expert_thumbnail-1.png"
                                            alt="Trainer in Paris">
                                    </div>
                                </a>
                                <div class="textBlock">
                                    <p class="name"><a href="/experts/charlotte-tolazzi_t77/1">Charlotte Tolazzi</a></p>

                                    <p class="subtitle">Trainer in Paris</p>

                                    <div class="text"> Discover more about Jean Louis David's backstage by getting to know
                                        our team of experts! Meet Charlotte Tolazzi, trainer in Paris for Jean Louis David.
                                        What are three adjectives you'd use to describe yourself?...</div>
                                </div>
                            </div>
                            <div class="expertSlide slick-slide slick-cloned" data-slick-index="4" aria-hidden="true"
                                style="width: 380px;">
                                <a class=" _hrl" href="/team/detail">
                                    <div class="imgWrap">
                                        <img src="https://static1.jeanlouisdavid.us/tags/4/74/@/74-55ccc409e63ed-tag_expert_thumbnail-1.png"
                                            alt="Trainer in Paris">
                                    </div>
                                </a>
                                <div class="textBlock">
                                    <p class="name"><a href="/team/detail">Aurea Sanchez-Coletto</a>
                                    </p>

                                    <p class="subtitle">Trainer in Paris</p>

                                    <div class="text"> Discover more about Jean Louis David's backstage by getting to know
                                        our team of experts! Meet Aurea Sanchez-Coletto, trainer in Paris for Jean Louis
                                        David.
                                        What are three adjectives you'd use to describe...</div>
                                </div>
                            </div>
                            <div class="expertSlide slick-slide slick-cloned" data-slick-index="5" aria-hidden="true"
                                style="width: 380px;">
                                <a class=" _hrl" href="/experts/vanessa-giani_t75/1">
                                    <div class="imgWrap">
                                        <img src="https://static1.jeanlouisdavid.us/tags/5/75/@/75-55ccc4b9c7e7a-tag_expert_thumbnail-1.png"
                                            alt="Head of training in Paris">
                                    </div>
                                </a>
                                <div class="textBlock">
                                    <p class="name"><a href="/team/detail">Vanessa Giani</a></p>

                                    <p class="subtitle">Head of training in Paris</p>

                                    <div class="text"> Discover more about Jean Louis David's backstage by getting to know
                                        our team of experts! Meet Vanessa Giani, head of training in Paris for Jean Louis
                                        David.
                                        What are three adjectives you'd use to describe...</div>
                                </div>
                            </div>
                            <div class="expertSlide slick-slide slick-cloned" data-slick-index="6" aria-hidden="true"
                                style="width: 380px;">
                                <a class=" _hrl" href="/team/detail">
                                    <div class="imgWrap">
                                        <img src="https://static1.jeanlouisdavid.us/tags/6/76/@/76-55ccc43422c82-tag_expert_thumbnail-1.png"
                                            alt="Trainer in Paris">
                                    </div>
                                </a>
                                <div class="textBlock">
                                    <p class="name"><a href="/team/detail">Laura Superbi</a></p>

                                    <p class="subtitle">Trainer in Paris</p>

                                    <div class="text"> Discover more about Jean Louis David's backstage by getting to know
                                        our team of experts! Meet Laura Superbi, trainer in Paris for Jean Louis David.
                                        What are three adjectives you'd use to describe yourself?...</div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <button type="button" data-role="none" class="slick-prev" aria-label="previous"
                        style="display: block;">Previous</button><button type="button" data-role="none" class="slick-next"
                        aria-label="next" style="display: block;">Next</button>
                </div>
            </div>
        </div>

       
        


@endsection
