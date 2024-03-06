<?php

namespace App\Http\QueryBuilders;

use Illuminate\Support\Collection;

abstract class QueryBuilder
{
        abstract function getCandidate(): Collection;
}
