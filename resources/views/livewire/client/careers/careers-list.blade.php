<div>
    <section>
        <div class="container pt-0">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-line-bottom mt-0 mb-30">
                        <h4 class="heading-title">{{__('msg.Recent Jobs')}} </h4>
                    </div>
                    @foreach($careers as $career)
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
                                    {{ Str::limit($text2, 350) }}
                                @break
                                @case('si')
                                    @php
                                        $text = strip_tags($career->si_job_description);
                                        $text2 = str_replace('&nbsp;', ' ', $text);
                                    @endphp
                                    {{ Str::limit($text2, 350) }}
                                @break
                                @default
                                    @php
                                        $text = strip_tags($career->job_description);
                                        $text2 = str_replace('&nbsp;', ' ', $text);
                                    @endphp
                                    {{ Str::limit($text2, 350) }}
                            @endswitch
                        </p>
                        <a class="btn btn-dark btn-sm mt-15" href="{{ route('careers.view', [$career->id,$career->title]) }}">@lang('msg.See More and Apply')</a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>
