<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function product()
    {
        $product= product::all();
        return response::json(['success'=>true,'customers' => $product,'message'=>"Record load successfully"]);
    }

}
