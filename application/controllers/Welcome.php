<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function addTask()
    {
        $this->form_validation->set_rules('description', 'description', 'trim|required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('datedebut', 'date de debut', 'trim|required');
        $this->form_validation->set_rules('datefin', 'date de la fin', 'trim|required');
        if ($this->form_validation->run()) {
            $todoDescription = strip_tags($this->input->post('description'));
            $todoDateDebut = $this->input->post('datedebut');
            $todoDateFin = $this->input->post('datefin');
        } else {
            $this->load->view('');
        }
    }
}
