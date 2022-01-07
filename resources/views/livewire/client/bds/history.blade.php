<div>
    <style>
        .timeline ul {
            padding: 50px 0;
            color: #fff;
        }

        .timeline ul li {
            list-style-type: none;
            position: relative;
            width: 6px;
            margin: 0 auto;
            padding-top: 50px;
            background: #C70039;
        }

        .timeline ul li::after {
            content: "";
            position: absolute;
            left: 50%;
            bottom: 0;
            transform: translateX(-50%);
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: inherit;
            z-index: 1;
        }

        .timeline ul li div {
            position: relative;
            bottom: 0;
            width: 400px;
            padding: 15px;
            background: #900C3F;
        }

        .timeline ul li div::before {
            content: "";
            position: absolute;
            bottom: 7px;
            width: 0;
            height: 0;
            border-style: solid;
        }

        .timeline ul li:nth-child(odd) div {
            left: 45px;
        }

        .timeline ul li:nth-child(odd) div::before {
            left: -15px;
            border-width: 8px 16px 8px 0;
            border-color: transparent #900C3F transparent transparent;
        }

        .timeline ul li:nth-child(even) div {
            left: -439px;
        }

        .timeline ul li:nth-child(even) div::before {
            right: -15px;
            border-width: 8px 0 8px 16px;
            border-color: transparent transparent transparent #900C3F;
        }

        time {
            display: block;
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 8px;
        }


        /* EFFECTS
          –––––––––––––––––––––––––––––––––––––––––––––––––– */

        .timeline ul li::after {
            transition: background 0.5s ease-in-out;
        }

        .timeline ul li.in-view::after {
            background: #900C3F;
        }

        .timeline ul li div {
            visibility: hidden;
            opacity: 0;
            transition: all 0.5s ease-in-out;
        }

        .timeline ul li:nth-child(odd) div {
            transform: translate3d(200px, 0, 0);
        }

        .timeline ul li:nth-child(even) div {
            transform: translate3d(-200px, 0, 0);
        }

        .timeline ul li.in-view div {
            transform: none;
            visibility: visible;
            opacity: 1;
        }


        /* GENERAL MEDIA QUERIES
          –––––––––––––––––––––––––––––––––––––––––––––––––– */

        @media screen and (max-width: 900px) {
            .timeline ul li div {
                width: 250px;
            }

            .timeline ul li:nth-child(even) div {
                left: -289px;
                /*250+45-6*/
            }
        }

        @media screen and (max-width: 600px) {
            .timeline ul li {
                margin-left: 20px;
            }

            .timeline ul li div {
                width: calc(100vw - 91px);
            }

            .timeline ul li:nth-child(even) div {
                left: 45px;
            }

            .timeline ul li:nth-child(even) div::before {
                left: -15px;
                border-width: 8px 16px 8px 0;
                border-color: transparent #900C3F transparent transparent;
            }
        }


        /* EXTRA/CLIP PATH STYLES
          –––––––––––––––––––––––––––––––––––––––––––––––––– */
        .timeline-clippy ul li::after {
            width: 40px;
            height: 40px;
            border-radius: 0;
        }

        .timeline-rhombus ul li::after {
            clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
        }

        .timeline-rhombus ul li div::before {
            bottom: 12px;
        }

        .timeline-star ul li::after {
            clip-path: polygon(50% 0%,
                    61% 35%,
                    98% 35%,
                    68% 57%,
                    79% 91%,
                    50% 70%,
                    21% 91%,
                    32% 57%,
                    2% 35%,
                    39% 35%);
        }

        .timeline-heptagon ul li::after {
            clip-path: polygon(50% 0%,
                    90% 20%,
                    100% 60%,
                    75% 100%,
                    25% 100%,
                    0% 60%,
                    10% 20%);
        }

        .timeline-infinite ul li::after {
            animation: scaleAnimation 2s infinite;
        }

        @keyframes scaleAnimation {
            0% {
                transform: translateX(-50%) scale(1);
            }

            50% {
                transform: translateX(-50%) scale(1.25);
            }

            100% {
                transform: translateX(-50%) scale(1);
            }
        }
    </style>
    <h2 class="line-bottom m-10 p-20">@lang('msg.16 YEARS OF FIGHTING FOR AN EMPOWERED AND EQUITABLE SOCIETY AS BDS.') </h2>
    <section class="timeline">
        <ul>
            <li>
                <div>
                    <time>1982</time>
                    <p style="text-align: justify;">@lang('msg.1982')</p>
                </div>
            </li>
            <li>
                <div>
                    <time>1987</time>
                    <p style="text-align: justify;">@lang('msg.1987')</p>
                </div>
            </li>
            <li>
                <div>
                    <time>1992</time>
                    <p style="text-align: justify;">@lang('msg.1992')</p>
                </div>
            </li>
            <li>
                <div>
                    <time>1997</time>
                    <p style="text-align: justify;">@lang('msg.1997')</p>
                </div>
            </li>
            <li>
                <div>
                    <time>2005</time>
                    <p style="text-align: justify;">@lang('msg.2005')</p>
                </div>
            </li>
            <li>
                <div>
                    <time>2015</time>
                    <p style="text-align: justify;">
                        @lang('msg.2015')

                </div>
            </li>
            <li>
                <div>
                    <time>2016</time>
                    <p style="text-align: justify;">
                        @lang('msg.2016')
                    </p>
                </div>
            </li>
            <li>
                <div>
                    <time>2017</time>
                    <p style="text-align: justify;">
                        @lang('msg.2017')
                    </p>
                </div>
            </li>
            <li>
                <div>
                    <time>2019</time>
                    <p style="text-align: justify;">
                        @lang('msg.2019')
                    </p>
                </div>
            </li>
            <li>
                <div>
                    <time>2021</time>
                    <p style="text-align: justify;">
                        @lang('msg.2021')
                    </p>
                </div>
            </li>
        </ul>
    </section>
    <script>
        (function () {
            "use strict";

            // define variables
            var items = document.querySelectorAll(".timeline li");

            // check if an element is in viewport
            // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
            function isElementInViewport(el) {
                var rect = el.getBoundingClientRect();
                return (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <=
                    (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            }

            function callbackFunc() {
                for (var i = 0; i < items.length; i++) {
                    if (isElementInViewport(items[i])) {
                        items[i].classList.add("in-view");
                    }
                }
            }

            // listen for events
            window.addEventListener("load", callbackFunc);
            window.addEventListener("resize", callbackFunc);
            window.addEventListener("scroll", callbackFunc);
        })();
        $(function () {

            window.sr = ScrollReveal();

            if ($(window).width() < 768) {

                if ($('.timeline-content').hasClass('js--fadeInLeft')) {
                    $('.timeline-content').removeClass('js--fadeInLeft').addClass('js--fadeInRight');
                }

                sr.reveal('.js--fadeInRight', {
                    origin: 'right',
                    distance: '300px',
                    easing: 'ease-in-out',
                    duration: 800,
                });

            } else {

                sr.reveal('.js--fadeInLeft', {
                    origin: 'left',
                    distance: '300px',
                    easing: 'ease-in-out',
                    duration: 800,
                });

                sr.reveal('.js--fadeInRight', {
                    origin: 'right',
                    distance: '300px',
                    easing: 'ease-in-out',
                    duration: 800,
                });

            }

            sr.reveal('.js--fadeInLeft', {
                origin: 'left',
                distance: '300px',
                easing: 'ease-in-out',
                duration: 800,
            });

            sr.reveal('.js--fadeInRight', {
                origin: 'right',
                distance: '300px',
                easing: 'ease-in-out',
                duration: 800,
            });


        });

    </script>
</div>
