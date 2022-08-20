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
                            @foreach($topBrowsers as $tb)
                                <tr>
                                    <td>{{$tb['browser']}}</td>
                                    <td>{{$tb['sessions']}}</td>
                                </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
