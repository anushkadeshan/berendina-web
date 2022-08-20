<div>
    <div class="card">
        <div class="card-header card-no-border">
            <h5>Top Referrers</h5>
        </div>
        <div class="card-body pt-0">
            <div class="our-product">
                <div class="table-responsive">
                    <table class="table table-bordernone">
                        <tbody class="f-w-500">
                            @foreach($topReferrers as $tr)
                                <tr>
                                    <td>{{$tr['url']}}</td>
                                    <td>{{$tr['pageViews']}}</td>
                                </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
