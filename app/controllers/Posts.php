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
        // var_dump($posts);

        $this->view('posts/dashboard', $data);
    }

    public function add()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize POST array
            $date = trim($_POST['registration_date']);
            $date = date("d-m-Y", strtotime($date));

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'user_id' => $_SESSION['user_id'],
                'title' => trim($_POST['title']),
                'price' => trim($_POST['price']),
                'mileage' => trim($_POST['mileage']),
                'registration_date' => $date,
                'cubic_capacity' => trim($_POST['cubic-capacity']),
                'power' => trim($_POST['power']),
                'fuel' => trim($_POST['fuel']),
                'location' => trim($_POST['location']),
                'phone_number' => trim($_POST['phone']),
                'full_description' => trim($_POST['full-description']),
                'title_err' => '',
                'price_err' => '',
                'mileage_err' => '',
                'first_registration_err' => '',
                'cubic_capacity_err' => '',
                'power_err' => '',
                'fuel_err' => '',
                'location_err' => '',
                'phone_number_err' => '',
                'full_description_err' => '',
            ];

            //Validation
            if (empty($data['title'])) {
                $data['title_err'] = 'Please enter a title';
            }

            if (empty($data['price'])) {
                $data['price_err'] = 'Please enter a price';
            }

            if (empty($data['mileage'])) {
                $data['mileage_err'] = 'Please enter the mileage';
            }

            if (empty($data['registration_date'])) {
                $data['first_registration_err'] = 'Please enter a first date';
            }

            if (empty($data['cubic_capacity'])) {
                $data['cubic_capacity_err'] = 'Please enter the cubic capacity';
            }

            if (empty($data['power'])) {
                $data['power_err'] = "Please enter the car's power";
            }

            if (empty($data['fuel'])) {
                $data['fuel_err'] = 'Please enter the fuel type';
            }

            if (empty($data['location'])) {
                $data['location_err'] = 'Please enter a location';
            }

            if (empty($data['phone_number'])) {
                $data['phone_number_err'] = 'Please enter a phone number';
            }


            //Make sure no errors
            if (empty($data['title_err']) && empty($data['price_err']) && empty($data['mileage_err']) && empty($data['first_registration_err']) && empty($data['cubic_capacity_err']) && empty($data['power_err']) && empty($data['fuel_err']) && empty($data['location_err']) && empty($data['phone_number_err'])) {
                //Add the announce
                if ($this->postModel->addPost($data)) {


                    //flash msg
                    flash('add_success', 'Announce successfully added!');
                    //redirect
                    redirect('posts/dashboard');
                } else {
                    die('Something went wrong');
                }
            } else {
                //Load view with errors
                $this->view('posts/add', $data);
            }
        } else {
            //Init data
            $data = [
                'title' => '',
                'price' => '',
                'mileage' => '',
                'registration_date' => '',
                'cubic_capacity' => '',
                'power' => '',
                'fuel' => '',
                'location' => '',
                'phone_number' => '',
                'full_description' => '',
                'title_err' => '',
                'price_err' => '',
                'mileage_err' => '',
                'first_registration_err' => '',
                'cubic_capacity_err' => '',
                'power_err' => '',
                'fuel_err' => '',
                'location_err' => '',
                'phone_number_err' => '',
                'full_description_err' => '',
            ];
            //Load view
            // die('success');
            $this->view('posts/add', $data);
        }
    }

    public function details($id)
    {
        $post = $this->postModel->showDetails($id);
        $urls = explode(',', $post->img_url);
        // var_dump($urls);

        $data = [
            'post' => $post,
            'images' => $urls
        ];

        $this->view('posts/details', $data);
    }

    public function edit($id)
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize POST array
            $date = trim($_POST['registration_date']);
            $date = date("d-m-Y", strtotime($date));

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'id' => $id,
                'title' => trim($_POST['title']),
                'price' => trim($_POST['price']),
                'mileage' => trim($_POST['mileage']),
                'registration_date' => $date,
                'cubic_capacity' => trim($_POST['cubic-capacity']),
                'power' => trim($_POST['power']),
                'fuel' => trim($_POST['fuel']),
                'location' => trim($_POST['location']),
                'phone_number' => trim($_POST['phone']),
                'full_description' => trim($_POST['full-description']),
                'title_err' => '',
                'price_err' => '',
                'mileage_err' => '',
                'first_registration_err' => '',
                'cubic_capacity_err' => '',
                'power_err' => '',
                'fuel_err' => '',
                'location_err' => '',
                'phone_number_err' => '',
                'full_description_err' => '',
            ];

            //Validation
            if (empty($data['title'])) {
                $data['title_err'] = 'Please enter a title';
            }

            if (empty($data['price'])) {
                $data['price_err'] = 'Please enter a price';
            }

            if (empty($data['mileage'])) {
                $data['mileage_err'] = 'Please enter the mileage';
            }

            if (empty($data['registration_date'])) {
                $data['first_registration_err'] = 'Please enter a first date';
            }

            if (empty($data['cubic_capacity'])) {
                $data['cubic_capacity_err'] = 'Please enter the cubic capacity';
            }

            if (empty($data['power'])) {
                $data['power_err'] = "Please enter the car's power";
            }

            if (empty($data['fuel'])) {
                $data['fuel_err'] = 'Please enter the fuel type';
            }

            if (empty($data['location'])) {
                $data['location_err'] = 'Please enter a location';
            }

            if (empty($data['phone_number'])) {
                $data['phone_number_err'] = 'Please enter a phone number';
            }


            //Make sure no errors
            if (empty($data['title_err']) && empty($data['price_err']) && empty($data['mileage_err']) && empty($data['first_registration_err']) && empty($data['cubic_capacity_err']) && empty($data['power_err']) && empty($data['fuel_err']) && empty($data['location_err']) && empty($data['phone_number_err'])) {
                //Add the announce
                if ($this->postModel->updatePost($data)) {
                    //flash msg
                    flash('post_success', 'Announce successfully edited!');
                    //redirect
                    redirect('posts/dashboard');
                } else {
                    die('Something went wrong');
                }
            } else {
                //Load view with errors
                $this->view('posts/edit', $data);
            }
        } else {
            //Get the existing post
            $post = $this->postModel->getPostById($id);
            //check for owner
            if ($post->user_id !== $_SESSION['user_id']) {
                redirect('posts');
            }
            //Init data
            $data = [
                'id' => $id,
                'title' => $post->title,
                'price' => $post->price,
                'mileage' => $post->mileage,
                'registration_date' => $post->registration_date,
                'cubic_capacity' => $post->cubic_capacity,
                'power' => $post->power,
                'fuel' => $post->fuel,
                'location' => $post->location,
                'phone_number' => $post->phone_number,
                'full_description' => $post->full_description,
            ];
            //Load view
            $this->view('posts/edit', $data);
        }
    }

    public function delete($id)
    {
        //Get the existing post
        $post = $this->postModel->getPostById($id);
        //check for owner
        if ($post->user_id !== $_SESSION['user_id']) {
            redirect('posts');
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($this->postModel->deletePost($id)) {
                flash('post_message', 'Announce deleted!');
                redirect('posts/dashboard');
            } else {
                die('Something went wrong!');
            }
        } else {
            redirect('posts');
        }
    }
}
