<div>
    <div class="flex justify-between mb-2">
        <div></div>
        <div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
            <button class="btn {{ $period==7 ? 'btn-success' : 'btn-outline-success' }} " wire:click="changePeriod(7)" type="button" data-bs-original-title="" title="">7 Days</button>
            <button class="btn {{ $period==14 ? 'btn-success' : 'btn-outline-success' }}" wire:click="changePeriod(14)" type="button" data-bs-original-title="" title="">14 Days</button>
            <button class="btn {{ $period==30 ? 'btn-success' : 'btn-outline-success' }}" wire:click="changePeriod(30)" type="button" data-bs-original-title="" title="">1 Month</button>
        </div>
    </div>
    <div class="card">
        <div class="card-header p-3">
            <div class="flex justify-between">
                <h5>Page Views and Visitors</h5>
                <div>
                
                </div>
            </div>
           
            
        </div>
        <div class="card-body p-3">
            <div id="area-spaline" wire:ignore></div>
        </div>
    </div>
    @push('js')
        <script>
            // area spaline chart
            var options1 = {
                chart: {
                    height: 350,
                    type: 'area',
                    toolbar:{
                    show: false
                    }
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth'
                },
                series: [{
                    name: 'Visitors',
                    data: @json($visitors),
                }, {
                    name: 'Page Views',
                    data: @json($pageViews),
                }],

                xaxis: {
                    type: 'date',
                    categories: @json($dates)
                },
                tooltip: {
                    x: {
                        format: 'dd/MM/yy HH:mm'
                    },
                },
                colors:[ CubaAdminConfig.primary , CubaAdminConfig.secondary ]
            }

            var chart1 = new ApexCharts(
                document.querySelector("#area-spaline"),
                options1
            );

            chart1.render();
        </script>
    @endpush
</div>
