@extends('Backend.app')
@section('head')
    <title>Loan App</title>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12 ">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">User</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group py-3">
                                <label for="id">ID</label>
                                <input type="number" class="form-control" id="id" maxlength="8"
                                    placeholder="1102030" name="id" readonly required>
                            </div>
                            <div class="form-group py-3">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" placeholder="example"
                                    name="username" readonly required>
                            </div>

                            <div class="form-group py-3">
                                <label for="type">Account Type</label>
                                <input type="text" class="form-control" id="type" placeholder="Bank" name="type"
                                    required readonly>
                            </div>
                            <div class="form-group py-3">
                                <label for="date">Registered Date</label>
                                <input type="date" class="form-control" id="date" value="2023-12-12" name="date"
                                    required readonly>
                            </div>


                            <div class='py-3'>
                                <p>Credentail</p>
                                <div class="album py-5 bg-body-tertiary">
                                    <div class="container">

                                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                                            <div class="col-4">
                                                <div class="card shadow-sm">
                                                    <div class="card shadow-sm">
                                                        <img src="" alt="None">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="card shadow-sm">
                                                    <img src="" alt="None">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="card shadow-sm">
                                                    <svg class="bd-placeholder-img card-img-top" width="100%"
                                                        height="225" xmlns="http://www.w3.org/2000/svg" role="img"
                                                        aria-label="Placeholder: None" preserveAspectRatio="xMidYMid slice"
                                                        focusable="false">
                                                        <title>Placeholder</title>
                                                        <rect width="100%" height="100%" fill="#55595c" /><text
                                                            x="50%" y="50%" fill="#eceeef"
                                                            dy=".3em"></text>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group py-3">
                                        <label for="day">Suspend Amount (Days)</label>
                                        <input type="number" class="form-control" id="day" min='1' max='99'
                                            placeholder="7" name="day" required>
                                    </div>
                                    <!--Other-->
                                </div>
                                <br>
                                <div class="card-footer d-flex justify-content-around">
                                    <a href="#"><button class="btn btn-primary">Approve</button></a>
                                    <a href="#"><button class="btn btn-danger">Reject</button></a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
