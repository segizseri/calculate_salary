<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;

class CalcController extends Controller
{
    public function salary(){
    	return view('salary');
    }

    public function employeAdd(Request $req){

if($req->get('ccar') == null){
  $ccar = 'false';
} else {
  $ccar = 'true';
}

if($req->get('child') == null){
  $child = '0';
} else {
  $child = request('child');
}
    $employees = new Employe();
    $employees->name = $req->input('name');
    $employees->age = $req->input('age');
    $employees->child = $child;
    $employees->ccar = $ccar;
    $employees->salary = $req->input('salary');
    $employees->save();
 
	return redirect()->route('main-page')->with('success', 'Added to base');   	

    }


    public function list(){

    	$tax = 0.8;

    	$employeesA = Employe::get();

    	$resultArr = array();
    	foreach ($employeesA as $employees) {
    	$child = $employees->child;
    	$age = $employees->age;
    	$ccar = $employees->ccar;
    	$salary = $employees->salary;

    	if ($child > 2){
    		$tax = $tax + 0.02;  
    	} 

    	if ($age > 50){
    		$salary = $salary * 1.07;
    	}

    	$total = $tax * $salary;

    	if ($ccar == 'true'){
    		$total = $total - 500;
    	}


    		$resultArr[$employees->name] = $total;
    	}
    	

		
    	return view('list', compact(['employeesA', 'resultArr']));
    }
}
