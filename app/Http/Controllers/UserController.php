<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Input;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('users')->pluck('nome');
        return $data;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.crud');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = 'Feito. Ocorreu um erro durante o cadastro. Contacte o administrador do sistema.';
        $validator = Validator::make($request->all(), $this->rules(), $this->message());
        if ($validator->fails()) {
            $message = 'Nome,livro da factura e numero do celular sao Obrigatorios.';
        }
        $input = $request->all();
        $user = new User($input);
        if ($user->save()) {
            $message = 'Feito!Cadastro efectuado com Sucesso';
        }
        return view('users.saveResults')->with('message', $message);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Search for a specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        $keywords = Input::get('keywords');
        $users = User::all();
        $searchUsers = new Collection();
        foreach ($users as $user) {
            if (Str::contains(Str::lower($user->nome), Str::lower($keywords))) {
                $searchUsers->add($user);
            }

        }
        if (count($searchUsers) > 0) {
            $first = $searchUsers->first();
            return view('users.searchResults')->with(['searchUsers' => $searchUsers, 'first' => $first]);
        }
        return view('users.searchResults');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function actualizar(Request $request)
    {
        $message = 'Feito. Ocorreu um erro durante a Operacao. Contacte o administrador do sistema.';
        $validator = Validator::make($request->all(), $this->rules(), $this->message());
        if ($validator->fails()) {
            $message = 'Nome,livro da factura e numero do celular sao Obrigatorios.';
        }
        $user = User::find($request->id);;
        $user->nome = $request->nome;
        $user->factura = $request->factura;
        $user->contracto = $request->contracto;
        $user->celular = $request->celular;
        if ($user->save()) {
            $message = 'Feito!Cadastro efectuado com Sucesso';
        }
        return view('users.editResults')->with('message', $message);

    }

    /**
     * Remove the specified resource from storage.
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function del(Request $request)
    {
        $message = 'Feito. Ocorreu um erro durante a Operacao. Contacte o administrador do sistema.';
        $user=User::find($request->id);
        if ($user->delete()) {
            $message = 'Feito. Opeacao efectuada com sucesso.';
        }
        return view('users.editResults')->with('message', $message);

    }

    public
    function rules()
    {
        return [
            'nome' => 'required',
            'factura' => 'required|numeric',
            'contracto' => 'required|numeric',
            'celular' => 'required',

        ];
    }

    public
    function message()
    {
        return [
            'nome.required' => 'Nome é Obrigatorio',
            'factura.required' => 'Livro da factura é Obrigatorio',
            'contracto.required' => 'Numero do Contracto é Obrigatorio',
            'celular.required' => 'Numero do celular é Obrigatorio',

        ];
    }
}
