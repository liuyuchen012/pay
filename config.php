<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2021004182613643",

		//商户私钥，您的原始格式RSA私钥
		'merchant_private_key' => "MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQCX96+Vhxir3nWnJjBTPevLuqxrXL0d5MKYIaOngP/4p1p3cUlQh6m2A+NDwrr1DO1jjxSucJR2AH8HM8gcpDNrxkbXQAa/N5fBZ0sQDXXCyCqvSbJE/iPeY865A0x5WMa6S730hK4FfI7AeXf1Drh8pChMR312hWHsod6mMSyKabmpw6AwEgtlsopmYbZGOsZykR/A1CnMaOpTCuTWCPzKsRpPgbfyGHoVB//mZeKJrh2DL6f0UGdM+R6scupALPC+M9Dc8QLqjxbaqj1IEQvsex0gz8ZqEvF0kXRG54PZlPCdjUGppyKmmJCm9DZMgx8M9+yZhgBC4l/uz5js2eblAgMBAAECggEBAIrgvAG2eIF4x6R9beRkzjxc2H01P082Y++LrnfBmCuxJSfKy+lgUWQZoXOnXhvcOIWnmIriL4q3YV8/nz0tgiCYDt1fkcrmDzWcJCkDY/8h1oBipRwP9M+j/qNttFGhI9vUpD/1kONKtVqIp2u4jDi7/GfZXXsW4irSsxrGDaJfG9qVnAktA4PSwrN8IYCC+4OdZMJMfCPPkFTJcXskdHdnPyA0Gi+FPlIbAdpao2JN0M0BTaNyRuvxPRBWQ5PR6nd+1DgrtQDbGIHlSE65hXjGztDfqdG9FvlAWcSouhWV1ugJ9OQx2iFolax/7R6T7IAnKJ4jq2uuN8aUfxHcrAECgYEAx0bV1E4nCL46uk6/IqRwF+1KHdx212Cyb5FXv10S4KES1lDLEaZ/sTJeoDvEhJ89ise+VFHY9otuARm/nAZD16d870T6UthFhul0uLC7q5QLvWyap8Ao5rTWqKD7+DG4V+04i0NU3IRXXr5X3tLDUOtHT28odqlgc0D0bME3vCUCgYEAwzl2GmYt6OJ+6iOkeGSdcRhywhXxGhD6WxLWL7p80oqlvlRbnNMulaoL2uqJ2bbeZNSipDqQ1k4rUHLD6FVp9//H+tnOYlOzpWUwwWO+Iaxqn1vsPS06LLYochH/3Ndxt93S0bqz35HFCYl05BdiGRqCq3hyu03/irC10x3sI8ECgYEAvnJTHzCFm5R5+d4SSyBORH+xyrINHa87OOb1rlxcEzO9Ffdm63ptJMLXrlkQahLptP1KR7llGdKNEh4yggF2yt41x1HrzksEv3fT5kJ5SPQW+DSX5WP/cuU3FTetNzkFTXrYBDgYHRuZiGFvBvP0WBxTLXY1fJpJJDzanClYg8UCgYAhIvu892MLiIZqT6p3FPz0WWYBM6A9AGy+ULAyYcEWK5p+d+sk72OU28wvWGgVoEiXbNA+eAJlndcUTKacJQNbqPrUxWuWnQZ9KHPiH4ACTzW53ux2ZdreA/1Rf2Sio58Vyn0iREKLzD5ZpA9HOADaqflMCaHP0Sly7ROvxgBzAQKBgH/WzhDZd9ClAy0e6eJaPHcIbvenfvrLxCfvPsAsJmCTM5sMD3wN3jg77VdW8NDWSBg2dhfbLk2YOOUDMS/a6a/xTwpt1aFdCoKYN9L/d+R9A/PXstDvaDEMnzf0gA9Tk3x7G1a3h+2On+svbZcCFpVVEs20hfXfuO++MiNea1hd",
		
		//异步通知地址
		'notify_url' => "http://pay.615mc.cn/notify_url.php",
		
		//同步跳转
		'return_url' => "http://pay.615mc.cn/return_url.php",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipay.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAhxX44C59c95ejsIm4F3rfQ4PqmTBjoYt8Y36L2xZ6QaVR5a+CtWQuPONubAgaq7nvLAzySQPNd3moQIKYJtzY/9LS5SNfWe3PNtJR4joPUsGq6ik8O+E61OMRqsiiOShQe5p1K8sz28ZtfWIxthu2C5qq2pRASgmw3qcQV+V2lBaUQ4aAz02ug0WMftR9cycT0DgNE/ReAbaLOiEPh4KE4RSm5F3UyNuW8Ptly0I2jVrB+bRiCxteawv1gw9gwjsOF/MVwWQTz4Y3yzYTqkEhWgNcDzXXWqSjqCfUCpRTck7F/oQRZ9L9dwzEESaJOlDTBXcSgA2D96IIT2TRi0PXwIDAQAB",
        //日志路径
        'log_path' => "",
);