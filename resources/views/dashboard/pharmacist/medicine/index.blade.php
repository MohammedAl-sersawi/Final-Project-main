@extends('dashboard.layouts.master')
@section('title', 'medicines')
@section('styles')
    <style>
        .modal-footer {
            justify-content: space-between;
        }

        #statusForm .form-group {
            flex-direction: row-reverse;
            align-items: center;
        }

        .row-group {
            justify-content: space-between !important;
            margin: 0 !important;
        }

        .row-group .form-group {
            width: calc(50% - 5px);
        }

        .row-group .form-group:first-child {
            margin-right: 10px
        }

        .dropup .btn.dropdown-toggle:after {
            rotate: 180deg;
        }

        .modal-body #kt_form_2 .kt-portlet__body .add-medicine-btn {
            width: 100%;
        }
    </style>
@endsection
@section('content')
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                    <i class="kt-font-brand flaticon2-line-chart"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    Column Rendering
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions">
                        <div class="dropdown dropdown-inline">
                            <button type="button" class="btn btn-default btn-icon-sm dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-download"></i> Export
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <ul class="kt-nav">
                                    <li class="kt-nav__section kt-nav__section--first">
                                        <span class="kt-nav__section-text">Choose an option</span>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-print"></i>
                                            <span class="kt-nav__link-text">Print</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-copy"></i>
                                            <span class="kt-nav__link-text">Copy</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                            <span class="kt-nav__link-text">Excel</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-file-text-o"></i>
                                            <span class="kt-nav__link-text">CSV</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                            <span class="kt-nav__link-text">PDF</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        &nbsp;

                        <a href="javascript:;" data-toggle="modal" data-target="#kt_modal_4_2" id="create"
                            class="btn btn-brand btn-elevate btn-icon-sm">
                            <i class="la la-plus"></i>{{ __('dashboard.add-new-medicine') }} </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="kt-portlet__body">
            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>name</th>
                        <th>code</th>
                        <th>quantity</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>

            <!--end: Datatable -->
        </div>
    </div>
    <!--begin::Modal -->
    @include('dashboard.pharmacist.medicine._form')
    <!--end::Modal -->
    <!--begin::Modal -->
    <div class="modal fade" id="kt_modal_6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <form method="POST" class="uploadForm" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="custom-file">
                            <input type="file" name="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">اختر ملف</label>
                            <div class="error-message text-danger mt-2" style="display: none;"></div>
                        </div>
                    </div>
                </form>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="saveChangesBtn">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal -->
@endsection
@section('subheader')
    <!-- begin:: Subheader -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">{{ __('dashboard.doctors') }}</h3>
                <span class="kt-subheader__separator kt-hidden"></span>
                <div class="kt-subheader__breadcrumbs">
                    <a href="" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="{{ route('pharmacist.dashboard') }}"
                        class="kt-subheader__breadcrumbs-link">{{ __('dashboard.dashboard') }}</a>

                </div>
            </div>
        </div>
    </div>
    <!-- end:: Subheader -->
