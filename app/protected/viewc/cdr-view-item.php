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
						$('#CdrItem')
								.DataTable(
										{
											"processing" : false,
											"serverSide" : false,
											"ordering" : false,
											"bInfo": false
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
                <li><a href="<?php echo $data['rootUrl'] . 'bridges'; ?>"><span class="glyphicon glyphicon-earphone"></span> BRIDGES</a></li>
                <li class="active"><a href="<?php echo $data['rootUrl'] . 'cdr'; ?>"><span class="glyphicon glyphicon-list"></span> CDR</a></li>
                </ul>
            </div>
        </nav>

		<ol class="breadcrumb">
			<li><a href="<?php echo $data['rootUrl']; ?>">HOME</a></li>
			<li><a href="<?php echo $data['rootUrl'] . 'cdr'; ?>">CDR</a></li>
			<li class="active"><?php echo $data['uniqueid'] . '(' . $data['sequence'] . ')'; ?></li>
		</ol>
		<div class="panel panel-primary">
			<div class="panel-heading">
				CDR: <?php echo $data['uniqueid']; ?> (<?php echo $data['sequence']; ?>)
			</div>
			<div class="panel-body">
				<section>
					<div class="demo-html"></div>
					<table id="CdrItem" class="table table-striped table-bordered"
						cellspacing="0" width="100%">
						<tbody>
							<tr>
								<th>SRC</th>
								<td>
									<?php echo $data['src']; ?>
								</td>
							</tr>
							<tr>
								<th>DST</th>
								<td>
									<?php echo $data['dst']; ?>
								</td>
							</tr>
							<tr>
								<th>DCONTEXT</th>
								<td>
									<?php echo $data['dcontext']; ?>
								</td>
							</tr>
							<tr>
								<th>CLID</th>
								<td>
									<?php echo $data['clid']; ?>
								</td>
							</tr>
							<tr>
								<th>CHANNEL</th>
								<td>
									<?php echo $data['channel']; ?>
								</td>
							</tr>
							<tr>
								<th>DSTCHANNEL</th>
								<td>
									<?php echo $data['dstchannel']; ?>
								</td>
							</tr>

							<tr>
								<th>LASTAPP</th>
								<td>
									<?php echo $data['lastapp']; ?>
								</td>
							</tr>
							<tr>
								<th>LASTDATA</th>
								<td>
									<?php echo $data['lastdata']; ?>
								</td>
							</tr>
							<tr>
								<th>START</th>
								<td>
									<?php echo $data['start']; ?>
								</td>
							</tr>
							<tr>
								<th>ANSWER</th>
								<td>
									<?php echo $data['answer']; ?>
								</td>
							</tr>
							<tr>
								<th>END</th>
								<td>
									<?php echo $data['end']; ?>
								</td>
							</tr>
							<tr>
								<th>DURATION</th>
								<td>
									<?php echo $data['duration']; ?>
								</td>
							</tr>
							<tr>
								<th>BILLSEC</th>
								<td>
									<?php echo $data['billsec']; ?>
								</td>
							</tr>
							<tr class="warning">
								<th>DISPOSITION</th>
								<td>
									<?php echo $data['disposition']; ?>
								</td>
							</tr>
							<tr>
								<th>AMAFLAGS</th>
								<td>
									<?php echo $data['amaflags']; ?>
								</td>
							</tr>

							<tr>
								<th>UNIQUEID</th>
								<td>
									<?php echo $data['uniqueid']; ?>
								</td>
							</tr>
							<tr>
								<th>LINKEDID</th>
								<td>
									<?php echo $data['linkedid']; ?>
								</td>
							</tr>
							<tr>
								<th>SEQUENCE</th>
								<td>
									<?php echo $data['sequence']; ?>
								</td>
							</tr>
						</tbody>
					</table>
				</section>
				<div id="browse_app">
				    <a class="btn btn-large btn-success" href="<?php echo $data['rootUrl'] . 'cdr';?>"><span class="glyphicon glyphicon-arrow-left"></span> BACK</a>
				</div>


			</div>
		</div>
	</div>
</body>
</html>
