<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name' => 'required',
            'last_name' => 'nullable',
            'gender' => 'nullable',
            'remark' => 'nullable',
            'monthly_salary' => 'required|numeric',
            'per_day_salary' => 'required|numeric',
            'duty_hour' => 'required|numeric',
            'per_hour' =>'required|numeric',
            'salary_increase_date' => 'nullable',
            'transportation_cost' => 'nullable|numeric',
            'security_deposit' => 'nullable|numeric',
            'interest_salary_deposit' => 'nullable|numeric',
            'old_rate' => 'nullable|numeric',
            'old_rate_date' => 'nullable'
        ];
    }
}
