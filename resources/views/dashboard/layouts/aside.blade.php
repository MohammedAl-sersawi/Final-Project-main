<!-- begin:: Aside -->
<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">

    <!-- begin:: Aside -->
    <div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
        <div class="kt-aside__brand-logo">
            @if (Auth::guard('admin')->check())
                <a href="{{ route('admin.dashboard') }}">
                    <img alt="Logo" src="{{ asset('adminassets/assets/media/logos/logo-light.png') }}" />
                </a>
            @elseif (Auth::guard('doctor')->check())
                <a href="{{ route('doctor.dashboard') }}">
                    <img alt="Logo" src="{{ asset('adminassets/assets/media/logos/logo-light.png') }}" />
                </a>
            @elseif(Auth::guard('pharmacist')->check())
                <a href="{{ route('pharmacist.dashboard') }}">
                    <img alt="Logo" src="{{ asset('adminassets/assets/media/logos/logo-light.png') }}" />
                </a>
            @elseif (Auth::guard('web')->check())
                <a href="{{ route('patient.dashboard') }}">
                    <img alt="Logo" src="{{ asset('adminassets/assets/media/logos/logo-light.png') }}" />
                </a>
            @endif
        </div>
        <div class="kt-aside__brand-tools">
            <button class="kt-aside__brand-aside-toggler" id="kt_aside_toggler">
                <span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path
                                d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
                                fill="#000000" fill-rule="nonzero"
                                transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) " />
                            <path
                                d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3"
                                transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) " />
                        </g>
                    </svg></span>
                <span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path
                                d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
                                fill="#000000" fill-rule="nonzero" />
                            <path
                                d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3"
                                transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
                        </g>
                    </svg></span>
            </button>
        </div>
    </div>

    <!-- end:: Aside -->

    <!-- begin:: Aside Menu -->
    <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
        <div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1"
            data-ktmenu-dropdown-timeout="500">
            @if (Auth::guard('admin')->check())
                <ul class="kt-menu__nav ">
                    <li class="kt-menu__item {{ request()->routeIs('admin.dashboard') ? 'kt-menu__item--active' : '' }}"
                        aria-haspopup="true"><a href="{{ route('admin.dashboard') }}" class="kt-menu__link "><i
                                id="kt-menu__link-icon" class="kt-menu__link-icon flaticon-home"></i><span
                                class="kt-menu__link-text">{{ __('dashboard.dashboard') }}</span></a></li>
                    <li class="kt-menu__section ">
                        <h4 class="kt-menu__section-text">{{ __('dashboard.services') }}</h4>
                        <i class="kt-menu__section-icon flaticon-more-v2"></i>
                    </li>
                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                        data-ktmenu-submenu-toggle="hover"><a href="{{ route('admin.departments.index') }}"
                            class="kt-menu__link kt-menu__toggle"><i
                                class="kt-menu__link-icon flaticon-graphic"></i><span
                                class="kt-menu__link-text">{{ __('dashboard.departments') }}</span></a>
                    </li>
                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                        data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                            class="kt-menu__link kt-menu__toggle"><i
                                class="kt-menu__link-icon flaticon-graphic"></i><span
                                class="kt-menu__link-text">{{ __('dashboard.doctors') }}</span><i
                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                            <ul class="kt-menu__subnav">
                                <li class="kt-menu__item " aria-haspopup="true"><a
                                        href="{{ route('admin.doctors.index') }}" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">{{ __('dashboard.all-doctors') }}</span></a>
                                </li>
                                <li class="kt-menu__item " aria-haspopup="true"><a
                                        href="{{ route('admin.doctors.create') }}" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">{{ __('dashboard.add-new-doctor') }}</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                        data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                            class="kt-menu__link kt-menu__toggle"><i
                                class="kt-menu__link-icon flaticon-graphic"></i><span
                                class="kt-menu__link-text">{{ __('dashboard.pharmacies') }}</span><i
                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                            <ul class="kt-menu__subnav">
                                <li class="kt-menu__item " aria-haspopup="true"><a
                                        href="{{ route('admin.pharmacies.index') }}" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">{{ __('dashboard.all-pharmacies') }}</span></a>
                                </li>
                                <li class="kt-menu__item " aria-haspopup="true"><a
                                        href="{{ route('admin.pharmacies.create') }}" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">{{ __('dashboard.add-new-pharmacy') }}</span></a>
                                </li>
                                <li class="kt-menu__item " aria-haspopup="true"><a
                                        href="{{ route('admin.pharmacists.index') }}" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">{{ __('dashboard.all-pharmacists') }}</span></a>
                                </li>
                                <li class="kt-menu__item " aria-haspopup="true"><a
                                        href="{{ route('admin.pharmacists.create') }}" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">{{ __('dashboard.add-new-pharmacist') }}</span></a>
                                </li>
                                <li class="kt-menu__item " aria-haspopup="true"><a
                                        href="{{ route('admin.medicines.index') }}" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">{{ __('dashboard.medicines') }}</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                        data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                            class="kt-menu__link kt-menu__toggle"><i
                                class="kt-menu__link-icon flaticon-graphic"></i><span
                                class="kt-menu__link-text">{{ __('dashboard.laps') }}</span><i
                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                            <ul class="kt-menu__subnav">
                                <li class="kt-menu__item " aria-haspopup="true"><a
                                        href="{{ route('admin.laps.index') }}" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">{{ __('dashboard.all-laps') }}</span></a>
                                </li>
                                <li class="kt-menu__item " aria-haspopup="true"><a
                                        href="{{ route('admin.laps.create') }}" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">{{ __('dashboard.add-new-lap') }}</span></a>
                                </li>
                                <li class="kt-menu__item " aria-haspopup="true"><a
                                        href="{{ route('admin.tests.index') }}" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">{{ __('dashboard.tests') }}</span></a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="kt-menu__section ">
                        <h4 class="kt-menu__section-text">{{ __('dashboard.services') }}</h4>
                        <i class="kt-menu__section-icon flaticon-more-v2"></i>
                    </li>
                    <li class="kt-menu__item  kt-menu__item--submenu
                    {{ str_contains(request()->url(), 'services') ? 'kt-menu__item--open' : '' }}"
                        aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                            class="kt-menu__link kt-menu__toggle"><i
                                class="kt-menu__link-icon flaticon-graphic"></i><span
                                class="kt-menu__link-text">{{ __('dashboard.services') }}</span><i
                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                            <ul class="kt-menu__subnav">
                                <li class="kt-menu__item {{ request()->routeIs('admin.services.index') ? 'kt-menu__item--active' : '' }}"
                                    aria-haspopup="true"><a href="{{ route('admin.services.index') }}"
                                        class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">{{ __('dashboard.single-service') }}</span></a>
                                </li>
                                <li class="kt-menu__item {{ request()->routeIs('admin.group-services.index') ? 'kt-menu__item--active' : '' }}"
                                    aria-haspopup="true"><a href="{{ route('admin.group-services.index') }}"
                                        class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">{{ __('dashboard.group-service') }}</span></a>
                                </li>
                                <li class="kt-menu__item kt-menu__item--submenu" aria-haspopup="true"
                                    data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                        class="kt-menu__link kt-menu__toggle"><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">{{ __('dashboard.ambulances') }}</span><i
                                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="kt-menu__submenu " kt-hidden-height="160"
                                        style="display: none; overflow: hidden;"><span class="kt-menu__arrow"></span>
                                        <ul class="kt-menu__subnav">
                                            <li class="kt-menu__item " aria-haspopup="true"><a
                                                    href="{{ route('admin.ambulances.index') }}"
                                                    class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">{{ __('dashboard.ambulances') }}</span></a>
                                            </li>
                                            <li class="kt-menu__item" aria-haspopup="true"><a
                                                    href="{{ route('admin.drivers.index') }}"
                                                    class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">{{ __('dashboard.drivers') }}</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                        data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                            class="kt-menu__link kt-menu__toggle"><i
                                class="kt-menu__link-icon flaticon-graphic"></i><span
                                class="kt-menu__link-text">{{ __('dashboard.patients') }}</span><i
                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                            <ul class="kt-menu__subnav">
                                <li class="kt-menu__item " aria-haspopup="true"><a
                                        href="{{ route('admin.patients.index') }}" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">{{ __('dashboard.all-patients') }}</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="kt-menu__section ">
                        <h4 class="kt-menu__section-text">{{ __('dashboard.services') }}</h4>
                        <i class="kt-menu__section-icon flaticon-more-v2"></i>
                    </li>
                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                        data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                            class="kt-menu__link kt-menu__toggle"><i
                                class="kt-menu__link-icon flaticon-graphic"></i><span
                                class="kt-menu__link-text">{{ __('dashboard.appointments') }}</span><i
                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                            <ul class="kt-menu__subnav">
                                <li class="kt-menu__item " aria-haspopup="true"><a
                                        href="{{ route('admin.appointments.index') }}" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">{{ __('dashboard.all-appointments') }}</span></a>
                                </li>
                                <li class="kt-menu__item kt-menu__item--submenu" aria-haspopup="true"
                                    data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                        class="kt-menu__link kt-menu__toggle"><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">{{ __('dashboard.invoices') }}</span><i
                                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="kt-menu__submenu " kt-hidden-height="160"
                                        style="display: none; overflow: hidden;"><span class="kt-menu__arrow"></span>
                                        <ul class="kt-menu__subnav">
                                            <li class="kt-menu__item " aria-haspopup="true"><a
                                                    href="{{ route('admin.invoices.index') }}"
                                                    class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">{{ __('dashboard.all-invoices') }}</span></a>
                                            </li>
                                            <li class="kt-menu__item" aria-haspopup="true"><a
                                                    href="{{ route('admin.invoices.create') }}"
                                                    class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">{{ __('dashboard.add-new-invoice') }}</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            @elseif (Auth::guard('doctor')->check())
                <ul class="kt-menu__nav ">
                    <li class="kt-menu__item {{ request()->routeIs('doctor.dashboard') ? 'kt-menu__item--active' : '' }}"
                        aria-haspopup="true"><a href="{{ route('doctor.dashboard') }}" class="kt-menu__link "><i
                                id="kt-menu__link-icon" class="kt-menu__link-icon flaticon-home"></i><span
                                class="kt-menu__link-text">{{ __('dashboard.dashboard') }}</span></a></li>
                    <li class="kt-menu__section ">
                        <h4 class="kt-menu__section-text">{{ __('dashboard.services') }}</h4>
                        <i class="kt-menu__section-icon flaticon-more-v2"></i>
                    </li>

                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                        data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                            class="kt-menu__link kt-menu__toggle"><i
                                class="kt-menu__link-icon fa fa-user-injured"></i><span
                                class="kt-menu__link-text">{{ __('dashboard.patients') }}</span><i
                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                            <ul class="kt-menu__subnav">
                                <li class="kt-menu__item " aria-haspopup="true"><a
                                        href="{{ route('doctor.appointments.index') }}" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">{{ __('dashboard.all-patients') }}</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                        data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                            class="kt-menu__link kt-menu__toggle"><i
                                class="kt-menu__link-icon flaticon-time-3"></i><span
                                class="kt-menu__link-text">{{ __('dashboard.appointments') }}</span><i
                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                            <ul class="kt-menu__subnav">
                                <li class="kt-menu__item " aria-haspopup="true"><a
                                        href="{{ route('doctor.appointments.index') }}" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">{{ __('dashboard.all-appointments') }}</span></a>
                                </li>
                                <li class="kt-menu__item " aria-haspopup="true"><a
                                        href="{{ route('doctor.appointments.dailyAppointments') }}"
                                        class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">{{ __('dashboard.daily-appointments') }}</span></a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="kt-menu__item " aria-haspopup="true"><a href="{{ route('doctor.chats.index') }}"
                            class="kt-menu__link ">
                            <i class="kt-menu__link-icon flaticon-chat-1"></i>
                            <span class="kt-menu__link-text">{{ __('dashboard.chats') }}</span></a></li>
                </ul>
            @elseif (Auth::guard('web')->check())
                <ul class="kt-menu__nav ">
                    <li class="kt-menu__item {{ request()->routeIs('patient.dashboard') ? 'kt-menu__item--active' : '' }}"
                        aria-haspopup="true"><a href="{{ route('patient.dashboard') }}" class="kt-menu__link "><i
                                id="kt-menu__link-icon" class="kt-menu__link-icon flaticon-home"></i><span
                                class="kt-menu__link-text">{{ __('dashboard.dashboard') }}</span></a></li>
                    <li class="kt-menu__section ">
                        <h4 class="kt-menu__section-text">{{ __('dashboard.services') }}</h4>
                        <i class="kt-menu__section-icon flaticon-more-v2"></i>
                    </li>


                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                        data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                            class="kt-menu__link kt-menu__toggle"><i
                                class="kt-menu__link-icon flaticon-calendar-with-a-clock-time-tools"></i><span
                                class="kt-menu__link-text">{{ __('dashboard.appointments') }}</span><i
                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                            <ul class="kt-menu__subnav">
                                <li class="kt-menu__item " aria-haspopup="true"><a
                                        href="{{ route('patient.appointments.index') }}" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">{{ __('dashboard.all-appointments') }}</span></a>
                                </li>
                                <li class="kt-menu__item " aria-haspopup="true"><a
                                        href="{{ route('patient.appointments.create') }}" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">{{ __('dashboard.add-new-appointment') }}</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="kt-menu__item " aria-haspopup="true"><a href="{{ route('doctor.chats.index') }}"
                            class="kt-menu__link ">
                            <i class="kt-menu__link-icon flaticon-list-1"></i>
                            <span class="kt-menu__link-text">{{ __('dashboard.diagnosis') }}</span></a></li>


                </ul>
            @elseif (Auth::guard('pharmacist')->check())
                <ul class="kt-menu__nav ">
                    <li class="kt-menu__item {{ request()->routeIs('pharmacist.dashboard') ? 'kt-menu__item--active' : '' }}"
                        aria-haspopup="true"><a href="{{ route('patient.dashboard') }}" class="kt-menu__link "><i
                                id="kt-menu__link-icon" class="kt-menu__link-icon flaticon-home"></i><span
                                class="kt-menu__link-text">{{ __('dashboard.dashboard') }}</span></a></li>
                    <li class="kt-menu__section ">
                        <h4 class="kt-menu__section-text">{{ __('dashboard.services') }}</h4>
                        <i class="kt-menu__section-icon flaticon-more-v2"></i>
                    </li>
                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                        data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                            class="kt-menu__link kt-menu__toggle"><i
                                class="kt-menu__link-icon flaticon-graphic"></i><span
                                class="kt-menu__link-text">{{ __('dashboard.medicines') }}</span><i
                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                            <ul class="kt-menu__subnav">
                                <li class="kt-menu__item " aria-haspopup="true"><a
                                        href="{{ route('pharmacist.medicines.index') }}" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">{{ __('dashboard.medicines') }}</span></a>
                                </li>
                                <li class="kt-menu__item " aria-haspopup="true"><a
                                        href="{{ route('pharmacist.dashboard') }}" class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">{{ __('dashboard.add-new-medicines') }}</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            @elseif (Auth::guard('lap')->check())
            @endif
        </div>
    </div>

    <!-- end:: Aside Menu -->
</div>

<!-- end:: Aside -->
