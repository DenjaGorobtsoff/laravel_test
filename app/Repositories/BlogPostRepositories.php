<?php

namespace App\Repositories;

use App\Models\BlogPost as Model;
use Composer\Repository\ComposerRepository;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class BlogPostRepositories
 * @package App\Repositories
 */

class BlogPostRepositories extends CoreRepositories
{
    /**
     * @param int $id
     * @return Model
     */
    public function getEdit($id)
    {
        return $this->table()->find($id);
    }

    /**
     * @return mixed|string
     */
    protected function getModelClass()
    {
        return Model::class;
    }

    /**
     * @return Collection
     */
    public function getAll()
    {

        $result = $this->table()
            ->select('post_id', 'title', 'created_at')
            ->toBase()
            ->get();

        return $result;
    }
}
