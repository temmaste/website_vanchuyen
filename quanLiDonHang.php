<?php

?>
<!DOCTYPE html>
<html>

<?php include "layout/head.php" ?>

<body>
    <?php
    $ch = require("init_curl.php");
    curl_setopt($ch, CURLOPT_URL, "http://localhost:3000/donhang/getall");
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



        </div>
        <div class="card-box mb-30">
            <div class="page-header">
                <h3>Quản lý Đơn Hàng</h3>
                <p>Admin > <span style="font-weight: 1000;">Quản lí đơn hàng</span></p>
            </div>
            <div class="page-header">
                <a style="background-color: #1b00ff;" href="./themDonHang.php" class="btn btn-info">Thêm</a>

            </div>
            <div class="pd-20">
                <h4 class="text-blue h4">Danh sách đơn hàng</h4>
            </div>
            <div class="pb-20">
                <table class="data-table table stripe hover nowrap">
                    <thead>
                        <tr>
                            <th class="table-plus datatable-nosort">Mã đơn hàng</th>
                            <th>Người gửi</th>
                            <th>Người nhận</th>
                            <th>Trạng thái</th>
                            <th>Check</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($data as $res) {
                        ?>
                            <tr>
                                <td class="table-plus"><?php echo $res["madh"]
                                                        ?></td>
                                <td><?php echo $res["tenkh"]
                                    ?></td>
                                <td><?php echo $res["tenkh"]
                                    ?></td>
                                <td><?php //echo currency_format_d($arrayOb[$i]->getGia());
                                    ?></td>
                                <td><?php //echo $arrayOb[$i]->getMota()
                                    ?></td>



                            </tr>
                        <?php }
                        ?>

                    </tbody>
                </table>
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