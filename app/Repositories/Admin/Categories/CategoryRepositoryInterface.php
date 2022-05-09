<?php

namespace App\Repositories\Admin\Categories;


interface CategoryRepositoryInterface
{

    public function index();

    public function store($_data);

    public function update($_data, $_id);

    public function delete($_id);
}
