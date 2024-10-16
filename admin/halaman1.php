    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Dumpling Cake</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%; /* set height to 100% */
            background-image: url('img/gambar9.jpg');
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            color: white;
        }
    
        .container {
            text-align: center;
            padding-top: 100px;
        }
        
        h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }
        
        p {
            font-size: 1.5em;
            margin-bottom: 60px; /* Increased margin to move "Admin" and "User" links lower */
        }
        
        /* Style the link */
        a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            margin: 0 10px;
            padding: 8px 20px;
            border: 2px solid white;
            border-radius: 25px;
            transition: all 0.3s ease;
        }
        
        /* Style the link on hover */
        a:hover {
            background-color: white;
            color: #333; /* Change text color on hover */
        }
        
        .social-icons {
            list-style: none;
            padding: 0;
            margin: 250px 0;
        }
        
        .social-icons li {
            display: inline-block;
            margin: 0 7px; /* Adjust spacing between icons */
        }
        
        .social-icons li a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 20px;
            height: 20px;
            background-color: #ccc;
            border-radius: 50%;
            font-size: 1.5em; /* Smaller size for icons */
            color: #fff;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        
        /* Change icon color */
        .social-icons li a i {
            color: #fff;
        }
        
        /* Hover effect for social icons */
        .social-icons li a:hover {
            background-color: #333;
        }
        
        /* Specific color for each social media icon */
        .social-icons li a.twitter { background-color: #1DA1F2; }
        .social-icons li a.facebook { background-color: #1877F2; }
        .social-icons li a.instagram { background-color: #E4405F; }
        .social-icons li a.whatsapp { background-color: #00FF00; } /* Change background color to green */
        .social-icons li a.youtube { background-color: #FF0000; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Dumpling Cake</h1>
        <p>Enjoy our delicious dumplings and cakes!</p>
        <!-- Add the link to admin_user.php -->
        <a href="Admin/login.php">Admin</a>
        <a href="login.php">User</a>
        <!-- Social Icons -->
        <ul class="social-icons">
            <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a class="facebook" href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a class="instagram" href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a class="whatsapp" href="#"><i class="fab fa-whatsapp"></i></a></li> <!-- Change CSS class to "whatsapp" -->
            <li><a class="youtube" href="#"><i class="fab fa-youtube"></i></a></li>
        </ul>
    </div>
</body>
</html>
