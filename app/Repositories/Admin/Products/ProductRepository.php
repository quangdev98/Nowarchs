<?php

namespace App\Repositories\Admin\Products;

use App\Models\Admin;
use App\Repositories\Admin\Products\ProductRepositoryInterface;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class ProductRepository implements ProductRepositoryInterface
{
    private $adminModel;
    const TABLE = 'products';

    public function __construct(Admin $adminModel)
    {
        $this->adminModel = $adminModel;
    }

    public function index()
    {
        $db = DB::table(self::TABLE)
        ->leftJoin('categories', 'products.category_id', '=', 'categories.id');
        return $db->select('products.*', 'categories.name as category_name')->orderBy('products.id')->get();
    }

    public function store($_data)
    {
        DB::beginTransaction();
        try {
            if(DB::table(self::TABLE)->insert($_data))
            {
                DB::commit();
                return true;
            }
            DB::rollBack();
            return false;
        } catch (\Exception $e) {
            // dd($e);
            DB::rollBack();
            return false;
        }
    }
}
