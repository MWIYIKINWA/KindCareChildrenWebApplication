@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>


<section class="py-5 my-4">
    
  <div class="container">
      
          <div class="row">


                <div class="col-lg-4 col-sm-4">
                   <div class="card" style="width: 18rem;">
                      <img src="{{asset('photos/image1.png')}}" class="card-img-top" alt="...">
                           <div class="card-body">
                               <h5 class="card-title">Pupil Registration</h5>
                             <a href="{{ ('regForm') }}" class="btn btn-primary">Go</a>
                      </div>
                   </div>
                </div>

                 <div class="col-lg-4 col-sm-4">
                   <div class="card" style="width: 18rem;">
                      <img src="{{asset('photos/image2.jpg')}}" class="card-img-top" alt="...">
                           <div class="card-body">
                               <h5 class="card-title">Pupil List</h5>
                             <a href="{{ ('list')}}" class="btn btn-primary">Go</a>
                      </div>
                   </div>
                </div>

                 <div class="col-lg-4 col-sm-4">
                   <div class="card" style="width:18rem;  height: 100%;">
                      <img src="{{asset('photos/image3.jpg')}}" class="card-img-top" alt="..." style="height: 100%;">
                           <div class="card-body">
                               <h5 class="card-title">Set Assignement</h5>
                             <a href="{{('set')}}" class="btn btn-primary">Go</a>
                      </div>
                   </div>
                </div>

                 <div class="col-lg-4 col-sm-4 mt-4">
                   <div class="card" style="width:18rem;  height: 100%;">
                      <img src="{{asset('photos/image4.jpg')}}" class="card-img-top" alt="..." style="height: 100%;">
                           <div class="card-body">
                               <h5 class="card-title">Check Scores</h5>
                             <a href="#" class="btn btn-primary">Go</a>
                      </div>
                   </div>
                </div>







  </div>


  </div>

</section>


<footer class="mt-4" style="background: #c3c3c3;  padding: 20px;">
        <h4 class="fs-5 text-center">Copyright@Group-21,  2022</h4>
    </footer>

@endsection
