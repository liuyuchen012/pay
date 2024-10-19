<?php
    /* *
    * 功能：支付宝电脑支付调试入口页面
    * 修改日期：2017-03-30
    * 说明：
    * 以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己网站的需要，按照技术文档编写,并非一定要使用该代码。
    */
    if (isset($_GET['txt'])) {  
    // 获取 'x' 参数的值  
    $txt = $_GET['txt'];  
    $txt1 = '操作已发送'


    } else {  
    // 如果没有设置 'x' 参数，输出一个错误消息  
    echo "The 'txt' parameter is not set.";  
    $txt = '';  
    $txt1 = '非法数据'
    header("Location: http://mc.615mc.cn/no.php?txt=");
    }  

    
?>
<!DOCTYPE html>  
<html lang="zh-CN">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>操作完成</title>  
    <style>  
        body {  
            font-family: Arial, sans-serif;  
            display: flex;  
            flex-direction: column;  
            align-items: center;  
            justify-content: center;  
            height: 100vh;  
            margin: 0;  
            background-color: #f0f0f0;  
        }  
        .check-mark {  
            font-size: 50px;  
            color: green;  
        }  
        .message {  
            font-size: 24px;  
            margin-top: 20px;  
        }  
    </style>  
</head>  
<body>  
    <div class="check-mark">✓</div>  
    <div class="message"><?php echo $txt1; ?><br><?php echo $txt; ?></div>  
</body>  
</html>