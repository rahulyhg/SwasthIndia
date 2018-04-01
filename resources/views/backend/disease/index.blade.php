@extends ('backend.layouts.app')

@section ('title', app_name() . ' | ' . __('labels.backend.access.disease.management'))

@section('breadcrumb-links')
    @include('backend.disease.includes.breadcrumb-links')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('labels.backend.access.disease.management') }} <small class="text-muted">{{ __('labels.backend.access.disease.active') }}</small>
                </h4>
            </div><!--col-->

            <div class="col-sm-7">
                @include('backend.disease.includes.header-buttons')
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>{{ __('labels.backend.access.disease.table.name') }}</th>
                            <th>{{ __('labels.backend.access.disease.table.type') }}</th>
                            <th>{{ __('labels.backend.access.disease.table.created_at') }}</th>
                            <th>{{ __('labels.backend.access.disease.table.updated_at') }}</th>
                            <th>{{ __('labels.general.actions') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($diseases as $disease)
                            <tr>
                                <td>{{ $disease->name }}</td>
                                <td>{{ $disease->type }}</td>
                                <td>{{ $disease->created_at }}</td>
                                <td>{{ $disease->updated_at }}</td>
                                <td>{!! $disease->edit_button !!}</td>
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
                    {!! $diseases->total() !!} {{ trans_choice('labels.backend.access.disease.table.total', $diseases->total()) }}
                </div>
            </div><!--col-->

            <div class="col-5">
                <div class="float-right">
                    {!! $diseases->render() !!}
                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
@endsection
