<?php

namespace App\Http\Controllers\admin\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\userRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class usercontroller extends Controller
{
    protected $model;

    public function __construct(User $model, Carbon $data)
    {
        $this->data = $data;
        $this->model = $model;
        $this->middleware('auth');
    }
    //======================================================================
    public function index()
    {


        $titulo = 'Lista de Usuários';
        $data = $this->data->timezone('UTC + 01');
        $users = $this->model->where('id', '!=', 0)->Simplepaginate();
        return view('SIS.admin.user.index', compact('data', 'titulo', 'users'));
    }
    //============================================================================
    public function create()
    {
        //
        $titulo = 'Cadastrar novo Usuário';
        $data = $this->data->timezone('UTC');
        return view('SIS.admin.user.create', compact('titulo', 'data'));
    }
    //============================================================================

    public function store(userRequest $request)
    {
        //

        $create = $this->model->create($request->all());
        $create->password = Hash::make($request->password);
        // $this->request['password'] = Hash::make($this->request->password);
        $create->save();
        if ($create)

            return redirect()->route('usuario.index')
                ->with('mensagem', 'Usuário Cadastrado com sucesso !');
        return redirect()->back()
            ->with('mensagem', 'Houve um erro ao cadastrar o usuário');
    }
    //============================================================================

    public function show($id)
    {
        //
    }

    //============================================================================
    public function edit($id)
    {
        //
    }

    //============================================================================
    public function update(Request $request, $id)
    {
        //
    }

    //============================================================================
    public function destroy($id)
    {
        //
    }
}
