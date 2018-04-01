@extends('layouts.baselayout')
@section('title','Dashboard')

@section('header')
	@include('layouts.navbar')
@endsection

@section('content')
<h1>Dashboard</h1>

<a href="{{ url('/records') }}" class="btn btn-success pull-right">Add New Record</a>
<br>

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
@endforeach  --}}
<table class="table table-bordered">
<tr>	
		<th>SL</th>
		<th>Death Person Name</th>
		<th>Voter ID</th>
		<th>Adhaar ID</th>
		<th>Address</th>
		<th>GP Name</th>
		<th>Date of Death</th>
		<th>Benificiary Name</th>
		{{--  <th>Bn. Voter ID</th>  --}}
		<th>Bn. Adhaar ID</th>
		<th>Amount</th>
		<th>Received Date</th>
		<th>Action</th>
</tr>
@foreach($records as $record)
	<tr>
		<td>{{ $record->id }}</td>
		<td>{{ $record->dpname }}</td>
		<td>{{ $record->dpvoterid }}</td>
		<td>{{ $record->dpadhaarid }}</td>
		<td>{{ $record->addr }}</td>
		<td>{{ $record->dpgp }}</td>
		<td>{{ $record->dpdeathdt }}</td>
		<td>{{ $record->bnname }}</td>
		<td>{{ $record->bnadhaarid }}</td>
		<td>{{ $record->amount }}</td>
		<td>{{ $record->paydt }}</td>
		<td><a href="#" class="btn btn-primary">Edit</a></td>
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
