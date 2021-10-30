@extends('layoute')
@section('content')
@foreach ($gigs as $gig)

<div class="row mt-2">
<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4 ">
      <img src="https://images.unsplash.com/photo-1510915361894-db8b60106cb1?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80" class="img-fluid rounded-center" alt="..." width="900px">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{$gig->name}}</h5>
        <p class="card-text">Band: {{$gig->band_name}}</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
  
</div>
@endforeach

</div>
@endsection