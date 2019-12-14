<?php
namespace App\Models;

class Index extends ApplicationModel {
	public function getNotes() {
		$notes = [
			"title", "title 2", "title 3"
		];
		return $notes;
	}
}