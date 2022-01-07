<div class="wrapper">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/orgchart/3.1.1/css/jquery.orgchart.min.css" integrity="sha512-bCaZ8dJsDR+slK3QXmhjnPDREpFaClf3mihutFGH+RxkAcquLyd9iwewxWQuWuP5rumVRl7iGbSDuiTvjH1kLw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .navbar {
            padding: 15px 10px;
            background: #fff;
            border: none;
            border-radius: 0;
            margin-bottom: 40px;
            box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }

        .navbar-btn {
            box-shadow: none;
            outline: none !important;
            border: none;
        }

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
            background: #222222;
            color: #fff;
            transition: all 0.3s;
        }

        #sidebar.active {
            margin-left: -250px;
        }

        #sidebar .sidebar-header {
            padding: 20px;
            background: #2b2b2b;
        }

        #sidebar ul.components {
            padding: 20px 0;
        }

        #sidebar ul p {
            color: #fff;
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
            background: #fff;
        }

        #sidebar ul li.active>a,
        a[aria-expanded="true"] {
            color: #fff;
            background: #999797;
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
            background: #2b2b2b;
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
            color: #2b2b2b;
        }

        a.article,
        a.article:hover {
            background: #2b2b2b !important;
            color: #fff !important;
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
    </style>
    <!-- Sidebar  -->
    <nav id="sidebar">
        <ul class="list-unstyled components">
            <li class="{{$about_us ? 'active': ''}}" style="margin-bottom: 10px; background-color:#2b2b2b">
                <a style="font-size: 16px" href="" wire:click.prevent="loadAboutUs">About Us</a>
            </li>
            <li class="{{$history ? 'active': ''}}" style="margin-bottom: 10px;background-color:#2b2b2b">
                <a style="font-size: 16px" href="#" wire:click.prevent="loadHistory">History - Milestones</a>
            </li>
            <li style="margin-bottom: 10px; background-color:#2b2b2b ">
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Leadership</a>
                <ul class="collapse {{$doners || $board || $management || $org? 'show': ''}} list-unstyled" id="pageSubmenu">
                    <li class="{{$board ? 'active': ''}}" style="margin-bottom: 10px; background-color:#2b2b2b">
                        <a href="#" wire:click.prevent="loadBoard">Board and Goverance</a>
                    </li>
                    <li class="{{$org ? 'active': ''}}" style="margin-bottom: 10px; background-color:#2b2b2b">
                        <a href="#" wire:click.prevent="loadOrg">Organization Structure</a>
                    </li>
                </ul>
            </li>
            <li class="{{$partners ? 'active': ''}}" style="margin-bottom: 10px; background-color:#2b2b2b"">
                <a style="font-size: 16px" href="#" wire:click.prevent="loadPartners">Partners</a>
            </li>
            <li class="{{$financial ? 'active': ''}}" style="margin-bottom: 10px; background-color:#2b2b2b"">
                <a style="font-size: 16px" href="#" wire:click.prevent="loadFinancial">Financial Highlights</a>
            </li>

        </ul>
    </nav>

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
