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
    $txt1 = '指令错误'


    } else {  
    // 如果没有设置 'x' 参数，输出一个错误消息  
    echo "The 'txt' parameter is not set.";  
    $txt = '';  
    $txt1 = '非法数据'
    }  

    
?>
<!DOCTYPE html>  
<html lang="zh-CN">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>操作结果</title>  
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
        .icon {  
            font-size: 50px;  
            margin-bottom: 10px;  
        }  
        .check-mark {  
            color: green;  
        }  
        .cross-mark {  
            color: red;  
        }  
        .message {  
            font-size: 24px;  
        }  
    </style>  
</head>  
<body>  
    <!-- 你可以根据需要显示对勾或叉，或者同时显示（通过复制相应的div元素） -->  
    <!-- 显示对勾 -->  
    <div class="icon cross-mark">✖</div>  
    <div class="message"><?php echo $txt1; ?><br><?php echo $txt; ?></div>  
      
    <!-- 显示叉（如果需要，可以取消注释以下两行） -->  
    <!--  
    <div class="icon cross-mark">✖</div>  
    <div class="message">操作失败</div>  
    -->  
</body>  
</html>