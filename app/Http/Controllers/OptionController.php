<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\OptionRequest;
use App\Repositories\OptionRepository;

class OptionController extends Controller
{
    protected $repository;
    public function __construct(OptionRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"option"},
    *     path="api/v1/option",
    *     description="Return a list with options",
    *     @OA\Response(
    *         response=200,
    *         description="A list with options",
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
    *     tags={"option"},
    *     path="api/v1/option",
    *     description="Create new option",
    *     @OA\Response(
    *         response=200,
    *         description="A created option",
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
    public function store(OptionRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"option"},
    *     path="api/v1/option",
    *     description="Return a specific option",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of option",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific option",
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
    *     tags={"option"},
    *     path="api/v1/option",
    *     description="Update a specific option",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of option",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated option",
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
    public function update(OptionRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"option"},
    *     path="api/v1/option",
    *     description="Remove a specific options",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of option",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted option",
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
    *     tags={"option"},
    *     path="api/v1/option/restore",
    *     description="Restore a specific option",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of option",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored option",
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
    *     tags={"option"},
    *     path="api/v1/option/forceDelete",
    *     description="Remove permanently option",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of option",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly option",
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
