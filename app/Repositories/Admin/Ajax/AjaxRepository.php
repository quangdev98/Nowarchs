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

    public function filterProduct($_data)
    {
        // dd($_data);
        if (request()->ajax()) {
            $table = $_data['table'];
            $db = DB::table($table)
            ->leftJoin('categories', 'products.category_id', '=', 'categories.id')
            ->select('products.*', 'categories.name as category_name')->orderBy('products.id');
            if(isset($_data['this_ajax']) && isset($_data['price_min']) && isset($_data['price_max']))
            {
                $db = $db->where('products.price', '>=', $_data['price_min'])
                ->where('products.price', '<=', $_data['price_max']);
            }
            if(isset($_data['this_ajax']) && isset($_data['search']))
            {
                $db->where('products.name', 'LIKE', '%'.$_data['search'].'%')
                ->orWhere('categories.name', 'LIKE', '%'.$_data['search'].'%');
            }
            if(isset($_data['id_category']))
            {
                $db->where('categories.id', $_data['id_category']);
            }
            if(isset($_data['reset']))
            {
                return $db->paginate(10);
            }
            return $db->paginate(10);
        }
    }
}
