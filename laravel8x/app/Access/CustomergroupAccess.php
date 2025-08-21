<?php

namespace App\Access;
use DB;

class CustomergroupAccess extends Access{

    private $table = 'customergroup';

    public function search($request){
        $searchParams = [];

        if( !empty($request->customergroup_name) ){
            $searchParams[] = ['customergroup_name', 'like', '%' . $request->customergroup_name . '%'];
        }

        return $this->buildCondition($searchParams);
    }

    public function get( $request ){
        $query = DB::table($this->table);
        $searchParams = $this->search($request);

        if( !empty( $searchParams ) ){
            $query->where($searchParams);
        }
        return $query->orderBy('customergroup_name')->get();
    }

    public function first( $searchParams ){
        $query = DB::table($this->table);

        if( !empty( $searchParams ) ){
            $query->where($searchParams);
        }
        return $query->first();
    }

    public function insert($params){
        DB::table($this->table)->insert([
            'customergroup_name' => $params['customergroup_name'],
            'customergroup_description'   => $params['customergroup_description']
        ]);
    }

    public function update($params){
        $update['customergroup_name'] = $params['customergroup_name'];
        $update['customergroup_description'] = $params['customergroup_description'];

        DB::table($this->table)
            ->where('customergroup_id', $params->customergroup_id)
            ->update($update);
    }

    public function delete( $searchParams ){
        return DB::table($this->table)->where($searchParams)->delete();
    }

}
