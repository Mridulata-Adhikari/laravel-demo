<?php
  
namespace App\Http\Controllers;
  
use App\Role;
use Illuminate\Http\Request;
use App\User;
  
class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = App\User::find(1)->roles()->orderBy('name')->get();
    }

}
