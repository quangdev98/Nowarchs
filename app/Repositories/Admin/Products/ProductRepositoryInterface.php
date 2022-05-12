<?php

namespace App\Repositories\Admin\Products;


interface ProductRepositoryInterface
{

    public function index($data);

    public function store($_data);

    public function edit($id);

    public function update($data, $id);

    public function delete($id);

    public function show($id);

    public function getCategory();

}
