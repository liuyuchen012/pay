<?php
/* *
 * 功能：支付宝电脑支付调试入口页面
 * 修改日期：2017-03-30
 * 说明：
 * 以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己网站的需要，按照技术文档编写,并非一定要使用该代码。
 */



$timestamp = time();
$year = date('Y', $timestamp);  
$month = date('m', $timestamp);  
$day = date('d', $timestamp);  
$hour = date('H', $timestamp);  
$minute = date('i', $timestamp);  
$time = "$year$month$day$hour$minute";
?>
<!DOCTYPE html>
<html>
	<head>
	<title>615MC捐赠系统</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script>
        var _hmt = _hmt || [];
        (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?0b8aa63c1479c161d389826c4db88f9b";
        var s = document.getElementsByTagName("script")[0]; 
        s.parentNode.insertBefore(hm, s);
        })();
    </script>

<style>
    body,
    html {
        margin: 0;
        padding: 0;
        font-family: '楷体', 'KaiTi', serif;
        background-color: #f5f5f5;
        height: 100%;
    }

    .return-link {
        position: fixed;
        top: 20px;
        right: 20px;
        /* 将链接移动到右上角 */
        background: #007BFF;
        color: white;
        padding: 10px 20px;
        border-radius: 20px;
        text-decoration: none;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        transition: background 0.3s ease;
        z-index: 10;
    }

    .return-link:hover {
        background: linear-gradient(45deg, #0056b3, #004080);
    }

    .container {
        display: flex;
        width: 100%;
        padding-top: 80px;
    }

    .text-container {
        flex: 1;
        max-height: 100vh;
        overflow-y: auto;
        background-color: #fff;
        padding: 20px;
        box-shadow: inset 2px 0 5px rgba(0, 0, 0, 0.1);
        font-size: 18px;
        line-height: 1.6;
    }

    .image-container {
        flex: 3;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
        padding: 20px;
        background-color: #fff;
        overflow-y: auto;
        margin-top: 0;
    }

    .image-container img {
        width: 100%;
        height: auto;
        border-radius: 10px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .image-container img:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }
    *{
        margin:0;
        padding:0;
    }
    ul,ol{
        list-style:none;
    }
    body{
        font-family: "Helvetica Neue",Helvetica,Arial,"Lucida Grande",sans-serif;
    }
    .tab-head{
        margin-left:120px;
        margin-bottom:10px;
    }
    .tab-content{
        clear:left;
        display: none;
    }
    h2{
        border-bottom: solid #02aaf1 2px;
        width: 200px;
        height: 25px;
        margin: 0;
        float: left;
        text-align: center;
        font-size: 16px;
    }
    .selected{
        color: #FFFFFF;
        background-color: #02aaf1;
    }
    .show{
        clear:left;
        display: block;
    }
    .hidden{
        display:none;
    }
    .new-btn-login-sp{
        padding: 1px;
        display: inline-block;
        width: 75%;
    }
    .new-btn-login {
        background-color: #02aaf1;
        color: #FFFFFF;
        font-weight: bold;
        border: none;
        width: 100%;
        height: 30px;
        border-radius: 5px;
        font-size: 16px;
    }
    #main{
        width:100%;
        margin:0 auto;
        font-size:14px;
    }
    .red-star{
        color:#f00;
        width:10px;
        display:inline-block;
    }
    .null-star{
        color:#fff;
    }
    .content{
        margin-top:5px;
    }
    .content dt{
        width:100px;
        display:inline-block;
        float: left;
        margin-left: 20px;
        color: #666;
        font-size: 13px;
        margin-top: 8px;
    }
    .content dd{
        margin-left:120px;
        margin-bottom:5px;
    }
    .content dd input {
        width: 85%;
        height: 28px;
        border: 0;
        -webkit-border-radius: 0;
        -webkit-appearance: none;
    }
    #foot{
        margin-top:10px;
        position: absolute;
        bottom: 15px;
        width: 100%;
    }
    .foot-ul{
        width: 100%;
    }
    .foot-ul li {
        width: 100%;
        text-align:center;
        color: #666;
    }
    .note-help {
        color: #999999;
        font-size: 12px;
        line-height: 130%;
        margin-top: 5px;
        width: 100%;
        display: block;
    }
    #btn-dd{
        margin: 20px;
        text-align: center;
    }
    .foot-ul{
        width: 100%;
    }
    .one_line{
        display: block;
        height: 1px;
        border: 0;
        border-top: 1px solid #eeeeee;
        width: 100%;
        margin-left: 20px;
    }
    .am-header {
        display: -webkit-box;
        display: -ms-flexbox;
        display: box;
        width: 100%;
        position: relative;
        padding: 7px 0;
        -webkit-box-sizing: border-box;
        -ms-box-sizing: border-box;
        box-sizing: border-box;
        background: #1D222D;
        height: 50px;
        text-align: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        box-pack: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        box-align: center;
    }
    .am-header h1 {
        -webkit-box-flex: 1;
        -ms-flex: 1;
        box-flex: 1;
        line-height: 18px;
        text-align: center;
        font-size: 18px;
        font-weight: 300;
        color: #fff;
    }
