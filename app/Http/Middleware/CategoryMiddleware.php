<?php

namespace App\Http\Middleware;

use App\Models\Category;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CategoryMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $categories = Category::all();
        $categoryData = [];

        foreach ($categories as $category) {
            if ($category->cat_ust === null) {
                $categoryData[$category->id] = [
                    'name' => $category->name,
                    'slug' => $category->slug,
                    'cat_ust' => $category->cat_ust,    
                ];
            }
        }

        view()->share(['category' => $categoryData]);

        return $next($request);
    }
}
