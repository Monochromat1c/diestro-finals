<?php

namespace App\Models;

use CodeIgniter\Model;

class Insects extends Model
{
    protected $table = 'insects';
    protected $primaryKey = 'insectID';
    protected $allowedFields = [
        'insect_name',
        'habitatID',
        'speciesID'
    ];
    protected $returnType = 'object';

    public function getInsectData()
    {
        return $this->db->table('insects')
                        ->select('insects.insectID, insects.insect_name, insect_habitat.habitat, insect_species.species')
                        ->join('insect_habitat', 'insects.habitatID = insect_habitat.habitatID')
                        ->join('insect_species', 'insects.speciesID = insect_species.speciesID');
    }

    public function getInsectDataById($id)
    {
        $builder = $this->db->table('insects');
        $builder->select('insects.insectID, insects.insect_name, insect_habitat.habitat, insect_species.species');
        $builder->join('insect_habitat', 'insects.habitatID = insect_habitat.habitatID');
        $builder->join('insect_species', 'insects.speciesID = insect_species.speciesID');
        $builder->where('insects.insectID', $id);

        return $builder->get()->getRow();
    }

    public function getSpeciesData()
    {
        return $this->db->table('insect_species')->get()->getResult();
    }

    public function getHabitatData()
    {
        return $this->db->table('insect_habitat')->get()->getResult();
    }

}
