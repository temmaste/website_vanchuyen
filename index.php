<?php
// session_start();
// include "../../utils/connectDB.php";
// include "../../utils/curency_format.php";
// include "../../model/bookModel.php";
// include "../../model/loaiModel.php";
// $book = new bookModel(1, 1, 1, 1, 1, 1, 1); //fake data
// $arrayOb = $book->getAllBook();
// $loai = new loaiModel(1,1);
// $result = $loai->getAllLoai();

// $arrayOb = array()
?>
<!DOCTYPE html>
<html>

<?php include "layout/head.php" ?>

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

			<h1>hello</h1>
			<!-- Simple Datatable End -->
			<!-- multiple select row Datatable start -->

			<!-- multiple select row Datatable End -->
			<!-- Checkbox select Datatable start -->

			<!-- Checkbox select Datatable End -->
			<!-- Export Datatable start -->

			<!-- Export Datatable End -->
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
<!-- thong bao delete -->
<?php
if (isset($_GET['checkDelete']) && $_GET['checkDelete'] > 0) {
	$message = "Bạn đã xóa thành công";
	echo "<script type='text/javascript'>alert('$message');</script>";
} else if (isset($_GET['checkUpdate']) && $_GET['checkUpdate'] > 0) {
	$message = "Bạn đã cập nhật thành công";
	echo "<script type='text/javascript'>alert('$message');</script>";
} else if (isset($_GET['action']) && $_GET['action'] == "error_delete_exists") {
	$message = "Thể loại còn sách không thể xóa!";
	echo "<script type='text/javascript'>alert('$message');</script>";
}

?>