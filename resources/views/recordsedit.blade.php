@extends('layouts.baselayout')
@section('title','Dashboard')

@section('header')
	@include('layouts.navbar')
@endsection

@section('content')
<h1>Edit Benificiary Data...</h1>

<div class="panel panel-default">   

    <div class="panel-heading">
        <h3 class="panel-title pull-left">Death Persons Details</h3>
        
        <div class="clearfix"></div>
    </div>

    <div class="panel-body">
    
    <form class="form-horizontal" action="{{url('/recordsedit-submit')}}" method="post">
        {{ csrf_field() }}

            <input type="hidden" value="{{ $record->id }}" name="dpid">
        <div class="form-group">
            <label class="control-label col-sm-1" for="dpname">Name:</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" name="dpname" id="dpname" value="{{ $record->dpname }}" placeholder="Enter Name">
            </div>
        
            <label class="control-label col-sm-1" for="dpvoterid">Voter ID:</label>
            <div class="col-sm-2">
            <input type="text" class="form-control" name="dpvoterid" id="dpvoterid"  value="{{ $record->dpvoterid }}" placeholder="Enter Voter Id">
            </div>

            <label class="control-label col-sm-1" for="dpadhaarid">Adhaar:</label>
            <div class="col-sm-3">
            <input type="text" class="form-control" name="dpadhaarid" id="dpadhaarid" value="{{ $record->dpadhaarid }}" placeholder="Enter Name">
            </div>

        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="dpfhname"><small>Father or Husband Name:</small></label>
            <div class="col-sm-3">
            <input type="text" class="form-control" name="dpfhname" id="dpfhname" value="{{ $record->dphfname }}" placeholder="Enter Husband or Father Name">
            </div>

            <label class="control-label col-sm-1" for="dpvill">Village:</label>
            <div class="col-sm-2">
            <input type="text" class="form-control" name="dpvill" id="dpvill" value="{{ $record->dpaddr }}" placeholder="Enter Village">
            </div>

            <label class="control-label col-sm-1" for="dpgp">GP:</label>
            <div class="col-sm-3">
            <input type="text" class="form-control" name="dpgp" id="dpgp" value="{{ $record->dpgp }}"  placeholder="Enter GP Name">
            </div>

        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="bnname">Benificiary Name:</label>
            <div class="col-sm-3">
            <input type="text" class="form-control" name="bnname" id="bnname" value="{{ $record->bnname }}" placeholder="Enter Benificiary Name">
            </div>

            <label class="control-label col-sm-1" for="bnrelation">Relation:</label>
            <div class="col-sm-2">
            <input type="text" class="form-control" name="bnrelation" id="bnrelation" value="{{ $record->bnrelation }}" placeholder="Enter Relationship">
            </div>

            <label class="control-label col-sm-1" for="bnadhaarid">Adhaar:</label>
            <div class="col-sm-3">
            <input type="text" class="form-control" name="bnadhaarid" id="bnadhaarid" value="{{ $record->bnadhaarid }}" placeholder="Enter Name">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="dpdeathdt">Date of Death:</label>
            <div class="col-sm-3">
            <input type="date" class="form-control" name="dpdeathdt" id="dpdeathdt" value="{{ $record->dpdeathdt }}">
            </div>

            <label class="control-label col-sm-1" for="dpamount">Amount:</label>
            <div class="col-sm-2">
            <input type="text" class="form-control" name="dpamount" id="dpamount" value="{{ $record->amount }}" placeholder="Enter Amount">
            </div>

            <label class="control-label col-sm-1" for="dppaydt">Received:</label>
            <div class="col-sm-3">
            <input type="date" class="form-control" name="dppaydt" id="dppaydt" value="{{ $record->paydt }}">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-1 col-sm-4">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ url('/dashboard') }}" class="btn btn-default">Cancel</a>
            </div>
        </div>

    </form>

    



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
