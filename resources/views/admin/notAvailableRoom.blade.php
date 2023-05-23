<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>HarborView Beach Resort</title>
        <!-- CSS -->
            <link rel="shortcut icon" href="{{ URL('/img/whitelogo.png')}}" type="image/x-icon">
            <link href="{{ asset('/css/adminDashboard.css') }}" rel="stylesheet">
        <!-- CSS -->
    @include('cdn')
</head>
<body>
    <div class="d-flex" id="wrapper">

        <!-- SIDE NAV -->
            @include('layouts.adminSidebar')
        <!-- SIDE NAV -->

        <!-- MAIN CONTENT -->
            <div id="page-content-wrapper">
                <!-- NAV BAR -->
                    <nav class="navbar navbar-expand-lg border-bottom">
                        <div class="container-fluid">
                            <h4 class="ms-2"> MANAGE ROOM</h4>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                    <li>
                                        <a class="nav-link me-3">
                                            <span>{{ auth()->guard('userModel')->user()->firstname}}</span>
                                            <span>{{ auth()->guard('userModel')->user()->lastname}}</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>              
                <!-- NAV BAR -->

                <!-- MAIN CONTENT -->
                    <div class="container-fluid mainBar">
                        <div class="container-fluid">
                            <div class="container-fluid px-5 py-4 bg-body rounded shadow-lg">
                                <ul class="nav nav-tabs mb-4">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/adminRoom">Available Room</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">Not Available Room</a>
                                    </li>
                                    <li class="nav-item ms-auto">
                                        <a href="/addNewRoom" class="btn btn-primary ms-auto py-2 px-3 btn-sm rounded-0 mb-1">New Room <i class="bi bi-file-earmark-arrow-down"></i></a>
                                    </li>
                                </ul>
                                <table id="notAvailableRoom" class="table table-sm table-bordered text-center align-middle">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">Room Number</th>
                                            <th class="text-center">Floor</th>
                                            <th class="text-center">Type of Room</th>
                                            <th class="text-center">Price</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                <!-- MAIN CONTENT -->
            </div>
        <!-- MAIN CONTENT -->
    </div>

        <!-- JS -->
            <script src="{{ asset('/js/admin/room.js') }}"></script>
            <script src="{{ asset('/js/dateTime.js') }}"></script>
            <script src="{{ asset('/js/logout.js') }}"></script>
        <!-- JS -->
</body>
</html>