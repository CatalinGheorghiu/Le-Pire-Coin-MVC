<?php
class Pages extends Controller
{
    public function __construct()
    {
        // echo 'Pages loaded';
        $this->postModel = $this->model('Post');
    }

    // public function index()
    // {

    //     $posts = $this->postModel->getAllPosts();

    //     $data = [
    //         'title' => 'Welcome',
    //         'posts' => $posts
    //     ];


    //     $this->view('index', $data);
    // }
}
