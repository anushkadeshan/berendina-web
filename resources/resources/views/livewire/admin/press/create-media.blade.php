<div>
    <div class="container-fluid">

        <div class="row">

           <div class="col-sm-12">
              <div class="card">
                 <div class="card-header">
                     <div class="row">
                         <div class="col-md-6">
                            <h5>Add Media</h5>
                         </div>
                         <div class="col-md-6">

                        </div>
                     </div>
                 </div>
                 <div class="card-body">
                    <div class="row mb-4">
                        <div class="col">
                            <div wire:ignore class="mb-3">
                                <label for="exampleFormControlTextarea4">Description - English</label>
                                <div id="toolbar-container"></div>

                                <div id="description" class="border border-black" data-description="@this" wire:model="description">
                                    <p>{{$description}}</p>
                                </div>
                                @error('description') <span class="error text-danger">*{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <div wire:ignore class="mb-3">
                                <label for="exampleFormControlTextarea4">Description - Sinhala</label>
                                <div id="toolbar-container1"></div>
                                <div id="si_description" class="border border-black" data-si_description="@this" wire:model="si_description">
                                    <p>{{$si_description}}</p>
                                </div>
                                @error('si_description') <span class="error text-danger">*{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <div wire:ignore class="mb-3">
                                <label for="exampleFormControlTextarea4">Description - Tamil</label>
                                <div id="toolbar-container2"></div>
                                <div id="ta_description" class="border border-black" data-ta_description="@this" wire:model="ta_description">
                                    <p>{{$ta_description}}</p>
                                </div>
                                @error('ta_description') <span class="error text-danger">*{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <div wire:ignore class="mb-3">
                                <label for="exampleFormControlSelect9">Main Image </label>
                                <input id="input-id" wire:model="photo" type="file" class="file" data-preview-file-type="any" data-browse-on-zone-click="true" data-show-caption="true">
                            </div>
                        </div>
                    </div>
                 </div>
              </div>
              <div class="card-footer">
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
           </div>
        </div>

     </div>
</div>
@push('js')
<script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/decoupled-document/ckeditor.js"></script>

    <script>

        DecoupledEditor.create(document.querySelector('#description'))
        .then( editor => {
            const toolbarContainer = document.querySelector( '#toolbar-container' );
            toolbarContainer.appendChild( editor.ui.view.toolbar.element );
            editor.model.document.on('change:data', () => {
                let description = $('#description').data('description');
                eval(description).set('description', editor.getData());
            })
        });

        DecoupledEditor.create(document.querySelector('#si_description'))
        .then( editor => {
            const toolbarContainer = document.querySelector( '#toolbar-container1' );
            toolbarContainer.appendChild( editor.ui.view.toolbar.element );
            editor.model.document.on('change:data', () => {
                let si_description = $('#si_description').data('si_description');
                eval(si_description).set('si_description', editor.getData());
            })
        });

        DecoupledEditor.create(document.querySelector('#ta_description'))
        .then( editor => {
            const toolbarContainer = document.querySelector( '#toolbar-container2' );
            toolbarContainer.appendChild( editor.ui.view.toolbar.element );
            editor.model.document.on('change:data', () => {
                let ta_description = $('#ta_description').data('ta_description');
                eval(ta_description).set('ta_description', editor.getData());
            })
        });

    </script>
@endpush
