@extends('layout.admin')
@section('content')
    <div class="wrapper wrapper-body">
        <div class="dashboard-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-main-title">
                            <h3><i class="fa-solid fa-chart-pie me-3"></i>@lang('Users list')</h3>
                        </div>
                    </div>
                    <div class="col-md-12">

                        <div class="event-list">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="orders-tab" role="tabpanel">
                                    <div class="table-card mt-4">
                                        <div class="main-table">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th class="text-center">#</th>
                                                            <th>@lang('NOM')</th>
                                                            <th>@lang('Email')</th>
                                                            <th>@lang('Role')</th>
                                                            <th>@lang('Birth Date')</th>
                                                            <th>@lang('Status')</th>
                                                            <th colspan="5">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($users as $user)
                                                        <tr>
                                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                                <td>{{ $user->name }}</td>
                                                                <td>{{ $user->email }}</td>
                                                                <td>{{ $user->role->name }}</td>
                                                                <td>{{ $user->birth_date }}</td>
                                                                <td>
                                                                    @if ($user->is_active)
                                                                        <div class="py-2 px-2">
                                                                            <span
                                                                                class="py-1 px-3 rounded-full text-white badge-pill waves-effect text-lg bg-info ">
                                                                                @lang('Yes')</span>
                                                                        </div>
                                                                    @else
                                                                        <div class="py-2 px-2">
                                                                            <span
                                                                                class="py-1 px-3 rounded-full text-white badge-pill waves-effect text-lg bg-dark ">
                                                                                <span
                                                                                    class="status-circle red-circle"></span>@lang('disabled')</span>
                                                                        </div>
                                                                    @endif
                                                                </td>


                                                            </tr>
                                                        @endforeach


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="customers-tab" role="tabpanel">
                                    <div class="table-card mt-4">
                                        <div class="main-table">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th scope="col">ID</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Email address</th>
                                                            <th scope="col">Address</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>2356</td>
                                                            <td>Larry Paige</td>
                                                            <td>larry@example.com</td>
                                                            <td>140 St Kilda Rd, St Kilda, Victoria, Melbourne, Victoria,
                                                                3000, Australia</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2355</td>
                                                            <td>John Cena</td>
                                                            <td>johncena@example.com</td>
                                                            <td>140 St Kilda Rd, St Kilda, Victoria, Melbourne, Victoria,
                                                                3000, Australia</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2354</td>
                                                            <td>Jassica William</td>
                                                            <td>jassica@example.com</td>
                                                            <td>140 St Kilda Rd, St Kilda, Victoria, Melbourne, Victoria,
                                                                3000, Australia</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2353</td>
                                                            <td>Rock William</td>
                                                            <td>rockwilliam@example.com</td>
                                                            <td>140 St Kilda Rd, St Kilda, Victoria, Melbourne, Victoria,
                                                                3000, Australia</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2352</td>
                                                            <td>Gleen Smith</td>
                                                            <td>gleensmith@example.com</td>
                                                            <td>140 St Kilda Rd, St Kilda, Victoria, Melbourne, Victoria,
                                                                3000, Australia</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2351</td>
                                                            <td>John Doe</td>
                                                            <td>johndoe@example.com</td>
                                                            <td>140 St Kilda Rd, St Kilda, Victoria, Melbourne, Victoria,
                                                                3000, Australia</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tickets-tab" role="tabpanel">
                                    <div class="table-card mt-4">
                                        <div class="main-table">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th scope="col">Order ID</th>
                                                            <th scope="col">Reference ID</th>
                                                            <th scope="col">Customer Name</th>
                                                            <th scope="col">Email Address</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>2356</td>
                                                            <td>F6ACCM-R76MTK-1434658508</td>
                                                            <td>Larry Paige</td>
                                                            <td>larry@example.com</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2355</td>
                                                            <td>F6ACCM-R76MTK-1434658508</td>
                                                            <td>Gleen William</td>
                                                            <td>gleenwilliam@example.com</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2354</td>
                                                            <td>F6ACCM-R76MTK-1434658508</td>
                                                            <td>Rock Smith</td>
                                                            <td>rocksmith@example.com</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2353</td>
                                                            <td>F6ACCM-R76MTK-1434658508</td>
                                                            <td>John Cena</td>
                                                            <td>johncena@example.com</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="payouts-tab" role="tabpanel">
                                    <div class="table-card mt-4">
                                        <div class="main-table">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th scope="col">Remittance ID</th>
                                                            <th scope="col">Remittance Date</th>
                                                            <th scope="col">Date Paid</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Transaction ID</th>
                                                            <th scope="col">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>12475</td>
                                                            <td>28/1.04/2022</td>
                                                            <td>26/04/2022</td>
                                                            <td>22/04/2022</td>
                                                            <td>TXR21234123UX</td>
                                                            <td><a href="#" class="a-link">Download</a></td>
                                                        </tr>
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
@endsection
<!-- Body End -->


