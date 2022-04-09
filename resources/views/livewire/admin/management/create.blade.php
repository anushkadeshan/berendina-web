<div>
    <div class="row">
        <div class="row mb-4">
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1">Name</label>
                    <input class="form-control" wire:model="name" id="exampleFormControlInput1" type="text">
                    @error('name') <span class="error text-danger">*{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1">Display Name</label>
                    <input class="form-control" wire:model="display_name" id="exampleFormControlInput1" type="text">
                    @error('display_name') <span class="error text-danger">*{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1">Designation</label>
                    <input class="form-control" wire:model="designation" id="exampleFormControlInput1" type="text">
                    @error('designation') <span class="error text-danger">*{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1">Profile</label>
                    <textarea class="form-control" wire:model="profile" id="exampleFormControlInput1" ></textarea>
                    @error('profile') <span class="error text-danger">*{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div wire:ignore class="mb-3">
                    <label for="exampleFormControlSelect9">Profile Image (370x450)</label> <br>
                    <input id="input-id" wire:model="photo" type="file" class="file">
                </div>
            </div>
            @if($photo)
                <img src="{{ $photo->temporaryUrl() }}" class="img-fluid img-thumbnail" width="225px" height="325px" style="width: 225px;">
            @endif
            @error('photo') <span class="error text-danger">*{{ $message }}</span> @enderror
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlSelect9">Company</label>
                    <select class="form-select digits" wire:model="company" id="exampleFormControlSelect9">
                        <option value="">Select Option</option>
                        <option value="BMIC">BMIC</option>
                        <option value="BDS">BDS</option>
                    </select>
                    @error('company') <span class="error text-danger">*{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
    </div>
    <button class="btn btn-primary" wire:click.prevent="save" type="submit">
        <i wire:loading.remove class="icofont icofont-package"></i>
        <i wire:loading wire:target="save" class="fa fa-spin fa-spinner"></i>
        Submit</button>
        @if (session()->has('message'))
        <div class="alert alert-success dark mt-4" role="alert" x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">
            <p>{{ session('message') }}</p>
            </div>
        @endif
</div>
