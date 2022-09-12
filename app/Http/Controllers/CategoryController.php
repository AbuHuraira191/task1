<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function category()
    {
        $Category= Category::all();
        return response::json(['success'=>true,'customers' => $Category,'message'=>"Record load successfully"]);
    }

    public function categoryID($id)
    {
        $Category= Category::with('get_product')->find($id);
        return response::json(['success'=>true,'customers' => $Category,'message'=>"Record load successfully"]);
    }

}
