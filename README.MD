# GeoHash工具类

## 简介
本工具类整合Geohash的编码和解码功能，即GeoHash和经纬度之间的转换。采用GeoHash的目的是为了提高周边搜索的速度，特别适用于查询周边多少千米内所有商户这样的应用场景。

## 使用方法
### 编码
```php
$geohash = new GeoHash();
$hash = $geohash->encode(120.20000, 30.26667);
// 变量$hash的值为'wtmkpjyuph'。
```
### 解码
```php
$geohash = new GeoHash();
$result = $geohash->decode('wtmkpjyuph');
// 变量$result为一数组，$result[0]为经度，$result[1]为纬度。
```

### 获取周边8个矩阵的GeoHash
```php
$geohash = new GeoHash();
$hash = 'wx4g0b';
$neighbors = $this->geoHash->neighbors($hash);
/*
结果如下
$neighbors = array(
    'North' => 'wx4g0c',
    'NorthEast' => 'wx4g11',
    'East' => 'wx4g10',
    'SouthEast' => 'wx4fcp',
    'South' =>'wx4fbz',
    'SouthWest' =>  'wx4fbx',
    'West' => 'wx4g08',
    'NorthWest' => 'wx4g09',
);
*/
```

## 协议
本项目采用[MIT](https://opensource.org/licenses/MIT)协议。
