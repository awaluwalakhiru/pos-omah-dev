<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * middleware
     *
     * @return array
     */
    public static function middleware(): array
    {
        return [
            new Middleware(['permission:permission.index'], only: ['index'])
        ];
    }

    public function index()
    {
        // get permissions
        $permissions = Permission::when(request()->q, function ($permissions) {
            $permissions = $permissions->where('name', 'like', queryContains(request()->q));
        })->latest()->paginate(5);

        // render inertia
        return inertia('Apps/Permissions/Index', [
            'permissions' => $permissions
        ]);
    }
}
