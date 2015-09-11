<html>
	<head>
		<title></title>
    <script src="{$url}bootstrap/js/jquery.js"></script>
    <script src="{$url}bootstrap/js/bootstrap.min.js"></script>
		<link href="{$url}bootstrap/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="col-sm-offset-4 col-sm-3">
			<form action="" method="POST" >
			<div class="form-group">
				<label class="control-label">Tài khoản</label>
				<input type="text" name="username" autocomplete="off" class="form-control"/>
			</div>
			<div class="form-group">
				<label class="control-label">Mật khẩu</label>
				<input type="password" name="password" autocomplete="off" class="form-control"/>
			</div>
			<div class="alert alert-dismissable alert-{$tt}" {$hd}>
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<i class="fa fa-info-circle"></i>  <strong>{$tb}</strong>        
			</div>
			<div class="form-group">
				<button name="login" value="login" class="btn btn-success">Đăng nhập</button>
			</div>
			</form>
		</div>
	</body>
</html>