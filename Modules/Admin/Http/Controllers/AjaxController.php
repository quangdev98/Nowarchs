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

    public function filterProduct()
    {
        try {
            $data = request()->all();
            return response()->json($this->ajaxServices->filterProduct($data));
        } catch (\Exception $e) {
            // dd($e);
            abort('500');
        }
    }
}
