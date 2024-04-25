<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index(): \Illuminate\Http\JsonResponse
    {
        $categories = Product::all();

        return $this->sendResponse(['data' => $categories], 'Success get Products');
    }

    public function create(Request $request): \Illuminate\Http\JsonResponse
    {
        $validate = Validator::make($request->all(), [
            'category_id' => 'required',
            'name' => 'required|string',
            'title' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'nullable',
            'image' => 'nullable',
        ]);

        if ($validate->fails()) {
            return $this->sendValidationError($validate->messages());
        }

        Product::create([
            'category_id' => $request['category_id'],
            'name' => $request['name'],
            'title' => $request['title'],
            'price' => $request['price'],
            'description' => $request['description'],
            'image' => $request['image'],
        ]);

        return $this->sendResponse([], 'Success create product');
    }

    public function show($id): \Illuminate\Http\JsonResponse
    {
        $product = Product::find($id);

        return $this->sendResponse(['data' => $product], 'Success show product');
    }

    public function update(Request $request, $id): \Illuminate\Http\JsonResponse
    {
        $validate = Validator::make($request->all(), [
            'category_id' => 'required',
            'name' => 'required|string',
            'title' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'nullable',
            'image' => 'nullable',
        ]);

        if ($validate->fails()) {
            return $this->sendValidationError($validate->messages());
        }

        $product = Product::find($id);
        if (!$product) {
            return $this->sendError('Product not found', 404);
        }

        $product->update($request->all());
        return $this->sendResponse(['data' => $product], 'Success update product');
    }

    public function destroy($id): \Illuminate\Http\JsonResponse
    {
        $product = Product::find($id);
        if (!$product) {
            return $this->sendError('Product not found', 404);
        }

        $product->delete();

        return $this->sendResponse([], 'Success delete product');
    }
}
