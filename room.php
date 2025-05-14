<?php
    include_once 'admin/include/class.user.php'; 
    $user = new User();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Booking</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        /* General Styling */
        body {
            font-family: 'Poppins', sans-serif;
            background: #FFFCF8;
            /* Airbnb's light background */
            color: #484848;
            margin: 0;
            padding-top: 80px;
            line-height: 1.6;
        }

        .container {
            max-width: 1300px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Navbar */
        .navbar-custom {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: #FF385C;
            /* Airbnb coral-pink */
            padding: 15px 0;
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            transition: background 0.3s ease-in-out;
        }

        .navbar-custom.scrolled {
            background: #E12D50;
            /* Darker coral on scroll */
        }

        .navbar-logo {
            height: 50px;
            margin-left: 20px;
            border-radius: 8px;
        }

        .navbar-nav {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .navbar-nav li {
            margin: 0 15px;
        }

        .navbar-nav li a {
            color: #fff;
            font-weight: 600;
            text-decoration: none;
            transition: 0.3s;
            padding: 10px 15px;
            display: block;
        }

        .navbar-nav li a:hover {
            color: #FF385C;
            background: #fff;
            border-radius: 5px;
        }

        .navbar-icons {
            margin-right: 20px;
            display: flex;
        }

        .navbar-icons a img {
            width: 35px;
            height: 35px;
            transition: 0.3s;
            margin: 0 5px;
        }

        .navbar-icons a img:hover {
            transform: scale(1.2);
        }

        /* Room Container */
        .room-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin-top: 60px;
        }

        .room-card {
            background: #FFF;
            /* White card */
            border-radius: 12px;
            padding: 30px;
            width: calc(33% - 20px);
            max-width: 400px;
            box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s, box-shadow 0.3s;
            text-align: center;
            background-color: beige;
            border: black solid 1px
        }

        .room-card:hover {
            transform: translateY(-10px);
            box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.15);
        }

        .room-card h4 {
            font-size: 24px;
            color: #FF385C;
            /* Coral-pink headings */
            font-weight: 600;
            margin-bottom: 15px;
        }

        .room-card h6 {
            font-size: 18px;
            color: #555;
            font-family: monospace;
            margin: 10px 0;
            line-height: 1.4;
        }

        /* Book Now Button */
        .book-now-btn {
            display: inline-block;
            background: #FF385C;
            /* Airbnb coral-pink */
            color: #fff;
            font-weight: 600;
            padding: 12px 25px;
            border-radius: 8px;
            transition: 0.3s ease-in-out;
            text-decoration: none;
            margin-top: 15px;
            box-shadow: 0 5px 15px rgba(255, 56, 92, 0.5);
        }

        .book-now-btn:hover {
            text-decoration: none;
            background: #fff;
            color: #FF385C;
            box-shadow: 0 0 15px #FF385C;
        }

        /* No Data Message */
        .no-data {
            text-align: center;
            font-size: 22px;
            color: #777;
            margin-top: 50px;
        }

        /* Footer Links */
        a {
            color: #FF385C;
            text-decoration: none;
            transition: 0.3s;
        }

        a:hover {
            color: #333;
            text-decoration: underline;
        }

        .navbar-nav .active a {
            color: white;
            border-bottom: 2px solid white;
        }

        /* RESPONSIVENESS */
        @media screen and (max-width: 1024px) {
            .room-card {
                width: calc(50% - 20px);
            }
        }

        @media screen and (max-width: 768px) {
            .navbar-nav {
                flex-direction: column;
                align-items: center;
            }

            .navbar-icons {
                display: none;
            }

            .room-card {
                width: 90%;
            }

            .book-now-btn {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <!-- Navbar -->
        <nav class="navbar-custom">
            <a href="index.php">
                <img src="images/airbnb_logo.png" class="navbar-logo" alt="Logo">
            </a>

            <ul class="navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="room.php">Room &amp; Facilities</a></li>
                <li><a href="reservation.php">Online Reservation</a></li>
                <li><a href="admin.php">Admin</a></li>
            </ul>

            <div class="navbar-icons">
                <a href="http://www.facebook.com">
                    <img src="images/facebook.png" alt="Facebook">
                </a>
                <a href="http://www.twitter.com">
                    <img src="images/twitter.png" alt="Twitter">
                </a>
            </div>
        </nav>

        <!-- Room Container -->
        <div class="room-container">

            <?php
                $sql = "SELECT * FROM room_category";
                $result = mysqli_query($user->db, $sql);

                if ($result && mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                        echo "
                            <div class='room-card'>
                                <h4>".$row['roomname']."</h4>
                                <hr>
                                <h6>No of Beds: ".$row['no_bed']." ".$row['bedtype']." bed</h6>
                                <h6>".$row['facility']."</h6>
                                <a href='./booknow.php?roomname=".$row['roomname']."' class='book-now-btn'>Book Now</a>
                            </div>
                        ";
                    }
                } else {
                    echo "<p class='no-data'>No Data Available</p>";
                }
            ?>

        </div>
    </div>

</body>

</html>