<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hệ Thống Quản Lý Vật Liệu</title>
    <link rel="stylesheet" type="text/css" href="/css/index.css" />
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #8bbec5;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
      }

      header {
        position: absolute;
        top: 0;
        width: 100%;
        background-color: #006064;
        color: #fff;
        text-align: center;
        padding: 1.5rem 0;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      }

      main {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
      }

      .login-container {
        background-color: #ffffff;
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        width: 100%;
        transition: transform 0.3s, box-shadow 0.3s;
      }

      .login-container:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
      }

      .login-container h2 {
        margin-bottom: 2rem;
        font-size: 1.8rem;
        color: #006064;
        text-align: center;
      }

      .login-container form {
        display: flex;
        flex-direction: column;
      }

      .login-container label {
        margin-bottom: 0.5rem;
        font-weight: bold;
        color: #00796b;
      }

      .login-container input {
        padding: 0.8rem;
        margin-bottom: 1.5rem;
        border: 1px solid #b2dfdb;
        border-radius: 6px;
        font-size: 1rem;
        transition: border-color 0.3s;
      }

      .login-container input:focus {
        border-color: #004d40;
        outline: none;
      }

      .login-container button {
        padding: 0.8rem;
        background-color: #004d40;
        color: #ffffff;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-size: 1rem;
        transition: background-color 0.3s;
      }

      .login-container button:hover {
        background-color: #00796b;
      }
    </style>
  </head>
  <body>
    <main>
      <div class="login-container">
        <h2>Đăng Nhập</h2>
        <form action="login.php" method="POST">
          <label for="username">Tên Đăng Nhập:</label>
          <input type="text" id="username" name="username" required />

          <label for="password">Mật Khẩu:</label>
          <input type="password" id="password" name="password" required />

          <button type="submit">Đăng Nhập</button>
        </form>
      </div>
    </main>
  </body>
</html>
