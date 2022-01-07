<div class="boxed-layout">
    <style>
        .bmicmenu {
            background-color: black;
            color: white !important;
            font-weight: bold;
          }
    </style>
    <div id="wrapper" class="clearfix">
        <header id="header" style="padding-bottom: 40px;" class="header">
            <div class="header-nav">
                <div class="header-nav-wrapper navbar-scrolltofixed bg-light">
                    <div class="container">
                        <nav id="menuzord" class="menuzord default bg-light">
                            <ul class="menuzord-menu onepage-nav ">
                                <li><a class="{{ $milestone == true ? 'bmicmenu' : '' }}" href="" wire:click.prevent="milestone">{{__('msg.History and Milestones')}}</a></li>
                                <li><a class="{{ $vision == true ? 'bmicmenu' : '' }}" href="" wire:click.prevent="vision">{{__('msg.Vision and Mission')}}</a></li>
                                <li><a class="{{ $values == true ? 'bmicmenu' : '' }}" href="" wire:click.prevent="values">{{__('msg.BMIC’s Culture – Uniqueness')}}</a></li>
                                <li><a class="{{ $shareholders == true ? 'bmicmenu' : '' }}" href="" wire:click.prevent="shareholders">{{__('msg.Shareholders')}}</a></li>
                                <li><a class="{{ $board == true ? 'bmicmenu' : '' }}" href="" wire:click.prevent="board">{{__('msg.Board of Governance')}}</a></li>
                                <li><a class="{{ $services  == true ? 'bmicmenu' : '' }}" href="" wire:click.prevent="services">{{__('msg.Our Services')}}</a></li>
                            </ul>

                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <!-- Start main-content -->
        <div class="main-content" style="padding-bottom: 40px;">
            <section id="home">
                @if($milestone)
                <livewire:client.bmic.timeline />
                @endif

                @if($vision)
                <livewire:client.bmic.vision />
                @endif

                @if($values)
                <livewire:client.bmic.values />
                @endif

                @if($shareholders)
                <livewire:client.bmic.shareholders />
                @endif

                @if($board)
                <livewire:client.bmic.board />
                @endif

                @if($services)
                <livewire:client.bmic.services />
                @endif
            </section>
        </div>
    </div>
</div>
