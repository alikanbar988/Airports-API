<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class flight extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'airline_id'=>'nullable|string',
            'flight_number'=>'required|string',
            'departure_time'=>'date_formatH:i',
            'arrival_airport'=>'required|string',
            'arrival_time'=>'date_formatH:i',
            'departure_airport'=>'nullable|string',
            'status'=>'required|string'
        ];
    }
}
