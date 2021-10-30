@extends('layoute')
@section('content')

<div class="row">
<div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Create a gig</h4>
        <form class="needs-validation" action="/gigs" method="POST" novalidate>
          @csrf
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="Name" class="form-label">Name</label>
              <input type="text" class="form-control" name="name" id="Name" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid  name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="bandName" class="form-label">Band name</label>
              <input type="text" class="form-control" name="band_name" id="bandName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid band name is required.
              </div>
            </div>


            <div class="col-md-4">
              <label for="state" class="form-label">Genre</label>
              <select class="form-select" name="genre" id="genre" required>
                <option value="">Choose...</option>
                <option value="1">Genre 1</option>
                <option value="2">Genre 2</option>
                <option value="3">Genre 3</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid genre.
              </div>
            </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Add a gig</button>
        </form>
      </div>
    </div>
</div>
    
 
@endsection