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
            <div class='row'>
                <div class='col-3'>
                    <div class="card mb-4 bg-light">
                        <img class="card-img-top" src="{{ $logged_in_user->picture }}" alt="Profile Picture">

                        <div class="card-body">
                            <h4 class="card-title">
                                Patient 1<br/>
                            </h4>

                            <p class="card-text">
                                <small>
                                    <i class="fa fa-calendar-check-o"></i> Last Visited {{ $logged_in_user->created_at->timezone(get_user_timezone())->format('F jS, Y') }}
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
                                Patient 2<br/>
                            </h4>

                            <p class="card-text">
                                <small>
                                    <i class="fa fa-calendar-check-o"></i> Last Visited {{ $logged_in_user->created_at->timezone(get_user_timezone())->format('F jS, Y') }}
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
                                Patient 3<br/>
                            </h4>

                            <p class="card-text">
                                <small>
                                    <i class="fa fa-calendar-check-o"></i> Last Visited {{ $logged_in_user->created_at->timezone(get_user_timezone())->format('F jS, Y') }}
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
                                Patient 4<br/>
                            </h4>

                            <p class="card-text">
                                <small>
                                    <i class="fa fa-calendar-check-o"></i> Last Visited {{ $logged_in_user->created_at->timezone(get_user_timezone())->format('F jS, Y') }}
                                </small>
                            </p>


                        </div>
                    </div>
                </div>
            </div>
        </div><!-- card -->
    </div><!-- row -->
</div><!-- row -->

@endsection
