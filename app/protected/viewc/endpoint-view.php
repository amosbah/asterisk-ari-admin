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
						$('#EdptItem')
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
                <li><a href="<?php echo $data['rootUrl'] . 'apps'; ?>"><span class="glyphicon glyphicon-credit-card"></span> APPS</a></li>
                <li><a href="<?php echo $data['rootUrl'] . 'dialplan'; ?>"><span class="glyphicon glyphicon-list-alt"></span> DIALPLAN</a></li>
                <li class="active"><a href="<?php echo $data['rootUrl'] . 'endpoints/show'; ?>"><span class="glyphicon glyphicon-phone-alt"></span> ENDPOINTS</a></li>
                <li><a href="<?php echo $data['rootUrl'] . 'channels'; ?>"><span class="glyphicon glyphicon-random"></span> CHANNELS</a></li>
                <li><a href="<?php echo $data['rootUrl'] . 'bridges'; ?>"><span class="glyphicon glyphicon-earphone"></span> BRIDGES</a></li>
                <li><a href="<?php echo $data['rootUrl'] . 'cdr'; ?>"><span class="glyphicon glyphicon-list"></span> CDR</a></li>
                </ul>
            </div>
        </nav>

		<ol class="breadcrumb">
			<li><a href="<?php echo $data['rootUrl']; ?>">HOME</a></li>
			<li><a href="<?php echo $data['rootUrl'] . 'endpoints/show'; ?>">ENDPOINTS</a></li>
			<li class="active"><?php echo $data['endpoint']->{'resource'}; ?></li>
		</ol>
		<div class="panel panel-primary">
			<div class="panel-heading">
				ENDPOINT: <?php echo $data['endpoint']->{'resource'}; ?> (<?php echo $data['endpoint']->{'technology'}; ?>)
			</div>
			<div class="panel-body">
				<section>
					<div class="demo-html"></div>
					<table id="EdptItem" class="table table-striped table-bordered"
						cellspacing="0" width="100%">
						<tbody>
							<tr>
								<th>NAME</th>
								<td>
									<?php echo $data['endpoint']->{'resource'}; ?>
								</td>
							</tr>
							<tr>
								<th>TECHNOLOGY</th>
								<td>
									<?php echo $data['endpoint']->{'technology'}; ?>
								</td>
							</tr>
							<tr>
								<th>STATE</th>
								<td>
									<?php 
									      if ($data['endpoint']->{'state'} == 'online') {
										  echo '<span class="label label-success">ONLINE</span>';
									      }
									      elseif ($data['endpoint']->{'state'} == 'offline') {
										    echo '<span class="label label-danger">OFFLINE</span>';
									      }
									      elseif ($data['endpoint']->{'state'} == 'unknown') {
										  echo '<span class="label label-warning">UNKNOWN</span>';
									      }
									      else {
										    echo '<span class="label label-info">' . $data['endpoint']->{'state'} . '</span>';
									      }
									?>
								</td>
							</tr>
							<tr>
								<th>CHANNELS</th>
								<td>
									<?php 									  							  
									  if (count($data['endpoint']->{'channel_ids'}) == 0) {
										echo '0';
									      }
									      else {
										foreach($data['endpoint']->{'channel_ids'} as $channel_id) {
										    echo '<span class="label label-warning"><a href="' . $data['rootUrl'] . 'channels/view/' . $channel_id .'">' . $channel_id . '</a></span>';
										    echo '<br>';
										}
									   }
									?>
								</td>
							</tr>
						</tbody>
					</table>
				</section>
				<div id="browse_app">
				    <a class="btn btn-large btn-success" href="<?php echo $data['rootUrl'] . 'endpoints/show';?>"><span class="glyphicon glyphicon-arrow-left"></span> BACK</a>
				</div>


			</div>
		</div>
	</div>
</body>
</html>
