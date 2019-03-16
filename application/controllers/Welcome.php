<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function index()
    {
        $data['task'] = $this->tache->getAllTaskModel();
        $data['nbtask'] = $this->tache->countTask();
        $this->load->view('welcome_message', $data);
    }

    public function addTask()
    {
        $this->form_validation->set_rules('description', 'description', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('datedebut', 'date de debut', 'trim|required');
        $this->form_validation->set_rules('datefin', 'date de la fin', 'trim|required');
        if ($this->form_validation->run()) {
            $todoDescription = strip_tags($this->input->post('description'));
            $todoDateDebut = $this->input->post('datedebut');
            $todoDateFin = $this->input->post('datefin');

            $this->tache->addTaskModel($todoDescription, $todoDateDebut, $todoDateFin);
            $todosucces['satisfaction'] = 'une nouvelle tachee a ete creee';
            $this->session->set_flashdata($todosucces);
            $this->index();
        } else {
            $this->load->view('creer_tache');
        }
    }

    public function deleteOneTask()
    {
        $todoidTask = $this->uri->segment(3);
        if ($todoidTask) {
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
}
