<?php

namespace App\Pipelines\Filters\ProjectFilter;

use App\Pipelines\FilterInterface;
use Illuminate\Database\Eloquent\Builder;

class StatusFilter implements FilterInterface
{
    public static function apply(Builder $builder, $value): Builder
    {
        return $builder->where('status', $value);
    }
}
