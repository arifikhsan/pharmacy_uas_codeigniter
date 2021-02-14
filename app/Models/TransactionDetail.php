<?php

namespace App\Models;

use CodeIgniter\Model;

class TransactionDetail extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'transaction_details';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['transaction_id', 'drug_id', 'sub_total', 'total'];

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
    $this->select('transactions.id as transaction_id');
    $this->select('transaction_details.id as id');
    $this->select('drugs.id as drug_id');
    $this->select('drugs.name as drug_name');
    $this->select('transaction_details.total as total');
    $this->select('transaction_details.sub_total as sub_total');
    $this->join('transactions', 'transactions.id = transaction_details.transaction_id');
    $this->join('drugs', 'drugs.id = transaction_details.drug_id');
    return $this->get()->getResult();
  }

  function getOne($id) {
    $this->select('*');
    $this->select('transactions.id as transaction_id');
    $this->select('transaction_details.id as id');
    $this->select('transaction_details.total as total');
    $this->select('transaction_details.sub_total as sub_total');
    $this->select('drugs.id as drug_id');
    $this->select('drugs.name as drug_name');
    $this->join('transactions', 'transactions.id = transaction_details.transaction_id');
    $this->join('drugs', 'drugs.id = transaction_details.drug_id');
    $this->where('transaction_details.id', $id);
    return $this->get()->getResult()[0];
  }
}
