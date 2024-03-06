<?php

namespace App\Http\QueryBuilders;

use App\Models\Candidate;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

final class CandidateQueryBuilder extends QueryBuilder
{
    public Builder $model;

    public function __construct()
    {
        $this->model = Candidate::query();
    }

    //Получить всех кандидатов
    public function getCandidate(): Collection
    {
        return $this->model->get();
    }

    //Фильтрует вакансии по дате в порядке убывания
    public function dateDesc(): \Illuminate\Database\Eloquent\Collection|array
    {
        return $this->model->orderByDesc('candidates.created_at')->get();
    }

    //Фильтрует вакансии по зарплате в порядке возрастания
    public function salaryAsc(): \Illuminate\Database\Eloquent\Collection|array
    {
        return $this->model->orderBy('candidates.salary')->get();
    }

    //Обновляет данные вакансии
    public function updateVacancy($id, $request): bool|int
    {
        return $this->model->findOrFail($id)->update($request);
    }
}
