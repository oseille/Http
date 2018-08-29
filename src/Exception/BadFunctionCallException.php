<?php
/**
 * This file is a part of the Ophp framework
 *
 * @category Ophp-Http
 * @package Exception
 * @license MIT <https://github.com/ojullien/Ophp-Http/blob/master/LICENSE>
 */
namespace Ophp\Http\Exception;

/**
 * Exception thrown if a callback refers to an undefined function or if some
 * arguments are missing.
 * This represents error in the program logic and should be detected at
 * compile time.
 * This kind of exceptions should directly lead to a fix in the code.
 */
class BadFunctionCallException extends \BadFunctionCallException implements ExceptionInterface
{
}