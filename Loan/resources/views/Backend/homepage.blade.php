@extends('Backend.app')
@section('head')
    <link rel="stylesheet" href="{{ asset('assets/styles/all.min.css') }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('assets/styles/adminlte.css') }}">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row pt-4">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>

                        <p>New Users</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info</a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>53</h3>

                        <p>Verified Users</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info</a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>44</h3>

                        <p>Bank Registered</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info</a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>65</h3>

                        <p>Loan Plan</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info</a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="table-responsive-sm">
                    <h3>Unverified User</h3>
                    <table class="table table-bordered table-hover">
                        <thead class="bg-success text-white">
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Account Type</th>
                                <th>Registered Date</th>
                                <th>Last Update</th>
                                <th>Approve</th>
                                <th>Reject</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>001</td>
                                <td>jack_ma</td>
                                <td>Bank</td>
                                <td>12-12-2023</td>
                                <td>12-12-2023</td>
                                <td ><button class="bg-success">Approve</button></td>
                                <td ><button class="bg-danger">Reject</button></td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>steve</td>
                                <td>Borrower</td>
                                <td>12-12-2023</td>
                                <td>12-12-2023</td>
                                <td ><button class="bg-success">Approve</button></td>
                                <td ><button class="bg-danger">Reject</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
