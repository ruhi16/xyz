@extends('layouts.baselayout')
@section('title','Dashboard')

@section('header')
	@include('layouts.navbar')
@endsection

@section('content')
<h1>Dashboard</h1>
<div>
{{-- <a href="{{ url('/records') }}" class="btn btn-success pull-right">Add New Record</a>

<div class="clearfix"></div> --}}
</div>
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
<div class="panel panel-default">   

    	<div class="panel-heading">
      		<h3 class="panel-title pull-left">Death Persons Details</h3>
			<a href="{{ url('/records') }}" class="btn btn-success pull-right">Add New Record</a>
			<div class="clearfix"></div>
		</div>

		<div class="panel-body">

			<table class="table table-bordered" id="myTable">
			<thead>
				<tr>	
					<th>SL</th>
					<th>Death Person Name</th>
					<th>Voter ID</th>
					<th>Adhaar ID</th>
					<th>Address</th>
					<th>GP Name</th>
					<th>Date of Death</th>
					<th>Benificiary Name</th>
					<th>Relationship</th>
					{{--  <th>Bn. Voter ID</th>  --}}
					<th>Bn. Adhaar ID</th>
					<th>Amount</th>
					<th>Received Date</th>
					<th>Action</th>
			</tr>
			</thead>
			<tbody>
			@foreach($records as $record)
				<tr>
					<td>{{ $record->id }}</td>
					<td>{{ $record->dpname }}</td>
					<td>{{ $record->dpvoterid }}</td>
					<td>{{ $record->dpadhaarid }}</td>
					<td>{{ $record->dpaddr }}</td>
					<td>{{ $record->dpgp }}</td>
					<td>{{ $record->dpdeathdt }}</td>
					<td>{{ $record->bnname }}</td>
					<td>{{ $record->bnrelation }}</td>
					<td>{{ $record->bnadhaarid }}</td>
					<td>{{ $record->amount }}</td>
					<td>{{ $record->paydt }}</td>
					<td><a href="{{ url('/records-edit', [$record->id])}}" class="btn btn-primary">Edit</a></td>
				</tr>
			@endforeach
			</tbody>
			</table>





  
    </div>
</div>




<link rel="stylesheet" type="text/css" href="{{url('datatable/jquery.dataTables.min.css')}}" >
<script src="{{url('datatable/jquery.dataTables.min.js')}}"></script>


<script type="text/javascript">
  $(document).ready(function(e){
    $('#myTable').DataTable();
  });  
</script>



@endsection


@section('footer')
	@include('layouts.footer')
@endsection
