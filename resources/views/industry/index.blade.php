@extends('layouts.master')
@section('content')
</div>
<div class="container">
<h2>Industries</h2>
<ul>
@foreach($industries as $industry)
	<li>{{$industry->name}}</li>
@endforeach
</ul>
</div>
@endsection