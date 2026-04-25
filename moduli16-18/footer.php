<style>
    .footer {
        background: linear-gradient(90deg, #764ba2 0%, #667eea 100%);
        color: #fff;
        padding: 40px 20px;
        text-align: center;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin-top: 50px;
    }
    .footer .container {
        max-width: 1200px;
        margin: 0 auto;
    }
    .footer h3 {
        margin-bottom: 20px;
        font-size: 24px;
    }
    .footer p {
        margin: 10px 0;
        font-size: 16px;
    }
    .footer .links {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        margin-bottom: 20px;
    }
    .footer .links a {
        color: #fff;
        text-decoration: none;
        margin: 0 15px;
        font-size: 16px;
        transition: color 0.3s ease;
    }
    .footer .links a:hover {
        color: #ddd;
    }
    .footer .social {
        margin-bottom: 20px;
    }
    .footer .social a {
        color: #fff;
        font-size: 24px;
        margin: 0 10px;
        text-decoration: none;
        transition: transform 0.3s ease;
    }
    .footer .social a:hover {
        transform: scale(1.2);
    }
    .footer .copyright {
        border-top: 1px solid rgba(255,255,255,0.3);
        padding-top: 20px;
        font-size: 14px;
    }
    @media (max-width: 600px) {
        .footer .links {
            flex-direction: column;
        }
        .footer .links a {
            margin: 5px 0;
        }
    }
</style>

<div class="footer">
    <div class="container">
        <h3>PHP-MySQL Project</h3>
        <p>Explore our modules and features.</p>
        <div class="links">
            <a href="index.php">Home</a>
            <a href="login.php">Login</a>
            <a href="add.php">Add</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </div>
        <div class="social">
            <a href="#" title="Facebook">📘</a>
            <a href="#" title="Twitter">🐦</a>
            <a href="#" title="Instagram">📷</a>
            <a href="#" title="LinkedIn">💼</a>
        </div>
        <div class="copyright">
            <p>&copy; <?php echo date('Y'); ?> PHP-MySQL Project. All rights reserved.</p>
        </div>
    </div>
</div>
