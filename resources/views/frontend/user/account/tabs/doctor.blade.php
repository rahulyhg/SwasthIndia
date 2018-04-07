<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        @php
        $doctor = $logged_in_user->doctor()->first();
        @endphp
        <tr>
            <th>{{ __('labels.frontend.user.doctor.degree') }}</th>
            <td>{{$doctor->degree}}</td>
        </tr>
        <tr>
            <th>{{ __('labels.frontend.user.doctor.surgeon') }}?</th>
            <td>{{ $doctor->surgeon ? __('labels.common.yes') : __('labels.common.no') }}</td>
        </tr>
        <tr>
            <th>{{ __('labels.frontend.user.doctor.specialisation') }}</th>
            <td>{{ $doctor->specialisation }}</td>
        </tr>
    </table>
</div>