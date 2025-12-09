<?php

namespace App\Pipelines\Filters\TaskFilter;

use Illuminate\Database\Eloquent\Builder;

class PriorityFilter
{
    public static function apply(Builder $builder, $value): Builder
    {
        return $builder->where('priority', 'like', '%' . $value . '%');
    }
}
