<?php
namespace App\Contracts;

interface PersonServiceInterface {

	/**
	 * Get resources from from api.
	 *
	 * @return void
	 */	
	public function createPerson($inputs);

	public function updatePerson($id, $inputs);

	public function deletePerson($id);
}