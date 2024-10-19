<?php  
// 假设这是你的支付记录数组，初始为空  
$paymentRecords = [];  
  
// 检查是否有提交表单（模拟添加支付记录）  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    // 获取表单数据（这里应该进行验证，但为了简化示例而省略）  
    $userId = isset($_POST['user_id']) ? intval($_POST['user_id']) : 0;  
    $orderId = isset($_POST['order_id']) ? htmlspecialchars($_POST['order_id']) : '';  
    $amount = isset($_POST['amount']) ? floatval($_POST['amount']) : 0.0;  
    $paymentTime = date('Y-m-d H:i:s'); // 当前时间作为支付时间  
    $status = isset($_POST['status']) ? htmlspecialchars($_POST['status']) : 'Pending';  
    $transactionId = isset($_POST['transaction_id']) ? htmlspecialchars($_POST['transaction_id']) : '';  
  
    // 将新记录添加到数组中  
    $paymentRecords[] = [  
        'user_id' => $userId,  
        'order_id' => $orderId,  
        'amount' => $amount,  
        'payment_time' => $paymentTime,  
        'status' => $status,  
        'transaction_id' => $transactionId  
    ];  
}  
  
// 生成HTML表格来显示支付记录  
?>  
  
<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <title>支付记录</title>  
</head>  
<body>  
  
<h1>添加支付记录</h1>  
<form method="post" action="">  
    用户ID: <input type="text" name="user_id" required><br>  
    商家订单ID: <input type="text" name="order_id" required><br>  
    支付金额: <input type="text" name="amount" required><br>  
    支付状态: <input type="text" name="status" value="Success" required><br>  
    支付宝交易ID: <input type="text" name="transaction_id" required><br>  
    <input type="submit" value="提交">  
</form>  
  
<h1>支付记录列表</h1>  
<table border="1">  
    <tr>  
        <th>用户ID</th>  
        <th>订单ID</th>  
        <th>支付金额</th>  
        <th>支付时间</th>  
        <th>支付状态</th>  
        <th>交易ID</th>  
    </tr>  
    <?php foreach ($paymentRecords as $record): ?>  
    <tr>  
        <td><?php echo htmlspecialchars($record['user_id']); ?></td>  
        <td><?php echo htmlspecialchars($record['order_id']); ?></td>  
        <td><?php echo htmlspecialchars($record['amount']); ?></td>  
        <td><?php echo htmlspecialchars($record['payment_time']); ?></td>  
        <td><?php echo htmlspecialchars($record['status']); ?></td>  
        <td><?php echo htmlspecialchars($record['transaction_id']); ?></td>  
    </tr>  
    <?php endforeach; ?>  
</table>  
  
</body>  
</html>