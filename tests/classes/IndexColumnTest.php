<?php

declare(strict_types=1);

namespace PhpMyAdmin\Tests;

use PhpMyAdmin\IndexColumn;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(IndexColumn::class)]
class IndexColumnTest extends TestCase
{
    private IndexColumn $object;

    protected function setUp(): void
    {
        $this->object = new IndexColumn();
    }

    public function testGetNull(): void
    {
        $this->object->set(['Null' => '']);
        $this->assertEquals('No', $this->object->getNull());
        $this->object->set(['Null' => 'YES']);
        $this->assertEquals('Yes', $this->object->getNull());
    }

    public function testIsNullable(): void
    {
        $this->object->set(['Null' => '']);
        $this->assertEquals(false, $this->object->isNullable());
        $this->object->set(['Null' => 'YES']);
        $this->assertEquals(true, $this->object->isNullable());
    }

    public function testGetSeqInIndex(): void
    {
        $this->assertEquals(1, $this->object->getSeqInIndex());
        $this->object->set(['Seq_in_index' => 2]);
        $this->assertEquals(2, $this->object->getSeqInIndex());
    }

    public function testGetSubPart(): void
    {
        $this->assertNull($this->object->getSubPart());
        $this->object->set(['Sub_part' => 2]);
        $this->assertEquals(2, $this->object->getSubPart());
    }

    public function testGetCompareData(): void
    {
        $this->assertSame(
            ['Column_name' => '', 'Seq_in_index' => 1, 'Collation' => null, 'Sub_part' => null, 'Null' => ''],
            $this->object->getCompareData(),
        );
        $object = new IndexColumn([
            'Column_name' => 'name',
            'Seq_in_index' => 2,
            'Collation' => 'collation',
            'Sub_part' => 2,
            'Null' => 'NO',
        ]);
        $this->assertSame(
            [
                'Column_name' => 'name',
                'Seq_in_index' => 2,
                'Collation' => 'collation',
                'Sub_part' => 2,
                'Null' => 'NO',
            ],
            $object->getCompareData(),
        );
    }

    public function testGetName(): void
    {
        $this->assertEquals('', $this->object->getName());
        $this->object->set(['Column_name' => 'name']);
        $this->assertEquals('name', $this->object->getName());
    }

    public function testGetCardinality(): void
    {
        $this->assertNull($this->object->getCardinality());
        $this->object->set(['Cardinality' => 2]);
        $this->assertEquals(2, $this->object->getCardinality());
    }

    public function testGetCollation(): void
    {
        $this->assertNull($this->object->getCollation());
        $this->object->set(['Collation' => 'collation']);
        $this->assertEquals('collation', $this->object->getCollation());
    }
}
