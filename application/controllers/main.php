<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct() {
        parent::__construct();
        session_start();
    }
    
    //For SEO friendliness
     function _remap($method, $params = array())
    {
            $method = str_replace('-','_',$method);
            method_exists($this, $method) ? call_user_func_array(array($this, $method), $params) : show_404();
    }
    
    public function admin() {
        $_SESSION['current_view'] = 'Administration Login';
        !empty($_SESSION['admin_id']) ? redirect('main/administration-dashboard') : $this->load->view('administration-login');
    }
    
    public function logout() {
        //session_destroy();
        $_SESSION['userID'] = '';
        //$this->load->library('session');
        $this->session->set_flashdata('flashSuccess', 'You have logged out successfully.');
        redirect('main/home');
    }
    
    public function adminLogout() {
        $_SESSION['admin_id'] = '';
        redirect('main/admin');
    }
    
    public function my_account() {
        //we need if else statement here if logged in or logged out
        $_SESSION['current_view'] = 'Customer Login';
        $this->load->view('header');
        $this->login();
        $this->load->view('global-search');
        $this->load->view('global-navigation');
        !empty($_SESSION['userID']) ? $this->load->view('my-account') : $this->load->view('customer-login');
    }

    public function index() {
        $this->home();
    }

    //function for loading public board view
    public function home() {
        $_SESSION['current_view'] = 'Home Page';
        $this->load->view('header');
        $this->login();
        $this->load->view('global-search');
        $this->load->view('global-navigation');
        $this->load->view('catalog-navigation');
        $this->load->view('newsletter');
        $this->load->view('social-links');
        $this->load->view('slideshow');
        $this->load->view('e-world-information');
        $this->load->view('footer');
    }

    //function for loading about us view
    public function about_us() {
        $_SESSION['current_view'] = 'About Us';
        $this->load->view('header');
        $this->login();
        $this->load->view('global-search');
        $this->load->view('global-navigation');
        $this->load->view('catalog-navigation');
        $this->load->view('newsletter');
        $this->load->view('social-links');
        $this->load->view('about-us');
        $this->load->view('footer');
    }
    
    //function for loading how can we help view
    public function how_can_we_help() {
        $_SESSION['current_view'] = 'How Can We Help';
        $this->load->view('header');
        $this->login();
        $this->load->view('global-search');
        $this->load->view('global-navigation');
        $this->load->view('catalog-navigation');
        $this->load->view('newsletter');
        $this->load->view('social-links');
        $this->load->view('how-can-we-help');
        $this->load->view('footer');
    }
    
    //function for loading our location view
    public function our_location() {
        $_SESSION['current_view'] = 'Our Location';
        $this->load->view('header');
        $this->login();
        $this->load->view('global-search');
        $this->load->view('global-navigation');
        $this->load->view('catalog-navigation');
        $this->load->view('newsletter');
        $this->load->view('social-links');
        $this->load->view('our-location');
        $this->load->view('footer');
    }

    //function for loading contact us view
    public function contact_us() {
        $_SESSION['current_view'] = 'Contact Us';
        $this->load->view('header');
        $this->login();
        $this->load->view('global-search');
        $this->load->view('global-navigation');
        $this->load->view('catalog-navigation');
        $this->load->view('newsletter');
        $this->load->view('social-links');
        $this->load->view('contact-us');
        $this->load->view('footer');
    }
    
        //function for loading privacy policy view
    public function privacy_policy() {
        $_SESSION['current_view'] = 'Privacy Policy';
        $this->load->view('header');
        $this->login();
        $this->load->view('global-search');
        $this->load->view('global-navigation');
        $this->load->view('catalog-navigation');
        $this->load->view('newsletter');
        $this->load->view('social-links');
        $this->load->view('privacy-policy');
        $this->load->view('footer');
    }
    
    //function for loading contact us view
    public function create_an_account() {
        $_SESSION['current_view'] = 'Create An Account';
        $this->load->view('header');
        $this->login();
        $this->load->view('global-search');
        $this->load->view('global-navigation');
        $this->load->view('create-an-account');
    }
    
    public function product_path($base_category = null, $category = null) {
        if($category == null)
            $category = "Desktops";
        else
            $category = str_replace('-', ' ', ucfirst($category));
        $_SESSION['current_view'] = $category;
        $_SESSION['base_category'] = $base_category;
        $this->load->model('getdb');
        $data['product'] = $this->getdb->product($category);
        $this->load->view('header');
        $this->login();
        $this->load->view('global-search');
        $this->load->view('global-navigation');
        $this->load->view('catalog-navigation');
        $this->load->view('newsletter');
        $this->load->view('social-links');
        $this->load->view('products-page', $data);
        $this->load->view('footer');
    }
    public function product_focus($productid = null) {
        $this->load->model('getdb');
        $data['product'] = $this->getdb->productbyid($productid);
        $this->load->view('header');
        $this->login();
        $this->load->view('global-search');
        $this->load->view('global-navigation');
        $this->load->view('catalog-navigation');
        $this->load->view('newsletter');
        $this->load->view('social-links');
        $this->load->view('product-focus', $data);
        $this->load->view('footer');
        
    }
    public function getcategory($productid = null) {
        $this->load->model('getdb');
        $category = $this->getdb->getcategory($productid);
        return $category;
        
        
    }

