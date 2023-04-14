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
                            <th><input id="chk_all" name="chk_all" type="checkbox" /></th>
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
                                <td><?php echo $res["tentrangthai"]
                                    ?></td>
                                <td>
                                    <input type="checkbox" id="check" name="chk_madh[]" class='chkbox' value="<?php
                                                                                                                echo $res1["magh"]
                                                                                                                ?>" style="border-radius: 10%;">
                                </td>
                            </tr>
                        <?php }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>

    </div>

    </div>
    </div>

    </div>
    <?php include "./layout/js.php" ?>
</body>

</html>
<script src="js/jquery-1.10.2.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#chk_all').click(function() {
            if (this.checked)
                $(".chkbox").prop("checked", true);
            else
                $(".chkbox").prop("checked", false);
        });
    });
    $(document).ready(function() {
        $('#delete_form').submit(function(e) {
            if (!confirm("Confirm Delete?")) {
                e.preventDefault();
            }
        });
    });
</script>
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