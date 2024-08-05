<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact as Model;

class ContactController extends Controller
{
    public $ent = 'Contact';

    public function all() {
        $records = Model::all();

        $data = [
            'records' => $records,
        ];

        return response()->json($data);
    }

    public function add(Request $request) {
        $request->validate([
            'name' => 'required',
        ]);

        $record = new Model();

        $keys = [        
            'name',
            'number',
            'picture',
            'type',
            'status',
            'phone_country',
            'phone_area',
            'phone_number',
            'mobile_country',
            'mobile_area',
            'mobile_number',
            'dd_country',
            'dd_area',
            'dd_number',
            'fax_country',
            'fax_area',
            'fax_number',
            'website',
            'brn',
            'notes'
        ];

        foreach ($keys as $key) {
            if ($key == "picture") {

            }
            else {
                $record->$key = $request->$key;
            }
        }

        $record->save();

        return response(['msg' => "Added $this->ent"]);
    }

    public function edit($id) {
        $record = Model::find($id);

        $data = [
            'record' => $record,
        ];

        return response($data);
    }

    public function upd(Request $request) {
        $request->validate([
            'name' => 'required',
        ]);

        $record = Model::find($request->id);
        $keys = [        
            'name',
            'number',
            'picture',
            'type',
            'status',
            'phone_country',
            'phone_area',
            'phone_number',
            'mobile_country',
            'mobile_area',
            'mobile_number',
            'dd_country',
            'dd_area',
            'dd_number',
            'fax_country',
            'fax_area',
            'fax_number',
            'website',
            'brn',
            'notes'
        ];

        foreach ($keys as $key) {
            if ($key == "picture") {

            }
            else {
                $upd[$key] = $request->$key;
            }
        }

        $record->update($upd);

        return response(['msg' => "Updated $this->ent"]);
    }

    public function del($id) {
        $record = Model::find($id)->delete();
        return response(['msg' => "Deleted $this->ent"]);
    }
}
