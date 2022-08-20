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
            background: #5D9CEC;
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
            background: #FF5722;
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
            border-color: transparent #FF5722 transparent transparent;
        }

        .timeline ul li:nth-child(even) div {
            left: -439px;
        }

        .timeline ul li:nth-child(even) div::before {
            right: -15px;
            border-width: 8px 0 8px 16px;
            border-color: transparent transparent transparent #FF5722;
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
            background: #FF5722;
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
                border-color: transparent #FF5722 transparent transparent;
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
    <section class="timeline">
        <p>BMIC is the Microfinance Arm of Berendina. BMIC follows triple bottom line approach. It has a strong focus on financial inclusion with client centric products and services.</p>
        <ul>
            <li>
                <div>
                    <time>1986</time>
                    <p style="text-align: justify;">
                        Providing small grants for poor people in the Lower Garagoda village in Yatiyantota division managed by Mrs. Eva Mudalige and village leaders</p>
                </div>
            </li>
            <li>
                <div>
                    <time>1992</time>
                    <p style="text-align: justify;">Berendina Foundation started to provide financial and other services for deserving families in Garagoda and to all the villages in Yatiyantota division and Bulathkohupitiya division since 1992. Initially the Foundation provided interest free loans to micro entrepreneurs with the grants received from Berendina Stichting in Netherlands and gradually increased the interest rates over the years.</p>
                </div>
            </li>
            <li>
                <div>
                    <time>2007</time>
                    <p style="text-align: justify;">Financial service operation of Berendina Foundation was incorporated as aseparate legal entity under the name of Berendina Microfinance Institute (Gte) Ltd (BMI) under the Companies Act No. 17 of 1982 as a guaranteed company. Commenced operations in Anuradhapura, Kegalle and Nuwara Eliya Districts</p>
                </div>
            </li>
            <li>
                <div>
                    <time>2008</time>
                    <p style="text-align: justify;">Re-registered BMI under the Companies Act No. 7 of 2007.</p>
                </div>
            </li>
            <li>
                <div>
                    <time>2010</time>
                    <p style="text-align: justify;">Commenced operations in Trincomalee District.</p>
                </div>
            </li>
            <li>
                <div>
                    <time>2013</time>
                    <p style="text-align: justify;">Commenced operations in Batticaloa District.</p>
                </div>
            </li>
            <li>
                <div>
                    <time>2014</time>
                    <p style="text-align: justify;">Incorporated Berendina Micro Investments Co Ltd (BMIC) under the Companies Act No. 7 of 2007 mainly to approach the foreign borrowing as the Guaranteed companies are prohibited to do so. Accordingly, both BMI & BMIC continued their operations parallelly.
                    </p>
                </div>
            </li>
            <li>
                <div>
                    <time>2016</time>
                    <p style="text-align: justify;">Commenced operations in Ampara, Kilinochchi, Mullaitivu, and Vavuniya districts. Applying triple bottom-line approach of People, Planet & Profit the organization initiated Environmental Protection Program.
                    </p>
                </div>
            </li>
            <li>
                <div>
                    <time>2017</time>
                    <p style="text-align: justify;">Microfinance operations of both BMI & BMIC were merged in order to provide extensive services to its clients and continued all operations under one wing as BMIC. The sister organization, Berendina Development Services (Gte) Ltd (BDS) become the only shareholder of BMIC.
                    </p>
                </div>
            </li>
            <li>
                <div>
                    <time>2019</time>
                    <p style="text-align: justify;">BMIC became the first License Microfinance Company to be certified under the Microfinance Act No. 6 of 2016 from the Central Bank of Sri Lanka. As regulated organization, BMIC commenced micro savings. Launched an ecommerce website under the name ekade.lk in order to support rural producers to market their products. 
                        <br>
                        Commenced operations in Badulla District.
                    </p>
                </div>
            </li>
            <li>
                <div>
                    <time>2020</time>
                    <p style="text-align: justify;">As a step to further the improvement in governance structure of BMIC, the shareholding structure was changed as 75% hold by founder Berendina Stichting and 25% by previous shareholder BDS.
                    </p>
                </div>
            </li>
        </ul>
    </section>

    <script src="https://cdn.jsdelivr.net/scrollreveal.js/3.3.1/scrollreveal.min.js"></script>
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
