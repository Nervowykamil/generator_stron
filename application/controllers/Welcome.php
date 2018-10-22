<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $this->load->helper(array('form', 'url'));
        $this->load->view('welcome_message');
	}
    
    
    public function login()
    {
        $this->load->helper('url');
        $this->load->library('session');
        
        
        $this->load->library('form_validation');
        $this->form_validation->set_rules('login', 'Login', 'required');
        $this->form_validation->set_rules('password', 'Hasło', 'required');
        
        if ($this->form_validation->run() == false)
        {
            $this->load->view('welcome_message');
            return;
        }
        
        $this->session->set_userdata('zalogowany', false);
        $haslo = $_POST['password'];
        
        $this->load->database();
        
        // double encryption        
        $sha1pass = sha1($_POST['password']);
        $md5pass = md5($sha1pass);
        
        $query = $this->db->query('SELECT id, login, haslo FROM uzytkownicy WHERE login ="'.$_POST['login'].'";');
        foreach ($query->result() as $row)
        {
            if ($row->login != $_POST['login'] || $row->haslo != $md5pass)
            {
                $this->session->set_userdata('zalogowany', false);
                redirect('/welcome/badpassword');
                return;
            } else
            {
                $this->session->set_userdata('login', $_POST['login']);
                $this->session->set_userdata('zalogowany', true);
            }
        }
        
        redirect('/form');
    }
    
    public function logout()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
        $this->session->sess_destroy();
        
        $_POST['message'] = "Wylogowano.";
        $this->load->view("welcome_message");
    }
    
    public function badpassword()
    {
        $this->load->helper(array('form', 'url'));
        $_POST['message'] = "Podane hasło jest nie prawidłowe.";
        $this->load->view("welcome_message");
    }
    
    public function register_page()
    {
        $this->load->helper(array('form', 'url'));
        
        $this->load->view('register_page');
        return;
    }
    
    public function register()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('login', 'Login', 'required');
        $this->form_validation->set_rules('password', 'Hasło', 'required');
        
        $login = $_POST['login'];
        $password = $_POST['password'];
        
        $this->load->database();
        
        $query = $this->db->query('SELECT id, login, haslo FROM uzytkownicy WHERE login ="'.$_POST['login'].'";');
        $isFree = true;
        foreach ($query->result() as $row)
        {
            $isFree = false;
            $_POST['message'] = "Login : ".$login." jest już używany, wybierz inny.";
            $this->load->view('register_page');
            return;
        }
        
        // double encryption        
        $sha1pass = sha1($password);
        $md5pass = md5($sha1pass);
        
        if($this->db->query('INSERT INTO uzytkownicy (login, haslo) VALUES ("'.$login.'", "'.$md5pass.'");'))
        {
            $_POST['message'] = "Zarejestrowano jako ".$login.", teraz możesz się zalogować.";
            $this->load->view('welcome_message');
            return;
        }
        
        
        $this->load->view('register_page');
        return;
    }
}
