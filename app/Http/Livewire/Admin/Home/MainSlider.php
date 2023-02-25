<?php

namespace App\Http\Livewire\Admin\Home;

use App\Models\admin\Slider;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class MainSlider extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    public $i = 0;

    public $inputs = [];

    public $sliders = [];

    public $step1 = true;

    public $step2 = false;

    public $step3 = false;

    public $layerAdded = true;

    public $slider;

    public $edit = false;

    public $title;

    public $image;

    public $parallax_value = 10;

    public $data_index;

    public $en_title;

    public $si_title;

    public $ta_title;

    public $data_y;

    public $data_x;

    public $data_v_offset;

    public $data_h_offset;

    public $text_upper_case;

    public $bg_color;

    public $text_color;

    public $text_align;

    public $fontsize;

    public $start_delay;

    public $line_height;

    public $slider_id;

    public $button_title;

    public $button_si_title;

    public $button_ta_title;

    public $button_link;

    public $button_data_y;

    public $button_data_x;

    public $button_data_v_offset;

    public $button_data_h_offset;

    public $button_text_upper_case;

    public $button_bg_color;

    public $button_text_color;

    public $button_start_delay;

    public $button_shape;

    public function mount()
    {
        $this->sliders = Slider::with('layers', 'button')->get();
    }

    public function AlertDisplay($type = 'info', $toast = false, $message = '', $position = 'center')
    {
        $this->alert($type, $message, [
            'position' => $position,
            'toast' => $toast,
        ]);
    }

    public function openModal()
    {
        $this->dispatchBrowserEvent('openModel');
    }

    public function closeModal()
    {
        $this->dispatchBrowserEvent('closeModel');
    }

    public function edit($id)
    {
        if ($id != '') {
            $this->edit = true;
            Slider::with('layers', 'button')->find($id);

        }
        $this->openModal();
    }

    public function stepOne()
    {
        $this->validate([
            'title' => 'required',
            'parallax_value' => 'required',
            'image' => 'required|image',
            'data_index' => 'required',
        ]);

        $slider_name = $this->image->storePublicly('photos/sliders', 'public');

        $slider = Slider::create([
            'title' => $this->title,
            'parallax_value' => $this->parallax_value,
            'image' => $slider_name,
            'data_index' => $this->data_index,
        ]);

        $this->slider_id = $slider->id;
        $this->slider = $slider;

        $this->step1 = false;
        $this->step2 = true;
    }

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs, $i);
    }

    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    public function stepTwo()
    {
        $this->validate([
            'title' => 'required',
            'si_title' => 'required',
            'ta_title' => 'required',
            'data_y' => 'required',
            'data_x' => 'required',
            'data_v_offset' => 'required',
            'data_h_offset' => 'required',
            'line_height' => 'required',
            'slider_id' => 'required',
        ]);
        dd($this->en_title);
        if (!is_null($this->en_title)) {
            //dd($this->slider->layers());
            foreach ($this->en_title as $key => $value) {
                $this->slider->layers()->create([
                    'title' => isset($this->en_title[$key]) ? $this->en_title[$key] : null,
                    'si_title' => isset($this->si_title[$key]) ? $this->si_title[$key] : null,
                    'ta_title' => isset($this->ta_title[$key]) ? $this->ta_title[$key] : null,
                    'data_y' => isset($this->data_y[$key]) ? $this->data_y[$key] : null,
                    'data_x' => isset($this->data_x[$key]) ? $this->data_x[$key] : null,
                    'data_v_offset' => isset($this->data_v_offset[$key]) ? $this->data_v_offset[$key] : null,
                    'data_h_offset' => isset($this->data_h_offset[$key]) ? $this->data_h_offset[$key] : null,
                    'text_upper_case' => isset($this->text_upper_case[$key]) ? $this->text_upper_case[$key] : null,
                    'bg_color' => isset($this->bg_color[$key]) ? $this->bg_color[$key] : null,
                    'text_color' => isset($this->text_color[$key]) ? $this->text_color[$key] : null,
                    'text_align' => isset($this->text_align[$key]) ? $this->text_align[$key] : null,
                    'fontsize' => isset($this->fontsize[$key]) ? $this->fontsize[$key] : null,
                    'start_delay' => isset($this->start_delay[$key]) ? $this->start_delay[$key] : null,
                    'line_height' => isset($this->line_height[$key]) ? $this->line_height[$key] : null,
                ]);
            }
        }

        //$this->step1 = false;
        //$this->step2 = false;
        //$this->step3 = true;
    }

    public function stepThree()
    {
        $this->validate([
            'button_title' => 'required',
            'button_si_title' => 'required',
            'button_ta_title' => 'required',
            'button_link' => 'required',
            'data_y' => 'required',
            'data_x' => 'required',
            'data_v_offset' => 'required',
            'data_h_offset' => 'required',
            'text_upper_case' => 'required',
            'bg_color' => 'required',
            'text_color' => 'required',
            'start_delay' => 'required',
        ]);

        try{
            $this->slider->button()->create([
                'button_title' => $this->button_title,
                'button_si_title' => $this->button_si_title,
                'button_ta_title' => $this->button_ta_title,
                'button_link' => $this->button_link,
                'data_y' => $this->button_data_y,
                'data_x' => $this->button_data_x,
                'data_v_offset' => $this->button_data_v_offset,
                'data_h_offset' => $this->button_data_h_offset,
                'text_upper_case' => $this->button_text_upper_case,
                'bg_color' => $this->button_bg_color,
                'text_color' => $this->button_text_color,
                'start_delay' => $this->button_start_delay,
                'button_shape' => $this->button_shape,
            ]);
        }
        catch(\Exception $e){
            $this->AlertDisplay('error', false, $e->getMessage(), 'center');
        }

    }

    public function render()
    {
        return view('livewire.admin.home.main-slider');
    }
}
