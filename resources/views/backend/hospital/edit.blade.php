@extends ('backend.layouts.app')

@section ('title', __('labels.backend.access.hospitals.management') . ' | ' . __('labels.backend.access.hospitals.edit'))

@section('breadcrumb-links')
@include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
{{ html()->modelForm($hospital, 'PATCH', route('admin.hospital.update', $hospital->id))->class('form-horizontal')->open() }}

@include('backend.hospital._form')

<div class="card-footer">
    <div class="row">
        <div class="col">
            {{ form_cancel(route('admin.hospital.index'), __('buttons.general.cancel')) }}
        </div><!--col-->

        <div class="col text-right">
            {{ form_submit(__('buttons.general.crud.update')) }}
        </div><!--row-->
    </div><!--row-->
</div><!--card-footer-->
</div><!--card-->

{{ html()->closeModelForm() }}
@endsection
