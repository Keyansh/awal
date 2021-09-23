<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Consent extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->is_admin_protected = true;
        $this->load->model('Consentmodel');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->helper('text');
    }

    public function index()
    {
        $data = array();
        $data = $this->Consentmodel->listAll();

        $inner = array();
        $inner['data'] = $data;
        $inner['textData'] = 'Client Information and Consent for IPL & E-Light Treatments';



        $page = array();
        $page['content'] = $this->load->view('listing', $inner, true);
        $this->load->view('shell', $page);
    }


    public function delete($nid)
    {
        $distribution = array();
        $distribution = $this->Consentmodel->getdetails($nid);

        if (!$distribution) {
            $this->utility->show404();
            return;
        }

        $this->Consentmodel->deleteRecord($distribution);
        $this->Consentmodel->deletepost($distribution);
        $this->session->set_flashdata('SUCCESS', 'distribution_deleted');
        redirect('distribution/index/');
        exit();
    }

    public function detail($id)
    {
        $data = array();
        $data = $this->Consentmodel->formDetail($id);
        $inner = array();
        $inner['data'] = $data;
        $page = array();
        $page['content'] = $this->load->view('pdf/' . $data['form_type'], $inner, true);
        $this->load->view('shell', $page);
    }
    public function update($id)
    {
        $data = array();
        $data = $this->Consentmodel->updateForm($id);
        $this->session->set_flashdata('SUCCESS', 'updated');
        redirect($_SERVER['HTTP_REFERER']);
        exit();
    }
}
