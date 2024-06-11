<?php
//aqui van todas las validaciones , lo puedes hacer en el controlador pero es mejor aqui
//php artisan make:request 
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
        //acepte cualquier tipo de validacion
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "title"=>"required|min:5|max:255",
            // "title"=>["required","min:5","max:255"]
            "slug"=>"required|unique:posts",
            //unique para validar si es unico el la tabla posts
            "categoria"=>"required",
            "content"=>"required"
        ];
    }
    // //mensajes necesarios para los errores 
    // public function messages()
    // {
    //     return [ 
    //         "title.required"=>"El :attribute es requerido", //para que attributo nombre aparesca en el mensaje
    //         "title.min"=>"El título debe tener al menos 5 caracteres",
    //         "title.max"=>"El título debe tener máximo 255 caracteres",
    //     ];
    // }
    //modificar los atributos
    public function attributes()
    {
        return [
            "title" => "nombre"
        ];
    }
}
