<?php namespace App\Controllers;

use App\Models\CustomerModel;
use ReflectionException;

class CustomerController extends BaseController
{
    public function index()
    {
        $customerModel = new CustomerModel();
        $searchData = $customerModel->asObject()->findAll();
        $showData = array('customers' => $searchData);

        return view('viewCustomer', $showData);
    }

    public function addCustomer(){
        $customerModel = new CustomerModel();

        $cardId = $this->request->getPost('cardIdCustomer');
        $name = $this->request->getPost('nameCustomer');
        $lastName = $this->request->getPost('lastNameCustomer');
        $gender = $this->request->getPost('genderCustomer');
        $address = $this->request->getPost('addressCustomer');
        $phone = $this->request->getPost('phoneCustomer');
        $email = $this->request->getPost('emailCustomer');
        $city = $this->request->getPost('cityCustomer');

        try {
            $customerModel->save([
                'NumberCardID' => $cardId,
                'Name' => $name,
                'LastName' => $lastName,
                'Gender' => $gender,
                'Address' => $address,
                'NumberPhone' => $phone,
                'Email' => $email,
                'City' => $city
            ]);
            $msg = "DONE: Customer added successfully";
        } catch (ReflectionException $e) {
            $msg = "ERROR: Customer has not been added!";
        }

        return redirect()->to(base_url('public/customers'))->with('message', $msg);
    }

    public function deleteCustomer(){
        $customerModel = new CustomerModel();

        $id = $this->request->getPost('IdCustomerDel');

        $customerModel->where('CustomerID', $id)->delete();

        return redirect()->to(base_url('public/customers'));
    }

    public function updateCustomer(){
        $customerModel = new CustomerModel();

        $id = $this->request->getPost('idCustomerUpd');
        $cardId = $this->request->getPost('cardIdCustomerUpd');
        $name = $this->request->getPost('nameCustomerUpd');
        $lastName = $this->request->getPost('lastNameCustomerUpd');
        $gender = $this->request->getPost('genderCustomerUpd');
        $address = $this->request->getPost('addressCustomerUpd');
        $phone = $this->request->getPost('phoneCustomerUpd');
        $email = $this->request->getPost('emailCustomerUpd');
        $city = $this->request->getPost('cityCustomerUpd');

        try {
            $customerModel->update($id, [
                'NumberCardID' => $cardId,
                'Name' => $name,
                'LastName' => $lastName,
                'Gender' => $gender,
                'Address' => $address,
                'NumberPhone' => $phone,
                'Email' => $email,
                'City' => $city
            ]);
            $msg = "<strong>DONE:</strong> Customer updated successfully";
        } catch (ReflectionException $e) {
            $msg = "<strong>ERROR:</strong> Customer has not been updated!";
        }

        return redirect()->to(base_url('public/customers'))->with( 'message', $msg);
    }
}