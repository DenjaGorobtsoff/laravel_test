<?php

namespace App\Repositories;

use App\Models\BlogCategory as Model;
use Composer\Repository\ComposerRepository;
use Illuminate\Database\Eloquent\Collection;

class CategoryRepositories extends CoreRepositories
{
    protected function getModelClass()
    {
        return Model::class;
    }

    public function getSelectItems()
    {
        return $this->table()->all();
    }

}
