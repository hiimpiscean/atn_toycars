@if (\Illuminate\Support\Facades\Session::get('msg') != null)
  {{--  https://getbootstrap.com/docs/4.6/components/alerts/#dismissing--}}
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{\Illuminate\Support\Facades\Session::get('msg')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif
@if(count($errors->all()))
  {{--  https://getbootstrap.com/docs/4.6/components/alerts/#dismissing--}}
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
{{--    <ul>
      @foreach($errors->all() as $e)
        <li>{{ $e }}</li>
      @endforeach
    </ul>--}}
    {{$errors->first()}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif
