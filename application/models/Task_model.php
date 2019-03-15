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
}
