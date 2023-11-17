<?php

namespace App\controllers\admin;

use Illuminate\framework\Controller;
use Illuminate\framework\Response;
use Illuminate\framework\Request;
use Illuminate\framework\factory\Model;

class ApiController extends Controller
{
    public function index()
    {
//        $data = Model::all('Product');
//
//        if (count($data) > 0) {
//            Response::json([
//                'status' => 200,
//                'message' => 'Success',
//                'data' => $data
//            ], 200);
//        } else {
//            Response::json([
//                'status' => 404,
//                'message' => 'Not Found',
//                'data' => null
//            ], 404);
//        }
    }

    public function show(Request $request)
    {
//        $id = $request->getParam();
//        $data = Model::find('Product', $id);
//
//        if ($data) {
//            Response::json([
//                'status' => 200,
//                'message' => 'Success',
//                'data' => $data
//            ], 200);
//        } else {
//            Response::json([
//                'status' => 404,
//                'message' => 'Not Found',
//                'data' => null
//            ], 404);
//        }
    }

    public function store(Request $request)
    {
//        if (!$request->isPost()) {
//            Response::json([
//                'status' => 405,
//                'message' => 'Method Not Allowed',
//                'data' => null
//            ], 405);
//        } else {
//            $createdProduct = Model::create('Product', $data);
//
//            if ($createdProduct) {
//                Response::json([
//                    'status' => 201,
//                    'message' => 'Resource created successfully',
//                    'data' => $createdProduct
//                ], 201);
//            } else {
//                Response::json([
//                    'status' => 400,
//                    'message' => 'Bad Request',
//                    'data' => null
//                ], 400);
//            }
//        }
    }

    public function destroy(Request $request)
    {
//        $id = $request->getParam();
//        $deleted = Model::softDelete('Product', $id);
//
//        if ($deleted) {
//            Response::json([
//                'status' => 200,
//                'message' => 'Resource deleted successfully',
//                'data' => null
//            ], 200);
//        } else {
//            Response::json([
//                'status' => 404,
//                'message' => 'Not Found',
//                'data' => null
//            ], 404);
//        }
    }

    public function delete(Request $request)
    {
//        $id = $request->getParam();
//        $deleted = Model::delete('Product', $id);
//
//        if ($deleted) {
//            Response::json([
//                'status' => 200,
//                'message' => 'Resource deleted successfully',
//                'data' => null
//            ], 200);
//        } else {
//            Response::json([
//                'status' => 404,
//                'message' => 'Not Found',
//                'data' => null
//            ], 404);
//        }
    }

    public function update(Request $request)
    {
//        $id = $request->getParam();
//        $data = $request->getData();
//        $updated = Model::update('Product', $id, $data);
//
//        if ($updated) {
//            Response::json([
//                'status' => 200,
//                'message' => 'Resource updated successfully',
//                'data' => $updated
//            ], 200);
//        } else {
//            Response::json([
//                'status' => 404,
//                'message' => 'Not Found',
//                'data' => null
//            ], 404);
//        }
    }

    public function restore(Request $request)
    {
//        $id = $request->getParam();
//        $restored = Model::restore('Product', $id);
//
//        if ($restored) {
//            Response::json([
//                'status' => 200,
//                'message' => 'Resource restored successfully',
//                'data' => $restored
//            ], 200);
//        } else {
//            Response::json([
//                'status' => 404,
//                'message' => 'Not Found',
//                'data' => null
//            ], 404);
//        }
    }

    public function searchByName(Request $request)
    {
//        $name = $request->getParam();
//
//        if (!$name) {
//            Response::json([
//                'status' => 400,
//                'message' => 'Bad Request',
//                'data' => null
//            ], 400);
//        }
//
//        $products = Model::where('Product', ['slug' => $name]);
//
//        if ($products) {
//            Response::json([
//                'status' => 200,
//                'message' => 'Success',
//                'data' => $products
//            ], 200);
//        } else {
//            Response::json([
//                'status' => 404,
//                'message' => 'Not Found',
//                'data' => null
//            ], 404);
//        }
    }

}
