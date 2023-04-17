<div class="header">
	<div class="header-left">
		<div class="menu-icon bi bi-list"></div>
		<div class="search-toggle-icon bi bi-search" data-toggle="header_search"></div>
	</div>
	<div class="header-right">
		<div class="dashboard-setting user-notification">
			<div class="dropdown">
				<a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
					<i class="dw dw-settings2"></i>
				</a>
			</div>
		</div>
		<div class="user-info-dropdown">
			<div class="dropdown">
				<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
					<span class="user-icon">
						<img src="../../public/images/photo5.jpg" alt="" />
					</span>
					<span class="user-name"><?php
											if (isset($_SESSION["sdt_nhanvien"])) {
												echo $_SESSION["tennhanvien"];
											}
											// }else{
											// echo 'Admin';
											// // }
											// // 
											?>
					</span>
				</a>
				<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
					<?php
					// if(isset($_SESSION['username'])&&$_SESSION['role']==1){
					?>
					<a class="dropdown-item" href="../website_vanchuyen/SignIn.php"><i class="dw dw-user1"></i> Login</a>

					<a href="../website_vanchuyen/controler/logout.php" class="dropdown-item"><i class="dw dw-logout"></i> Log Out</a>
					<?php
					// }else{
					?>
					<a class="dropdown-item" href="../SignUp.php"><i class="dw dw-user1"></i> Login</a>

					<?php
					// }
					?>

				</div>
			</div>
		</div>
		<!-- <div class="github-link">
					<a href="https://github.com/dropways/deskapp" target="_blank"
						><img src="vendors/images/github.svg" alt=""
					/></a>
				</div> -->
	</div>
</div>