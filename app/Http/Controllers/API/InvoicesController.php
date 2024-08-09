<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Invoice as Model;

class InvoicesController extends Controller
{
    public $model = 'Invoice';

    public function search($type) {
        if ($type == "all") {
            $where = [["status", "=", Null]];
        }
        else {
            $where = [
                ["type", "=", $type],
                ["status", "=", Null],
            ];
        }

        $records = Model::where($where)->get();

        $data = [
            'records' => $records,
        ];

        return response($data);
    }

    public function add(Request $request) {
        $request->validate([
            'number' => 'required', 
            'contact_id' => 'required',
            'issue_date' => 'required',
            'currency' => 'required',
            'tax' => 'required',
        ]);

        $record = new Model();
        $keys = ['number', 'contact_id', 'issue_date', 'currency', 'tax'];
        foreach ($keys as $key) {
            $record->$key = $request->$key;
        }
        $record->save();

        return response(['msg' => "Added $this->model"]);
    }

    public function get($id) {
        $record = Model::find($id);

        $data = [
            'record' => $record,
        ];

        return response($data);
    }

    public function update(Request $request) {
        $request->validate([
            'number' => 'required', 
            'contact_id' => 'required',
            'issue_date' => 'required',
            'currency' => 'required',
            'tax' => 'required',
        ]);

        $record = Model::find($request->id);
        $keys = ['number', 'contact_id', 'issue_date', 'currency', 'tax'];
        foreach ($keys as $key) {
            $upd[$key] = $request->$key;
        }
        $record->update($upd);

        return response(['msg' => "Updated $this->model"]);
    }
}
