<div>
    @if (session()->has('message'))
    <div class="alert alert-success dark" role="alert" x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">
        <p>{{ session('message') }}</p>
        </div>
    @endif
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label for="exampleFormControlInput1">Category</label>
                <input class="form-control" wire:model="name" id="exampleFormControlInput1" type="text">
                @error('name') <span class="error text-danger">*{{ $message }}</span> @enderror
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-secondary" wire:click.prevent="save" type="button">Save changes</button>
    </div>
</div>
