@extends('masters.handicraftMaster')

@section('main')

  <div class="jumbotron jumbotron-other container-fluid">
    <div class="container">
      <h1 class="display-3 text-white">Ready to order? So are we!</h1>
    </div>
  </div>

  <div class="container">

    <div class="p-2 pt-md-4 pb-md-3 mx-auto text-center">
      <h1 class="display-4">Your details</h1>
    </div>

    <div class="row">


      <div class="col-md-8 offset-2">
        <h4 class="mb-3">Your address</h4>
        <form class="needs-validation" action="order.html" method="get" novalidate>
          <div class="row">
            <div class="col-md-6 mb-3 form-group">
              <label for="firstName">First name</label>
              <input type="text" class="form-control" id="firstName" placeholder="Your first name">
            </div>
            <div class="col-md-6 mb-3 form-group">
              <label for="lastName">Last name</label>
              <input type="text" class="form-control" id="lastName" placeholder="Your last name">
            </div>
          </div>

          <div class="mb-3">
            <label for="email">Email</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">@</span>
              </div>
              <input type="text" class="form-control" id="email" placeholder="Email">
            </div>
          </div>

          <div class="mb-3 form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" placeholder="Bakery street">
          </div>

          <div class="mb-3">
            <div class="row">
              <div class="col-md-6 mb-3 form-group">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" placeholder="Zip code">
              </div>
              <div class="col-md-6 mb-3 form-group">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" placeholder="City">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4 mb-3 form-group">
              <label for="state">State</label>
              <select class="custom-select d-block w-100" id="state">
                <option value="">Select state...</option>
                <option>Not applicable</option>
                <option> Alabama</option>
                <option>Alaska</option>
                <option>Arizona</option>
                <option>Arkansas</option>
                <option>California</option>
                <option>Colorado</option>
                <option>Connecticut</option>
                <option>Delaware</option>
                <option>Florida</option>
                <option>Georgia</option>
                <option>Hawaii</option>
                <option>Idaho</option>
              </select>
            </div>
            <div class="col-md-5 mb-3 form-group">
              <label for="country">Country</label>
              <select class="custom-select d-block w-100" id="country">
                <option value="">Select country</option>
                <option>Belgium</option>
                <option>France</option>
                <option>Germany</option>
                <option>United Kingdom</option>
                <option>United States</option>
              </select>
            </div>

          </div>

          <div class="mb-3">
            <div class="form-group">
              <label for="remarks">Remarks</label>
              <textarea class="form-control" id="remarks" rows="3"></textarea>
            </div>
          </div>

          <div class="mb-5">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="saveShipping">
              <label class="custom-control-label" for="saveShipping">Remember my shipping
                information</label>
            </div>
          </div>

          <button class="btn btn-success btn-lg btn-block mb-3" type="submit">Place your order
            now!
          </button>

        </form>
      </div>
    </div>
@endsection
