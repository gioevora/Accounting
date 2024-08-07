<?php

namespace App\Http\Controllers;

use App\Models\Item as Model;
use App\Models\ItemDetail as Related;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $ent = 'Product';
    public function add(Request $request)
    {
        $request->validate([
            'code' => 'required',
        ]);


        $record = new Model();



        $keys = [
            'code',
            'name',
        ];



        foreach ($keys as $key) {
            if ($key == " ") {
            } else {
                $record->$key = $request->$key;
            }
        }

        $record->save();

    
        $related = new Related();

        $keys = [
            'item_id',
            'type',
        ];

        foreach ($keys as $key) {
            if ($key == "type") {
                if($request->key == "Inventory"){
                    $related->save();
                }
                elseif($request->key == "Purchase"){
                    
                    $related->save();
                }
            } 
        
            
            else {
                // $related->$key = $request->$key;
            }
        }


       

       


        return response(['msg' => "Added $this->ent"]);
    }
}
