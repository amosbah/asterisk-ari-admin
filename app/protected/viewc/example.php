<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="shortcut icon" type="image/ico"
	href="http://www.datatables.net/favicon.ico">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title><?php echo $this->data['title']; ?></title>
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css"
	href="<?php echo $data['rootUrl']; ?>global/public/stylesheets/dataTables.bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo $data['rootUrl']; ?>global/public/stylesheets/shCore.css">
<link rel="stylesheet" type="text/css" href="<?php echo $data['rootUrl']; ?>global/public/stylesheets/demo.css">
<style type="text/css" class="init">
</style>
<style>
  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
</style>

<script type="text/javascript" language="javascript"
	src="<?php echo $data['rootUrl']; ?>global/public/javascripts/jquery.dataTables.js">
	
</script>
<script type="text/javascript" language="javascript"
	src="<?php echo $data['rootUrl']; ?>global/public/javascripts/dataTables.bootstrap.js">
	
</script>
<script type="text/javascript" language="javascript"
	src="<?php echo $data['rootUrl']; ?>global/public/javascripts/shCore.js">
	
</script>
<script type="text/javascript" language="javascript"
	src="<?php echo $data['rootUrl']; ?>global/public/javascripts/demo.js">
	
</script>
<script type="text/javascript" language="javascript" class="init">
	$(document).ready(function() {
	    $('#Dialplan').DataTable(
		{
		    "processing" : false,
		    "serverSide" : false,
		    "ordering" : false,
		    "columns": [
			  {
				 "data": 0/*,
				 "render": function(data, type, row, meta){
					 data = '<a href="<?php echo $data['rootUrl']; ?>endpoint/view/' + data + '/' + '">' + data + '</a>';
					 return data;
				 }*/
			  },
			  { "data": 1 }
		   ]
		}
	    );
	} );
</script>
</head>
<body class="dt-example dt-example-bootstrap">

	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="<?php echo $data['rootUrl']; ?>">ARI-ADMIN</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li><a href="<?php echo $data['rootUrl'] . 'cdr'; ?>"><span class="glyphicon glyphicon-list"></span> CDR</a></li>
		  <li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-phone-alt"></span> ENDPOINTS</a>
			<ul class="dropdown-menu">
			  <li><a href="<?php echo $data['rootUrl'] . 'endpoints/show'; ?>"><span class="glyphicon glyphicon-align-justify"></span> LIST</a></li>
			  <li><a href="#"><span class="glyphicon glyphicon-floppy-disk"></span> NEW</a></li>
			</ul>
		  </li>
		  <li class="active"><a href="<?php echo $data['rootUrl'] . 'dialplan'; ?>"><span class="glyphicon glyphicon-list-alt"></span> DIALPLAN</a></li>
		  <li><a href="<?php echo $data['rootUrl'] . 'apps'; ?>"><span class="glyphicon glyphicon-credit-card"></span> APPS</a></li>
	      <li><a href="<?php echo $data['rootUrl'] . 'channels'; ?>"><span class="glyphicon glyphicon-random"></span> CHANNELS</a></li>
	      <li><a href="<?php echo $data['rootUrl'] . 'bridges'; ?>"><span class="glyphicon glyphicon-earphone"></span> BRIDGES</a></li>
	    </ul>
	  </div>
	</nav>
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="<?php echo $data['rootUrl']; ?>">AST-MANAGER</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li><a href="<?php echo $data['rootUrl'] . 'cdr'; ?>"><span class="glyphicon glyphicon-list"></span> CDR</a></li>
		  <li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-phone-alt"></span> ENDPOINTS</a>
			<ul class="dropdown-menu">
			  <li><a href="<?php echo $data['rootUrl'] . 'endpoints/show'; ?>"><span class="glyphicon glyphicon-align-justify"></span> LIST</a></li>
			  <li><a href="#"><span class="glyphicon glyphicon-floppy-disk"></span> NEW</a></li>
			</ul>
		  </li>
		  <li><a href="<?php echo $data['rootUrl'] . 'medias'; ?>"><span class="glyphicon glyphicon-cloud"></span> MEDIAS</a></li>
		  <li class="active"><a href="<?php echo $data['rootUrl'] . 'dialplan'; ?>"><span class="glyphicon glyphicon-list-alt"></span> DIALPLAN</a></li>
		  <li><a href="<?php echo $data['rootUrl'] . 'apps'; ?>"><span class="glyphicon glyphicon-credit-card"></span> APPS</a></li>
          <li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-th"></span> CONFIG</a>
			<ul class="dropdown-menu">
			  <li><a href="#"> EDITOR</a></li>
			  <li><a href="#"> Page 1-2</a></li>
			  <li><a href="#"> Page 1-3</a></li>
			</ul>
		   </li>
	      <li><a href="<?php echo $data['rootUrl'] . 'channels'; ?>"><span class="glyphicon glyphicon-random"></span> CHANNELS</a></li>
	      <li><a href="<?php echo $data['rootUrl'] . 'bridges'; ?>"><span class="glyphicon glyphicon-earphone"></span> BRIDGES</a></li>
	    </ul>
	  </div>
	</nav>



	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">CONTEXTS</div>
			<div class="panel-body">
				<section>
					<div class="demo-html"></div>
					<table id="Dialplan" class="table table-striped table-bordered"
						cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>NAME</th>
								<th>CREATED BY</th>
							</tr>
						</thead>
						<tbody>
						<?php
						      foreach ($data['contexts'] as $key => $value) {
						      echo '<tr>';
							  //echo '<td>' . '<a href=' . $data['rootUrl'] . 'dialplan/view/' . $key . '/' . '>' .$key. '</a>' . '</td>';
							  echo '<td>' . '<a data-toggle="modal" href="#myModal">' .$key. '</a>' . '</td>';
							  echo '<td>' . $value . '</td>';
							echo '</tr>';
						      }
						?>
						</tbody>
					</table>
				</section>

			</div>
		</div>
		<div class="panel panel-default">
		  <div class="panel-heading">CONTEXTS</div>
		  <div class="panel-body">
		    <div class="jumbotron">
		      <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile-first projects on the web.</p>
		    </div>
		   </div>
		</div>
		
		<!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog">
		  <div class="modal-dialog">
		  
		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header" style="padding:35px 50px;">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
		      </div>
		      <div class="modal-body" style="padding:40px 50px;">
			<form role="form">
			  <div class="form-group">
			    <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
			    <input type="text" class="form-control" id="usrname" placeholder="Enter email">
			  </div>
			  <div class="form-group">
			    <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
			    <input type="text" class="form-control" id="psw" placeholder="Enter password">
			  </div>
			  <div class="checkbox">
			    <label><input type="checkbox" value="" checked>Remember me</label>
			  </div>
			    <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
			</form>
		      </div>
		      <div class="modal-footer">
			<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
			<p>Not a member? <a href="#">Sign Up</a></p>
			<p>Forgot <a href="#">Password?</a></p>
		      </div>
		    </div>
		    
		  </div>
		</div> 

	</div>

</body>
</html>
