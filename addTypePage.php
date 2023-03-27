<?php 
// session_start();
// include "../../utils/connectDB.php";
// include "../../model/bookModel.php";
// include "../../model/loaiModel.php";
// $book = new bookModel(1, 1, 1, 1, 1, 1, 1); //fake data
// $arrayOb = $book->getAllBook();
// $loai = new loaiModel(1,1);
// $result = $loai->getAllLoai();

?>
<!DOCTYPE html>
<html>
<?php include "./layout/head.php"?>
	<body>
		
		<?php include "./layout/pre-loader.php"?>
		<?php include "./layout/header.php"?>

		<?php include "./layout/right-sidebar.php"?>

		<?php
			include "./layout/left_side_bar.php"; 
		?>
		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>Thêm Loại sách</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.php">Admin</a>
										</li>
                                        <li class="breadcrumb-item">
											<a href="index.php">Quản lí sách</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Thêm loại sách
										</li>
									</ol>
								</nav>
							</div>
							
						</div>
					</div>
					 
					

					<!-- horizontal Basic Forms Start -->
					<div class="pd-20 card-box mb-30">
						<div class="clearfix">
							<div class="pull-left">
								 
							</div>
							
						</div>
						<?php if(isset($_GET['action'])&&$_GET['action']=="update_form_type"){
							?>
                        <form action="../../controllers/admin/typeController.php" method="post">
							<div class="form-group">
								<label>Tên loại sách</label>
								<input
									class="form-control"
									type="text"
									name="type_name"
									placeholder="Nhập Loại Sách"
									value="<?php echo $_GET['type_name'] ?>"
									required
								/>
							</div>
							<input type="hidden" name="type_id" value="<?php echo $_GET['id'] ?>">
                            <input class="btn btn-primary" name="btn_update_loai" type="submit" value="Sửa">
						</form>
						<?php }else{?>
							<form action="../../controllers/admin/typeController.php" method="post">
							<div class="form-group">
								<label>Tên loại sách</label>
								<input
									class="form-control"
									type="text"
									name="type_name"
									placeholder="Nhập Loại Sách"
									required
								/>
							</div>
						
                            <input class="btn btn-primary" name="btn_add_loai" type="submit" value="Thêm">
						</form>
						<?php }?>
						<div class="collapse collapse-box" id="horizontal-basic-form1">
							<div class="code-box">
								<div class="clearfix">
									<a
										href="javascript:;"
										class="btn btn-primary btn-sm code-copy pull-left"
										data-clipboard-target="#horizontal-basic"
										><i class="fa fa-clipboard"></i> Copy Code</a
									>
									<a
										href="#horizontal-basic-form1"
										class="btn btn-primary btn-sm pull-right"
										rel="content-y"
										data-toggle="collapse"
										role="button"
										><i class="fa fa-eye-slash"></i> Hide Code</a
									>
								</div>
								<pre><code class="xml copy-pre" id="horizontal-basic">
 
								</code></pre>
							</div>
						</div>
					</div>
					<!-- horizontal Basic Forms End -->

					<!-- Form grid Start -->
					
					<!-- Form grid End -->

					<!-- Input Validation Start -->
				
					<!-- Input Validation End -->
				</div>
				<!-- <div class="footer-wrap pd-20 mb-20 card-box">
					DeskApp - Bootstrap 4 Admin Template By
					<a href="https://github.com/dropways" target="_blank"
						>Ankit Hingarajiya</a
					>
				</div> -->
			</div>
		</div>
		 
    </div>
		<?php include "./layout/js.php"?>
	</body>
</html>
