<?php

namespace App\UseCase;

use Mockery\Matcher\Any;

interface UseCaseInterface
{
  // UseCaseなので、executeメソッドを必ず持つ
  public function execute(Any $any);
}