@endsection
@section('scripts')
    <script src="{{ asset('adminassets/assets/plugins/custom/datatables.net/js/jquery.dataTables.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('adminassets/assets/plugins/custom/datatables.net-bs4/js/dataTables.bootstrap4.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('adminassets/assets/plugins/custom/datatables.net-responsive/js/dataTables.responsive.min.js') }}"
        type="text/javascript"></script>
    <script
        src="{{ asset('adminassets/assets/plugins/custom/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('adminassets/assets/js/pages/crud/forms/validation/form-widgets.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('adminassets/assets/js/pages/components/extended/blockui.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminassets/assets/js/pages/crud/forms/widgets/bootstrap-touchspin.js') }}"
        type="text/javascript"></script>


    <script>
        $(document).ready(function() {
            $('#kt_datepicker_2').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                orientation: 'bottom auto',
                todayHighlight: true,
            });
            var table = $('#kt_table_1');
            loadMedicines();
            table.DataTable({
                responsive: true,
                ajax: {
                    route: "{!! route('pharmacist.medicines.index') !!}",
                    type: 'GET',
                    data: {
                        pagination: {
                            perpage: 50,
                        },
                    },
                },
                columns: [{
                        data: 'id',
                        title: "{{ __('datatable.id') }}"
                    },
                    {
                        data: 'name',
                        title: "{{ __('datatable.name') }}"
                    },
                    {
                        data: 'code',
                        title: "{{ __('datatable.code') }}"
                    },
                    {
                        data: 'quantity',
                        title: "{{ __('datatable.quantity') }}"
                    },
                    {
                        data: 'actions',
                        title: "{{ __('datatable.actions') }}",
                        orderable: false,
                        searchable: false
                    },
                ],
                order: [
                    [0, 'desc']
                ],
                language: {
                    "lengthMenu": "{{ __('datatable.lengthMenu') }}",
                    "zeroRecords": "{{ __('datatable.zeroRecords') }}",
                    "info": "{{ __('datatable.info') }}",
                    "infoEmpty": "{{ __('datatable.infoEmpty') }}",
                    "infoFiltered": "{{ __('datatable.infoFiltered') }}",
                    "search": "{{ __('datatable.search') }}",
                    "paginate": {
                        "first": "{{ __('datatable.paginate.first') }}",
                        "last": "{{ __('datatable.paginate.last') }}",
                        "next": "{{ __('datatable.paginate.next') }}",
                        "previous": "{{ __('datatable.paginate.previous') }}"
                    },
                    "loadingRecords": "{{ __('datatable.loadingRecords') }}",
                    "processing": "{{ __('datatable.processing') }}",
                }
            });

            function loadMedicines() {
                $.ajax({
                    url: '{{ route('pharmacist.medicines.get') }}',
                    type: 'GET',
                    success: function(response) {
                        $('select[name="code"]').each(function() {
                            const medicineSelect = $(this);
                            medicineSelect.empty();
                            medicineSelect.append(
                                '<option selected disabled >اختر دواء</option>');
                            response.forEach(function(medicine) {
                                medicineSelect.append(
                                    `<option data-name="${medicine.name}" value="${medicine.id}">${medicine.code}</option>`
                                );
                            });
                            medicineSelect.selectpicker('refresh');
                        });
                    },
                    error: function(xhr) {
                        Swal.fire({
                            icon: 'error',
                            title: 'خطأ',
                            text: 'حدث خطأ أثناء تحميل الأدوية!',
                            confirmButtonText: 'موافق'
                        });
                    }
                });
            }
            $(document).on('change', '.code', function() {
                var selectedName = $(this).find(':selected').data('name');
                $(this).closest('tr').find('input[name="name"]').val(selectedName);
            });
            let medicineCount = 0;
            let newRow =
                `<tr class="new-medicine">
                    <th scope="row" class="medicine-count">1</th>
                    <td>
                        <div style="min-width: 200px" class="bootstrap-select-wrapper  ">
                            <div class="dropdown bootstrap-select  form-control kt-bootstrap-select dropup">
                                <select class="form-control code" id="select_code" name="code" data-live-search="true">
                                    <option disabled selected>Enter The Code</option>
                                </select>
                            </div>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="name"
                            placeholder="Name" readonly disabled>
                    </td>
                    <td>
                        <input id="kt_touchspin_3" type="text" class="form-control quantity"
                        value="1" name="quantity" placeholder="Select Quantity" type="text">
                    </td>
                    <td>
                        <button class="btn btn-sm btn-icon btn-icon-md btn-primary confirm-medicine"><i
                        class="la la-check"></i></button>
                        <button class="btn btn-sm btn-icon btn-icon-md btn-danger remove-medicine"><i
                        class="la la-close"></i></button>
                    </td>
                </tr>`;
            $('.add-medicine-btn').click(function() {
                if ($('tr.new-medicine').length > 0) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'تحذير',
                        text: 'يرجى تأكيد الخدمة الحالية أولاً!',
                        confirmButtonText: 'موافق'
                    });
                    return;
                }


                $('table.medicines-table tbody').append(newRow);
                $('input#kt_touchspin_3').TouchSpin({
                    buttondown_class: "btn btn-secondary",
                    buttonup_class: "btn btn-secondary",
                    min: 1,
                    max: 100,
                    step: 1,
                    decimals: 0,
                    boostat: 5,
                    maxboostedstep: 10,
                });
                $('select[name="medicine"]').selectpicker('refresh');
                loadMedicines();
                updateRowNumbers();
            });
            $(document).on('click', '.confirm-medicine', function(e) {
                e.preventDefault();
                const row = $(this).closest('tr');
                const select = row.find('.code');
                const selectedOption = select.find('option:selected');
                if (!selectedOption.val()) {
                    Swal.fire({
                        icon: 'error',
                        title: 'خطأ',
                        text: 'يرجى اختيار دواء!',
                        confirmButtonText: 'موافق'
                    });
                    return;
                }
                const quantity = row.find('input.quantity').val();
                if (!quantity || quantity.trim() === '') {
                    Swal.fire({
                        icon: 'error',
                        title: 'خطأ',
                        text: 'يرجى إدخال الكمية!',
                        confirmButtonText: 'موافق'
                    });
                    return;
                }
                const medicinecode = select.find('option:selected').text();
                const medicineId = select.find('option:selected').val();
                const readOnlyInput =
                    `<input type="text" class="form-control" name="medicine" data-id="${medicineId}" value="${medicinecode}" readonly disabled />`;
                const Quantity = row.find('input[name="quantity"]').val();
                const QuantityInput =
                    `<input type="number" class="form-control" name="quantity" value="${Quantity}" readonly disabled />`;
                row.find('td').first().html(readOnlyInput);
                row.find('td').eq(2).html(QuantityInput);
                row.find('.medicine').remove();
                row.find('.confirm-medicine').remove();
                row.removeClass('new-medicine').addClass('medicine');
                updateRowNumbers();
            });
            $(document).on('click', '.remove-medicine', function(event) {
                event.preventDefault();
                const row = $(this).closest('tr');
                const rowCount = $('table.medicines-table tbody tr').length;
                if (rowCount === 1) {
                    Swal.fire({
                        title: 'إفراغ البيانات',
                        text: 'هذا هو الصف الوحيد المتبقي. هل تريد إفراغ الجدول؟',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'نعم، إفراغ!',
                        cancelButtonText: 'لا، إلغاء'
                    }).then(function(result) {
                        if (result.value) {
                            row.find('select.code').val(null).selectpicker('refresh');
                            row.find('input[name="name"]').val('').prop('readonly', false).prop(
                                'disabled', false);
                            row.ri
                            const kt_touchspin_3 = `
                            <input id="kt_touchspin_3" type="text" class="form-control quantity"
                                    value="1" name="quantity" placeholder="Select Quantity" type="text">`;
                            row.find('td').eq(2).html(kt_touchspin_3);
                            $('input#kt_touchspin_3').TouchSpin({
                                buttondown_class: "btn btn-secondary",
                                buttonup_class: "btn btn-secondary",
                                min: 1,
                                max: 100,
                                step: 1,
                                decimals: 0,
                                boostat: 5,
                                maxboostedstep: 10,
                            });
                            const buttonsHtml = `
                            <button class="btn btn-sm btn-icon btn-icon-md btn-primary confirm-medicine"><i class="la la-check"></i></button>
                            <button class="btn btn-sm btn-icon btn-icon-md btn-danger remove-medicine"><i class="la la-close"></i></button>
                            `;
                            row.find('td').last().html(buttonsHtml);
                            const newSelect = `<select class="form-control medicine" name="medicine" data-live-search="true">
                            <option disabled selected>اختر دواء</option>
                            </select>`;
                            row.find('td').first().html(newSelect);
                            loadMedicines();
                        }
                    });
                } else {
                    Swal.fire({
                        title: 'تأكيد الحذف',
                        text: 'هل أنت متأكد أنك تريد حذف هذا الدواء؟',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'نعم، حذف!',
                        cancelButtonText: 'لا، إلغاء'
                    }).then((result) => {
                        row.remove();
                        if ($('table.medicines-table tbody tr').length === 0) {
                            $('table.medicines-table tbody').empty();
                            $('table.medicines-table tbody').append(
                                '<tr><td colspan="6" class="text-center">لا توجد أدوية مضافة بعد.</td></tr>'
                            );
                        }

                        updateRowNumbers();
                    });
                }
            });

            function updateRowNumbers() {
                let rowIndex = 1;
                $('table.medicines-table tbody tr').not('.new-medicine-template').each(function() {
                    $(this).find('.medicine-count').text(rowIndex);
                    rowIndex++;
                });
            }
            $('#saveMedicines').click(function(event) {
                event.preventDefault();
                let medicines = [];

                let hasUnconfirmedMedicines = false;
                let medicinesAdded = false;
                $('tbody tr.medicine').each(function() {
                    if ($('.new-medicine').length) {
                        hasUnconfirmedMedicines = true;
                        return;
                    }
                    let medicineId = $(this).find('input[name="medicine"]').data('id');
                    let quantity = $(this).find('input[name="quantity"]').val();

                    if (medicineId) {
                        medicinesAdded = true;
                        medicines.push({
                            medicine_id: medicineId,
                            quantity: quantity,
                        });
                    }

                });
                if (hasUnconfirmedMedicines) {
                    Swal.fire({
                        type: 'warning',
                        title: 'تحذير',
                        text: 'يرجى تأكيد جميع الخدمات قبل الإرسال!',
                        confirmButtonText: 'موافق'
                    });
                    return;
                }

                if (!medicinesAdded) {
                    Swal.fire({
                        type: 'warning',
                        title: 'تحذير',
                        text: 'يرجى إضافة خدمات قبل الإرسال!',
                        confirmButtonText: 'موافق'
                    });
                    return;
                }

                $.ajax({
                    url: '{{ route('pharmacist.medicines.store') }}',
                    method: 'POST',
                    data: {
                        _token: $('input[name="_token"]').val(),
                        medicines: medicines
                    },
                    success: function(response) {
                        swal.fire({
                            position: 'top-right',
                            type: 'success',
                            title: 'تم حفظ العمل بنجاح',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        $('#kt_modal_4_2').modal('hide');
                        $('#kt_table_1').DataTable().ajax.reload();
                        $('table.medicines-table tbody tr').remove();
                        $('table.medicines-table tbody').append(newRow);
                        loadMedicines();
                        updateRowNumbers();
                    },
                    error: function(xhr) {
                        let errors = xhr.responseJSON.errors;
                        let errorMessages = '<ul>';
                        $.each(errors, function(key, value) {
                            errorMessages += `<li>${value}</li>`;
                        });
                        errorMessages += '</ul>';
                        Swal.fire({
                            type: 'error',
                            title: 'خطأ!',
                            html: errorMessages,
                            confirmButtonText: 'موافق'
                        });
                    }
                });
            });
        });
    </script>
@endsection
