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
        <link rel="stylesheet" href="<?php echo(base_url('public/styles.css')) ?>">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    </head>

    <header class="sticky-top">
        <nav class="navbar border-bottom">
            <div class="d-inline-flex">
                <a href="#" class="mr-auto text-decoration-none" id="menu-toggle">
                    <span class="text-light"><i class="fas fa-bars fa-2x"></i></span>
                </a>
                <a href="<?php echo(base_url('public/')) ?>" class="mr-auto">
                    <img src="<?php echo(base_url('public/img/logo_computer_solutions_white.png')) ?>" width="150px" alt="" loading="lazy">
                </a>
            </div>
        </nav>
    </header>

    <body>
        <div class="d-flex" id="wrapper">
            <div class="border-right float-left" id="sidebar-wrapper">
                <div class="sidebar-heading p-0 pb-3 pt-3">
                    <a href="<?php echo(base_url('public/')) ?>" class="list-group-item list-group-item-action bg-transparent border-0 p-0">
                        <img class="img-fluid" src="<?php echo(base_url('public/img/logo_computer_solutions.png')) ?>" alt="">
                    </a>
                </div>
                <div class="list-group list-group-flush">
                    <a href="<?php echo(base_url('public/')) ?>" class="list-group-item list-group-item-action">
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
                    <a href="#" class="list-group-item list-group-item-action" id="active">
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
                        <span class="">
							<i class="fas fa-caret-right fa-lg"></i>
						</span>
                    </a>
                </div>
            </div>
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <h1 class="mt-4 rounded-lg text-light p-3">Products</h1>
                    <div class="container mt-4 ml-4">
                        <button class="btn btn-default border-info mb-1" type="button" data-toggle="modal" data-target="#newProduct">
                            <i class="fas fa-plus mr-2"></i>New product
                        </button>
                        <?php if (session("message")) : ?>
                            <div class="alert alert-success alert-dismissible fade show mt-2" id="msg-alert" role="alert">
                                <?= session('message') ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif ?>
                        <!--Modal New Product-->
                        <div class="modal fade" id="newProduct" tabindex="-1" role="dialog" aria-labelledby="addProduct">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close ml-0" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title" id="addProduct">Add Product</h4>
                                    </div>
                                    <div class="modal-body pt-0">
                                        <form action="<?php echo(base_url('/public/products/add')) ?>" method="POST" id="saveProductData">
                                            <div class="form-group">
                                                <input type="number" class="form-control" id="idProduct" name="idProduct" placeholder="ID" hidden>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control text-uppercase" id="productCode" name="productCode" placeholder="Product Code" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="nameProduct" name="nameProduct" placeholder="Product Name" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="brand" name="brand" placeholder="Brand" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="number" class="form-control" id="purchasePrice" name="purchasePrice" placeholder="Purchase Price" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="number" class="form-control" id="salePrice" name="salePrice" placeholder="Sale Price" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="number" class="form-control" id="unitInStock" name="unitInStock" placeholder="Unit in stock" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="Category" name="Category" placeholder="Category" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="Supplier" name="Supplier" placeholder="Supplier" required>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="description" name="description" rows="2"></textarea>
                                                <small>Product description</small>
                                            </div>
                                            <div class="modal-footer pt-0">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary" id="sendProduct" name="sendProduct">Add Product</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / Modal New Product-->
                        <table class="table">
                            <thead class="text-center">
                                <th class="d-none">ID</th>
                                <th>ProductCode</th>
                                <th>ProductName</th>
                                <th>Brand</th>
                                <th>Quantity</th>
                                <th>PurchasePrice</th>
                                <th>SalePrice</th>
                                <th>UnitInStock</th>
                                <th>Category</th>
                                <th>Supplier</th>
                                <th class="text-center">Actions</th>
                                <th class="d-none">Description</th>
                            </thead>
                            <tbody>
                                <?php foreach ($products as $product => $data): ?>
                                <tr>
                                    <td id="productID<?= ($data->ProductID) ?>" class="d-none"><?php $data->ProductID ?></td>
                                    <td id="productCode<?= ($data->ProductID) ?>" class="text-center"><?php echo $data->ProductCode ?></td>
                                    <td id="name<?= ($data->ProductID) ?>" class="text-nowrap"><?php echo $data->ProductName ?></td>
                                    <td id="brand<?= ($data->ProductID) ?>"><?php echo $data->Brand ?></td>
                                    <td id="quantity<?= ($data->ProductID) ?>" class="text-center"><?php echo $data->Quantity ?></td>
                                    <td id="purchasePrice<?= ($data->ProductID) ?>" class="text-right"><?php echo $data->PurchasePrice ?></td>
                                    <td id="salePrice<?= ($data->ProductID) ?>" class="text-right"><?php echo $data->SalePrice ?></td>
                                    <td id="stock<?= ($data->ProductID) ?>" class="text-center"><?php echo $data->UnitsInStock ?></td>
                                    <td id="category<?= ($data->ProductID) ?>"><?php echo $data->Category ?></td>
                                    <td id="supplier<?= ($data->ProductID) ?>" class="text-nowrap"><?php echo $data->Supplier ?></td>
                                    <td class="text-center">
                                        <a href="#" data-id="<?= ($data->ProductID) ?>" data-toggle="modal" data-target="#updateProd">
                                            <i class="fas fa-edit text-dark"></i>
                                        </a>
                                        <a href="#" data-toggle="modal" data-id="<?= ($data->ProductID) ?>" data-target="#deleteProd">
                                            <i class="fas fa-trash text-dark"></i>
                                        </a>
                                    </td>
                                    <td id="description<?= ($data->ProductID) ?>" class="d-none"><?php echo $data->Description ?></td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                        <!--Modal update Product-->
                        <div class="modal fade" id="updateProd" tabindex="-1" role="dialog"
                             aria-labelledby="updateProduct">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close ml-0" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="updateProduct">Update Product</h4>
                                    </div>
                                    <div class="modal-body pt-0">
                                        <form action="<?php echo (base_url('/public/products/modify')) ?>" method="POST" id="updateProductData">
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" id="idProductUpd" name="idProductUpd">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control text-uppercase" id="productCodeUpd" name="productCodeUpd" placeholder="Product Code" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="nameProductUpd" name="nameProductUpd" placeholder="Product Name" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="brandUpd" name="brandUpd" placeholder="Brand" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="number" class="form-control" id="quantityUpd" name="quantityUpd" placeholder="Quantity" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="number" class="form-control" id="purchasePriceUpd" name="purchasePriceUpd" placeholder="Purchase Price" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="number" class="form-control" id="salePriceUpd" name="salePriceUpd" placeholder="Sale Price" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="number" class="form-control" id="unitInStockUpd" name="unitInStockUpd" placeholder="Units in stock" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="CategoryUpd" name="CategoryUpd" placeholder="Category" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="SupplierUpd" name="SupplierUpd" placeholder="Supplier" required>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" name="descriptionUpd" id="descriptionUpd" rows="2"></textarea>
                                                <small>Product description</small>
                                            </div>
                                            <div class="modal-footer pt-0">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Update Product</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- / Modal update Product-->
                        <!--Modal delete Product-->
                        <div class="modal fade" id="deleteProd" tabindex="-1" role="dialog"
                             aria-labelledby="deleteProduct">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form action="<?= (base_url('/public/products/delete')) ?>" method="POST" id="deleteProductData">
                                        <div class="modal-header">
                                            <input type="hidden" id="IdProductDel" name="IdProductDel">
                                            <h4 class="modal-title mt-3" id="deleteProduct">Delete confirmation</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p class="lead text-muted text-center m-2">
                                                Are you sure you want to permanently delete this product?
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No
                                            </button>
                                            <button type="submit" class="btn btn-primary">Yes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- / Modal delete Product-->
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