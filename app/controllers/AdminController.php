<?php

class AdminController extends BaseController {




    public function checkadminlogin() {
//       $this->layout = false;



//        $username = $this->request->data ['username'];
//        $password = $this->request->data ['password'];
//
//        $admin = $this->Admin->find ( "first", array ('conditions' => array ('Admin.username' => $username, 'Admin.password' => $password ) ) );
//
//        if ($admin) {
//            // $this->Session->write("admin",$username );
//            echo "correct";
//        } else {
//            echo "wrong data";
//        }


        $username = Input::get('username');
        $password = Input::get('password');

        $admin = Admin::where('username', '=', $username)
            ->where('password','=',$password)->first();

        if(is_null($admin))
            return "invalid";
        else{
            Session::put('admin_id', $admin->id);

            return "correct";
        }
    }
    public function wlcmadmin()
    {
        return View::make('admin.wlcmadmin');
    }
    public function index()
    {
        return View::make('admin.index');

    }
    public function removeemployee($id){

        $employee = Employee::find($id);

        if(!$employee)
            return "invalid";
        else{
            $employee->delete();

            return "done";
        }
    }
    public function add()
    {
        return View::make('admin.add');
    }
    public function show()
    {
        return View::make('admin.show');
    }
    public function saveemployee()
    {
        $employee = new employee;

        $employee->name          = Input::get('name');
        $employee->email          = Input::get('email');
        $employee->phone          = Input::get('phone');
        $employee->address          = Input::get('address');
        $employee->city          = Input::get('city');

        $employee->created_at    = date("Y-m-d h:i:s");
        $employee->updated_at    = date("Y-m-d h:i:s");

        $employee->save();
        return "uploaded";
    }
    public function showemployee()
    {
        $employee = Employee::all();

        $found = !$employee->isEmpty();

        return View::make('admin.show')->with('employees', $employee)->with('found', $found);
    }
    public function dash()
    {
        return View::make('admin.dash');
    }

}
