<div>
    @if (session()->has('message'))
    <div class="alert alert-success dark mt-4" role="alert" x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">
        <p>{{ session('message') }}</p>
        </div>
    @endif
    <div class="grid grid-cols-3 gap-1 mt-4">
        <div class="mb-1">
            <label for="district"
                class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">District</label>
            <input type="text" wire:model="district" id="district"
                class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('district') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-1">
            <label for="company"
                class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Company</label>
                <select wire:model="company" class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="">Select Option</option>
                <option value="BMIC">BMIC</option>
                <option value="BDS">BDS</option>
            </select>
            @error('company') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-1">
            <label for="email"
                class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Branch Name</label>
                <input type="text" wire:model="branch_name" id="branch_name"
                class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('branch_name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="grid grid-cols-3 gap-1 mt-4">
        <div class="mb-1">
            <label for="address"
                class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Address</label>
            <textarea type="text" wire:model="address" id="address"
                class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
            @error('address') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-1">
            <label for="company"
                class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Telephone</label>
                <input type="number" wire:model="telephone" id="telephone"
                class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('telephone') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-1">
            <label for="lat"
                class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Latitude</label>
                <input type="text" wire:model="lat" id="lat"
                class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('lat') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-1">
            <label for="lng"
                class="block mb-1 text-sm font-small text-gray-900 dark:text-gray-300">Longitude</label>
                <input type="text" wire:model="lng" id="lng"
                class="bg-gray-50 border border-slate-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('lng') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
    </div>

    <button wire:click="save" class="py-2 px-4 bg-gray-800 text-white rounded-lg mt-4">
        Save
    </button>
</div>
