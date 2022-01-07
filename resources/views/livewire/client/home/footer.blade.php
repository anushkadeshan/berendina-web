<div>
    <footer id="footer" class="footer bg-black-222">
        <div class="container pt-70 pb-40">
            <div class="row border-bottom-black">
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <img class="mt-10 mb-20" alt="" src="images/logo.jpg">
                        <p>44/3, 3rd floor, Narahenpita Road, Nawala, Sri Lanka</p>
                        <ul class="list-inline mt-5">
                            <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a
                                    class="text-gray" href="#">+94 11 4380830</a> </li>
                            <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a
                                    class="text-gray" href="#">info@berendina.org</a> </li>
                            <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored mr-5"></i> <a
                                    class="text-gray" href="#">www.berendina.org</a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <h5 class="widget-title line-bottom">Latest News</h5>
                        <div class="latest-posts">
                            @foreach($latest_news as $n)
                                <article class="post media-post clearfix pb-0 mb-10">
                                    <a href="#" class="post-thumb"><img alt="" src="{{URL::asset('storage/photos/news/thumb_small/'.$n->image)}}"></a>
                                    <div class="post-right">
                                        <h5 class="post-title mt-0 mb-5"><a href="{{route('home.news_single', [$n->id,$n->title])}}">
                                            @switch(session('locale'))
                                            @case('ta')
                                                {{$n['ta_title']}}
                                            @break
                                            @case('si')
                                                {{$n['si_title']}}
                                            @break
                                            @default
                                                {{$n['title']}}
                                        @endswitch</a></h5>
                                        <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <h5 class="widget-title line-bottom">Useful Links</h5>
                        <ul class="list angle-double-right list-border">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">BDS</a></li>
                            <li><a href="#">BMIC</a></li>
                            <li><a href="#">Conatct Us</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <h6 class="widget-title line-bottom">Quick Contact</h6>
                        <form id="quick_contact_form2" name="footer_quick_contact_form" class="quick-contact-form" action="includes/quickcontact.php" method="post" novalidate="novalidate">
                          <div class="form-group">
                            <input id="form_email" name="form_email" class="form-control" type="text" required="" placeholder="Enter Email" aria-required="true">
                          </div>
                          <div class="form-group">
                            <textarea id="form_message" name="form_message" class="form-control" required="" placeholder="Enter Message" rows="3" aria-required="true"></textarea>
                          </div>
                          <div class="form-group">
                            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                            <button type="submit" class="btn btn-default btn-flat btn-xs btn-transparent text-gray pt-5 pb-5" data-loading-text="Please wait...">Send Message</button>
                          </div>
                        </form>

                        <!-- Quick Contact Form Validation-->
                        <script type="text/javascript">
                          $("#quick_contact_form2").validate({
                            submitHandler: function(form) {
                              var form_btn = $(form).find('button[type="submit"]');
                              var form_result_div = '#form-result';
                              $(form_result_div).remove();
                              form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                              var form_btn_old_msg = form_btn.html();
                              form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                              $(form).ajaxSubmit({
                                dataType:  'json',
                                success: function(data) {
                                  if( data.status == 'true' ) {
                                    $(form).find('.form-control').val('');
                                  }
                                  form_btn.prop('disabled', false).html(form_btn_old_msg);
                                  $(form_result_div).html(data.message).fadeIn('slow');
                                  setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                                }
                              });
                            }
                          });
                        </script>
                      </div>
                </div>
            </div>

        </div>
        <div class="footer-bottom bg-black-333">
            <div class="container pt-20 pb-20">
                <div class="row">
                    <div class="col-md-6">
                        <p class="font-11 text-black-777 m-0">Copyright &copy;{{now()->year}} Berendina. All Rights Reserved
                        </p>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="widget no-border m-0">
                            <ul class="social-icons icon-circled icon-sm">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
