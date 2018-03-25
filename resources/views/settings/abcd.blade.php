@extends('layouts.baselayout')
@section('title','Dashboard')
	@include('layouts.navbar')
@section('header')
	
@endsection

@section('content')
<div class="container">

<h1 class="page-header">Settings...</h1>

{{-- <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <img alt="Brand" src="...">
      </a>
    </div>
  </div>
</nav>
 --}}	
{{--  <table class="table table-bordered">
<tr>	
		<th>Name		</th>
		<th>Email		</th>
		<th>md5('encoding')</th>
		<th>Password	</th>
		<th>User Role</th>
</tr>
@foreach($users as $user)
	<tr>
		<td>{{$user->name}}</td>
		<td>{{$user->email}}</td>
		<td>{{$user->password}}</td>
		<td>{{'asdf'}}</td>
		<td>{{session()->get('role')}}</td>
	</tr>
@endforeach
</table>  --}}
<ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#">Library</a></li>
  <li class="active">Data</li>
</ol>

 <div class="row">
		<div class="col-md-3">		
	          <div class="list-group">
	            <a href="#" class="list-group-item active">Link</a>
	            <a href="#" class="list-group-item">Link</a>
	            <a href="#" class="list-group-item">Link</a>
	            <a href="#" class="list-group-item">Link</a>
	            <a href="#" class="list-group-item">Link</a>
	            <a href="#" class="list-group-item">Link</a>
	            <a href="#" class="list-group-item">Link</a>
	            <a href="#" class="list-group-item">Link</a>
	            <a href="#" class="list-group-item">Link</a>
	            <a href="#" class="list-group-item">Link</a>
	          </div>        
	    </div><!--/1st Column-->

       	<div class="col-md-9">
       		<div class="jumbotron">
           		<h1>Hello, world!</h1>
           		<p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
        	</div><!--/Jumbotron-->


		
			<div class="row-fluid">
		      <select class="selectpicker" data-show-subtext="true" data-live-search="true">
		        <option data-subtext="Rep California">Tom Foolery</option>
		        <option data-subtext="Sen California">Bill Gordon</option>
		        <option data-subtext="Sen Massacusetts">Elizabeth Warren</option>
		        <option data-subtext="Rep Alabama">Mario Flores</option>
		        <option data-subtext="Rep Alaska">Don Young</option>
		        <option data-subtext="Rep California" disabled="disabled">Marvin Martinez</option>
		        
		      </select>     
		    </div>




       	</div><!--/2nd column-->
  	</div><!--/row-->
</div><!--/container-->












<script type="text/javascript">
  $(document).ready(function(e){
    
  });
</script>


@endsection


@section('footer')
	@include('layouts.footer')
@endsection
