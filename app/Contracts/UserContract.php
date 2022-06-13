<?php

namespace App\Contracts;

use Illuminate\Http\Request;

/**
 * Interface UserContract
 * @package App\Contracts
 */
interface UserContract
{   
  
  /**
   * index
   *
   * @return void
   */
  public function index();

  /**
   * getData
   *
   * @return void
   */
  public function getData();

  /**
   * resetPassword
   *
   * @param  mixed $request
   * @return void
   */
  public function resetPassword(array $data);

  public function store(array $data);

  public function destroy(int $id);

}
