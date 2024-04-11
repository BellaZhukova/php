<?php

namespace Controller;

use Model\Doctor;
use Model\Pacient;
use Model\Post;
use Model\Record;
use Model\Specialization;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;

class Site
{
    public function index(): string
    {
        return new View("site.welcome");
    }

    public function signup(Request $request): string
    {
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/welcome');
        }
        return new View('site.signup');
    }

    public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/welcome');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/welcome');
    }

    public function add_pacient(Request $request): string
    {
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/go');
        }
        return new View('site.add_pacient');
    }

    public function addDoctor(Request $request): string
    {
        if ($request->method === 'POST' && Doctor::create($request->all())) {
            app()->route->redirect('/doctors');
        }
        $specials = Specialization::all();
        return new View('site.add_doctor', ['specials' => $specials]);
    }

    public function doctors(): string
    {
        $doctors = Doctor::all();
        return new View('site.doctors', ['doctors' => $doctors]);
    }

    public function patients(): string
    {
        $patients = Pacient::all();
        return new View('site.patients', ['patients' => $patients]);
    }

    public function addPatients(Request $request): string
    {
        if ($request->method === 'POST' && Pacient::create($request->all())) {
            app()->route->redirect('/patients');
        }
        return new View('site.add_pacient');
    }

    public function createRecord(Request $request): string
    {
        if ($request->method === 'POST' && Record::create($request->all())) {
            app()->route->redirect('/records');
        }
        return new View('site.create_record', ['doctors' => Doctor::all(), 'patients'=>Pacient::all()]);
    }

    public function records(Request  $request): string
    {
        if ($request->method === 'POST') {
            $records = Record::find($request->get('id'));
            $records->update(['status_id'=>2]);
            app()->route->redirect('/records');
        }

        if (!is_null($request->doctor_id)) {
            return new View('site.records', ['records' => Record::all()->where('doctor_id', $request->doctor_id), 'records_open'=>Record::all()->where('status_id', '!=', 2)]);
        }

        if (!is_null($request->pacient_id)) {
            return new View('site.records', ['records' => Record::all()->where('pacient_id', $request->pacient_id), 'records_open'=>Record::all()->where('status_id', '!=', 2)]);
        }

        if (!is_null($request->date_record)) {
            return new View('site.records', ['records' => Record::all()->where('date_record', $request->date_record), 'records_open'=>Record::all()->where('status_id', '!=', 2)]);
        }

        return new View('site.records', ['records' => Record::all(), 'records_open'=>Record::all()->where('status_id', '!=', 2)]);
    }

    public function users(): string
    {
        return new View('site.users', ['users' => User::where('role', 0)->get()]);
    }
}

