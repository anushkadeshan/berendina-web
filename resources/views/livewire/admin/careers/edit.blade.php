<div>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-10">
                    <h5>Careers</h5>
                </div>
                <div class="col-md-2">
                    <button wire:click.prevent="isPublished" class="btn btn-{{$is_published? 'success' : 'danger'}}">{{$is_published? 'Unpublish' : 'Publish'}}</button>
                 </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
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
                            <input class="form-control" wire:model="si_title" id="exampleFormControlInput1" type="text">
                            @error('si_title') <span class="error text-danger">*{{ $message }}</span> @enderror
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
                            <label for="exampleFormControlTextarea4">Description - English</label>
                            <div id="toolbar-container"></div>
                            <div id="job_description" class="border border-black" data-job_description="@this"
                                wire:model="job_description">
                                <p>{!!$job_description!!}</p>
                            </div>
                            @error('job_description') <span class="error text-danger">*{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div wire:ignore class="mb-3">
                            <label for="exampleFormControlTextarea4">Description - Sinhala</label>
                            <div id="toolbar-container1"></div>
                            <div id="si_job_description" class="border border-black" data-si_job_description="@this"
                                wire:model="si_job_description">
                                <p>{!!$si_job_description!!}</p>
                            </div>
                            @error('si_job_description') <span class="error text-danger">*{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div wire:ignore class="mb-3">
                            <label for="exampleFormControlTextarea4">Description - Tamil</label>
                            <div id="toolbar-container2"></div>
                            <div id="ta_job_description" class="border border-black" data-ta_job_description="@this"
                                wire:model="ta_job_description">
                                <p>{!!$ta_job_description!!}</p>
                            </div>
                            @error('ta_job_description') <span class="error text-danger">*{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1">Closing Date</label>
                            <input class="form-control" wire:model="closing_date" id="exampleFormControlInput1"
                                type="date">
                            @error('closing_date') <span class="error text-danger">*{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleFormControlSelect9">Company</label>
                            <select class="form-select digits" wire:model="company" id="exampleFormControlSelect9">
                                <option value="BMIC">BMIC</option>
                                <option value="BDS">BDS</option>
                            </select>
                            @error('company') <span class="error text-danger">*{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <button class="btn btn-primary" wire:click.prevent="save" type="submit">
        <i wire:loading.remove class="icofont icofont-package"></i>
        <i wire:loading wire:target="save" class="fa fa-spin fa-spinner"></i>
        Submit</button>
    @if (session()->has('message'))
    <div class="alert alert-success dark mt-4" role="alert" x-data="{ show: true }" x-show="show"
        x-init="setTimeout(() => show = false, 3000)">
        <p>{{ session('message') }}</p>
    </div>
    @endif
    @push('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/decoupled-document/ckeditor.js"></script>

    <script>

        DecoupledEditor.create(document.querySelector('#job_description'))
            .then(editor => {
                const toolbarContainer = document.querySelector('#toolbar-container');
                toolbarContainer.appendChild(editor.ui.view.toolbar.element);
                editor.model.document.on('change:data', () => {
                    let job_description = $('#job_description').data('job_description');
                    eval(job_description).set('job_description', editor.getData());
                })
            });

        DecoupledEditor.create(document.querySelector('#si_job_description'))
            .then(editor => {
                const toolbarContainer = document.querySelector('#toolbar-container1');
                toolbarContainer.appendChild(editor.ui.view.toolbar.element);
                editor.model.document.on('change:data', () => {
                    let si_job_description = $('#si_job_description').data('si_job_description');
                    eval(si_job_description).set('si_job_description', editor.getData());
                })
            });

        DecoupledEditor.create(document.querySelector('#ta_job_description'))
            .then(editor => {
                const toolbarContainer = document.querySelector('#toolbar-container2');
                toolbarContainer.appendChild(editor.ui.view.toolbar.element);
                editor.model.document.on('change:data', () => {
                    let ta_job_description = $('#ta_job_description').data('ta_job_description');
                    eval(ta_job_description).set('ta_job_description', editor.getData());
                })
            });

    </script>
    @endpush
</div>
