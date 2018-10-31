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
		$session = $app->auth->session("023esgYq1F5Wqo0sWYUq1crvYq1esgYT");
		// $decryptedData = $app->encryptor->decryptData($session, "4y9zLgo2+Vyc0E/CS033Rw==", "S+tys6mCC9nTprQO415/iQZWxdGogKBeZfdWHlDsWVZ7SEIHRmf/AC2DWIVadXP0DI4SZO6X8KBInzOv+5UXV6VVvyBY+xAbROgyzeUSlppZahuPuAHyr82iz5o7fFB69wgJQc5Qs5gdC30RHZzRiTI7osq9Uql3X0G4H0duzZDH4+FwEcLdtVYGORCC+Ejmb6AguO5qdS4fmDqp7ljUj+GO0TUxQq4ikw1657hlcop4kDNZKP8t/d67wSzsZf7pAqBsR+C7ir3vdB+n0sX9yeR9KqO7mBSj7BZi5uoznNpx0mizuSjtsDXbEECVIUREG9cv2K0d5OmBz5+xTf5heDuz3SCEGlz9s6UO2titd4vlgz87XY0kl/rr/BodJJ2Fvf/Cxc7Q5cVQJ75r/fmoib9UvBL2PbZSCyiB9CHVry14A2MHePL7HVFD5omscofNZRTUCnJHNMK01aCbuCrZS6HO/viDjlRMvx/Crgx8gLM=");
		return $session;
		 // var_dump($session);exit;

	}
}