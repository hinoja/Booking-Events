<?php

namespace App\Http\Requests;

use App\Models\Event;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'name' => 'required|unique:events,name|string|max:150',
            'place' => 'required|string|max:150',
            'duration' => 'required|numeric|min:0',
            'type' => 'required|' . Rule::in(array_keys(Event::TYPES)),
            'date' => 'required|date|after:' . now()->format('d-m-Y'),
            'start_at' => 'required',
            'description' => 'required|string|min:255',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:1024',
            'category_id' => 'required|exists:categories,id',
        ];
    }
}
