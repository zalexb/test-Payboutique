<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class MainController extends Controller
{
    public function getTable(Request $request, $tableName){


        if(Schema::hasTable($tableName)){

            $data = $request->except('_token');

            foreach($data as $key=>$value){
                if(empty($value)) {
                    unset($data[$key]);
                }
            }

            $rows = DB::table($tableName)->where($data)->get();

            if($rows->isEmpty()) {
                $returnData = array(
                    'code' => '2',
                    'message' => 'Not found',
                    'details' => 'Entity (or table) not found'
                );
                return response()->json($returnData, 400);
            }

            return $rows;


        }
        else{
            $returnData = array(
                'code'  => '2',
                'message' => 'Not found',
                'details' => 'Entity (or table) not found'
            );
            return response()->json($returnData, 400);

        }

    }

}