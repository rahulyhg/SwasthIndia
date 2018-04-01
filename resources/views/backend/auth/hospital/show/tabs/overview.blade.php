<div class="col">
    <div class="table-responsive">
        <table class="table table-hover">

            <tr>
                <th>{{ __('labels.backend.access.hospitals.tabs.content.overview.name') }}</th>
                <td>{{ $hospital->name }}</td>
            </tr>
            
            <tr>
                <th>{{ __('labels.backend.access.hospitals.tabs.content.overview.city') }}</th>
                <td>{{ $hospital->city }}</td>
            </tr>
            
            <tr>
                <th>{{ __('labels.backend.access.hospitals.tabs.content.overview.state') }}</th>
                <td>{{ $hospital->state }}</td>
            </tr>
            
            <tr>
                <th>{{ __('labels.backend.access.hospitals.tabs.content.overview.address') }}</th>
                <td>{{ $hospital->address }}</td>
            </tr>

            <tr>
                <th>{{ __('labels.backend.access.hospitals.tabs.content.overview.status') }}</th>
                <td>{!! $hospital->status_label !!}</td>
            </tr>
        </table>
    </div>
</div><!--table-responsive-->