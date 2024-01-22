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
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            
           'flight_number'=>'required|string',
           'departure_time'=>'date_format H:i',
           'arrival_time'=>'required|after:departure_time',
           'arrival_airport'=>'required|string',
           'departure_airport'=>'nullable|string',
           'status'=>'required|string'
    
        ];
    }
}

