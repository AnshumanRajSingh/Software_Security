<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

$conn = mysqli_connect("localhost","root","","login_system");

$message = "";

if(isset($_POST['register'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // ❌ Vulnerable query (kept consistent with your login page for security testing)
    // In a real app, you would use password_hash() and Prepared Statements!
    $checkUser = "SELECT * FROM users WHERE username='$username'";
    $checkResult = mysqli_query($conn, $checkUser);

    if(mysqli_num_rows($checkResult) > 0){
        $message = "ERROR: IDENTITY ID ALREADY REGISTERED";
    } else {
        $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        if(mysqli_query($conn, $query)){
            $message = "CREDENTIALS INITIALIZED SUCCESSFULLY ✅";
        } else {
            $message = "SYSTEM FAILURE: UPLINK REJECTED";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sentinel Cyber-Gate | Register</title>
    <style>
        /* Reusing your "Cyber-Industrial" CSS for consistency */
        :root { --primary: #00f2ff; --danger: #ff003c; --bg-dark: #050a0f; --card-bg: rgba(10, 20, 30, 0.85); }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            height: 100vh;
            background: radial-gradient(circle, #0d1b2a 0%, #050a0f 100%);
            font-family: 'Segoe UI', sans-serif; color: white;
            display: flex; align-items: center; justify-content: center; overflow: hidden;
        }
        body::before {
            content: " "; position: absolute; top: 0; left: 0; bottom: 0; right: 0;
            background: linear-gradient(rgba(18, 16, 16, 0) 50%, rgba(0, 0, 0, 0.25) 50%), 
                        linear-gradient(90deg, rgba(255, 0, 0, 0.06), rgba(0, 255, 0, 0.02), rgba(0, 0, 255, 0.06));
            z-index: 2; background-size: 100% 4px, 3px 100%; pointer-events: none;
        }
        .card {
            position: relative; width: 400px; padding: 40px; background: var(--card-bg);
            border: 1px solid rgba(0, 242, 255, 0.3); border-radius: 4px; z-index: 10;
            backdrop-filter: blur(10px); text-align: center;
        }
        .card::before {
            content: ""; position: absolute; top: -2px; left: -2px;
            width: 20px; height: 20px; border-top: 2px solid var(--primary); border-left: 2px solid var(--primary);
        }
        h2 { font-size: 1.2rem; letter-spacing: 3px; text-transform: uppercase; margin-bottom: 30px; color: var(--primary); }
        .status-badge { font-size: 0.7rem; background: rgba(0, 242, 255, 0.1); padding: 4px 10px; border-radius: 20px; margin-bottom: 20px; display: inline-block; border: 1px solid var(--primary); color: var(--primary); }
        input {
            width: 100%; padding: 12px 15px; margin: 10px 0; background: rgba(0, 0, 0, 0.5);
            border: 1px solid #1a3a4a; color: var(--primary); font-family: 'Courier New', monospace; outline: none;
        }
        input[type="submit"] {
            margin-top: 20px; background: var(--primary); color: #000; font-weight: bold; cursor: pointer; border: none; text-transform: uppercase; letter-spacing: 2px;
        }
        input[type="submit"]:hover { background: #fff; box-shadow: 0 0 20px var(--primary); }
        .message { margin-top: 20px; font-size: 0.9rem; padding: 10px; background: rgba(0, 0, 0, 0.4); border-left: 3px solid var(--primary); font-family: 'Courier New', monospace; }
        .error { border-left-color: var(--danger); color: var(--danger); }
        a { color: rgba(255, 255, 255, 0.5); text-decoration: none; font-size: 0.8rem; display: block; margin-top: 20px; }
        a:hover { color: var(--primary); }
    </style>
</head>
<body>

<div class="card">
    <div class="status-badge">REGISTRATION PROTOCOL ACTIVE</div>
    <h2>New Identity Uplink</h2>

    <form method="POST">
        <input type="text" name="username" placeholder="CHOOSE IDENTIFICATION ID" required>
        <input type="password" name="password" placeholder="SET ENCRYPTED KEY" required>
        <input type="submit" name="register" value="INITIALIZE ACCOUNT">
    </form>

    <?php
    if($message != ""){
        $class = strpos($message, 'SUCCESSFULLY') !== false ? '' : 'error';
        echo "<div class='message $class'>$message</div>";
    }
    ?>

    <a href="login.php">Return to Secure Terminal</a>
</div>

</body>
</html>