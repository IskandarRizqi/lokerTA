<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'uid',
        'name',
        'role_id',
        'email',
        'password',
        'kriteria_id',
    ];

    // protected $appends = ['roles'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function getRolesAttribute()
    {
        // return $this->belongsToMany(Role::class);

        $rolename = DB::table('roles')
            ->select('roles.*', 'model_has_roles.model_id as pivot_user_id', 'model_has_roles.role_id as pivot_role_id')
            ->leftJoin('model_has_roles', 'model_has_roles.role_id', '=', 'roles.id')
            ->where('model_has_roles.model_id', $this->attributes['id'])
            ->get();
        if (isset($rolename)) {
            return $rolename;
        }
        return null;
    }

    public function kriteria(): HasOne
    {
        return $this->hasOne(KriteriaModel::class, 'id', 'kriteria_id');
    }

    // public function getPermissionsAttribute()
    // {
    //     $permission =  DB::table('permissions')
    //         ->select('permissions.*', 'model_has_permissions.model_id as pivot_user_id', 'model_has_permissions.permission_id as pivot_permission_id')
    //         ->leftJoin('model_has_permissions', 'model_has_permissions.permission_id', '=', 'permissions.id')
    //         ->where('model_has_permissions.model_id', $this->attributes['id'])
    //         ->get();
    //     if (isset($permission)) {
    //         return $permission;
    //     }
    //     return null;
    // }
    // public $guard_name = 'web';


}
