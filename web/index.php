<?php
session_start();
if(!isset($_SESSION['product'])&&isset($_GET['dathang'])){
	echo (' <script> alert("Bạn chưa mua cuốn sách nào"); </script>');
	
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BookParadise </title>
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="assets/dest/css/boostrap.min.css">
	<link rel="stylesheet" href="assets/dest/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/dest/vendors/colorbox/example3/colorbox.css">
	<link rel="stylesheet" href="assets/dest/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="assets/dest/rs-plugin/css/responsive.css">
	<link rel="stylesheet" title="style" href="assets/dest/css/style.css">
	<link rel="stylesheet" href="assets/dest/css/animate.css">
	<link rel="stylesheet" title="style" href="assets/dest/css/huong-style.css">
    <link rel='stylesheet prefetch' href='assets/dest/css/font-awesome.min1.css'>

    <style>
	.dropbtn{
		 background-color: #3498DB;
		  color: white;
		  padding: 16px;
		  font-size: 16px;
		  border: none;
	}
	.pagination {
  list-style: none;
  display: inline-block;
  padding: 0;
  margin-top: 10px;
}
.pagination li {
  display: inline;
  text-align: center;
}
.pagination a {
  float: left;
  display: block;
  font-size: 14px;
  text-decoration: none;
  padding: 5px 12px;
  color: #fff;
  margin-left: -1px;
  border: 1px solid transparent;
  line-height: 1.5;
}
.pagination a.active {
  cursor: default;
}
.pagination a:active {
  outline: none;
}
.modal-1 li:first-child a {
  -moz-border-radius: 6px 0 0 6px;
  -webkit-border-radius: 6px;
  border-radius: 6px 0 0 6px;
}
.modal-1 li:last-child a {
  -moz-border-radius: 0 6px 6px 0;
  -webkit-border-radius: 0;
  border-radius: 0 6px 6px 0;
}
.modal-1 a {
  border-color: #ddd;
  color: #4285F4;
  background: #fff;
}
.modal-1 a:hover {
  background: #eee;
}
.modal-1 a.active, .modal-1 a:active {
  border-color: #4285F4;
  background: #4285F4;
  color: #fff;
}
	</style>
</head>
<body>

	<div id="header">
		<div class="header-top" >
			<div class="container">
				<div class="pull-left auto-width-left">
					<ul class="top-menu menu-beta l-inline">
						<li><a href=""><i class="fa fa-home"></i>UET-VNU</a></li>
						<li><a href=""><i class="fa fa-phone"></i> 0163 296 7751</a></li>
					</ul>
				</div>
				<div class="pull-right auto-width-right">
					<ul class="top-details menu-beta l-inline">
                    
						<li><a href="signup.php">Đăng kí</a></li>
						<li><a href="login.php">Đăng nhập</a></li>
                        <li><a href="#"><i class="fa fa-user"></i>
                        
						<?php 
							if(isset($_SESSION['fullname'])){
								echo $_SESSION['fullname'];
							}else{
								echo 'Tài khoản';
							}
						
						?>
                        </a>
                        </li>
                        <li>
                        <form action="logout.php">
                        <button class="dropbtn">Logout</button>
                        </form>
                        </li>
                    </ul>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
		<div class="header-body" >
			<div class="container beta-relative">
				<div class="pull-left">
					<a href="index.php" id="logo"><img src="assets/dest/images/bookstore.png" width="200px" alt=""></a>
				</div>
				<div class="pull-right beta-components space-left ov">
					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
						<?php
						include('searchform.php');
						?>
					</div>

					<div class="beta-comp">
						<?php
						include('cart.php');
						?>
					</div>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-body -->
		<div class="header-bottom" style="background-color: #0277b8;">
			<div class="container">
				<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="index.php">Trang chủ</a></li>
						<li><a href="#">Thể Loại</a>
							<ul class="sub-menu">
								<li><a href="product_type.php?type='Văn Học Nước Ngoài'">Văn học nước ngoài</a></li>
								<li><a href="product_type.php?type='Khoa Học'">Khoa Học</a></li>
								<li><a href="product_type.php?type='Lịch Sử'">Lịch Sử</a></li>
                                <li><a href="product_type.php?type='Thiếu Nhi'">Thiếu Nhi</a></li>
							</ul>
						</li>
						<li><a href="about.php">Giới Thiệu</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->
	<div class="rev-slider">
	<div class="fullwidthbanner-container">
					<div class="fullwidthbanner">
						<div class="bannercontainer" >
					    <div class="banner" >
								<ul>
									<!-- THE FIRST SLIDE -->
									<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
						            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
													<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="assets/dest/images/book1.jpg" data-src="assets/dest/images/book1.jpg" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('assets/dest/images/book1.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
													</div>
												</div>

						        </li>
								<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
						          <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
												<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="assets/dest/images/book2.jpg" data-src="assets/dest/images/book2.jpg" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('assets/dest/images/book2.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
											</div>
											</div>
								</li>
                                <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
						          <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
												<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="assets/dest/images/book3.jpg" data-src="assets/dest/images/book3.jpg" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('assets/dest/images/book3.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
											</div>
											</div>
								</li>
								
								</ul>
							</div>
						</div>

						<div class="tp-bannertimer"></div>
					</div>
				</div>
				<!--slider-->
	</div>
    <?php include('config.php'); 
		$sql="select * from products order by numbersold desc limit 4 ";
		$sanpham=mysqli_query($conn,$sql);
		$sql2="select * from products order by id desc limit 4 ";
		$sanpham2=mysqli_query($conn,$sql2);
	?>
	<div class="container" >
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4 style=" height:50px; background-color:#3498DB; color:#FFF; text-align:center; padding-top:8px">Sách Bán Chạy Nhất</h4>
							<br>
                            

							<div class="row">
                            <?php
							while($row=mysqli_fetch_array($sanpham)){
							?>
								<div class="col-sm-3"  style="margin-top:20px">
                                
									<div class="single-item" >
										<div class="single-item-header">
											<a href="product.php?id=<?php echo $row['id'] ?>"><?php
					echo '<img src="image/image/'.$row['image'].'" />';
					?></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title"><?php echo $row['title'] ?></p>
											<p class="single-item-price">
												<span><p style="font-size:12px;">Giá Bán: <?php echo $row['cost'] ?>$</p></span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="checkout.php?id=<?php echo $row['id'] ?>&type=add&qty=1"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.php?id=<?php echo $row['id'] ?>">Chi Tiết <i class="fa fa-chevron-right"></i></a>
                                            
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
                                
                                 <?php
									}
								?>
                               
							</div>
                           
						</div> <!-- .beta-products-list -->
                        
                        <div class="beta-products-list" style="margin-top:20px;">
							<h4 style=" height:50px; background-color:#3498DB; color:#FFF; text-align:center; padding-top:8px">Sách Mới Nhất</h4>
							<br>
                            

							<div class="row">
                            <?php
							while($row2=mysqli_fetch_array($sanpham2)){
							?>
								<div class="col-sm-3"  style="margin-top:20px">
                                
									<div class="single-item" >
										<div class="single-item-header">
											<a href="product.php?id=<?php echo $row2['id'] ?>"><?php
					echo '<img src="image/image/'.$row2['image'].'" />';
					?></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title"><?php echo $row2['title'] ?></p>
											<p class="single-item-price">
												<span><p style="font-size:12px;">Giá Bán: <?php echo $row2['cost'] ?>$</p></span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="checkout.php?id=<?php echo $row2['id'] ?>&type=add&qty=1"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.php?id=<?php echo $row2['id'] ?>">Chi Tiết <i class="fa fa-chevron-right"></i></a>
                                            
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
                                
                                 <?php
									}
								?>
                               
							</div>
                           
						</div> <!-- .beta-products-list -->
                       
                       <?php
					   $display=8;
					   //$pos=0;
					   include('allbook.php');
					   echo"<hr>";
					   
					   $sqli2="select * from products";
									$truyvan2=mysqli_query($conn,$sqli2);
									$total = mysqli_num_rows($truyvan2);
									$page=ceil($total/$display);
									
									echo"<div style='text-align:center'>";
									echo"<ul class='pagination modal-1'>";
									echo"<li><a href='index.php?begin=0' class='prev'>&laquo</a></li>";
									for($i=1;$i<=$page;$i++){
										$begin=($i-1)*$display;
										echo"<li ><a href='index.php?begin=$begin'>$i</a></li>";
									}
									$val=$display*($page-1);
									echo"<li><a href='index.php?begin=$val' class='next'>&raquo;</a></li>";
									echo"</ul>";
					   				echo"</div>"
					   ?>
                       
  
  
                        </div>
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->

	<?php
	include('footer.php');
	?>
	<div class="copyright">
		<div class="container">
			<p class="pull-left">Privacy policy. (&copy;) 2014</p>
			<p class="pull-right pay-options">
				<a href="#"><img src="assets/dest/images/pay/master.jpg" alt="" /></a>
				<a href="#"><img src="assets/dest/images/pay/pay.jpg" alt="" /></a>
				<a href="#"><img src="assets/dest/images/pay/visa.jpg" alt="" /></a>
				<a href="#"><img src="assets/dest/images/pay/paypal.jpg" alt="" /></a>
			</p>
			<div class="clearfix"></div>
		</div> <!-- .container -->
	</div> <!-- .copyright -->


	<!-- include js files -->
	<script src="assets/dest/js/jquery.js"></script>
	<script src="assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
	<script src="assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
	<script src="assets/dest/vendors/animo/Animo.js"></script>
	<script src="assets/dest/vendors/dug/dug.js"></script>
	<script src="assets/dest/js/scripts.min.js"></script>
	<script src="assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="assets/dest/js/waypoints.min.js"></script>
	<script src="assets/dest/js/wow.min.js"></script>
	<!--customjs-->
	<script src="assets/dest/js/custom2.js"></script>
	<script>
	$(document).ready(function($) {    
		$(window).scroll(function(){
			if($(this).scrollTop()>150){
			$(".header-bottom").addClass('fixNav')
			}else{
				$(".header-bottom").removeClass('fixNav')
			}}
		)
	})
	</script>
</body>
</html>
