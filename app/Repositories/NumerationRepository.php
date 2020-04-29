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
    use ResponseTrait;

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
        $data['sequence'] = $this->service->getNextSequence($data['option_id'], $data['year']);
        $data['ref'] = $this->service->getNextRef($data['option_id'], $data['year']);
        $created = $this->create($data);
        return $created;
    }

    public function getLastSequence($option_id, $year=null)
    {
        if (!$year) = date('Y');
        try{
            $this->obj = $this->model->where(['option_id'=> $option_id, 'year' => $year])->max('sequence');
            $this->statusCode = 200;
        } catch(\Throwable $th) {
            $this->returnContent = $th->getMessage();
        }

        return $this->mountReturn('load', $this->obj, $this->statusCode, $this->contentError);
    }

    public function getLastRef($option_id, $year=null)
    {
        if (!$year) = date('Y');
        try{
            $this->obj = $this->model->where(['option_id'=> $option_id, 'year' => $year])->max('ref');
            $this->statusCode = 200;
        } catch(\Throwable $th) {
            $this->returnContent = $th->getMessage();
        }

        return $this->mountReturn('load', $this->obj, $this->statusCode, $this->contentError);
    }
}