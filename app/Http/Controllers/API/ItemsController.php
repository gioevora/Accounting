<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Item as Model;
use App\Models\ItemDetail as Related;

class ItemsController extends Controller
{
    public $model = 'Item';

    public function all() {
        $records = Model::where('status', Null)->get();

        $data = [
            'records' => $records,
        ];

        return response($data);
    }

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

            } 
            else {
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
            if ($type == "Inventory") {
                $record->update(['quantity' => 0]);
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

        return response(['msg' => "Added $this->model"]);
    }

    public function get($id) {
        $record = Model::find($id)->with('item_details')->first();

        $data = [
            'record' => $record,
        ];

        return response($data);
    }

    public function update(Request $request)
    {
        $request->validate([
            'code' => 'required',
        ]);

        $record = Model::find($request->id);

        $keys = [
            'code',
            'name',
        ];

        foreach ($keys as $key) {
            if ($key == " ") {

            } 
            else {
                $upd[$key] = $request->$key;
            }
        }

        $record->update($upd);

        return response(['msg' => "Updated $this->model"]);
    }

    public function archive(Request $request) {
        $ids = $request->ids;
        $records = Model::whereIn('id', $ids)->update(['status' => 'Archived']);
        return response(['msg' => "Archived $this->model"."s"]);
    }

    public function delete(Request $request) {
        $ids = $request->ids;
        $records = Model::whereIn('id', $ids)->delete();
        return response(['msg' => "Deleted $this->model"."s"]);
    }
}
