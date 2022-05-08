<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Services\Admin\CategoryServices;
use App\Services\Admin\ProductServices;

class ProductController extends Controller
{

    private $categoryServices;
    private $productServices;

	function __construct(CategoryServices $categoryServices, ProductServices $productServices)
	{
        $this->categoryServices = $categoryServices;
		$this->productServices = $productServices;
	}

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $data['index'] = $this->productServices->index();
        // dd($data['index']);
        return view('admin::products.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        // if()
        $data['categories'] = $this->categoryServices->index();
        return view('admin::products.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('admin::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
