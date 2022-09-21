@extends('layouts.layoutFront')
@section('content')
    <!-- Start sec-file -->
    <section class="sec-file">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    @foreach ($users as $user)
                        <div class="col-4">
                            {{ $user->name }}
                        </div>
                        <div class="col-4">
                            {{ $user->email }}
                        </div>
                        <div class="col-4">
                            {{ $user->check_out }}
                        </div>

                        <div class="col-4">
                            {{ $user->check_in }}
                        </div>
                    @endforeach
                </div>
                <div class="col-md-4 text-center mt-3 mb-3">
                    <a href="/send-email" class="btn btn-primary "> تفعيل  رسائل الايميل لكل المستخدمين </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End sec-file -->
@endsection
