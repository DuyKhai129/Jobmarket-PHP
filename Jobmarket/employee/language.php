<!doctype html>
<html lang="en">
<?php 
require '../constants/settings.php'; 
require 'constants/check-login.php';

if ($user_online == "true") {
if ($myrole == "employee") {
}else{
header("location:../");		
}
}else{
header("location:../");	
}

if (isset($_GET['page'])) {
$page = $_GET['page'];
if ($page=="" || $page=="1")
{
$page1 = 0;
$page = 1;
}else{
$page1 = ($page*5)-5;
}					
}else{
$page1 = 0;
$page = 1;	
}
?>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title> Language Proficiency</title>
	<meta name="description" content="Online Job Management / Job Portal" />
	<meta name="keywords" content="job, work, resume, applicants, application, employee, employer, hire, hiring, human resource management, hr, online job management, company, worker, career, recruiting, recruitment" />
	<meta name="author" content="BwireSoft">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="http://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:secure_url" content="https://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="Bwire Jobs" />
    <meta property="og:description" content="Online Job Management / Job Portal" />

	<link rel="shortcut icon" href="../images/ico/favicon.png">


	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" media="screen">	
	<link href="../css/animate.css" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">
	<link href="../css/component.css" rel="stylesheet">
	

	<link rel="stylesheet" href="../icons/linearicons/style.css">
	<link rel="stylesheet" href="../icons/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../icons/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="../icons/ionicons/css/ionicons.css">
	<link rel="stylesheet" href="../icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" href="../icons/rivolicons/style.css">
	<link rel="stylesheet" href="../icons/flaticon-line-icon-set/flaticon-line-icon-set.css">
	<link rel="stylesheet" href="../icons/flaticon-streamline-outline/flaticon-streamline-outline.css">
	<link rel="stylesheet" href="../icons/flaticon-thick-icons/flaticon-thick.css">
	<link rel="stylesheet" href="../icons/flaticon-ventures/flaticon-ventures.css">


	<link href="../css/style.css" rel="stylesheet">

	
</head>

  <style>
  
    .autofit2 {
	height:80px;
	width:100px;
    object-fit:cover; 
  }
  
  </style>
