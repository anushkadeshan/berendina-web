<div>
    <style>
        ol.organizational-chart,
        ol.organizational-chart ol,
        ol.organizational-chart li,
        ol.organizational-chart li>div {
            position: relative;
        }

        ol.organizational-chart,
        ol.organizational-chart ol {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        ol.organizational-chart {
            text-align: center;
            color: #fff;
        }

        ol.organizational-chart ol {
            padding-top: 1em;
        }

        ol.organizational-chart ol:before,
        ol.organizational-chart ol:after,
        ol.organizational-chart li:before,
        ol.organizational-chart li:after,
        ol.organizational-chart>li>div:before,
        ol.organizational-chart>li>div:after {
            background-color: #b7a6aa;
            content: '';
            position: absolute;
        }

        ol.organizational-chart ol>li {
            padding: 1em 0 0 1em;
        }

        ol.organizational-chart>li ol:before {
            height: 1em;
            left: 50%;
            top: 0;
            width: 3px;
        }

        ol.organizational-chart>li ol:after {
            height: 3px;
            left: 3px;
            top: 1em;
            width: 50%;
        }

        ol.organizational-chart>li ol>li:not(:last-of-type):before {
            height: 3px;
            left: 0;
            top: 2em;
            width: 1em;
        }

        ol.organizational-chart>li ol>li:not(:last-of-type):after {
            height: 100%;
            left: 0;
            top: 0;
            width: 3px;
        }

        ol.organizational-chart>li ol>li:last-of-type:before {
            height: 3px;
            left: 0;
            top: 2em;
            width: 1em;
        }

        ol.organizational-chart>li ol>li:last-of-type:after {
            height: 2em;
            left: 0;
            top: 0;
            width: 3px;
        }

        ol.organizational-chart li>div {
            background-color: #fff;
            border-radius: 3px;
            min-height: 2em;
            padding: 0.5em;
        }

        /*** PRIMARY ***/
        ol.organizational-chart>li>div {
            background-color: #FF5722;
            margin-right: 1em;
            color: #fff;
        }

        ol.organizational-chart>li>div:before {
            bottom: 2em;
            height: 3px;
            right: -1em;
            width: 1em;
        }

        ol.organizational-chart>li>div:first-of-type:after {
            bottom: 0;
            height: 2em;
            right: -1em;
            width: 3px;
        }

        ol.organizational-chart>li>div+div {
            margin-top: 1em;
        }

        ol.organizational-chart>li>div+div:after {
            height: calc(100% + 1em);
            right: -1em;
            top: -1em;
            width: 3px;
        }

        /*** SECONDARY ***/
        ol.organizational-chart>li>ol:before {
            left: inherit;
            right: 0;
        }

        ol.organizational-chart>li>ol:after {
            left: 0;
            width: 100%;
        }

        ol.organizational-chart>li>ol>li>div {
            background-color: #5D9CEC;
            color: #fff;
        }

        /*** TERTIARY ***/
        ol.organizational-chart>li>ol>li>ol>li>div {
            background-color: #fd6470;
        }

        /*** QUATERNARY ***/
        ol.organizational-chart>li>ol>li>ol>li>ol>li>div {
            background-color: #fca858;
        }

        /*** QUINARY ***/
        ol.organizational-chart>li>ol>li>ol>li>ol>li>ol>li>div {
            background-color: #fddc32;
        }

        /*** MEDIA QUERIES ***/
        @media only screen and (min-width: 64em) {

            ol.organizational-chart {
                margin-left: -1em;
                margin-right: -1em;
            }

            /* PRIMARY */
            ol.organizational-chart>li>div {
                display: inline-block;
                float: none;
                margin: 0 1em 1em 1em;
                vertical-align: bottom;
            }

            ol.organizational-chart>li>div:only-of-type {
                margin-bottom: 0;
                width: calc((100% / 1) - 2em - 4px);
            }

            ol.organizational-chart>li>div:first-of-type:nth-last-of-type(2),
            ol.organizational-chart>li>div:first-of-type:nth-last-of-type(2)~div {
                width: calc((100% / 2) - 2em - 4px);
            }

            ol.organizational-chart>li>div:first-of-type:nth-last-of-type(3),
            ol.organizational-chart>li>div:first-of-type:nth-last-of-type(3)~div {
                width: calc((100% / 3) - 2em - 4px);
            }

            ol.organizational-chart>li>div:first-of-type:nth-last-of-type(4),
            ol.organizational-chart>li>div:first-of-type:nth-last-of-type(4)~div {
                width: calc((100% / 4) - 2em - 4px);
            }

            ol.organizational-chart>li>div:first-of-type:nth-last-of-type(5),
            ol.organizational-chart>li>div:first-of-type:nth-last-of-type(5)~div {
                width: calc((100% / 5) - 2em - 4px);
            }

            ol.organizational-chart>li>div:before,
            ol.organizational-chart>li>div:after {
                bottom: -1em !important;
                top: inherit !important;
            }

            ol.organizational-chart>li>div:before {
                height: 1em !important;
                left: 50% !important;
                width: 3px !important;
            }

            ol.organizational-chart>li>div:only-of-type:after {
                display: none;
            }

            ol.organizational-chart>li>div:first-of-type:not(:only-of-type):after,
            ol.organizational-chart>li>div:last-of-type:not(:only-of-type):after {
                bottom: -1em;
                height: 3px;
                width: calc(50% + 1em + 3px);
            }

            ol.organizational-chart>li>div:first-of-type:not(:only-of-type):after {
                left: calc(50% + 3px);
            }

            ol.organizational-chart>li>div:last-of-type:not(:only-of-type):after {
                left: calc(-1em - 3px);
            }

            ol.organizational-chart>li>div+div:not(:last-of-type):after {
                height: 3px;
                left: -2em;
                width: calc(100% + 4em);
            }

            /* SECONDARY */
            ol.organizational-chart>li>ol {
                display: flex;
                flex-wrap: nowrap;
            }

            ol.organizational-chart>li>ol:before,
            ol.organizational-chart>li>ol>li:before {
                height: 1em !important;
                left: 50% !important;
                top: 0 !important;
                width: 3px !important;
            }

            ol.organizational-chart>li>ol:after {
                display: none;
            }

            ol.organizational-chart>li>ol>li {
                flex-grow: 1;
                padding-left: 1em;
                padding-right: 1em;
                padding-top: 1em;
            }

            ol.organizational-chart>li>ol>li:only-of-type {
                padding-top: 0;
            }

            ol.organizational-chart>li>ol>li:only-of-type:before,
            ol.organizational-chart>li>ol>li:only-of-type:after {
                display: none;
            }

            ol.organizational-chart>li>ol>li:first-of-type:not(:only-of-type):after,
            ol.organizational-chart>li>ol>li:last-of-type:not(:only-of-type):after {
                height: 3px;
                top: 0;
                width: 50%;
            }

            ol.organizational-chart>li>ol>li:first-of-type:not(:only-of-type):after {
                left: 50%;
            }

            ol.organizational-chart>li>ol>li:last-of-type:not(:only-of-type):after {
                left: 0;
            }

            ol.organizational-chart>li>ol>li+li:not(:last-of-type):after {
                height: 3px;
                left: 0;
                top: 0;
                width: 100%;
            }

        }
    </style>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div id="wrapper">
                <div id="container">

                    <ol class="organizational-chart">
                        <li style="color: #fff;">
                            <div>
                                <h2 style="color: #fff;">Shareholders of BMIC</h2>
                            </div>
                            <ol>
                                <li>
                                    <div>
                                        <h4 style="color: #fff;">75%
                                            Berendina Stichting
                                        </h4>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <h4 style="color: #fff;">25%
                                            Berendina Development Services (BDS)
                                        </h4>
                                    </div>
                                </li>
                            </ol>
                        </li>
                    </ol>

                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
    <div class="row" style="margin-top: 30px;">
        <div class="col-md-6">
            <p style="text-align: justify;">
                Berendina Stichting was incorporated in the Kingdom of Netherlands with the objective of alleviation of
                poverty and the empowerment of marginalized and vulnerable communities. Berendina Stichting is the
                founder and main funder of Berendina organization including BMIC in Sri Lanka. Berendina Stichting owns
                75% of the shares of BMIC for better governance without the right for dividend.
            </p>
        </div>
        <div class="col-md-6">
            <p style="text-align:justify;">
                Berendina Development Services (BDS) owns 25% of the shares of BMIC. However, BDS has 100% of dividend
                rights ensuring the profits earned by BMIC is utilized with in Sri Lanka for the uplifting of the living
                standards of the poor and vulnerable communities.
            </p>
        </div>
    </div>
</div>
