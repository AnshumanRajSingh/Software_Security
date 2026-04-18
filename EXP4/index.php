<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

$conn = mysqli_connect("localhost","root","","login_system");

$message = "";

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    // ❌ Vulnerable query (kept as per original intentional design)
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";

    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result) > 0){
        $message = "PROXIMITY AUTHENTICATED: ACCESS GRANTED 🔓";
    } else {
        $message = "CRITICAL ERROR: AUTHENTICATION FAILED ❌";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sentinel Cyber-Gate | Secure Login</title>
    <style>
        :root {
            --primary: #00f2ff;
            --danger: #ff003c;
            --bg-dark: #050a0f;
            --card-bg: rgba(10, 20, 30, 0.85);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            height: 100vh;
            background: radial-gradient(circle, #0d1b2a 0%, #050a0f 100%);
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        /* Scanline Effect */
        body::before {
            content: " ";
            position: absolute;
            top: 0; left: 0; bottom: 0; right: 0;
            background: linear-gradient(rgba(18, 16, 16, 0) 50%, rgba(0, 0, 0, 0.25) 50%), 
                        linear-gradient(90deg, rgba(255, 0, 0, 0.06), rgba(0, 255, 0, 0.02), rgba(0, 0, 255, 0.06));
            z-index: 2;
            background-size: 100% 4px, 3px 100%;
            pointer-events: none;
        }

        .card {
            position: relative;
            width: 400px;
            padding: 40px;
            background: var(--card-bg);
            border: 1px solid rgba(0, 242, 255, 0.3);
            border-radius: 4px;
            box-shadow: 0 0 40px rgba(0, 0, 0, 0.8), inset 0 0 10px rgba(0, 242, 255, 0.1);
            backdrop-filter: blur(10px);
            z-index: 10;
        }

        /* Decorative Corners */
        .card::before {
            content: "";
            position: absolute;
            top: -2px; left: -2px;
            width: 20px; height: 20px;
            border-top: 2px solid var(--primary);
            border-left: 2px solid var(--primary);
        }

        h2 {
            font-size: 1.2rem;
            letter-spacing: 3px;
            text-transform: uppercase;
            margin-bottom: 30px;
            color: var(--primary);
            text-shadow: 0 0 10px rgba(0, 242, 255, 0.5);
        }

        .status-badge {
            font-size: 0.7rem;
            background: rgba(0, 242, 255, 0.1);
            padding: 4px 10px;
            border-radius: 20px;
            margin-bottom: 20px;
            display: inline-block;
            border: 1px solid var(--primary);
            color: var(--primary);
        }

        input {
            width: 100%;
            padding: 12px 15px;
            margin: 10px 0;
            background: rgba(0, 0, 0, 0.5);
            border: 1px solid #1a3a4a;
            color: var(--primary);
            font-family: 'Courier New', monospace;
            outline: none;
            transition: 0.3s;
        }

        input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 10px rgba(0, 242, 255, 0.2);
        }

        input[type="submit"] {
            margin-top: 20px;
            background: var(--primary);
            color: #000;
            font-weight: bold;
            cursor: pointer;
            border: none;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        input[type="submit"]:hover {
            background: #fff;
            box-shadow: 0 0 20px var(--primary);
        }

        .message {
            margin-top: 20px;
            font-size: 0.9rem;
            padding: 10px;
            background: rgba(0, 0, 0, 0.4);
            border-left: 3px solid var(--primary);
            font-family: 'Courier New', monospace;
        }

        .error { border-left-color: var(--danger); color: var(--danger); }

        a {
            color: rgba(255, 255, 255, 0.5);
            text-decoration: none;
            font-size: 0.8rem;
            display: block;
            margin-top: 20px;
            transition: 0.3s;
        }

        a:hover { color: var(--primary); }

    </style>
</head>
<body>

<div class="card">
    <div class="status-badge">SYSTEM STATUS: VIGILANT</div>
    <h2>Sentinel Cyber-Gate</h2>

    <form method="POST">
        <input type="text" name="username" placeholder="IDENTIFICATION ID" required autocomplete="off">
        <input type="password" name="password" placeholder="ENCRYPTED KEY" required>
        <input type="submit" name="submit" value="ESTABLISH UPLINK">
    </form>

    <?php
    if($message != ""){
        $class = strpos($message, 'GRANTED') !== false ? '' : 'error';
        echo "<div class='message $class'>$message</div>";
    }
    ?>

    <a href="register.php">Initialize New Credentials</a>
</div>

</body>
</html>