<div>
    <div class="card">
        <div class="card-header p-3">
            <div class="flex justify-between">
                <h5>Most Visited Pages</h5>
            </div>
           
            
        </div>
        <div class="card-body p-3">
            <div class="table-responsive">
                <table class="display dataTable" id="basic-3">
                    @php
                    $no =1
                    @endphp
                    <thead>
                        <tr>
                            <th>#</th>                            
                            <th>Page Title</th>
                            <th>URL</th>
                            <th>Page Views</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mostVisitedPages as $mvp)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$mvp['pageTitle']}}</td>
                            <td>{{$mvp['url']}}</td>
                            <td>{{$mvp['pageViews']}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
