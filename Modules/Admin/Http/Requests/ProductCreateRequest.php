<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                'name' => 'required|min:4|unique:products,name,'.request()->route('id'),
                'price' => 'required|numeric',
                'number_sale' => 'nullable|numeric',
                'contents' =>'required||unique:products,contents,'.request()->route('id'),
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
            'name.unique'=>'Tiêu đề đã tồn tại',
            'number_sale.numeric'=>'Vui lòng nhập số',
            'contents.required'=>'Bạn chưa nhập Nội dung',
            'images.required'=>'Bạn chưa nhập image',
            'images.max'=>'File qua dung lượng',
        ];
    }
}