{{-- <div class="wrapper wrapper-body">
    <div class="dashboard-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-main-title">
                        <h3><i class="fa-solid fa-rectangle-ad me-3"></i>Promotion</h3>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="main-card mt-5">
                        <div class="dashboard-wrap-content p-4">
                            <h5 class="mb-4">Coupons (1)</h5>
                            <div class="d-md-flex flex-wrap align-items-center">
                                <div class="dashboard-date-wrap">
                                    <div class="form-group">
                                        <div class="relative-input position-relative">
                                            <input class="form-control h_40" type="text" placeholder="Search by coupon name" value="">
                                            <i class="uil uil-search"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="rs ms-auto mt_r4">
                                    <button class="main-btn btn-hover h_40 w-100" data-bs-toggle="modal" data-bs-target="#couponModal">Create Coupon</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="all-promotion-list">
                        <div class="main-card mt-4">
                            <div class="contact-list coupon-active">
                                <div class="top d-flex flex-wrap justify-content-between align-items-center p-4 border_bottom">
                                    <div class="icon-box">
                                        <span class="icon-big rotate-icon icon icon-purple">
                                            <i class="fa-solid fa-ticket"></i>
                                        </span>
                                        <h5 class="font-18 mb-1 mt-1 f-weight-medium">EB85789<span class="font-weight-normal"> - EB835789</span></h5>
                                        <p class="text-gray-50 m-0"><span class="visitor-date-time">Tue, Apr 26, 2022 07:30 AM (UTC)</span> - <span class="visitor-date-time">Wed, Apr 26, 2023 07:30 AM (UTC)</span></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <label class="btn-switch tfs-8 mb-0 me-4 mt-1">
                                            <input type="checkbox" value="" checked>
                                            <span class="checkbox-slider"></span>
                                        </label>
                                        <div class="dropdown dropdown-default dropdown-text dropdown-icon-item">
                                            <button class="option-btn-1" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#" class="dropdown-item"><i class="fa-solid fa-pen me-3"></i>Edit</a>
                                                <a href="#" class="dropdown-item"><i class="fa-solid fa-trash-can me-3"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom d-flex flex-wrap justify-content-between align-items-center p-4">
                                    <div class="icon-box ">
                                        <span class="icon">
                                            <i class="fa-regular fa-circle-dot"></i>
                                        </span>
                                        <p>Status</p>
                                        <h6 class="coupon-status">Active</h6>
                                    </div>
                                    <div class="icon-box">
                                        <span class="icon">
                                            <i class="fa-solid fa-chart-column"></i>
                                        </span>
                                        <p>Total used</p>
                                        <h6 class="coupon-status">0/100</h6>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="icon-box">
                                        <span class="icon">
                                            <i class="fa-regular fa-clock"></i>
                                        </span>
                                        <p>Last used</p>
                                        <h6 class="coupon-status">N/A</h6>
                                    </div>
                                    <div class="icon-box">
                                        <span class="icon">
                                            <i class="fa-solid fa-tag"></i>
                                        </span>
                                        <p>Discount</p>
                                        <h6 class="coupon-status">10%</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
