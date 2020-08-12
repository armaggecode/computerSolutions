<?php namespace App\Controllers;

use App\Models\ProductModel;
use ReflectionException;

class ProductController extends BaseController
{
    public function index(){
        $productModel = new ProductModel();

        $searchData =  $productModel->asObject()->findAll();
        $showData = array('products' => $searchData);
        return view('viewProduct', $showData);
    }

    public function addProduct(){
        $productModel = new ProductModel();

        $code = strtoupper($this->request->getPost('productCode'));
        $name = $this->request->getPost('nameProduct');
        $brand = $this->request->getPost('brand');
        $quantity = $this->request->getPost('quantity');
        $purchasePrice = $this->request->getPost('purchasePrice');
        $salePrice = $this->request->getPost('salePrice');
        $stock = $this->request->getPost('unitInStock');
        $category = $this->request->getPost('Category');
        $supplier = $this->request->getPost('Supplier');
        $description = $this->request->getPost('description');
        $image = 'https://samuelrqa.github.io/cv/img/'.$code.'.png';

        try {
            $productModel->save([
                'ProductCode' => $code,
                'ProductName' => $name,
                'Brand' => $brand,
                'Quantity' => $quantity,
                'PurchasePrice' => $purchasePrice,
                'SalePrice' => $salePrice,
                'UnitsInStock' => $stock,
                'Category' => $category,
                'Supplier' => $supplier,
                'Description' => $description,
                'ImageProduct' => $image
            ]);
            $msg = "<strong>DONE:</strong> Product added successfully";
        } catch (ReflectionException $e) {
            $msg = "<strong>ERROR:</strong> Product has not been added!";
        }

        return redirect()->to(base_url('public/products'))->with('message', $msg);
    }

    public function deleteProduct(){
        $productModel = new ProductModel();

        $id = $this->request->getPost('IdProductDel');

        $productModel->where('ProductID', $id)->delete();

        return redirect()->to(base_url('public/products'));
    }

    public function updateProduct(){
        $productModel = new ProductModel();

        $id = $this->request->getPost('idProductUpd');
        $code = strtoupper($this->request->getPost('productCodeUpd'));
        $name = $this->request->getPost('nameProductUpd');
        $brand = $this->request->getPost('brandUpd');
        $quantity = $this->request->getPost('quantityUpd');
        $purchasePrice = $this->request->getPost('purchasePriceUpd');
        $salePrice = $this->request->getPost('salePriceUpd');
        $stock = $this->request->getPost('unitInStockUpd');
        $category = $this->request->getPost('CategoryUpd');
        $supplier = $this->request->getPost('SupplierUpd');
        $description = $this->request->getPost('descriptionUpd');
        $image = 'https://samuelrqa.github.io/cv/img/'.$code.'.png';

        try {
            $productModel->update($id, [
                'ProductCode' => $code,
                'ProductName' => $name,
                'Brand' => $brand,
                'Quantity' => $quantity,
                'PurchasePrice' => $purchasePrice,
                'SalePrice' => $salePrice,
                'UnitsInStock' => $stock,
                'Category' => $category,
                'Supplier' => $supplier,
                'Description' => $description,
                'ImageProduct' => $image
            ]);
            $msg = "<strong>DONE:</strong> Product updated successfully";
        } catch (ReflectionException $e) {
            $msg = "<strong>ERROR:</strong> Product has not been updated!";
        }

        return redirect()->to(base_url('public/products'))->with( 'message', $msg);
    }
}