<?php

namespace App\Http\Controllers;

use EasyWeChat\Factory;
use App\Http\Controllers\Controller;
class WeChatController extends Controller
{
	public function index()
	{
		$config = [
		    'app_id' => 'wx98e518caccc01d1d',
		    'secret' => '8f9a7d904c17a454ca688f32007a6e45',

		    // 下面为可选项
		    // 指定 API 调用返回结果的类型：array(default)/collection/object/raw/自定义类名
		    'response_type' => 'array',

		    'log' => [
		        'level' => 'debug',
		        'file' => __DIR__.'/wechat.log',
		    ],
		];
		$app = Factory::miniProgram($config);
		$session = $app->auth->session('023udSnK1iBXi50GteqK1EftnK1udSnz');
		// $decryptedData = $app->encryptor->decryptData($session, $iv, $encryptData);
//		return $session;
		 var_dump($session);exit;

	}
}