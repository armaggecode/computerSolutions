<!DOCTYPE html>
<html lang="es">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Computer Solutions</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
		      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
		      crossorigin="anonymous">
		<link rel="stylesheet" href="<?php echo(base_url('public/styles.css'))?>">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
		      integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc"
		      crossorigin="anonymous">
	</head>

	<header class="sticky-top">
		<nav class="navbar border-bottom">
			<div class="d-inline-flex">
				<a href="#" class="mr-auto text-decoration-none" id="menu-toggle">
					<span class="text-light"><i class="fas fa-bars fa-2x"></i></span>
				</a>
				<a href="#" class="mr-auto">
					<img src="<?php echo(base_url('public/img/logo_computer_solutions_white.png'))?>" width="150px" alt="" loading="lazy">
				</a>
			</div>
		</nav>
	</header>

	<body>
		<div class="d-flex" id="wrapper">
			<div class="border-right" id="sidebar-wrapper">
				<div class="sidebar-heading p-0 pb-3 pt-3">
					<a href="#" class="list-group-item list-group-item-action bg-transparent border-0 p-0">
						<img class="img-fluid" src="<?php echo(base_url('public/img/logo_computer_solutions.png'))?>" alt="logo">
					</a>
				</div>
				<div class="list-group list-group-flush">
					<a href="#" class="list-group-item list-group-item-action" id="active">
						<i class="fas fa-store-alt fa-fw fa-lg"></i>Home
						<span>
							<i class="fas fa-caret-right fa-lg"></i>
						</span>
					</a>
					<a href="<?php echo(base_url('public/customers')) ?>" class="list-group-item list-group-item-action">
						<i class="far fa-user fa-fw fa-lg"></i>Customers
						<span>
							<i class="fas fa-caret-right fa-lg"></i>
						</span>
					</a>
					<a href="<?php echo(base_url('public/products')) ?>" class="list-group-item list-group-item-action">
						<i class="fas fa-cart-arrow-down fa-fw fa-lg"></i>Products
						<span>
							<i class="fas fa-caret-right fa-lg"></i>
						</span>
					</a>
					<a href="<?php echo(base_url('public/contact')) ?>" class="list-group-item list-group-item-action">
						<i class="far fa-envelope fa-fw fa-lg"></i>Contact
						<span>
							<i class="fas fa-caret-right fa-lg"></i>
						</span>
					</a>
					<a href="<?php echo(base_url('public/profiles')) ?>" class="list-group-item list-group-item-action">
						<i class="far fa-id-card fa-fw fa-lg"></i>Profiles
						<span>
							<i class="fas fa-caret-right fa-lg"></i>
						</span>
					</a>
				</div>
			</div>
			<div id="page-content-wrapper">

				<div class="container-fluid">
					<h1 class="mt-4 rounded-lg text-light p-3">Product catalog</h1>

					<div class="container">
						<div class="row mt-5">
							<div class="row row-cols-1 row-cols-sm-3 row-cols-md-4 text-justify">
                                <?php foreach ($products as $product => $data): ?>
								<div class="col mb-5">
									<div class="card h-100">
										<img src="<?php echo($data->ImageProduct) ?>" class="card-img-top" alt="product" loading="lazy">
                                        <div class="card-body py-1">
                                            <h5 class="card-title"><?php echo($data->ProductName) ?></h5>
                                            <p class="card-text"><?php echo($data->Description) ?></p>
                                        </div>
                                        <div class="card-footer">
                                            <span class="font-weight-bold">Price: </span>
                                            <h6 class="d-inline text-success"><?php echo('$ '.$data->SalePrice) ?></h6>
                                        </div>
									</div>
								</div>
                                <?php endforeach ?>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
		        crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
		        crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
		        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
		        crossorigin="anonymous"></script>

        <script src="<?php echo (base_url('public/main.js')) ?>"></script>
	</body>

</html>