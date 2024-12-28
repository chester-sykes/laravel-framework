<?php

namespace Illuminate\Tests\Integration\Database;

use Illuminate\Database\Eloquent\Model;

class EloquentModelToArrayKeysTest extends DatabaseTestCase
{
    public function testModelToArrayKeys()
    {
        $model = new TestToArrayKeysModel1;
        $model->name = 'John Doe';
        $model->title = 'Developer';

        $this->assertEquals(['name', 'title'], $model->toArrayKeys());
    }
}

class TestToArrayKeysModel1 extends Model {}
