<div class="wrapper">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/orgchart/3.1.1/css/jquery.orgchart.min.css" integrity="sha512-bCaZ8dJsDR+slK3QXmhjnPDREpFaClf3mihutFGH+RxkAcquLyd9iwewxWQuWuP5rumVRl7iGbSDuiTvjH1kLw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>


        .line {
            width: 100%;
            height: 1px;
            border-bottom: 1px dashed #ddd;
            margin: 40px 0;
        }

        /* ---------------------------------------------------
            SIDEBAR STYLE
        ----------------------------------------------------- */

        .wrapper {
            display: flex;
            width: 100%;
            align-items: stretch;
        }

        #sidebar {
            min-width: 250px;
            max-width: 250px;
            background: #285f8f;
            color: #4f93ce;
            transition: all 0.3s;
        }

        #sidebar.active {
            margin-left: -250px;
        }

        #sidebar .sidebar-header {
            padding: 20px;
            background: #285f8f;
        }

        #sidebar ul.components {
            padding: 20px 0;
        }

        #sidebar ul p {
            color: #4f93ce;
            padding: 10px;
        }

        #sidebar ul{
            margin-bottom: 10px;
        }

        #sidebar ul li a {
            padding: 10px;
            font-size: 1.1em;
            display: block;
        }

        #sidebar ul li a:hover {
            color: #FF5722;
            background: #2d6ca3;
        }

        #sidebar ul li.active>a,
        a[aria-expanded="true"] {
            color: #fff;
            background: #3b87c8;
        }

        a[data-toggle="collapse"] {
            position: relative;
        }

        .dropdown-toggle::after {
            display: block;
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
        }

        ul ul a {
            font-size: 0.9em !important;
            padding-left: 30px !important;
            background: #4f93ce;
        }

        ul.CTAs {
            padding: 20px;
        }

        ul.CTAs a {
            text-align: center;
            font-size: 0.9em !important;
            display: block;
            border-radius: 5px;
            margin-bottom: 5px;
        }

        a.download {
            background: #fff;
            color: #4f93ce;
        }

        a.article,
        a.article:hover {
            background: #4f93ce !important;
            color: #3b87c8 !important;
        }

        /* ---------------------------------------------------
            CONTENT STYLE
        ----------------------------------------------------- */

        #content {
            width: 100%;
            padding: 20px;
            padding-top: 0px;
            min-height: 100vh;
            transition: all 0.3s;
        }

        /* ---------------------------------------------------
            MEDIAQUERIES
        ----------------------------------------------------- */

        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
            }
            #sidebar.active {
                margin-left: 0;
            }
            #sidebarCollapse span {
                display: none;
            }
        }

        .loading-overlay {
            display: none;
            background: rgba(255, 255, 255, 0.7);
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            top: 0;
            z-index: 9998;
            align-items: center;
            justify-content: center;
          }

          .loading-overlay.is-active {
            display: flex;
          }

          @media only screen and (min-width: 480px) { 
            .mobilemenu {display: block;}
          }

          @media only screen and (min-width: 1024px) {
            .mobilemenu {
                display: none;
            }
        }
    </style>
    <div class="row">
        <div class="col-md-12">
            <nav id="menuzord mobilemenu" class="menuzord blue mobilemenu pl-0 ml-0 w-3" style="width: 100px;">
                <ul class="menuzord-menu" style="background-color: #4f93ce;">
                    <li class="{{$about_us ? 'active': ''}}" style="margin-bottom: 10px; background-color:#4f93ce">
                        <a style="font-size: 16px; color:#fff" href="" wire:click.prevent="loadAboutUs">About Us</a>
                    </li>
                    <li class="{{$history ? 'active': ''}}" style="margin-bottom: 10px;background-color:#4f93ce">
                        <a style="font-size: 16px; color:#fff" href="#" wire:click.prevent="loadHistory">History - Milestones</a>
                    </li>
                    <li><a class="{{Request::is('about-us') ? 'menuactive' : 'none;' }}" href="{{url('/about-us')}}">About Us</a></li>
                    <li><a class="{{Request::is('covid-19') ? 'menuactive' : 'none;' }}" href="{{url('covid-19')}}">Covid 19</a></li>
                    <li><a class="{{Request::is('careers') ? 'menuactive' : 'none;' }}" href="{{url('careers')}}">Careers</a></li>
                    <li><a class="{{Request::is('contact-us') ? 'menuactive' : 'none;' }}" href="{{url('contact-us')}}">Contacts</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <!-- Sidebar  -->
            <nav id="sidebar" >
                <ul class="list-unstyled components">
                    <li class="{{$about_us ? 'active': ''}}" style="margin-bottom: 10px; background-color:#4f93ce">
                        <a style="font-size: 16px; color:#fff" href="" wire:click.prevent="loadAboutUs">About Us</a>
                    </li>
                    <li class="{{$history ? 'active': ''}}" style="margin-bottom: 10px;background-color:#4f93ce">
                        <a style="font-size: 16px; color:#fff" href="#" wire:click.prevent="loadHistory">History - Milestones</a>
                    </li>
                    <li style="margin-bottom: 10px; background-color:#4f93ce ">
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="color:#fff">Leadership</a>
                        <ul class="collapse {{$doners || $board || $management || $org? 'show': ''}} list-unstyled" id="pageSubmenu">
                            <li class="{{$board ? 'active': ''}}" style="margin-bottom: 10px; background-color:#4f93ce">
                                <a href="#" style="color:#fff" wire:click.prevent="loadBoard">Board and Goverance</a>
                            </li>
                            <li class="{{$management ? 'active': ''}}" style="margin-bottom: 10px; background-color:#4f93ce">
                                <a href="#" style="color:#fff" wire:click.prevent="loadManagement">Management Team</a>
                            </li>
                            <li class="{{$org ? 'active': ''}}" style="margin-bottom: 10px; background-color:#4f93ce">
                                <a href="#" style="color:#fff" wire:click.prevent="loadOrg">Organization Structure</a>
                            </li>
                        </ul>
                    </li>
                    <li class="{{$partners ? 'active': ''}}" style="margin-bottom: 10px; background-color:#4f93ce"">
                        <a style="font-size: 16px; color:#fff" href="#" wire:click.prevent="loadPartners">Partners</a>
                    </li>
                    <li class="{{$financial ? 'active': ''}}" style="margin-bottom: 10px; background-color:#4f93ce"">
                        <a style="font-size: 16px; color:#fff" href="#" wire:click.prevent="loadFinancial">Financial Highlights</a>
                    </li>

                </ul>
            </nav>
        </div>
    </div>
    

    <!-- Page Content  -->
    <div class="loading-overlay" wire:loading.class="is-active">
        <span class="fa fa-spinner fa-3x fa-spin"></span>
    </div>

        @if($about_us)
        <div id="content" style="padding: 20px; padding-left:40px;padding-right:40px">
            <livewire:client.bds.about-us />
        </div>
        @endif
        @if($history)
        <div id="content">
            <livewire:client.bds.history />
        </div>
        @endif
        @if($board)
        <div id="content" style="margin-top: 20px;">
            <livewire:client.bds.board />
        </div>
        @endif

        @if($org)
        <div id="content" style="margin-top: 20px;">
            <livewire:client.bds.org />
        </div>
        @endif
        @if($management)
        <div id="content" style="margin-top: 20px;">
            <livewire:client.bds.management />
        </div>
        @endif
        @if($partners)
        <div id="content" style="margin-top: 20px;">
            <livewire:client.bds.partners />
        </div>
        @endif
        @if($financial)
        <div id="content" style="margin-top: 20px;">
            <livewire:client.bds.financial />
        </div>
        @endif
        <script src="https://cdn.jsdelivr.net/scrollreveal.js/3.3.1/scrollreveal.min.js"></script>
</div>