</style>
</head>
<body text=#000000 bgColor="#ffffff" leftMargin=0 topMargin=4>
<body>
		<header class="header">
			<nav>
				<a href="https://615mc.cn/index.html">首页</a>
				<a href="https://615mc.cn/about_615mc.html">关于我们</a>
				<a href="http://mc.615mc.cn/jzpay.php">捐赠系统</a>
				<a href="https://615mc.cn/小游戏.小恐龙.html">小游戏</a>
			</nav>
		</header>
		
	</body>
    </body>
<header class="am-header">
        <h1>615MC捐赠系统</h1>
</header>
<div id="main">
    <div id="tabhead" class="tab-head">
        <h2 id="tab1" class="selected" name="tab">付 款</h2>
        <!--
        <h2 id="tab2" name="tab">交 易 查 询</h2>
        <h2 id="tab3" name="tab">退 款</h2>
        <h2 id="tab4" name="tab">退 款 查 询</h2>
        <h2 id="tab5" name="tab">交 易 关 闭</h2>-->
    </div>
        <form name=alipayment action=pagepay/pagepay.php method=post target="_blank">
            <div id="body1" class="show" name="divcontent">
                <dl class="content">
                    <dt>商户订单号
：</dt>
                    <dd>
                        <input id="WIDout_trade_no" name="WIDout_trade_no" value="<?php echo $time; ?>" readonly/>
                    </dd>
                    <hr class="one_line">
                    <dt>名称
：</dt>
                    <dd>
                        <input id="WIDsubject" name="WIDsubject" value="捐赠给615MC" readonly/>
                    </dd>
                    <hr class="one_line">
                    <dt>捐赠金额
：</dt>
                    <dd>
                        <input id="WIDtotal_amount" name="WIDtotal_amount"/>
                    </dd>
                    <hr class="one_line">
                    <dt>你的玩家ID或手机号</dt>
                    <dd>
                        <input id="WIDbody" name="WIDbody" />
                    </dd>
                    <hr class="one_line">
                    <dt></dt>
                    <dd id="btn-dd">
                        <span class="new-btn-login-sp">
                            <button class="new-btn-login" type="submit" style="text-align:center;">付 款</button>
                        </span>
                        <span class="note-help">如果您点击“付款”按钮，即表示您同意该次的执行操作。</span>
                    </dd>
                </dl>
            </div>
		</form>
    <!--    <form name=tradequery action=pagepay/query.php method=post target="_blank">
            <div id="body2" class="tab-content" name="divcontent">
                <dl class="content">
                    <dt>商户订单号
：</dt>
                    <dd>
                        <input id="WIDTQout_trade_no" name="WIDTQout_trade_no" />
                    </dd>
                    <hr class="one_line">
                    <dt>支付宝交易号
：</dt>
                    <dd>
                        <input id="WIDTQtrade_no" name="WIDTQtrade_no" />
                    </dd>
                    <hr class="one_line">
                    <dt></dt>
                     <dd>
                        <span style="line-height: 28px; color:red;">注意：商户订单号和支付宝交易号不能同时为空。 trade_no、  out_trade_no如果同时存在优先取trade_no</span>
                    </dd>
                    <dd id="btn-dd">
                        <span class="new-btn-login-sp">
                            <button class="new-btn-login" type="submit" style="text-align:center;">交 易 查 询</button>
                        </span>
                        <span class="note-help">商户订单号与支付宝交易号二选一，如果您点击“交易查询”按钮，即表示您同意该次的执行操作。</span> 
                    </dd>
                </dl>
            </div>
        </form>
        <form name=traderefund action=pagepay/refund.php method=post target="_blank">
            <div id="body3" class="tab-content" name="divcontent">
                <dl class="content">
                    <dt>商户订单号
：</dt>
                    <dd>
                        <input id="WIDTRout_trade_no" name="WIDTRout_trade_no" />
                    </dd>
                    <hr class="one_line">
                    <dt>支付宝交易号
：</dt>
                    <dd>
                        <input id="WIDTRtrade_no" name="WIDTRtrade_no" />
                    </dd>
                    <hr class="one_line">
                    <dt>退款金额
：</dt>
                    <dd>
                        <input id="WIDTRrefund_amount" name="WIDTRrefund_amount" />
                    </dd>
                    <hr class="one_line">
                    <dt>退款原因
：</dt>
                    <dd>
                        <input id="WIDTRrefund_reason" name="WIDTRrefund_reason" />
                    </dd>
                    <hr class="one_line">
                    <dt>退款请求号
