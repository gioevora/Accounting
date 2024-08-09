<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Account as Model;

class AccountsController extends Controller
{
    public $model = 'Account';

    public function search($type) {
        if ($type == "all") {
            $where = [["status", "=", Null]];
        }
        else if ($type == "archived") {
            $where = [["status", "=", "Archived"]];
        }

        $records = Model::where($where)->get();

        $data = [
            'records' => $records,
        ];

        return response($data);
    }

    public function add(Request $request) {
        $request->validate([
            'type' => 'required',
            'code' => 'required',
            'name' => 'required',
        ]);

        $record = new Model();

        $keys = [
            'code',
            'name',
            'type',
            'description',
            'tax',
            'settings',
        ];

        $s_keys = ['on_dw', 'on_ec', 'payments'];

        foreach ($keys as $key) {
            if ($key == "settings") {
                foreach ($s_keys as $s_key) {
                    if ($request->filled($key)) {
                        in_array($s_key, $request->$key) ? $value = 1 : $value = 0;
                    }
                    else { $value = 0; }
                    $record->$s_key = $value;
                }
            }
            else {
                $record->$key = $request->$key;
            }
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
            'type' => 'required',
            'code' => 'required',
            'name' => 'required',
        ]);

        $record = Model::find($request->id);

        $keys = [
            'code',
            'name',
            'type',
            'description',
            'tax',
            'settings',
        ];

        $s_keys = ['on_dw', 'on_ec', 'payments'];

        foreach ($keys as $key) {
            if ($key == "settings") {
                foreach ($s_keys as $s_key) {
                    if ($request->filled($key)) {
                        in_array($s_key, $request->$key) ? $value = 1 : $value = 0;
                    }
                    else { $value = 0; }
                    $upd[$s_key] = $value;
                }
            }
            else {
                $upd[$key] = $request->$key;
            }
        }

        $record->update($upd);

        return response(['msg' => "Updated $this->model"]);
    }
}
