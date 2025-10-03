<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Classes\Logger;
use Illuminate\Http\Request;
use App\Models\{ Offop, Log };
use App\Http\Controllers\Controller;

class OffopController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function index()
    {
        $response['data'] = Offop::OrderBy('id', 'desc')->get();
        return view('admin.offop.list.index', $response);
    }

    public function create()
    {
        return view('admin.offop.create.index');
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'fullname' => 'required|max:255',
                'birthdate' => 'required',
                'gender' => 'required',
                'cardnumber' => 'required|max:20',
                'patent' => 'required',
                'nip' => 'required|max:20',
                'unity' => 'required|max:255',
                'province' => 'required',
                'image' => 'required|image|mimes:jpg,png,jpeg|max:5000',
            ],
            [
                'fullname.required' => 'Informar o Nome Completo',
                'birthdate.required' => 'Informar a Data de Nascimento',
                'gender.required' => 'Informar o Sexo',
                'cardnumber.required' => 'Informar o número do bilhete',
                'patent.required' => 'Informar a Patente',
                'nip.required' => 'Informar o Número do NIP',
                'unity.required' => 'Informar a Unidade Militar',
                'province.required' => 'Informar a Província',
                'image.required' => 'Selecionar a Foto',
            ]
        );
        $file = $request->file('image')->store('official_operative_image');
        try {
            Offop::create(
                [
                    'fullname' => $request->fullname,
                    'birthdate' => $request->birthdate,
                    'gender' => $request->gender,
                    'cardnumber' => $request->cardnumber,
                    'patent' => $request->patent,
                    'nip' => $request->nip,
                    'unity' => $request->unity,
                    'province' => $request->province,
                    'image' => $file,
                ]
            );
        } catch (Exception $e) {
            return redirect()->back()->with('catch', '1');
        }
        $this->Logger->log('info', 'Cadastrou O/O: ' . $request['name']);
        return redirect()->route('admin.offop.index')->with('create', '1');
    }

    public function show($id)
    {
        $response['data'] = Offop::find($id);
        $this->Logger->log('info', 'Entrou em informação detalhada do oficial operativo com identificador ' . $id);
        return view('admin.offop.details.index', $response);
    }

    public function edit($id)
    {
        $response['data'] = Offop::find($id);
        $this->Logger->log('info', 'Entrou em editar oficial operativo com identificador ' . $id);
        return view('admin.offop.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'fullname' => 'required|max:255',
                'birthdate' => 'required',
                'gender' => 'required',
                'cardnumber' => 'required|max:20',
                'patent' => 'required',
                'nip' => 'required|max:20',
                'unity' => 'required|max:255',
                'province' => 'required'
            ],
            [
                'fullname.required' => 'Informar o Nome Completo',
                'birthdate.required' => 'Informar a Data de Nascimento',
                'gender.required' => 'Informar o Sexo',
                'cardnumber.required' => 'Informar o número do bilhete',
                'patent.required' => 'Informar a Patente',
                'nip.required' => 'Informar o Número do NIP',
                'unity.required' => 'Informar a Unidade Militar',
                'province.required' => 'Informar a Província'
            ]
        );
        if ($file = $request->file('image')) {
            $file = $file->store('official_operative_image');
        } else {
            $file = Offop::find($id)->image;
        }
        try {
            Offop::find($id)->update(
                [
                    'fullname' => $request->fullname,
                    'birthdate' => $request->birthdate,
                    'gender' => $request->gender,
                    'cardnumber' => $request->cardnumber,
                    'patent' => $request->patent,
                    'nip' => $request->nip,
                    'unity' => $request->unity,
                    'province' => $request->province,
                    'image' => $file,
                ]
            );
        } catch (Exception $e) {
            return redirect()->back()->with('catch', '1');
        }
        $this->Logger->log('info', 'editou: ' . $request['name'] . ' ' . 'com identificador ' . $id);
        return redirect()->route('admin.offop.index')->with('edit', '1');
    }

    public function destroy($id)
    {
        //
    }
}
