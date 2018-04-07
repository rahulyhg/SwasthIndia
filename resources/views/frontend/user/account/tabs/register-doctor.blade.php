@extends('frontend.layouts.app')

@section('content')
    <div class="row justify-content-center align-items-center mb-3">
        <div class="col col-sm-10 align-self-center">
            <div class="card">
                <div class="card-header">
                    <strong>
                        {{ __('navs.frontend.user.doctor') }}
                    </strong>
                </div>
                
                <div class="card-body">
                    {{ html()->form('POST', route('frontend.user.doctor.register'))->acceptsFiles()->open() }}                    
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.frontend.degree'))->for('degree') }}

                                    {{ html()->text('degree')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.degree'))
                                        ->attribute('maxlength', 191)
                                        ->required() }}
                                </div><!--form-group-->
                            </div><!--col-->
                        </div><!--row-->

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.frontend.specialisation'))->for('specialisation') }}

                                    {{ html()->text('specialisation')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.specialisation'))
                                        ->attribute('maxlength', 191)
                                        ->required() }}
                                </div><!--form-group-->
                            </div><!--col-->
                        </div><!--row-->

                        <div class="form-group row">
                            <div class="col-md-9">
                                <label class="switch switch-3d switch-primary">
                                    {{ html()->checkbox('surgeon', false, '1')->class('switch-input') }}
                                    <span class="switch-label"></span>
                                    <span class="switch-handle"></span>
                                </label>
                                {{ html()->label(__('validation.attributes.frontend.surgeon'))->class('form-control-label')->for('surgeon') }}
                            </div><!--col-->
                        </div><!--form-group-->

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.frontend.upload-documents'))->for('upload_documents') }}
                                    <div class="col-xs-12">
                                        {{ html()->file('upload_documents[]')->attribute('multiple') }}
                                    </div>
                                </div><!--form-group-->
                            </div><!--col-->
                        </div><!--row-->

                        <div class="row">
                            <div class="col">
                                <div class="form-group mb-0 clearfix">
                                    {{ form_submit(__('labels.general.buttons.update')) }}
                                </div><!--form-group-->
                            </div><!--col-->
                        </div><!--row-->
                    {{ html()->form()->close() }}
                </div>
            </div>
        </div>
    </div>
@endsection