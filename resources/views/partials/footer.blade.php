<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .loginBTN {
            /* background: #0d6efd; */
            background: transparent !important;
            color: #FFF;
            border-color: transparent !important;
            border-radius: 0px !important;
            /* font-weight: 600; */
            /* margin-top: 18px; */
            font-family: 'Oswald';
            padding: 24px 15px;
            outline: none !important;
            text-decoration: none;
            font-size: 15px;


        }

        .signinBTN {
            color: #FFF;
            background: transparent !important;
            border-color: transparent !important;
            border-radius: 0px !important;
            font-size: 15px;
            /* font-weight: 600; */
            font-family: 'Oswald';
            /* margin-top: 18px; */
            outline: none !important;
            padding: 24px 15px;
            text-decoration: none;

        }

        .loginBTN:hover {
            background: transparent !important;
            color: #ffc722 !important;
            border: none !important;
            /* font-weight: 700; */
            outline: none !important;
            text-decoration: none;

        }

        .signinBTN:hover {
            background: transparent !important;
            color: #ffc722 !important;
            border: none !important;
            /* font-weight: 700; */
            outline: none !important;
            text-decoration: none;

        }

        @media screen and (max-width: 825px) {
            .loginBTN {
                width: 100%;
            }

            .signinBTN {
                width: 100%;
            }
        }
        .ulFoot a li {
            display: inline;
        }
    </style>
</head>

