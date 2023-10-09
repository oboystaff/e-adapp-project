<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $users = User::orderBy('created_at', 'DESC')->get();

        return view('users.index')->with([
            'users' => $users
        ]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(CreateUserRequest $request)
    {
        try {
            $data = $request->validated();
            $data['password'] = Hash::make($data['password']);

            User::create($data);

            return redirect()->route('users.index')->with('status', 'User created successfully.');
        } catch (\Exception $ex) {
        }
    }

    public function show(User $user)
    {
        return view('users.show')->with([
            'user' => $user
        ]);
    }

    public function edit(User $user)
    {
        return view('users.edit')->with([
            'user' => $user
        ]);
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        try {
            $data = $request->validated();

            if (empty($request->validated('password'))) {
                $data['password'] = $user->password;
            } else {
                $data['password'] = Hash::make($data['password']);
            }

            $user->update($data);

            return redirect()->route('users.index')->with('status', 'User updated successfully.');
        } catch (\Exception $ex) {
        }
    }
}
