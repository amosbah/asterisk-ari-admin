<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="shortcut icon" type="image/ico"
	href="http://www.datatables.net/favicon.ico">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title><?php echo $this->data['title'] . '   ' .$data["name"]; ?></title>
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
	$(document)
			.ready(
					function() {
						$('#AppItem')
								.DataTable(
										{
											"processing" : false,
											"serverSide" : false,
											"ordering" : false,
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
                <li class="active"><a href="<?php echo $data['rootUrl'] . 'apps'; ?>"><span class="glyphicon glyphicon-credit-card"></span> APPS</a></li>
                <li><a href="<?php echo $data['rootUrl'] . 'dialplan'; ?>"><span class="glyphicon glyphicon-list-alt"></span> DIALPLAN</a></li>
                <li><a href="<?php echo $data['rootUrl'] . 'endpoints/show'; ?>"><span class="glyphicon glyphicon-phone-alt"></span> ENDPOINTS</a></li>
                <li><a href="<?php echo $data['rootUrl'] . 'channels'; ?>"><span class="glyphicon glyphicon-random"></span> CHANNELS</a></li>
                <li><a href="<?php echo $data['rootUrl'] . 'bridges'; ?>"><span class="glyphicon glyphicon-earphone"></span> BRIDGES</a></li>
                <li><a href="<?php echo $data['rootUrl'] . 'cdr'; ?>"><span class="glyphicon glyphicon-list"></span> CDR</a></li>
                </ul>
            </div>
        </nav>

	
		<ol class="breadcrumb">
			<li><a href="<?php echo $data['rootUrl']; ?>">HOME</a></li>
			<li><a href="<?php echo $data['rootUrl'] . 'apps'; ?>">APPS</a></li>
			<li class="active"><?php echo $data['name']; ?></li>
		</ol>
		<div class="panel panel-primary">
			<div class="panel-heading">
				APP: <?php echo $data['name']; ?>
			</div>
			<div class="panel-body">
				<section>
					<div class="demo-html"></div>
					<table id="AppItem" class="table table-striped table-bordered"
						cellspacing="0" width="100%">
						<tbody>
							<tr>
								<th>ID</th>
								<td>
									<?php echo $data['id']; ?>
								</td>
							</tr>
							<tr>
								<th>NAME</th>
								<td>
									<?php echo $data['name']; ?>
								</td>
							</tr>
							<tr>
								<th>DESCRIPTION</th>
								<td>
									<?php echo $data['description']; ?>
								</td>
							</tr>
							<tr>
								<th>FILENAME</th>
								<td>
									<?php echo $data['filename']; ?>
								</td>
							</tr>
							<tr>
								<th>CREATION DATE</th>
								<td>
									<?php echo $data['creation_date']; ?>
								</td>
							</tr>

							<tr>
								<th>CONTEXT</th>
								<td>
									<span class="label label-warning"> <?php echo $data['context']; ?></span>
								</td>
							</tr>
							<tr>
								<th>EXTENSION</th>
								<td>
									<span class="label label-warning"> <?php echo $data['extension']; ?></span>
								</td>
							</tr>
							<tr>
								<th>STATUS</th>
								<td>
									<span class="label label-warning"> <?php echo $data['status']; ?></span>
								</td>
							</tr>
							<tr>
								<th>ACTIONS</th>
								<td>
								      <div id="browse_app">
									    <a class="btn btn-xs" href="<?php echo  $data['rootUrl'] . 'apps/start/' .$data['id']; ?>"><span class="glyphicon glyphicon-ok"></span> START</a>
									    <a class="btn btn-xs" href="<?php echo  $data['rootUrl'] . 'apps/stop/' .$data['id']; ?>"><span class="glyphicon glyphicon-remove"></span> STOP</a>
									    <a class="btn btn-xs" href="<?php echo  $data['rootUrl'] . 'apps/restart/' .$data['id']; ?>"><span class="glyphicon glyphicon-refresh"></span> RESTART</a>
                                        <a class="btn btn-xs" href="<?php echo  $data['rootUrl'] . 'apps/tail/' .$data['id']; ?>"><span class="glyphicon glyphicon-refresh"></span> TAIL</a>
								      </div>

								</td>
							</tr>
							<tr>
								<th></th>
								<td>
								      <div id="browse_app">
									    <a class="btn btn-primary btn-xs" href="<?php echo  $data['rootUrl'] . 'apps/edit/' .$data['id']; ?>"><span class="glyphicon glyphicon-pencil"></span> EDIT</a>
									    <a class="btn btn-danger btn-xs" href="<?php echo  $data['rootUrl'] . 'apps/del/' .$data['id']; ?>"><span class="glyphicon glyphicon-trash"></span> DELETE</a>
								      </div>

								</td>
							</tr>

						</tbody>
					</table>
				</section>
				<div id="browse_app">
				    <a class="btn btn-large btn-success" href="<?php echo $data['rootUrl'] . 'apps';?>"><span class="glyphicon glyphicon-arrow-left"></span> BACK</a>
				</div>


			</div>
		</div>
	</div>
</body>
</html>
