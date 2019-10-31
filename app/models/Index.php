<?php
namespace App\Models;

use Leaf\Core\Model;

class Index extends Model {
	public function getNotes() {
		$notes = [
			"title", "title 2", "title 3"
		];
		return $notes;
	}
}