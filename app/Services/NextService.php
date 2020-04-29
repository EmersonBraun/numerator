<?php
namespace App\Services;

use App\Repositories\NumerationRepository;
class NextService
{
    protected $repository;
    public function __construct( NumerationRepository $repository )
	{
		$this->repository = $repository;
    }  

    public function getNextSequence($option_id, $year=null)
    {
        $lastInserted = $this->repository->getLastSequence($option_id, $year);
        return $this->incrementValue($lastInserted);
    }

    public function getNextRef($option_id, $year=null)
    {
        $lastInserted = $this->repository->getLastSequence($option_id, $year);
        return $this->incrementValue($lastInserted);
    }

    public function incrementValue($currentValue)
    {
        if (!$currentValue) return 1;
        return $currentValue++;
    }
}
