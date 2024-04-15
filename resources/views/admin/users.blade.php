@extends('layout.admin')
@section('title',__('Users list'))
@section('content')
    <div class="wrapper wrapper-body">
        <div class="dashboard-body">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-main-title">
                            <h3><i class="fa-solid fa-chart-pie me-3"></i>@lang('Users list') ({{ $count }})</h3>
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
