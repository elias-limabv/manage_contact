@extends('main')

@section('title', '| Contact')

@section('content')
        <div class="row">
            <div class="col-md-12">
               <h1>Contact Me</h1> 
               <hr>
               <form>
                   <div class="form-group">
                       <label name="email">Email:</label>
                       <input id="email" type="email" name="email" class="form-control">
                   </div>

                   <div class="form-group">
                       <label name="subjet">Subject:</label>
                       <input id="subjet" type="text" name="subjet" class="form-control">
                   </div>

                   <div class="form-group">
                       <label name="email">Email</label>
                       <textarea id="message" name="message" class="form-control">Type your message here...</textarea> 
                   </div>

                   <input type="submit" value="Send Message" class="btn btn-success">

               </form>
        </div>
    </div>
@endsection