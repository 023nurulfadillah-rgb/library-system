<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = [
            ['id' => 1, 'nama' => 'Amilia Hesty', 'email' => 'amilia@mail.com'],
            ['id' => 2, 'nama' => 'Ramdini Oktiana', 'email' => 'ramdini@mail.com'],
            ['id' => 3, 'nama' => 'Dahlia Ronauli', 'email' => 'dahlia@mail.com'],
            ['id' => 4, 'nama' => 'Dilla', 'email' => 'dilla@mail.com'],
            ['id' => 5, 'nama' => 'Nafa Nuraidah', 'email' => 'nafa@mail.com'],
        ];

        return view('members.index', compact('members'));
    }
}