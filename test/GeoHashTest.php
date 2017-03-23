<?php

/**
 * GeoHash测试类
 *
 * User: rick
 * Date: 17-3-23
 * Time: 上午9:54
 */
use PHPUnit\Framework\TestCase;
use Chency147\GeoHash\GeoHash;

class GeoHashTest extends TestCase {
	protected $geoHash;

	public function setUp() {
		$this->geoHash = new GeoHash();
	}

	public function testEncode() {
		$testResult = $this->geoHash->encode(120.20000, 30.26667);
		$this->assertEquals($testResult, 'wtmkpjyuph');
	}

	public function testDecode() {
		$hash = 'wtmkpjyuph';
		$result = $this->geoHash->decode($hash);
		$this->assertEquals($result[0], 120.20000, '', 0.00005);
		$this->assertEquals($result[1], 30.26667, '', 0.00005);
	}

	public function testNeighbors() {
		$hash = 'wx4g0b';
		$neighbors = $this->geoHash->neighbors($hash);
		$this->assertEquals($neighbors['North'], 'wx4g0c');
		$this->assertEquals($neighbors['NorthEast'], 'wx4g11');
		$this->assertEquals($neighbors['East'], 'wx4g10');
		$this->assertEquals($neighbors['SouthEast'], 'wx4fcp');
		$this->assertEquals($neighbors['South'], 'wx4fbz');
		$this->assertEquals($neighbors['SouthWest'], 'wx4fbx');
		$this->assertEquals($neighbors['West'], 'wx4g08');
		$this->assertEquals($neighbors['NorthWest'], 'wx4g09');
	}
}