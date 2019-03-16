<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Task_model extends CI_Model
{
    private $todoTableTask = 'tache';

    public function __construct()
    {
        parent::__construct();
    }

    public function addTaskModel($todoDescription, $todoDateDebut, $todoDateFin)
    {
        $data = [
            'description' => $todoDescription,
            'date_debut' => $todoDateDebut,
            'date_fin' => $todoDateFin,
        ];

        $this->db->insert($this->todoTableTask, $data);
    }

    public function getAllTaskModel()
    {
        return $this->db->get($this->todoTableTask)->result();
    }

    public function getOneTaskModel($todoidTask)
    {
        return $this->db->where('id', $todoidTask)->get($this->todoTableTask)->result();
    }

    public function countTask()
    {
        return $this->db->count_all_results($this->todoTableTask);
    }

    public function deleteOneTaskModel($todoidTask)
    {
        return $this->db->where('id', $todoidTask)->delete($this->todoTableTask);
    }

    public function updateOneTaskModel($todoidTask, $todoDescription, $todoDateDebut, $todoDateFin)
    {
        $this->db->where('id', $todoidTask);
        $this->db->set('description', $todoDescription);
        $this->db->set('date_debut', $todoDateDebut);
        $this->db->set('date_fin', $todoDateFin);
        $this->db->update($this->todoTableTask);
    }
}
