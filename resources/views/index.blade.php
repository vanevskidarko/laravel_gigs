@extends('layoute')
@section('content')
<div class="row mt-2">
    <div class="col-md-12">
        @foreach ($gigs as $gig)
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="..." class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{$gig->name}}</h5>
                  <p class="card-text">Band: {{$gig->band_name }}</p>
                  <p class="card-text">Genre: {{$gig->genre }}</p>

                  <p class="card-text"><small class="text-muted">{{$gig->created_at}}</small></p>
                </div>
              </div>
            </div>
          </div>
          @endforeach
    </div>
</div>

@endsection