//function for loading login form or logout button
    public function login() {
        if (!empty($_SESSION['userID'])) {
            $this->load->model('getdb');
            $data['userInfo'] = $this->getdb->getUserData($_SESSION['userID']);
            $this->load->view("logged-in", $data);
        } else {
            $this->load->view("logged-out");
        }
    }

    //function for validating login form
    public function login_validation() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('login-email', 'email', 'required|xss_clean|trim|callback_validateCredentials');
        $this->form_validation->set_rules('login-password', 'password', 'required|min_length[6]|max_length[15]|sha1|xss_clean');

        if ($this->form_validation->run()) {
            $this->load->model('getdb');
            $_SESSION['email'] = $this->input->post('login-email');
            $_SESSION['userID'] = $this->getdb->getUserID($_SESSION['email']);
            $_SESSION['userInfo'] = $this->getdb->getUserData($_SESSION['userID']);

            //current page
            ($_SESSION['current_view'] == 'create-an-account') ? $this->home() : redirect($_SERVER['HTTP_REFERER']);
        } else {
            $this->load->library('session');
            $this->session->set_flashdata('flashError', 'Please enter correct email or password.');
            redirect('main/create-an-account');
            //$this->createAccount();
        }
    }

    //function for calling function in model to verify login
    public function validateCredentials() {
        $this->load->model('getdb');
        if ($this->getdb->checkLogin()) {
            return true;
        } else {
            /*             * *********NEED TO ECHO VALIDATION ERRORS********** */
            $this->form_validation->set_message('validateCredentials', 'Incorrect username/password');
            return false;
        }
    }

//function for validating login form
    public function admin_login_validation() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('admin-name', 'admin-name', 'required|xss_clean|trim|callback_validateAdminCredentials');
        $this->form_validation->set_rules('admin-password', 'admin-password', 'required|min_length[6]|max_length[15]|sha1|xss_clean');

        if ($this->form_validation->run()) {
            $this->load->model('getdb');
            $_SESSION['admin_name'] = $this->input->post('admin-name');
            $_SESSION['admin_id'] = $this->getdb->getAdminID($_SESSION['admin_name']);

            //current page
            ($_SESSION['current_view'] == 'Administration Login') ? redirect('main/administration-dashboard') : redirect($_SERVER['HTTP_REFERER']);
        } else {
            $this->load->library('session');
            $this->session->set_flashdata('flashError', 'Please enter correct email or password.');
            redirect('main/admin');
        }
    }
    
    //function for calling function in model to verify login
    public function validateAdminCredentials() {
        $this->load->model('getdb');
        if ($this->getdb->checkAdminLogin()) {
            return true;
        } else {
            /*             * *********NEED TO ECHO VALIDATION ERRORS********** */
            $this->form_validation->set_message('validateCredentials', 'Incorrect username/password');
            return false;
        }
    }
    
        public function administration_dashboard() {
            $_SESSION['current_view'] = "Administration Dashboard";
            !empty($_SESSION['admin_id']) ? $this->load->view('administration-dashboard') : redirect('main/admin');
    }
}