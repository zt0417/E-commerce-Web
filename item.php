<?php
	//
	include_once "classes/PDOHelper.class.php";

	// item type name
	$itemType = "";

	if(isset($_GET["id"]))
	{
		// get id
		$id = $_GET["id"];

		//get inforamtion by id
		$pdo = new PDOHelper(array('charset'=> 'UTF8'));

		//build query string
		$sql="SELECT * FROM items AS i WHERE id='$id'";

		//call pdoHelper method getRow() and get result.
		$res = $pdo->getRow($sql);

		//
		if ($res["itemType"] == 1) {
			$itemType = "Clothes";
		}
		else if ($res["itemType"] == 2) {
			$itemType = "Shoes";
		}
		else if (condition) {
			$itemType = "Toys";
		}

		echo $itemType;
	}


?>


<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <title>Tong Zhang</title>

	    <!-- Bootstrap -->
	    <link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/item.css" rel="stylesheet">

	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
    </head>
    <body>
	<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
		    <a class="navbar-brand" href="index.html">Tong</a>
		</div>
		<ul class="nav navbar-nav">
		    <li><a href="index.html">Home</a></li>
		    <li class="active"><a href="myStore.html">My Store</a></li> 
		    <li><a href="myPhoto.html">My Photo</a></li> 
		    <li><a href="contactMe.html">Contact</a></li> 
		</ul>
	</div>
	</nav>
	<br><br><br>

	<div class="contrainer">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-3">
				<img src="<?php echo $res["itemPicture"] ?>"  class="img-thumbnail" alt="Cinque Terre" width="304" height="236"></img>
			</div>
			<div class="col-sm-3">
				<h3><?php echo $res["itemDescription"];?> <br><br>Price: $ <?php echo $res["itemPrice"];?> </h3>

				<br><br><br><br><br><br>

				 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buy Now</button>
					<!-- Modal -->
					<div class="modal fade" id="myModal" role="dialog">
					    <div class="modal-dialog">
					    
					        <!-- Modal content-->
					        <div class="modal-content">
					        	<div class="modal-header">
					          		<button type="button" class="close" data-dismiss="modal">&times;</button>
					          		<h4 class="modal-title">Still Buidling Now, Please Waiting...</h4>
					        	</div>
							    <form role="form">
							    	<div class="form-group">
							      		<label for="usr">User Name:</label>
							      		<input type="text" class="form-control" id="usr">
							    	</div>
							    	<div class="form-group">
							        	<label for="pwd">Password:</label>
							        	<input type="password" class="form-control" id="pwd">
							    	</div>
							    </form>
					        	<div class="modal-footer">
					            	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        	</div>
					      	</div>					
					    </div>
					</div>
				</div>			
			</div>
		</div>
	    <!-- Trigger the modal with a button -->
		<div class="footBlank"></div>

		<!-- footer -->
		<div>
			<div class="navbar navbar-default navbar-fixed-bottom">
				<div class="contrainer">
					<p class="navbar-text">Site Build By Tong</p>
				</div>
			</div>
		</div>
    	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    	<!-- Include all compiled plugins (below), or include individual files as needed -->
    	<script src="js/bootstrap.min.js"></script>
    </body>
</html>