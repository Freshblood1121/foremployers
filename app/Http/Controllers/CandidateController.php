<?php

namespace App\Http\Controllers;

use App\Http\QueryBuilders\CandidateQueryBuilder;
use App\Http\Requests\CandidateRequest;
use App\Http\Resources\CandidateResource;
use App\Models\Candidate;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CandidateController extends Controller
{
    protected CandidateQueryBuilder $builder;
    protected CandidateRequest $request;

    public function __construct(
        CandidateQueryBuilder $builder,
        CandidateRequest      $request)
    {
        $this->builder = $builder;
        $this->request = $request;
    }

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse|AnonymousResourceCollection
     */
    public function index(): JsonResponse|AnonymousResourceCollection
    {
        $candidates = $this->builder->getCandidate();

        if ($candidates->count() > 0) {
            return CandidateResource::collection($candidates);
        } else {
            return response()->json(['message' => 'Вакансии не найдены.'], 404);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return CandidateResource|JsonResponse
     */
    public function store(): CandidateResource|JsonResponse
    {
        $candidate = Candidate::create($this->request->validated());

        if ($candidate) {
            return new CandidateResource($candidate);
        } else {
            return response()->json(['message' => 'Не удалось создать вакансию.'], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return CandidateResource|JsonResponse
     */
    public function show(int $id): CandidateResource|JsonResponse
    {
        $candidate = Candidate::findOrFail($id);

        if ($candidate) {
            return new CandidateResource($candidate);
        } else {
            return response()->json(['message' => 'Вакансия не найдена.'], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function edit(int $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @return CandidateResource|JsonResponse
     */
    public function update(int $id): CandidateResource|JsonResponse
    {
        $candidate = Candidate::findOrFail($id);

        if ($candidate) {
            $candidate->update($this->request->validated());
            return new CandidateResource($candidate);
        }
        return response()->json(['message' => 'Вакансия не найдена.'], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return JsonResponse
     */
    //Удаление вакансии
    public function destroy(): JsonResponse
    {
        $candidate = Candidate::find($this->request->id);

        if ($candidate) {
            $candidate->delete();
            return response()->json(['message' => 'Вакансия успешно удалена.']);
        } else {
            return response()->json(['message' => 'Не удалось удалить вакансию.'], 404);
        }

    }
}
