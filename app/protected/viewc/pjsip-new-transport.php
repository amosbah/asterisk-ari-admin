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
<link rel="stylesheet" type="text/css"
	href="<?php echo $data['rootUrl']; ?>global/public/stylesheets/shCore.css">
<link rel="stylesheet" type="text/css"
	href="<?php echo $data['rootUrl']; ?>global/public/stylesheets/demo.css">
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
	$(document)
			.ready(
					function() {
						$('#Transp')
								.DataTable(
										{
											"processing" : true,
											"serverSide" : true,
											ajax : "<?php echo $data['rootUrl']; ?>global/public/scripts/cdr_processing.php",
											scrollY : 300,
											paging : false,
											searching : false,
											"ordering" : false,
											info : false,
											"columns" : [ {
												// The `data` parameter refers to the data for the cell (defined by the
												// `data` option, which defaults to the column being worked with, in
												// this case `data: 0`.
												"render" : function(data, type,	row) {
													return data + ' (' + row[1]
															+ ')';
												},
												"targets" : 0
												},
												{"data": null, "render": 1},
												{"data": null, "render": 2}
											]
										});
					});
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
                <li><a href="<?php echo $data['rootUrl'] . 'dialplan'; ?>"><span class="glyphicon glyphicon-list-alt"></span> DIALPLAN</a></li>
                <li><a href="<?php echo $data['rootUrl'] . 'endpoints/show'; ?>"><span class="glyphicon glyphicon-phone-alt"></span> ENDPOINTS</a></li>
                <li><a href="<?php echo $data['rootUrl'] . 'channels'; ?>"><span class="glyphicon glyphicon-random"></span> CHANNELS</a></li>
                <li class="active"><a href="<?php echo $data['rootUrl'] . 'bridges'; ?>"><span class="glyphicon glyphicon-earphone"></span> BRIDGES</a></li>
                <li><a href="<?php echo $data['rootUrl'] . 'cdr'; ?>"><span class="glyphicon glyphicon-list"></span> CDR</a></li>
                </ul>
            </div>
        </nav>

		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li><a href="#">Library</a></li>
			<li class="active">Data</li>
		</ol>
		<div class="panel panel-primary">
			<div class="panel-heading">ADD PjSIP TRANSPORT</div>
			<div class="panel-body">
				<form class="form-horizontal" action="/action_page.php">
					<div class="form-group">
						<label class="control-label col-sm-2" for="name">Name:</label>
						<div class="col-sm-4">
							<input type="name" class="form-control" id="name"
								placeholder="Enter transport name ex: my_trans" name="name">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="protocol">Protocol:</label>
						<div class="col-sm-2">
							<select class="form-control" id="protocol">
								<option>udp</option>
								<option>tcp</option>
								<option>tls</option>
								<option>ws</option>
								<option>wss</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="bind">Bind:</label>
						<div class="col-sm-4">
							<input type="bind" class="form-control" id="bind"
								placeholder="Enter bind address ex: 192.168.1.10" name="bind">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-4">
							<button type="submit" class="btn btn-default">Submit</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	
</body>
</html>
