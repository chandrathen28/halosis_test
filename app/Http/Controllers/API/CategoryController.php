<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index(): \Illuminate\Http\JsonResponse
    {
        $categories = Category::all();

        return $this->sendResponse(['data' => $categories], 'Success get Categories');
    }

    public function create(Request $request): \Illuminate\Http\JsonResponse
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required|string',
        ]);

        if ($validate->fails()) {
            return $this->sendValidationError($validate->messages());
        }

        Category::create([
            'name' => $request['name']
        ]);

        return $this->sendResponse([], 'Success create category');
    }

    public function show($id): \Illuminate\Http\JsonResponse
    {
        $category = Category::find($id);

        return $this->sendResponse(['data' => $category], 'Success show category');
    }

    public function update(Request $request, $id): \Illuminate\Http\JsonResponse
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required|string',
        ]);

        if ($validate->fails()) {
            return $this->sendValidationError($validate->messages());
        }

        $category = Category::find($id);
        if (!$category) {
            return $this->sendError('Category not found', 404);
        }

        $category->update($request->all());
        return $this->sendResponse(['data' => $category], 'Success update category');
    }

    public function destroy($id): \Illuminate\Http\JsonResponse
    {
        $category = Category::find($id);
        if (!$category) {
            return $this->sendError('Category not found', 404);
        }

        $category->delete();

        return $this->sendResponse([], 'Success delete category');
    }
}
