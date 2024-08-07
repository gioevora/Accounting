<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Account as Model;

class AccountingController extends Controller
{
    public $ent = 'Account';

    public function accounts() {
        return view('Accounting/BankAccounts');
    }

    public function new() {
        return view('Accounting/NewBankAccounts');
    }

    public function transfer() {
        return view('Accounting/TransferMoney');
    }

    public function rules() {
        return view('Accounting/BankRules');
    }

    public function create_rules() {
        return view('Accounting/CreateRule');
    }

    public function chart_accounts() {
        return view('Accounting/ChartAccounts');
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

        foreach ($keys as $key) {
            if ($key == "settings") {
                $setting_keys = ['on_dw', 'on_ec', 'payments'];

                foreach ($setting_keys as $setting_key) {
                    in_array($setting_key, $request->settings) ? $value = 1 : $value = 0;
                    $record->$setting_key = $value;
                }
            }
            else {
                $record->$key = $request->$key;
            }
        }

        $record->save();

        return response(['msg' => "Added $this->ent"]);
    }
}
