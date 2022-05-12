<?php

namespace App\Repositories\Admin\Products;

use App\Models\Admin;
use App\Helpers\Helpers;
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

    public function index($data)
    {
        $db = DB::table(self::TABLE)
        ->leftJoin('categories', 'products.category_id', '=', 'categories.id');
        if(isset($data['paginate'])) return $db->select('products.*', 'categories.name as category_name')->orderBy('products.id')->paginate($data['paginate']);
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
            DB::rollBack();
            return false;
        }
    }

    public function edit($id)
    {
        return DB::table(self::TABLE)->where('id', $id)->first();
    }

    public function update($data, $id)
    {
        DB::beginTransaction();
        try {
            if(DB::table(self::TABLE)->where('id', $id)->update($data))
            {
                DB::commit();
                return true;
            }
            DB::rollBack();
            return false;
        } catch (\Exception $e) {
            DB::rollBack();
            return false;
        }
    }

    public function delete($id)
    {
        DB::beginTransaction();
        try {
            $imageDelete = Helpers::HandleDeleteImage('products', 'products', $id);
            if($imageDelete && DB::table(self::TABLE)->where('id', '=', $id)->delete())
            {
                DB::commit();
                return true;
            }
            DB::rollBack();
            return false;
        } catch (\Exception $e) {
            DB::rollBack();
            return false;
        }
    }

    public function show($id)
    {
        return DB::table(self::TABLE)->where('id', $id)->first();
    }

    public function getCategory()
    {
        return DB::table(self::TABLE)
        ->rightJoin('categories', 'products.category_id', '=', 'categories.id')
        ->select('categories.*', DB::raw('COUNT(products.category_id) as count_number'))
        ->groupBy('categories.id')->get();

    }

}
