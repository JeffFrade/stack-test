<?php

namespace App\Exceptions;

use App\Interfaces\StackExceptionInterface;
use App\Util\BaseException;

class StackEmptyException extends BaseException implements StackExceptionInterface
{}
