<?php
require('./vendor/autoload.php'); ?>

<html>
<head>

	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">

	<?php 
		Marketcloud\Marketcloud::setCredentials(array(
		'public_key' =>'59b06cea-50aa-4a7e-b234-46e63e910d4b',
		'secret_key' =>'QxrFGWbr7/BQj0CT097/II/mCwukj7M8sXOSGZtZsKg='
		));
	 ?>
</head>
<body>
<?php

	$query = array("id" => "23243");
	$product = Marketcloud\Products::getById(232435);
	$product = $product->body->data ;

	$q2 = array("published" => true);
	$pord = Marketcloud\Products::get($q2);
	#$pord = $pord->body->data;


 ?>
<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container" >
			<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
				<a href="" class="navbar-brand">NAMA</a>
			</div>
			
			<div class="collapse navbar-collapse" id="navi">
				<ul class="nav navbar-nav">
					<li class="active"><a>P1</a></li>

					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" >P2<span class="caret"></span></a>					
					<ul class="dropdown-menu">
						<li><a >P21</a></li>
						<li><a >P22</a></li>
					</ul>
					</li>
				<li><a>P3</a></li>
				<li><a>P4</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
						<li><a href=""><span class="glyphicon glyphicon-search "></span> </a></li>
					<li>
						<button class="btn btn-default btn-lg btn-link"><span class="glyphicon glyphicon-shopping-cart"></span></button>
						<span class="badge badge-notify" style="top: -10;position: relative;top: -10px; left: -19px; background-color: red">1</span>
					</li>
				</ul>
				</div>
		</div>
	</nav>

	<div class="container-fluid" style="height: 60px; background-color: lavender ; padding-top: 180px">
		
	</div>

	<div class="container" style="padding-top: 60px">
		<div class="row">
			<div class="col-md-8">

					<div class="row">
						<div class="col-md-4">
							<img src="pic/one5.jpg" class="img-thumbnail" width="304" height="236">
						</div>
					<div class="col-md-8 col-xs-4" >
						<table class="table">
							<thead>
								<tr>
									<th>
										<h4 id="prod_name"><strong><?php echo $product->name; ?></strong></h4>
										<small>G5005 (Ori Set)</small>
									</th>
								</tr>
							</thead>
							<tbody>			
								<tr>
									<th>Warna</th>
									<th>
										<span><a href="" class="btn glyphicon glyphicon-minus btn-danger" ></a></span>
										<input type="text" name="" value="1" style="width: 30px" disabled="">
										<span><a href="" class="btn glyphicon glyphicon-plus btn-info"></a></span>
									</th>
								</tr>

								<tr>
									<th id="prod_price">RM15.00</th>
									<th><a href="" class="glyphicon glyphicon-shopping-cart btn-lg btn-link btn-default"></a></th>
								</tr>

								<tr>
									<th>Pilihan Kaler</th>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
		</div>

			<div class="col-md-4 col-xs-2" style="background-color: lavender">
					<table class="table">
						<thead>
							<tr>
								<th>One Plus FIve <br><small>G5005 (Ori Set)</small></th>
							</tr>
						</thead>
					</table>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		
	</div>
	<div class="container" style="padding-top: 60px">
		<h3><strong>Other Items</strong></h3>
		<div class="row">
		<?php 
			if($pord->body->status == true){
			foreach ($pord->body->data as$disp ) {
	
		 ?>
			<div class="col-md-3 productbox" >

				<img src="pic/onex.jpg" class="img-thumbnail img-responsive" width="180" height="auto">				
				<div class="boxed" style="border: 0.1px solid #ecf0f1">
					<div style="padding-top: 10px;text-align: center;"><?php echo $disp->name; ?></div>
					<div style="padding-top: 4px;text-align: center;"><small>RM <?php echo $disp->price;?></small></div>
					<button class="btn btn-lg btn-link"><span class="glyphicon glyphicon-shopping-cart"></span></button>
					<button class="btn btn-lg btn-link"><span class="glyphicon glyphicon-search "></span></button>
				</div>
			</div>
		<?php 
			}
		}
 		?>
		</div>
	</div>

</body>

<script type="text/javascript">
	
/*	var product_id = '232435'; 
	global var NAMA;
	var marketcloud = new MarketCloud.Client({
		public_key : '78d328a9-ffc6-40ce-8e5c-c62a620976be'
	})

	marketcloud.products.getById(product_id,function(err,response){
		return response.
	}) 

	

	document.getElementById('prod_name').innerHTML =NAMA;	
*/
</script>
</html>