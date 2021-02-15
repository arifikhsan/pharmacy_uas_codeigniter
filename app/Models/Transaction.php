<?php

namespace App\Models;

use CodeIgniter\Model;

class Transaction extends Model
{
  protected $DBGroup              = 'default';
  protected $table                = 'transactions';
  protected $primaryKey           = 'id';
  protected $useAutoIncrement     = true;
  protected $insertID             = 0;
  protected $returnType           = 'array';
  protected $useSoftDelete        = false;
  protected $protectFields        = true;
  protected $allowedFields        = ['user_id', 'customer_name', 'datetime', 'total'];

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
    $this->select('*');
    $this->select('users.username as user_username');
    $this->select('transactions.id as id');
    $this->select('transactions.customer_name as customer_name');
    $this->join('users', 'users.id = transactions.user_id');
    return $this->get()->getResult();
  }

  function getOne($id)
  {
    $this->select('*');
    $this->select('users.username as user_username');
    $this->select('transactions.id as id');
    $this->select('transactions.total as total');
    $this->select('transactions.customer_name as customer_name');
    $this->join('users', 'users.id = transactions.user_id');
    $this->where('transactions.id', $id);
    return $this->get()->getResult()[0];
  }
}
