<?php

namespace App\Repositories\Admin;

use App\Models\Admin;
use App\Repositories\Admin\AdminRepositoryInterface;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class AdminRepository implements AdminRepositoryInterface
{
    private $adminModel;
    const TABLE = 'admins';

    public function __construct(Admin $adminModel)
    {
        $this->adminModel = $adminModel;
    }

    public function show($_id)
    {
        return DB::table(self::TABLE)->where('id','=',$_id)->first();
    }
}
