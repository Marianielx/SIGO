<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Classes\Logger;
use Illuminate\Http\Request;
use App\Models\{ trustPerson, Log };
use App\Http\Controllers\Controller;

class TrustPersonController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function index()
    {
        $response['data'] = trustPerson::OrderBy('id', 'desc')->get();
        return view('admin.pc.list.index', $response);
    }

    public function create()
    {
        return view('admin.pc.create.index');
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'fullName' => 'required|max:255',
                'relationShip' => 'required|max:255',
                'cellPhone' => 'required|max:20',
                'province' => 'required',
                'birthDate' => 'required',
                'gender' => 'required',
                'image' => 'required|image|mimes:jpg,png,jpeg|max:5000',
            ],
            [
                'fullName.required' => 'Informar o Nome Completo',
                'relationShip.required' => 'Informar a relação',
                'cellPhone.required' => 'Informar o telefone',
                'province.required' => 'Informar a província',
                'birthDate.required' => 'Informar a data de nascimento',
                'gender.required' => 'Informar o sexo',
                'image.required' => 'Selecionar a foto',
            ]
        );
        $file = $request->file('image')->store('pc_image');
        try {
            trustPerson::create(
                [
                    'fullName' => $request->fullName,
                    'relationShip' => $request->relationShip,
                    'cellPhone' => $request->cellPhone,
                    'province' => $request->province,
                    'birthDate' => $request->birthDate,
                    'gender' => $request->gender,
                    'image' => $file,
                ]
            );
        } catch (Exception $e) {
            return redirect()->back()->with('catch', '1');
        }
        $this->Logger->log('info', 'Cadastrou o p/c: ' . $request['name']);
        return redirect()->route('admin.pc.index')->with('create', '1');
    }

    public function show($id)
    {
        $response['data'] = trustPerson::find($id);
        $this->Logger->log('info', 'Entrou em informação detalhada do P/C com identificador ' . $id);
        return view('admin.pc.details.index', $response);
    }

    public function edit($id)
    {
        $response['data'] = trustPerson::find($id);
        $this->Logger->log('info', 'Entrou em editar p/c com identificador ' . $id);
        return view('admin.pc.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
         $this->validate(
            $request,
            [
                'fullName' => 'required|max:255',
                'relationShip' => 'required|max:255',
                'cellPhone' => 'required|max:20',
                'province' => 'required',
                'birthDate' => 'required',
                'gender' => 'required'
            ],
            [
                'fullName.required' => 'Informar o Nome Completo',
                'relationShip.required' => 'Informar a relação',
                'cellPhone.required' => 'Informar o telefone',
                'province.required' => 'Informar a província',
                'birthDate.required' => 'Informar a data de nascimento',
                'gender.required' => 'Informar o sexo'
            ]
        );
        if ($file = $request->file('image')) {
            $file = $file->store('pc_image');
        } else {
            $file = trustPerson::find($id)->image;
        }
        try {
            trustPerson::find($id)->update(
                [
                    'fullName' => $request->fullName,
                    'relationShip' => $request->relationShip,
                    'cellPhone' => $request->cellPhone,
                    'province' => $request->province,
                    'birthDate' => $request->birthDate,
                    'gender' => $request->gender,
                    'image' => $file,
                ]
            );
        } catch (Exception $e) {
            return redirect()->back()->with('catch', '1');
        }
        $this->Logger->log('info', 'editou a/s: ' . $request['name'] . ' ' . 'com identificador ' . $id);
        return redirect()->route('admin.pc.index')->with('edit', '1');
    }

    public function destroy($id)
    {
        //
    }
}
