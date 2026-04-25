<?php
// Start session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<style>
    .navbar {
        background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
        overflow: hidden;
        position: relative;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .navbar a {
        float: left;
        display: block;
        color: #fff;
        text-align: center;
        padding: 16px 20px;
        text-decoration: none;
        font-size: 18px;
        font-weight: 500;
        transition: all 0.3s ease;
        position: relative;
    }
    .navbar a:hover {
        background-color: rgba(255,255,255,0.2);
        color: #fff;
        transform: translateY(-2px);
    }
    .navbar a.active {
        background-color: rgba(255,255,255,0.3);
        color: #fff;
        border-bottom: 3px solid #fff;
    }
    .navbar .icon {
        display: none;
        background: none;
        color: #fff;
        padding: 16px 20px;
        font-size: 18px;
    }
    .navbar .icon:hover {
        background: rgba(255,255,255,0.2);
    }
    @media screen and (max-width: 600px) {
        .navbar a:not(:first-child) {display: none;}
        .navbar a.icon {
            float: right;
            display: block;
        }
    }
    @media screen and (max-width: 600px) {
        .navbar.responsive .icon {
            position: absolute;
            right: 0;
            top: 0;
        }
        .navbar.responsive a {
            float: none;
            display: block;
            text-align: left;
        }
    }
</style>

<div class="navbar" id="myNavbar">
    <a href="index.php" class="active">🏠 Home</a>
    <?php if (isset($_SESSION['user_id'])): ?>
        <a href="add.php">➕ Add</a>
        <a href="logout.php">🚪 Logout</a>
    <?php else: ?>
        <a href="login.php">🔐 Login</a>
        <a href="index.php">📝 Signup</a>
    <?php endif; ?>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<script>
function myFunction() {
    var x = document.getElementById("myNavbar");
    if (x.className === "navbar") {
        x.className += " responsive";
    } else {
        x.className = "navbar";
    }
}
</script>
