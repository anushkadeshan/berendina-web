<div>
    <div class="container">
        <div class="row pt-30">
            <div class="col-md-6">
                <h3 class="line-bottom mt-0 mb-30">@lang('msg.Interested in discussing?')</h3>

                <!-- Contact Form -->
                <form id="contact_form" name="contact_form" class="" wire:submit.prevent="submit" method="post">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Name <small>*</small></label>
                                <input name="form_name" class="form-control" type="text" placeholder="Enter Name" wire:model='name'
                                    >
                                    @error('name') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email <small>*</small></label>
                                <input name="form_email" class="form-control required email" type="email" wire:model='email'
                                    placeholder="Enter Email">
                                    @error('email') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Subject <small>*</small></label>
                                <input name="form_subject" class="form-control required" type="text" wire:model='subject'
                                    placeholder="Enter Subject">
                                    @error('subject') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Phone</label>
                                <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone" wire:model='phone'>
                                @error('phone') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Message</label>
                        <textarea name="form_message" class="form-control required" rows="5" wire:model='message'
                            placeholder="Enter Message"></textarea>
                            @error('message') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="form-group">
                        @csrf
                        <input name="form_botcheck" class="form-control" type="hidden" value="" />
                        <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5"
                            data-loading-text="Please wait...">Send your message</button>
                        <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <h3 class="line-bottom mt-0">Get in touch with us</h3>
                <p>
                    Head Office<br>
                    Berendina Development Services (Gte) Limited. <br>
                    Berendina Micro Investments Company Limited.
                </p>
                <ul class="styled-icons icon-dark icon-sm icon-circled mb-20">
                    <li><a href="https://www.facebook.com/berendina.org" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/GroupBerendina" data-bg-color="#02B0E8"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/berendina-group/" data-bg-color="#0e76a8"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://www.youtube.com/c/BerendinaGroup" data-bg-color="#D71619"><i class="fa fa-youtube"></i></a></li>
                </ul>
                <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-20" href="#"> <i
                            class="pe-7s-map-2 text-theme-colored"></i></a>
                    <div class="media-body">
                        <h5 class="mt-0">Our Office Location</h5>
                        <p>44/3, 3rd floor, Narahenpita Road, Nawala, Sri Lanka</p>
                    </div>
                </div>
                <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-15" href="#"> <i
                            class="pe-7s-call text-theme-colored"></i></a>
                    <div class="media-body">
                        <h5 class="mt-0">Contact Number</h5>
                        <p><a href="tel:+94114380830">+94 11 4380830</a></p>
                    </div>
                </div>
                <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-15" href="#"> <i
                            class="pe-7s-mail text-theme-colored"></i></a>
                    <div class="media-body">
                        <h5 class="mt-0">Email Address</h5>
                        <p><a href="mailto:supporte@yourdomin.com">info@berendina.org</a></p>
                    </div>
                </div>
                <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-15" href="#"> <i
                            class="pe-7s-alarm text-theme-colored"></i></a>
                    <div class="media-body">
                        <h5 class="mt-0">Office Hours</h5>
                        <p><a href="mailto:supporte@yourdomin.com">8.30AM - 5.00PM</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
