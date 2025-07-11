@extends('dashboard.layouts.master')
@section('styles')
    <style>
        .kt-chat__user {

            align-items: end;
        }

        .kt-chat__message--right .kt-chat__user {
            display: flex;
            flex-direction: row-reverse;
            align-items: end;
        }
    </style>
@endsection
@section('subheader')
    <!-- begin:: Subheader -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">{{ __('dashboard.daily-appointments') }}</h3>
                <span class="kt-subheader__separator kt-hidden"></span>
                <div class="kt-subheader__breadcrumbs">
                    <a href="" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="{{ route('doctor.dashboard') }}"
                        class="kt-subheader__breadcrumbs-link">{{ __('dashboard.dashboard') }}</a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="{{ route('doctor.appointments.index') }}"
                        class="kt-subheader__breadcrumbs-link">{{ __('dashboard.all-appointments') }}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end:: Subheader -->
@endsection
@section('content')
    <!-- begin:: Content -->

    <!--Begin::App-->
    <div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">

        <!--Begin:: App Aside Mobile Toggle-->
        <button class="kt-app__aside-close" id="kt_chat_aside_close">
            <i class="la la-close"></i>
        </button>

        <!--End:: App Aside Mobile Toggle-->

        <!--Begin:: App Aside-->
        <div class="kt-grid__item kt-app__toggle kt-app__aside kt-app__aside--lg kt-app__aside--fit" id="kt_chat_aside">

            <!--begin::Portlet-->
            <div class="kt-portlet kt-portlet--last">
                <div class="kt-portlet__body">
                    <div class="kt-searchbar">
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                        class="kt-svg-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path
                                                d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg></span></div>
                            <input type="text" class="form-control" placeholder="{{ __('chat.search') }}"
                                aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="kt-widget kt-widget--users kt-mt-20">
                        <div class="kt-scroll kt-scroll--pull">
                            <div class="kt-widget__items">






                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--end::Portlet-->
        </div>

        <!--End:: App Aside-->

        <!--Begin:: App Content-->
        <div class="kt-grid__item kt-grid__item--fluid kt-app__content" id="kt_chat_content">
            <div class="kt-chat d-none">
                <div class="kt-portlet kt-portlet--head-lg kt-portlet--last">
                    <div class="kt-portlet__head">
                        <div class="kt-chat__head ">
                            <div class="kt-chat__left">

                                <!--begin:: Aside Mobile Toggle -->
                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md kt-hidden-desktop"
                                    id="kt_chat_aside_mobile_toggle">
                                    <i class="flaticon2-open-text-book"></i>
                                </button>

                                <!--end:: Aside Mobile Toggle-->
                                <div class="dropdown dropdown-inline">
                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="flaticon-more-1"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-left dropdown-menu-md">

                                        <!--begin::Nav-->
                                        <ul class="kt-nav">
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-group"></i>
                                                    <span class="kt-nav__link-text">New Group</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-open-text-book"></i>
                                                    <span class="kt-nav__link-text">Contacts</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-rocket-1"></i>
                                                    <span class="kt-nav__link-text">Groups</span>
                                                    <span class="kt-nav__link-badge">
                                                        <span class="kt-badge kt-badge--brand kt-badge--inline">new</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-bell-2"></i>
                                                    <span class="kt-nav__link-text">Calls</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-dashboard"></i>
                                                    <span class="kt-nav__link-text">Settings</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__separator"></li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-protected"></i>
                                                    <span class="kt-nav__link-text">Help</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-bell-2"></i>
                                                    <span class="kt-nav__link-text">Privacy</span>
                                                </a>
                                            </li>
                                        </ul>

                                        <!--end::Nav-->
                                    </div>
                                </div>
                            </div>
                            <div class="kt-chat__center">
                                <div class="kt-chat__label">
                                    <a href="#" class="kt-chat__title">Jason Muller</a>
                                    <span class="kt-chat__status">
                                        <span class="kt-badge kt-badge--dot kt-badge--success"></span> Active
                                    </span>
                                </div>
                                <div class="kt-chat__pic kt-hidden">
                                    <span class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip"
                                        data-placement="right" title="Jason Muller" data-original-title="Tooltip title">
                                        <img src="{{ asset('adminassets/assets/media/users/300_12.jpg') }}"
                                            alt="image">
                                    </span>
                                    <span class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip"
                                        data-placement="right" title="Nick Bold" data-original-title="Tooltip title">
                                        <img src="{{ asset('adminassets/assets/media/users/300_11.jpg') }}"
                                            alt="image">
                                    </span>
                                    <span class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip"
                                        data-placement="right" title="Milano Esco" data-original-title="Tooltip title">
                                        <img src="{{ asset('adminassets/assets/media/users/100_14.jpg') }}"
                                            alt="image">
                                    </span>
                                    <span class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip"
                                        data-placement="right" title="Teresa Fox" data-original-title="Tooltip title">
                                        <img src="{{ asset('adminassets/assets/media/users/100_4.jpg') }}" alt="image">
                                    </span>
                                </div>
                            </div>
                            <div class="kt-chat__right">
                                <div class="dropdown dropdown-inline">
                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="flaticon2-add-1"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-md">

                                        <!--begin::Nav-->
                                        <ul class="kt-nav">
                                            <li class="kt-nav__head">
                                                Messaging
                                                <i class="flaticon2-information" data-toggle="kt-tooltip"
                                                    data-placement="right" title="Click to learn more..."></i>
                                            </li>
                                            <li class="kt-nav__separator"></li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-group"></i>
                                                    <span class="kt-nav__link-text">New Group</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-open-text-book"></i>
                                                    <span class="kt-nav__link-text">Contacts</span>
                                                    <span class="kt-nav__link-badge">
                                                        <span class="kt-badge kt-badge--brand  kt-badge--rounded-">5</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-bell-2"></i>
                                                    <span class="kt-nav__link-text">Calls</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-dashboard"></i>
                                                    <span class="kt-nav__link-text">Settings</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-protected"></i>
                                                    <span class="kt-nav__link-text">Help</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__separator"></li>
                                            <li class="kt-nav__foot">
                                                <a class="btn btn-label-brand btn-bold btn-sm" href="#">Upgrade
                                                    plan</a>
                                                <a class="btn btn-clean btn-bold btn-sm" href="#"
                                                    data-toggle="kt-tooltip" data-placement="right"
                                                    title="Click to learn more...">Learn more</a>
                                            </li>
                                        </ul>

                                        <!--end::Nav-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div class="kt-scroll kt-scroll--pull" data-mobile-height="300">
                            <div class="kt-chat__messages">
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__foot">
                        <form class="chat-form">
                            @csrf
                            <div class="kt-chat__input">
                                <div class="kt-chat__editor">
                                    <textarea name="message" class="message" style="height: 50px" placeholder="{{ __('chat.type-here') }}"></textarea>
                                </div>
                                <div class="kt-chat__toolbar">
                                    <div class="kt_chat__tools">
                                        <a href="#"><i class="flaticon2-link"></i></a>
                                        <a href="#"><i class="flaticon2-photograph"></i></a>
                                        <a href="#"><i class="flaticon2-photo-camera"></i></a>
                                    </div>
                                    <div class="kt_chat__actions">
                                        <button type="submit" id="chat__reply" data-id=""
                                            class="btn btn-brand btn-md btn-upper btn-bold chat__reply">{{ __('chat.send') }}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>

        <!--End:: App Content-->
    </div>
    <!--End::App-->

    <!-- end:: Content -->
