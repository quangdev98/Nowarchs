<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Services\Admin\AjaxServices;

class AjaxController extends Controller
{

    private $ajaxServices;

	function __construct(AjaxServices $ajaxServices)
	{
		$this->ajaxServices = $ajaxServices;
	}

    public function formStatus()
    {
        try {
            $data = request()->only('id', 'status');
            return response()->json($this->ajaxServices->formStatus($data));
        } catch (\Exception $e){
            return response()->json($e->getMessage());
        }
    }

    // fiter price 
    public function filterPrice()
    {
        try {
            $data = request()->all();
            // $dataResult = $this->ajaxServices->filterPrice($data);
            // $data['index'] =  view('admin::products.index', compact($dataResult))->render();
            // dd(response()->json(array('success' => true, 'html'=>$data)));
            return response()->json($this->ajaxServices->filterPrice($data));
        } catch (\Exception $e) {
            dd($e);
            abort('500');
        }
    }
}
