@extends('layouts.baselayout')
@section('title','Dashboard')

@section('header')
	@include('layouts.navbar')
@endsection

@section('content')
<h1>Dashboard</h1>


<table class="table table-bordered">
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
</table>








<script type="text/javascript">
  $(document).ready(function(e){
    
  });
</script>


@endsection


@section('footer')
	@include('layouts.footer')
@endsection
