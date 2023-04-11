<?php
?>
<!DOCTYPE html>
<html>

<?php include "layout/head.php" ?>

<body>
    <!-- Phieu chuyen kho -->
    <?php
    $ch = require("init_curl.php");
    curl_setopt($ch, CURLOPT_URL, "http://localhost:3000/phieuchuyenkho/getallphieuchuyenkho");
    $reposn = curl_exec($ch);
    curl_close($ch);
    $data = json_decode($reposn, true);
    // var_dump($data);
    ?>
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
                <div class="card-box mb-30">
                    <div class="pd-20">
                        <h4 class="text-blue h4">Đơn hàng xuất qua kho mới</h4>
                    </div>
                    <div class="pb-20">
                        <table class="data-table table stripe hover nowrap">
                            <thead>
                                <tr>
                                    <th class="table-plus datatable-nosort">Mã</th>
                                    <th>Ngày</th>
                                    <th>Kho gửi</th>
                                    <th>Kho đến</th>
                                    <th>Trạng thái</th>
                                    <th>Số xe</th>
                                    <th class="datatable-nosort"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($data as $res) {
                                ?>
                                    <tr>
                                        <td class="table-plus"><?php
                                                                echo $res["mack"]
                                                                ?></td>
                                        <td><?php echo $res["ngaylapphieu"];
                                            ?></td>
                                        <td><?php echo $res["makhogui"];
                                            ?></td>
                                        <td><?php echo $res["makhogui"];
                                            ?></td>
                                        <td></td>
                                        <td>
                                            <?php echo $res["soxe"];
                                            ?>
                                        </td>
                                        <td>
                                            <input type="checkbox" id="html" value="HTML" style="border-radius: 10%;">
                                        </td>
                                    </tr>
                                <?php }
                                ?>

                            </tbody>
                        </table>
                    </div>
                    <div class="page-header">
                        <a href="themPhieuChuyenKho.php" class="btn btn-info">Thêm</a>
                        <a href="./addBookPage.php" class="btn btn-info">Sửa</a>
                        <a href="./addBookPage.php" class="btn btn-info">Xóa</a>
                    </div>
                </div>


            </div>
            <!-- Phieu giao hang -->
            <?php
            $ch1 = require("init_curl.php");
            curl_setopt($ch1, CURLOPT_URL, "http://localhost:3000/phieugiaohang/getallphieugiaohang");
            $reposn1 = curl_exec($ch1);
            curl_close($ch1);
            $data1 = json_decode($reposn1, true);
            // var_dump($data);
            ?>
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Đơn hàng xuất đến khách hàng</h4>
                </div>
                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Mã</th>
                                <th>Ngày</th>
                                <th>Kho gửi</th>
                                <th>Nguời gửi</th>
                                <th>Người nhận</th>
                                <th>Shiper</th>
                                <th>Trạng thái</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data1 as $res1) {

                            ?>
                                <tr>
                                    <td class="table-plus"><?php echo $res1["magh"];
                                                            ?></td>
                                    <td><?php echo $res1["ngaylapphieu"];
                                        ?></td>
                                    <td><?php
                                        ?></td>
                                    <td><?php echo $res1["magh"];
                                        ?></td>
                                    <td><?php echo $res1["nguoinhan"];
                                        ?></td>
                                    <td>
                                        <?php echo $res1["shipper"];
                                        ?>< </td>
                                    <td>

                                    </td>
                                    <td>
                                        <input type="checkbox" id="html" value="HTML" style="border-radius: 10%;">
                                    </td>
                                </tr>
                            <?php }
                            ?>

                        </tbody>
                    </table>
                </div>
                <div class="page-header">
                    <a href="./themPhieuGiaoHang.php" class="btn btn-info">Thêm</a>
                    <a href="./addBookPage.php" class="btn btn-info">Xóa</a>
                    <a href="./addBookPage.php" class="btn btn-info">Sửa</a>
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