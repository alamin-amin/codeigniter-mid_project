<?php 
namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;
class UserCrud extends Controller
{
    // show users list
    public function index(){
        $userModel = new UserModel();
        $data['users'] = $userModel->orderBy('id', 'DESC')->findAll();
        return view('user_view', $data);
    }
    // add user form
    public function create(){
        return view('add_user');
    }
 
    // insert data
    public function store() {
        $userModel = new UserModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'email'  => $this->request->getPost('email'),
            'phone'  => $this->request->getPost('phone'),
            'age'  => $this->request->getPost('age'),
            'address'  => $this->request->getPost('address'),
        ];
        $userModel->insert($data);
        return $this->response->redirect(base_url('/public/users-list'));
    }
    // show single user
    public function singleUser($id = null){
        $userModel = new UserModel();
        $data['user_obj'] = $userModel->where('id', $id)->first();
        return view('edit_view', $data);
    }
    // update user data
    public function update(){
        $userModel = new UserModel();
        $id = $this->request->getPost('id');
        $data = [
            'name' => $this->request->getPost('name'),
            'email'  => $this->request->getPost('email'),
            'phone'  => $this->request->getPost('phone'),
            'age'  => $this->request->getPost('age'),
            'address'  => $this->request->getPost('address'),
        ];
        $userModel->update($id, $data);
        return $this->response->redirect(base_url('/public/users-list'));
    }
 
    // delete user
    public function delete($id = null){
        $userModel = new UserModel();
        $data['user'] = $userModel->where('id', $id)->delete($id);
        return $this->response->redirect(base_url('/public/users-list'));
    }    
}