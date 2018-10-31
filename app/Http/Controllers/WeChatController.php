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
		$session = $app->auth->session("023wS0eZ0hCi8128gedZ0hsWdZ0wS0e4");
		$decryptedData = $app->encryptor->decryptData($session['session_key'], "DGrP2iJ4FVO3NyWnwXe6RA==", "/bFwtJLk9I6juGQQ9pL/7eImGNs9n4lr0swWgjjYhBd6DUcMKlL5Kqqc9BlRg+gkSY4rm2BLT2xBCPFY/3YNp2lvjL8a0TqObAjeKBOHm49LIsmX6RWgOcRE1xvbIfYtA/SMjlqx1D6epPkOcFMJTX16gPrBeF8CPNh1LGhou42ZrEGK4TGyeTX5h4TFffmO/ww9Mm/yG3haQqSG2BfIvEwaGtH4DgMj7kVTZaWB0UgvKFvpQYBB5g7j5MgoHb5u8JWbVcIGdfQddqx7r1pK3zaV5vgUk1bTa0e/dE8Tj7C6uBeGBxWkaqoy0OymdVhh4eSRsy3jH5tJksaJYIwAyjEQJWAqvYeletZkfZFQPHC/3gSKVdyTrDjftKjd6rOqcswHk5QkSK9brpz03Wer1Chha1ndV0lxRf3j8aUP9noWazzSSALsLCtupQ4kFXgFeqtFV9b2OFqMJnmLWZFaCkRhS9Y+4hgsc5E2puAAqPQ=");
		// return $decryptedData;
		var_dump($decryptedData);
	}
}