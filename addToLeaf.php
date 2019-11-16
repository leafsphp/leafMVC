<?php

class Handy {
	/**
	 * Add a prefix to a string
	 */
	public function prefix($prefix, $string)
    {
        $string = rtrim($prefix, '/').'/'.ltrim($string, '/');

        $string = trim($uri, '/');

        return $string;
	}
	
	
}