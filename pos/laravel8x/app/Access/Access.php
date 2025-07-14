<?php

namespace App\Access;

class Access {
    public function buildCondition($searchParams){
        if( empty($searchParams)) return '';

        $searchParamString = 'WHERE ';
        $index = 0;
        foreach($searchParams as $key => $value) {
            $queryString = $value[0] ." ". $value[1] ." '". $value[2] . "'";
            if( $index > 0 ) $queryString = " AND " . $queryString ;
            $searchParamString = $searchParamString . $queryString;
            $index++;
        }
        return $searchParamString;
    }
}
