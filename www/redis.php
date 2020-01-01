<?php
    $lists=[1,2,3,4,5];
	$redis = new Redis();
	$redis->connect('redis', 6379, 60);
    $redis->auth('zheshimima');
	$data = json_encode($lists, JSON_UNESCAPED_UNICODE);
	$key = md5('test');
	//缓存数据
	$redis->set($key, $data, 60);
	 
	//获取数据
	$data = $redis->get($key);
	print_r(json_decode($data, true));
                              