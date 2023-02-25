<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Figure Counter</h5>
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
                                        <table class="min-w-full text-center">
                                            <thead class="border-b bg-gray-800">
                                                <tr>
                                                    <th scope="col" class="text-sm font-medium text-white px-4 py-2">
                                                        #
                                                    </th>
                                                    <th scope="col" class="text-sm font-medium text-white px-4 py-2">
                                                        Figure Name
                                                    </th>
                                                    <th scope="col" class="text-sm font-medium text-white px-4 py-2">
                                                        Amount
                                                    </th>
                                                    <th scope="col" class="text-sm font-medium text-white px-4 py-2">
                                                        Order
                                                    </th>
                                                    <th scope="col" class="text-sm font-medium text-white px-4 py-2">
                                                        Icon
                                                    </th>
                                                    <th scope="col" class="text-sm font-medium text-white px-4 py-2">
                                                        BG-Color
                                                    </th>
                                                    <th scope="col" class="text-sm font-medium text-white px-4 py-2">

                                                    </th>
                                                </tr>
                                            </thead class="border-b">
                                            <tbody>
                                                @php
                                                $no = 1;
                                                @endphp
                                                @foreach($figures as $figure)
                                                <tr class="bg-white border-b">
                                                    <td
                                                        class="px-4 py-2 whitespace-nowrap text-sm font-medium text-black-900">
                                                        {{$no++}}
                                                    </td>
                                                    <td
                                                        class="text-sm text-gray-900 text-left  px-4 py-2 whitespace-nowrap">
                                                        {{$figure->figure_name_en}}
                                                    </td>
                                                    <td class="text-sm text-gray-900  px-4 py-2 whitespace-nowrap">
                                                        {{$figure->amount}}
                                                    </td>
                                                    <td class="text-sm text-gray-900  px-4 py-2 whitespace-nowrap">
                                                        {{$figure->order}}
                                                    </td>
                                                    <td class="text-sm text-gray-900  px-4 py-2 whitespace-nowrap">
                                                        {{$figure->icon_location}}
                                                    </td>
                                                    <td class="text-sm text-gray-900  px-4 py-2 whitespace-nowrap">
                                                        <div class="px-1 py-1 text-white" style="{{$figure->style}}">
                                                            Sample
                                                        </div>
                                                    </td>
                                                    <td class="text-sm text-gray-900  px-4 py-2 whitespace-nowrap">
                                                        <div class="inline-flex rounded-md shadow-sm" role="group">
                                                            <button type="button" wire:click="edit({{$figure->id}})">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="w-6 h-6">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                                </svg>
                                                            </button>
                                                            <button wire:click="delete({{$figure->id}})">
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
                        <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" wire:ignore
                            id="exampleModalXl" tabindex="-1" aria-labelledby="exampleModalXlLabel" aria-modal="true"
                            role="dialog">
                            <div class="modal-dialog modal-xl relative w-auto pointer-events-none">
                                <div
                                    class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                    <div
                                        class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                        <h5 class="text-xl font-medium leading-normal text-gray-800"
                                            id="exampleModalXlLabel">
                                            {{$edit ? 'Edit Figure' : 'Add New Figure'}}
                                        </h5>
                                        <button type="button"
                                            class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body relative p-4">
                                        <div class="grid grid-cols-3 gap-4">
                                            <div class="mb-2">
                                                <label for="email"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Figure
                                                    Name English</label>
                                                <input type="text" wire:model="figure_name_en" id="email"
                                                    class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                @error('figure_name_en') <span class="text-danger">{{ $message }}</span> @enderror
                                                </div>
                                            <div class="mb-2">
                                                <label for="email"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Figure
                                                    Name Sinhala</label>
                                                <input type="text" wire:model="figure_name_si" id="email"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                @error('figure_name_si') <span class="text-danger">{{ $message }}</span> @enderror
                                                </div>
                                            <div class="mb-2">
                                                <label for="email"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Figure
                                                    Name Tamil</label>
                                                <input type="text" wire:model="figure_name_ta" id="email"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                @error('figure_name_ta') <span class="text-danger">{{ $message }}</span> @enderror
                                                </div>
                                        </div>
                                        <div class="grid grid-cols-3 gap-4">
                                            <div class="mb-2">
                                                <label for="email"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Figure
                                                    Order</label>
                                                <input type="number" wire:model="order" id="email"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                @error('order') <span class="text-danger">{{ $message }}</span> @enderror
                                                </div>
                                            <div class="mb-2">
                                                <label for="email"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Figure
                                                    Amount</label>
                                                <input type="text" wire:model="amount" id="email"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                @error('amount') <span class="text-danger">{{ $message }}</span> @enderror
                                                </div>
                                            <div class="mb-2">
                                                <label for="email"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Figure
                                                    Icon Class (<a href="{{route('icons')}}" target="_blank">Icons</a>)</label>
                                                <input type="text" wire:model="icon_location" id="email"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                @error('icon_location') <span class="text-danger">{{ $message }}</span> @enderror
                                                </div>
                                        </div>
                                        <div class="grid grid-cols-1 gap-4">
                                            <div class="mb-2">
                                                <label for="email"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Figure
                                                    Background Color
                                                </label>
                                                <input type="text" wire:model="background_css" id="email"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                    @error('background_css') <span class="text-danger">{{ $message }}</span> @enderror
                                                </div>
                                        </div>
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
                                        ml-1" wire:click="save">Save changes</button>
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
