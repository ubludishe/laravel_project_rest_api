<?php

namespace App\Pipelines\Filters\ProjectFilter;

use App\Pipelines\FilterInterface;
use Illuminate\Database\Eloquent\Builder;


class DateFilter implements FilterInterface
{
    public static function apply(Builder $builder, $value): Builder
    {
        return $builder->orderBy('created_at', 'asc');
    }
}
