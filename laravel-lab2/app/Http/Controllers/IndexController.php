<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Index(){
        return view('page', ['data' => 'Резюме и вакансии']);
    }

    public function Show(){
        $resumes = Person::select('id', 'FIO', 'phone', 'stage')->get()->toArray();
        return view ('resume',['data' => $resumes, 'title' => 'Резюме и вакансии']);
    }

    public function ShowById($id){
        return view ('resumeById',['data' => json_decode(Person::findOrFail(intval($id))), 'title' => 'Резюме и вакансии']);
    }


    //    2-nd lab
    //    queries
    //    1
    function query1(){
        $data = Person::select('FIO', 'stage')
            ->where('stage','<', 15)
            ->where('stage','>', 4)
            ->get()
            ->toArray();
        return view('query', [ 'data' => $data, 'title'=> 'query 1', 'header' => 'Фамилии со стажем от 5 до 15 лет']);
    }

    //  2
    function query2(){
        $data = Person::select('FIO', 'stage', 'staff.staff')
            ->join('staff', 'people.staff_id', '=', 'staff.id')
            ->where('staff.staff','=', 'Программист')
            ->get()
            ->toArray();
        return view('query', ['data' => $data, 'title'=> 'query 2', 'header' => 'Фамилии и стаж профессией Программист']);
    }

    //  3
    function query3(){
        $data = Person::count();
        return view('query', ['data' => [['count' => $data]], 'title'=>'query 3', 'header' => 'Общее число резюме']);
    }

    //  4
    function query4(){
        $data = Person::select('staff.staff')
            ->join('staff', 'people.staff_id', '=', 'staff.id')
            ->groupBy('staff.staff')
            ->get()
            ->toArray();
        return view('query', ['data' => $data, 'title'=> 'query 4', 'header' => 'Профессии, представители которых имеются в резюме']);
    }
}
