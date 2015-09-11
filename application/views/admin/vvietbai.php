<section>
	<ol class="breadcrumb">
		<li><a href="{$url}admin"><i class="glyphicon glyphicon-home"></i> &nbsp;Trang chủ</a></li>
		<li class="active"><a href="{$url}dangbai">Viết bài</a></li>
	</ol>
</section>
<form action="" method="POST" class="row">
	<div class="col-sm-12 alert alert-{$thongbao.tt}" {$thongbao.hd}>
		{$thongbao.tb}
	</div>
	<div class="col-sm-12">
		<div class="input-group col-sm-8">
			<span class="input-group-addon td-100" id="sizing-addon2">Tiêu đề&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
			<input type="text" name="tieude_bv" value="{$khoiphuc.tieude_bv}" class="form-control" placeholder="Tiêu đề" aria-describedby="sizing-addon2" required="">
		</div></br>
		<div class="input-group col-sm-8">
			<span class="input-group-addon td-100" id="sizing-addon2">Chuyên mục</span>
			<select class="form-control" name="ma_loaitin" aria-describedby="sizing-addon2" required="">
				<option value="">----Chọn mục chính----</option>
				{foreach $dsloaitin as $value}
				<option value="{$value.ma_loaitin}">{$value.ten_loaitin}</option>
				{/foreach}
			</select>
		</div></br>
		<input name="ma_bv" type="hidden" />
		<div class="input-group col-sm-8">
			<span class="input-group-addon td-100" id="sizing-addon2">Mô tả vắn tắt</span>
			<input type="text" name="tomtat_bv" class="form-control" placeholder="Mô tả vắn tắt" aria-describedby="sizing-addon2" required=""/>
		</div></br>
		<div class="input-group col-sm-12">
			<span class="input-group-addon" id="sizing-addon2">Nội dung&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
			<textarea id="context" name="noidung_bv">{$khoiphuc.noidung_bv}</textarea>
		</div></br>
		<div class="input-group col-sm-12">	
			<button name="{$thongbao.btn}" value="Lưu" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Lưu bài viết</button>
		</div>
	</div>
</form>