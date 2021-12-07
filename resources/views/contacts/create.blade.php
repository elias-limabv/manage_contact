@extends('contacts.layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('contact') }}" method="POST">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        
        @if ($errors->has('name'))
          <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
          </span>
        @endif
      
      </br>
        <label>Email Address</label></br>
        <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        
        @if ($errors->has('email'))
          <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
          </span>
        @endif
      
      </br>
        <label>Mobile</label></br>
        <input type="number" name="mobile" id="mobile" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>
        
        @if ($errors->has('mobile'))
          <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
          </span>
        @endif
       
       </br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop

