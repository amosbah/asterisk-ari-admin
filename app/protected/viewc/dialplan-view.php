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
		    "stateSave": true,
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

	<div class="container">
	
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo $data['rootUrl']; ?>">ARI-ADMIN</a>
                </div>
                <ul class="nav navbar-nav">
                <li><a href="<?php echo $data['rootUrl'] . 'apps'; ?>"><span class="glyphicon glyphicon-credit-card"></span> APPS</a></li>
                <li class="active"><a href="<?php echo $data['rootUrl'] . 'dialplan'; ?>"><span class="glyphicon glyphicon-list-alt"></span> DIALPLAN</a></li>
                <li><a href="<?php echo $data['rootUrl'] . 'endpoints/show'; ?>"><span class="glyphicon glyphicon-phone-alt"></span> ENDPOINTS</a></li>
                <li><a href="<?php echo $data['rootUrl'] . 'channels'; ?>"><span class="glyphicon glyphicon-random"></span> CHANNELS</a></li>
                <li><a href="<?php echo $data['rootUrl'] . 'bridges'; ?>"><span class="glyphicon glyphicon-earphone"></span> BRIDGES</a></li>
                <li><a href="<?php echo $data['rootUrl'] . 'cdr'; ?>"><span class="glyphicon glyphicon-list"></span> CDR</a></li>
                </ul>
            </div>
        </nav>

		<ol class="breadcrumb">
			<li><a href="<?php echo $data['rootUrl']; ?>">HOME</a></li>
			<li class="active">DIALPLAN</li>
		</ol>
		<div class="panel panel-primary">
			<div class="panel-heading">ARI DIALPLAN</div>
			<div class="panel-body">
				<section>
					<div class="demo-html"></div>
					<table id="Dialplan" class="table table-striped table-bordered"
						cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>ID</th>
								<th>DATA</th>
							</tr>
						</thead>
						<tbody>
						<?php
						      foreach ($data['contexts'] as $context) {
						      echo '<tr>';
							  echo '<td>' . '<a href=' . $data['rootUrl'] . 'dialplan/view/' . $context->{'id'} . '/' . '>' .$context->{'id'}. '</a>' . '</td>';
							  echo '<td>' . $context->{'var_val'} . '</td>';
							echo '</tr>';
						      }
						?>
						</tbody>
					</table>
				</section>
				<div id="browse_app">
				      <a class="btn btn-large btn-success disabled" href="<?php echo $data['rootUrl'] . 'dialplan/add';?>"><span class="glyphicon glyphicon-plus"></span> ADD</a>
				      <a class="btn btn-large btn-warning" href="<?php echo $data['rootUrl'] . 'dialplan';?>"><span class="glyphicon glyphicon-refresh"></span> REFRESH</a>
				</div>


			</div>
		</div>
	</div>
</body>
</html>
