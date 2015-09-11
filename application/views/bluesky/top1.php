<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Hệ thống hỗ trợ quản lý tuyển sinh - Viện Đại học Mở Hà Nội</title>
			<link href="{$url}bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
			<link href="{$url}images/logo-hou.png" rel="shortcut icon" type="image/x-icon" />
			    <link href="{$url}js/datepicker/jquery.datepick.css" rel="stylesheet"/>
			    <script src="{$url}js/jquery-2.0.3.min.js"></script>
			    <script src="{$url}js/datepicker/jquery.datepick.js"></script>
			    <script src="{$url}bootstrap/js/bootstrap.min.js"></script>
			    <link href="{$url}bootstrap/css/jqueryui.css" rel="stylesheet"/>
                <link href="{$url}bootstrap/select/select2.css" rel="stylesheet"/>
                 
			
                <script src="{$url}bootstrap/select/select2.js"></script>
			    
			    <script src="{$url}bootstrap/switch/js/bootstrap-switch.js"></script>
			    <link href="{$url}bootstrap/switch/css/bootstrap-switch.css" rel="stylesheet"/>
			    <script src="{$url}bootstrap/notify/pnotify.custom.min.js"></script>
			    <link href="{$url}bootstrap/notify/pnotify.custom.min.css" rel="stylesheet"/>
                
			    <script type="text/javascript" src="{$url}js/jquery-ui.js"></script>
			    <link href="{$url}js/paginator/bootstrap.css" rel="stylesheet"/>
                <script type="text/javascript" src="{$url}js/tuyensinh/chuyennganh1.js"></script>
                <script type="text/javascript" src="{$url}js/paginator/bootstrap-paginator.js"></script>
                
                <!-------UPLOAD------>
                </a><script type="text/javascript" src="{$url}js/jsupload/script.js"></script> 
                <!----------------->
                
				<!-------- datatable----------->
                <link href="{$url}js/datatable/datatable/dataTables.bootstrap.css" rel="stylesheet"/>
				<script src="{$url}js/datatable/datatable/jquery.dataTables.min.js"></script>
				<script src="{$url}js/datatable/datatable/dataTables.bootstrap.js"></script>
				
                <script type="text/javascript" src="{$url}js/tuyensinh/tuyensinh.js"></script>
                 <script type="text/javascript" src="{$url}js/tuyensinh/hoadonhuy.js"></script>
                <script type="text/javascript" src="{$url}js/tuyensinh/ruthoso.js"></script>
                <script type="text/javascript" src="{$url}js/canbo/dscanbo.js"></script>
                <script type="text/javascript" src="{$url}js/canbo/canbo.js"></script>
                <script type="text/javascript" src="{$url}js/canbo/doimatkhau.js"></script>
                
                <!--Chart------------------------------>
                
                <script>	
					var bg_url="{$url}";
				</script>
                <script type="text/javascript" src="{$url}js/chart/highcharts.js"></script>
                <script type="text/javascript" src="{$url}js/chart/highcharts-3d.js"></script>
                <script type="text/javascript" src="{$url}js/chart/exporting.js"></script>
                
			</head>
		<body>
