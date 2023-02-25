<div>
    <style>
        .fancyTab {
            text-align: center;
            padding: 15px 0;
            background-color: #eee;
            box-shadow: 0 0 0 1px #ddd;
            top: 15px;
            transition: top .2s;
        }

        .fancyTab.active {
            top: 0;
            transition: top .2s;
        }

        .whiteBlock {
            display: none;
        }

        .fancyTab.active .whiteBlock {
            display: block;
            height: 2px;
            bottom: -2px;
            background-color: #fff;
            width: 99%;
            position: absolute;
            z-index: 1;
        }

        .fancyTab a {
            font-family: 'Source Sans Pro';
            font-size: 1.65em;
            font-weight: 300;
            transition: .2s;
            color: #333;
        }

        /*.fancyTab .hidden-xs {
  white-space:nowrap;
}*/

        .fancyTabs {
            border-bottom: 2px solid #ddd;
            margin: 15px 0 0;
        }

        li.fancyTab a {
            padding-top: 15px;
            top: -15px;
            padding-bottom: 0;
        }

        li.fancyTab.active a {
            padding-top: inherit;
        }

        .fancyTab .fa {
            font-size: 40px;
            width: 100%;
            padding: 15px 0 5px;
            color: #666;
        }

        .fancyTab.active .fa {
            color: #cfb87c;
        }

        .fancyTab a:focus {
            outline: none;
        }

        .fancyTabContent {
            border-color: transparent;
            box-shadow: 0 -2px 0 -1px #fff, 0 0 0 1px #ddd;
            padding: 30px 15px 15px;
            position: relative;
            background-color: #fff;
        }

        .nav-tabs>li.fancyTab.active>a,
        .nav-tabs>li.fancyTab.active>a:focus,
        .nav-tabs>li.fancyTab.active>a:hover {
            border-width: 0;
        }

        .nav-tabs>li.fancyTab:hover {
            background-color: #f9f9f9;
            box-shadow: 0 0 0 1px #ddd;
        }

        .nav-tabs>li.fancyTab.active:hover {
            background-color: #fff;
            box-shadow: 1px 1px 0 1px #fff, 0 0px 0 1px #ddd, -1px 1px 0 0px #ddd inset;
        }

        .nav-tabs>li.fancyTab:hover a {
            border-color: transparent;
        }

        .nav.nav-tabs .fancyTab a[data-toggle="tab"] {
            background-color: transparent;
            border-bottom: 0;
        }

        .nav-tabs>li.fancyTab:hover a {
            border-right: 1px solid transparent;
        }

        .nav-tabs>li.fancyTab>a {
            margin-right: 0;
            border-top: 0;
            padding-bottom: 30px;
            margin-bottom: -30px;
        }

        .nav-tabs>li.fancyTab {
            margin-right: 0;
            margin-bottom: 0;
        }

        .nav-tabs>li.fancyTab:last-child a {
            border-right: 1px solid transparent;
        }

        .nav-tabs>li.fancyTab.active:last-child {
            border-right: 0px solid #ddd;
            box-shadow: 0px 2px 0 0px #fff, 0px 0px 0 1px #ddd;
        }

        .fancyTab:last-child {
            box-shadow: 0 0 0 1px #ddd;
        }

        .tabs .nav-tabs li.fancyTab.active a {
            box-shadow: none;
            top: 0;
        }


        .fancyTab.active {
            background: #fff;
            box-shadow: 1px 1px 0 1px #fff, 0 0px 0 1px #ddd, -1px 1px 0 0px #ddd inset;
            padding-bottom: 30px;
        }

        .arrow-down {
            display: none;
            width: 0;
            height: 0;
            border-left: 20px solid transparent;
            border-right: 20px solid transparent;
            border-top: 22px solid #ddd;
            position: absolute;
            top: -1px;
            left: calc(50% - 20px);
        }

        .arrow-down-inner {
            width: 0;
            height: 0;
            border-left: 18px solid transparent;
            border-right: 18px solid transparent;
            border-top: 12px solid #fff;
            position: absolute;
            top: -22px;
            left: -18px;
        }

        .fancyTab.active .arrow-down {
            display: block;
        }

        @media (max-width: 1200px) {

            .fancyTab .fa {
                font-size: 36px;
            }

            .fancyTab .hidden-xs {
                font-size: 22px;
            }

        }


        @media (max-width: 992px) {

            .fancyTab .fa {
                font-size: 33px;
            }

            .fancyTab .hidden-xs {
                font-size: 18px;
                font-weight: normal;
            }

        }


        @media (max-width: 768px) {

            .fancyTab>a {
                font-size: 18px;
            }

            .nav>li.fancyTab>a {
                padding: 15px 0;
                margin-bottom: inherit;
            }

            .fancyTab .fa {
                font-size: 30px;
            }

            .nav-tabs>li.fancyTab>a {
                border-right: 1px solid transparent;
                padding-bottom: 0;
            }

            .fancyTab.active .fa {
                color: #333;
            }

        }

        .responsive-table {
            width: 100%;
            margin-bottom: 1.5em;
        }

        .responsive-table thead {
            position: absolute;
            clip: rect(1px 1px 1px 1px);
            /* IE6, IE7 */
            clip: rect(1px, 1px, 1px, 1px);
            padding: 0;
            border: 0;
            height: 1px;
            width: 1px;
            overflow: hidden;
        }

        .responsive-table thead th {
            background-color: #1d96b2;
            border: 1px solid #1d96b2;
            font-weight: normal;
            text-align: left;
            color: white;
        }

        .responsive-table thead th:first-of-type {
            text-align: left;
        }

        .responsive-table tbody,
        .responsive-table tr,
        .responsive-table th,
        .responsive-table td {
            display: block;
            padding: 0;
            text-align: left;
            white-space: normal;
        }

        .responsive-table th,
        .responsive-table td {
            padding: .5em;
            vertical-align: top;
        }

        .responsive-table caption {
            margin-bottom: 1em;
            font-size: 1em;
            font-weight: bold;
            text-align: center;
        }

        .responsive-table tfoot {
            font-size: .8em;
            font-style: italic;
        }

        .responsive-table tbody tr {
            margin-bottom: 1em;
            border: 2px solid #1d96b2;
        }

        .responsive-table tbody tr:last-of-type {
            margin-bottom: 0;
        }

        .responsive-table tbody th[scope="row"] {
            background-color: #1d96b2;
            color: white;
        }

        .responsive-table tbody td[data-type=currency] {
            text-align: right;
        }

        .responsive-table tbody td[data-title]:before {
            content: attr(data-title);
            float: left;
            font-size: .8em;
            color: rgba(94, 93, 82, 0.75);
        }

        .responsive-table tbody td {
            text-align: right;
            border-bottom: 1px solid #1d96b2;
        }


        @media (min-width: 52em) {
            .responsive-table {
                font-size: .9em;
            }

            .responsive-table thead {
                position: relative;
                clip: auto;
                height: auto;
                width: auto;
                overflow: auto;
            }

            .responsive-table tr {
                display: table-row;
            }

            .responsive-table th,
            .responsive-table td {
                display: table-cell;
                padding: .5em;
            }

            .responsive-table caption {
                font-size: 1.5em;
            }

            .responsive-table tbody {
                display: table-row-group;
            }

            .responsive-table tbody tr {
                display: table-row;
                border-width: 1px;
            }

            .responsive-table tbody tr:nth-of-type(even) {
                background-color: rgba(94, 93, 82, 0.1);
            }

            .responsive-table tbody th[scope="row"] {
                background-color: transparent;
                color: #5e5d52;
                text-align: left;
            }

            .responsive-table tbody td {
                text-align: left;
            }

            .responsive-table tbody td[data-title]:before {
                content: none;
            }
        }

        @media (min-width: 62em) {
            .responsive-table {
                font-size: 1em;
            }

            .responsive-table th,
            .responsive-table td {
                padding: .75em .5em;
            }

            .responsive-table tfoot {
                font-size: .9em;
            }
        }

        @media (min-width: 75em) {

            .responsive-table th,
            .responsive-table td {
                padding: .75em;
            }
        }
    </style>
    <div class="container mt-20">
        <div class="container">
            <p>As a dedicated customer centric MFI, BMIC mainly provides three services instead of providing merely credit facilities. There are:</p>
            <section id="fancyTabWidget" class="tabs t-tabs">
                <ul class="nav nav-tabs fancyTabs" role="tablist">

                    <li class="tab fancyTab active">
                        <div class="arrow-down">
                            <div class="arrow-down-inner"></div>
                        </div>
                        <a id="tab0" href="#tabBody0" role="tab" aria-controls="tabBody0" aria-selected="true"
                            data-toggle="tab" tabindex="0"><span class="fa fa-money"></span><span class="hidden-xs">
                                <h4>Credit Services</h4>
                            </span></a>
                        <div class="whiteBlock"></div>
                    </li>

                    <li class="tab fancyTab">
                        <div class="arrow-down">
                            <div class="arrow-down-inner"></div>
                        </div>
                        <a id="tab1" href="#tabBody1" role="tab" aria-controls="tabBody1" aria-selected="true"
                            data-toggle="tab" tabindex="0"><span class="fa fa-umbrella"></span><span class="hidden-xs">
                                <h4>Enterprise Development Services</h4>
                            </span></a>
                        <div class="whiteBlock"></div>
                    </li>

                    <li class="tab fancyTab">
                        <div class="arrow-down">
                            <div class="arrow-down-inner"></div>
                        </div>
                        <a id="tab2" href="#tabBody2" role="tab" aria-controls="tabBody2" aria-selected="true"
                            data-toggle="tab" tabindex="0"><span class="fa fa-envelope"></span><span class="hidden-xs">
                                <h4>Collateral Savings</h4>
                            </span></a>
                        <div class="whiteBlock"></div>
                    </li>
                </ul>
                <div id="myTabContent" class="tab-content fancyTabContent" aria-live="polite">
                    <div class="tab-pane  fade active in" id="tabBody0" role="tabpanel" aria-labelledby="tab0"
                        aria-hidden="false" tabindex="0">
                        <div>
                            <div class="row">

                                <div class="col-md-12">
                                    <p>BMIC’s loan product portfolio is designed based on customer requirements and aims to achieve greater level of financial inclusion. </p>
                                    <table class="responsive-table">

                                        <thead>
                                            <tr>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Purposes</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Business Loans </th>
                                                <td>To starts a business or expand an existing business</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Cultivation Loans </th>
                                                <td>For seasonal agricultural activities
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Dairy Loans</th>
                                                <td>To commence or expand dairy farm businesses</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Asset Building Loans</th>
                                                <td>To build and repair properties, construction of latrines, purchase other durable assets and fulfil educational needs of the children etc</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Senior Citizen Loans </th>
                                                <td>For income generation purposes for those who are above 63 years of age
                                            </tr>
                                            <tr>
                                                <th scope="row">Sanitary Loans</th>
                                                <td>To build latrines for individual households with the focus of uplifting sanitary standards of the Estate community</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Plantation Worker Household Asset Acquisition Loans</th>
                                                <td>To the estate community to purchase their basic household assets</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Enterprise Development Loan (EDL)</th>
                                                <td>To finance working capital requirement, expansion or diversification needs of existing small
                                                    enterprises which could also create increased employment
                                                    opportunities in the rural areas.
                                                    </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <h2 class="line-bottom">Delivery Channels</h2>
                                    <ol>
                                        <li>1. <b>Clusters:</b> The main and the most popular channel is the cluster channel. A cluster is a group of 30 clients comprised of 10 small groups of 3 clients.</li>
                                        <li>2. <b>Estate Workers Housing Cooperative Societies (EWHCS)</b> Loan requirements of Plantation sector employees are provided through the EWHCS where BMIC provides a bulk loan to Cooperative Society and it will lend to their employees. </li>
                                        <li>3. <b>Individual Loan:</b> Loan is given to the client by obtaining the personal guarantees from acceptable external persons having regular and adequate income source.</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane  fade" id="tabBody1" role="tabpanel" aria-labelledby="tab1" aria-hidden="true"
                        tabindex="0">
                        <div class="row">

                            <div class="col-md-12">
                                <p>BMIC is a unique organization that supports low income people by providing micro credit along with credit plus service known as Enterprise Development Services (EDS). BMIC is proud to be one of the handful of organizations which provide such services to the rural communities and it is known to be the only MFI that delivers a dedicated EDS component along with the credit facilities. </p>
                                <p style="text-align: justify;" class="mt-20">
                                    EDS Coupons: In order to provide EDS training services in a financially sustainable manner, BMIC has evolved a creative demand driven system through which clients pay for the services. BMIC issues 'EDS coupons' together with the loans. The value of the coupon is paid to BMIC with the monthly loan instalment by clients. There is no interest charged for coupon value. Client or client’s family members can use those coupons to pay the fees for EDS services or alternatively the client can offset the money paid for the coupon for the last instalment of the loan repayment by returning coupons. </p>
                                    {{--
                                    <h4 class="line-bottom">EDS Coupon </h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="{{asset('images/eds1.png')}}" alt="BMIC EDS Coupon" style="height: 200px;" class="img img-thumb img-responsive" height="300px">
                                        </div>
                                        <div class="col-md-6">
                                            <img src="{{asset('images/eds2.jpg')}}" alt="BMIC EDS Coupon"  style="height: 200px;" class="img img-thumb img-responsive"  height="300px">
                                        </div>
                                    </div>
                                    --}}
                                <p style="text-align: justify;" class="mt-20">This novel EDS coupon methodology is now replicated in Nepal by Nepal Women Community Service Center (NWCSC), Mahila Sahayatra Microfinance Bittiya Santha Ltd and Nerude Laghubitta Bittiya Sanstha Ltd.</p>
                                    <p>The Enterprise Development Services provide the following services:</p>
                                    <table class="responsive-table">

                                        <thead>
                                            <tr>
                                                <th scope="col">Type of Service</th>
                                                <th scope="col">Purpose</th>
                                                <th scope="col" style="width: 400px;">Services</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">A Type – Training and exposure visits</th>
                                                <td>To develop the knowledge and skills of clients</td>
                                                <td>Agriculture and Livestock Technical Trainings <br>
                                                    Technical Trainings for Industrial Based Enterprises<br>
                                                    Exposure Visits <br>
                                                    Motivational Trainings <br>
                                                    </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">B Type – Business follow-up and individual supporting services </th>
                                                <td>To provide hand on support to enhance the performance of businesses </td>
                                                <td>Business follow-up <br>
                                                    Business counselling<br>
                                                    Information provision<br>
                                                    Facilitation of business registration<br>
                                                    Training follow up<br>
                                                    Facilitation of livestock insurance<br>
                                                    Linking for external  trainings <br>
                                                    </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">C Type – Special income generation projects</th>
                                                <td>Initiate income generation project to create new employments or business opportunities</td>
                                                <td>Agricultural projects<br>
                                                    Industrial projects
                                                    </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">D Type - Market development and facilitation</th>
                                                <td>To create and improve market linkages </td>
                                                <td>District and national level market and supply linkages<br>
                                                    Provide ekade.lk ecommerce platform to market their product <br>
                                                    </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">E Type - Environment safeguard programme</th>
                                                <td>To safeguard the environment through preventing/mitigating measures for adverse enterprise outcome.</td>
                                                <td>Technical assistance<br>
                                                    Standard and customized solutions<br>
                                                    Educational programs  <br>
                                                    </td>
                                            </tr>
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane  fade" id="tabBody2" role="tabpanel" aria-labelledby="tab2" aria-hidden="true"
                        tabindex="0">
                        <div class="row">
                            <div class="col-md-12">

                                <p style="text-align:justify">Being a licensed Micro Finance company registered under the Central Bank of Sri Lanka, BMIC is authorized to collect collateral savings from its clients. <br>
                                    A specified amount is collected as collateral savings from the cluster clients at the time of paying their monthly loan instalment. <br>
                                    Clients who have obtained individual loans, pay an upfront collateral deposit amount based on their loan size while obtaining the loan amount. Further, they continue to make specified amount as the monthly collateral savings at the time of paying the loan instalments. <br>
                                    BMIC provides attractive interest rate for the savings based on the daily available balance to these accounts at the end of each month. <br>
                                    Since the savings amount is accumulated gradually through a small monthly contribution without burdening the client, they reap benefit as they are able to withdraw a lump sum amount at the end of the tenor of the loan.
                                     </p>
                                <h4 class="line-bottom mt-20">Main features of Savings are </h4>
                                <table class="responsive-table">
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Monthly collateral saving amount</td>
                                            <td>Rs 300</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Upfront collateral saving amount for individual loan</td>
                                            <td>5% to 10% of loan amount</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Saving interest rate (Prevailing) </td>
                                            <td>10% Annual Effective Rate</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </div>
    <script>
        $(document).ready(function () {



            var numItems = $('li.fancyTab').length;


            if (numItems == 12) {
                $("li.fancyTab").width('8.3%');
            }
            if (numItems == 11) {
                $("li.fancyTab").width('9%');
            }
            if (numItems == 10) {
                $("li.fancyTab").width('10%');
            }
            if (numItems == 9) {
                $("li.fancyTab").width('11.1%');
            }
            if (numItems == 8) {
                $("li.fancyTab").width('12.5%');
            }
            if (numItems == 7) {
                $("li.fancyTab").width('14.2%');
            }
            if (numItems == 6) {
                $("li.fancyTab").width('16.666666666666667%');
            }
            if (numItems == 5) {
                $("li.fancyTab").width('20%');
            }
            if (numItems == 4) {
                $("li.fancyTab").width('25%');
            }
            if (numItems == 3) {
                $("li.fancyTab").width('33.3%');
            }
            if (numItems == 2) {
                $("li.fancyTab").width('50%');
            }




        });

        $(window).load(function () {

            $('.fancyTabs').each(function () {

                var highestBox = 0;
                $('.fancyTab a', this).each(function () {

                    if ($(this).height() > highestBox)
                        highestBox = $(this).height();
                });

                $('.fancyTab a', this).height(highestBox);

            });
        });
    </script>
</div>
