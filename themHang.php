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
<?php include "./layout/head.php" ?>

<body>

	<?php include "./layout/pre-loader.php" ?>
	<?php include "./layout/header.php" ?>

	<?php include "./layout/right-sidebar.php" ?>

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
								<h4>Thêm hàng</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">

									<li class="breadcrumb-item">
										<a href="index.php">Quản lí Xuất hàng</a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">
										<a href="index.php">Thêm phiếu chuyển kho</a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">
										<a href="index.php">Thêm hàng</a>
									</li>
								</ol>
							</nav>
						</div>

					</div>
					<div class="row  pt-10">
						<div class="col-md-6 col-sm-12 ">
							<a href="./themPhieuChuyenKho.php" class="btn btn-info">Quay lại</a>
						</div>

					</div>

				</div>
			</div>



			<!-- horizontal Basic Forms Start -->
			<div class="pd-20 card-box mb-30">
				<div class="clearfix">
					<div class="pull-left">
					</div>

				</div>
				<div class="pb-20 md-20">
					<form>
						<div class="border border-dark">
							<p class="text-primary">Người gửi</p>
							<div class="row mx-2">
								<div class="col-md-4">
									<label for="">Họ và tên</label>
								</div>
								<div class="col-md-4">
									<label for="">Số điện thoại</label>

								</div>
								<div class=" col-md-4">
									<label for="">Địa chỉ</label>

								</div>
							</div>
							<div class="row mx-2  mb-4">
								<div class="col-md-4 mb-3">

									<input type="text" class="form-control">
								</div>
								<div class="col-md-4 mb-3">

									<input type="text" class="form-control" ">
                                </div>
                                <div class=" col-md-4 mb-3">

									<input type="text" class="form-control" ">
                                </div>
                            </div>
						</div>
						<div class=" border border-dark mt-4">
									<p class="text-primary">Người nhận</p>
									<div class="row mx-2">
										<div class="col-md-4">
											<label for="">Họ và tên</label>
										</div>
										<div class="col-md-4">
											<label for="">Số điện thoại</label>

										</div>
										<div class=" col-md-4">
											<label for="">Địa chỉ</label>

										</div>
									</div>
									<div class="row mx-2  mb-4">
										<div class="col-md-4 mb-3">
											<input type="text" class="form-control">
										</div>
										<div class="col-md-4 mb-3">
											<input type="text" class="form-control" ">
                               		</div>
                                	<div class=" col-md-4 mb-3">
											<input type="text" class="form-control" ">
                                		</div>
									</div>
							
						</div>
						<div class=" border border-dark mt-4">
											<p class="text-primary">Thông tin kiện hàng</p>
											<div class="row mx-2">
												<div class="col-md-4">
													<label for="">Tên hàng</label>
												</div>
												<div class="col-md-4">
													<label for="">Loại hàng</label>

												</div>
												<div class=" col-md-4">
													<label for="">Thể tích/ Khối lượng</label>

												</div>
											</div>
											<div class="row mx-2  mb-4">
												<div class="col-md-4 mb-3">

													<input type="text" class="form-control">
												</div>
												<div class="col-md-4 mb-3">

													<input type="text" class="form-control" ">
                               					 </div>
                                				<div class=" col-md-4 mb-3">

													<input type="text" class="form-control" ">
                                				</div>
                            				</div>
											<div class=" row mx-2">
													<div class="col-md-4">
														<label for="">Giá trị</label>
													</div>
												</div>
												<div class="row mx-2  mb-4">
													<div class="col-md-4 mb-3">

														<input type="text" class="form-control">
													</div>
												</div>
											</div>
										</div>
										<div class=" row mx-2">
											<div class="col-md-4">
												<label for="">Ngày gửi</label>
											</div>
										</div>
										<div class="row mx-2  mb-4">
											<div class="col-md-4 mb-3">

												<input type="date" class="form-control">
											</div>
										</div>
										<div class="row mx-2  mb-4">
											<div class="col-md-4 mb-3">
												<button type="submit" class="btn btn-primary">Thêm hàng</button>
											</div>
										</div>
									</div>


					</form>

				</div>

				<!-- <form action=" ../../controllers/admin/bookController.php" method="post" enctype="multipart/form-data">
													<div class="form-group">
														<label>Tên sách</label>
														<input class="form-control" type="text" name="insert_tensach" placeholder="Nhập tên sách" required />
													</div>
													<div class="form-group">
														<label>Tác giả</label>
														<input class="form-control" type="text" name="insert_tacgia" placeholder="Nhập tên tác giả" required />

													</div>
													<div class="form-group">
														<label>Giá</label>
														<input class="form-control" type="text" name="insert_gia" placeholder="Nhập Giá Sản Phẩm" required />
													</div>





													<div class="form-group">
														<label>Mô tả</label>
														<textarea class="form-control" name="insert_mota" required></textarea>
													</div>

													<div class="form-group">
														<label>Chọn hình</label>
														<input type="file" name="insert_file" class="form-control-file form-control height-auto" />
													</div>
													<input class="btn btn-primary" type="submit" name="btn_insert_book" value="Thêm">
					</form> -->

				<div class="collapse collapse-box" id="horizontal-basic-form1">
					<div class="code-box">
						<div class="clearfix">
							<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left" data-clipboard-target="#horizontal-basic"><i class="fa fa-clipboard"></i> Copy Code</a>
							<a href="#horizontal-basic-form1" class="btn btn-primary btn-sm pull-right" rel="content-y" data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
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
	<?php include "./layout/js.php" ?>
</body>

</html>