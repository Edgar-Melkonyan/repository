<?php

namespace App\Services;

use App\Contracts\PersonServiceInterface;
use App\Models\Person;

class PersonService implements PersonServiceInterface
{
	public function __construct(Person $person)
	{
        $this->person = $person;
	}

    public function createPerson($inputs) {
        $data = [
            'level' => $inputs['level'],
            'name' => $inputs['name'],
            'email' => $inputs['email'],
        ];
        return $this->person->create($data);
    }

    public function updatePerson($id, $inputs) {
        $data = [
            'level' => $inputs['level'],
            'name' => $inputs['name'],
            'email' => $inputs['email'],
        ];
        return $this->person->where('id', $id)->update($data);
    }

    public function deletePerson($id) {
        return $this->person->find($id)->delete();
    }
}