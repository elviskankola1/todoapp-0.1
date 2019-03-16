<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Task_model extends CI_Model
{
    //--------------------------------------------------------------------------
    /*
        @var string
         #specification: attribut representant la table tache dans la db
    */
    private $todoTableTask = 'tache';

    //-------------------------------------------------------------------------
    /*
        @param string $todoDescription
        @param string $todoDateDebut
        @param string $todoDateFin

        #specification: ajoute une tache dans la table tache
    */
    public function addTaskModel($todoDescription, $todoDateDebut, $todoDateFin)
    {
        $data = [
            'description' => $todoDescription,
            'date_debut' => $todoDateDebut,
            'date_fin' => $todoDateFin,
        ];

        $this->db->insert($this->todoTableTask, $data);
    }

    //------------------------------------------------------------------------
    /*

        @return  object
        #specification: prend toutes les task dans la table tache
    */

    public function getAllTaskModel()
    {
        return $this->db->get($this->todoTableTask)->result();
    }

    //----------------------------------------------------------------------

    /*

        @param int $todoidTask
        @return object
        #specification: reccupere une tache selon son id

    */
    public function getOneTaskModel($todoidTask)
    {
        return $this->db->where('id', $todoidTask)->get($this->todoTableTask)->result();
    }

    //----------------------------------------------------------------------------
    /*
        @return int
        #specification: compte toutes les tasks dans la table tache

    */
    public function countTask()
    {
        return $this->db->count_all_results($this->todoTableTask);
    }

    //------------------------------------------------------------------------------
    /*
        @param int $todoidTask
        #specification: supprime une task en fonction de son id dans la table tache

    */
    public function deleteOneTaskModel($todoidTask)
    {
        $this->db->where('id', $todoidTask)->delete($this->todoTableTask);
    }

    //------------------------------------------------------------------------------------
    /*

        @param int $todoidTask
        @param string $todoDescription
        @param string $todoDateDebut
        @param string $todoDateFin
        #specification: update la task selon son id

    */
    public function updateOneTaskModel($todoidTask, $todoDescription, $todoDateDebut, $todoDateFin)
    {
        $this->db->where('id', $todoidTask);
        $this->db->set('description', $todoDescription);
        $this->db->set('date_debut', $todoDateDebut);
        $this->db->set('date_fin', $todoDateFin);
        $this->db->update($this->todoTableTask);
    }
}
