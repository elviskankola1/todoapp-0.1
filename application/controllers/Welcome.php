<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    //--------------------------------------------------------------------
    /*
        #specification: la methode lancee en premier, elle represente la page de Taches

    */
    public function index()
    {
        $data['task'] = $this->tache->getAllTaskModel();
        $data['nbtask'] = $this->tache->countTask();
        $this->load->view('welcome_message', $data);
    }

    //----------------------------------------------------------------------
    /*
       #specification:cette methode represente la page de creation d'une task
       et l'enregistrement de cette derniere.

    */
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
            $todoSucces['satisfaction'] = 'une nouvelle tachee a ete creee';
            $this->session->set_flashdata($todosucces);
            $this->index();
        } else {
            $this->load->view('creer_tache');
        }
    }

    //-------------------------------------------------------------------------
    /*
        #specification: supprime une task et retourne sur la meme page

    */

    public function deleteOneTask()
    {
        $todoidTask = $this->uri->segment(3);
        if ($todoidTask) {
            $this->tache->deleteOneTaskModel($todoidTask);
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    //------------------------------------------------------------------------
    /*
        #specification: page detaillee d'une la task
    */
    public function detailTask()
    {
        $todoidTask = $this->uri->segment(3);
        $todoData['taskForId'] = $this->tache->getOneTaskModel($todoidTask);
        $this->load->view('detail_task', $todoData);
    }

    //------------------------------------------------------------------------
    /*
        #specification: permet de faire un update d'une task et redirige a la page
        principale
    */
    public function updateOneTask()
    {
        $this->form_validation->set_rules('description', 'description', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('debut', 'date de debut', 'trim|required');
        $this->form_validation->set_rules('fin', 'date de la fin', 'trim|required');

        if ($this->form_validation->run()) {
            $todoidTask = $this->input->post('id');
            $todoDescriptionTask = $this->input->post('description');
            $todoDateDebut = $this->input->post('debut');
            $todoDateFin = $this->input->post('fin');
            $todoSucces['satisfaction'] = 'update reussi';
            $this->session->set_flashdata($todoSucces);
            $this->tache->updateOneTaskModel($todoidTask, $todoDescriptionTask, $todoDateDebut, $todoDateFin);
            redirect('welcome/index');
        } else {
            $this->detailTask();
        }
    }
}
