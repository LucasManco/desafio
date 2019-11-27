<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class FormController extends Controller
{
    public function store(Request $request)
    {
        // VALIDAR OS INPUTS DO FORMULARIO
        $rules = [
          'nome' => 'string|required',
          'telefone' => 'required',
          'email'	=> 'email|required',
          'mensagem'	=> 'string|size:10|required'

      ];

        $messages = [
          'nome.required' => 'O campo nome é obrigatório.',
          'nome.string' => 'O campo nome é obrigatório.',

          'telefone.required' => 'O campo telefone é obrigatório',

          'email.required' => 'O campo e-mail é obrigatório',
          'email.email' => 'Formato de e-mail inválido.',

          'mensagem.required' => 'O campo mensagem é obrigatório',
          'mensagem.size' => 'Favor inserir uma mensagem de pelo menos 10 caracteres.',
          'mensagem.string' => 'Formato de mensagem inválido.',

      ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            flash('Welcome Aboard!');
            return response()->json(['status' => 'error', 'msg' => $validator->errors()]);
        }
        flash('Welcome Aboard!');
        return response()->json(['status' => 'success', 'msg' => [['msg' => 'Crm armazenado com sucesso']]]);
    }
}