<body class="not-transparent-header">

	<div class="container-wrapper">

		<header id="header">

			<nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function">

				<div class="container">
					
					<div class="logo-wrapper">
						<div class="logo">
							<a href="../"><img src="../images/logo.png" alt="Logo" /></a>
						</div>
					</div>
					
					<div id="navbar" class="navbar-nav-wrapper navbar-arrow">
					
						<ul class="nav navbar-nav" id="responsive-menu">
						
							<li>
							
								<a href="../">Trang chủ</a>
								
							</li>
							
							<li>
								<a href="../job-list.php">Công việc</a>

							</li>
							
							<li>
								<a href="../employers.php">Nhà tuyển dụng</a>
							</li>
							
							<li>
								<a href="../employees.php">Nhân viên</a>
							</li>
							
							<li>
								<a href="../contact.php">Lên hệ chúng tôi</a>
							</li>

						</ul>
				
					</div>

					<div class="nav-mini-wrapper">
						<ul class="nav-mini sign-in">
							<li><a href="../logout.php">Đăng xuất</a></li>
							<li><a href="./">Hồ sơ</a></li>
						</ul>
					</div>
				
				</div>
				
				<div id="slicknav-mobile"></div>
				
			</nav>

			
		</header>

		<div class="main-wrapper">

			<div class="breadcrumb-wrapper">
			
				<div class="container">
				
					<ol class="breadcrumb-list booking-step">
						<li><a href="../">Trang chủ</a></li>
						<li><span>Ngôn ngữ thông thạo</span></li>
					</ol>
					
				</div>
				
			</div>
		
			
			<div class="admin-container-wrapper">

				<div class="container">
				
					<div class="GridLex-gap-15-wrappper">
					
						<div class="GridLex-grid-noGutter-equalHeight">
						
							<div class="GridLex-col-3_sm-4_xs-12">
							
								<div class="admin-sidebar">
										
									<div class="admin-user-item">
									<div class="image">	
									
										<?php 
										if ($myavatar == null) {
										print '<center><img class="img-circle autofit2" src="../images/default.jpg" title="'.$myfname.'" alt="image"  /></center>';
										}else{
										echo '<center><img class="img-circle autofit2" alt="image" title="'.$myfname.'"  src="data:image/jpeg;base64,'.base64_encode($myavatar).'"/></center>';	
										}
										?>
										</div>
										<br>
										
										
										<h4><?php echo "$myfname"; ?> <?php echo "$mylname"; ?></h4>
										<p class="user-role"><?php echo "$mytitle"; ?></p>
										
									</div>
									
									<div class="admin-user-action text-center">
									
										<a target="_blank" href="my_cv" class="btn btn-primary btn-sm btn-inverse">Xem CV của tôi</a>
										
									</div>
									
									<ul class="admin-user-menu clearfix">
										<li  class="active">
											<a href="./"><i class="fa fa-user"></i> hồ sơ</a>
										</li>
										<li class="">
										<a href="change-password.php"><i class="fa fa-key"></i> Đổi mật khẩu</a>
										</li>
										<li>
											<a href="qualifications.php"><i class="fa fa-trophy"></i> Trình độ chuyển môn</a>
										</li>
										<li>
											<a href="language.php"><i class="fa fa-language"></i> Ngôn ngữ thông thạo</a>
										</li>
										<li>
											<a href="training.php"><i class="fa fa-gears"></i> Đào tạo</a>
										</li>

										<li>
											<a href="referees.php"><i class="fa fa-users"></i> Giới thiệu</a>
										</li>
										<li>
											<a href="academic.php"><i class="fa fa-graduation-cap"></i> Trình độ học vấn</a>
										</li>
										<li>
											<a href="experience.php"><i class="fa fa-briefcase"></i> Kinh nghiệm làm việc</a>
										</li>
										<li>
											<a href="attachments.php"><i class="fa fa-folder-open"></i> Các tệp đính kèm khác</a>
										</li>
										<li>
											<a href="applied-jobs.php"><i class="fa fa-bookmark"></i> việc làm đã ứng dụng</a>
										</li>
										<li>
											<a href="../logout.php"><i class="fa fa-sign-out"></i> Đăng xuất</a>
										</li>
									</ul>
									
								</div>

							</div>
							
							<div class="GridLex-col-9_sm-8_xs-12">
							
								<div class="admin-content-wrapper">

									<div class="admin-section-title">
									
										<h2>Ngôn ngữ thông thạo</h2>
					
										
									</div>
									
									<div class="resume-list-wrapper">
									<?php require 'constants/check_reply.php'; ?>
									<?php
									require '../constants/db_config.php';
									try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                    $stmt = $conn->prepare("SELECT * FROM tbl_language WHERE member_no = '$myid' ORDER BY id LIMIT $page1,5");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();

                                    foreach($result as $row)
                                    {
										?>
											<div class="resume-list-item">
										
											<div class="row">
											
												<div class="col-sm-12 col-md-10">
												
													<div class="content">
													
														<a >

															<div class="image">
															<?php 
										                    if ($myavatar == null) {
									                    	print '<center><img src="../images/default.jpg" title="'.$myfname.'" alt="image" width="100" height="100" /></center>';
										                    }else{
										                    echo '<center><img alt="image" title="'.$myfname.'" width="100" height="100" src="data:image/jpeg;base64,'.base64_encode($myavatar).'"/></center>';	
										                    }
										                      ?>
															</div>
															
															<h4><?php echo $row['language']; ?></h4>
															
															<div class="row">
																<div class="col-sm-12 col-md-12">
																	<i class="fa fa-user mr-5"></i> Nói - <strong class="mr-10"><?php echo $row['speak']; ?></strong> <i class="fa fa-book mr-5"></i> Đọc - <strong class="mr-10"><?php echo $row['reading']; ?></strong> <i class="fa fa-pencil mr-5"></i> Viết - <strong class="mr-10"><?php echo $row['writing']; ?></strong>
																</div>

															</div>

														</a>
													
													</div>
												
												</div>
												
												<div class="col-sm-12 col-md-2">
													
													<div class="resume-list-btn">
													
														<a data-toggle="modal" href="#edit<?php echo $row['id']; ?>" class="btn btn-primary btn-sm mb-5 mb-0-sm">Chỉnh sửa</a>
														<a href="app/drop-language.php?id=<?php echo $row['id']; ?>" onclick = "return confirm('Bạn có chắc chắn muốn xóa ngôn ngữ này không ?')" class="btn btn-primary btn-sm btn-inverse">Xóa</a>
														
														<div id="edit<?php echo $row['id']; ?>" class="modal fade login-box-wrapper" tabindex="-1" data-width="550" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
			
				                                        <div class="modal-header">
					                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					                                    <h4 class="modal-title text-center">Chỉnh sửa - <?php echo $row['language']; ?></h4>
				                                        </div>
				
				                                        <div class="modal-body">
									                    <form action="app/update-language.php" method="POST" autocomplete="off" enctype="multipart/form-data">
					                                    <div class="row gap-20">
						                                <div class="col-sm-12 col-md-12">
				
							                            <div class="form-group"> 
								                        <label>Ngôn ngữ</label>
								                        <input class="form-control" value="<?php echo $row['language']; ?>" placeholder="Enter language name" type="text" name="language" required> 
							                            </div>
						
						                                </div>

						
						                                <div class="col-sm-12 col-md-12">
				
							                            <div class="form-group"> 
								                        <label>Nói</label>
								                        <select name="speak" required class="selectpicker show-tick form-control" data-live-search="false">
									                    <option <?php if ($row ['speak'] == "Trung bình") { print ' đã chọn '; } ?> value="Fair">Trung bình</option>
									                    <option <?php if ($row ['speak'] == "Tốt") { print ' đã chọn '; } ?> value="Good">Tốt</option>
								                    	<option <?php if ($row ['speak'] == "Rất tốt") { print ' đã chọn '; } ?> value="Very Good">Rất tốt</option>
									                    </select>
							                            </div>
						
						                               </div>
						
						                                <div class="col-sm-12 col-md-12">
				
							                            <div class="form-group"> 
								                        <label>Đọc</label>
								                         <select name="speak" required class="selectpicker show-tick form-control" data-live-search="false">
									                    <option <?php if ($row ['speak'] == "Trung bình") { print ' đã chọn '; } ?> value="Fair">Trung bình</option>
									                    <option <?php if ($row ['speak'] == "Tốt") { print ' đã chọn '; } ?> value="Good">Tốt</option>
								                    	<option <?php if ($row ['speak'] == "Rất tốt") { print ' đã chọn '; } ?> value="Very Good">Rất tốt</option>
									                    </select>
							                            </div>
						
						                               </div>

						                                <div class="col-sm-12 col-md-12">
				
							                            <div class="form-group"> 
								                        <label>Viết</label>
								                          <select name="speak" required class="selectpicker show-tick form-control" data-live-search="false">
									                    <option <?php if ($row ['speak'] == "Trung bình") { print ' đã chọn '; } ?> value="Fair">Trung bình</option>
									                    <option <?php if ($row ['speak'] == "Tốt") { print ' đã chọn '; } ?> value="Good">Tốt</option>
								                    	<option <?php if ($row ['speak'] == "Rất tốt") { print ' đã chọn '; } ?> value="Very Good">Rất tốt</option>
									                    </select>
							                            </div>
						
						                               </div>
						
					                                  </div>
				                                      </div>
				                                       <input type="hidden" name="langid" value="<?php echo $row['id']; ?>">
				                                       <div class="modal-footer text-center">
				 	                                   <button type="submit" class="btn btn-primary">Cập nhập</button>
					                                   <button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Đóng</button>
				                                        </div>
				                                       </form>
			                                            </div>

													</div>
													
												</div>
												
											</div>
										
										</div>
										<?php

	                                }
                                    }catch(PDOException $e)
                                    {
                             
                                    }
                                       ?>

									<div class="pager-wrapper">
								
						            <ul class="pager-list">
								<?php
								$total_records = 0;
									require '../constants/db_config.php';
									try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                    $stmt = $conn->prepare("SELECT * FROM tbl_language WHERE member_no = '$myid' ORDER BY id");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();

                                    foreach($result as $row)
                                    {
										$total_records++;
										
									}

                                    }catch(PDOException $e)
                                    {
     
                                    }
								$records = $total_records/5;
                                $records = ceil($records);
				                if ($records > 1 ) {
								$prevpage = $page - 1;
								$nextpage = $page + 1;
								
								print '<li class="paging-nav" '; if ($page == "1") { print 'class="disabled"'; } print '><a '; if ($page == "1") { print ''; } else { print 'href="language.php?page='.$prevpage.'"';} print '><i class="fa fa-chevron-left"></i></a></li>';
					            for ($b=1;$b<=$records;$b++)
                                 {
                                 
		                        ?><li  class="paging-nav"><a <?php if ($b == $page) { print ' style="background-color:#33B6CB; color:white" '; } ?>  href="language.php?page=<?php echo "$b"; ?>"><?php echo $b." "; ?></a></li><?php
                                 }	
								 print '<li class="paging-nav"'; if ($page == $records) { print 'class="disabled"'; } print '><a '; if ($page == $records) { print ''; } else { print 'href="language.php?page='.$nextpage.'"';} print '><i class="fa fa-chevron-right"></i></a></li>';
					             }

								
								?>

						            </ul>	
					
					                </div>

										
		
										
									</div>
									
									<div class="mt-30">
									
										<a data-toggle="modal" href="#QualifModal" class="btn btn-primary btn-lg">Thêm</a>
										
									</div>
									<div id="QualifModal" class="modal fade login-box-wrapper" tabindex="-1" data-width="550" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
			
				                    <div class="modal-header">
					                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					                 <h4 class="modal-title text-center">Thêm ngôn ngữ</h4>
				                    </div>
				
				                    <div class="modal-body">
									<form action="app/add-language.php" method="POST" autocomplete="off" enctype="multipart/form-data">
					                <div class="row gap-20">
						            <div class="col-sm-12 col-md-12">
				
							        <div class="form-group"> 
								    <label>Ngôn ngữ</label>
								    <input class="form-control" placeholder="Nhập tên Ngôn ngữ" type="text" name="language" required> 
							        </div>
						
						             </div>

						
						            <div class="col-sm-12 col-md-12">
				
							        <div class="form-group"> 
								    <label>Nói</label>
								    <select name="speak" required class="selectpicker show-tick form-control" data-live-search="false">
									<option value="Fair">Trung bình</option>
									<option value="Good">Tốt</option>
									<option value="Very Good">Rất tốt</option>
									</select>
							        </div>
						
						             </div>
						
						            <div class="col-sm-12 col-md-12">
				
							        <div class="form-group"> 
								    <label>Đọc</label>
								    <select name="read" required class="selectpicker show-tick form-control" data-live-search="false">
									<option value="Fair">Trung bình</option>
									<option value="Good">Tốt</option>
									<option value="Very Good">Rất tốt</option>
									</select>
							        </div>
						
						             </div>

						            <div class="col-sm-12 col-md-12">
				
							        <div class="form-group"> 
								    <label>Viết</label>
								    <select name="write" required class="selectpicker show-tick form-control" data-live-search="false">
									<option value="Fair">Trung bình</option>
									<option value="Good">Tốt</option>
									<option value="Very Good">Rất tốt</option>
									</select>
							        </div>
						
						             </div>
						
					               </div>
				                   </div>
				
				                   <div class="modal-footer text-center">
				 	               <button type="submit" class="btn btn-primary">Gửi đi</button>
					               <button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Đóng</button>
				                   </div>
				                   </form>
			                       </div>
									
								</div>

							</div>
							
						</div>

					</div>

				</div>
			
			</div>

				<footer class="footer-wrapper">
			
				<div class="main-footer">
				
					<div class="container">
					
						<div class="row">
						
							<div class="col-sm-12 col-md-9">
							
								<div class="row">
								
									<div class="col-sm-6 col-md-4">
									
										<div class="footer-about-us">
											<h5 class="footer-title">Giới thiệu về chúng tôi</h5>
											<p>JOB MARKET là một thị trường việc làm, hệ thống quản lý việc làm trực tuyến được phát triển bởi một nhóm sinh viên trường CNTT & TT Thái Nguyên cho dự án của họ vào năm 2021.</p>
										
										</div>

									</div>
									
								<div class="col-sm-6 col-md-5 mt-30-xs">
										<h5 class="footer-title">Đường dẫn nhanh</h5>
										<ul class="footer-menu clearfix">
											<li><a href="./">Trang chủ</a></li>
											<li><a href="job-list.php">Công việc</a></li>
											<li><a href="employers.php">Nhà tuyển dụng</a></li>
											<li><a href="employees.php">Nhân viên</a></li>
											<li><a href="contact.php">Liên  hệ chúng tôi</a></li>
											<li><a href="#">Lên đầu trang</a></li>

										</ul>
									
									</div>

								</div>

							</div>
							
							<div class="col-sm-12 col-md-3 mt-30-sm">
							
								<h5 class="footer-title">Liên hệ chúng tôi</h5>
								
								<p>Địa chỉ : Đại học CNTT & TT Thái Nguyên</p>
								<p>Email : <a href="dtc18h4802010039@ictu.edu.vn">DTC18h4802010039@ictu.edu.vn</a></p>
								<p>Phone : <a href="tel:+840348567442">+840348567442</a></p>
								

							</div>

							
						</div>
						
					</div>
					
				</div>
				
				<div class="bottom-footer">
				
					<div class="container">
					
						<div class="row">
						
							<div class="col-sm-4 col-md-4">
					
								<p class="copy-right">&#169; Bản quyền <?php echo date('Y'); ?></p>
								
							</div>
							
							<div class="col-sm-4 col-md-4">
							
								<ul class="bottom-footer-menu">
									<li><a >Được phát triển bởi sinh viên CNTT & TT</a></li>
								</ul>
							
							</div>
							
							<div class="col-sm-4 col-md-4">
								<ul class="bottom-footer-menu for-social">
									<li><a href="<?php echo "$tw"; ?>"><i class="ri ri-twitter" data-toggle="tooltip" data-placement="top" title="twitter"></i></a></li>
									<li><a href="<?php echo "$fb"; ?>"><i class="ri ri-facebook" data-toggle="tooltip" data-placement="top" title="facebook"></i></a></li>
									<li><a href="<?php echo "$ig"; ?>"><i class="ri ri-instagram" data-toggle="tooltip" data-placement="top" title="instagram"></i></a></li>
								</ul>
							</div>
						
						</div>

					</div>
					
				</div>
			
			</footer>
			
		</div>


	</div>
 
 

