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
<link rel="stylesheet" type="text/css" href="./style.css" />

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
                <!-- dsbook -->
                <div class="card-box mb-30 ">
                    <div class="pd-20">
                        <h4 class="text-blue h4">Thêm phiếu giao hàng</h4>
                    </div>
                    <div class="pb-20 md-20">
                        <form>
                            <div class="row mx-2">
                                <div class="col-md-4">
                                    <label for="">Người lập phiếu</label>

                                </div>
                                <div class="col-md-4">
                                    <label for="">Ngày lập phiếu</label>

                                </div>

                            </div>
                            <div class="row mx-2  mb-4">
                                <div class="col-md-4 mb-3">

                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-4 mb-3">

                                    <input type="date" class="form-control" ">
                                </div>
                                
                            </div>
                            <div class=" row mx-2">
                                    <div class="col-md-4">
                                        <label for="">Kho gửi</label>

                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Shipper</label>

                                    </div>
                                </div>
                                <div class=" row row mx-2 mb-4">
                                    <div class="col-md-4 mb-3">

                                        <input type="text" class="form-control" ">
                                </div>
                                <div class=" col-md-4 mb-3">

                                        <input type="text" class="form-control" ">
                                </div>
                                <div class=" col-md-4">
                                        <a href="./addBookPage.php" class="btn btn-info" style="width: 120px;">Thêm hàng</a>
                                        <a href="./addBookPage.php" class="btn btn-info" style="width: 120px;">Lập phiếu</a>
                                    </div>
                                </div>
                        </form>

                    </div>


                </div>
                <div class="card-box mb-30">
                    <div class="pd-20">
                        <h4 class="text-blue h4">Danh sách hàng</h4>
                    </div>
                    <div class="pb-20">
                        <table class="data-table table stripe hover nowrap">
                            <thead>
                                <tr>
                                    <th class="table-plus datatable-nosort ">Mã</th>
                                    <th>Tên hàng </th>
                                    <th>KLượng/TTích</th>
                                    <th>Loại hàng</th>
                                    <th>Giá trị </th>
                                    <th>Địa chỉ gửi</th>
                                    <th>Địa chỉ nhận</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // for($i=0;$i<=count($arrayOb);$i++){
                                // 	if(!empty($arrayOb[$i])){


                                ?>
                                <tr>
                                    <td class="table-plus"><?php //echo $arrayOb[$i]->getId()
                                                            ?></td>
                                    <td class=""><?php //echo $arrayOb[$i]->getTensach()
                                                    ?></td>
                                    <td><?php //echo $arrayOb[$i]->getTacgia()
                                        ?></td>
                                    <td><?php //echo currency_format_d($arrayOb[$i]->getGia());
                                        ?></td>
                                    <td><?php //echo $arrayOb[$i]->getMota()
                                        ?></td>
                                    <td>

                                    <td>

                                    </td>

                                    <td>
                                        <!-- <div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">

												<a class="dropdown-item" href="../../controllers/admin/bookController.php?action=update&id=<?php //echo $arrayOb[$i]->getId(); 
                                                                                                                                            ?>"><i class="dw dw-edit2"></i> Sửa</a>
												<a class="dropdown-item" href="../../controllers/admin/bookController.php?action=delete&id=<?php //echo $arrayOb[$i]->getId(); 
                                                                                                                                            ?>"><i class="dw dw-delete-3"></i> Xóa</a>
											</div>
										</div> -->
                                    </td>
                                </tr>
                                <?php //}}
                                ?>

                            </tbody>
                        </table>
                    </div>
                    <div class="page-header">
                        <a href="./addBookPage.php" class="btn btn-info mx-4" style="width:100px;">Xóa</a>
                        <a href="./addBookPage.php" class="btn btn-info mx-2" style="width:100px;">Sửa</a>
                    </div>
                </div>
                <!-- Simple Datatable End -->
                <!-- multiple select row Datatable start -->

                <!-- multiple select row Datatable End -->
                <!-- Checkbox select Datatable start -->

                <!-- Checkbox select Datatable End -->
                <!-- Export Datatable start -->

                <!-- Export Datatable End -->
            </div>
            <!-- <div class=" footer-wrap pd-20 mb-20 card-box">
                            DeskApp - Bootstrap 4 Admin Template By
                            <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
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