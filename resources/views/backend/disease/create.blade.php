@extends ('backend.layouts.app')

@section ('title', __('labels.backend.disease.management') . ' | ' . __('labels.backend.disease.users.create'))

@section('breadcrumb-links')
    @include('backend.disease.includes.breadcrumb-links')
@endsection

@section('content')
    {{ html()->form('POST', route('admin.disease.store'))->class('form-horizontal')->open() }}
        <div class="card">
            @include('backend.disease._form')

            <div class="card-footer clearfix">
                <div class="row">
                    <div class="col">
                        {{ form_cancel(route('admin.disease.index'), __('buttons.general.cancel')) }}
                    </div><!--col-->

                    <div class="col text-right">
                        {{ form_submit(__('buttons.general.crud.create')) }}
                    </div><!--col-->
                </div><!--row-->
            </div><!--card-footer-->
        </div><!--card-->
    {{ html()->form()->close() }}
@endsection