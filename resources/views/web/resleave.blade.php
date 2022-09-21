@extends('layouts.layoutFront')
@section('content')
    <!-- Start sec-ReasonLeaving -->
    <section class="sec-ReasonLeaving">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <form action="reqleave" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControl">Your email</label>
                            <input class="form-control" required name="email" id="exampleFormControl">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control" required name="description" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End sec-ReasonLeaving -->
@endsection
