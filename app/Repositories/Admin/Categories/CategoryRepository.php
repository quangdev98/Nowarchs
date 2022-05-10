<?php

namespace App\Repositories\Admin\Categories;

use App\Models\Admin;
use App\Repositories\Admin\Categories\CategoryRepositoryInterface;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class CategoryRepository implements CategoryRepositoryInterface
{
    private $adminModel;
    const TABLE = 'categories';

    public function __construct(Admin $adminModel)
    {
        $this->adminModel = $adminModel;
    }

    public function index($data)
    {
        if(isset($data['paginate'])) return DB::table(self::TABLE)->orderBy('id')->paginate($data['paginate']);
        return DB::table(self::TABLE)->orderBy('id')->get();
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

    public function update($_data, $_id)
    {
        DB::beginTransaction();
        try {
            if(DB::table(self::TABLE)->where('id', '=', $_id)->update($_data))
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

    public function delete($_id)
    {
        DB::beginTransaction();
        try {
            if(DB::table(self::TABLE)->where('id', '=', $_id)->delete())
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

    public function formStatus($_data)
    {
        if (request()->ajax()) {
            $record = DB::table(self::TABLE)->where('id', '=', request()->id)->first();
            $_data = [
                'status' => $record->status == 1 ? 2 : 1,
                'updated_at' =>date('Y-m-d H:i:s'),
            ];
            return DB::table(self::TABLE)->where('id', '=', request()->id)->update($_data);
        }
    }
}