<nav class="navbar navbar-default" role="navigation">
	<div class="container">
	  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
           {if $ma_pq=="admin"}
	      <ul class="nav navbar-nav navbarfix">	<li class="dropdown active">
	              <a href="{$url}home" title="Trang chủ">&nbsp;<span class="glyphicon glyphicon-home"></span>&nbsp;</a>    </li>	
                  
                    <li class="dropdown"><a href="{$url}tuyensinh" class="dropdown"><span class="glyphicon glyphicon-pencil"></span>&nbsp; Đăng ký thông tin sinh viên</a> </li>    
                  
                        </li>
                    <li class="dropdown"><a href="{$url}dsnhaphoso" class="dropdown"><span class="glyphicon glyphicon-pencil"></span>&nbsp; Thu hồ sơ</a> </li>    
                  
                        </li>
                    
                    
                    <li class="dropdown">        
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-usd"></span>&nbsp; Hỗ trợ thu tài chính</a>
                      <ul class="dropdown-menu dropdownfix">
                          <li><a href="{$url}danhsachnhaphoc" class="dropdown"><span class="glyphicon glyphicon-usd"></span>&nbsp; Thu tài chính</a></li>
                          
                          <li class="dropdown"><a href="{$url}hoadonhuy" class="dropdown"><span class=" glyphicon glyphicon-remove "></span>&nbsp; Hóa đơn bị hủy</a>      </li>
                      </ul>      
                   </li>
                 <li class="dropdown">        
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-th-list"></span>&nbsp; Báo cáo thống kê</a>
                      <ul class="dropdown-menu dropdownfix">
                          <li><a href="{$url}baocaonhaphoc"><span class="glyphicon glyphicon-list-alt"></span>&nbsp; Báo cáo nhập học</a></li>
                          <li><a href="{$url}baocaokhoanthu"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Báo cáo theo khoản thu</a></li>
                          <li><a href="{$url}thongke"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Thống kê nhập học </a></li>
                      </ul>      
                   </li>
                  <li class="dropdown">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-screenshot"></span>&nbsp; Thông tin cán bộ</a>
                      <ul class="dropdown-menu dropdownfix">
                           <li class="dropdown"><a href="{$url}themcanbo" class="dropdown"><span class="glyphicon glyphicon-pencil"></span>&nbsp; Đăng ký thông tin cán bộ</a> </li>
                           <li class="dropdown"><a href="{$url}dscanbo" class="dropdown"><span class="glyphicon glyphicon-list-alt"></span>&nbsp; Danh sách cán bộ</a> </li>
                           <li class="dropdown"><a href="{$url}ttcanbo" class="dropdown"><span class="glyphicon glyphicon-upload"></span>&nbsp; Đổi mật khẩu</a> </li>
                      </ul>     
                  </li> 
        	      <li class="dropdown"><a href="{$url}logout" class="dropdown"><span class="glyphicon glyphicon-off"></span>&nbsp;Đăng xuất</a></li>           
       </ul> 
       {else if $ma_pq=="trungtam"} 
       <ul class="nav navbar-nav navbarfix">	<li class="dropdown active">
               <a href="{$url}home" title="Trang chủ">&nbsp;<span class="glyphicon glyphicon-home"></span>&nbsp;</a>    </li>	
                  <li class="dropdown">        
                    <li class="dropdown"><a href="{$url}tuyensinh" class="dropdown"><span class="glyphicon glyphicon-pencil"></span>&nbsp; Đăng ký thông tin sinh viên</a> </li>
                          
                  </li>
                  <li class="dropdown"><a href="{$url}ttcanbo" class="dropdown"><span class="glyphicon glyphicon-upload"></span>&nbsp; Đổi mật khẩu</a> </li>
                  
                   <li class="dropdown"><a href="{$url}logout" class="dropdown"><span class="glyphicon glyphicon-off"></span>&nbsp;Đăng xuất</a></li>           
       </ul>
       {else if $ma_pq=="pdaotao"}  
       <ul class="nav navbar-nav navbarfix">	<li class="dropdown active">
	              <a href="{$url}home" title="Trang chủ">&nbsp;<span class="glyphicon glyphicon-home"></span>&nbsp;</a>    </li>
                  <li class="dropdown"><a href="{$url}danhsachsinhvien" class="dropdown"><span class="glyphicon glyphicon-list-alt"></span>&nbsp; Chuyển ngành-rút hồ sơ</a> </li>   	
                <li class="dropdown"><a href="{$url}baocaonhaphoc"><span class="glyphicon glyphicon-list-alt"></span>&nbsp; Báo cáo nhập học</a></li>
                <li class="dropdown"><a href="{$url}baocaokhoanthu"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Báo cáo theo khoản thu</a></li>
                <li class="dropdown"><a href="{$url}thongke"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Thống kê nhập học </a></li>
                  
                  <li class="dropdown">
                  <li class="dropdown"><a href="{$url}ttcanbo" class="dropdown"><span class="glyphicon glyphicon-upload"></span>&nbsp; Đổi mật khẩu</a> </li>
                           
                  </li> 
                   <li class="dropdown"><a href="{$url}logout" class="dropdown"><span class="glyphicon glyphicon-off"></span>&nbsp;Đăng xuất</a></li>           
       </ul> 
       {else if $ma_pq=="ketoan"}  
	      <ul class="nav navbar-nav navbarfix">
          	<li class="dropdown active">
	              <a href="{$url}home" title="Trang chủ">&nbsp;<span class="glyphicon glyphicon-home"></span>&nbsp;</a>
           </li>	       
            <li class="dropdown">        
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-usd"></span>&nbsp; Hỗ trợ tài chính</a>
                  <ul class="dropdown-menu dropdownfix">
                          <li><a href="{$url}danhsachnhaphoc" class="dropdown"><span class="glyphicon glyphicon-usd"></span>&nbsp; Thu tài chính</a></li>
                          <li class="dropdown"><a href="{$url}hoadonhuy" class="dropdown"><span class=" glyphicon glyphicon-remove "></span>&nbsp; Hóa đơn bị hủy</a>      </li>
                   </ul>      
            </li>
           
            <li class="dropdown">
                <li class="dropdown"><a href="{$url}ttcanbo" class="dropdown"><span class="glyphicon glyphicon-upload"></span>&nbsp; Đổi mật khẩu</a> </li>   
            </li> 
        	<li class="dropdown"><a href="{$url}logout" class="dropdown"><span class="glyphicon glyphicon-off"></span>&nbsp;Đăng xuất</a>
			</li>           
          </ul>             
      {else if $ma_pq=='tttv'}  
        <ul class="nav navbar-nav navbarfix">
          	<li class="dropdown active">
	              <a href="{$url}home" title="Trang chủ">&nbsp;<span class="glyphicon glyphicon-home"></span>&nbsp;</a>
           </li>
            
                          <li><a href="{$url}baocaonhaphoc"><span class="glyphicon glyphicon-list-alt"></span>&nbsp; Báo cáo nhập học</a></li>
                          <li><a href="{$url}baocaokhoanthu"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Báo cáo theo khoản thu</a></li>
                          <li><a href="{$url}thongke"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Thống kê nhập học </a></li>
                           <li class="dropdown"><a href="{$url}ttcanbo" class="dropdown"><span class="glyphicon glyphicon-upload"></span>&nbsp; Đổi mật khẩu</a> </li>
                       
                  </li> 
        	      <li class="dropdown"><a href="{$url}logout" class="dropdown"><span class="glyphicon glyphicon-off"></span>&nbsp;Đăng xuất</a></li>   
                    
      </ul>
	{else if $ma_pq=='xem'}
		<ul class="nav navbar-nav navbarfix">
          	<li class="dropdown active">
	              <a href="{$url}home" title="Trang chủ">&nbsp;<span class="glyphicon glyphicon-home"></span>&nbsp;</a>
           </li>	
           <li class="dropdown"><a href="{$url}danhsachsinhvien" class="dropdown"><span class="glyphicon glyphicon-list-alt"></span>&nbsp; Danh sách sinh viên</a> </li>      
           </li> 
		   <li class="dropdown">        
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-th-list"></span>&nbsp; Báo cáo thống kê</a>
				  <ul class="dropdown-menu dropdownfix">
					  <li><a href="{$url}baocaonhaphoc"><span class="glyphicon glyphicon-list-alt"></span>&nbsp; Báo cáo nhập học</a></li>
					  <li><a href="{$url}baocaokhoanthu"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Báo cáo theo khoản thu</a></li>
					  <li><a href="{$url}thongke"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Thống kê nhập học </a></li>
				  </ul>      
			</li>
                  <li class="dropdown">
                    <li class="dropdown"><a href="{$url}ttcanbo" class="dropdown"><span class="glyphicon glyphicon-upload"></span>&nbsp; Đổi mật khẩu</a> </li>
                       
                  </li> 
        	      <li class="dropdown"><a href="{$url}logout" class="dropdown"><span class="glyphicon glyphicon-off"></span>&nbsp;Đăng xuất</a></li>           
       </ul>      	
	{else if $ma_pq=='khoa'}  
        <ul class="nav navbar-nav navbarfix">
          	<li class="dropdown">
	             <a href="#">Hệ thống hỗ trợ tuyển sinh Viện Đại học Mở Hà Nội 2014</a>
           </li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
        <li class="dropdown pull-right"><a href="{$url}logout" class="dropdown"><span class="glyphicon glyphicon-off"></span>&nbsp;Đăng xuất</a></li> 
		{if $madvcb =='06' || $madvcb =='04'}
		<li class="dropdown pull-right"><a href="{$url}dschuanhaphoc" class="dropdown"><span class="glyphicon glyphicon-th-list"></span>&nbsp;DS TS chưa nhập học</a></li>   
		{/if}
		<li class="dropdown pull-right"><a href="{$url}thongkenhaphoc" class="dropdown"><span class="glyphicon glyphicon-th-list"></span>&nbsp;DS TS đã nhập học</a></li>   
        </ul> 
	{else if $ma_pq=='thuhs'}
        <ul class="nav navbar-nav navbarfix">
          	<li class="dropdown active">
	              <a href="{$url}home" title="Trang chủ">&nbsp;<span class="glyphicon glyphicon-home"></span>&nbsp;</a>
           </li>	
		   <li class="dropdown"><a href="{$url}dsnhaphoso"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Thu hồ sơ</a></li>
		 <li class="dropdown"><a href="{$url}ttcanbo" class="dropdown"><span class="glyphicon glyphicon-upload"></span>&nbsp; Đổi mật khẩu</a> </li>
                     
        <li class="dropdown pull-right"><a href="{$url}logout" class="dropdown"><span class="glyphicon glyphicon-off"></span>&nbsp;Đăng xuất</a></li> 
		</ul> 
      {/if}          
				  </div><!-- /.navbar-collapse -->  </div></nav>	
				  <div class="container"> 
		<div id="body-wrapper" class="row1"> 