@extends('layout.front')
@push('css')
    <link href="{{ asset('css/datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-steps.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/ckeditor5/sample/css/sample.css') }}" rel="stylesheet">
@endpush
@push('js')
    <script>
        
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#pd_editor'), {
                // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(err => {
                console.error(err.stack);
            });
    </script>
    <script src="{{ asset('vendor/ckeditor5/ckeditor.js') }}"></script>
    <script src="{{ asset('js/jquery-steps.min.js') }}"></script>
    <script src="{{ asset('js/datepicker.min.js') }}"></script>
    <script src="{{ asset('js/i18n/datepicker.en.js') }}"></script>
    <script>
        $('#add-event-tab').steps({
            onFinish: function() {
                alert('Wizard Completed');
            }
        });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#pd_editor'), {
                // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(err => {
                console.error(err.stack);
            });
    </script>
@endpush
@section('content')
    <!-- Create Single Ticket Model Start-->
    <div class="modal fade" id="singleTicketModal" tabindex="-1" aria-labelledby="singleTicketModalLabel" aria-hidden="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="singleTicketModalLabel">Create Single Ticket</h5>
                    <button type="button" class="close-model-btn" data-bs-dismiss="modal" aria-label="Close"><i
                            class="uil uil-multiply"></i></button>
                </div>
                <div class="modal-body">
                    <div class="model-content main-form">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group mt-4">
                                    <label class="form-label">Ticket Name*</label>
                                    <input class="form-control h_40" type="text" placeholder="Event Ticket Name"
                                        value="">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="main-card p-4 mt-4">
                                    <div class="form-label mb-4 fs-16">Ticket Restrictions</div>
                                    <div class="form-group border_bottom">
                                        <div class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
                                            <h4 class="fs-14 mb-0 me-auto">Total number of tickets available</h4>
                                            <label class="btn-switch m-0 me-3">
                                                <input type="checkbox" id="is-restrict-total-ticket" checked="">
                                                <span class="checkbox-slider"></span>
                                            </label>
                                            <div>
                                                <label class="fs-12 m-0">Unlimited</label>
                                            </div>
                                        </div>
                                        <div class="p-0 mb-4 total_ticket_per_level" style="display:none;">
                                            <div class="form-group">
                                                <div class="input-number">
                                                    <input class="form-control h_40" type="number" min="0"
                                                        max="30" placeholder="Enter Total Tickets">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex align-items-center flex-wrap pt-4 flex-nowrap">
                                            <h4 class="fs-14 mb-0 me-auto">Maximum number of tickets for each customer
                                            </h4>
                                            <label class="btn-switch m-0 me-3">
                                                <input type="checkbox" id="is-restrict-ticket-per-user" checked="">
                                                <span class="checkbox-slider"></span>
                                            </label>
                                            <div>
                                                <label class="fs-12 m-0">Unlimited</label>
                                            </div>
                                        </div>
                                        <div class="p-0 mt-4 total_ticket_per_user" style="display:none;">
                                            <div class="form-group">
                                                <div class="input-number">
                                                    <input class="form-control h_40" type="number" min="0"
                                                        max="30" placeholder="Enter Max. per order">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="main-card p-4 mt-4">
                                    <div class="form-label mb-4 fs-16">Ticket Restrictions</div>
                                    <div class="form-group">
                                        <label class="form-label mb-2 fs-14">Ticket Order*</label>
                                        <input class="form-control h_40" type="number" value="1" min="1"
                                            max="30" placeholder="Enter Sort Order">
                                    </div>
                                    <div class="form-group mt-4">
                                        <label class="form-label mb-2 fs-14">Ticket Description*</label>
                                        <textarea class="form-textarea" placeholder="Description will go here"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="main-card p-4 mt-4">
                                    <div class="d-flex align-items-center justify-content-between price-variation-head">
                                        <h5 class="m-0 color-black fs-16">
                                            Variations (<span class="ticket-subtype-count">1</span>)</h5>
                                        <span class="add-btn btn-hover">
                                            <i class="fa-regular fa-square-plus"></i>
                                        </span>
                                    </div>
                                    <div class="table-responsive">
                                        <div
                                            class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                            <div class="table-row table-head no-bg">
                                                <div class="table-col fs-14 text-light3">Price <span class="red">*</span>
                                                </div>
                                                <div class="table-col fs-14 text-light3">Variation Name <span
                                                        class="red">*</span></div>
                                                <div class="table-col fs-14 text-light3 text-right">Actions</div>
                                            </div>
                                            <div class="table-row ticket-subtype-row">
                                                <div class="table-col first-col">
                                                    <div class="form-group m-0 form-custom-validation">
                                                        <input class="form-control h_40" type="number" min="0"
                                                            max="10000" required="" placeholder="Price"
                                                            value="">
                                                    </div>
                                                </div>
                                                <div class="table-col second-col">
                                                    <div class="form-group m-0">
                                                        <input class="form-control h_40" type="text" maxlength="75"
                                                            required="" value="">
                                                    </div>
                                                </div>
                                                <div class="table-col third-col">
                                                    <button type="button" class="v-btn-close btn-hover">
                                                        <i class="fa-solid fa-xmark"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="main-card p-4 mt-4">
                                    <div class="form-group">
                                        <div class="d-flex align-items-start">
                                            <label class="btn-switch m-0 me-3">
                                                <input type="checkbox" class="" id="bird-discount" value="">
                                                <span class="checkbox-slider"></span>
                                            </label>
                                            <div class="d-flex flex-column">
                                                <label class="color-black mb-1">I want to offer early bird
                                                    discount.</label>
                                                <p class="mt-2 fs-14 d-block mb-3">Enabling this discount lets your
                                                    attendees get all the regular tickets features at a discounted
                                                    price. <a href="#" class="a-link">Learn more</a></p>
                                            </div>
                                        </div>
                                        <div class="online-event-discount-wrapper" style="display: none;">
                                            <div class="row g-3">
                                                <div class="col-md-3">
                                                    <label class="form-label mt-3 fs-6">Discount*</label>
                                                    <input class="form-control h_40" type="text" placeholder="0"
                                                        value="">
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="form-label mt-3 fs-6">Price*</label>
                                                    <select class="selectpicker">
                                                        <option value="Percentage" selected="">Percent(%)</option>
                                                        <option value="Fixed">Fixed($)</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="form-label mt-3 fs-6">Discount ends on*</label>
                                                    <div class="loc-group position-relative">
                                                        <input class="form-control h_40 datepicker-here"
                                                            data-language="en" data-position="top left" type="text"
                                                            placeholder="MM/DD/YYYY" value="">
                                                        <span class="absolute-icon top_0"><i
                                                                class="fa-solid fa-calendar-days"></i></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="clock-icon">
                                                        <label class="form-label mt-3 fs-6">Time</label>
                                                        <select class="selectpicker" data-size="5"
                                                            data-live-search="true">
                                                            <option value="00:00">12:00 AM</option>
                                                            <option value="00:15">12:15 AM</option>
                                                            <option value="00:30">12:30 AM</option>
                                                            <option value="00:45">12:45 AM</option>
                                                            <option value="01:00">01:00 AM</option>
                                                            <option value="01:15">01:15 AM</option>
                                                            <option value="01:30">01:30 AM</option>
                                                            <option value="01:45">01:45 AM</option>
                                                            <option value="02:00">02:00 AM</option>
                                                            <option value="02:15">02:15 AM</option>
                                                            <option value="02:30">02:30 AM</option>
                                                            <option value="02:45">02:45 AM</option>
                                                            <option value="03:00">03:00 AM</option>
                                                            <option value="03:15">03:15 AM</option>
                                                            <option value="03:30">03:30 AM</option>
                                                            <option value="03:45">03:45 AM</option>
                                                            <option value="04:00">04:00 AM</option>
                                                            <option value="04:15">04:15 AM</option>
                                                            <option value="04:30">04:30 AM</option>
                                                            <option value="04:45">04:45 AM</option>
                                                            <option value="05:00">05:00 AM</option>
                                                            <option value="05:15">05:15 AM</option>
                                                            <option value="05:30">05:30 AM</option>
                                                            <option value="05:45">05:45 AM</option>
                                                            <option value="06:00">06:00 AM</option>
                                                            <option value="06:15">06:15 AM</option>
                                                            <option value="06:30">06:30 AM</option>
                                                            <option value="06:45">06:45 AM</option>
                                                            <option value="07:00">07:00 AM</option>
                                                            <option value="07:15">07:15 AM</option>
                                                            <option value="07:30">07:30 AM</option>
                                                            <option value="07:45">07:45 AM</option>
                                                            <option value="08:00">08:00 AM</option>
                                                            <option value="08:15">08:15 AM</option>
                                                            <option value="08:30">08:30 AM</option>
                                                            <option value="08:45">08:45 AM</option>
                                                            <option value="09:00">09:00 AM</option>
                                                            <option value="09:15">09:15 AM</option>
                                                            <option value="09:30">09:30 AM</option>
                                                            <option value="09:45">09:45 AM</option>
                                                            <option value="10:00" selected="selected">10:00 AM</option>
                                                            <option value="10:15">10:15 AM</option>
                                                            <option value="10:30">10:30 AM</option>
                                                            <option value="10:45">10:45 AM</option>
                                                            <option value="11:00">11:00 AM</option>
                                                            <option value="11:15">11:15 AM</option>
                                                            <option value="11:30">11:30 AM</option>
                                                            <option value="11:45">11:45 AM</option>
                                                            <option value="12:00">12:00 PM</option>
                                                            <option value="12:15">12:15 PM</option>
                                                            <option value="12:30">12:30 PM</option>
                                                            <option value="12:45">12:45 PM</option>
                                                            <option value="13:00">01:00 PM</option>
                                                            <option value="13:15">01:15 PM</option>
                                                            <option value="13:30">01:30 PM</option>
                                                            <option value="13:45">01:45 PM</option>
                                                            <option value="14:00">02:00 PM</option>
                                                            <option value="14:15">02:15 PM</option>
                                                            <option value="14:30">02:30 PM</option>
                                                            <option value="14:45">02:45 PM</option>
                                                            <option value="15:00">03:00 PM</option>
                                                            <option value="15:15">03:15 PM</option>
                                                            <option value="15:30">03:30 PM</option>
                                                            <option value="15:45">03:45 PM</option>
                                                            <option value="16:00">04:00 PM</option>
                                                            <option value="16:15">04:15 PM</option>
                                                            <option value="16:30">04:30 PM</option>
                                                            <option value="16:45">04:45 PM</option>
                                                            <option value="17:00">05:00 PM</option>
                                                            <option value="17:15">05:15 PM</option>
                                                            <option value="17:30">05:30 PM</option>
                                                            <option value="17:45">05:45 PM</option>
                                                            <option value="18:00">06:00 PM</option>
                                                            <option value="18:15">06:15 PM</option>
                                                            <option value="18:30">06:30 PM</option>
                                                            <option value="18:45">06:45 PM</option>
                                                            <option value="19:00">07:00 PM</option>
                                                            <option value="19:15">07:15 PM</option>
                                                            <option value="19:30">07:30 PM</option>
                                                            <option value="19:45">07:45 PM</option>
                                                            <option value="20:00">08:00 PM</option>
                                                            <option value="20:15">08:15 PM</option>
                                                            <option value="20:30">08:30 PM</option>
                                                            <option value="20:45">08:45 PM</option>
                                                            <option value="21:00">09:00 PM</option>
                                                            <option value="21:15">09:15 PM</option>
                                                            <option value="21:30">09:30 PM</option>
                                                            <option value="21:45">09:45 PM</option>
                                                            <option value="22:00">10:00 PM</option>
                                                            <option value="22:15">10:15 PM</option>
                                                            <option value="22:30">10:30 PM</option>
                                                            <option value="22:45">10:45 PM</option>
                                                            <option value="23:00">11:00 PM</option>
                                                            <option value="23:15">11:15 PM</option>
                                                            <option value="23:30">11:30 PM</option>
                                                            <option value="23:45">11:45 PM</option>
                                                        </select>
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
                <div class="modal-footer">
                    <button type="button" class="co-main-btn min-width btn-hover h_40" data-bs-target="#aboutModal"
                        data-bs-toggle="modal" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="main-btn min-width btn-hover h_40">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Create Single Ticket Model End-->
    <!-- Create Group Ticket Model Start-->
    <div class="modal fade" id="groupTicketModal" tabindex="-1" aria-labelledby="groupTicketModalLabel"
        aria-hidden="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="groupTicketModalLabel">Create Group Ticket</h5>
                    <button type="button" class="close-model-btn" data-bs-dismiss="modal" aria-label="Close"><i
                            class="uil uil-multiply"></i></button>
                </div>
                <div class="modal-body">
                    <div class="model-content main-form">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group mt-4">
                                    <label class="form-label">Ticket Name*</label>
                                    <input class="form-control h_40" type="text"
                                        placeholder="Enter Ticket Type - Group Name (E.g Gold - Family Pass)"
                                        value="">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="main-card p-4 mt-4">
                                    <div class="form-label mb-4 fs-16">Ticket Restrictions</div>
                                    <div class="form-group border_bottom">
                                        <div class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
                                            <h4 class="fs-14 mb-0 me-auto">Total number of tickets available</h4>
                                            <label class="btn-switch m-0 me-3">
                                                <input type="checkbox" id="is-restrict-total-ticket2" checked="">
                                                <span class="checkbox-slider"></span>
                                            </label>
                                            <div>
                                                <label class="fs-12 m-0">Unlimited</label>
                                            </div>
                                        </div>
                                        <div class="p-0 mb-4 total_ticket_per_level2" style="display:none;">
                                            <div class="form-group">
                                                <div class="input-number">
                                                    <input class="form-control h_40" type="number" min="0"
                                                        max="30" placeholder="Enter Total Tickets">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex align-items-center flex-wrap pt-4 flex-nowrap">
                                            <h4 class="fs-14 mb-0 me-auto">Maximum number of tickets for each customer
                                            </h4>
                                            <label class="btn-switch m-0 me-3">
                                                <input type="checkbox" id="is-restrict-ticket-per-user2" checked="">
                                                <span class="checkbox-slider"></span>
                                            </label>
                                            <div>
                                                <label class="fs-12 m-0">Unlimited</label>
                                            </div>
                                        </div>
                                        <div class="p-0 mt-4 total_ticket_per_user2" style="display:none;">
                                            <div class="form-group">
                                                <div class="input-number">
                                                    <input class="form-control h_40" type="number" min="0"
                                                        max="30" placeholder="Enter Max. per order">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="main-card p-4 mt-4">
                                    <div class="form-label mb-4 fs-16">Ticket Restrictions</div>
                                    <div class="form-group">
                                        <label class="form-label mb-2 fs-14">Ticket Order*</label>
                                        <input class="form-control h_40" type="number" value="1" min="1"
                                            max="30" placeholder="Enter Sort Order">
                                    </div>
                                    <div class="form-group mt-4">
                                        <label class="form-label mb-2 fs-14">Ticket Description*</label>
                                        <textarea class="form-textarea" placeholder="Description will go here"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group mt-4">
                                    <label class="form-label mb-2 fs-14">Ticket Price*</label>
                                    <input class="form-control h_40" type="number" value="10"
                                        placeholder="Enter Ticket Price">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group mt-4">
                                    <label class="form-label mb-2 fs-14">Number of tickets for each group*</label>
                                    <input class="form-control h_40" type="number" min="0" value=""
                                        placeholder="Enter Total Tickets Per Group">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="main-card p-4 mt-4">
                                    <div class="form-group">
                                        <div class="d-flex align-items-start">
                                            <label class="btn-switch m-0 me-3">
                                                <input type="checkbox" class="" id="bird-discount2"
                                                    value="">
                                                <span class="checkbox-slider"></span>
                                            </label>
                                            <div class="d-flex flex-column">
                                                <label class="color-black mb-1">I want to offer early bird
                                                    discount.</label>
                                                <p class="mt-2 fs-14 d-block mb-3">Enabling this discount lets your
                                                    attendees get all the regular tickets features at a discounted
                                                    price. <a href="#" class="a-link">Learn more</a></p>
                                            </div>
                                        </div>
                                        <div class="online-event-discount-wrapper2" style="display: none;">
                                            <div class="row g-3">
                                                <div class="col-md-3">
                                                    <label class="form-label mt-3 fs-6">Discount*</label>
                                                    <input class="form-control h_40" type="text" placeholder="0"
                                                        value="">
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="form-label mt-3 fs-6">Price*</label>
                                                    <select class="selectpicker">
                                                        <option value="Percentage" selected="">Percent(%)</option>
                                                        <option value="Fixed">Fixed($)</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="form-label mt-3 fs-6">Discount ends on*</label>
                                                    <div class="loc-group position-relative">
                                                        <input class="form-control h_40 datepicker-here"
                                                            data-language="en" data-position="top left" type="text"
                                                            placeholder="MM/DD/YYYY" value="">
                                                        <span class="absolute-icon top_0"><i
                                                                class="fa-solid fa-calendar-days"></i></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="clock-icon">
                                                        <label class="form-label mt-3 fs-6">Time</label>
                                                        <select class="selectpicker" data-size="5"
                                                            data-live-search="true">
                                                            <option value="00:00">12:00 AM</option>
                                                            <option value="00:15">12:15 AM</option>
                                                            <option value="00:30">12:30 AM</option>
                                                            <option value="00:45">12:45 AM</option>
                                                            <option value="01:00">01:00 AM</option>
                                                            <option value="01:15">01:15 AM</option>
                                                            <option value="01:30">01:30 AM</option>
                                                            <option value="01:45">01:45 AM</option>
                                                            <option value="02:00">02:00 AM</option>
                                                            <option value="02:15">02:15 AM</option>
                                                            <option value="02:30">02:30 AM</option>
                                                            <option value="02:45">02:45 AM</option>
                                                            <option value="03:00">03:00 AM</option>
                                                            <option value="03:15">03:15 AM</option>
                                                            <option value="03:30">03:30 AM</option>
                                                            <option value="03:45">03:45 AM</option>
                                                            <option value="04:00">04:00 AM</option>
                                                            <option value="04:15">04:15 AM</option>
                                                            <option value="04:30">04:30 AM</option>
                                                            <option value="04:45">04:45 AM</option>
                                                            <option value="05:00">05:00 AM</option>
                                                            <option value="05:15">05:15 AM</option>
                                                            <option value="05:30">05:30 AM</option>
                                                            <option value="05:45">05:45 AM</option>
                                                            <option value="06:00">06:00 AM</option>
                                                            <option value="06:15">06:15 AM</option>
                                                            <option value="06:30">06:30 AM</option>
                                                            <option value="06:45">06:45 AM</option>
                                                            <option value="07:00">07:00 AM</option>
                                                            <option value="07:15">07:15 AM</option>
                                                            <option value="07:30">07:30 AM</option>
                                                            <option value="07:45">07:45 AM</option>
                                                            <option value="08:00">08:00 AM</option>
                                                            <option value="08:15">08:15 AM</option>
                                                            <option value="08:30">08:30 AM</option>
                                                            <option value="08:45">08:45 AM</option>
                                                            <option value="09:00">09:00 AM</option>
                                                            <option value="09:15">09:15 AM</option>
                                                            <option value="09:30">09:30 AM</option>
                                                            <option value="09:45">09:45 AM</option>
                                                            <option value="10:00" selected="selected">10:00 AM</option>
                                                            <option value="10:15">10:15 AM</option>
                                                            <option value="10:30">10:30 AM</option>
                                                            <option value="10:45">10:45 AM</option>
                                                            <option value="11:00">11:00 AM</option>
                                                            <option value="11:15">11:15 AM</option>
                                                            <option value="11:30">11:30 AM</option>
                                                            <option value="11:45">11:45 AM</option>
                                                            <option value="12:00">12:00 PM</option>
                                                            <option value="12:15">12:15 PM</option>
                                                            <option value="12:30">12:30 PM</option>
                                                            <option value="12:45">12:45 PM</option>
                                                            <option value="13:00">01:00 PM</option>
                                                            <option value="13:15">01:15 PM</option>
                                                            <option value="13:30">01:30 PM</option>
                                                            <option value="13:45">01:45 PM</option>
                                                            <option value="14:00">02:00 PM</option>
                                                            <option value="14:15">02:15 PM</option>
                                                            <option value="14:30">02:30 PM</option>
                                                            <option value="14:45">02:45 PM</option>
                                                            <option value="15:00">03:00 PM</option>
                                                            <option value="15:15">03:15 PM</option>
                                                            <option value="15:30">03:30 PM</option>
                                                            <option value="15:45">03:45 PM</option>
                                                            <option value="16:00">04:00 PM</option>
                                                            <option value="16:15">04:15 PM</option>
                                                            <option value="16:30">04:30 PM</option>
                                                            <option value="16:45">04:45 PM</option>
                                                            <option value="17:00">05:00 PM</option>
                                                            <option value="17:15">05:15 PM</option>
                                                            <option value="17:30">05:30 PM</option>
                                                            <option value="17:45">05:45 PM</option>
                                                            <option value="18:00">06:00 PM</option>
                                                            <option value="18:15">06:15 PM</option>
                                                            <option value="18:30">06:30 PM</option>
                                                            <option value="18:45">06:45 PM</option>
                                                            <option value="19:00">07:00 PM</option>
                                                            <option value="19:15">07:15 PM</option>
                                                            <option value="19:30">07:30 PM</option>
                                                            <option value="19:45">07:45 PM</option>
                                                            <option value="20:00">08:00 PM</option>
                                                            <option value="20:15">08:15 PM</option>
                                                            <option value="20:30">08:30 PM</option>
                                                            <option value="20:45">08:45 PM</option>
                                                            <option value="21:00">09:00 PM</option>
                                                            <option value="21:15">09:15 PM</option>
                                                            <option value="21:30">09:30 PM</option>
                                                            <option value="21:45">09:45 PM</option>
                                                            <option value="22:00">10:00 PM</option>
                                                            <option value="22:15">10:15 PM</option>
                                                            <option value="22:30">10:30 PM</option>
                                                            <option value="22:45">10:45 PM</option>
                                                            <option value="23:00">11:00 PM</option>
                                                            <option value="23:15">11:15 PM</option>
                                                            <option value="23:30">11:30 PM</option>
                                                            <option value="23:45">11:45 PM</option>
                                                        </select>
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
                <div class="modal-footer">
                    <button type="button" class="co-main-btn min-width btn-hover h_40" data-bs-target="#aboutModal"
                        data-bs-toggle="modal" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="main-btn min-width btn-hover h_40">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Create Group Ticket Model End-->
    <!-- Header Start-->
    @include('include.front.header')
    <!-- Header End-->
    <!-- Body Start-->
    <div class="wrapper">

        @include('include.front.navbar')
        @livewire('front.event.add')
    </div>
@endsection
<!-- Body End-->
{{-- <!-- Footer Start-->
		@include('include.front.footer')
	<!-- Footer End-->


	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/OwlCarousel/owl.carousel.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/night-mode.js"></script>
	
</body>

<!-- Mirrored from www.gambolthemes.net/html-items/barren-html/disable-demo-link/create_venue_event.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jan 2024 06:57:09 GMT -->

</html> --}}
