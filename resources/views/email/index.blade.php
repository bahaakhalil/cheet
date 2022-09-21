    @extends('layouts.layoutFront')
    @section('content')

    <!--sec-Email  -->
    <section class="sec-Email">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4 m-auto ">
              <img src="{{asset('assets/web/img/image-1.png')}}" >
            </div>
          </div>
        </div>
      </section>
      <!-- sec-Email -->
      <section>
        <div class="container mt-5">
          <div class="row">
            <div class="col-md-6 m-auto">
              <p> Date <strong>{{now()}}</strong> </p>
              <p>
                {{$data}}
               </p>
               <p> <strong>Milla Jovovic,</strong> </p>
               <p> <strong>H.R Manager</strong> </p>
               <p> <strong>San Francisco, CA 94114</strong> </p>
          </div>
          <div class="col-md-12 text-center mt-3 mb-3">
            <a href="/request-leave" class="btn btn-info "> State the reason for the delay </a>
          </div>
        </div>
      </section>

    @endsection
