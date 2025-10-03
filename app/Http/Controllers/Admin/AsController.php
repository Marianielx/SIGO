<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Classes\Logger;
use Illuminate\Http\Request;
use App\Models\{ Agent, AsMission, Log };
use App\Http\Controllers\Controller;

class AsController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function index()
    {
        $response['data'] = Agent::OrderBy('id', 'desc')->get();
        return view('admin.as.list.index', $response);
    }

    public function create()
    {
        return view('admin.as.create.index');
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'fullname' => 'required|max:255',
                'covername' => 'required|max:255',
                'gender' => 'required',
                'age' => 'required',
                'province' => 'required',
                'speciality' => 'required',
                'status' => 'required',
                'enterDate' => 'required',
                'image' => 'required|image|mimes:jpg,png,jpeg|max:5000',
            ],
            [
                'fullname.required' => 'Informar o Nome Completo',
                'covername.required' => 'Informar o Codinome',
                'gender.required' => 'Informar o Sexo',
                'age.required' => 'Informar a Idade',
                'province.required' => 'Informar a província',
                'speciality.required' => 'Informar a especialidae',
                'status.required' => 'Informar o Estado',
                'enterDate.required' => 'Informar da data de ingresso',
                'image.required' => 'Selecionar a Foto',
            ]
        );
        $file = $request->file('image')->store('as_image');
        try {
            Agent::create(
                [
                    'fullname' => $request->fullname,
                    'covername' => $request->covername,
                    'gender' => $request->gender,
                    'age' => $request->age,
                    'province' => $request->province,
                    'speciality' => $request->speciality,
                    'status' => $request->status,
                    'enterDate' => $request->enterDate,
                    'image' => $file,
                ]
            );
        } catch (Exception $e) {
            return redirect()->back()->with('catch', '1');
        }
        $this->Logger->log('info', 'Cadastrou agente: ' . $request['name']);
        return redirect()->route('admin.as.index')->with('create', '1');
    }

    public function show($id)
    {
        $response['data'] = Agent::find($id);
        
        $response['total_count'] = AsMission::where("fk_idAgent", $id)->get()->count();

        $response['planned_count'] = AsMission::where("fk_idAgent", $id)->
        where("status", 'Planejada')->count();

        $response['working_count'] = AsMission::where("fk_idAgent", $id)->
        where("status", 'Em Andamento')->count();
       
        $response['closed_count'] = AsMission::where("fk_idAgent", $id)->
        where("status", 'Concluída')->count();
     
        $response['failed_count'] = AsMission::where("fk_idAgent", $id)->
        where("status", 'Falhada')->count();

        $this->Logger->log('info', 'Entrou em informação detalhada do A/S com identificador ' . $id);
        return view('admin.as.details.index', $response);
    }

    public function edit($id)
    {
        $response['data'] = Agent::find($id);
        $this->Logger->log('info', 'Entrou em editar a/s com identificador ' . $id);
        return view('admin.as.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
         $this->validate(
                        $request,
            [
                'fullname' => 'required|max:255',
                'covername' => 'required|max:255',
                'gender' => 'required',
                'age' => 'required',
                'province' => 'required',
                'speciality' => 'required',
                'status' => 'required',
                'enterDate' => 'required'
            ],
            [
                'fullname.required' => 'Informar o Nome Completo',
                'covername.required' => 'Informar o Codinome',
                'gender.required' => 'Informar o Sexo',
                'age.required' => 'Informar a Idade',
                'province.required' => 'Informar a província',
                'speciality.required' => 'Informar a especialidae',
                'status.required' => 'Informar o Estado',
                'enterDate.required' => 'Informar da data de ingresso'
            ]
        );
        if ($file = $request->file('image')) {
            $file = $file->store('as_image');
        } else {
            $file = Agent::find($id)->image;
        }
        try {
            Agent::find($id)->update(
                [
                    'fullname' => $request->fullname,
                    'covername' => $request->covername,
                    'gender' => $request->gender,
                    'province' => $request->province,
                    'speciality' => $request->speciality,
                    'status' => $request->status,
                    'enterDate' => $request->enterDate,
                    'image' => $file,
                ]
            );
        } catch (Exception $e) {
            return redirect()->back()->with('catch', '1');
        }
        $this->Logger->log('info', 'editou a/s: ' . $request['name'] . ' ' . 'com identificador ' . $id);
        return redirect()->route('admin.as.index')->with('edit', '1');
    }

    public function destroy($id)
    {
        //
    }
}
