<div>
    <!-- Header -->
    <header id="header" class="header">
        <div class="header-top bg-theme-colored sm-text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="widget no-border m-0">
                            <ul class="list-inline sm-text-center mt-5">
                                <li>
                                    <a href="{{ ROUTE('locale', 'en') }}" class="text-white">English</a>
                                </li>
                                <li class="text-white">|</li>
                                <li>
                                    <a href="{{ ROUTE('locale', 'si') }}" class="text-white">සිංහල</a>
                                </li>
                                <li class="text-white">|</li>
                                <li>
                                    <a href="{{ ROUTE('locale', 'ta') }}" class="text-white">தமிழ்</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget no-border m-0">
                            <ul
                                class="social-icons icon-dark icon-circled icon-theme-colored icon-sm pull-right flip sm-pull-none sm-text-center mt-sm-15">
                                <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube text-white"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle p-0 bg-lightest xs-text-center">
            <div class="container pt-0 pb-0">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-5">
                        <div class="widget no-border m-0">
                            <a class="pull-left flip xs-pull-center mb-15"
                                href="index-mp-layout1.html"><img src="{{asset('images/logo.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-4 col-md-2">
                        
                    </div>
                    
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="widget no-border m-0">
                            <div class="mt-10 mb-10 text-right flip sm-text-center">
                                <div class="font-15 text-black-333 mb-5 font-weight-600"><i
                                        class="fa fa-phone-square text-theme-colored font-18"></i> {{__('msg.call us')}} 
                                </div>
                                <a class="font-12 text-gray" href="#">+(94) 11 4380830</a>
                            </div>
                        </div> 
                    </div>
                    
                    <div class="col-xs-12 col-sm-4 col-md-2">
                        <div class="widget no-border m-0">
                            <div class="mt-10 mb-10 text-right flip sm-text-center">
                                <div class="font-15 text-black-333 mb-5 font-weight-600"><i
                                        class="fa fa-envelope text-theme-colored font-18"></i> {{__('msg.mail us')}}</div>
                                <a class="font-12 text-gray" href="#"> info@berendina.org</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-nav ">
            <div class="header-nav-wrapper navbar-scrolltofixed bg-light">
                <div class="container">
                    <nav id="menuzord" class="menuzord blue">
                        <ul class="menuzord-menu">
                            <li class="active"><a href="{{url('/')}}">Home</a></li>
                            <li><a href="#">BMIC</a>
                                <ul class="dropdown">
                                    <li><a href="{{url('about-us')}}">About Us</a>
                                        <ul class="dropdown">
                                            <li><a href="">Vision</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Other</a></li>
                                </ul>
                            </li>
                            <li><a href="#">BDS</a>
                                <ul class="dropdown">
                                    <li><a href="{{url('about-us')}}">About Us</a>
                                        <ul class="dropdown">
                                            <li><a href="">Vision</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Other</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('press')}}">Press</a>
                                <ul class="dropdown">
                                    <li><a href="#">About Us</a>
                                        <ul class="dropdown">
                                            <li><a href="">Vision</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Other</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('careers')}}">Careers</a></li>
                            <li><a href="{{url('contact-us')}}">Contacts</a></li>
                        </ul>
                        <ul class="list-inline pull-right flip hidden-sm hidden-xs">
                            <li class="mt-15">
                                <div class="form-group">
                                    <input class="form-control" data-height="35px" type="text" name="query" value="Search Terms">
                                </div>
                            </li>
                            <li>
                                <a data-height="35px"  class="mb-5 btn btn-colored btn-flat btn-theme-colored ajaxload-popup"
                                   >{{__('msg.search')}}</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
</div>
