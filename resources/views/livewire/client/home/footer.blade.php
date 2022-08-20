<div>
    <footer id="footer" class="footer text-white" style="background-color:#004C97;">
        <div class="container pt-70 pb-40">
            <div class="row border-bottom-black">
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <img class="mt-10 mb-20" alt="" src="images/logo.jpg">
                        <p>44/3, 3rd floor, Narahenpita Road, Nawala, Sri Lanka</p>
                        <p>Office Hours: 8.30AM-5.00PM</p>
                        <ul class="list-inline mt-5">
                            <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a
                                    class="text-white" href="#">+94 11 4380830</a> </li>
                            <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a
                                    class="text-white" href="#">info@berendina.org</a> </li>
                            <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored mr-5"></i> <a
                                    class="text-white" href="#">www.berendina.org</a> </li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <h5 class="widget-title line-bottom">@lang('msg.Latest News')</h5>
                        <div class="latest-posts">
                            @foreach($latest_news as $n)
                                <article class="post media-post clearfix pb-0 mb-10">
                                    <a href="#" class="post-thumb"><img alt="" class="img img-responsive" src="{{URL::asset('storage/photos/news/thumb_small/'.$n->image)}}"></a>
                                    <div class="post-right">
                                        <h5 class="post-title mt-0 mb-5 text-white"><a href="{{route('home.news_single', [$n->id,$n->title])}}">
                                            @switch(session('locale'))
                                            @case('ta')
                                                {{ Str::limit($n['ta_title'], 25) }}
                                            @break
                                            @case('si')
                                                {{ Str::limit($n['si_title'], 25) }}
                                            @break
                                            @default
                                                {{ Str::limit($n['title'], 25) }}
                                        @endswitch</a></h5>
                                        <p class="post-date mb-0 font-12">{{$n['updated_at']->diffForHumans()}}</p>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <h5 class="widget-title line-bottom">@lang('msg.Useful Links')</h5>
                        <ul class="list angle-double-right list-border">
                            <li><a class="text-white" href="#">About Us</a></li>
                            <li><a class="text-white" href="#">BDS</a></li>
                            <li><a class="text-white" href="#">BMIC</a></li>
                            <li><a class="text-white" href="#">Conatct Us</a></li>
                            <li><a class="text-white" href="#">Careers</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <h6 class="widget-title line-bottom">@lang('msg.Quick Contact')</h6>
                        <form method="post" novalidate="novalidate">
                          <div class="form-group">
                            <input id="form_email"  wire:model='name' name="form_email" class="form-control bg-white text-gray" type="text" placeholder="Enter Your Name" aria-required="true">
                            @error('name') <span class="error">{{ $message }}</span> @enderror
                          </div>
                          <div class="form-group">
                            <input id="form_email"  wire:model='phone' name="form_email" class="form-control bg-white text-gray" type="text"  placeholder="Enter Your Phone" aria-required="true">
                            @error('phone') <span class="error">{{ $message }}</span> @enderror
                          </div>
                          <div class="form-group">
                            <textarea id="form_message" wire:model='message' name="form_message" class="form-control bg-white text-gray" required="" placeholder="Enter Message" rows="3" aria-required="true"></textarea>
                            @error('message') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                          <div class="form-group">
                            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                            <button type="button" wire:click='save' class="btn btn-default btn-flat btn-xs pt-5 pb-5" data-loading-text="Please wait...">
                                <div wire:loading wire:target="save">
                                    Please wait...
                                </div>
                                <div wire:loading.remove wire:target="save">
                                    Send Message
                                </div>
                                
                            </button>
                          </div>
                        </form>
                      </div>
                </div>
            </div>

        </div>
        <div class="footer-bottom bg-theme-colored">
            <div class="container pt-10 pb-10">
                <div class="row">
                    <div class="col-md-6">
                        <p class="font-11 text-black-777 m-15">Copyright &copy;{{now()->year}} Berendina. All Rights Reserved
                        </p>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="widget no-border m-0">
                            <ul class="social-icons icon-circled icon-gray">
                                <li><a target="_blank" href="https://www.facebook.com/berendina.org"><i class="fa fa-facebook fa-lg text-theme-colored"></i></a></li>
                                <li><a target="_blank" href="https://twitter.com/GroupBerendina"><i class="fa fa-twitter fa-lg text-theme-colored"></i></a></li>
                                <li><a target="_blank" href="https://www.youtube.com/c/BerendinaGroup"><i class="fa fa-youtube fa-lg text-theme-colored"></i></a></li>
                                <li><a target="_blank" href="https://www.linkedin.com/company/berendina-group/"><i class="fa fa-linkedin fa-lg text-theme-colored"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
