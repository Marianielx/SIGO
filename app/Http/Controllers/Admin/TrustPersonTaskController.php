<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Classes\Logger;
use Illuminate\Http\Request;
use App\Models\{ TrustPerson, TrustPersonTask, Log };
use App\Http\Controllers\Controller;

class TrustPersonTaskController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function index($id)
    {        
        $response['data'] = TrustPerson::find($id);
        $response['pc_data'] = TrustPerson::where("fk_idPc", $id);
        $response['task_data'] = TrustPersonTask::where("fk_idPc", $id)->get();
        return view('admin.pcTask.list.index', $response);
    }

    public function create($id)
    {
        $response['pc_data'] = trustPerson::find($id);
        return view('admin.pcTask.create.index', $response);
    }

    public function store(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'title' => 'required|max:255',
                'description' => 'required|max:255',
                'dateInit' => 'required',
                'dateEnd' => 'required'
            ],
            [
                'title.required' => 'Informar o título',
                'description.required' => 'Informar a descrição',
                'dateInit.required' => 'Informar a data de início',
                'dateEnd.required' => 'Informar a data de términio',
            ]
        );
        try {
            TrustPersonTask::create(
                [
                    'title' => $request->title,
                    'description' => $request->description,
                    'dateInit' => $request->dateInit,
                    'dateEnd' => $request->dateEnd,
                    'fk_idPc' => $id
                ]
            );
        } catch (Exception $e) {
            return redirect()->back()->with('catch', '1');
        }
        $this->Logger->log('info', 'Cadastrou a tarefa de p/c: ' . $request['name']);
        return redirect()->route('admin.pcTask.index', $id)->with('create', '1');
    }

    public function show($idOut, $id)
    {
        $response['pc_data'] = trustPerson::find($idOut);
        $response['task_data'] = TrustPersonTask::find($id);
        $this->Logger->log('info', 'Entrou em editar tarefa de p/c com identificador ' . $id);
        return view('admin.pcTask.details.index', $response);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
