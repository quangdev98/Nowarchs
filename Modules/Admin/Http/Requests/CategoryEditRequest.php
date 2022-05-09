<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryEditRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:4|unique:categories,name,'.request()->route('id'),
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

    // messages

    public function messages(){
        return [
            'name.required'=>'Bạn chưa nhập tên danh mục',
            'name.unique'=>'Danh mục đã tồn tại!',
        ];
    }
}
