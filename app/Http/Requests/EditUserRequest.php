<?php

namespace Curso\Http\Requests;

use Curso\Http\Requests\Request;
use Illuminate\Routing\Route;
class EditUserRequest extends Request
{

private $route;

    public function __construct(Route $route )
    {
        $this->route=$route;
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {


        return [
            'first_name' => 'required',
            'last_name'=> 'required',
            //verifique que sea unico
            'email' => 'required|unique:users,email,'.$this->route->getParameter('users'),
            'type'=> 'required|in:user,admin'            ];
    }
}
