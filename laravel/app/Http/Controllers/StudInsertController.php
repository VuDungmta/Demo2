<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Users;
use DB;
use Excel;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class StudInsertController extends Controller
{
     public function insertform(){
      return view('stud_create');
   }
	
	
     public function insert(Request $request){
     $pass=$request->input('stud_pass');
      $name = $request->input('stud_name');//
     // DB::insert("insert into Users(name, pass) values ('dung12','nga')");
      DB::insert('insert into Users (name,pass)values(?,?)',[$name,$pass]);
       header('Location: /show');
       exit;
   }
    public function ShowList(){
      $users = DB::select('select * from Users');
      return view('Users_view',['users'=>$users]);
   }
    public function destroy($id) {
      DB::delete('delete from Users where id = ?',[$id]);
      echo "Record deleted successfully.<br/>";
      echo '<a href="/show">Click Here</a> to go back.';
   }
   public function DowloadExcel()
   {
 

 // work on the export
        return $export->sheet('sheetName', function($sheet)
        {

        })->export('xls');
        }
   
    //
}
