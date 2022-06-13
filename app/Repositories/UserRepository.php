<?php

namespace App\Repositories;

use App\Models\User;
use App\Contracts\UserContract;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Doctrine\Instantiator\Exception\InvalidArgumentException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class CategoryRepository
 *
 * @package \App\Repositories
 */
class UserRepository extends BaseRepository implements UserContract
{  
  /**
   * index
   *
   * @return void
   */
  public function index()
  {
    return User::all();
  }

    /**
     * CategoryRepository constructor.
     * @param User $model
     */
    public function __construct(User $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function getData()
    {
      return auth()->user();
    }

    public function store(array $data)
    {
      $account = new User();
      $account->email = $data['email'];
      $account->name = $data['name'];
      $account->password = $data['password'];
      $account->save();
      return $account;
    }

    public function resetPassword(array $data)
    {
      $account = $this->model->find(auth()->user()->id);
      $account->email = $data['email'];
      $account->name = $data['name'];
      $account->password = $data['password'];
      $account->update();
      return $account;
    }

    public function destroy(int $id)
    {
      $account = $this->model->find($id);
      return $account->delete();
    }
}
