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
        return DB::table(self::TABLE)->orderBy('id')->get();
    }
}
