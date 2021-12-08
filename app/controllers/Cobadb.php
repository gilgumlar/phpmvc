<?php
class Cobadb extends Controller
{
    public function index()
    {
        $data['buku'] = $this->model('Dbtest_model')->getAllDataBuku();
        $this->view('templates/header');
        $this->view('cobadatabase/index', $data);
        $this->view('templates/footer');
    }
}
