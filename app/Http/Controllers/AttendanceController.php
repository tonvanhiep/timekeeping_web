<?php

namespace App\Http\Controllers;

use App\Models\EmployeesModel;
use App\Models\FaceEmployeeImagesModel;
use App\Models\TimesheetsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class AttendanceController extends Controller
{
    public function index()
    {
        $image = new FaceEmployeeImagesModel;
        $image = $image->getImages([]);
        //dd($image->toArray());
        $arr = [];
        foreach ($image as $key => $value) {
            $name = $value->id;
            if (isset($arr[$name])) {
                array_push($arr[$name], $value->image_url);
            }
            else {
                $arr[$name] = [];
                array_push($arr[$name], $value->image_url);
            }
        }
        return view('attendance.check-in', compact('arr'));
    }

    public function recognition()
    {
        $image = new FaceEmployeeImagesModel;
        $image = $image->getImages([]);
        //dd($image->toArray());
        $arr = [];
        foreach ($image as $key => $value) {
            $name = $value->id;
            if (isset($arr[$name])) {
                array_push($arr[$name], $value->image_url);
            }
            else {
                $arr[$name] = [];
                array_push($arr[$name], $value->image_url);
            }
        }
        return view('attendance.face-recognition', compact('arr'));
    }

    public function attendance(Request $request)
    {
        $employee = new EmployeesModel();
        $attendance = new TimesheetsModel();

        $employee = $employee->getEmployees(['id' => $request->id, 'status' => 1]);
        if (count($employee) == 0) return response()->json([
            'success' => false,
            'message'   =>  'Nguoi dung khong hop le.'
        ]);
        $folderPath = public_path('storage\image-checkin\\');
        $image_parts = explode(";base64,", $request->image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);

        $file_name = $employee[0]->last_name . $employee[0]->first_name . time(). rand(0,10000) . '.' . $image_type;

        file_put_contents($folderPath . $file_name, $image_base64);
        $data = [
            'employee_id' => $employee[0]->id,
            'face_image' => $file_name,
            'status' => $request->identity == 'true' ? 1 : 2,
            'timekeeper_id' => 4 //$request->timekeeper_id
        ];
        $attendance->saveAttendance($data);

        if ($request->identity == 'true') {
            $message = 'ID:' . $employee[0]->id . '| ' . $employee[0]->last_name . ' ' . $employee[0]->first_name . ' diem danh thanh cong!!!';
        } else {
            $message = 'ID:' . $employee[0]->id . '| ' . $employee[0]->last_name . ' ' . $employee[0]->first_name . ' da gui yeu cau diem danh.';
        }
        $data = [
            'success' => true,
            'message'   =>  $message
        ];

        return response()->json($data);
    }
}
