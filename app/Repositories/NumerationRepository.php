<?php

namespace App\Repositories;

use App\Models\Numeration;
use App\Repositories\BaseRepository;
use App\Services\NextService;

use App\Traits\ResponseTrait;
/**
* Repository Pattern allows encapsulation of data access logic
*/
class NumerationRepository extends BaseRepository
{
    // use ResponseTrait;

    protected $model;
    protected $obj = [];
    protected $returnType = 'error';
    protected $returnMsg = '';
    protected $returnContent = '';
    protected $statusCode = 400;
    protected $options = 0;
    protected $service;

	public function __construct( Numeration $model, NextService $service )
	{
        $this->model = $model;
        $this->service = $service;
    }

    public function createNexNumber($data)
    {
        $data['year'] = isset($data['year']) ? $data['year'] : date('Y');
        $sequence = $this->getLastSequence($data['option_id'], $data['year']);
        $data['sequence'] = $this->service->incrementValue($sequence->data);
        $ref = $this->getLastRef($data['option_id'], $data['year']);
        $data['ref'] = $this->service->incrementValue($ref->data);
        $created = $this->create($data);
        return $created;
    }

    public function getLastSequence($option_id, $year=null)
    {
        if (!$year) $year = date('Y');
        try{
            $this->obj = $this->model->where(['option_id'=> $option_id])->max('sequence');
            $this->statusCode = 200;
        } catch(\Throwable $th) {
            $this->returnContent = $th->getMessage();
        }

        return $this->mountReturn('load', $this->obj, $this->statusCode, $this->contentError);
    }

    public function getLastRef($option_id, $year=null)
    {
        $sql = $this->model->where(['option_id'=> $option_id, 'year' => $year])->max('ref');
        if (!$year) $year = date('Y');
        try{
            $this->obj = $this->model->where(['option_id'=> $option_id, 'year' => $year])->max('ref');
            $this->statusCode = 200;
        } catch(\Throwable $th) {
            $this->returnContent = $th->getMessage();
        }

        return $this->mountReturn('load', $this->obj, $this->statusCode, $this->contentError);
    }
}