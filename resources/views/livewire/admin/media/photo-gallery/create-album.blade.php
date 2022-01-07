<div>
    <div class="row mb-4">
        <div class="col">
            <div class="mb-3">
                <label for="exampleFormControlInput1">Title - English</label>
                <input class="form-control" wire:model="title" id="exampleFormControlInput1" type="text">
                @error('title') <span class="error text-danger">*{{ $message }}</span> @enderror
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <div class="mb-3">
                <label for="exampleFormControlInput1">Title - Sinhala</label>
                <input class="form-control" wire:model="sn_title" id="exampleFormControlInput1" type="text">
                @error('sn_title') <span class="error text-danger">*{{ $message }}</span> @enderror
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <div class="mb-3">
                <label for="exampleFormControlInput1">Title - Tamil</label>
                <input class="form-control" wire:model="ta_title" id="exampleFormControlInput1" type="text">
                @error('ta_title') <span class="error text-danger">*{{ $message }}</span> @enderror
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <div wire:ignore class="mb-3">
                <label for="exampleFormControlSelect9">Thumb Image (330x225) </label>
                <input id="input-id" wire:model="thumb" type="file" class="file" data-preview-file-type="any" data-browse-on-zone-click="true" data-show-caption="true">
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <div wire:ignore class="mb-3">
                <label for="exampleFormControlSelect9">Gallery Images (Max 2mb)</label>
                <input id="input-id" wire:model="photos" multiple type="file" class="file" data-preview-file-type="any" data-browse-on-zone-click="true" data-show-caption="true">
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <div class="mb-3">
                <label for="exampleFormControlSelect9">Company</label>
                <select class="form-select digits" wire:model="company" id="exampleFormControlSelect9">
                    <option value="">Select Option</option>
                    <option value="BDS">BDS</option>
                    <option value="BMIC">BMIC</option>
                </select>
                @error('category') <span class="error text-danger">*{{ $message }}</span> @enderror
            </div>
        </div>
    </div>
    <button class="btn btn-primary" wire:click.prevent="save" type="submit">
        <i wire:loading.remove class="icofont icofont-package"></i>
        <i wire:loading wire:target="save" class="fa fa-spin fa-spinner"></i>
        Submit</button>
    <input class="btn btn-light" type="reset" value="Cancel">
    @if (session()->has('message'))
    <div class="alert alert-success dark mt-4" role="alert" x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">
        <p>{{ session('message') }}</p>
        </div>
    @endif
</div>
