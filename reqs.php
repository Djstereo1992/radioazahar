<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="noindex, nofollow">
	<title>System Requirements</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php 
	function my_ini_get($name) {        
		$setting = (ini_get($name));        
		$setting = ($setting==1 || $setting=='On') ? 'On' : 'Off';
		return $setting;
	}

	function my_func_get($name) {        
		$setting = (function_exists($name));        
		$setting = ($setting==1 || $setting=='On') ? 'On' : 'Off';
		return $setting;
	}

	function my_ext_get($name) {        
		$setting = (extension_loaded($name));        
		$setting = ($setting==1 || $setting=='On') ? 'On' : 'Off';
		return $setting;
	}

	function my_file_get($name) {        
		$setting = (file_exists($name));        
		$setting = ($setting==1 || $setting=='On') ? 'On' : 'Off';
		return $setting;
	}

?>
<div class="container-fluid mt-5">
		<div class="row d-flex justify-content-center">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header text-center">
						<h1 class="h3">System Requirements</h1>
					</div>
					<div class="card-body">

					<table class="table table-dark table-striped">
						<thead>
							<tr>
							<th scope="col">#</th>
							<th scope="col">Recommended</th>
							<th scope="col">Current</th>
							</tr>
						</thead>
						<tbody>
					
							<tr>
								<th scope="row">PHP Version</th>
								<td>7.1 or later</td>
								<td><?php echo phpversion(); ?></td>
							</tr>

							<tr>
								<th scope="row">File Uploads</th>
								<td>On</td>
								<td><?php echo my_ini_get('file_uploads'); ?></td>
							</tr>

							<tr>
								<th scope="row">Safe Mode</th>
								<td>Off</td>
								<td><?php echo my_ini_get('safe_mode'); ?></td>
							</tr>

							<tr>
								<th scope="row">GD</th>
								<td>On</td>
								<td><?php echo my_func_get('gd_info'); ?></td>
							</tr>
							
							<tr>
								<th scope="row">IonCube Loader</th>
								<td>10.2 or later</td>
								<td><?php echo ioncube_loader_version(); ?></td>
							</tr>

							<tr>
								<th scope="row">Allow Url Fopen</th>
								<td>On</td>
								<td><?php echo my_ini_get('allow_url_fopen'); ?></td>
							</tr>

							<tr>
								<th scope="row">cURL</th>
								<td>On</td>
								<td><?php echo my_ext_get('curl'); ?></td>
							</tr>

							<tr>
								<th scope="row">JSON</th>
								<td>On</td>
								<td><?php echo my_ext_get('json'); ?></td>
							</tr>

							<tr>
								<th scope="row">PDO SQLite</th>
								<td>On</td>
								<td><?php echo my_ext_get('pdo_sqlite'); ?></td>
							</tr>

							<tr>
								<th scope="row">Zip</th>
								<td>On</td>
								<td><?php echo my_ext_get('zip'); ?></td>
							</tr>

							<tr>
								<th scope="row">.htaccess</th>
								<td>On</td>
								<td><?php echo my_file_get('.htaccess'); ?></td>
							</tr>

							<tr>
								<th scope="row">Session</th>
								<td>On</td>
								<td><?php echo isset($_SESSION)?'On':'Off'; ?></td>
							</tr>

							<tr>
								<th scope="row">Upload Max Filesize</th>
								<td>32MB or later</td>
								<td><?php echo ini_get("upload_max_filesize"); ?></td>
							</tr>
							
							<tr>
								<th scope="row">Post Max Size</th>
								<td>32MB or later</td>
								<td><?php echo ini_get("post_max_size"); ?></td>
							</tr>
							
							<tr>
								<th scope="row">Memory Limit</th>
								<td>128MB or later</td>
								<td><?php echo ini_get("memory_limit"); ?></td>
							</tr>
							
						</tbody>
					</table>

					</div>
				</div>

			</div>
		</div>
	</div>
</body>
</html>