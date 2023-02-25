<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Slider <i class="fas fa-images    "></i></h5>
                        </div>
                        <div class="col-md-6 text-right">
                            <button class="px-4 py-2 bg-blue-600 hover:bg-blue-800 rounded text-white"
                                wire:click="edit('')">New</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div>
                        <div class="flex flex-col">
                            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="overflow-hidden">
                                        <table class="min-w-full ">
                                            <thead class="border-b bg-gray-800">
                                                <tr class="text-center">
                                                    <th scope="col" class="text-sm font-medium text-white px-4 py-2">
                                                        #
                                                    </th>
                                                    <th scope="col" class="text-sm font-medium text-white px-4 py-2">
                                                        Data Index
                                                    </th>
                                                    <th scope="col" class="text-sm font-medium text-white px-4 py-2">
                                                        Slider
                                                    </th>
                                                    <th scope="col" class="text-sm font-medium text-white px-4 py-2">
                                                        Parallax Value
                                                    </th>
                                                    <th scope="col" class="text-sm font-medium text-white px-4 py-2">
                                                        Layers
                                                    </th>
                                                    <th scope="col" class="text-sm font-medium text-white px-4 py-2">
                                                        Button
                                                    </th>
                                                    <th scope="col" class="text-sm font-medium text-white px-4 py-2">

                                                    </th>
                                                </tr>
                                            </thead class="border-b">
                                            <tbody>
                                                @foreach($sliders as $slider)
                                                <tr class="bg-whitparallax_valuee border-b">
                                                    <td
                                                        class="px-4 py-2 whitespace-nowrap text-sm font-medium text-black-900">
                                                        {{$loop->iteration}}
                                                    </td>
                                                    <td
                                                        class="text-sm text-gray-900 text-left  px-4 py-2 whitespace-nowrap">
                                                        {{$slider->data_index}}
                                                    </td>
                                                    <td class="text-sm text-gray-900  px-4 py-2 whitespace-nowrap">
                                                        {{$slider->title}}
                                                    </td>
                                                    <td class="text-sm text-gray-900  px-4 py-2 whitespace-nowrap">
                                                        {{$slider->parallax_value}}
                                                    </td>
                                                    <td class="text-sm text-gray-900  px-4 py-2 whitespace-nowrap">
                                                        @foreach($slider->layers as $layer)
                                                            <span>{{$layer->title}}</span>
                                                        @endforeach
                                                    </td>
                                                    <td class="text-sm text-gray-900  px-4 py-2 whitespace-nowrap">
                                                        @php
                                                        if(isset($slider->button->button_title)){
                                                            $slider->button->button_title;
                                                        }
                                                        @endphp
                                                    </td>
                                                    <td class="text-sm text-gray-900  px-4 py-2 whitespace-nowrap">
                                                        <div class="inline-flex rounded-md shadow-sm" role="group">
                                                            <button type="button" wire:click="edit({{$slider->id}})">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="w-6 h-6">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                                </svg>
                                                            </button>
                                                            <button wire:click="delete({{$slider->id}})">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="w-6 h-6">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" wire:ignore.self
                            id="exampleModalXl" tabindex="-1" aria-labelledby="exampleModalXlLabel" aria-modal="true"
                            role="dialog">
                            <div class="modal-dialog modal-xl relative w-auto pointer-events-none">
                                <div
                                    class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                    <div
                                        class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                        <h5 class="text-xl font-medium leading-normal text-gray-800"
                                            id="exampleModalXlLabel">
                                            {{$edit ? 'Edit Slider' : 'Add New Slider'}}
                                        </h5>
                                        <button type="button"
                                            class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body relative p-4">
                                        @if($step1)
                                        <div class="step1">
                                            <div class="grid grid-cols-3 gap-1">
                                                <div class="mb-1">
                                                    <label for="email"
                                                        class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Slide Name</label>
                                                    <input type="text" wire:model="title" id="email"
                                                        class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                    @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="mb-1">
                                                    <label for="email"
                                                        class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Parallax Value</label>
                                                    <input type="number" wire:model="parallax_value" id="email"
                                                        class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                    @error('parallax_value') <span class="text-danger">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="mb-1">
                                                    <label for="email"
                                                        class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Data Index</label>
                                                    <input type="number" wire:model="data_index" id="email"
                                                        class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                    @error('data_index') <span class="text-danger">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="mb-1">
                                                    <label for="email"
                                                        class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Slide Image</label>
                                                    <input type="file" wire:model="image" id="email"
                                                        class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                    @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @if($step2)
                                        <div class="step2">
                                            <div class="flex justify-between items-center">
                                                <h1 class="text-xl mb-2">Slider Layers</h1>
                                                <button wire:click.prevent="add({{$i}})" wire:loading.attr="disabled"
                                                    class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-blue-700 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-gray-600">
                                                    <i class="fa fa-plus-square"></i> Add Layer
                                                    <div wire:loading wire:target="add">
                                                        <i class="fa fa-cog fa-spin"></i>
                                                    </div>
                                                </button>
                                            </div>

                                            <div class="px-4 py-4 bg-gray-200 my-4">
                                                <div class="grid grid-cols-3 gap-1">
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Layer Title English</label>
                                                        <input type="text" wire:model="en_title.0" id="email" wire:ignore.self
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        @error('en_title') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Layer Title Sinhala</label>
                                                        <input type="text" wire:model="si_title.0" id="email"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        @error('si_title') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Layer Title Tamil</label>
                                                        <input type="text" wire:model="ta_title.0" id="email"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        @error('ta_title') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                </div>
                                                <div class="grid grid-cols-3 gap-1">
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Data BG Color</label>
                                                        <select wire:model="bg_color.0" id="email"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                            <option value="">No Color</option>
                                                            <option value="bg-theme-colored">Orange</option>
                                                            <option value="bg-theme-colored-transparent">Orange Transparent</option>
                                                            <option value="bg-dark-transparent">Dark Transparent</option>
                                                        </select>
                                                        @error('bg_color') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Data Start Delay(ms)</label>
                                                        <input type="text" wire:model="start_delay.0" id="email"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        @error('start_delay') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Data Line Height</label>
                                                        <input type="text" wire:model="line_height.0" id="email"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        @error('line_height.0') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                </div>
                                                <div class="grid grid-cols-4 gap-1">
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Data Y</label>
                                                        <select wire:model="data_y.0" id="email"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                            <option value="top">Top</option>
                                                            <option value="middle">Middle</option>
                                                            <option value="bottom">Bottom</option>
                                                        </select>
                                                        @error('data_y') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Data X</label>
                                                        <select wire:model="data_x.0"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                            <option value="left">Left</option>
                                                            <option value="center">Center</option>
                                                            <option value="right">Right</option>
                                                        </select>
                                                        @error('data_x') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Data V-Offset</label>
                                                        <input type="text" wire:model="data_v_offset.0" id="email" placeholder="0"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        @error('data_v_offset') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Data H-Offset</label>
                                                        <input type="text" wire:model="data_h_offset.0" id="email"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        @error('data_h_offset') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                </div>
                                                <div class="grid grid-cols-4 gap-1">
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Text Color</label>
                                                        <select wire:model="text_color.0" id="email"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                            <option value="">Black</option>
                                                            <option value="text-white">White</option>
                                                        </select>
                                                        @error('text_color') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Text Align</label>
                                                        <select wire:model="text_align.0"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                            <option value="text-left">Left</option>
                                                            <option value="text-center">Center</option>
                                                            <option value="text-right">Right</option>
                                                        </select>
                                                        @error('text_align') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Font Size</label>
                                                        <input type="text" wire:model="fontsize.0" id="email" placeholder="0"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        @error('fontsize') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Text Upper Case</label>
                                                        <select wire:model="text_upper_case.0"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                            <option value="">No</option>
                                                            <option value="text-uppercase">Yes</option>
                                                        </select>
                                                        @error('text_upper_case') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            @foreach($inputs as $key => $value)
                                            <div class="px-4 py-4 bg-gray-200 my-4">
                                                <div class="grid grid-cols-3 gap-1">
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Layer Title English</label>
                                                        <input type="text" wire:model="en_title.{{$value}}" id="email"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        @error('en_title.'.$value) <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Layer Title Sinhala</label>
                                                        <input type="text" wire:model="si_title.{{$value}}" id="email"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        @error('si_title.'.$value) <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Layer Title Tamil</label>
                                                        <input type="text" wire:model="ta_title.{{$value}}" id="email"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        @error('ta_title.'.$value) <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                </div>
                                                <div class="grid grid-cols-3 gap-1">
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Data BG Color</label>
                                                        <select wire:model="bg_color.{{$value}}" id="email"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                            <option value="">No Color</option>
                                                            <option value="bg-theme-colored">Orange</option>
                                                            <option value="bg-theme-colored-transparent">Orange Transparent</option>
                                                            <option value="bg-dark-transparent">Dark Transparent</option>
                                                        </select>
                                                        @error('bg_color.'.$value) <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Data Start Delay(ms)</label>
                                                        <input type="text" wire:model="start_delay.{{$value}}" id="email"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        @error('start_delay.'.$value) <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Data Line Height</label>
                                                        <input type="text" wire:model="line_height.{{$value}}" id="email"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        @error('line_height.'.$value) <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                </div>
                                                <div class="grid grid-cols-4 gap-1">
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Data Y</label>
                                                        <select wire:model="data_y.{{$value}}" id="email"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                            <option value="top">Top</option>
                                                            <option value="middle">Middle</option>
                                                            <option value="bottom">Bottom</option>
                                                        </select>
                                                        @error('data_y.'.$value) <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Data X</label>
                                                        <select wire:model="data_x.{{$value}}"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                            <option value="left">Left</option>
                                                            <option value="center">Center</option>
                                                            <option value="right">Right</option>
                                                        </select>
                                                        @error('data_x.'.$value) <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Data V-Offset</label>
                                                        <input type="text" wire:model="data_v_offset.{{$value}}" id="email" placeholder="0"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        @error('data_v_offset.'.$value) <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Data H-Offset</label>
                                                        <input type="text" wire:model="data_h_offset.{{$value}}" id="email"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        @error('data_h_offset.'.$value) <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                </div>
                                                <div class="grid grid-cols-4 gap-1">
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Text Color</label>
                                                        <select wire:model="text_color.{{$value}}" id="email"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                            <option value="">Black</option>
                                                            <option value="text-white">White</option>
                                                        </select>
                                                        @error('text_color.'.$value) <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Text Align</label>
                                                        <select wire:model="text_align.{{$value}}"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                            <option value="text-left">Left</option>
                                                            <option value="text-center">Center</option>
                                                            <option value="text-right">Right</option>
                                                        </select>
                                                        @error('text_align.'.$value) <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Font Size</label>
                                                        <input type="text" wire:model="fontsize.{{$value}}" id="email" placeholder="0"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        @error('fontsize.'.$value) <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Text Upper Case</label>
                                                        <select wire:model="text_upper_case.{{$value}}"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                            <option value="">No</option>
                                                            <option value="text-uppercase">Yes</option>
                                                        </select>
                                                        @error('text_upper_case.'.$value) <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        @endif
                                        @if($step3)
                                        <div class="step3">
                                            <h1 class="text-xl mb-2">Button Details</h1>
                                            <div class="px-4 py-4 bg-gray-200 my-4">
                                                <div class="grid grid-cols-3 gap-1">
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Button Title English</label>
                                                        <input type="text" wire:model="button_title" id="email"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        @error('button_title') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Button Title Sinhala</label>
                                                        <input type="text" wire:model="button_si_title" id="email"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        @error('button_si_title') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Button Title Tamil</label>
                                                        <input type="text" wire:model="button_ta_title" id="email"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        @error('button_ta_title') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                </div>
                                                <div class="grid grid-cols-3 gap-1">
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Button Link</label>
                                                        <input type="text" wire:model="button_link" id="email"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        @error('button_link') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Data BG Color</label>
                                                        <select wire:model="button_bg_color" id="email"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                            <option value="btn-gray">Gray</option>
                                                            <option value="bg-theme-colored">Orange</option>
                                                            <option value="btn-dark">Dark</option>
                                                            <option value="btn-success">Green</option>
                                                            <option value="btn-danger">Red</option>
                                                            <option value="btn-info">Light Blue</option>
                                                            <option value="btn-primary">Dark Blue</option>
                                                            <option value="btn-warning">Yellow</option>
                                                            <option value="btn-default">Default</option>
                                                            <option value="btn-dark">Dark</option>
                                                        </select>
                                                        @error('button_bg_color') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Data Start Delay(ms)</label>
                                                        <input type="text" wire:model="button_start_delay" id="email"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        @error('button_start_delay') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>

                                                </div>
                                                <div class="grid grid-cols-3 gap-1">
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Data Y</label>
                                                        <select wire:model="button_data_y" id="email"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                            <option value="top">Top</option>
                                                            <option value="middle">Middle</option>
                                                            <option value="bottom">Bottom</option>
                                                        </select>
                                                        @error('button_data_y') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Data X</label>
                                                        <select wire:model="button_data_x"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                            <option value="left">Left</option>
                                                            <option value="center">Center</option>
                                                            <option value="right">Right</option>
                                                        </select>
                                                        @error('button_data_x') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Data V-Offset</label>
                                                        <input type="text" wire:model="button_data_v_offset" id="email" placeholder="0"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        @error('button_data_v_offset') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>

                                                </div>
                                                <div class="grid grid-cols-3 gap-1">
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Data H-Offset</label>
                                                        <input type="text" wire:model="button_data_h_offset" id="email"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        @error('button_data_h_offset') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Text Color</label>
                                                        <select wire:model="button_text_color" id="email"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                            <option value="">Black</option>
                                                            <option value="text-white">White</option>
                                                        </select>
                                                        @error('button_text_color') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Text Upper Case</label>
                                                        <select wire:model="button_text_upper_case"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                            <option value="">No</option>
                                                            <option value="text-uppercase">Yes</option>
                                                        </select>
                                                        @error('button_text_upper_case') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                </div>
                                                <div class="grid grid-cols-3 gap-1">
                                                    <div class="mb-1">
                                                        <label for="email"
                                                            class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Button Shape</label>
                                                        <select wire:model="button_shape" id="email"
                                                            class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                            <option value="">Normal</option>
                                                            <option value="btn-circled">Circled</option>
                                                            <option value="btn-flat">Flat</option>
                                                        </select>
                                                        @error('button_shape ') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif

                                    </div>
                                    <div
                                        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                                        <button type="button" class="px-6
                                            py-2.5
                                            bg-purple-600
                                            text-white
                                            font-medium
                                            text-xs
                                            leading-tight
                                            uppercase
                                            rounded
                                            shadow-md
                                            hover:bg-purple-700 hover:shadow-lg
                                            focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0
                                            active:bg-purple-800 active:shadow-lg
                                            transition
                                            duration-150
                                            ease-in-out" data-bs-dismiss="modal">Close</button>
                                        @if($step1)
                                        <button type="button" class="px-6
                                            py-2.5
                                            bg-blue-600
                                            text-white
                                            font-medium
                                            text-xs
                                            leading-tight
                                            uppercase
                                            rounded
                                            shadow-md
                                            hover:bg-blue-700 hover:shadow-lg
                                            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                                            active:bg-blue-800 active:shadow-lg
                                            transition
                                            duration-150
                                            ease-in-out
                                            ml-1" wire:click="stepOne">Save changes
                                        </button>
                                        @endif

                                        @if($step2)
                                        <button type="button" class="px-6
                                            py-2.5
                                            bg-blue-600
                                            text-white
                                            font-medium
                                            text-xs
                                            leading-tight
                                            uppercase
                                            rounded
                                            shadow-md
                                            hover:bg-blue-700 hover:shadow-lg
                                            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                                            active:bg-blue-800 active:shadow-lg
                                            transition
                                            duration-150
                                            ease-in-out
                                            ml-1" wire:click="stepTwo">Continue
                                        </button>
                                        @endif

                                        @if($step3)
                                        <button type="button" class="px-6
                                            py-2.5
                                            bg-blue-600
                                            text-white
                                            font-medium
                                            text-xs
                                            leading-tight
                                            uppercase
                                            rounded
                                            shadow-md
                                            hover:bg-blue-700 hover:shadow-lg
                                            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                                            active:bg-blue-800 active:shadow-lg
                                            transition
                                            duration-150
                                            ease-in-out
                                            ml-1" wire:click="stepThree">Done
                                        </button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
