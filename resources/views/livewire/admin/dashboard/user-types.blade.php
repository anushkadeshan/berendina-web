<div>
    <div class="card">
        <div class="card-header">
            <h5>User Types </h5>
        </div>
        <div class="card-body apex-chart p-0">
            <div id="piechart"></div>
        </div>
    </div>
    @push('js')
    <script>
        // pie chart
        var options8 = {
            chart: {
                width: 500,
                type: 'pie',
            },
            labels: ['New Visitors', 'Returning Visitors'],
            series: [{{$new}}, {{$req}}],
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 400
                    },
                    legend: {
                        position: 'top'
                    }
                }
            }],
            colors:[ CubaAdminConfig.primary , CubaAdminConfig.secondary]
        }

        var chart8 = new ApexCharts(
            document.querySelector("#piechart"),
            options8
        );

        chart8.render();
    </script>
    @endpush
</div>
