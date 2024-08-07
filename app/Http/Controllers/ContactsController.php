<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

use App\Models\Contact as Model;
use App\Models\Person;
use App\Models\Address;
use App\Models\Group;

class ContactsController extends Controller
{
    public $ent = 'Contact';

    public function index() {
        return view('Contacts/Index');
    }

    public function search($type) {
        if ($type == "all") {
            $where = [
                ["status", "=", Null]
            ];
        }
        else if ($type == "archived") {
            $where = [
                ["status", "=", "Archived"]
            ];
        }
        else {
            $type = substr_replace($type, '', -1);
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

    public function get_groups() {
        $records = Group::all();

        $data = [
            'records' => $records,
        ];

        return response($data);
    }

    public function add_group(Request $request) {
        $request->validate([
            'name' => 'required',
        ]);

        $record = new Group();
        $record->name = $request->name;
        $record->save();
    }

    public function new() {
        return view('Contacts/NewContacts');
    }

    public function add(Request $request) {
        $request->validate([
            'name' => 'required',
        ]);

        $colors = ['#2F4F4F', '#483D8B', '#1E90FF', '#9400D3', '#8FBC8F'];

        $record = new Model();

        $keys = [        
            'name',
            'number',
            'profile_color',
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
            'notes',
            'bank_acc_name',
            'bank_acc_num',
            'details',
            'tax_id_num',
            'currency',
        ];

        foreach ($keys as $key) {
            if ($key == "profile_color") {
                $record->$key = Arr::random($colors);
            }
            else {
                $record->$key = $request->$key;
            }
        }

        $record->save();

        if ($request->anyFilled(['last_name', 'first_name', 'email'])) {
            $request->validate([
                'email' => 'required',
            ]);

            $person = new Person();

            $keys = [
                'last_name',
                'first_name',
                'email',
                'ml_member',
                'contact_id',
            ];
    
            foreach ($keys as $key) {
                if ($key == "contact_id") {
                    $person->$key = $record->id;
                }
                else {
                    $person->$key = $request->$key;
                }
            }
    
            $person->save();
        }

        return response(['msg' => "Added $this->ent"]);
    }

    public function edit() {
        return view('Contacts/EditContacts');
    }

    public function get($id) {
        $record = Model::find($id)->with('people')->first();

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
            'notes',
            'bank_acc_name',
            'bank_acc_num',
            'details',
            'tax_id_num',
            'currency',
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

    public function archive(Request $request) {
        $ids = $request->ids;
        $records = Model::whereIn('id', $ids)->update(['status' => 'Archived']);
        return response(['msg' => "Archived $this->ent"."s"]);
    }
}
