<?php

namespace App\Repositories\Admin\Products;


interface ProductRepositoryInterface
{

    public function index();

    public function store($_data);
}
