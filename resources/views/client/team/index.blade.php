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
                    <span class="current">Our <span>experts</span></span>
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

        <div class="wide80 expert-shp lineHeight0 clearfix">
            <div class="wrap">
                <h1 class="pageTitle">Our <span>Experts</span></h1>

                <div class="image">
                    <img alt="" src="https://via.placeholder.com/1260x550">
                </div>
            </div>
        </div>
        <div id="quoteBlock">
            <div class="wide78 wide78Inherit">
                <div class="quote fullWidthQuote">
                    <div class="quoteWrap">
                        <p>Jean Louis David professional stylists and trainers are working around the clock to create new
                            looks and collections for the brand. Cuts, colours and exclusive treatments are just some of the
                            things they get up to, as well as providing advice and cutting-edge knowledge. Thanks to their
                            expert vision of all things hair-related, you can sit back and relax knowing that the pros will
                            create exactly what you want, exactly how you imagined it.</p>
                    </div>
                </div>

                <div class="expertSlider slick-initialized slick-slider">
                    <div aria-live="polite" class="slick-list draggable" tabindex="0">
                        <div class="slick-track"
                            style="opacity: 1; width: 4510px; transform: translate3d(-1230px, 0px, 0px);">
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
                                        <img src="https://static1.jeanlouisdavid.us/tags/3/73/@/73-55ccc49458bb5-tag_expert_thumbnail-1.png"
                                            alt="Trainer in Paris">
                                    </div>
                                </a>
                                <div class="textBlock">
                                    <p class="name"><a href="/team/detail">Luis Faria</a></p>

                                    <p class="subtitle">Trainer in Paris</p>

                                    <div class="text"> Discover more about Jean Louis David's backstage by getting to know
                                        our team of experts! Meet Luis Faria trainer in Paris for Jean Louis David.
                                        What are three adjectives you'd use to describe yourself?...</div>
                                </div>
                            </div>
                            <div class="expertSlide slick-slide slick-active" data-slick-index="1" aria-hidden="false"
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
                            <div class="expertSlide slick-slide slick-active" data-slick-index="2" aria-hidden="false"
                                style="width: 380px;">
                                <a class=" _hrl" href="/team/detail">
                                    <div class="imgWrap">
                                        <img src="https://static1.jeanlouisdavid.us/tags/5/75/@/75-55ccc4b9c7e7a-tag_expert_thumbnail-1.png"
                                            alt="Head of training in Paris">
                                    </div>
                                </a>
                                <div class="textBlock">
                                    <p class="name"><a href="/team/detail>Vanessa Giani</a></p>

                                    <p class="subtitle">Head of training in Paris</p>

                                    <div class="text"> Discover more about Jean Louis David's backstage by getting to know
                                        our team of experts! Meet Vanessa Giani, head of training in Paris for Jean Louis
                                        David.
                                        What are three adjectives you'd use to describe...</div>
                                </div>
                            </div>
                            <div class="expertSlide slick-slide" data-slick-index="3" aria-hidden="true"
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
                            <div class="expertSlide slick-slide" data-slick-index="4" aria-hidden="true"
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
                            <div class="expertSlide slick-slide slick-cloned" data-slick-index="5" aria-hidden="true"
                                style="width: 380px;">
                                <a class=" _hrl" href="/team/detail">
                                    <div class="imgWrap">
                                        <img src="https://static1.jeanlouisdavid.us/tags/3/73/@/73-55ccc49458bb5-tag_expert_thumbnail-1.png"
                                            alt="Trainer in Paris">
                                    </div>
                                </a>
                                <div class="textBlock">
                                    <p class="name"><a href="/team/detail">Luis Faria</a></p>

                                    <p class="subtitle">Trainer in Paris</p>

                                    <div class="text"> Discover more about Jean Louis David's backstage by getting to know
                                        our team of experts! Meet Luis Faria trainer in Paris for Jean Louis David.
                                        What are three adjectives you'd use to describe yourself?...</div>
                                </div>
                            </div>
                            <div class="expertSlide slick-slide slick-cloned" data-slick-index="6" aria-hidden="true"
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
                            <div class="expertSlide slick-slide slick-cloned" data-slick-index="7" aria-hidden="true"
                                style="width: 380px;">
                                <a class=" _hrl" href="team/detail">
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
                        </div>
                    </div>




                    <button type="button" data-role="none" class="slick-prev" aria-label="previous"
                        style="display: block;">Previous</button><button type="button" data-role="none" class="slick-next"
                        aria-label="next" style="display: block;">Next</button>
                </div>
            </div>
        </div>

@endsection
