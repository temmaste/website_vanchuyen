<?php
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
    <!-- Api nhan vien -->
    <?php $ch = require("init_curl.php");
    curl_setopt($ch, CURLOPT_URL, "http://192.168.1.30:3000/nhanvien/getallnhanvien");
    $reposn = curl_exec($ch);
    curl_close($ch);
    $data = json_decode($reposn, true); ?>
    <!-- Api don hang -->
    <?php $ch1 = require("init_curl.php");
    curl_setopt($ch1, CURLOPT_URL, "http://192.168.1.30:3000/donhang/getall");
    $reposn1 = curl_exec($ch1);
    curl_close($ch1);
    $data1 = json_decode($reposn1, true); ?>
    <!-- Api kho -->
    <?php $chk = require("init_curl.php");
    curl_setopt($chk, CURLOPT_URL, "http://localhost:3000/phieuchuyenkho/getallkho");
    $reposnk = curl_exec($chk);
    curl_close($chk);
    $datak = json_decode($reposnk, true); ?>

    <div class="mobile-menu-overlay"></div>

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <!-- dsbook -->
                <div class="card-box mb-30 ">
                    <div class="pd-20">
                        <h4 class="text-blue h4">Thêm phiếu chuyển kho</h4>
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
                                <div class=" col-md-4">
                                    <label for="">Số xe</label>
                                </div>
                            </div>
                            <div class="row mx-2  mb-4">
                                <div class="col-md-4 mb-3">
                                    <select name="xe" id="xe-select" class="form-control">
                                        <?php
                                        foreach ($data as $res) {

                                        ?>
                                            <option value='$res[" tennv"]'><?php echo $res["tennv"] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">

                                    <input type="date" class="form-control">
                                </div>
                                <div class=" col-md-4 mb-3">
                                    <select name="xe" id="xe-select" class="form-control">
                                        <option value="">1</option>
                                        <option value="1">2</option>
                                        <option value="2">3</option>
                                        <option value="3">4</option>

                                    </select>
                                </div>
                            </div>
                            <div class=" row mx-2">
                                <div class="col-md-4">
                                    <label for="">Kho gửi</label>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Kho đến</label>
                                </div>
                            </div>
                            <div class=" row row mx-2 mb-4">
                                <div class="col-md-4 mb-3">
                                    <select name="xe" id="xe-select" class="form-control">
                                        <?php
                                        foreach ($datak as $resk) {

                                        ?>
                                            <option value='$resk[" tenk"]'><?php echo $resk["tenk"] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class=" col-md-4 mb-3">
                                    <select name="xe" id="xe-select" class="form-control">
                                        <?php
                                        foreach ($datak as $resk) {

                                        ?>
                                            <option value='$resk[" tenk"]'><?php echo $resk["tenk"] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class=" col-md-4">
                                    <a href="./themHang.php" class="btn btn-info" style="width: 120px;">Thêm hàng</a>
                                    <a href="" class="btn btn-info" style="width: 120px;">Lập phiếu</a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="card-box mb-30">
                    <div class="pd-20">
                        <h4 class="text-blue h4">Danh sách đơn hàng</h4>
                    </div>
                    <div class="pb-20">
                        <table class="data-table table stripe hover nowrap">
                            <thead>
                                <tr>
                                    <th class="table-plus datatable-nosort ">Mã</th>
                                    <th>KLượng/TTích</th>
                                    <th>Ghi chú</th>
                                    <th>Giá trị </th>
                                    <th>Địa chỉ nhận</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($data1 as $res1) {

                                ?>
                                    <tr>
                                        <td class="table-plus"><?php echo $res1["madh"]
                                                                ?></td>
                                        <td><?php echo $res1["khoiluong"]
                                            ?></td>
                                        <td><?php echo $res1["ghichu"]
                                            ?>
                                            ?></td>
                                        <td><?php echo $res1["giaitridh"]
                                            ?></td>
                                        <td>
                                            <?php echo $res1["diachi"]
                                            ?>
                                        </td>

                                        <td>
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        </td>
                                    </tr>
                                <?php }
                                ?>

                            </tbody>
                        </table>
                    </div>
                    <div class="page-header">
                        <a href="" class="btn btn-info mx-4" style="width:100px;">Xóa</a>
                    </div>
                </div>
            </div>
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