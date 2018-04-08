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
                        <b>Namaskar, {{ __('strings.frontend.welcome_to', ['place' => app_name()]) }}! </b><br/><br/>
                        
                        <p>Swasth India is an health care application which will help every Indian to keep track of their health records. The idea is to create a central database of health records. This can aid health practitioners in providing better and more accurate treatment by looking at the medical history of patients. </p>
                        <p>This will also reduce the time required to attend a patient. So while we work on increasing the doctors to patient ratio in our country, this can increase the number of patients a doctor can attend to.</p>

                        <p>Swasth India is not just about that but it is a assortment of multiple solutions within one application.</p>

                        Some of the features of this application are mentioned below
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
