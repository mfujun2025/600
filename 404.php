<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>页面不存在 | 400电话办理</title>
  <style>
    body {
      text-align: center;
      padding: 100px 20px;
      font-family: "Microsoft YaHei", "PingFang SC", sans-serif;
      background-color: #f8f9fc;
      color: #333;
    }
    h1 {
      font-size: 48px;
      color: #165DFF;
      margin-bottom: 20px;
    }
    p {
      font-size: 18px;
      color: #666;
      margin-bottom: 30px;
    }
    .back-btn {
      display: inline-block;
      padding: 12px 30px;
      background-color: #165DFF;
      color: #fff;
      border-radius: 8px;
      text-decoration: none;
      font-size: 16px;
      transition: all 0.3s ease;
    }
    .back-btn:hover {
      background-color: #0040C9;
      transform: translateY(-2px);
    }
  </style>
</head>
<body>
  <h1>404 页面不存在</h1>
  <p>您访问的城市分站暂未开通，1.5秒后自动返回400电话办理主页面...</p>
  <a href="/600.html" class="back-btn">立即返回主页面</a>

  <script>
    setTimeout(() => {
      window.location.href = "/600.html";
    }, 1500);
  </script>
</body>
</html>