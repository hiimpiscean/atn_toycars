<input type="hidden" name="id" value="{{old('id')?? $student->id}}">
<div class="form-group">
  <label for="name" class="font-weight-bold">Name</label>
  <input type="text" class="form-control" id="name" name="name" value="{{old('name')?? $student->name}}">
  {{--        when removing title value to trigger "required" validation, --}}
  {{--        old('title') is not set so $book['title'] is shown--}}
  {{--        it is because redirect()->back() calls edit() which provides $book for view--}}
</div>

<div class="form-group">
  <label for="email" class="font-weight-bold">Email</label>
  <input type="text" class="form-control" id="email" name="email" value="{{old('email')?? $student->email}}">
</div>

<div class="form-group">
  <label for="contact" class="font-weight-bold">Contact</label>
  <input type="number" class="form-control" id="contact" name="contact" min="0" value="{{old('contact')?? $student->contact}}">
</div>

