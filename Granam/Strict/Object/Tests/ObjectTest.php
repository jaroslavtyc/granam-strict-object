<?php
namespace Granam\Strict\Object\Tests;

class ObjectTest extends \PHPUnit_Framework_TestCase
{

	use StrictObjectTestTrait;

	/**
	 * @return \Granam\Strict\Object\StrictObject
	 */
	protected function createObjectInstance()
	{
		// returns concrete object as a tested abstract one
		return new AnObject();
	}
}