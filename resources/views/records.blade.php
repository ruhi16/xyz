@extends('layouts.baselayout')
@section('title','Home')

@section('header')
	@include('layouts.navbar')
@endsection

@section('content')
<h1>Murshidabad Jiaganj Block</h1>
<h2>Samabathy Prakalpo</h2>

<div class="panel panel-default">
    <div class="panel-body">
    
    <form class="form-horizontal" action="{{url('/records-submit')}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="control-label col-sm-1" for="dpname">Name:</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" name="dpname" id="dpname" placeholder="Enter Name">
            </div>
        
            <label class="control-label col-sm-1" for="dpvoterid">Voter ID:</label>
            <div class="col-sm-2">
            <input type="text" class="form-control" name="dpvoterid" id="dpvoterid" placeholder="Enter Name">
            </div>

            <label class="control-label col-sm-1" for="dpadhaarid">Adhaar:</label>
            <div class="col-sm-3">
            <input type="text" class="form-control" name="dpadhaarid" id="dpadhaarid" placeholder="Enter Name">
            </div>

        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="dpfhname"><small>Father or Husband Name:</small></label>
            <div class="col-sm-3">
            <input type="text" class="form-control" name="dpfhname" id="dpfhname" placeholder="Enter Name">
            </div>

            <label class="control-label col-sm-1" for="dpvill">Village:</label>
            <div class="col-sm-2">
            <input type="text" class="form-control" name="dpvill" id="dpvill" placeholder="Enter Name">
            </div>

            <label class="control-label col-sm-1" for="dpgp">GP:</label>
            <div class="col-sm-3">
            <input type="text" class="form-control" name="dpgp" id="dpgp" placeholder="Enter Name">
            </div>

        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="bnname">Benificiary Name:</label>
            <div class="col-sm-3">
            <input type="text" class="form-control" name="bnname" id="bnname" placeholder="Enter Name">
            </div>

            <label class="control-label col-sm-1" for="bnrelation">Relation:</label>
            <div class="col-sm-2">
            <input type="text" class="form-control" name="bnrelation" id="bnrelation" placeholder="Enter Name">
            </div>

            <label class="control-label col-sm-1" for="bnadhaarid">Adhaar:</label>
            <div class="col-sm-3">
            <input type="text" class="form-control" name="bnadhaarid" id="bnadhaarid" placeholder="Enter Name">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="dpdeathdt">Date of Death:</label>
            <div class="col-sm-3">
            <input type="date" class="form-control" name="dpdeathdt" id="dpdeathdt" placeholder="Enter Name">
            </div>

            <label class="control-label col-sm-1" for="dpamount">Amount:</label>
            <div class="col-sm-2">
            <input type="text" class="form-control" name="dpamount" id="dpamount" placeholder="Enter Name">
            </div>

            <label class="control-label col-sm-1" for="dppaydt">Received:</label>
            <div class="col-sm-3">
            <input type="date" class="form-control" name="dppaydt" id="dppaydt" placeholder="Enter Name">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-1 col-sm-4">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-default">Reset</button>
            </div>
        </div>

    </form>





  
    </div>
</div>




<script type="text/javascript">
  $(document).ready(function(e){
    
  });
</script>


@endsection


@section('footer')
	@include('layouts.footer')
@endsection
