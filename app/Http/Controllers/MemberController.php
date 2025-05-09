<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\JsonResponse;

class MemberController extends Controller
{
    public function index(): ?JsonResponse
    {
        $member = Member::all();
        return response()->json($member, 200);
    }
}
