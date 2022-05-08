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

    public function index()
    {
        return DB::table(self::TABLE)->orderBy('id')->get();
    }
}
