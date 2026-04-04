<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
  
      body {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      }
      .signin-container {
        width: 100%;
        max-width: 450px;
      }
      .signin-card {
        background: white;
        border-radius: 15px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
        overflow: hidden;
      }
      .signin-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 30px 20px;
        text-align: center;
      }
      .signin-header h2 {
        margin: 0;
        font-weight: 700;
        font-size: 28px;
      }
      .signin-header p {
        margin: 8px 0 0 0;
        opacity: 0.9;
        font-size: 14px;
      }
      .signin-body {
        padding: 30px;
      }
      .form-group {
        margin-bottom: 20px;
      }
      .form-label {
        font-weight: 600;
        color: #333;
        margin-bottom: 8px;
        display: block;
      }
      .form-control {
        border: 2px solid #e0e0e0;
        border-radius: 8px;
        padding: 12px 15px;
        font-size: 15px;
        transition: all 0.3s ease;
      }
      .form-control:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.15);
      }
      .form-control::placeholder {
        color: #999;
      }
      .form-check {
        margin-bottom: 20px;
      }
      .form-check-input {
        width: 18px;
        height: 18px;
        border: 2px solid #e0e0e0;
        margin-top: 2px;
      }
      .form-check-input:checked {
        background-color: #667eea;
        border-color: #667eea;
      }
      .form-check-label {
        margin-left: 8px;
        color: #555;
        font-size: 14px;
      }
      .btn-signin {
        width: 100%;
        padding: 12px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
        color: white;
        font-weight: 600;
        border-radius: 8px;
        font-size: 16px;
        transition: all 0.3s ease;
        cursor: pointer;
      }
      .btn-signin:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
        color: white;
      }
      .btn-signin:active {
        transform: translateY(0);
      }
      .signin-footer {
        text-align: center;
        padding: 20px 30px;
        border-top: 1px solid #f0f0f0;
        background: #fafafa;
      }
      .signin-footer a {
        color: #667eea;
        text-decoration: none;
        font-size: 14px;
        font-weight: 500;
      }
      .signin-footer a:hover {
        text-decoration: underline;
      }
      .signin-footer p {
        margin: 0;
      }


    </style>
  </head>
  <body>
    <div class="signin-container">
      <div class="signin-card">
        <div class="signin-header">
          <i class="fas fa-lock" style="font-size: 32px; margin-bottom: 10px;"></i>
          <h2>Sign In</h2>
          <p>Welcome back!</p>
        </div>
        
        <div class="signin-body">
          <form method="POST">
            <div class="form-group">
              <label for="inputEmail" class="form-label">
                <i class="fas fa-envelope"></i> Email Address
              </label>
              <input type="email" class="form-control" id="inputEmail" name="email" placeholder="you@example.com" required>
            </div>

            <div class="form-group">
              <label for="inputPassword" class="form-label">
                <i class="fas fa-key"></i> Password
              </label>
              <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Enter your password" required>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="rememberMe" name="remember">
              <label class="form-check-label" for="rememberMe">
                Remember me
              </label>
            </div>

            <button type="submit" class="btn btn-signin">
              <i class="fas fa-sign-in-alt"></i> Sign In
            </button>
          </form>
        </div>

        <div class="signin-footer">
          <p>Don't have an account? <a href="signup.php">Sign up here</a></p>
          <p style="margin-top: 10px; font-size: 12px; color: #999;">
            <a href="#" style="color: #999;">Forgot password?</a>
          </p>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>