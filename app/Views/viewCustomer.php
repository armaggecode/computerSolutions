<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Computer Solutions</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo (base_url('public/styles.css')) ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
</head>

<header class="sticky-top">
    <nav class="navbar border-bottom">
        <div class="d-inline-flex">
            <a href="#" class="mr-auto text-decoration-none" id="menu-toggle">
                <span class="text-light"><i class="fas fa-bars fa-2x"></i></span>
            </a>
            <a href="<?php echo (base_url('public/')) ?>" class="mr-auto">
                <img src="<?php echo (base_url('public/img/logo_computer_solutions_white.png')) ?>" width="150px" alt="logo blanco" loading="lazy">
            </a>
        </div>
    </nav>
</header>

<body>
    <div class="d-flex" id="wrapper">
        <div class="border-right float-left" id="sidebar-wrapper">
            <div class="sidebar-heading p-0 pb-3 pt-3">
                <a href="<?php echo (base_url('public/')) ?>" class="list-group-item list-group-item-action bg-transparent border-0 p-0">
                    <img class="img-fluid" src="<?php echo (base_url('public/img/logo_computer_solutions.png')) ?>" alt="logo">
                </a>
            </div>
            <div class="list-group list-group-flush">
                <a href="<?php
                            echo (base_url('public/')) ?>" class="list-group-item list-group-item-action">
                    <i class="fas fa-store-alt fa-fw fa-lg"></i>Home
                    <span>
                        <i class="fas fa-caret-right fa-lg"></i>
                    </span>
                </a>
                <a href="#" class="list-group-item list-group-item-action" id="active">
                    <i class="far fa-user fa-fw fa-lg"></i>Customers
                    <span>
                        <i class="fas fa-caret-right fa-lg"></i>
                    </span>
                </a>
                <a href="<?php
                            echo (base_url('public/products')) ?>" class="list-group-item list-group-item-action">
                    <i class="fas fa-cart-arrow-down fa-fw fa-lg"></i>Products
                    <span>
                        <i class="fas fa-caret-right fa-lg"></i>
                    </span>
                </a>
                <a href="<?php echo (base_url('public/contact')) ?>" class="list-group-item list-group-item-action">
                    <i class="far fa-envelope fa-fw fa-lg"></i>Contact
                    <span>
                        <i class="fas fa-caret-right fa-lg"></i>
                    </span>
                </a>
                <a href="<?php echo (base_url('public/profiles')) ?>" class="list-group-item list-group-item-action">
                    <i class="far fa-id-card fa-fw fa-lg"></i>Profiles
                    <span class="">
                        <i class="fas fa-caret-right fa-lg"></i>
                    </span>
                </a>
            </div>
        </div>
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h1 class="mt-4 rounded-lg text-light p-3" id="title-customers">Customers</h1>
                <div class=" container mt-4">
                    <button class="btn btn-default border-info mb-1" type="button" data-toggle="modal" data-target="#newCustomer">
                        <i class="fas fa-plus mr-2"></i>New customer
                    </button>
                    <?php if (session("message")) : ?>
                        <div class="alert alert-info alert-dismissible fade show mt-2" id="msg-alert" role="alert">
                            <?= session('message') ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif ?>
                    <!--Modal New Customer-->
                    <div class="modal fade" id="newCustomer" tabindex="-1" role="dialog" aria-labelledby="addCustomer">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close ml-0" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title" id="addCustomer">Add Customer</h4>
                                </div>
                                <div class="modal-body">
                                    <form action="<?php echo (base_url('/public/customers/add')) ?>" method="POST" id="saveCustomerData">
                                        <div class="form-group">
                                            <input type="number" class="form-control" id="idCustomer" name="idCustomer" hidden>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="cardIdCustomer" name="cardIdCustomer" placeholder="CardID Number" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="nameCustomer" name="nameCustomer" placeholder="Name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="lastNameCustomer" name="lastNameCustomer" placeholder="Lastname" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="genderCustomer" name="genderCustomer" placeholder="Gender" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="addressCustomer" name="addressCustomer" placeholder="Address" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="phoneCustomer" name="phoneCustomer" placeholder="Number Phone" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="emailCustomer" name="emailCustomer" placeholder="Email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="cityCustomer" name="cityCustomer" placeholder="City" required>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" id="sendCustomer" name="sendCustomer">Add Customer</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Modal New Customer-->
                    <table class="table">
                        <thead class="text-center">
                            <th class="d-none">ID</th>
                            <th>CardID</th>
                            <th>Name</th>
                            <th>Lastname</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>City</th>
                            <th class="text-center">Actions</th>
                        </thead>
                        <tbody>
                            <?php foreach ($customers as $customer=>$data): ?>
                            <tr>
                                <td id="customerID<?= ($data->CustomerID) ?>" class="d-none"><?= ($data->CustomerID) ?></td>
                                <td id="cardID<?= ($data->CustomerID) ?>"><?= ($data->NumberCardID) ?></td>
                                <td id="name<?= ($data->CustomerID) ?>"><?= ($data->Name) ?></td>
                                <td id="lastName<?= ($data->CustomerID) ?>"><?= ($data->LastName) ?></td>
                                <td id="gender<?= ($data->CustomerID) ?>"><?= ($data->Gender) ?></td>
                                <td id="address<?= ($data->CustomerID) ?>"><?= ($data->Address) ?></td>
                                <td id="phone<?= ($data->CustomerID) ?>"><?= ($data->NumberPhone) ?></td>
                                <td id="email<?= ($data->CustomerID) ?>"><?= ($data->Email) ?></td>
                                <td id="city<?= ($data->CustomerID) ?>"><?= ($data->City) ?></td>
                                <td class="text-center">
                                    <a href="#" data-id="<?= ($data->CustomerID) ?>" data-toggle="modal" data-target="#updateCust">
                                        <i class="fas fa-edit text-dark"></i>
                                    </a>
                                    <a href="#" data-id="<?= ($data->CustomerID) ?>" data-toggle="modal" data-target="#deleteCust">
                                        <i class="fas fa-trash text-dark"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                    <!--Modal update Customer-->
                    <div class="modal fade" id="updateCust" tabindex="-1" role="dialog" aria-labelledby="updateCustomer">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close ml-0" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title" id="updateCustomer">Update Customer</h4>
                                </div>
                                <form action="<?php echo (base_url('/public/customers/modify')) ?>" method="POST" id="updateCustomerData">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" id="idCustomerUpd" name="idCustomerUpd">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="cardIdCustomerUpd" name="cardIdCustomerUpd" placeholder="CardID Number" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="nameCustomerUpd" name="nameCustomerUpd" placeholder="Name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="lastNameCustomerUpd" name="lastNameCustomerUpd" placeholder="Lastname" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="genderCustomerUpd" name="genderCustomerUpd" placeholder="Gender" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="addressCustomerUpd" name="addressCustomerUpd" placeholder="Address" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="phoneCustomerUpd" name="phoneCustomerUpd" placeholder="Number Phone" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="emailCustomerUpd" name="emailCustomerUpd" placeholder="Email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="cityCustomerUpd" name="cityCustomerUpd" placeholder="City" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" id="btn_updateCustomer">Update Customer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- / Modal update Customer-->

                    <!--Modal delete Customer-->
                    <div class="modal fade" id="deleteCust" tabindex="-1" role="dialog" aria-labelledby="deleteCustomer">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form action="<?= (base_url('/public/customers/delete')) ?>" method="POST" id="deleteCustomerData">
                                    <div class="modal-header">
                                        <input type="hidden" id="IdCustomerDel" name="IdCustomerDel">
                                        <h4 class="modal-title mt-3" id="deleteCustomer">Delete confirmation</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p class="lead text-muted text-center m-2">
                                            Are you sure you want to permanently delete this customer?
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="<?php echo (base_url('public/main.js')) ?>"></script>
</body>

</html>