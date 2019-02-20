<?php

namespace App\Http\Controllers;
use App;

class UpdateCartData extends Controller
{

	public static function updateEnv($key, $newValue, $delim='')
	{

	    $path = base_path('.env');

	    // get old value from current env
	    $oldValue = env($key);

	    // was there any change?
	    if ($oldValue == $newValue) {
	        return;
	    }

	    // rewrite file content with changed data
	    if (file_exists($path)) {
	        // replace current value with new value 
	        file_put_contents(
	            $path, str_replace(
	                $key.'="'.$oldValue.'"', 
	                $key.'="'.$newValue.'"', 
	                file_get_contents($path)
	            )
	        );
	    }
	}
}