<?php

class AdminController extends Controller
{
    public function index()
    {
        if (isset($_SESSION['admin'])) {
            header('Location: ' . BASE_URL . '/admin/dashboard');
            exit;
        }

        $this->view('admin/login', [], 'admin');
    }

    public function authenticate()
    {
        $model = $this->model('AdminModel');

        $admin = $model->login($_POST['username'], $_POST['password']);

        if ($admin) {
            $_SESSION['admin'] = $admin['username'];
            header('Location: ' . BASE_URL . '/admin/dashboard');
        } else {
            $_SESSION['error'] = 'Username atau password salah';
            header('Location: ' . BASE_URL . '/admin');
        }
        exit;
    }

    public function dashboard()
    {
        if (!isset($_SESSION['admin'])) {
            header('Location: ' . BASE_URL . '/admin');
            exit;
        }

        $this->view('admin/dashboard', [], 'admin');
    }

    public function logout()
    {
        session_destroy();
        header('Location: ' . BASE_URL . '/admin');
    }
}
