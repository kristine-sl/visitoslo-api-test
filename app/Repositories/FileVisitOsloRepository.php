<?php

namespace App\Repositories; 

use App\Repositories\Contracts\VisitOsloRepository; 

class FileVisitOsloRepository implements VisitOsloRepository {

	public function getAll() {

		return [ simplexml_load_file( storage_path() . '/app/sample.xml' ) ]; 
	}
}