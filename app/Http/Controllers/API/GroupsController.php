<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Group as Model;

class GroupsController extends Controller
{
    public function all() {
        $records = Model::all();

        $data = [
            'records' => $records,
        ];

        return response($data);
    }

    public function add(Request $request) {
        $request->validate([
            'name' => 'required',
        ]);

        $record = new Model();
        $record->name = $request->name;
        $record->save();
    }
}
