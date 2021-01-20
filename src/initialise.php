<?php

namespace andyp\taxonomy\extra;

class initialise
{

    public function __construct()
    {

        // ┌─────────────────────────────────────────────────────────────────────────┐
        // │                            Include Field Groups    	        	     │
        // └─────────────────────────────────────────────────────────────────────────┘
        require __DIR__.'/acf/acf_field_groups.php';
        
    }

}