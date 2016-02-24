<br>
<br>
<br>
<div class="row">
<form class="form-vertical" role="form" method="post" action="{{ route('search') }}">
<div class="form-group">
<input id="one" type="text" name="query" placeholder="Search for event" class="form-control" value="">
<button id="button" type="submit" class="btn btn-default">Search</button>
</div>
<input type="hidden" name="_token"  value="{{ csrf_token() }}">
<input type="hidden" name="_token" value="{{ Session::token() }}">
</form>
</div>