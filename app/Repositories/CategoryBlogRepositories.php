<?php

namespace App\Repositories;

use App\Models\BlogCategory as Model;
use Composer\Repository\ComposerRepository;
use Illuminate\Database\Eloquent\Collection;

class CategoryBlogRepositories extends CoreRepositories
{
    protected function getModelClass()
    {
        return Model::class;
    }

    public function getSelectItems()
    {
        $columns =implode(',', ['category_id', 'title']);

        $result = $this->table()
            ->selectRaw($columns)
            ->toBase()
            ->get();

        return $result;
    }

}
