<?php include 'header.php'; ?>

<div class="form-holder">
	<div class="form-content">
		<div class="form-items">
			<h3>CARAKA TNI AD</h3>
			<p>VIRTUAL CHAT APPLICATION TNI AD</p>
			<div class="page-links">
				<a href="index.php" class="active">Login</a><a href="daftar.php">Register</a>
			</div>

			<?php
			if (isset($_GET['alert'])) {
				if ($_GET['alert'] == "registered") {
			?>
					<div class="alert alert-success text-center">
						<span class="font-weight-bold">Anda berhasil mendaftar.</span>
						<br>
						<small class="font-weight-light">Selanjutnya silahkan login.</small>
					</div>
				<?php
				} elseif ($_GET['alert'] == "logout") {
				?>
					<div class="alert alert-success text-center">
						<span class="font-weight-bold">Anda telah logout.</span>
					</div>
				<?php
				} elseif ($_GET['alert'] == "login-dulu") {
				?>
					<div class="alert alert-warning text-center font-weight-bold">Silahkan login untuk melanjutkan.</div>
				<?php
				} elseif ($_GET['alert'] == "gagal") {
				?>
					<div class="alert alert-danger text-center">
						<span class="font-weight-bold">Login gagal !</span>
						<br>
						<small class="font-weight-light">NRP & password tidak sesuai.</small>
					</div>
			<?php
				}
			}
			?>

			<form action="login_aksi.php" method="post">
				<input class="form-control" type="text" name="nrp" placeholder="NRP Prajurit" required>
				<input class="form-control" type="password" name="password" placeholder="Password" required>
				<div class="form-button">
					<button id="submit" type="submit" class="ibtn">Login</button>
					<!-- <a href="vchat_fgpswd.html">Forget password?</a> -->
				</div>
			</form>
			<div class="other-links">
				<span>Copyright &copy; 2023 <a href="https://www.instagram.com/bri_pebri/" target="_blank">Vebri Pradana</a></span>
			</div>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>