@extends('layouts.baselayout')
@section('title','Dashboard')
	@include('layouts.navbar')
@section('header')
	
@endsection

@section('content')
<h1>ABCDE</h1>

<div class="container">
    <div class="row">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Click here for list</button>
		<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div id="custom-search-input">
						<div class="input-group col-md-12">
							<input id="search" type="text" class="form-control input-lg" placeholder="Search" />
							<span class="input-group-btn">
								<button class="btn btn-info btn-lg" type="button">
									<i class="glyphicon glyphicon-search"></i>
								</button>
							</span>
						</div>
						<ul class="list-group">
							<li class="list-group-item">Cras justo odio</li>
							<li class="list-group-item">Dapibus ac facilisis in</li>
							<li class="list-group-item">Morbi leo risus</li>
							<li class="list-group-item">Porta ac consectetur ac</li>
							<li class="list-group-item">Vestibulum at eros</li><li class="list-group-item">Cras justo odio</li>
							<li class="list-group-item">Dapibus ac facilisis in</li>
							<li class="list-group-item">Morbi leo risus</li>
							<li class="list-group-item">Porta ac consectetur ac</li>
							<li class="list-group-item">Vestibulum at eros</li><li class="list-group-item">Cras justo odio</li>
							<li class="list-group-item">Dapibus ac facilisis in</li>
							<li class="list-group-item">Morbi leo risus</li>
							<li class="list-group-item">Porta ac consectetur ac</li>
							<li class="list-group-item">Vestibulum at eros</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<br>

<select class="selectpicker" data-live-search="true">
     <option>Mustard</option>
      <option>Ketchup</option>
      <option>Relish</option>
</select>


<script type="text/javascript">
	 $('.selectpicker').selectpicker({
      style: 'btn-info',
      size: 4
  });
</script>


<script type="text/javascript">

$(function(){
	$('#search').keyup(function(){	
		var current_query = $('#search').val();
		if (current_query !== "") {
			$(".list-group li").hide();
			$(".list-group li").each(function(){
				var current_keyword = $(this).text();
				if (current_keyword.indexOf(current_query) >=0) {
					$(this).show();    	 	
				};
			});    	
		} else {
			$(".list-group li").show();
		};
	});
});


</script>








<script type="text/javascript">
  $(document).ready(function(e){
    
  });
</script>


@endsection


@section('footer')
	@include('layouts.footer')
@endsection
