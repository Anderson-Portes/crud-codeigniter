<?php

namespace App\Validation;

class Person
{
    public const RULES = [
        'name' => 'required|min_length[3]|max_length[255]',
        'name' => 'required|min_length[3]|max_length[255]',
        'phone' => 'required|numeric|min_length[3]|max_length[255]',
        'address' => 'required|min_length[3]|max_length[255]',
        'company' => 'required|min_length[3]|max_length[255]',
    ];
}
