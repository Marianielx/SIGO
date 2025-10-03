<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Classes\Logger;
use Illuminate\Http\Request;
use App\Models\{ Agent, Mission, AsMission, Log };
use App\Http\Controllers\Controller;

class AsMissionController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function index($id)
    {
        $response['data'] = AsMission::where("fk_idAgent", $id)->get();
        return view('admin.asmission.list.index', $response);
    }

    public function create($id)
    {
        $response['asdata'] = Agent::find($id);
        $response['mission_data'] = Mission::OrderBy('id', 'desc')->get();
        return view('admin.asmission.create.index', $response);
    }

    public function store(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'description' => 'required|max:255',
                'status' => 'required',
                'fk_idMission' => 'required',
                'dateInit' => 'required',
                'dateEnd' => 'required',
                'body' => 'required|max:255',
            ],
            [
                'description.required' => 'Informar a descrição',
                'status.required' => 'Informar o status',
                'fk_idMission.required' => 'Informar a missão',
                'dateInit.required' => 'Informar a data de início',
                'dateEnd.required' => 'Informar a data de términio',
                'body.required' => 'Informar o detalhe de relatório',
            ]
        );
        try {
            AsMission::create(
                [
                    'description' => $request->description,
                    'status' => $request->status,
                    'fk_idMission' => $request->fk_idMission,
                    'fk_idAgent' => $id,
                    'dateInit' => $request->dateInit,
                    'dateEnd' => $request->dateEnd,
                    'body' => $request->body,
                ]
            );
        } catch (Exception $e) {
            return redirect()->back()->with('catch', '1');
        }
        $this->Logger->log('info',  $request['name'] . ': ' . 'Cadastrou uma Missão do agente');
        return redirect()->route('admin.as.show', $id)->with('create', '1');
    }

    public function show($id)
    {
        //
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
