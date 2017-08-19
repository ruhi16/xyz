@extends('layouts.baselayout')
@section('title','Dashboard')

@section('header')
	@include('layouts.navbar')
@endsection

@section('content')
<h1>Dashboard</h1>


<table class="table table-bordered">
<tr>	
		<td>Name		</td>
		<td>md5('encoding')</td>
		<td>Password	</td>
</tr>
@foreach($users as $user)
	<tr>
		<td>{{$user->name}}</td>
		<td>{{$user->password}}</td>
		<td>{{'asdf'}}</td>
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
