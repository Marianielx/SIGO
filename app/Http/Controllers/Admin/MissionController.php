<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Classes\Logger;
use Illuminate\Http\Request;
use App\Models\{ Mission, Log };
use App\Http\Controllers\Controller;

class MissionController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function index()
    {
        $response['data'] = Mission::OrderBy('id', 'desc')->get();
        return view('admin.mission.list.index', $response);
    }

    public function create()
    {
        return view('admin.mission.create.index');
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'description' => 'required|max:255'
            ],
            [
                'description.required' => 'Informar a descrição'
            ]
        );
        try {
            Mission::create(
                [
                    'description' => $request->description
                ]
            );
        } catch (Exception $e) {
            return redirect()->back()->with('catch', '1');
        }
        $this->Logger->log('info',  $request['name'] . ': ' . 'Cadastrou uma Missão');
        return redirect()->route('admin.mission.index')->with('create', '1');
    }

    public function show($id)
    {
        $response['data'] = Mission::find($id);
        $this->Logger->log('info', 'Entrou em informação detalhada da missão com identificador ' . $id);
        return view('admin.mission.details.index', $response);
    }

    public function edit($id)
    {
         $response['data'] = Mission::find($id);
        $this->Logger->log('info', 'Entrou em editar missão com identificador ' . $id);
        return view('admin.mission.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'description' => 'required|max:255'
            ],
            [
                'description.required' => 'Informar a descrição'
            ]
        );
        try {
            Mission::find($id)->update(
                [
                    'description' => $request->description
                ]
            );
        } catch (Exception $e) {
            return redirect()->back()->with('catch', '1');
        }
        $this->Logger->log('info',  $request['name'] . ': ' . 'Editou uma Missão');
        return redirect()->route('admin.mission.index')->with('edit', '1');
    }

    public function destroy($id)
    {
        //
    }
}
