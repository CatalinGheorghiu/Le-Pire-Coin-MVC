<?php
class Posts extends Controller
{
    public function __construct()
    {
        //Load the model
        $this->postModel = $this->model('Post');
    }


    public function index()
    {
        $posts = $this->postModel->getAllPosts();
        $data = [
            'title' => 'Welcome',
            'posts' => $posts,
        ];

        $this->view('index', $data);
    }

    public function dashboard()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }
        $posts = $this->postModel->getUserPosts();

        $data = [
            'test' => 'Dashboard is working',
            'posts' => $posts,
        ];
        $this->view('posts/dashboard', $data);
    }

    public function add()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize POST array
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                //'title' => trim($_POST['title']) .... + errors
            ];

            //Validation

            //Make sure no errors

            $this->view('posts/add', $data);
        } else {
            $data = [
                //'title' => '' ...
            ];
            $this->view('posts/add', $data);
        }
    }
}
