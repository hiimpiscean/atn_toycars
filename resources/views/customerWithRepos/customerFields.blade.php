
{{--/////////////////////////////////////////////////--}}

<style>

  .boy{
    margin-right: 100px;
    margin-left: 90px;
    margin-top: 50px;
    /*border: solid 1px red;*/
    width: 85%;

  }

</style>

<input type="hidden" name="id_c" value="{{old('id_c')?? $customer->id_c}}">

<div class="container boy">
  <div class="p-2 pt-md-4 pb-md-3 mx-auto text-center">
  </div>
  <div class="row">

    <div class="col-md-8 offset-2">
      <div class="row">
        <div class="col-md-6 mb-3 form-group">
          <label for="firstName">Full Name</label>
          <input type="text" class="form-control" id="fullName_c" name="fullName_c" value="{{old('fullName_c')?? $customer->fullName_c}}">
        </div>
        <div class="col-md-6 mb-3 form-group">
          <label for="lastName">DOB</label>
          <input type="date" class="form-control" id="dob" name="dob" value="{{old('dob')?? $customer->dob}}">
        </div>
      </div>



      <div class="mb-3 form-group">
        <label for="gender">Gender</label>
        <input type="text" class="form-control" id="gender" name="gender" value="{{old('gender')?? $customer->gender}}">
      </div>
{{--//////////////////////////////////////////--}}


{{--      ///////////////////////////////////////////////////////////////--}}
      <div class="mb-3">
        <label for="email">Email</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">@</span>
          </div>
          <input type="text" class="form-control" id="email_c" name="email_c" value="{{old('email_c')?? $customer->email_c}}">
        </div>
      </div>

      <div class="mb-3 form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address_c" name="address_c" value="{{old('address_c')?? $customer->address_c}}">
      </div>

      <div class="mb-3 form-group">
        <label for="phone_c">Phone</label>
        <input type="text" class="form-control" id="phone_c" name="phone_c" value="{{old('phone_c')?? $customer->phone_c}}">
      </div>
    </div>
  </div>
</div>




