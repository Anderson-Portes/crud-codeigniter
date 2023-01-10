<?php

namespace App\Controllers;

use App\Models\Person as ModelsPerson;
use App\Validation\Person as ValidationPerson;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\RESTful\ResourceController;

class Person extends ResourceController
{
    private ModelsPerson $personModel;

    public function __construct()
    {
        $this->personModel = new ModelsPerson;
    }

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $people = $this->personModel->orderBy('id', 'desc')->findAll();
        return view('person/index', compact('people'));
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        return view('person/new');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        if ($this->validate(ValidationPerson::RULES)) {
            $data = $this->request->getRawInput();
            $this->personModel->insert($data);
            return redirect()->back()->with('success', 'Person created successfully!');
        }
        return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $person = $this->personModel->find($id);
        return view('person/edit', compact('person'));
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        if (!$this->personModel->find($id)) throw  PageNotFoundException::forPageNotFound('Person Not Found!');
        if ($this->validate(ValidationPerson::RULES)) {
            $data = $this->request->getRawInput();
            $this->personModel->update($id, $data);
            return redirect()->back()->with('success', 'Person updated successfully!');
        }
        return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->personModel->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Person deleted successfully!');
    }
}
