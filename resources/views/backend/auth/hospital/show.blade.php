@extends ('backend.layouts.app')

@section ('title', __('labels.backend.access.hospitals.management') . ' | ' . __('labels.backend.access.hospitals.view'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('labels.backend.access.hospitals.management') }}
                    <small class="text-muted">{{ __('labels.backend.access.hospitals.view') }}</small>
                </h4>
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4 mb-4">
            <div class="col">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-expanded="true"><i class="fa fa-user"></i> {{ __('labels.backend.access.users.tabs.titles.overview') }}</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="overview" role="tabpanel" aria-expanded="true">
                        @include('backend.auth.hospital.show.tabs.overview')
                    </div><!--tab-->
                </div><!--tab-content-->
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->

    <div class="card-footer">
        <div class="row">
            <div class="col">
                <small class="float-right text-muted">
                    <strong>{{ __('labels.backend.access.hospitals.tabs.content.overview.created_at') }}:</strong> {{ $hospital->created_at }},
                    <strong>{{ __('labels.backend.access.hospitals.tabs.content.overview.last_updated_at') }}:</strong> {{ $hospital->updated_at }}
                </small>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-footer-->
</div><!--card-->
@endsection
