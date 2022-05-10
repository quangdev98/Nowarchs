<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Modules\Admin\Http\Requests\ProductCreateRequest;
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
        try {
            $data['index'] = $this->productServices->index();
            $data['categories'] = $this->categoryServices->index();
            // dd($data['index']);
            return view('admin::products.index', compact(['data']));
        } catch (\Exception $e) {
            abort('500');
        }
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        // if()
        $data['categories'] = $this->categoryServices->index()->where('status', '=',1);
        return view('admin::products.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(ProductCreateRequest $request)
    {
        try {
            $data = $request->all();
            // dd($data);
            $this->productServices->store($data);
            return redirect()->route('admin.product.index');
        } catch (\Exception $e) {
            dd('$e');
            abort('500');
        }
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
