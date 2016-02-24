@extends('template.default')

@section('content')
<div class="row">
<h1> Enter password for login</h1>
<form class="form-vertical" role="form" method="post" actioin="{{ route('admin.member') }}">
<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
<label class="form-label">Password</label>
<input id="password" type="password" name="password" value="" class="form-control">
<span class="help-block">{{ $errors->first('password') }}</span>
</div>
<div class="form-group">
<button type="submit" class="btn btn-default">Submit</button>
</div>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="_token" value="{{ Session::token() }}">
</form>
</div>
@stop

