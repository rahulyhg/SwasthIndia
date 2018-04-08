@extends('frontend.layouts.app')

@section('title', app_name() . ' | '.__('navs.general.home'))
@section('content')
    <div class="row mb-4">
        <div class="col header">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-home"></i> {{ app_name() }}
                </div>
                <div class="card-body">
                    <blockquote class="blockquote">
                        Namaskar, {{ __('strings.frontend.welcome_to', ['place' => app_name()]) }}! <br/>
                        <em>Swasth India(i.e, Healthy india) is an effort for storing the complete information of a patient's medical background
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
                </div>
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->

@endsection
