@extends('contacts.layout')
@section('content')
<div class="card">
  <div class="card-header"><h1>Create New Contact</h1>
 <a href="/contact" class="btn btn-info btn-lg d-none d-lg-inline-block mb-1 mb-md-1 ml-md-0">Voltar</a>
  </div>

  <div class="card-body">

        @if ($message = Session::get('success'))

            <div class="alert alert-success">
              <p>{{ $message }}</p>
            </div>
        @endif
      
      <form action="{{ url('contact') }}" method="POST">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name" autofocus>
         @if ($errors->has('name'))
             <span class="text-danger">{{ $errors->first('name') }}</span>
          @endif
      
      </br>
        <label>Email Address</label></br>
        <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail" autofocus>
        
        @if ($errors->has('email'))
             <span class="text-danger">{{ $errors->first('email') }}</span>
          @endif
      
      </br>
        <label>Mobile</label></br>
        <input type="number" name="mobile" id="mobile" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" placeholder="Phone Number" autofocus>
        
        @if ($errors->has('mobile'))
             <span class="text-danger">{{ $errors->first('mobile') }}</span>
          @endif
       
       </br>
        <input type="submit" value="Save" class="btn btn-success btn-lg"></br>
    </form>
  
  </div>
</div>
@stop

