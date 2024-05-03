<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BrandRequest extends FormRequest
{
    private const ALLOWED_EXTENSION = 'jpg,jpeg,png,webp,gif';
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return 1;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        // get the brand id ( for updating only )
        $currentBrandId = 0;
        if ($this->has('Marque_id')){
            $currentBrandId = $this->get('Marque_id');
        }

        return [
            'Marque_name' =>  ['required', 'string', 'max:150',
                Rule::unique('Marque')->ignore($currentBrandId, 'Marque_id')],
            'Marque_image' => [$currentBrandId != 0 ? 'nullable':'required', 'image', 'mimes:' . self::ALLOWED_EXTENSION]
        ];
    }
}
