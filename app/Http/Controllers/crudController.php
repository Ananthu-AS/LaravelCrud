<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    public function dash(){
        $data = DB::table('employees')->get();
        return view("crud",compact('data')); 
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'place' => 'required',
            'employee_id' => 'required',
        ]);

        $employee = new Employee();
        $employee->name = $request->name;
        $employee->place = $request->place;
        $employee->employee_id = $request->employee_id;

        $res = $employee->save();
        
        $data=array();
        if ($res) {
            $data = DB::table('employees')->get();
            return view("crud",compact('data')); 
            
        } else {
            return back()->with('fail', 'Oops, something went wrong.');
        }
    }
    
    public function delete($id){
        DB::table('employees')->where('id', '=', $id)->delete();
        return redirect()->to('/'); 
    }

}
