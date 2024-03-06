<?php

namespace App\Http\Controllers;

use App\Http\QueryBuilders\CandidateQueryBuilder;
use App\Http\Requests\CandidateRequest;
use Illuminate\Database\Eloquent\Collection;

class FilterDataController extends Controller
{
    protected CandidateQueryBuilder $builder;

    public function __construct(CandidateQueryBuilder $builder)
    {
        $this->builder = $builder;
    }

    //Сортировка времени создания вакансии по убыванию
    public function sortByDate(): Collection|array
    {
        return $this->builder->dateDesc();
    }

    //Сортировка вакансий по возрастанию зарплат
    public function salaryAsc(): Collection|array
    {
        return $this->builder->salaryAsc();
    }
}
