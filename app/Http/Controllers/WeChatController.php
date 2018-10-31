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
		$decryptedData = $app->encryptor->decryptData($session->session_key, "affqG1rRftc56QR56/MRBg==", "dhuykHzDIQAj7Wt2YaL+X5B/xleOQ1WSt8nfXs6rS8x0HXlbESfb2iL1LpUQTudtohMzlOtZ9AHaR4saarkWAyZzQMLmDNkHHI94q46+VBjnaH2UB1+XMb4S5ZIp6rN39XRuO3u+AvUk/FiEPWoNNT7fQZqswvcgKBq+Jyi5xoD9r/6SLicNFpyhxIIfAOnIFmeJ3nc6fM8Nra5acerPaN5iFN/MYd6YGeDr7fZiDwUxZOC5GL2VaQEII3N9KslL64T0xsnOxlNSxzq9jtuq5qBgsGjeZotYF/zx+E3uwJKjW5SP8W1O+wq/olILNXZ5bQ/lDb913g+fhJi7Hd7WNgYNbntdF1zdx/EWanT+MqDovC4IgYdg47Vsxde17C9PSoLqhoha+7rSyYBeRgEmE2dtqaKXMcGZ/wTPDBmyt2ew+e+v3RFSf2zT83+A8TutiCJCp5R80ThjutOx8N1U3SrdI9kqrZ0F/Thxnq3ekBc=");
		// return $decryptedData;
		 var_dump($session);exit;

	}
}