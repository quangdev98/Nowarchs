<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductEditRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                'name' => 'required|min:4',
                'price' => 'required|numeric',
                'number_sale'=> 'nullable|numeric',
                'contents' =>'required',
                'images' =>'mimes:jpeg,jpg,png,gif|max:10000',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function messages(){
        return [
            'name.required'=>'Bạn chưa nhập tên sản phẩm',
            'price.required' =>'Bạn chưa nhập giá sản phẩm',
            'contents.required'=>'Bạn chưa nhập Nội dung',
            'number_sale.numeric'=>'Vui lòng nhập số',
            'images.required'=>'Bạn chưa nhập image',
            'images.max'=>'File qua dung lượng',
        ];
    }
}
