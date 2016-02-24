@extends('template.default')

@section('content')
<h3 style="color: #00cccc;">It devloped for adding BHARATI VIDYAPEETH UNIVERSITY college event. If you are event manager then <br>it's perfect
 place for you and you don't need to login or signup for posting event. </h3>
<div class="row">
  <form class="form-vertical" role="form" method="post" action="{{ route('update') }}">
  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
  <label class="form-label">Event Update</label>
  <input id="mail" type="email" name="email" class="form-control" value="" placehoder=" Your email">
  <span class="help-block">{{ $errors->first('email') }}</span>
  </div>
  <div class="form-group">
 &nbsp; &nbsp;<button type="submit" class="btn btn-default">Submit</button>
  </div>
  <input type="hidden" name="_token" value="{{ Session::token() }}">
  <input type="hidden" name="_token" value="{{ csrf_token() }}"
  </form>
  </div>
 @stop
