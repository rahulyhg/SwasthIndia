@extends ('backend.layouts.app')

@section ('title', app_name() . ' | ' . __('labels.backend.access.hospitals.management'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('labels.backend.access.hospitals.management') }} <small class="text-muted">{{ __('labels.backend.access.hospitals.active') }}</small>
                </h4>
            </div><!--col-->

            <div class="col-sm-7">
                @include('backend.auth.hospital.includes.header-buttons')
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>{{ __('labels.backend.access.hospitals.table.name') }}</th>
                            <th>{{ __('labels.backend.access.hospitals.table.city') }}</th>
                            <th>{{ __('labels.backend.access.hospitals.table.state') }}</th>
                            <th>{{ __('labels.backend.access.hospitals.table.address') }}</th>
                            <th>{{ __('labels.backend.access.hospitals.table.active') }}</th>
                            <th>{{ __('labels.backend.access.hospitals.table.updated_at') }}</th>
                            <th>{{ __('labels.general.actions') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($hospitals as $hospital)
                            <tr>
                                <td>{{ $hospital->name }}</td>
                                <td>{{ $hospital->city }}</td>
                                <td>{{ $hospital->state }}</td>
                                <td>{{ $hospital->address }}</td>
                                <td>{!! ($hospital->active) ? '<span class="badge badge-success">'.__('labels.general.yes').'</span>' : '<span class="badge badge-danger">'.__('labels.general.no').'</span>' !!}</td>
                                <td>{{ $hospital->updated_at }}</td>
                                <td>{!! $hospital->action_buttons !!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!--col-->
        </div><!--row-->
        <div class="row">
            <div class="col-7">
                <div class="float-left">
                    {!! $hospitals->total() !!} {{ trans_choice('labels.backend.access.hospitals.table.total', $hospitals->total()) }}
                </div>
            </div><!--col-->

            <div class="col-5">
                <div class="float-right">
                    {!! $hospitals->render() !!}
                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
@endsection
