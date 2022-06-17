<form name="frm" action="app/create-account.php" method="POST" autocomplete="off">
<div class="login-box-wrapper">
							
<div class="modal-header">
<h4 class="modal-title text-center">Tạo tài khoản của bạn miễn phí</h4>
</div>

<div class="modal-body">
																
<div class="row gap-20">
											

												

												
<div class="col-sm-12 col-md-12">

<div class="form-group"> 
<label>Tên công ty</label>
<input class="form-control" placeholder="Nhập tên công ty của bạn" name="company" required type="text"> 
</div>
												
</div>

<div class="col-sm-12 col-md-12">

<div class="form-group"> 
<label>Loại hình doanh nghiệp</label>
<input class="form-control" placeholder="Ví dụ: Đặt phòng / Du lịch, Phần mềm Máy tính, v.v." name="type" required type="text"> 
</div>
												
</div>
												
<div class="col-sm-12 col-md-12">

<div class="form-group"> 
<label>Địa chỉ email</label>
<input class="form-control" placeholder="nhập địa chỉ email của bạn" name="email" required type="text"> 
</div>
												
</div>
												
<div class="col-sm-12 col-md-12">
												
<div class="form-group"> 
<label>Mật khẩu</label>
<input class="form-control" placeholder="Tối thiểu 8 và Tối đa 20 ký tự" name="password" required type="password"> 
</div>
												
</div>
												
<div class="col-sm-12 col-md-12">
												
<div class="form-group"> 
<label>Xác nhận mật khẩu</label>
<input class="form-control" placeholder="Nhập lại mật khẩu một lần nữa" name="confirmpassword" required type="password"> 
</div>
												
</div>
												
<input type="hidden" name="acctype" value="102">
												
												
</div>

</div>

<div class="modal-footer text-center">
<button  onclick="return val();" type="submit" name="reg_mode" class="btn btn-primary">Đăng ký</button>
</div>
										
</div>
</form>