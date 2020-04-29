<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\NumerationRequest;
use App\Repositories\NumerationRepository;

class NumerationController extends Controller
{
    protected $repository;
    public function __construct(NumerationRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"numeration"},
    *     path="api/v1/numeration",
    *     description="Return a list with numerations",
    *     @OA\Response(
    *         response=200,
    *         description="A list with numerations",
    *     ),
    *     @OA\Response(
    *         response=400,
    *         description="An error happened"
    *     ),
    *     @OA\Response(
    *         response=422,
    *         description="Missing Data"
    *     ),
    *     @OA\Response(
    *         response=501,
    *         description="Not implemented"
    *     ),
    * )
    */
    public function index()
    {
        $response = $this->repository->all();
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Post(
    *     tags={"numeration"},
    *     path="api/v1/numeration",
    *     description="Create new numeration",
    *     @OA\Response(
    *         response=200,
    *         description="A created numeration",
    *     ),
    *     @OA\Response(
    *         response=400,
    *         description="An error happened"
    *     ),
    *     @OA\Response(
    *         response=422,
    *         description="Missing Data"
    *     ),
    *     @OA\Response(
    *         response=501,
    *         description="Not implemented"
    *     ),
    * )
    */
    public function store(NumerationRequest $request)
    {
        $response = $this->repository->createNexNumber($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"numeration"},
    *     path="api/v1/numeration",
    *     description="Return a specific numeration",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of numeration",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific numeration",
    *     ),
    *     @OA\Response(
    *         response=400,
    *         description="An error happened"
    *     ),
    *     @OA\Response(
    *         response=422,
    *         description="Missing Data"
    *     ),
    *     @OA\Response(
    *         response=501,
    *         description="Not implemented"
    *     ),
    * )
    */
    public function show($id)
    {
        $response = $this->repository->findOrFail($id);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Put(
    *     tags={"numeration"},
    *     path="api/v1/numeration",
    *     description="Update a specific numeration",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of numeration",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated numeration",
    *     ),
    *     @OA\Response(
    *         response=400,
    *         description="An error happened"
    *     ),
    *     @OA\Response(
    *         response=422,
    *         description="Missing Data"
    *     ),
    *     @OA\Response(
    *         response=501,
    *         description="Not implemented"
    *     ),
    * )
    */
    public function update(NumerationRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"numeration"},
    *     path="api/v1/numeration",
    *     description="Remove a specific numerations",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of numeration",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted numeration",
    *     ),
    *     @OA\Response(
    *         response=400,
    *         description="An error happened"
    *     ),
    *     @OA\Response(
    *         response=422,
    *         description="Missing Data"
    *     ),
    *     @OA\Response(
    *         response=501,
    *         description="Not implemented"
    *     ),
    * )
    */
    public function destroy($id)
    {
        $response = $this->repository->findAndDelete($id);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Put(
    *     tags={"numeration"},
    *     path="api/v1/numeration/restore",
    *     description="Restore a specific numeration",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of numeration",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored numeration",
    *     ),
    *     @OA\Response(
    *         response=400,
    *         description="An error happened"
    *     ),
    *     @OA\Response(
    *         response=422,
    *         description="Missing Data"
    *     ),
    *     @OA\Response(
    *         response=501,
    *         description="Not implemented"
    *     ),
    * )
    */
    public function restore($id)
    {
        $response = $this->repository->findAndRestore($id);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"numeration"},
    *     path="api/v1/numeration/forceDelete",
    *     description="Remove permanently numeration",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of numeration",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly numeration",
    *     ),
    *     @OA\Response(
    *         response=400,
    *         description="An error happened"
    *     ),
    *     @OA\Response(
    *         response=422,
    *         description="Missing Data"
    *     ),
    *     @OA\Response(
    *         response=501,
    *         description="Not implemented"
    *     ),
    * )
    */
    public function forceDelete($id)
    {
        $response = $this->repository->findAndDestroy($id);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

}
