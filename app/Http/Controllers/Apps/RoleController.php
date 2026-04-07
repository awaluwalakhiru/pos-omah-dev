<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller implements HasMiddleware
{
    /**
     * middleware
     *
     * @return array
     */
    public static function middleware(): array
    {
        return [
            new Middleware('permission:roles.index', only: ['index']),
            new Middleware('permission:roles.create', only: ['create', 'store']),
            new Middleware('permission:roles.edit', only: ['edit', 'update']),
            new Middleware('permission:roles.delete', only: ['destroy']),
        ];
    }

    /**
     * display a listing of the resource.
     *
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::when(request()->q, function ($roles) {
            $roles = $roles->where('name', 'like', queryContains(request()->q));
        })->with('permissions')->latest()->paginate(5);

        return Inertia('Apps/Roles/Index', [
            'roles' => $roles
        ]);
    }

    /**
     * show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        $permissions = Permission::all();
        return Inertia('Apps/Roles/Create', [
            'permissions' => $permissions
        ]);
    }
}
