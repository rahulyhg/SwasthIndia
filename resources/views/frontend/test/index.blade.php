@extends('frontend.layouts.app')

@section('content')
<div class="row mb-4">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <strong>
                    <i class="fa fa-dashboard"></i> {{ __('navs.frontend.test') }}
                </strong>
            </div><!--card-header-->

            <div class="card-body">
                <div class="row">
                    <div class="card-body">
                        {{ html()->form('POST', route('admin.hospital.store'))->class('form-horizontal')->open() }}

                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h4 class="card-title mb-0">
                                            {{ __('labels.backend.access.prescriptions.management') }}
                                            <small class="text-muted">{{__('labels.backend.access.prescriptions.create')}}</small>
                                        </h4>
                                    </div><!--col-->
                                </div><!--row-->

                                <hr />

                                <div class="row mt-4 mb-4">
                                    <div class="col">
                                        <div class="form-group row">
                                            {{ html()->label(__('validation.attributes.backend.access.prescriptions.doctor'))->class('col-md-2 form-control-label')->for('doctor') }}

                                            <div class="col-md-10">
                                                {{ html()->select('doctor')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.backend.access.prescriptions.doctor'))
                                    ->attribute('maxlength', 191)
                                    ->required() }}
                                            </div><!--col-->
                                        </div><!--form-group-->

                                        <div class="form-group row">
                                            {{ html()->label(__('validation.attributes.backend.access.prescriptions.title'))->class('col-md-2 form-control-label')->for('title') }}

                                            <div class="col-md-10">
                                                {{ html()->text('title')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.backend.access.prescriptions.title'))
                                    ->attribute('maxlength', 191) }}
                                            </div><!--col-->
                                        </div><!--form-group-->

                                        <div class="form-group row">
                                            {{ html()->label(__('validation.attributes.backend.access.prescriptions.text'))->class('col-md-2 form-control-label')->for('text') }}

                                            <div class="col-md-10">
                                                {{ html()->textarea('text')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.backend.access.prescriptions.text'))
                                    ->attribute('maxlength', 191) }}
                                            </div><!--col-->
                                        </div><!--form-group-->

                                        <div class="form-group row">
                                            {{ html()->label(__('validation.attributes.backend.access.prescriptions.disease'))->class('col-md-2 form-control-label')->for('disease') }}

                                            <div class="col-md-10">
                                                {{ html()->multiselect('disease')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.backend.access.prescriptions.disease'))
                                    ->attribute('maxlength', 191) }}
                                            </div><!--col-->
                                        </div><!--form-group-->

                                        <div class="form-group row">
                                            {{ html()->label(__('validation.attributes.backend.access.prescriptions.files'))->class('col-md-2 form-control-label')->for('files') }}

                                            <div class="col-md-10">
                                                {{ html()->file('files')
                                    ->class('form-control')
                                    ->multiple()
                                    ->attribute('maxlength', 191) }}
                                            </div><!--col-->
                                        </div><!--form-group-->

                                        <div class="form-group row">
                                            <div class="gallery"></div>
                                        </div><!--form-group-->

                                        <div class="form-group row">
                                            {{ html()->label(__('validation.attributes.backend.access.prescriptions.name'))->class('col-md-2 form-control-label')->for('name') }}

                                            <div class="col-md-10">
                                                {{ html()->text('name')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.backend.access.prescriptions.name'))
                                    ->attribute('maxlength', 191) }}
                                            </div><!--col-->
                                        </div><!--form-group-->

                                        <div class="form-group row">
                                            {{ html()->label(__('validation.attributes.backend.access.prescriptions.choice'))->class('col-md-2 form-control-label')->for('choice') }}

                                            <div class="col-md-10">
                                                <label class="switch switch-3d switch-primary">
                                                    {{ html()->checkbox('choice', true, '1')->class('switch-input') }}
                                                    <span class="switch-label"></span>
                                                    <span class="switch-handle"></span>
                                                </label>
                                            </div><!--col-->
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