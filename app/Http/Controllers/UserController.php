<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController{



    /** Answer Question # 1  */
    public function getActiveUsers(){
        User::where('status', 'active')->orderBy('created_at', 'desc')->get();
    }

}