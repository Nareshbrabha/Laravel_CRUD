<?php

namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Http\Request;

class displayBasha extends Controller
{
    public function index(){
        $daa=student::all();
        return view('welcome',compact('daa'));

    }
    public function adduser(Request $add)
    {
        try {
            $add->validate([
                'name' => 'required',
                'dept' => 'required'
            ]);

            // User::create([
            //     'name' => $request->name,
            //     'dept' => $request->dept
            // ]);

            student::create($add->all());

            return response()->json([
                'status' => 200,
                'message' => 'User added successfully!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 500,
                'message' => 'Something went wrong!'
            ]);
        }
    }
    public function deluser($id)
    {
        try {
            $deluser = student::findOrFail($id);
            $deluser->delete();

            return response()->json([
                'status' => 200,
                'message' => 'User deleted successfully!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 500,
                'message' => 'Something went wrong!'
            ]);
        }
    }
    public function editview($id)
    {
        try {
            $editview = student::findOrFail($id);

            return response()->json([
                'status' => 200,
                'data' => [
                    'id' => $editview->id,
                    'name' => $editview->name,
                    'dept' => $editview->dept
                ]
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 404,
                'message' => 'User not found!'
            ]);
        }  
    }
    public function edit(Request $request, $id)
    {
        try {

            $edit = student::findOrFail($id);


            // $user->update([
            //     'name' => $request->name,
            //     'dept' => $request->dept
            // ]);
            $edit->update($request->all());

            return response()->json([
                'status' => 200,
                'message' => 'User Updated successfully!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 500,
                'message' => 'Something went wrong!'
            ]);
        }
    }
}
