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
            <div class="card-header">
                <strong>
                    <i class="fa fa-dashboard"></i> {{ __('navs.frontend.dashboard') }}
                </strong>
            </div><!--card-header-->

            <div class="card-body">
                <div class="row">
                    <div class="col col-sm-4 order-1 order-sm-2  mb-4">
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

                                <p class="card-text">

                                    <a href="{{ route('frontend.user.account')}}" class="btn btn-info btn-sm mb-1">
                                        <i class="fa fa-user-circle-o"></i> {{ __('navs.frontend.user.account') }}
                                    </a>

                                    @can('view backend')
                                    &nbsp;<a href="{{ route ('admin.dashboard')}}" class="btn btn-danger btn-sm mb-1">
                                        <i class="fa fa-user-secret"></i> {{ __('navs.frontend.user.administration') }}
                                    </a>
                                    @endcan
                                </p>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header">
                                        {{__('labels.frontend.dashboard.notification')}}</div>
                            <div class="card-body">
                                <p class="card-text">No notifications found.</p>
                            </div>
                        </div><!--card-->
                    </div><!--col-md-4-->

                    <div class="col-md-8 order-2 order-sm-1">
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        {{__('labels.frontend.dashboard.blood_group')}}
                                    </div><!--card-header-->

                                    <div class="card-body">
                                        <a class="btn btn-danger" href=""><i class="fa fa-plus"></i>&nbsp;&nbsp;{{__('labels.frontend.dashboard.add_blood_group')}}</a>
                                    </div><!--card-body-->
                                </div><!--card-->
                            </div><!--col-md-6-->
                        </div><!--row-->
                        @if ($logged_in_user->isDoctor())
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        {{__('labels.frontend.dashboard.patient')}}
                                    </div><!--card-header-->

                                    <div class="card-body">
                                        <button class="btn btn-info">
                                            <i class="fa fa-plus-circle"></i>&nbsp;&nbsp;{{__('labels.frontend.dashboard.view_patient')}}</button>
                                        <a class="btn btn-success" href="{{ url("/user-prescription") }}">
                                            <i class="fa fa-stethoscope"></i>&nbsp;&nbsp;{{__('labels.frontend.dashboard.add_patient')}}</a>
                                    </div><!--card-body-->
                                </div><!--card-->
                            </div><!--col-md-6-->
                        </div><!--row-->
                        @endif
                        
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        {{__('labels.frontend.dashboard.prescription')}}
                                    </div><!--card-header-->

                                    <div class="card-body">
                                        <a class="btn btn-danger" href="{{ url("/user-prescription") }}"><i class="fa fa-stethoscope"></i>&nbsp;&nbsp;{{__('labels.frontend.dashboard.add_prescription')}}</a>
                                    </div><!--card-body-->
                                </div><!--card-->
                            </div><!--col-md-6-->
                        </div><!--row-->

                        <div class="row">
                            <div class="col">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        {{__('labels.frontend.dashboard.healthy_india')}}
                                    </div><!--card-header-->

                                    <div class="card-body display-4">
                                        <blockquote class="blockquote">
                                            <em>Healthy india(i.e, Swasth India) is an effort for storing the complete information of a patient's medical background
                                                ,doctor's information and hospital's information.</em>

                                            <br><br>Some of the features of this application are mentioned below
                                            <ul class="list-unstyled">
                                            <ul>     
                                            <li>Complete health record (User)</li>
                                            <li>Get patient record (Doctor)</li>
                                            <li>Hide diseases (User)</li>
                                            <li>Become a doctor</li>
                                            <li>Aadhar card based authentication</li>
                                            <li>Instant Consultation on any issues from doctor</li>
                                            <li>Find the best doctor in your nearest area or desired area</li>
                                            <li>Check doctor’s availability and book the appointment</li>
                                            <li>Get mail/SMS notification alert if added by doctor or user itself</li>
                                            </ul>
                                        </blockquote>
                                    </div><!--card-body-->
                                </div><!--card-->
                            </div><!--col-md-6-->

                        </div><!--row-->

                    </div><!--col-md-8-->
                </div><!-- row -->
            </div> <!-- card-body -->
        </div><!-- card -->
    </div><!-- row -->
</div><!-- row -->
@endsection
