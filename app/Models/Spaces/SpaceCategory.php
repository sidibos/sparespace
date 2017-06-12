<?php

namespace App\Models\Spaces;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class SpaceCategory extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;

    protected $table = 'space_categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    public function spaces()
    {
        return $this->hasMany('App\Space', 'category_id');
    }

    public function ScopeGetCategoryIdByName($name)
    {
        $category = self::where('name', 'workspace')->first();
        return $category->id;
    }
}