@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
      <a href="{{ route('employee.index') }}" class="btn btn-lg btn-block btn-primary move">View all</a>
      <h1 class="text-center">Add new employee</h1>
    <hr>
    <form data-parsley-validate='' method="POST" action="{{ route('employee.store') }}">
        
      <div class="form-group">
        <label name="first_name">First name*:</label>
        <input id="first_name" name="first_name" data-parsley-length="[3, 191]" required="" data-parsley-group="block1" class="form-control">
      </div>
        
      <div class="form-group">
        <label name="last_name">Last name*:</label>
        <input id="last_name" name="last_name" data-parsley-length="[3, 191]" required="" data-parsley-group="block1"  class="form-control">
      </div>
        
        <div class="form-group">
        <label name="adress">Address*:</label>
        <input id="adress" name="adress" data-parsley-length="[3, 191]" required="" data-parsley-group="block1"  class="form-control">
      </div>
        
        <div class="form-group">
        <label name="telephone_number">Phone number*:</label>
        <input id="telephone_number" name="telephone_number" data-parsley-length="[3, 30]" required="" data-parsley-group="block1"  class="form-control">
      </div>
        
        <div class="form-group">
        <label name="departament">Departament*:</label>
        <input id="departament" name="departament" data-parsley-length="[3, 191]" required="" data-parsley-group="block1"  class="form-control">
      </div>
        
         <div class="form-group">
        <label name="salary">Salary*:</label>
        <input id="salary" name="salary" data-parsley-type="number" required="" data-parsley-group="block1"  class="form-control">
      </div>
        
        <div class="form-group">
        <label name="position">Position*:</label>
        <input id="position" name="position" data-parsley-length="[3, 191]" required="" data-parsley-group="block1"  class="form-control">
      </div>
        
        <div class="form-group">
        <label name="email">Email address*:</label>
        <input id="email" name="email" type="email" data-parsley-length="[6, 191]" required="" data-parsley-group="block1"  class="form-control">
      </div>
      <input type="submit" value="Add new" class="btn btn-success btn-lg btn-block">
      <input type="hidden" name="_token" value="{{ Session::token() }}">
    </form>
  </div>
</div>
<br/>
    <br/>
@endsection




