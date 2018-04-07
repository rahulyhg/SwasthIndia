@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>{{ __('strings.backend.dashboard.welcome') }} {{ $logged_in_user->name }}!</strong>
                </div><!--card-header-->
                <div class="card-block">
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
                </div><!--card-block-->
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->
@endsection
