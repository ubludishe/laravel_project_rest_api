<?php

namespace App\Pipelines\Filters\TaskFilter;

use Illuminate\Database\Eloquent\Builder;

class DueDateFilter
{
    public static function apply(Builder $builder, $value): Builder
    {
        return $builder->orderBy('due_date', 'asc');
    }
}
