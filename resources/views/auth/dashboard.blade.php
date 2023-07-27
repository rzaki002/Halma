@extends('auth.admin.app')

@section('content')
    <main class="main-content">
        <div class="conatiner-fluid content-inner mt-n5 py-0 pt-5">
            <div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="bg-info text-white rounded p-3">
                                        <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20px"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                    </div>
                                    <div class="text-end">
                                        Customers
                                        <h2 class="counter">1</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="bg-warning text-white rounded p-3">
                                        <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20px"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div class="text-end">
                                        Products
                                        <h2 class="counter">60</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="bg-success text-white rounded p-3">
                                        <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20px"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div class="text-end">
                                        User
                                        <h2 class="counter">80</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="bg-danger text-white rounded p-3">
                                        <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20px"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div class="text-end">
                                        Category
                                        <h2 class="counter">45</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card border-bottom border-4 border-0 border-primary">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <span>Worked Today</span>
                                    </div>
                                    <div>
                                        <span>08:00 Hr</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card border-bottom border-4 border-0 border-info">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <span>Worked Week</span>
                                    </div>
                                    <div>
                                        <span>40:00 Hr</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card border-bottom border-4 border-0 border-danger">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <span>Worked Issue</span>
                                    </div>
                                    <div>
                                        <span class="counter">1200</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card border-bottom border-4 border-0 border-warning">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <span>Worked Income</span>
                                    </div>
                                    <div>
                                        <span class="counter">$54000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--last part-->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <span><b>Revenue</b></span>
                                                <div class="mt-2">
                                                    <h2 class="counter">$35000</h2>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="badge bg-primary">Monthly</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <div>
                                                <span>Total Revenue</span>
                                            </div>
                                            <div>
                                                <span>35%</span>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <div class="progress bg-soft-primary shadow-none w-100" style="height: 6px">
                                                <div class="progress-bar bg-primary" data-toggle="progress-bar"
                                                    role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <span><b>Orders</b></span>
                                                <div class="mt-2">
                                                    <h2 class="counter">2500</h2>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="badge bg-warning">Anual</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <div>
                                                <span>New Orders</span>
                                            </div>
                                            <div>
                                                <span>24%</span>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <div class="progress bg-soft-warning shadow-none w-100" style="height: 6px">
                                                <div class="progress-bar bg-warning" data-toggle="progress-bar"
                                                    role="progressbar" aria-valuenow="24" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <span><b>Leads</b></span>
                                                <div class="mt-2">
                                                    <h2 class="counter">$35000</h2>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="badge bg-danger">Today</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <div>
                                                <span>New Leads</span>
                                            </div>
                                            <div>
                                                <span>50%</span>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <div class="progress bg-soft-danger shadow-none w-100" style="height: 6px">
                                                <div class="progress-bar bg-danger" data-toggle="progress-bar"
                                                    role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <span><b>Conversion</b></span>
                                                <div class="mt-2">
                                                    <h2 class="counter">35%</h2>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="badge bg-info">This Month</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <div>
                                                <span>This Month</span>
                                            </div>
                                            <div>
                                                <span class="counter">30%</span>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <div class="progress bg-soft-info shadow-none w-100" style="height: 6px">
                                                <div class="progress-bar bg-info" data-toggle="progress-bar"
                                                    role="progressbar" aria-valuenow="30" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="border-bottom text-center pb-3">
                                    <img src="../../assets/images/avatars/01.png" alt="User-Profile"
                                        class="theme-color-default-img img-fluid avatar-80 mb-4">
                                    <img src="../../assets/images/avatars/avtar_1.png" alt="User-Profile"
                                        class="theme-color-purple-img img-fluid avatar-80 mb-4">
                                    <img src="../../assets/images/avatars/avtar_2.png" alt="User-Profile"
                                        class="theme-color-blue-img img-fluid avatar-80 mb-4">
                                    <img src="../../assets/images/avatars/avtar_4.png" alt="User-Profile"
                                        class="theme-color-green-img img-fluid avatar-80 mb-4">
                                    <img src="../../assets/images/avatars/avtar_5.png" alt="User-Profile"
                                        class="theme-color-yellow-img img-fluid avatar-80 mb-4">
                                    <img src="../../assets/images/avatars/avtar_3.png" alt="User-Profile"
                                        class="theme-color-pink-img img-fluid avatar-80 mb-4">
                                    <div>
                                        <h5 class="mb-3">Bini Jets</h5>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                                    <button type="button" class="btn btn-info mb-2">Assign</button>
                                </div>
                                <div class="d-flex justify-content-between mt-3">
                                    <div>
                                        <h2 class="mb-0 counter">4500</h2>
                                        <div>Operations</div>
                                    </div>
                                    <div>
                                        <h2 class="mb-0">3.9</h2>
                                        <div>Medical Rating</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="btn-download">
            <a class="btn btn-success px-3 py-2"
                href="https://iqonic.design/product/admin-templates/hope-ui-admin-free-open-source-bootstrap-admin-template/"
                target="_blank">
                <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4"
                        d="M17.554 7.29614C20.005 7.29614 22 9.35594 22 11.8876V16.9199C22 19.4453 20.01 21.5 17.564 21.5L6.448 21.5C3.996 21.5 2 19.4412 2 16.9096V11.8773C2 9.35181 3.991 7.29614 6.438 7.29614H7.378L17.554 7.29614Z"
                        fill="currentColor"></path>
                    <path
                        d="M12.5464 16.0374L15.4554 13.0695C15.7554 12.7627 15.7554 12.2691 15.4534 11.9634C15.1514 11.6587 14.6644 11.6597 14.3644 11.9654L12.7714 13.5905L12.7714 3.2821C12.7714 2.85042 12.4264 2.5 12.0004 2.5C11.5754 2.5 11.2314 2.85042 11.2314 3.2821L11.2314 13.5905L9.63742 11.9654C9.33742 11.6597 8.85043 11.6587 8.54843 11.9634C8.39743 12.1168 8.32142 12.3168 8.32142 12.518C8.32142 12.717 8.39743 12.9171 8.54643 13.0695L11.4554 16.0374C11.6004 16.1847 11.7964 16.268 12.0004 16.268C12.2054 16.268 12.4014 16.1847 12.5464 16.0374Z"
                        fill="currentColor"></path>
                </svg>
            </a>
        </div> --}}
    </main>
@endsection
