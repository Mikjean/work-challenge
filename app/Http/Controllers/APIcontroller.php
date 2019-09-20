<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class APIcontroller extends Controller
{

    //function to insert data into the database

   public function create(Request $request){
       $students = new student();

       $students->firstname = $request->input('firstname');
       $students->secondname = $request->input('secondname');
       $students->email = $request->input('email');
       $students->password = $request->input('password');

       $students->save();
       return response()->json($students);

   }

   // function to show all the students in the database

   public function show(){

    $students = student::all();
    return response()->json($students);
   }
   
   // fetching data by id
   public function showById($id){

    $students = student::find($id);
    return response()->json($students);
   }

   // update student by id

   public function updateStudent(Request $request, $id){

    $students = student::find($id);
    $students->firstname = $request->input('firstname');
    $students->secondname = $request->input('secondname');
    $students->email = $request->input('email');
    $students->password = $request->input('password');

    $students->save();
    return response()->json($students);
   }

   public function deleteStudent($id){

    $students = student::find($id);
    $students->delete();
    return response()->json($students);
   }

}
