@extends('frontend.layouts.app')

@push('after-styles')
<style>
    .display-4 {
        font-size: 1.2rem;
    }
</style>
@endpush

@section('content')
<div class="row mb-4">
    <div class="col">
        <div class="card">
            <div class='row'><div class='col-3'>
            <div class="card mb-4 bg-light">
                            <img class="card-img-top" src="{{ $logged_in_user->picture }}" alt="Profile Picture">

                            <div class="card-body">
                                <h4 class="card-title">
                                    {{ $logged_in_user->name }}<br/>
                                </h4>

                                <p class="card-text">
                                    <small>
                                        <i class="fa fa-envelope-o"></i> {{ $logged_in_user->email }}<br/>
                                        <i class="fa fa-calendar-check-o"></i> {{ __('strings.frontend.general.joined') }} {{ $logged_in_user->created_at->timezone(get_user_timezone())->format('F jS, Y') }}
                                    </small>
                                </p>

                                
                            </div>
                        </div>
                        </div>
                <div class='col-3'>
            <div class="card mb-4 bg-light">
                            <img class="card-img-top" src="{{ $logged_in_user->picture }}" alt="Profile Picture">

                            <div class="card-body">
                                <h4 class="card-title">
                                    {{ $logged_in_user->name }}<br/>
                                </h4>

                                <p class="card-text">
                                    <small>
                                        <i class="fa fa-envelope-o"></i> {{ $logged_in_user->email }}<br/>
                                        <i class="fa fa-calendar-check-o"></i> {{ __('strings.frontend.general.joined') }} {{ $logged_in_user->created_at->timezone(get_user_timezone())->format('F jS, Y') }}
                                    </small>
                                </p>

                                
                            </div>
                        </div>
                        </div>
                <div class='col-3'>
            <div class="card mb-4 bg-light">
                            <img class="card-img-top" src="{{ $logged_in_user->picture }}" alt="Profile Picture">

                            <div class="card-body">
                                <h4 class="card-title">
                                    {{ $logged_in_user->name }}<br/>
                                </h4>

                                <p class="card-text">
                                    <small>
                                        <i class="fa fa-envelope-o"></i> {{ $logged_in_user->email }}<br/>
                                        <i class="fa fa-calendar-check-o"></i> {{ __('strings.frontend.general.joined') }} {{ $logged_in_user->created_at->timezone(get_user_timezone())->format('F jS, Y') }}
                                    </small>
                                </p>

                                
                            </div>
                        </div>
                        </div>
                <div class='col-3'>
            <div class="card mb-4 bg-light">
                            <img class="card-img-top" src="{{ $logged_in_user->picture }}" alt="Profile Picture">

                            <div class="card-body">
                                <h4 class="card-title">
                                    {{ $logged_in_user->name }}<br/>
                                </h4>

                                <p class="card-text">
                                    <small>
                                        <i class="fa fa-envelope-o"></i> {{ $logged_in_user->email }}<br/>
                                        <i class="fa fa-calendar-check-o"></i> {{ __('strings.frontend.general.joined') }} {{ $logged_in_user->created_at->timezone(get_user_timezone())->format('F jS, Y') }}
                                    </small>
                                </p>

                                
                            </div>
                        </div>
                        </div>
        </div><!-- card -->
    </div><!-- row -->
</div><!-- row -->

<!-- Modal -->
<div id="add_patient" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Patient</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@endsection
