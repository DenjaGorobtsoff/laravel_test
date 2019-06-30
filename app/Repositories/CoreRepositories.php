<?php
namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreRepositories
 * @package App\Repositories
 */
abstract class CoreRepositories
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * CoreRepository constructor.
     */
    public function __construct()
    {
        $this->model = app($this->getModelClass());
    }

    /**
     * @return mixed
     */
    abstract protected function getModelClass();

    /**
     * @return Model|\Illuminate\Foundation\Application|mixed
     */
    protected function table()
    {
        return clone $this->model;
    }
}