@endsection
@section('scripts')
    <script src="{{ asset('adminassets/assets/js/pages/custom/chat/chat.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminassets/assets/js/chats.js') }}"></script>
    <script>
        $(document).ready(function() {
            loadConversations();
        });
        const loadConversations = function() {
            $.ajax({
                url: "{{ route('doctor.chats.index') }}",
                type: "GET",
                success: function(response) {
                    response.data.forEach((chat) => {
                        conversation(chat);
                    });
                },
            });
        };

        $(".chat-form").on("submit", function(e) {
            e.preventDefault();
            let msg = $(this).find("textarea").val();
            let token = $(this).find("input[name='_token']").val();
            let receiverid = $(this).find('.chat__reply').data('id');;

            $.ajax({
                url: "{{ route('doctor.chats.messages.store') }}",
                type: "POST",
                data: {
                    _token: token,
                    message: msg,
                    receiver_id: receiverid,
                },
                success: function(response) {
                    addMessage(response, "kt-chat__message--right", "kt-bg-light-brand");
                },
                error: function() {
                    alert("Failed to send message. Please try again.");
                },
            });
            $(this).find("textarea").val("");
        });
        $(document).on("click", "#chat", function(e) {
            e.preventDefault();
            let receiverId = $(this).data("id");
            $(".kt-chat__messages").empty();
            $.ajax({
                url: "{{ route('doctor.chats.messages.index', ':id') }}".replace(':id', receiverId),
                type: "GET",
                success: function(response) {
                    $('.kt-chat').removeClass('d-none');
                    $('.kt-chat').find('.chat__reply').attr('data-id', receiverId);
                    response.data.forEach((message) => {
                        let msg_class = message.sender_id == response.user_id &&
                            message.sender_type == response.user_type ?
                            "kt-chat__message--right" : "";
                        let kt_bg_class = message.sender_id == response.user_id &&
                            message.sender_type == response.user_type ?
                            "kt-bg-light-brand" : "kt-bg-light-success";
                        addMessage(message, msg_class, kt_bg_class);
                    });
                },
                error: function() {
                    alert("Failed to send message. Please try again.");
                },
            });
        });
    </script>
@endsection
