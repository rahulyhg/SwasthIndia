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

                    </div><!--col-md-4-->

                    <div class="col-md-8 order-2 order-sm-1">
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        {{__('labels.frontend.dashboard.blood_group')}}
                                    </div><!--card-header-->

                                    <div class="card-body">
                                        @if ($logged_in_user->blood_group)
                                        {{$logged_in_user->blood_group}}
                                        @else 
                                        <button class="btn btn-info"   data-toggle="modal" data-target="#add_blood_group"><i class="fa fa-plus"></i>&nbsp;&nbsp;{{__('labels.frontend.dashboard.add_blood_group')}}</button>
                                        @endif
                                    </div><!--card-body-->
                                </div><!--card-->
                            </div><!--col-md-6-->
                        </div><!--row-->
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        {{__('labels.frontend.dashboard.allergies')}}
                                    </div><!--card-header-->

                                    <div class="card-body">
                                        @if ($logged_in_user->allergies)
                                        {{$logged_in_user->allergies}}
                                        @else 
                                        <button class="btn btn-info"   data-toggle="modal" data-target="#add_allergies"><i class="fa fa-plus"></i>&nbsp;&nbsp;{{__('labels.frontend.dashboard.add_allergies')}}</button>
                                        @endif
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
                                        <button class="btn btn-warning"  data-toggle="modal" data-target="#add_patient">
                                            <i class="fa fa-stethoscope"></i>&nbsp;&nbsp;
                                            {{__('labels.frontend.dashboard.add_patient')}}
                                        </button>
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
                                        <a class="btn btn-info" href="{{ url("/user-prescription") }}"><i class="fa fa-stethoscope"></i>&nbsp;&nbsp;{{__('labels.frontend.dashboard.add_prescription')}}</a>
                                    </div><!--card-body-->
                                </div><!--card-->
                            </div><!--col-md-6-->
                        </div><!--row-->
                        
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4">
                                    <div class="card-header">
                                                {{__('labels.frontend.dashboard.notification')}}</div>
                                    <div class="card-body">
                                        <p class="card-text">No notifications found.</p>
                                    </div>
                                </div><!--card-->
                            </div>
                        </div>


                    </div><!--col-md-8-->
                </div><!-- row -->
            </div> <!-- card-body -->
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
<!-- Modal -->
<div id="add_blood_group" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">{{__('labels.frontend.dashboard.add_blood_group')}}</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        {{ html()->modelForm($logged_in_user, 'PATCH', route('frontend.user.blood-group.update'))->class('form-horizontal')->open() }}
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        {{ html()->label(__('validation.attributes.frontend.blood_group'))->for('blood_group') }}

                        {{ html()->text('blood_group')
                            ->class('form-control')
                            ->placeholder(__('validation.attributes.frontend.blood_group'))
                            ->attribute('maxlength', 12)
                            ->required() }}
                    </div><!--form-group-->
                </div><!--col-->
            </div><!--row-->
            <div class="row">
                <div class="col">
                    <div class="form-group mb-0 clearfix">
                        
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        {{ form_submit(__('labels.general.buttons.update')) }}
                    </div><!--form-group-->
                </div><!--col-->
            </div><!--row-->
        {{ html()->closeModelForm() }}
      </div>
    </div>

  </div>
</div>
<!-- Modal -->
<div id="add_allergies" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">{{__('labels.frontend.dashboard.add_allergies')}}</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        {{ html()->modelForm($logged_in_user, 'PATCH', route('frontend.user.allergy.update'))->class('form-horizontal')->open() }}
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        {{ html()->label(__('validation.attributes.frontend.allergies'))->for('allergies') }}

                        {{ html()->text('allergies')
                            ->class('form-control')
                            ->placeholder(__('validation.attributes.frontend.allergies'))
                            ->attribute('maxlength', 256)
                            ->required() }}
                    </div><!--form-group-->
                </div><!--col-->
            </div><!--row-->
            <div class="row">
                <div class="col">
                    <div class="form-group mb-0 clearfix">
                        
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        {{ form_submit(__('labels.general.buttons.update')) }}
                    </div><!--form-group-->
                </div><!--col-->
            </div><!--row-->
        {{ html()->closeModelForm() }}
      </div>
    </div>

  </div>
</div>
@endsection
