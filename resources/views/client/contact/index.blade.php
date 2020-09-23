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
                    <span class="current">Contact us</span>
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

        <div class="contactPage wide78" id="contactPage">
            <div class="contactContent clearfix">
                <div class="titleImage">
                    <img src="https://via.placeholder.com/1280x449">
                </div>
                <div class="contactPageHead">
                    <div class="contactTitle">
                        <h1>Contact us</h1>
                    </div>
                    <div class="pageDescription">
                        <div class="quoteWrap">
                            <p>Opinion, question or suggestion? Our client services are here to help. Choose which category
                                your question falls under and fill out our contact form</p>
                        </div>
                    </div>
                    <div class="contactForm">
                        <div id="contactForm">
                            <div class="content">

                                <div id="form_types">
                                    <ul>
                                        <li class="active" data-form-type="87">EXPERIENCE IN ONE OF OUR SALONS</li>
                                        <li class="" data-form-type="88">HAIR PRODUCTS / ACCESSORIES</li>
                                        <li class="" data-form-type="89">TRAINING CENTER</li>
                                        <li class="" data-form-type="90">RECRUITMENT / SPECULATIVE APPLICATION</li>
                                        <li class="" data-form-type="91">BECOME A FRANCHISEE</li>
                                    </ul>
                                </div>

                                <div class="form_types_select">
                                    <select id="form_types_select">
                                        <option value="87">EXPERIENCE IN ONE OF OUR SALONS</option>
                                        <option value="88">HAIR PRODUCTS / ACCESSORIES</option>
                                        <option value="89">TRAINING CENTER</option>
                                        <option value="90">RECRUITMENT / SPECULATIVE APPLICATION</option>
                                        <option value="91">BECOME A FRANCHISEE</option>
                                    </select>
                                </div>

                                <form id="form-type-87" name="form-87" class="contact-form active" novalidate="novalidate"
                                    style="display: block;">
                                    <input type="hidden" name="id" value="87">
                                    <input type="hidden" name="feedback_id" value="1">
                                    <input type="hidden" name="type_id" value="1">
                                    <input type="hidden" name="label" value="EXPERIENCE IN ONE OF OUR SALONS">
                                    <input type="hidden" name="check_field" value="">

                                    <h2>EXPERIENCE IN ONE OF OUR SALONS</h2>



                                    <h3>Personal datas</h3>

                                    <div class="profile-data row">
                                        <div class="wrapper">
                                            <select name="sexe" class="required">
                                                <option value="" disabled="" selected="">Gender*</option>
                                                <option value="1">Mr</option>
                                                <option value="2">Mrs</option>
                                            </select>
                                        </div>

                                        <div class="wrapper">
                                            <input type="text" name="lastname" class="required" placeholder="Lastname*">
                                        </div>

                                        <div class="wrapper">
                                            <input type="text" name="firstname" class="required" placeholder="Firstname*">
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="profile-data2 row">
                                        <div class="wrapper">
                                            <input type="text" name="birthday" class="date "
                                                placeholder="Date of birth (yyyy/mm/dd)"></div>
                                        <div class="wrapper">
                                            <input type="text" name="postalcode" class="number " placeholder="Zip code">
                                        </div>

                                        <div class="wrapper">
                                            <input type="text" name="email" class="email required"
                                                placeholder="Enter your email*"></div>

                                        <div class="wrapper">
                                            <input type="text" name="phone" class="required"
                                                placeholder="Enter your phone number*"></div>

                                        <div class="wrapper">
                                            <input type="text" name="fidcard" class=""
                                                placeholder="Number of fidelity card"></div>

                                        <div class="wrapper">
                                            <input type="text" name="date_prestation" class="date "
                                                placeholder="Date of the prestation (yyyy/mm/dd)"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <h3>Choose your salon</h3>
                                    <div class="profile-data3 row" id="contactFormSalonSelector">
                                        <div class="wrapper">
                                            <select name="pays" class="">
                                                <option value="" disabled="" selected="">Country </option>
                                                <option value="AD">Andorra</option>
                                                <option value="BE">Belgium</option>
                                                <option value="CN">China</option>
                                                <option value="FR">France</option>
                                                <option value="GE">Georgia</option>
                                                <option value="HU">Hungary</option>
                                                <option value="IT">Italy</option>
                                                <option value="CI">Ivory Coast</option>
                                                <option value="MU">Mauritius (Island)</option>
                                                <option value="MX">Mexico</option>
                                                <option value="MA">Morocco</option>
                                                <option value="PL">Poland</option>
                                                <option value="PT">portugal</option>
                                                <option value="QA">Qatar</option>
                                                <option value="RE">Reunion (Reunion Island)</option>
                                                <option value="RU">Russia</option>
                                                <option value="SA">Saudi Arabia</option>
                                                <option value="SK">Slovakia</option>
                                                <option value="KR">South Korea</option>
                                                <option value="ES">Spain</option>
                                                <option value="CH">Swiss</option>
                                                <option value="TN">Tunisia</option>
                                                <option value="UA">Ukraine</option>
                                            </select>
                                        </div>

                                        <div class="wrapper">
                                            <select name="ville" class="">
                                                <option value="" disabled="" selected="">City </option>
                                            </select>
                                        </div>

                                        <div class="wrapper">
                                            <select name="salonId" class="">
                                                <option value="" disabled="" selected="">Address </option>
                                            </select>
                                        </div>
                                        <div class="clearfix"></div>
                                        <script>
                                            WB.utils.contactFormSalonSelector('/contact/ajax/getSalonList/');

                                        </script>
                                    </div>
                                    <div class="clearfix"></div>

                                    <p>Rate your salon :</p>

                                    <div class="profile-data row">
                                        <div class="wrapper">
                                            <input type="hidden" name="note" id="salon_rating" value="" class="">

                                            <div class="b-stars" data-reit="70">
                                                <div class="b-stars__current" style="width: 70px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        var rater = new WB.utils.rater({
                                            target: '.b-stars',
                                            id: '1',
                                            type: '1'
                                        });
                                        rater.rate();

                                    </script>
                                    <div class="clearfix"></div>
                                    <h3>Enter your message</h3>

                                    <div class="profile-data-message row">
                                        <div class="wrapper">
                                            <textarea name="feedback" class="" placeholder="Enter your message"></textarea>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="profile-data attach row clearfix">
                                        <div class="wrapper">
                                            <label for="file">Attach a file :</label>
                                            <div>
                                                <div class="fileAttach">
                                                    <div>
                                                        <a href="javascript:href(0)">Attach a file</a>
                                                    </div>
                                                    <input type="file" name="file">
                                                </div>
                                                <p>(authorised formats : jpg, jpeg, gif, png, doc, docx, pdf)</p>
                                            </div>
                                        </div>
                                    </div>

                                    <p class="contact-mandatory">* Mandatory field</p>
                                    <span class="error"></span>
                                    <span class="form-result"></span>

                                    <button type="submit" name="submit_button" class="accept">Send your message</button>
                                    <p class="contact-form__label"></p>
                                </form>
                                <form id="form-type-88" name="form-88" class="contact-form " novalidate="novalidate"
                                    style="display: none;">
                                    <input type="hidden" name="id" value="88">
                                    <input type="hidden" name="feedback_id" value="1">
                                    <input type="hidden" name="type_id" value="2">
                                    <input type="hidden" name="label" value="HAIR PRODUCTS / ACCESSORIES">
                                    <input type="hidden" name="check_field" value="">

                                    <h2>HAIR PRODUCTS / ACCESSORIES</h2>



                                    <h3>Personal datas</h3>

                                    <div class="profile-data row">
                                        <div class="wrapper">
                                            <select name="sexe" class="required">
                                                <option value="" disabled="" selected="">Gender*</option>
                                                <option value="1">Mr</option>
                                                <option value="2">Mrs</option>
                                            </select>
                                        </div>

                                        <div class="wrapper">
                                            <input type="text" name="lastname" class="required" placeholder="Lastname*">
                                        </div>

                                        <div class="wrapper">
                                            <input type="text" name="firstname" class="required" placeholder="Firstname*">
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="profile-data2 row">
                                        <div class="wrapper">
                                            <input type="text" name="birthday" class="date "
                                                placeholder="Date of birth (yyyy/mm/dd)"></div>
                                        <div class="wrapper">
                                            <input type="text" name="postalcode" class="number " placeholder="Zip code">
                                        </div>

                                        <div class="wrapper">
                                            <input type="text" name="email" class="email required"
                                                placeholder="Enter your email*"></div>

                                        <div class="wrapper">
                                            <input type="text" name="phone" class="" placeholder="Enter your phone number">
                                        </div>


                                    </div>
                                    <div class="clearfix"></div>


                                    <h3>Enter your message</h3>

                                    <div class="profile-data-message row">
                                        <div class="wrapper">
                                            <textarea name="feedback" class="" placeholder="Enter your message"></textarea>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="profile-data attach row clearfix">
                                        <div class="wrapper">
                                            <label for="file">Attach a file :</label>
                                            <div>
                                                <div class="fileAttach">
                                                    <div>
                                                        <a href="javascript:href(0)">Attach a file</a>
                                                    </div>
                                                    <input type="file" name="file">
                                                </div>
                                                <p>(authorised formats : jpg, jpeg, gif, png, doc, docx, pdf)</p>
                                            </div>
                                        </div>
                                    </div>

                                    <p class="contact-mandatory">* Mandatory field</p>
                                    <span class="error"></span>
                                    <span class="form-result"></span>

                                    <button type="submit" name="submit_button" class="accept">Send your message</button>
                                    <p class="contact-form__label"></p>
                                </form>
                                <form id="form-type-89" name="form-89" class="contact-form " novalidate="novalidate"
                                    style="display: none;">
                                    <input type="hidden" name="id" value="89">
                                    <input type="hidden" name="feedback_id" value="1">
                                    <input type="hidden" name="type_id" value="3">
                                    <input type="hidden" name="label" value="TRAINING CENTER">
                                    <input type="hidden" name="check_field" value="">

                                    <h2>TRAINING CENTER</h2>



                                    <h3>Personal datas</h3>

                                    <div class="profile-data row">
                                        <div class="wrapper">
                                            <select name="sexe" class="required">
                                                <option value="" disabled="" selected="">Gender*</option>
                                                <option value="1">Mr</option>
                                                <option value="2">Mrs</option>
                                            </select>
                                        </div>

                                        <div class="wrapper">
                                            <input type="text" name="lastname" class="required" placeholder="Lastname*">
                                        </div>

                                        <div class="wrapper">
                                            <input type="text" name="firstname" class="required" placeholder="Firstname*">
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="profile-data2 row">
                                        <div class="wrapper">
                                            <input type="text" name="birthday" class="date "
                                                placeholder="Date of birth (yyyy/mm/dd)"></div>
                                        <div class="wrapper">
                                            <input type="text" name="postalcode" class="number " placeholder="Zip code">
                                        </div>

                                        <div class="wrapper">
                                            <input type="text" name="email" class="email required"
                                                placeholder="Enter your email*"></div>

                                        <div class="wrapper">
                                            <input type="text" name="phone" class="" placeholder="Enter your phone number">
                                        </div>


                                    </div>
                                    <div class="clearfix"></div>


                                    <h3>Enter your message</h3>

                                    <div class="profile-data-message row">
                                        <div class="wrapper">
                                            <textarea name="feedback" class="" placeholder="Enter your message"></textarea>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="profile-data attach row clearfix">
                                        <div class="wrapper">
                                            <label for="file">Attach a file :</label>
                                            <div>
                                                <div class="fileAttach">
                                                    <div>
                                                        <a href="javascript:href(0)">Attach a file</a>
                                                    </div>
                                                    <input type="file" name="file">
                                                </div>
                                                <p>(authorised formats : jpg, jpeg, gif, png, doc, docx, pdf)</p>
                                            </div>
                                        </div>
                                    </div>

                                    <p class="contact-mandatory">* Mandatory field</p>
                                    <span class="error"></span>
                                    <span class="form-result"></span>

                                    <button type="submit" name="submit_button" class="accept">Send your message</button>
                                    <p class="contact-form__label"></p>
                                </form>
                                <form id="form-type-90" name="form-90" class="contact-form " novalidate="novalidate"
                                    style="display: none;">
                                    <input type="hidden" name="id" value="90">
                                    <input type="hidden" name="feedback_id" value="1">
                                    <input type="hidden" name="type_id" value="3">
                                    <input type="hidden" name="label" value="RECRUITMENT / SPECULATIVE APPLICATION">
                                    <input type="hidden" name="check_field" value="">

                                    <h2>RECRUITMENT / SPECULATIVE APPLICATION</h2>



                                    <h3>Personal datas</h3>

                                    <div class="profile-data row">
                                        <div class="wrapper">
                                            <select name="sexe" class="required">
                                                <option value="" disabled="" selected="">Gender*</option>
                                                <option value="1">Mr</option>
                                                <option value="2">Mrs</option>
                                            </select>
                                        </div>

                                        <div class="wrapper">
                                            <input type="text" name="lastname" class="required" placeholder="Lastname*">
                                        </div>

                                        <div class="wrapper">
                                            <input type="text" name="firstname" class="required" placeholder="Firstname*">
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="profile-data2 row">
                                        <div class="wrapper">
                                            <input type="text" name="birthday" class="date "
                                                placeholder="Date of birth (yyyy/mm/dd)"></div>
                                        <div class="wrapper">
                                            <input type="text" name="postalcode" class="number " placeholder="Zip code">
                                        </div>

                                        <div class="wrapper">
                                            <input type="text" name="email" class="email required"
                                                placeholder="Enter your email*"></div>

                                        <div class="wrapper">
                                            <input type="text" name="phone" class="" placeholder="Enter your phone number">
                                        </div>


                                    </div>
                                    <div class="clearfix"></div>


                                    <h3>Enter your message</h3>

                                    <div class="profile-data-message row">
                                        <div class="wrapper">
                                            <textarea name="feedback" class="" placeholder="Enter your message"></textarea>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="profile-data attach row clearfix">
                                        <div class="wrapper">
                                            <label for="file">Attach a file :</label>
                                            <div>
                                                <div class="fileAttach">
                                                    <div>
                                                        <a href="javascript:href(0)">Attach a file</a>
                                                    </div>
                                                    <input type="file" name="file">
                                                </div>
                                                <p>(authorised formats : jpg, jpeg, gif, png, doc, docx, pdf)</p>
                                            </div>
                                        </div>
                                    </div>

                                    <p class="contact-mandatory">* Mandatory field</p>
                                    <span class="error"></span>
                                    <span class="form-result"></span>

                                    <button type="submit" name="submit_button" class="accept">Send your message</button>
                                    <p class="contact-form__label"></p>
                                </form>
                                <form id="form-type-91" name="form-91" class="contact-form " novalidate="novalidate"
                                    style="display: none;">
                                    <input type="hidden" name="id" value="91">
                                    <input type="hidden" name="feedback_id" value="1">
                                    <input type="hidden" name="type_id" value="3">
                                    <input type="hidden" name="label" value="BECOME A FRANCHISEE">
                                    <input type="hidden" name="check_field" value="">

                                    <h2>BECOME A FRANCHISEE</h2>



                                    <h3>Personal datas</h3>

                                    <div class="profile-data row">
                                        <div class="wrapper">
                                            <select name="sexe" class="required">
                                                <option value="" disabled="" selected="">Gender*</option>
                                                <option value="1">Mr</option>
                                                <option value="2">Mrs</option>
                                            </select>
                                        </div>

                                        <div class="wrapper">
                                            <input type="text" name="lastname" class="required" placeholder="Lastname*">
                                        </div>

                                        <div class="wrapper">
                                            <input type="text" name="firstname" class="required" placeholder="Firstname*">
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="profile-data2 row">
                                        <div class="wrapper">
                                            <input type="text" name="birthday" class="date "
                                                placeholder="Date of birth (yyyy/mm/dd)"></div>
                                        <div class="wrapper">
                                            <input type="text" name="postalcode" class="number " placeholder="Zip code">
                                        </div>

                                        <div class="wrapper">
                                            <input type="text" name="email" class="email required"
                                                placeholder="Enter your email*"></div>

                                        <div class="wrapper">
                                            <input type="text" name="phone" class="" placeholder="Enter your phone number">
                                        </div>


                                    </div>
                                    <div class="clearfix"></div>


                                    <h3>Enter your message</h3>

                                    <div class="profile-data-message row">
                                        <div class="wrapper">
                                            <textarea name="feedback" class="" placeholder="Enter your message"></textarea>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="profile-data attach row clearfix">
                                        <div class="wrapper">
                                            <label for="file">Attach a file :</label>
                                            <div>
                                                <div class="fileAttach">
                                                    <div>
                                                        <a href="javascript:href(0)">Attach a file</a>
                                                    </div>
                                                    <input type="file" name="file">
                                                </div>
                                                <p>(authorised formats : jpg, jpeg, gif, png, doc, docx, pdf)</p>
                                            </div>
                                        </div>
                                    </div>

                                    <p class="contact-mandatory">* Mandatory field</p>
                                    <span class="error"></span>
                                    <span class="form-result"></span>

                                    <button type="submit" name="submit_button" class="accept">Send your message</button>
                                    <p class="contact-form__label"></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            <script>
                WB.utils.contactFormSelect();
                WB.utils.contactFormInit('/contact/ajax/send', 'Votre demande a été envoyée', 'Error');

            </script>
            <div class="previewShp">
                <div class="wide78">
                    <div class="mainPadding">
                        <h2>Most read articles</h2>

                        <div class="articlePreviewBlock">
                            <div class="articlePreview" data-tracking-label="How to hold your style without hairspray">
                                <a class=" articleThumbnail _hrl"
                                    href="/mostRead/index">
                                     <img
                                        src="https://via.placeholder.com/85x85"
                                        alt="How to hold your style without hairspray">
                                    <div class="border">
                                        <img src="/img/border_line.png">
                                    </div>
                                </a>
                                <div class="articleDescription">
                                    <p class="category">
                                        Hairstyle
                                    </p>
                                    <p class="articleTitle">
                                        <a href="https://via.placeholder.com/85x85">
                                            <span>How to hold your style without hairspray</span>
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
                            <div class="articlePreview"
                                data-tracking-label="How can I keep my hair looking wavy after braiding?">
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
                            <div class="articlePreview" data-tracking-label="Which hairstyles will make me look taller?">
                                <a class=" articleThumbnail _hrl"
                                    href="/mostRead/index">
                                     <img
                                        src="https://via.placeholder.com/85x85"
                                        alt="Which hairstyles will make me look taller?">
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
                                            <span>Which hairstyles will make me look taller?</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="articlePreview" data-tracking-label="Hairspray: true and false">
                                <a class=" articleThumbnail _hrl" href="/mostRead/index"> 
                                    <img
                                        src="https://via.placeholder.com/85x85"
                                        alt="Hairspray: true and false">
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
                                            <span>Hairspray: true and false</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="articlePreview"
                                data-tracking-label="Cutting your hair at full moon, a good idea or a popular myth?">
                                <a class=" articleThumbnail _hrl"
                                    href="/mostRead/index">
                                    <img src="https://via.placeholder.com/85x85"
                                        alt="Cutting your hair at full moon, a good idea or a popular myth?">
                                    <div class="border">
                                        <img src="/img/border_line.png">
                                    </div>
                                </a>
                                <div class="articleDescription">
                                    <p class="category">
                                        Hairstyle
                                    </p>

                                    <p class="articleTitle">
                                        <a
                                            href="/mostRead/index">
                                            <span>Cutting your hair at full moon, a good idea or a popular...</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="articlePreview" data-tracking-label="Curtain bangs: should you get them?">
                                <a class=" articleThumbnail _hrl" href="/mostRead/index">
                                    <img src="https://via.placeholder.com/85x85"
                                        alt="Curtain bangs: should you get them?">
                                    <div class="border"><img src="/img/border_line.png"></div>
                                </a>
                                <div class="articleDescription">
                                    <p class="category">
                                        Hairstyle
                                    </p>

                                    <p class="articleTitle">
                                        <a href="/mostRead/index">
                                            <span>Curtain bangs: should you get them?</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection
