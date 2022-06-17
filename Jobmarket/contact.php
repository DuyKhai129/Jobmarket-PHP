<!doctype html>
<html lang="en">
<?php 
include 'constants/settings.php'; 
include 'constants/check-login.php';
?>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title> Contact Us</title>
	<meta name="description" content="Online Job Management / Job Portal" />
	<meta name="keywords" content="job, work, resume, applicants, application, employee, employer, hire, hiring, human resource management, hr, online job management, company, worker, career, recruiting, recruitment" />
	<meta name="author" content="BwireSoft">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="http://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:secure_url" content="https://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="Nightingale Jobs" />
    <meta property="og:description" content="Online Job Management / Job Portal" />

	<link rel="shortcut icon" href="images/ico/favicon.png">

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen">	
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/component.css" rel="stylesheet">
	
	<link rel="stylesheet" href="icons/linearicons/style.css">
	<link rel="stylesheet" href="icons/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="icons/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="icons/ionicons/css/ionicons.css">
	<link rel="stylesheet" href="icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" href="icons/rivolicons/style.css">
	<link rel="stylesheet" href="icons/flaticon-line-icon-set/flaticon-line-icon-set.css">
	<link rel="stylesheet" href="icons/flaticon-streamline-outline/flaticon-streamline-outline.css">
	<link rel="stylesheet" href="icons/flaticon-thick-icons/flaticon-thick.css">
	<link rel="stylesheet" href="icons/flaticon-ventures/flaticon-ventures.css">

	<link href="css/style.css" rel="stylesheet">

	
</head>


<body class="not-transparent-header">

	<div class="container-wrapper">

		<header id="header">
			<nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function">

				<div class="container">
					
					<div class="logo-wrapper">
						<div class="logo">
							<a href="./"><img src="images/logo.png" alt="Logo" /></a>
						</div>
					</div>
					
					<div id="navbar" class="navbar-nav-wrapper navbar-arrow">
					
						<ul class="nav navbar-nav" id="responsive-menu">
							
									<li>
									
										<a href="./">Trang chủ</a>
										
									</li>
									
									<li>
										<a href="job-list.php">Công việc</a>

									</li>
									
									<li>
										<a href="employers.php">Nhà tuyển dụng</a>
									</li>
									
									<li>
										<a href="employees.php">Nhân viên</a>
									</li>
									
									<li>
										<a href="contact.php">Liên hệ chúng tôi</a>
									</li>

							</ul>
				
					</div>

					<div class="nav-mini-wrapper">
							<ul class="nav-mini sign-in">
									<?php
									if ($user_online == true) {
									print '
									    <li><a href="logout.php">Đăng xuất</a></li>
										<li><a href="'.$myrole.'">Hồ sơ</a></li>';
									}else{
									print '
										<li><a href="login.php">Đăng nhập</a></li>
										<li><a data-toggle="modal" href="#registerModal">Đăng ký</a></li>';						
									}
									
									?>

							</ul>
					</div>
				
				</div>
				
				<div id="slicknav-mobile"></div>
				
			</nav>

			<div id="registerModal" class="modal fade login-box-wrapper" tabindex="-1" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
			
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title text-center">Tạo tài khoản </h4>
				</div>
				
				<div class="modal-body">
				
					<div class="row gap-20">
					
						<div class="col-sm-6 col-md-6">
							<a href="register.php?p=Employer" class="btn btn-facebook btn-block mb-5-xs">Nhà tuyển dụng</a>
						</div>
						<div class="col-sm-6 col-md-6">
							<a href="register.php?p=Employee" class="btn btn-facebook btn-block mb-5-xs">Nhân viên</a>
						</div>

					</div>
				
				</div>
				
				<div class="modal-footer text-center">
					<button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Đóng</button>
				</div>
				
			</div>


			
		</header>

		<div class="main-wrapper">

			<div class="breadcrumb-wrapper">
			
				<div class="container">
				
					<ol class="breadcrumb-list">
						<li><a href="./">Trang chủ</a></li>
						<li><span>Liên hệ chúng tôi</span></li>
					</ol>
					
				</div>
				
			</div>
			
			<div class="section sm">
			
				<div class="container">
				
					<div class="row">
					
						<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
						
							<div class="section-title">
							
								<h2>liên hệ với chúng tôi để được giúp đỡ</h2>
								
							</div>

						</div>
					
					</div>
					
					<div class="row">

						<div class="col-sm-7 col-md-6 col-md-offset-1 mb-30">
						<?php include 'constants/check_reply.php'; ?>
						
							<form class="contact-form-wrapper" data-toggle="validator" action="app/send-message.php" method="POST" autocomplete="off">
							
								<div class="row">
								
									<div class="col-sm-6">
									
										<div class="form-group">
											<label for="inputName">Tên của bạn <span class="font10 text-danger">(bắt buộc)</span></label>
											<input id="inputName" name="fullname" type="text" class="form-control" data-error="Tên của bạn là bắt buộc" required>
											<div class="help-block with-errors"></div>
										</div>
										
									</div>
									
									<div class="col-sm-6">
									
										<div class="form-group">
											<label for="inputEmail">Email của bạn <span class="font10 text-danger">(bắt buộc)</span></label>
											<input id="inputEmail" name="email" type="email" class="form-control" data-error="Email của bạn là bắt buộc và phải là một địa chỉ email hợp lệ" required>
											<div class="help-block with-errors"></div>
										</div>
										
									</div>

									
									<div class="col-sm-12">
									
										<div class="form-group">
											<label for="inputMessage">Nội dung <span class="font10 text-danger">(bắt buộc)</span></label>
											<textarea id="inputMessage" name="message" class="form-control" rows="8" data-minlength="50" data-error="Tin nhắn của bạn là bắt buộc và không được ít hơn 50 ký tự" required></textarea>
											<div class="help-block with-errors"></div>
										</div>

									</div>
									
									<div class="col-sm-12 text-right">
										<button type="submit" class="btn btn-primary mt-5">Gửi đi</button>
									</div>
									
								</div>
								
							</form>
							
						</div>
						
						<div class="col-sm-5 col-md-4">
						
							<ul class="address-list">
								<li>
										<h5>Địa chỉ</h5>
										<address>Đường Z 115, Quyết Thắng, Thành phố Thái Nguyên , <br/> Thái Nguyên 250000, <br/>Đại học CNTT & TT Thái Nguyên</address>
								</li>
								<li>
										<h5>Email</h5><a href="DTC18h4802010039@ictu.edu.vn">DTC18h4802010039@ictu.edu.vn</a>
								</li>
								<li>
										<h5>Phone</h5><a href="tel:+84 0348 567 442">+84 0348 567 442</a>
								</li>

								<li>
										<h5>Mạng xã hội</h5>
										<div class="contact-social">
										
											<a href="<?php echo "$fb"; ?>" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
											<a href="<?php echo "$tw"; ?>" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
											<a href="<?php echo "$ig"; ?>" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
										
										</div>
								</li>
									
							</ul>
						
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

<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="js/bootstrap-modal.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/jquery.slicknav.min.js"></script>
<script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="js/bootstrap-tokenfield.js"></script>
<script type="text/javascript" src="js/typeahead.bundle.min.js"></script>
<script type="text/javascript" src="js/bootstrap3-wysihtml5.min.js"></script>
<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="js/jquery-filestyle.min.js"></script>
<script type="text/javascript" src="js/bootstrap-select.js"></script>
<script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="js/handlebars.min.js"></script>
<script type="text/javascript" src="js/jquery.countimator.js"></script>
<script type="text/javascript" src="js/jquery.countimator.wheel.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/easy-ticker.js"></script>
<script type="text/javascript" src="js/jquery.introLoader.min.js"></script>
<script type="text/javascript" src="js/jquery.responsivegrid.js"></script>
<script type="text/javascript" src="js/customs.js"></script>

<script src="js/validator.min.js"></script>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/infobox.js"></script>

