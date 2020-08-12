<?php

namespace App\Models;

class ProductModel extends \CodeIgniter\Model
{
    protected $table = 'products';
    protected $primaryKey = 'ProductID';
    protected $allowedFields = ['ProductCode', 'ProductName', 'Brand', 'Quantity', 'PurchasePrice', 'SalePrice', 'UnitsInStock', 'Category', 'Supplier', 'Description', 'ImageProduct'];
}