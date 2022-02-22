<div>
    <div class="icon-box mb-40 p-0">
        <a href="#" class="icon icon-gray pull-left mb-0 mr-10">
            <i class="pe-7s-users"></i>
        </a>
        <h3 class="icon-box-title pt-15 mt-0 mb-40">
            @switch(session('locale'))
            @case('ta')
            {{$career->ta_title}}
            @break
            @case('si')
            {{$career->si_title}}
            @break
            @default
            {{$career->title}}
            @endswitch
        </h3>
        <h5>@lang('msg.Closing Date') :
            @if(date('Y-m-d')> $career->closing_date)
            <span class="badge badge-success">{{$career->closing_date}}</span>
            @else
            <span class="badge badge-danger">{{$career->closing_date}}</span>
            @endif
        </h5>
        <hr>
        <p class="text-gray">
            @switch(session('locale'))
            @case('ta')
            @php
            $text = strip_tags($career->ta_job_description);
            $text2 = str_replace('&nbsp;', ' ', $text);
            @endphp
            {{ $text2 }}
            @break
            @case('si')
            @php
            $text = strip_tags($career->si_job_description);
            $text2 = str_replace('&nbsp;', ' ', $text);
            @endphp
            {{ $text2 }}
            @break
            @default
            @php
            $text = strip_tags($career->job_description);
            $text2 = str_replace('&nbsp;', ' ', $text);
            @endphp
            {{ $text2}}
            @endswitch
        </p>
        <a class="btn btn-primary btn-sm mt-15" data-toggle="modal" data-target="#myModal">@lang('msg.Click to Apply')</a>
    </div>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">@lang('msg.Fill required fields and apply job')</h4>
                </div>
                <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="form_name">@lang('msg.Full Name') <small>*</small></label>
                                    <input id="form_name" name="form_name" type="text" wire:model.defer="name" placeholder="Enter Name"
                                        required="" class="form-control">
                                </div>
                                @error('name') <span class="error text-danger">*{{ $message }}</span> @enderror
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="form_sex">@lang('msg.Sex') <small>*</small></label>
                                    <select id="form_sex" name="form_sex" wire:model.defer="sex" class="form-control required">
                                        <option value="">Select Option</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                @error('sex') <span class="error text-danger">*{{ $message }}</span> @enderror
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="form_email">@lang('msg.Email') <small>*</small></label>
                                    <input id="form_email" name="form_email"  wire:model.defer="email" class="form-control required email"
                                        type="email" placeholder="Enter Email">
                                </div>
                                @error('email') <span class="error text-danger">*{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="form_message">@lang('msg.Message') <small>*</small></label>
                            <textarea id="form_message" name="form_message" wire:model.defer="message" class="form-control required" rows="5"
                                placeholder="Your cover letter/message sent to the employer"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="form_attachment">@lang('msg.C/V Upload')</label>
                            <input id="form_attachment" name="form_attachment" wire:model.defer="cv" class="file" type="file"
                                data-show-upload="false" data-show-caption="true">
                            <small>@lang('msg.Maximum upload file size: 12 MB')</small>
                        </div>
                        @error('cv') <span class="error text-danger">*{{ $message }}</span> @enderror

                </div>
                <div class="modal-footer">
                    @if (session()->has('message'))
                    <div class="alert alert-success dark mt-4" role="alert" x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">
                        <p>{{ session('message') }}</p>
                        </div>
                    @endif
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-dark btn-flat  btn-theme-colored" wire:click.prevent="save">@lang('msg.Apply')</button>
                </div>
            </div>
        </div>
    </div>
</div>
