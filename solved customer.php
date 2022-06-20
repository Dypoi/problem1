<form action="customer.php" method="$_POST">
	<div class="row">
		<div class="col-md-12 col-md-offset-2"> 
			<p>
				<center>
					<h1>Detail </h1><hr>
				</center>
			</p>
			<br>
			<div class="px-5 margin-left-10" style = "margin-left:200px; margin-right:200px;">
				<table class="table table-stripped ml-5">
					<tr>
						<td class="">
							Name
							
						</td>
						<td>
							: <?php echo $_SESSION['customer_name']; ?>
							 
						</td>
					</tr>
					<tr>
						<td>
							Email
						</td>
						<td>
							: <?php echo $_SESSION['email']; ?>
						</td>
					</tr>
					<tr>					
						<td>
							Address
							
						</td>
						<td>
							: <?php echo $_SESSION['address']; ?>
						</td>
					</tr>
					<tr>		
						<td>
							Number Phone
						</td>
						<td>
							: <?php echo $_SESSION['phone']; ?>
						</td>
					</tr>
					
					
				</table>
				<div class="py-3">
				<p>
					<a class="btn btn-outline-success px-5 mx-5" href="product.php">Kembali</a>
				</p>
				<div class="">
				<p>
					<a class="btn btn-outline-danger px-5" href="logout.php">Log Out</a>
				</p>
				</div>
			</div>
		</div>
	</div>
</form>
