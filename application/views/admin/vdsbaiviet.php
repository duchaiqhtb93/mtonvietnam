<section>
	<ol class="breadcrumb">
		<li><a href="{$url}admin"><i class="glyphicon glyphicon-home"></i> &nbsp;Trang chủ</a></li>
		<li class="active"><a href="{$url}dangbai">Viết bài</a></li>
	</ol>
</section>
<div class="col-sm-12 center alert-info mgbot" >
	<h3>{$info}</h3>
</div>
<form action="" method="POST" class="row">
	<div class="col-sm-12 alert alert-{$tt}" {$hd}>
		{$thongbao}
	</div>
	<div class="col-sm-12">
		<div class="input-group col-sm-8">
			<span class="input-group-addon td-100" id="sizing-addon2">Tiêu đề&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
			
		</div></br>
		<div class="input-group col-sm-8">
			<span class="input-group-addon td-100" id="sizing-addon2">Chuyên mục</span>
		
		</div></br>
		<input name="ma_bv" type="hidden" />
		<div class="input-group col-sm-8">
			<span class="input-group-addon td-100" id="sizing-addon2">Mô tả vắn tắt</span>
		
		</div></br>
		<div class="input-group col-sm-12">
			<span class="input-group-addon" id="sizing-addon2">Nội dung&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		
		</div></br>
		<div class="input-group col-sm-12">	
		
		</div>
	</div>
</form>