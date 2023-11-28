<?php

namespace App\Services;

use App\Models\Category;

use Illuminate\Http\Response;
use Illuminate\Http\Request;

use Exception;

class CategoryService
{

    public function createCategory(Request $request)
    {
        try {
            $category = new Category();

            $category->name = $request->name;

            $category->save();

            return response()->json($category, Response::HTTP_OK);
        } catch (Exception $ex) {
            return response()->json($ex, Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

}