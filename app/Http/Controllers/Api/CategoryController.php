<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return response()->json($categories);
    }

    public function store(StoreCategoryRequest $request)
    {
        $category = Category::create($request->validated());
        return response()->json($category, Response::HTTP_CREATED);
    }

    public function show(Category $category)
    {
        $category->load('tasks');
        return response()->json($category);
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update($request->validated());
        return response()->json($category);
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
