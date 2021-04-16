<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SIScontroller extends Controller
{
    protected $model;
    //================================================================================================================
    public function __construct(Carbon $data, User $model)
    {
        $this->data = $data;
        $this->model = $model;
        $this->middleware('auth');
    }


    //==========================================================================================================
    public function index()
    {
        //
        $data = $this->data->timezone('UTC + 01');
        $titulo = 'Painel Principal';
        $users = $this->model;
        return view('SIS.index', compact('titulo', 'data', 'users'));
    }




    //==========================================================================================================
    public function create()
    {
        //
    }



    //==========================================================================================================
    public function store(Request $request)
    {
        //
    }
    //==========================================================================================================

    public function show($id)
    {
        //
    }

    //==========================================================================================================
    public function edit($id)
    {
        //
    }

    //==========================================================================================================
    public function update(Request $request, $id)
    {
        //
    }
    //==========================================================================================================

    public function destroy($id)
    {
        //
    }
}
