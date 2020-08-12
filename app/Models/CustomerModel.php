<?php
namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table = 'customers';
    protected $primaryKey = 'CustomerID';
    protected $allowedFields = ['NumberCardID', 'Name', 'LastName', 'Gender', 'Address', 'NumberPhone', 'Email', 'City'];
}
