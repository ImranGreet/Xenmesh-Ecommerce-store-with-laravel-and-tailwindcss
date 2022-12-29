<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SuperAdminController;
use Illuminate\Support\Facades\DB;

class AdminApprovalController extends SuperAdminController
{
    public function adminApproval($id)
    {
        $unAuthorisedAdmin = DB::table('admins')->where('admin_id', $id)->get();
    }
}