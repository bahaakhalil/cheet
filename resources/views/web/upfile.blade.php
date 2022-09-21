@extends('layouts.layoutFront')
@section('content')
    <!-- Start sec-navbar -->
    <section class="sec-navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img
                    src="{{ asset('assets/web/img/logo/41c16af2-5573-479b-807a-4dad21bb8136.png') }}" /></a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Up File</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sheet">datesheet File</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="request-leave">Reason for leaving</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
    <!-- End sec-navbar -->
    <!-- /////////////////////////////////////////////////// -->
    <!-- Start sec-file -->
    <section class="sec-file">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <form action="excel-csv-file" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <label class="custom-file-label" for="inputGroupFile02">Upload the excel file</label>
                                <input type="file" class="custom-file-input" required name="excel" id="inputGroupFile02" />
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End sec-file -->
@endsection
