@extends('frontend.layouts.app')

@section('content')
<div class="row mb-4">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <strong>
                    <i class="fa fa-dashboard"></i> {{ __('navs.frontend.test') }}
                </strong>
            </div><!--card-header-->

            <div class="card-body">
                <div class="row">
                    <div class="card-body">
                        <h4 class="card-title mb-0">
                            {{ __('labels.backend.access.prescriptions.management') }}
                            <small class="text-muted">{{__('labels.backend.access.prescriptions.create')}}</small>
                        </h4>
                        <table class="table table-stripped">
                            <thead>
                                <tr>
                                    <th>Test Name</th>
                                    <th>Prescription Name</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tboady>
                                <tr>
                                    <td colspan="3">
                                        <h5 class="text-center">No Record Found!</h5>
                                    </td>
                                </tr>
                            </tboady>
                        </table>
                    </div>


                </div><!--card-->
            </div><!--col-md-8-->
        </div><!-- row -->
    </div> <!-- card-body -->
</div><!-- card -->
</div><!-- row -->
</div><!-- row -->
@endsection

@push('after-scripts')
<script>
    $(function () {
        // Multiple images preview in browser
        var imagesPreview = function (input, placeToInsertImagePreview) {

            if (input.files) {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function (event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#files').on('change', function () {
            imagesPreview(this, 'div.gallery');
        });
    });
    </script>
    @endpush