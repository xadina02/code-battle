<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserSkill;

class UserSkillController extends Controller
{
    public function index($id)
    {
        $userskills = UserSkill::all()->where('user_id', $id);
        return response($userskills);
    }
}
