@extends('contacts.layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $contacts->name }}</h5>
        <p class="card-text">Email : {{ $contacts->email }}</p>
        <p class="card-text">Phone : {{ $contacts->mobile }}</p>

        <a href="/contact" class="btn btn-info">Voltar</a>
  </div>
      
    </hr>
    
  </div>
</div>