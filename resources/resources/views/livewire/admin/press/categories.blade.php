<div>
    <div class="table-responsive">
        <table class="display" id="basic-1">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach($categories as $cat)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$cat->name}}</td>
                    <td>{{$cat->created_at}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
