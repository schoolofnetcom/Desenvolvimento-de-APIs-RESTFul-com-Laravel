<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountsController extends Controller
{
  use \App\Http\Controllers\ApiControllerTrait;

  protected $model;
  protected $relationships = ['bank'];

  public function __construct(\App\Account $model)
  {
      $this->model = $model;
  }
}
