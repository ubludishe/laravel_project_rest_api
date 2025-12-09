<?php

namespace App\Pipelines\Filters\TaskFilter;

use Illuminate\Database\Eloquent\Builder;

class StatusFilter
{
    public static function apply(Builder $builder, $value): Builder
    {
        return $builder->where('status', 'like', '%' . $value . '%');
    }

}
