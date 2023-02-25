<div class="mt-20 ml-10 mr-10">
    <div class="row">
        <div class="col-md-4">
            <div style="height: 32rem;">
                <livewire:livewire-pie-chart key="{{ $pieChartModel->reactiveKey() }}"
                    :pie-chart-model="$pieChartModel" />
            </div>
        </div>
        <div class="col-md-4">
            <div style="height: 32rem;">
                <livewire:livewire-pie-chart key="{{ $pieChartModel2019->reactiveKey() }}"
                    :pie-chart-model="$pieChartModel2019" />
            </div>
        </div>
        <div class="col-md-4">
            <div style="height: 32rem;">
                <livewire:livewire-pie-chart key="{{ $pieChartModel2018->reactiveKey() }}"
                    :pie-chart-model="$pieChartModel2018" />
            </div>
        </div>
    </div>

    Need Expediture Analysis
</div>

@push('scripts')

@endpush
