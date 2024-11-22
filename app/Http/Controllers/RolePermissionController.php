<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionController extends Controller
{
    // Get all roles with permissions
    public function index()
    {
        $roles = Role::with('permissions')->get();
        return response()->json($roles);
    }

    // Update role permissions
    public function updateRolePermissions(Request $request, $roleId)
    {
        $role = Role::findById($roleId);
        $permissions = $request->permissions; // ['permission_name_1', 'permission_name_2']
        $role->syncPermissions($permissions);

        return response()->json(['message' => 'Permissions updated successfully']);
    }

    // Create a new role
    public function createRole(Request $request)
    {
        $role = Role::create(['name' => $request->name]);
        return response()->json($role);
    }
}
