<?php include 'header.php'; ?>

<div class="form-holder">
	<div class="form-content">
		<div class="form-items">
			<h3>CARAKA TNI AD</h3>
			<p>VIRTUAL CHAT APPLICATION TNI AD</p>
			<div class="page-links">
				<a href="index.php">Login</a><a href="daftar.php" class="active">Register</a>
			</div>

			<?php
			if (isset($_GET['alert'])) {
				if ($_GET['alert'] == "duplikat") {
			?>
					<div class="alert alert-danger text-center">
						<span class="font-weight-bold">NRP sudah pernah digunakan</span>.
						<br>
						<span class="font-weight-light">Silahkan gunakan NRP lain.</span>
					</div>
			<?php
				}
			}
			?>

			<form action="daftar_aksi.php" method="post">
				<input class="form-control" type="text" name="nrp" placeholder="NRP" required>
				<input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required>
				<input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
				<input class="form-control" type="password" name="password" placeholder="Password" required>
				<div class="form-button">
					<button id="submit" type="submit" class="ibtn">Daftar</button>
				</div>
			</form>
			<div class="other-links">
				<span>Copyright &copy; 2023 <a href="https://www.instagram.com/bri_pebri/" target="_blank">Vebri Pradana</a></span>
			</div>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>