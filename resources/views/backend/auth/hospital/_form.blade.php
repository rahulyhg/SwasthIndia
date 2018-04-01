<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('labels.backend.access.hospitals.management') }}
                    <small class="text-muted">{{!empty($hospital) ? __('labels.backend.access.hospitals.edit') : __('labels.backend.access.hospitals.create') }}</small>
                </h4>
            </div><!--col-->
        </div><!--row-->

        <hr />

        <div class="row mt-4 mb-4">
            <div class="col">
                <div class="form-group row">
                    {{ html()->label(__('validation.attributes.backend.access.hospitals.name'))->class('col-md-2 form-control-label')->for('name') }}

                    <div class="col-md-10">
                        {{ html()->text('name')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.backend.access.hospitals.name'))
                                    ->attribute('maxlength', 191)
                                    ->required()
                                    ->autofocus() }}
                    </div><!--col-->
                </div><!--form-group-->

                <div class="form-group row">
                    {{ html()->label(__('validation.attributes.backend.access.hospitals.city'))->class('col-md-2 form-control-label')->for('city') }}

                    <div class="col-md-10">
                        {{ html()->text('city')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.backend.access.hospitals.city'))
                                    ->attribute('maxlength', 191) }}
                    </div><!--col-->
                </div><!--form-group-->

                <div class="form-group row">
                    {{ html()->label(__('validation.attributes.backend.access.hospitals.state'))->class('col-md-2 form-control-label')->for('state') }}

                    <div class="col-md-10">
                        {{ html()->text('state')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.backend.access.hospitals.state'))
                                    ->attribute('maxlength', 191) }}
                    </div><!--col-->
                </div><!--form-group-->

                <div class="form-group row">
                    {{ html()->label(__('validation.attributes.backend.access.hospitals.address'))->class('col-md-2 form-control-label')->for('address') }}

                    <div class="col-md-10">
                        {{ html()->text('address')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.backend.access.hospitals.address'))
                                    ->attribute('maxlength', 191) }}
                    </div><!--col-->
                </div><!--form-group-->

                <div class="form-group row">
                    {{ html()->label(__('validation.attributes.backend.access.hospitals.active'))->class('col-md-2 form-control-label')->for('active') }}

                    <div class="col-md-10">
                        <label class="switch switch-3d switch-primary">
                            @if(!isset($hospital->active))
                                {{ html()->checkbox('active', true, '1')->class('switch-input') }}
                            @else
                                {{ html()->checkbox('active', ($hospital->active) ? true : false, '1')->class('switch-input') }}
                            @endif
                            <span class="switch-label"></span>
                            <span class="switch-handle"></span>
                        </label>
                    </div><!--col-->
                </div><!--form-group-->


            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