<script>
	function initialize() {


var styles = [{"featureType":"all","elementType":"labels","stylers":[{"lightness":63},{"hue":"#ff0000"}]},{"featureType":"administrative","elementType":"all","stylers":[{"hue":"#000bff"},{"visibility":"on"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"administrative","elementType":"labels","stylers":[{"color":"#4a4a4a"},{"visibility":"on"}]},{"featureType":"administrative","elementType":"labels.text","stylers":[{"weight":"0.01"},{"color":"#727272"},{"visibility":"on"}]},{"featureType":"administrative.country","elementType":"labels","stylers":[{"color":"#ff0000"}]},{"featureType":"administrative.country","elementType":"labels.text","stylers":[{"color":"#ff0000"}]},{"featureType":"administrative.province","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"administrative.province","elementType":"labels.text","stylers":[{"color":"#545454"}]},{"featureType":"administrative.locality","elementType":"labels.text","stylers":[{"visibility":"on"},{"color":"#737373"}]},{"featureType":"administrative.neighborhood","elementType":"labels.text","stylers":[{"color":"#7c7c7c"},{"weight":"0.01"}]},{"featureType":"administrative.land_parcel","elementType":"labels.text","stylers":[{"color":"#404040"}]},{"featureType":"landscape","elementType":"all","stylers":[{"lightness":16},{"hue":"#ff001a"},{"saturation":-61}]},{"featureType":"poi","elementType":"labels.text","stylers":[{"color":"#828282"},{"weight":"0.01"}]},{"featureType":"poi.government","elementType":"labels.text","stylers":[{"color":"#4c4c4c"}]},{"featureType":"poi.park","elementType":"all","stylers":[{"hue":"#00ff91"}]},{"featureType":"poi.park","elementType":"labels.text","stylers":[{"color":"#7b7b7b"}]},{"featureType":"road","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels.text","stylers":[{"color":"#999999"},{"visibility":"on"},{"weight":"0.01"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"hue":"#ff0011"},{"lightness":53}]},{"featureType":"road.highway","elementType":"labels.text","stylers":[{"color":"#626262"}]},{"featureType":"transit","elementType":"labels.text","stylers":[{"color":"#676767"},{"weight":"0.01"}]},{"featureType":"water","elementType":"all","stylers":[{"hue":"#0055ff"}]}];

var loc, map, marker, infobox;

var styledMap = new google.maps.StyledMapType(styles,  {name: "Styled Map"});

loc = new google.maps.LatLng($("#map").attr("data-lat"), $("#map").attr("data-lon"));

map = new google.maps.Map(document.getElementById("map"), {
	zoom: 14,
	center: loc,
	scrollwheel: false,

	navigationControl: false,
	scaleControl: false,
	mapTypeControl:false,
	streetViewControl: false,
	mapTypeControlOptions: {
		mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
	},
	mapTypeId: google.maps.MapTypeId.ROADMAP,
});

map.mapTypes.set('map_style', styledMap);
map.setMapTypeId('map_style');

marker = new google.maps.Marker({
	map: map,
	position: loc,

	icon:'images/map-marker/00.png',
	visible: true

});

infobox = new InfoBox({
	content: document.getElementById("infobox"),
	disableAutoPan: true,
	pixelOffset: new google.maps.Size(0, -50),
	zIndex: null,
	alignBottom: true,
	isHidden: false,
	closeBoxURL: "images/infobox-close.png",
	closeBoxClass:"infoBox-close",
	infoBoxClearance: new google.maps.Size(1, 1)
});

openInfoBox(marker);

google.maps.event.addListener(marker, 'click', function() {
	openInfoBox(this);
});

function openInfoBox(thisMarker){
	map.panTo(loc);
	map.panBy(0,-80);
	infobox.open(map, thisMarker);
}

var center;
function calculateCenter() {
	center = map.getCenter();
}
google.maps.event.addDomListener(map, 'idle', function() {
	calculateCenter();
});
google.maps.event.addDomListener(window, 'resize', function() {
	map.setCenter(center);
});

}
google.maps.event.addDomListener(window, 'load', initialize);
</script>

</body>

</html>