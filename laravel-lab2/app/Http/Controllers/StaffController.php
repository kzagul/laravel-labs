<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function Show(){
        $staff = Staff::select('staff')
            ->get()
            ->toArray();
        return view ('liststaff', ['data' => $staff, 'title' => 'Профессии', 'header' => 'Список профессий']);
    }

    function ShowResumesByStaffName($staffname){
        $resumes = Person::select('people.id','FIO', 'phone','stage')
            ->join('staff', 'people.staff_id', '=', 'staff.id')
            ->where('staff.staff','=', $staffname)
            ->get()
            ->toArray();
        return view('resume', ['data' => $resumes, 'title'=> 'Резюме', 'header' => "Список резюме професий" . $staffname]);
    }
}
