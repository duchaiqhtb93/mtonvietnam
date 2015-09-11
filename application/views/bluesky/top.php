<html>
	<title>{$title}</title>
	<head>
	
    <link href="{$url}bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{$url}bootstrap/css/sb-admin.css" rel="stylesheet">
    <link href="{$url}bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="{$url}bootstrap/js/jquery.js"></script>
    <script src="{$url}bootstrap/js/bootstrap.min.js"></script>
    <script src="{$url}bootstrap/js/plugins/morris/raphael.min.js"></script>
    <script src="{$url}bootstrap/ckeditor/ckeditor.js"></script>
    <!--<script src="{$url}bootstrap/ckeditor/test.js"></script>-->
	<style>
		.fa{ margin-right:15px; }
		.center{ text-align:center }
		.mgbot{ margin-bottom:20px }
	</style>
	</head>
	<body>
	    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="{$url}admin">Trang chủ</a>
            </div>
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Nguyễn Đức Hải <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Thông tin</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Hộp thư</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Cài đặt</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{$url}admin/login"><i class="fa fa-fw fa-power-off"></i> Đăng xuất</a>
                        </li>
                    </ul>
                </li>
            </ul>
			
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
				{$i=0}
					{foreach $dsmenu as $menu}						
						<li><!--
							{if $menu.link_chucnang=='javascript;'}
								<a href="javascript:;" data-toggle="collapse" data-target="#{$i}">
								<i class="{$menu.icon_chucnang}"></i>{$menu.ten_chucnang}<i class="fa fa-fw fa-caret-down" style="text-align:right"></i></a>
								<ul id="{$i++}" class="collapse">
									<li>
										<a href="#">Quản lý danh mục</a>
									</li>
									<li>
										<a href="#">Quản lý tài khoản</a>
									</li>
								</ul>
							{else}-->
								<a href="{$url}{$menu.link_chucnang}"><i class="{$menu.icon_chucnang}"></i>{$menu.ten_chucnang}</a>
							<!--{/if}-->
						</li>
					{/foreach}
                    <li>
                        <a href="{$url}admin/login"><i class="fa fa-fw fa-power-off"></i>Đăng xuất</a>
                    </li>
                </ul>
            </div>
			</nav>
			<div class="col-sm-12">