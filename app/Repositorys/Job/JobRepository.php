<?php
namespace App\Repositorys\Job;

use App\Models\Job;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class JobRepository implements JobRepositoryInterface
{
    public function filter( array $filters)
    {
        return QueryBuilder::for(Job::class)
            ->allowedFilters([
                'title',
                'experience',
                'category',
                AllowedFilter::scope('filter_salary'),
            ])
            ->get();
//        return Job::query()->when($filters['search'] ?? null,function ($query, $search)
//        {
//            $query->where(function() use ($search) {
//                $query
//                    ->where('title','like',"%".$search."%")
//                    ->orWhere('description','like',"%".$search."%")
//                    ->orWhereHas('employer',
//                        function($query) use($search) {
//                            $query->Where('company_name', 'like', "%" . $search . "%");
//                    });
//            });
//        })
//            ->when($filters['min_salary'] ?? null, fn ($query , $min_salary) => $query->where('salary', '>=', $min_salary))
//
//            ->when($filters['max_salary'] ?? null, fn ($query , $max_salary) => $query->where('salary', '<=', $max_salary))
//
//            ->when($filters['experience'] ?? null, fn ($query , $experience) => $query->where('experience',$experience))
//
//            ->when($filters['category'] ?? null, fn ($query , $category) => $query->where('category',$category))
//
//            ->with('employer.jobs')->get();
    }
}
