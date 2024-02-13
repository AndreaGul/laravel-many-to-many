<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProjectRequest extends FormRequest
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
            'title' => ['required','max:60',Rule::unique('projects')->ignore($this->project)],
            'slug' => 'nullable|string|max:100',
            'author' => 'required|string|max:40',
            'description' => 'nullable|string',
            'creation_date' => 'nullable|date',
            'last_update' => 'nullable|date',
            'contributors' => 'nullable|string|max:300',
            'lang' => 'nullable|string|max:60',
            'link_github' => 'nullable|url',
            'type_id'=>'nullable|exists:types,id',
            'technologies'=>'nullable|exists:technologies,id',
        ];
    }
}