<div id="back-to-top">
   <a href="#"><i class="ion-ios-arrow-up"></i></a>
</div>

<script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="../js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="../js/bootstrap-modal.js"></script>
<script type="text/javascript" src="../js/smoothscroll.js"></script>
<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="../js/wow.min.js"></script>
<script type="text/javascript" src="../js/jquery.slicknav.min.js"></script>
<script type="text/javascript" src="../js/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-tokenfield.js"></script>
<script type="text/javascript" src="../js/typeahead.bundle.min.js"></script>
<script type="text/javascript" src="../js/bootstrap3-wysihtml5.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="../js/jquery-filestyle.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-select.js"></script>
<script type="text/javascript" src="../js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="../js/handlebars.min.js"></script>
<script type="text/javascript" src="../js/jquery.countimator.js"></script>
<script type="text/javascript" src="../js/jquery.countimator.wheel.js"></script>
<script type="text/javascript" src="../js/slick.min.js"></script>
<script type="text/javascript" src="../js/easy-ticker.js"></script>
<script type="text/javascript" src="../js/jquery.introLoader.min.js"></script>
<script type="text/javascript" src="../js/jquery.responsivegrid.js"></script>
<script type="text/javascript" src="../js/customs.js"></script>

<script type="text/javascript" src="../js/fileinput.min.js"></script>
<script type="text/javascript" src="../js/customs-fileinput.js"></script>


</body>


</html>