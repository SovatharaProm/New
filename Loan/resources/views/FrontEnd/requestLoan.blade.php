@extends('Frontend.layout.app')
@section('head')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan App</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link href="{{ asset('assets/styles/bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 ">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Request for Loan</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" >
                            @csrf
                            <div class="card-body">
                                <div class="form-group py-3">
                                    <label for="email">Name</label>
                                    <input type="email" class="form-control" id="email" placeholder="Joe"
                                        name="email">
                                </div>
                                <div class="form-group py-3">
                                    <label for="phone">Phone</label>
                                    <input type="tel" class="form-control" id="phone" placeholder="0123456789"
                                        name="phone">
                                </div>
                                <div class="form-group py-3">
                                    <label for="email">Email</label>
                                    <input type="email" readonly class="form-control" id="email" value="exmaple@mail.com"
                                        name="email">
                                </div>
                                <div class="form-group py-3">
                                    <label for="amount">Loan Amount</label>
                                    <input type="number" class="form-control" name="amount" id="amount">
                                </div>

                                <div class="form-group py-3">
                                    <label for="schedule">Payment Schedule</label>
                                    <select id="schedule" name="schedule" class="form-control" id="schedule">
                                        <option selected>Choose...</option>
                                        <option value="1">Weekly</option>
                                        <option value="2">Biweekly</option>
                                        <option value="3">Monthly</option>
                                    </select>
                                </div>
                                <div class="form-group py-3">
                                    <label for="pin">Verification Pin</label>
                                    <input type="password" class="form-control" name="pin" id="pin" minlength="6" maxlength="6">
                                </div>
                            </div>
                            

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
