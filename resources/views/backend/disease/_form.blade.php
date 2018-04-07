<div class="card-body">
    <div class="row">
        <div class="col-sm-5">
            <h4 class="card-title mb-0">
                {{ __('labels.backend.access.disease.management') }}
                <small class="text-muted">{{ __('labels.backend.access.disease.create') }}</small>
            </h4>
        </div><!--col-->
    </div><!--row-->

    <hr />

    <div class="row mt-4 mb-4">
        <div class="col">
            <div class="form-group row">
                {{ html()->label(__('validation.attributes.backend.access.disease.name'))->class('col-md-2 form-control-label')->for('first_name') }}

                <div class="col-md-10">
                    {{ html()->text('name')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.access.disease.name'))
                        ->attribute('maxlength', 191)
                        ->required()
                        ->autofocus() }}
                </div><!--col-->
            </div><!--form-group-->

            <div class="form-group row">
                {{ html()->label(__('validation.attributes.backend.access.disease.type'))->class('col-md-2 form-control-label')->for('type') }}

                <div class="col-md-10">
                    <select name="type" id="dsf" class="form-control" required="required">
                        @foreach (config('params.diseaseType') as $key => $type)
                            <option value="{{ $key }}" >{{ $type }}</option>
                        @endforeach
                    </select>
                </div><!--col-->
            </div><!--form-group-->


        </div><!--col-->
    </div><!--row-->
</div><!--card-body-->