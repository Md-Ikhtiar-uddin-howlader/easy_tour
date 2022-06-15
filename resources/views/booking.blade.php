@extends('master')
@section('container')


<form action="{{ url('booking') }}" method="post" class="row g-1">
    {!! csrf_field() !!}
    <fieldset><h1>Booking form</h1></fieldset>
    <div class="col-md-4">
      <label for="fname" class="form-label">First name</label>
      <input type="text" class="form-control" id="fname" name="fname" placeholder="First name" required>
    </div>
    <div class="col-md-4">
      <label for="lname" class="form-label">Last name</label>
      <input type="text" class="form-control" id="lname" name="lname" placeholder="Last name" required>
    </div>

    <div class="col-md-8">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email"  placeholder="Email" required>
      </div>

    <div class="col-md-8">
        <label for="passport" class="form-label">IC/Passport</label>
        <input type="text" class="form-control" id="passport" name="passport" placeholder="IC/Passport" required>
      </div>

      <div class="col-md-8">
        <label for="mobile" class="form-label">Mobile number</label>
        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile number" required>
      </div>

    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
        <label class="form-check-label" for="invalidCheck2">
          Agree to terms and conditions
        </label>
      </div>
    </div>
    <div class="col-12">
      <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
  </form>

@endsection
