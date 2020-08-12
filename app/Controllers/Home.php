<?php namespace App\Controllers;

use App\Models\ProductModel;

class Home extends BaseController
{
	public function index()
	{
        $productModel = new ProductModel();

        $searchData =  $productModel->asObject()->findAll();
        $showData = array('products' => $searchData);
		return view('welcome_message', $showData);
	}

	//--------------------------------------------------------------------

}
