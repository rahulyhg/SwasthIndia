@extends('frontend.layouts.app')

@section('content')
<div class="row mb-4">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <strong>
                    <i class="fa fa-flask"></i> {{ __('navs.frontend.test_record') }}
                </strong>
            </div><!--card-header-->

            <div class="card-body">
                <div class="row">
                    <div class="card-body">
                        {{ html()->form('POST', route('frontend.user.test_record.store'))->class('form-horizontal')->acceptsFiles()->open() }}

                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h4 class="card-title mb-0">
                                            {{ __('labels.backend.access.test_record.management') }}
                                            <small class="text-muted">{{__('labels.backend.access.test_record.create')}}</small>
                                        </h4>
                                    </div><!--col-->
                                </div><!--row-->

                                <hr />

                                <div class="row mt-4 mb-4">
                                    <div class="col">
                                        <div class="form-group row">
                                            {{ html()->label(__('validation.attributes.backend.access.test_record.name'))->class('col-md-2 form-control-label')->for('test_name') }}

                                            <div class="col-md-10">
                                                {{ html()->select('test_id',$tests)
                                                            ->class('form-control')
                                                            ->placeholder(__('validation.attributes.backend.access.test_record.placeholder_name'))
                                                            ->attribute('maxlength', 191)
                                                            ->required() }}
                                            </div><!--col-->
                                        </div><!--form-group-->
                                <div class="form-group row">
                                            {{ html()->label(__('validation.attributes.backend.access.test_record.prescription'))->class('col-md-2 form-control-label')->for('prescription') }}

                                            <div class="col-md-10">
                                                {{ html()->select('prescription_id')->options($prescriptions)
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.backend.access.test_record.placeholder_prescription'))
                                    ->attribute('maxlength', 200) }}
                                            </div><!--col-->
                                        </div><!--form-group-->

                                        <div class="form-group row">
                                            {{ html()->label(__('validation.attributes.backend.access.test_record.description'))->class('col-md-2 form-control-label')->for('description') }}

                                            <div class="col-md-10">
                                                {{ html()->textarea('description')
                                                        ->class('form-control')
                                                        ->placeholder(__('validation.attributes.backend.access.test_record.description'))
                                                        ->attribute('maxlength', 191)
                                                        ->required()  }}
                                            </div><!--col-->
                                        </div><!--form-group-->

                                        <div class="form-group row">
                                            {{ html()->label(__('validation.attributes.backend.access.test_record.files'))->class('col-md-2 form-control-label')->for('files') }}

                                            <div class="col-md-10">
                                                {{ html()->file('test_records_files[]')
                                                    ->class('form-control')
                                                    ->multiple()
                                                    ->attribute('maxlength', 191)
                                                    ->required() }}
                                            </div><!--col-->
                                        </div><!--form-group-->

                                        <div class="form-group row">
                                            <div class="gallery"></div>
                                        </div><!--form-group-->

                                    </div><!--col-->
                                </div><!--row-->
                            </div><!--card-body-->


                            <div class="card-footer clearfix">
                                <div class="row">
                                    <div class="col">
                                        {{ form_cancel(route('admin.hospital.index'), __('buttons.general.cancel')) }}
                                    </div><!--col-->

                                    <div class="col text-right">
                                        {{ form_submit(__('buttons.general.crud.create')) }}
                                    </div><!--col-->
                                </div><!--row-->
                            </div><!--card-footer-->
                        </div><!--card-->

                        {{ html()->form()->close() }}
                    </div>


                </div><!--card-->
            </div><!--col-md-8-->
        </div><!-- row -->
    </div> <!-- card-body -->
</div><!-- card -->
</div><!-- row -->
</div><!-- row -->
@endsection

@push('after-scripts')
<script>
    console.log("dasdads")
    $(function () {
        // Multiple images preview in browser
        var imagesPreview = function (input, placeToInsertImagePreview) {

            if (input.files) {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function (event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#files').on('change', function () {
            imagesPreview(this, 'div.gallery');
        });
    });
    </script>
    @endpush