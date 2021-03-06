<?php
function checkInput($id,$go,$input)
{
	if ($go != 0) {
		$data = DB::table('selects')
            ->join('pivot_selectprod', 'pivot_selectprod.select_id', '=', 'selects.id')
            ->where('pivot_selectprod.service_id',$id)->where('pivot_selectprod.is_main',1)
            ->where('selects.type',$input)->get();
        return $data;
	}else{
		return NULL;	
	}
	
}

function checkInputSub($id,$go,$input)
{
	if ($go != 0) {
		$data = DB::table('selects')
            ->join('pivot_selectprod', 'pivot_selectprod.select_id', '=', 'selects.id')
            ->where('pivot_selectprod.service_id',$id)->where('pivot_selectprod.is_main',0)
            ->where('selects.type',$input)->get();
        return $data;
	}else{
		return NULL;	
	}
	
}

function getmainProdName($id)
{
	$name = DB::table('main_prod')->where('id',$id)->get();
    
	return $name[0]->name;
}

function getsubProdName($id)
{
	$name = DB::table('sub_prod')->where('id',$id)->get();
    
	return $name[0]->name;
}

function checkBool($num){
	if ($num == 1) {
		return 'TRUE';
	}else{
		return 'FALSE';
	}
}

function getName($id){
	$data = DB::table('users')->where('id',$id)->get();

	return $data[0]->firstName.' '.$data[0]->lastName;
}

function getFinal($arrs){
	$final = 0;
	foreach ($arrs as $arr) {
		$final += $arr->price;
	}
	return $final;
}
?>