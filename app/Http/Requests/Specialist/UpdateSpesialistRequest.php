<?php

namespace App\Http\Requests\Specialist;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\MasterData\Specialist;
use Symfony\Component\HttpFoundation\Response;
// this rule only at update request
use Illuminate\Validation\Rule;
class UpdateSpesialistRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => [
                'required', 'string', 'max:255', Rule::unique('specialist')->ignore($this->specialist)
            ],
            'price' => [
                'required', 'string', 'max:255'
            ]
        ];
    }
}
