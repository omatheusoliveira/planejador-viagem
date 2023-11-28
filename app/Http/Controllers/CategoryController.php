<?php

namespace App\Http\Controllers;

use App\Services\CategoryService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $service;

    public function __construct(CategoryService $categoryService)
    {
        $this->service = $categoryService;
    }

    public function create(Request $request)
    {
        return $this->service->createCategory($request);
    }
}