：</dt>
                    <dd>
                        <input id="WIDTRout_request_no" name="WIDTRout_request_no" />
                    </dd>
                    <hr class="one_line">
                    <dt></dt>
                    <dd>
                        <span style="line-height: 28px; color:red;">注意：如是部分退款，则参数退款单号（out_request_no）必传。</span>
                    </dd>
                    <dd id="btn-dd">
                        <span class="new-btn-login-sp">
                            <button class="new-btn-login" type="submit" style="text-align:center;">退 款</button>
                        </span>
                        <span class="note-help">商户订单号与支付宝交易号二选一，如果您点击“退款”按钮，即表示您同意该次的执行操作。</span> 
                    </dd>
                </dl>
            </div>
        </form>
        <form name=traderefundquery action=pagepay/refundquery.php method=post target="_blank">
            <div id="body4" class="tab-content" name="divcontent">
                <dl class="content">
                    <dt>商户订单号
：</dt>
                    <dd>
                        <input id="WIDRQout_trade_no" name="WIDRQout_trade_no" />
                    </dd>
                    <hr class="one_line">
                    <dt>支付宝交易号
：</dt>
                    <dd>
                        <input id="WIDRQtrade_no" name="WIDRQtrade_no" />
                    </dd>
                    <hr class="one_line">
                    <dt>退款请求号
：</dt>
                    <dd>
                        <input id="WIDRQout_request_no" name="WIDRQout_request_no" />
                    </dd>
                    <hr class="one_line">
                    <dt></dt>
                    <dd>
                        <span style="line-height: 28px; color:red;">注意：退款请求号值（必传，退款时传的值，如果退款时没传则无法查询）商户订单号和支付宝交易号不能同时为空。 trade_no、  out_trade_no如果同时存在优先取trade_no</span>
                    </dd>
                    <dd id="btn-dd">
                        <span class="new-btn-login-sp">
                            <button class="new-btn-login" type="submit" style="text-align:center;">退 款 查 询</button>
                        </span>
                        <span class="note-help">商户订单号与支付宝交易号二选一，如果您点击“退款查询”按钮，即表示您同意该次的执行操作。</span> 
                    </dd>
                </dl>
            </div>
        </form>
        <form name=tradeclose action=pagepay/close.php method=post target="_blank">
            <div id="body5"  class="tab-content" name="divcontent">
                <dl class="content">
                    <dt>商户订单号
：</dt>
                    <dd>
                        <input id="WIDTCout_trade_no" name="WIDTCout_trade_no" />
                    </dd>
                    <hr class="one_line">
                    <dt>支付宝交易号
：</dt>
                    <dd>
                        <input id="WIDTCtrade_no" name="WIDTCtrade_no" />
                    </dd>
                    <hr class="one_line">
                    <dt></dt>
                    <dd>
                        <span style="line-height: 28px; color:red;">注意：商户订单号和支付宝交易号不能同时为空。 trade_no、  out_trade_no如果同时存在优先取trade_no</span>
                    </dd>
                    <dd id="btn-dd">
                        <span class="new-btn-login-sp">
                            <button class="new-btn-login" type="submit" style="text-align:center;">交 易 关 闭</button>
                        </span>
                        <span class="note-help">商户订单号与支付宝交易号二选一，如果您点击“交易关闭”按钮，即表示您同意该次的执行操作。</span> 
                    </dd>
                </dl>
            </div>
        </form>-->
        <div id="foot">
			<ul class="foot-ul">
				<li>
					支付宝版权所有 2015-2018 ALIPAY.COM 
				</li>
			</ul>
		</div>
	</div>
</body>
<script language="javascript">
    var tabs = document.getElementsByName('tab');
    var contents = document.getElementsByName('divcontent');

    (function changeTab(tab) {
        for(var i = 0, len = tabs.length; i < len; i++) {
            tabs[i].onmouseover = showTab;
        }
    })();

    function showTab() {
        for(var i = 0, len = tabs.length; i < len; i++) {
            if(tabs[i] === this) {
                tabs[i].className = 'selected';
                contents[i].className = 'show';
            } else {
                tabs[i].className = '';
                contents[i].className = 'tab-content';
            }
        }
    }

	function GetDateNow() {
		var vNow = new Date();
		var sNow = "";
		sNow += String(vNow.getFullYear());
		sNow += String(vNow.getMonth() + 1);
		sNow += String(vNow.getDate());
		sNow += String(vNow.getHours());
		sNow += String(vNow.getMinutes());
		sNow += String(vNow.getSeconds());
		sNow += String(vNow.getMilliseconds());
        
		//document.getElementById("WIDout_trade_no").value =  sNow;
		//document.getElementById("WIDsubject").value = "测试";
		//document.getElementById("WIDtotal_amount").value = "0.01";
	}
	GetDateNow();

</script>
<script src="特效.js"></script>
</html>