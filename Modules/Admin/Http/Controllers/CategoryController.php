<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\CategoryRequest;
use Modules\Admin\Http\Requests\CategoryEditRequest;
use App\Services\Admin\CategoryServices;

class CategoryController extends Controller
{

    private $categoryServices;

	function __construct(CategoryServices $categoryServices)
	{
		$this->categoryServices = $categoryServices;
	}

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $data['category'] = $this->categoryServices->index();
        return view('admin::categories.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('admin::categories.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(CategoryRequest $request)
    {
        try {
            $data = $request->all();
            if(!$this->categoryServices->store($data))
            {
                return redirect()->back();
            }
            return redirect()->route('admin.categories.index')->with('success','Thêm thể loại thành công!');
        } catch (\Exception $e) {
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
    public function update(CategoryEditRequest $request, $id)
    {
        try {
            $data = $request->all();
            if(!$this->categoryServices->update($data, $id))
            {
                return redirect()->back();
            }
            return redirect()->back();
        } catch (\Exception $e) {
            abort('500');
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        try {
            if(!$this->categoryServices->delete($id))
            {
                return redirect()->back();
            }
            return redirect()->back();
        } catch (\Exception $e) {
            abort('500');
        }
    }
}