<body>

    <footer>

        <div class="bottom-wrapper">
            <div class="tm-bottom-f-box  ">
                <div class="uk-container uk-container-center">
                    <section id="tm-bottom-f" class="tm-bottom-f uk-grid"
                        data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                        <div class="uk-width-1-1">
                            <div class="uk-panel">
                                <div class="footer-logo">
                                    <a href="/"><img src="{{ asset('dashboard/img/cpsal.png') }}"
                                            alt=""><span>CPS</span>AL</a>
                                </div>
                                <div class="footer-socials">
                                    <div class="social-top">
                                        <a href="#"><span
                                                class="uk-icon-small uk-icon-hover uk-icon-facebook"></span></a>
                                        <a href="#"><span
                                                class="uk-icon-small uk-icon-hover uk-icon-twitter"></span></a>
                                        <a href="#"><span
                                                class="uk-icon-small uk-icon-hover uk-icon-google"></span></a>
                                        <a href="#"><span
                                                class="uk-icon-small uk-icon-hover uk-icon-pinterest"></span></a>
                                        <a href="#"><span
                                                class="uk-icon-small uk-icon-hover uk-icon-youtube"></span></a>
                                        <a href="#"><span
                                                class="uk-icon-small uk-icon-hover uk-icon-instagram"></span></a>
                                        <a href="#"><span
                                                class="uk-icon-small uk-icon-hover uk-icon-flickr"></span></a>
                                    </div>
                                </div>
                                <div class="clear"></div>

                                <p class="footer-about-text">
                                    Cras convallis feugiat felis eget venenatis. Sed leo tellus, luctus eget ante quis,
                                    rutrum dignissim enim. Morbi efficitur tellus non mauris tincidunt feugiat.
                                    Vestibulum quis nunc in nibh eleifend convallis. Vestibulum nec viverra dui.
                                    Suspendisse vel neque eros. Donec tincidunt tempus massa sed vehicula. Integer
                                    ullamcorper at elit eu commodo.
                                </p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <div class="tm-bottom-g-box  ">
                <div class="uk-container uk-container-center">
                    <section id="tm-bottom-g" class="tm-bottom-f uk-grid"
                        data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                        <div class="uk-width-1-1 uk-width-large-1-2">
                            <div class="uk-panel">
                                <div class="match-list-wrap foot">
                                    <div id="carusel-7" class="uk-slidenav-position"
                                        data-uk-slideshow="{ height : 37, autoplay:true, animation:'scroll' }">
                                        <div class="last-match-top">
                                            <div class="last-match-title">Upcoming Matches</div>
                                            <div class="footer-slider-btn">
                                                <a href="/"
                                                    class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous"
                                                    data-uk-slideshow-item="previous"></a>
                                                <a href="/"
                                                    class="uk-slidenav uk-slidenav-contrast uk-slidenav-next"
                                                    data-uk-slideshow-item="next"></a>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <ul class="uk-slideshow">
                                            @forelse (App\Models\Battle::latest()->get() as $battle)
                                                <li class="" aria-hidden="true">
                                                    <div class="match-list-item alt foot">
                                                        <div class="wrapper">
                                                            <div class="logo">
                                                                <a href="match-single.html">
                                                                    <img src="{{ Storage::url($battle->byTeam->image) }}"
                                                                        class="img-polaroid" alt="by Team"
                                                                        title="by Team">
                                                                </a>
                                                            </div>
                                                            <div class="team-name">
                                                                {{ $battle->byTeam->name }}</div>
                                                            <div class="versus">VS</div>

                                                            <div class="team-name">
                                                                {{ $battle->forTeam->name }} </div>
                                                            <div class="logo">
                                                                <a href="match-single.html">
                                                                    <img src="{{ Storage::url($battle->forTeam->image) }}"
                                                                        class="img-polaroid" alt="for Team"
                                                                        title="for Team">
                                                                </a>
                                                            </div>
                                                            {{-- <a class="read-more" href="match-single.html">Read More</a> --}}
                                                        </div>
                                                    </div>

                                                @empty
                                                    <div class="text-center">
                                                        <p class="text-danger">
                                                            No match added yet!
                                                        </p>
                                                    </div>

                                                </li>
                                            @endforelse

                                            {{-- <li class="" aria-hidden="true">
                                            <div class="match-list-item alt foot">
                                                <div class="wrapper">
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava2.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">
                                                        Cambridgehire </div>
                                                    <div class="versus">VS</div>

                                                    <div class="team-name">
                                                        china </div>
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava3.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                        </a>
                                                    </div>
                                                    <a class="read-more" href="match-single.html">Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="" aria-hidden="true">
                                            <div class="match-list-item alt foot">
                                                <div class="wrapper">
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava4.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-20)" title="Cambridgehire VS china (2015-11-20)">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">
                                                        Cambridgehire </div>
                                                    <div class="versus">VS</div>

                                                    <div class="team-name">
                                                        china </div>
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava5.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-20)" title="Cambridgehire VS china (2015-11-20)">
                                                        </a>
                                                    </div>
                                                    <a class="read-more" href="match-single.html">Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="" aria-hidden="true">
                                            <div class="match-list-item alt foot">
                                                <div class="wrapper">
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">
                                                        England </div>
                                                    <div class="versus">VS</div>

                                                    <div class="team-name">
                                                        Amsterdam </div>
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava1.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                        </a>
                                                    </div>
                                                    <a class="read-more" href="match-single.html">Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li aria-hidden="false">
                                            <div class="match-list-item alt foot">
                                                <div class="wrapper">
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava2.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">
                                                        Cambridgehire </div>
                                                    <div class="versus">VS</div>

                                                    <div class="team-name">
                                                        china </div>
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava3.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                        </a>
                                                    </div>
                                                    <a class="read-more" href="match-single.html">Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="" aria-hidden="true">
                                            <div class="match-list-item alt foot">
                                                <div class="wrapper">
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava4.png" class="img-polaroid" alt="King VS china (2015-11-20)" title="King VS china (2015-11-20)">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">
                                                        King </div>
                                                    <div class="versus">VS</div>

                                                    <div class="team-name">
                                                        china </div>
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava5.png" class="img-polaroid" alt="King VS china (2015-11-20)" title="King VS china (2015-11-20)">
                                                        </a>
                                                    </div>
                                                    <a class="read-more" href="match-single.html">Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="" aria-hidden="true">
                                            <div class="match-list-item alt foot">
                                                <div class="wrapper">
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">
                                                        England </div>
                                                    <div class="versus">VS</div>

                                                    <div class="team-name">
                                                        Amsterdam </div>
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava1.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                        </a>
                                                    </div>
                                                    <a class="read-more" href="match-single.html">Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="" aria-hidden="true">
                                            <div class="match-list-item alt foot">
                                                <div class="wrapper">
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava2.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">
                                                        Cambridgehire </div>
                                                    <div class="versus">VS</div>

                                                    <div class="team-name">
                                                        china </div>
                                                    <div class="logo">
                                                        <a href="match-single.html">
                                                            <img src="images/team-ava3.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                        </a>
                                                    </div>
                                                    <a class="read-more" href="match-single.html">Read More</a>
                                                </div>
                                            </div>
                                        </li> --}}
                                        </ul>
                                    </div>




                                </div>
                            </div>
                        </div>

                        <div class="uk-width-1-1 uk-width-large-1-2">
                            <div class="uk-panel">
                                <div class="acymailing_module" id="acymailing_module_formAcymailing54111">
                                    <div class="acymailing_fulldiv" id="acymailing_fulldiv_formAcymailing54111">
                                        <form id="formAcymailing54111" method="post" name="formAcymailing54111">
                                            <div class="acymailing_module_form">
                                                <div class="mail-title">Newsletters</div>
                                                <div class="acymailing_introtext">Suspendisse sodales, magna at
                                                    dignissim cursus, velit ex porttitor eros.</div>
                                                <div class="clear"></div>
                                                <div class="space"></div>
                                                <table class="acymailing_form">
                                                    <tbody>
                                                        <tr>
                                                            <td class="acyfield_email acy_requiredField">
                                                                <span class="mail-wrap">
                                                                    <input id="user_email_formAcymailing54111"
                                                                        onfocus="if(this.value == 'Enter your email') this.value = '';"
                                                                        onblur="if(this.value=='') this.value='Enter your email';"
                                                                        class="inputbox" name="user[email]"
                                                                        style="width:80%" value="Enter your email"
                                                                        title="Enter your email" type="text">
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr>

                                                            <td class="acysubbuttons">
                                                                <span class="submit-wrap">
                                                                    <span class="submit-wrapper">
                                                                        <input class="button subbutton btn btn-primary"
                                                                            value="Subscribe" name="Submit"
                                                                            onclick="try{ return submitacymailingform('optin','formAcymailing54111'); }catch(err){alert('The form could not be submitted '+err);return false;}"
                                                                            type="submit">
                                                                    </span>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <footer id="tm-footer" class="tm-footer">


                <div class="uk-panel">
                    <div class="uk-container uk-container-center">
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <div class="footer-wrap">
                                    <div class="foot-menu-wrap">
                                        <ul class="nav menu" style="justify-content: center;">
                                            <li class="item-169"><a href="/">Home</a>
                                            </li>

                                            <li class="item-165"><a href="{{ route('about') }}">About</a>
                                            </li>
                                            <li class="item-166"><a href="{{ route('players') }}">Players</a>
                                            </li>
                                            <li class="item-167"><a href="{{ route('matches') }}">Matches</a>
                                            </li>
                                            <li class="item-168"><a href="{{ route('league') }}">League</a>
                                            </li>

                                        </ul>
                                    </div>
                                    {{-- <div class="copyrights">Copyright © {{Date('Y')}} <a href="/">Sportak Team</a>. All Rights Reserved.</div> --}}
                                    <div class="copyrights">Designed & Developed By <a
                                            href="https://searchmarketingservice.com/">Search Marketing Services.</a>
                                    </div>

                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>

    </footer>
</body>

</html>
