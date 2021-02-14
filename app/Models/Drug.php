<?php

namespace App\Models;

use CodeIgniter\Model;

class Drug extends Model
{
  protected $DBGroup              = 'default';
  protected $table                = 'drugs';
  protected $primaryKey           = 'id';
  protected $useAutoIncrement     = true;
  protected $insertID             = 0;
  protected $returnType           = 'array';
  protected $useSoftDelete        = false;
  protected $protectFields        = true;
  protected $allowedFields        = ['supplier_id', 'name', 'producer', 'price', 'quantity', 'image'];

  // Dates
  protected $useTimestamps        = true;
  protected $dateFormat           = 'datetime';
  protected $createdField         = 'created_at';
  protected $updatedField         = 'updated_at';
  protected $deletedField         = 'deleted_at';

  // Validation
  protected $validationRules      = [];
  protected $validationMessages   = [];
  protected $skipValidation       = false;
  protected $cleanValidationRules = true;

  // Callbacks
  protected $allowCallbacks       = true;
  protected $beforeInsert         = [];
  protected $afterInsert          = [];
  protected $beforeUpdate         = [];
  protected $afterUpdate          = [];
  protected $beforeFind           = [];
  protected $afterFind            = [];
  protected $beforeDelete         = [];
  protected $afterDelete          = [];

  function getAll()
  {
    $this->select('drugs.id, drugs.price as drug_price, drugs.quantity as drug_quantity, drugs.producer as drug_producer');
    $this->select('drugs.id as drug_id');
    $this->select('drugs.name as drug_name');
    $this->select('suppliers.id as supplier_id');
    $this->select('suppliers.name as supplier_name');
    $this->join('suppliers', 'suppliers.id = drugs.supplier_id');
    return $this->get()->getResult();
  }

  function getOne($id) {
    $this->select('drugs.id, drugs.price as drug_price, drugs.quantity as drug_quantity, drugs.producer as drug_producer');
    $this->select('drugs.id as drug_id');
    $this->select('drugs.name as drug_name');
    $this->select('drugs.created_at as drug_created_at');
    $this->select('drugs.updated_at as drug_updated_at');
    $this->select('suppliers.id as supplier_id');
    $this->select('suppliers.name as supplier_name');
    $this->join('suppliers', 'suppliers.id = drugs.supplier_id');
    $this->where('drugs.id', $id);
    return $this->get()->getResult()[0];
  }
}
