<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
       <style>
        * {
            box-sizing: border-box;
        }
 
        body {
            margin: 0;
            min-height: 100vh;
            font-family: 'M PLUS Rounded 1c', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #bfe9ff 0%, #ffd6ec 45%, #fff0c2 100%);
            background-size: 300% 300%;
            animation: bgShift 12s ease infinite;
            position: relative;
            overflow: hidden;
        }
 
        @keyframes bgShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
 
        /* floating sparkle decorations */
        body::before,
        body::after {
            content: "✦";
            position: fixed;
            font-size: 40px;
            color: rgba(255,255,255,0.85);
            text-shadow: 0 0 10px rgba(255, 182, 230, 0.8);
            animation: floaty 6s ease-in-out infinite;
            pointer-events: none;
            z-index: 0;
        }
 
        body::before {
            top: 12%;
            left: 10%;
            animation-delay: 0s;
        }
 
        body::after {
            bottom: 15%;
            right: 12%;
            font-size: 55px;
            animation-delay: 2s;
        }
 
        @keyframes floaty {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-18px) rotate(15deg); }
        }
 
        .card {
            position: relative;
            z-index: 1;
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            border: 3px solid #ffffff;
            border-radius: 28px;
            padding: 40px 45px;
            max-width: 420px;
            width: 90%;
            text-align: center;
            box-shadow:
                0 10px 25px rgba(180, 150, 255, 0.35),
                0 0 0 6px rgba(255, 214, 236, 0.5);
        }
 
        .badge {
            display: inline-block;
            font-size: 13px;
            font-weight: 700;
            color: #ff6fb5;
            background: #ffe5f4;
            border: 2px dashed #ffb6de;
            border-radius: 999px;
            padding: 4px 16px;
            margin-bottom: 14px;
            letter-spacing: 1px;
        }
 
        .card h1 {
            margin: 0 0 6px;
            font-size: 22px;
            font-weight: 800;
            background: linear-gradient(90deg, #6fc8ff, #ff8fd4, #ffd36f);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
 
        .username {
            display: inline-block;
            margin-top: 8px;
            font-size: 20px;
            font-weight: 700;
            color: #6a4fd6;
            background: #eee6ff;
            border-radius: 14px;
            padding: 6px 18px;
        }
 
        .username::before {
            content: "🎵 ";
        }
 
        .logout-btn {
            display: inline-block;
            margin-top: 30px;
            text-decoration: none;
            font-weight: 700;
            font-size: 15px;
            color: #ffffff;
            background: linear-gradient(90deg, #ff9ecd, #ff6fb5);
            padding: 12px 32px;
            border-radius: 999px;
            box-shadow: 0 6px 0 #e0559b, 0 8px 15px rgba(255, 111, 181, 0.35);
            transition: transform 0.12s ease, box-shadow 0.12s ease;
        }
 
        .logout-btn:hover {
            transform: translateY(2px);
            box-shadow: 0 4px 0 #e0559b, 0 6px 10px rgba(255, 111, 181, 0.35);
        }
 
        .logout-btn:active {
            transform: translateY(6px);
            box-shadow: 0 0 0 #e0559b;
        }
    </style>
</head>
<body>
    
<?php
    session_start();

    if(!isset($_SESSION["username"])){
        header("location: login.php");
        exit;
    }
?>

    what plan ? <?= $_SESSION["username"] ?>

    <a href="logout.php">logout</a>

</body>
</html>