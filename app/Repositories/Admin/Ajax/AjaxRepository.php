<?php

namespace App\Repositories\Admin\Ajax;

use App\Models\Admin;
use App\Repositories\Admin\Ajax\AjaxRepositoryInterface;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class AjaxRepository implements AjaxRepositoryInterface
{
    private $adminModel;

    public function __construct(Admin $adminModel)
    {
        $this->adminModel = $adminModel;
    }

    public function formStatus($_data)
    {
        if (request()->ajax()) {
            $table = request()->table;
            $record = DB::table($table)->where('id', '=', request()->id)->first();
            $_data = [
                'status' => $record->status == 1 ? 2 : 1,
                'updated_at' =>date('Y-m-d H:i:s'),
            ];
            return DB::table($table)->where('id', '=', request()->id)->update($_data);
        }
    }
}
