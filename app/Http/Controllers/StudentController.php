<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStudentRequest;
use App\StudentModel;
use function dump;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CreateStudentRequest $request)
    {
        $data = (object) $request;
        $student = StudentModel::create([
            "firstname" => $data->firstname,
            "lastname" => $data->lastname,
            "surname" => $data->surname,
        ]);
        if (!$student) {
            return response()->json([
                'status' => 409,
                'message' => 'An error occurred while creating record'
            ]);
        }

        return response()->json([
            'status' => 200,
            'message' => 'record successfully created'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function showAll()
    {
        return StudentModel::all();
        $students = StudentModel::orderBy('create_at', 'ASC');
        return response($students, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showOne($id)
    {
        if (StudentModel::where("id", '=', $id)) {
            $student = StudentModel::find($id);
            if (!$student) {
                return [
                    "status" => 404,
                    "message" => 'record not found'
                ];
            };
        }
        return $student;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $student = StudentModel::find($id);
        if (!$student) {
            return [
                "status" => 404,
                "message" => 'record not found'
            ];
        };
        $student->delete();
        return ['message' => 'deltetd succefully'];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
