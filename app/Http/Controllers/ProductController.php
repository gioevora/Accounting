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

        $keys = [
            'item_id',
            'type',
            'price',
            'account_id',
            'tax',
            'description',
        ];

        foreach ($request->types as $type) {
            if($type == "Inventory"){
               
                $record->update(['qty' => 0]);
            }
            
            $related = new Related();
            foreach ($keys as $key) {
                if ($key == "item_id") {
                    $related->$key = $record->id;
                }
                else {
                    $req_key = strtolower($type) . "_$key";
                    $related->$key = $request->$req_key;
                }
            }
            $related->type = $type;
            $related->save();
        }

        return response(['msg' => "Added $this->ent"]);
    }
}
