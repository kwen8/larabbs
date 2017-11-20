<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoriesController extends Controller
{
    public function show(Request $request, Category $category)
    {
        $topics = Topic::with('category', 'user')
            ->where('category_id', $category->id)
            ->withOrder($request->order)
            ->paginate(20);

        return view('topics.index', compact('topics', 'category'));
    }
}
