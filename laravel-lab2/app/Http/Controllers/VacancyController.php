<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    public function Show(){
        $vacancies = Vacancy::select('staff.staff', 'firms.name', 'firms.address', 'vacancies.id')
            ->join('staff', 'vacancies.staff_id', '=', 'staff.id')
            ->join('firms', 'vacancies.firm_id', '=', 'firms.id')
            ->get()
            ->toArray();
        return view ('vacancies',['data' => $vacancies, 'title' => 'Вакансии']);
    }

    public function ShowById($id){
        $id = $id *10/10;
        $vacancies = Vacancy::select('staff.staff', 'firms.name', 'firms.address', 'vacancies.id')
            ->join('staff', 'vacancies.staff_id', '=', 'staff.id')
            ->join('firms', 'vacancies.firm_id', '=', 'firms.id')
            ->where('id', '=', $id)
            ->get()
            ->toArray();
        dd($vacancies);
//        return view ('vacancyById',['data' =>  json_decode(Vacancy::findOrFail(intval($id))), 'title' => 'Вакансии']);
        return view ('vacancyById',['data' =>  $vacancies, 'title' => 'Вакансии']);
    }
}
