<?php declare(strict_types = 1);

namespace Tests;

use Tester;

require_once __DIR__ . '/../bootstrap.php';

final class DummyTest extends Tester\TestCase
{

	public function test01(): void
	{
		Tester\Assert::true(true);
	}

}

(new DummyTest())->run();
