@extends('master')
@section('container')


<form action="{{ url('successful') }}" method="get" class="row g-1">
    {!! csrf_field() !!}
    <fieldset><h1>Payment from</h1></fieldset>
    <div class="col-md-9">
      <label for="name" class="form-label">Card Holder Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Card holder name" required>
    </div>


    <div class="col-md-5">
        <label for="card" class="form-label">Card Number</label>
        <input type="text" class="form-control" id="card" name="card" placeholder="Card Number" required>
      </div>

      <div class="col-md-4">
        <label for="cvv" class="form-label">CVV</label>
        <input type="text" class="form-control" id="cvv" name="cvv" placeholder="CVV" required>
      </div>
      <div class="col-md-4">
        <label for="expire" class="form-label">Expire date</label>
        <input type="date" class="form-control" id="expire" name="expire" placeholder="CVV" required>
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
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>




@endsection
