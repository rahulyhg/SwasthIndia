@extends ('backend.layouts.app')

@section ('title', __('labels.backend.access.hospitals.management') . ' | ' . __('labels.backend.access.hospitals.create'))

@section('breadcrumb-links')
@include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
{{ html()->form('POST', route('admin.hospital.store'))->class('form-horizontal')->open() }}

@include('backend.auth.hospital._form')

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
@endsection