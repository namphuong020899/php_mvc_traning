<?php

class HomeController extends Controller
{
    private $userModel, $data = [];

    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function index()
    {
        $data = $this->userModel->getAll();

        $this->data['content'] = 'FrontEnd.Home.index';
        $this->data['sub_content']['users'] = $data;

        $this->view('Layouts.LayoutUser', $this->data);
    }

    public function detail($id)
    {
        echo "Id sp: " . $id;
    }
}