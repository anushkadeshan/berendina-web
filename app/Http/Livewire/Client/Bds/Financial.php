<?php

namespace App\Http\Livewire\Client\Bds;

use Asantibanez\LivewireCharts\Models\PieChartModel;
use Livewire\Component;

class Financial extends Component
{
    public function render()
    {
        $pieChartModel2020 =
    (new PieChartModel())
        ->setTitle('2020 – LKR')
        ->setAnimated(true)
        ->withDataLabels(true)
        ->addSlice('Grant Income', 110386132, '#FFEC21')
        ->addSlice('Interest income on loans', 113298614, '#378AFF')
        ->addSlice('Interest income on investment', 46125588, '#FFA32F')
        ->addSlice('Other income', 123592, '#F54F52')
        ->setOpacity(20);

        $pieChartModel2019 =
        (new PieChartModel())
            ->setTitle('2019 – LKR')
            ->setAnimated(true)
            ->withDataLabels(true)
            ->addSlice('Grant Income', 180993253, '#FFEC21')
            ->addSlice('Interest income on loans', 106196702, '#378AFF')
            ->addSlice('Interest income on investment', 8393583, '#FFA32F')
            ->addSlice('Other income', 116341845, '#F54F52')
            ->setOpacity(20);

        $pieChartModel2018 =
        (new PieChartModel())
            ->setTitle('2018 – LKR')
            ->setAnimated(true)
            ->withDataLabels(false)
            ->addSlice('Grant Income', 132584609, '#FFEC21')
            ->addSlice('Interest income on loans', 100318129, '#378AFF')
            ->addSlice('Interest income on investment', 6141075, '#FFA32F')
            ->addSlice('Other income', 112861865, '#F54F52')
            ->setOpacity(20);

        return view('livewire.client.bds.financial')->with(['pieChartModel' => $pieChartModel2020, 'pieChartModel2019' => $pieChartModel2019, 'pieChartModel2018' => $pieChartModel2018]);
    }
}
