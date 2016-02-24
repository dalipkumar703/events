@extends('template.default')

@section('content')
<div class="container">
  <div class="panel panel-default">
    <div style="color: #00cccc;" class="panel-heading">Add New Event</div>
    <div class="panel-body">
	<h3 style="align: center;">All field are necessary</h3>
	<form class="form-vertical" role="form" method="post" action="{{ route('home') }}" enctype="multipart/form-data">
    <div class="form-group{{ $errors->has('eventname') ? ' has-error' : '' }}">
<label class="form-label">Event Name</label>
<input id="text" type="text"  class="form-control" name="eventname" value="">
<span class="help-block">{{ $errors->first('eventname') }}</span>
    </div>
    <div class="form-group{{ $errors->has('link') ? ' has-error' : '' }}">
<label class="form-label">Event Link</label>
<input id="url" type="url" class="form-control" name="link" value="" placeholder="http://something.com">
  <span class="help-block">{{ $errors->first('link') }}</span>   
   </div>
    <div class="form-group{{ $errors->has('num') ? ' has-error' : '' }}">
<label class="form-label" for="number">Contact No.</label>
<input id="number" type="text" class="form-control" name="num">
<span class="help-block">{{ $errors->first('num') }}</span>   
   </div>
	 <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
<label class="form-label">Event Photo</label>
<input id="photo" type="file"  name="file" value="">
<span class="help-block">{{ $errors->first('file') }}</span>
    </div>
	<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
<label class="form-label">Post By</label>
<input id="text" type="text"  class="form-control" value="" name="name">
<span class="help-block">{{ $errors->first('name') }}</span>   
   </div>
   <div class="form-group{{ $errors->has('time') ? ' has-error' : '' }}">
<label class="form-label">Day <span class="glyphicon glyphicon-calendar"></span></label>
<input id="time" type="text"  class="form-control" value="" name="time" placeholder="dd-mm-yyyy">
<span class="help-block">{{ $errors->first('time') }}</span>   
   </div>
    <div class="form-group{{ $errors->has('hour') ? ' has-error' : '' }}">
<label class="form-label">Time <span class="glyphicon glyphicon-time"></span></label>
<input id="hour" type="text"  class="form-control" value="" name="hour" placeholder="h:m:s">
<span class="help-block">{{ $errors->first('hour') }}</span>   
   </div>
      <div class="form-group{{ $errors->has('summary') ? ' has-error' : '' }}">
<label class="form-label">Summary</label>
<textarea id="summary" type="text"   value="" name="summary" rows="5" placeholder="About Event"></textarea>
<span class="help-block">{{ $errors->first('summary') }}</span>   
   </div>
	<div class="form-group">
     <button type="submit" class="btn btn-default">Submit</button>
	 </div>
	 
	 <input type="hidden" name="_token" value="{{ csrf_token() }}">
	 <input type="hidden" name="_token" value="{{ Session::token() }}">
	 
	</form> 
</div>
  </div>
</div>

 @stop