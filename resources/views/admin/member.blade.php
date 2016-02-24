@extends('template.default')

@section('content')
@foreach($events as $event)
<div class="row">
 <div  class="panel panel-default">
  <div class="panel-heading" style="color: #00cccc;">{{ $event->event_name}}</div>
  <div class="panel-body">
  <div class="col-md-6">
  <img src="uploads/{{ $event->filepath }}" height="300" width="50%" alt="{{ $event->name }}">
  </div>
  <div class="col-md-6">
  <div class="form-group">
  <h3>Event Link:&nbsp;<span class="glyphicon glyphicon-link"></span><a href="{{ $event->event_link }}" target="_blank"> {{ $event->event_link }}</a></h3> 
  </div>
  <div class="form-group">
   <h3>Contact No:&nbsp;<span class="glyphicon glyphicon-phone"></span> {{ $event->number }}</h3>
  </div>
  <div class="form-group">
   <h3>Posted by:&nbsp;<span class="glyphicon glyphicon-user"></span> {{ $event->name }}</h3>
  </div>
  <div class="form-group">
   <h3>Day:&nbsp;<span class="glyphicon glyphicon-calendar"></span> {{ $event->time }}</h3>
  </div>
  <div class="form-group">
   <h3>time:&nbsp;<span class="glyphicon glyphicon-time"></span> {{ $event->hour }}</h3>
  </div>
  <div class="form-group">
   <h3>Summary: {{ $event->summary }}</h3>
  </div>
  <div class="form-group">
  <a href="{{ URL::route('delete',$event->id) }}"><span class="glyphicon glyphicon-trash"></span> Delete event</button>
  </div>
  <div class="form-group">
  <a href="{{ URL::route('post',$event->id) }}"><span class="glyphicon glyphicon-paste"></span> Post event</a>
  </div>
  </div>
  </div>
</div>
</div>
@endforeach
@stop