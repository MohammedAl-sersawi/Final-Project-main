@extends('dashboard.layouts.master')
@section('styles')
    <link href="{{ asset('adminassets/assets/css/pages/wizard/wizard-1.css') }}" rel="stylesheet" type="text/css" />

    <style>
        .text-muted {
            font-size: 80% !important;
            font-weight: 400 !important;
            color: #fd397a !important;
        }

        .kt-form .kt-portlet__body .row:first-child {
            align-items: center;
        }

        .dropup .btn.dropdown-toggle:after {
            rotate: 180deg;
        }

        .input-group {
            flex-direction: row-reverse;
        }



        .input-group #kt_datepicker {
            border-radius: 0 4px 4px 0 !important;
            -webkit-border-radius: 0 4px 4px 0 !important;
            -moz-border-radius: 0 4px 4px 0 !important;
            -ms-border-radius: 0 4px 4px 0 !important;
            -o-border-radius: 0 4px 4px 0 !important;
        }

        .input-group .input-group-append .input-group-text {
            border-radius: 4px 0 0 4px !important;
            -webkit-border-radius: 4px 0 0 4px !important;
            -moz-border-radius: 4px 0 0 4px !important;
            -ms-border-radius: 4px 0 0 4px !important;
            -o-border-radius: 4px 0 0 4px !important;
        }

        @media (max-width: 1024px) {
            .form-group .col-lg-4:last-child {
                margin-top: 15px;
            }
        }

        .kt-wizard-v1 .kt-wizard-v1__wrapper .kt-form .kt-wizard-v1__content {
            border-bottom: none;
        }
    </style>
@endsection
@section('content')
    <!--begin::Portlet-->
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    Pill Tabs <small>default size</small>
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <ul class="nav nav-pills nav-pills" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#kt_tabs_8_1" role="tab">
                            Logs
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#kt_tabs_8_2" role="tab">
                            Messages
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#kt_tabs_8_3" role="tab">
                            Settings
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="kt-portlet__body">
            <div class="tab-content">
                <div class="tab-pane active" id="kt_tabs_8_1" role="tabpanel">
                    <div class="kt-portlet__body ">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12">{{ __('doctor.photo') }}</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <div class="kt-avatar kt-avatar--outline kt-avatar--circle">
                                    <div class="kt-avatar__holder"
                                        style="background-image: url({{ asset('adminassets/assets/media/users/default.jpg') }})">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group  row">
                            <label class="col-form-label col-lg-3 col-sm-12">الاسم بالعربي </label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <span>Moamme fares alserawi</span>
                            </div>
                        </div>
                        <div class="form-group  row">
                            <label class="col-form-label col-lg-3 col-sm-12">Doctor email :</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <span>Moamme fares alserawi</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="kt_tabs_8_2" role="tabpanel">




                    <!-- end:: Subheader -->

                    <!-- begin:: Content -->
                    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                        <div class="kt-portlet">
                            <div class="kt-portlet__body kt-portlet__body--fit">
                                <div class="kt-grid  kt-wizard-v1 kt-wizard-v1--white" id="kt_wizard_v1">

                                    <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v1__wrapper">
                                        <div class="kt-form" id="kt_form">
                                            <div class="kt-wizard-v1__content">
                                                <div class="kt-heading kt-heading--md">
                                                    تشخيص المريض في تاريخ (20-12-2024)
                                                </div>
                                                <div class="kt-form__section kt-form__section--first">
                                                    <div class="kt-wizard-v1__review">
                                                        <div class="kt-wizard-v1__review-item">
                                                            <div class="kt-wizard-v1__review-title">
                                                                {{ __('patient.diagnosisEn') }}
                                                            </div>
                                                            <div class="kt-wizard-v1__review-content">
                                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                                                Velit, adipisci! Odit ad repellat doloribus in ipsam odio
                                                                excepturi ullam quod sapiente saepe? Mollitia nemo officia
                                                                obcaecati fuga ipsam odio, iure necessitatibus, quia
                                                                consequuntur quibusdam nihil dolorum quos hic facere impedit
                                                                voluptas recusandae asperiores ducimus fugiat pariatur?
                                                                Aliquam veniam ipsa delectus?
                                                            </div>
                                                        </div>
                                                        <div class="kt-wizard-v1__review-item">
                                                            <div class="kt-wizard-v1__review-title">
                                                                treatments
                                                            </div>
                                                            <div class="kt-wizard-v1__review-content">
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>#</th>
                                                                            <th>name</th>
                                                                            <th>dosage</th>
                                                                            <th>frequency</th>
                                                                            <th>description</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                        @foreach ($medicines as $medicine)
                                                                            <tr>
                                                                                <th scope="row">1</th>
                                                                                <td>{{ $medicine->name }}</td>
                                                                                <td>{{ $medicine->pivot->dosage }}</td>
                                                                                <td>{{ $medicine->pivot->frequency }}</td>
                                                                                <td>{{ $medicine->pivot->description }}</td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="tab-pane " id="kt_tabs_8_3" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.When an unknown printer took a
                    galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                    took a galley of type and scrambled.
                </div>
            </div>
        </div>
    </div>

    <!--end::Portlet-->
@endsection
@section('scripts')
@endsection
