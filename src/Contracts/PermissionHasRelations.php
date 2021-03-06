<?php

namespace jeremykenedy\LaravelRoles\Contracts;

use jeremykenedy\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Relations\BelongsToMany;

interface PermissionHasRelations
{
    /**
     * Permission belongs to many roles.
     *
     * @return BelongsToMany
     */
    public function roles();

    /**
     * Permission belongs to many users.
     *
     * @return BelongsToMany
     */
    public function users();
}
