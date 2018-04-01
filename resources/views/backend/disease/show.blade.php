@extends ('backend.layouts.app')

@section ('title', __('labels.backend.access.disease.management') . ' | ' . __('labels.backend.access.disease.view'))

<!--section('breadcrumb-links')
    include('backend.auth.disease.includes.breadcrumb-links')
endsection-->

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('labels.backend.access.disease.management') }}
                    <small class="text-muted">{{ __('labels.backend.access.disease.view') }}</small>
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
                        <div class="col">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tr>
                                        <th>{{ __('labels.backend.access.disease.tabs.content.overview.name') }}</th>
                                        <td>{{ $disease->name }}</td>
                                    </tr>

                                    <tr>
                                        <th>{{ __('labels.backend.access.disease.tabs.content.overview.type') }}</th>
                                        <td>{{ $disease->type }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div><!--table-responsive-->
                    </div><!--tab-->
                </div><!--tab-content-->
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->

    <div class="card-footer">
        <div class="row">
            <div class="col">
                <small class="float-right text-muted">
                    @if ($disease->created_at))
                        <strong>test:</strong> {{ $disease->updated_at->timezone(get_user_timezone()) }} ({{ $disease->created_at->diffForHumans() }}),
                    @endif
                    @if ($disease->updated_at))
                    <strong>{{ __('labels.backend.access.users.tabs.content.overview.last_updated') }}:</strong> {{ $disease->created_at->timezone(get_user_timezone()) }} ({{ $disease->updated_at->diffForHumans() }})
                    @endif
                </small>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-footer-->
</div><!--card-->
@endsection
