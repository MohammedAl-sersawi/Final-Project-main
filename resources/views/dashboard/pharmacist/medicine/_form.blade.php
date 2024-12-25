<!--begin::Modal-->
<div class="modal fade" id="kt_modal_4_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">تشخيص الحالة</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="kt_form_2">
                    @csrf
                    <div class="kt-portlet__body">
                        <a href="javascript:;" class="btn btn-brand btn-elevate btn-icon-sm add-medicine-btn">
                            <i class="la la-plus"></i>إضافة دواء</a>
                        <div class="kt-section">
                            <div class="kt-section__content">
                                <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--error kt-datatable--loaded"
                                    id="scrolling_vertical" style="">
                                    <table class="kt-datatable__table" style="display: block; max-height: 550px;">
                                        <thead class="kt-datatable__head">
                                            <tr class="kt-datatable__row">
                                                <th data-field="RecordID"
                                                    class="kt-datatable__cell--center kt-datatable__cell"><span
                                                        style="width: 110px;">#</span></th>
                                                <th data-field="OrderID" class="kt-datatable__cell"><span
                                                        style="width: 110px;">Order ID</span></th>
                                                <th data-field="Country" class="kt-datatable__cell"><span
                                                        style="width: 110px;">Country</span></th>
                                                <th data-field="CompanyEmail" class="kt-datatable__cell"><span
                                                        style="width: 110px;">Email</span></th>
                                                <th data-field="ShipAddress" class="kt-datatable__cell"><span
                                                        style="width: 110px;">Ship Address</span></th>
                                                <th data-field="ShipDate" class="kt-datatable__cell"><span
                                                        style="width: 110px;">Ship Date</span></th>
                                                <th data-field="CompanyName" class="kt-datatable__cell"><span
                                                        style="width: 110px;">Company Name</span></th>
                                                <th data-field="Status" class="kt-datatable__cell"><span
                                                        style="width: 110px;">Status</span></th>
                                                <th data-field="Type" data-autohide-disabled="false"
                                                    class="kt-datatable__cell"><span style="width: 110px;">Type</span>
                                                </th>
                                                <th data-field="Actions" data-autohide-disabled="false"
                                                    class="kt-datatable__cell"><span
                                                        style="width: 110px;">Actions</span></th>
                                            </tr>
                                        </thead>
                                        <tbody class="kt-datatable__body"><span class="kt-datatable--error">No records
                                                found</span></tbody>
                                    </table>
                                </div>7azfvczXz
                                {{-- <table class="table medicines-table">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>#</th>
                                            <th>{{ __('dashboard.code') }}</th>
                                            <th>Name</th>
                                            <th>Quantity</th>
                                            <th>العمليات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="new-medicine">
                                            <th scope="row" class="medicine-count">1</th>
                                            <td>
                                                <div style="min-width: 200px" class="bootstrap-select-wrapper  ">
                                                    <div
                                                        class="dropdown bootstrap-select  form-control kt-bootstrap-select dropup">
                                                        <select class="form-control code" id="select_code"
                                                            name="code" data-live-search="true">
                                                            <option disabled selected>Enter The Code</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </td>
                                            <td><input type="text" class="form-control" name="name"
                                                    placeholder="Name" readonly disabled></td>
                                            <td>
                                                <input id="kt_touchspin_3" type="text" class="form-control quantity"
                                                    value="1" name="quantity" placeholder="Select Quantity"
                                                    type="text">

                                            </td>

                                            <td>
                                                <button
                                                    class="btn btn-sm btn-icon btn-icon-md btn-primary confirm-medicine"><i
                                                        class="la la-check"></i></button>
                                                <button
                                                    class="btn btn-sm btn-icon btn-icon-md btn-danger remove-medicine"><i
                                                        class="la la-close"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>

                                </table> --}}
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="saveMedicines" type="button" class="btn btn-primary">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>
<!--end::Modal-->
