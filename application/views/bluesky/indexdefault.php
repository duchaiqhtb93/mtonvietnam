<div class="panel panel-default">
    <div class="panel-heading">
    <h3 class="panel-title cangiua"><b>{$info}</b></h3>
    </div>
    <div class="panel-body" style="background: url('{$url}images/logovien.png') no-repeat; background-position: center;">
<!------------------------------------------------------------------Nội Dung Trang------------------------------------------------------------------------>
    <form action="" method="POST" id="formnoidung" class="form-horizontal">
    {if $ma_pq!="sv"}
    {if $ma_pq=="gv"}
    <div style="width: 100px%; min-height:390px">
    <div class="row1">
        <div class="cangiua"><h3>Xin chào giảng viên: {$ten_dn}</h3></div>
    </div>
    <div class="row" style="margin-top: 80px;">
        <table class="table" style="border-style: none;">
            <tr>
                <td class="col-sm-2 cangiua"></td>
                <td class="col-sm-3 cangiua"><a href="{$url}lichgiangvien"><img src="{$url}images/7.png" style="width: 100px; height: 100px" title="Lịch giảng dạy"/></a></td>
                <td class="col-sm-2 cangiua"></td>
                <td class="col-sm-3 cangiua"><a href="{$url}canbo?ma={$ma_cb}"><img src="{$url}images/13.png" style="width: 100px; height: 100px" title="Thông tin cá nhân"/></td>
                <td class="col-sm-2 cangiua"></td>
            </tr>
            <tr>
                <td class="col-sm-2 cangiua"></td>
                <td class="col-sm-3 cangiua"><a class="a1" href="{$url}lichgiangvien" title="Lịch giảng dạy"><b>Lịch giảng dạy</b></a></td>
                <td class="col-sm-2 cangiua"></td>
                <td class="col-sm-3 cangiua"><a class="a1" href="{$url}canbo?ma={$ma_cb}" title="Thông tin cá nhân"><b>Thông tin cá nhân</b></a></td>
                <td class="col-sm-2 cangiua"></td>
            </tr>
        </table>
    </div>
    {else}
    <div class="row">
        <table class="table" style="border-style: none;">
			{if $hanche!='0'}
				<tr>
					<td class="cangiua" colspan="4"><font color=red><b>{$hanche}<b></font></td>
				</tr>
			{/if}
            <tr>
                <td class="cangiua"><a class="" href="{$url}dukienlichhoc"><img src="{$url}images/8.png" title="Dự kiến lịch học, thi"/></a></td>
                <td class="cangiua"><a href="{$url}lapkehoach"><img src="{$url}images/1.png" title="Lập thời khóa biểu"/></a></td>
                <td class="cangiua"><a href="{$url}canbo_lapkehoach"><img src="{$url}images/5.png" title="Xem và duyệt kế hoạch đào tạo"/></a></td>
                <td class="cangiua"><a href="{$url}laphoidongthi"><img src="{$url}images/54.png" title="Lập hội đồng thi"/></a></td>
            </tr>
            <tr>
                <td class="cangiua"><a class="a1" href="{$url}dukienlichhoc"><b>Dự kiến lịch học, thi</b></a></td>
                <td class="cangiua"><a class="a1" href="{$url}lapkehoach"><b>Lập thời khóa biểu</b></a></td>
                <td class="cangiua"><a class="a1" href="{$url}canbo_lapkehoach"><b>Xem và duyệt kế hoạch đào tạo</b></a></td>
                <td class="cangiua"><a class="a1" href="{$url}laphoidongthi"><b>Lập hội đồng thi</b></a></td>
            </tr>
            <tr>
                <td class="cangiua"><a href="{$url}danhsachthi"><img src="{$url}images/54.png" title="Lập danh sách thi"/></a></td>
                <td class="cangiua"><a href="{$url}danhsachthilai"><img src="{$url}images/55.png" title="Lập danh sách thi lại"/></a></td>
                <td class="cangiua"><a href="{$url}dsdiemthi"><img src="{$url}images/12.png" title="Nhập điểm và xem điểm"/></a></td>
                <td class="cangiua"><a href="{$url}xemdiem"><img src="{$url}images/3.png" title="Xem điểm tổng hợp"/></a></td>
            </tr>
            <tr>
                <td class="cangiua"><a class="a1" href="{$url}danhsachthi"><b>Lập danh sách thi</b></a></td>
                <td class="cangiua"><a class="a1" href="{$url}danhsachthilai"><b>Lập danh sách thi lại</b></a></td>
                <td class="cangiua"><a class="a1" href="{$url}dsdiemthi"><b>Nhập điểm và xem điểm</b></a></td>
                <td class="cangiua"><a class="a1" href="{$url}xemdiem"><b>Xem điểm tổng hợp</b></a></td> 
            </tr>
            <tr>
                <td class="cangiua"><a href="{$url}dssinhvien"><img src="{$url}images/15.png" title="Danh sách sinh viên"/></a></td>
                <td class="cangiua"><a href="{$url}xemdiemsv"><img src="{$url}images/8.png" title="Phân công cán bộ quản lý"/></a></td>
                <td class="cangiua"><a href="{$url}taikhoan"><img src="{$url}images/53.png" title="Cấp tài khoản"/></a></td>
                <td class="cangiua"><a href="{$url}qldanhmuc" title="Quản lý danh mục"><img src="{$url}images/14.png"/></a></td>
            </tr>
            <tr>
                <td class="cangiua"><a class="a1" href="{$url}dssinhvien"><b>Danh sách sinh viên</b></a></td>
                <td class="cangiua"><a class="a1" href="{$url}xemdiemsv"><b>Xem điểm sinh viên</b></a></td>
                <td class="cangiua"><a class="a1" href="{$url}taikhoan"><b>Cấp tài khoản</b></a></td>
                <td class="cangiua"><a class="a1" href="{$url}qldanhmuc"><b>Quản lý danh mục</b></a></td>
            </tr>
        </table>
    </div>
    {/if}
    {else}
    <div style="width: 100px%; min-height:390px">
    <div class="row1">
        <div class="cangiua"><h3>Xin chào sinh viên: {$ten_sv}</h3></div>
    </div>
    <div class="row" style="margin-top: 80px;">
        <table class="table" style="border-style: none;">
            <tr>
                <td class="col-sm-3 cangiua"><a href="#"><img title="Thông báo mới của {$ten_sv}" src="{$url}images/9.png" style="width: 100px; height: 100px"/></a></td>
                <td class="col-sm-3 cangiua"><a href="{$url}lichhoc"><img src="{$url}images/7.png" style="width: 100px; height: 100px" title="Lịch học của {$ten_sv}"/></a></td>
                <td class="col-sm-3 cangiua"><a href="{$url}ketquahoctap"><img src="{$url}images/11.png" style="width: 100px; height: 100px" title="Kết quả học tập của {$ten_sv}"/></td>
                <td class="col-sm-3 cangiua"><a href="{$url}ttsinhvien"><img src="{$url}images/13.png" style="width: 100px; height: 100px" title="Thông tin cá nhân của {$ten_sv}"/></td>
            </tr>
            <tr>
                <td class="col-sm-3 cangiua"><a class="a1" href="#" title="Thông báo mới của {$ten_sv}"><b>Thông báo</b></a></td>
                <td class="col-sm-3 cangiua"><a class="a1" href="{$url}lichhoc" title="Lịch học của {$ten_sv}"><b>Lịch học của tôi</b></a></td>
                <td class="col-sm-3 cangiua"><a class="a1" href="{$url}ketquahoctap" title="Kết quả học tập của {$ten_sv}"><b>Kết quả học tập</b></a></td>
                <td class="col-sm-3 cangiua"><a class="a1" href="{$url}ttsinhvien" title="Thông tin cá nhân của {$ten_sv}"><b>Thông tin cá nhân</b></a></td>
            </tr>
        </table>
    </div>
    </div>
    {/if}
    </form>
<!---------------------------------------------------------------Hết Nội Dung Trang------------------------------------------------------------------------>					                
</div> <!-- End .content-box-content -->