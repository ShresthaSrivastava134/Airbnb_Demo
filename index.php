<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Booking</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        body {
            height: 100%;
            font-family: 'Poppins', sans-serif;
            background: #FFFCF8;
            color: #484848;
            margin: 0;
            padding-top: 80px;
            line-height: 1.6;
            transition: all 0.3s ease-in-out;
        }

        .navbar-custom {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: #FF385C;
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

        .navbar-nav .active a {
            color: white;
            border-bottom: 2px solid white;
        }

        .login-section {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .login-btn,
        .social-login {
            background: white;
            color: #FF385C;
            padding: 8px 15px;
            border-radius: 20px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.3s ease-in-out;
        }

        .login-btn:hover,
        .social-login:hover {
            background: #fff;
            color: #FF385C;
            transform: scale(1.05);
        }

        .social-login {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .social-login img {
            width: 20px;
            height: 20px;
        }

        .jumbotron {
            width: 85%;
            max-width: 1200px;
            height: 400px;
            background: #FF385C;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 80px auto;
            border-radius: 15px;
            text-align: center;
            padding: 40px;
            transition: all 0.3s ease-in-out;
        }

        .jumbotron:hover {
            transform: scale(1.02);
        }

        .search-container {
            display: flex;
            justify-content: center;
            padding-top: 20px;
        }

        .search-bar {
            width: 30vw;
            display: flex;
            background: white;
            padding: 10px 20px;
            border-radius: 30px;
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.2);
            gap: 20px;
            align-items: center;
            transition: all 0.3s ease-in-out;
        }

        .search-bar:hover {
            transform: scale(1.05);
        }

        .search-bar input {
            border: none;
            outline: none;
            font-size: 18px;
            padding: 10px 15px;
            border-radius: 25px;
            width: 25vw;
            background: #F7F7F7;
        }

        .search-bar button {
            /* background-color: #ddd; */
            color: #ddd;
            background: #FF385C;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 18px;
            font-weight: bold;
            transition: all 0.3s ease-in-out;
        }

        .search-bar button:hover {
            background: #E02749;
            transform: scale(1.1);
        }

        .listings {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }

        .listing {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
            transition: all 0.3s ease-in-out;
        }

        .listing:hover {
            transform: scale(1.05);
        }

        .image-container img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .details {
            padding: 15px;
            color: rgb(50, 42, 42);
        }

        .details h3 {
            margin: 0;
            font-size: 18px;
        }

        .price {
            font-size: 16px;
            font-weight: bold;
            color: #000;
        }

        .foot {
            margin: auto;
            margin-bottom: 100px;
            width: 80%;
            display: flex;
            justify-content: space-between;
            padding: 20px 0;
            border-top: 1px solid #ddd;
        }

        .footer-section h4 {
            margin-bottom: 10px;
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
        }

        .footer-section ul li {
            margin-bottom: 5px;
            color: #717171;
        }

        .footer {
            width: 100vw;
            position: fixed;
            bottom:0;
            text-align: center;
            padding: 10px;
            background: #FF385C;
            color: white;
        }
        

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <nav class="navbar-custom">
        <a href="index.php">
            <img src="images/airbnb_logo.png" class="navbar-logo" alt="Logo">
        </a>

        <ul class="navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="room.php">Room &amp; Facilities</a></li>
            <li><a href="reservation.php">Online Reservation</a></li>
            <li><a href="admin.php">Admin</a></li>
        </ul>

        <div class="navbar-icons">
            <a href="http://www.facebook.com">
                <img src="images/facebook.png" alt="Facebook logo">
            </a>
            <a href="http://www.twitter.com">
                <img src="images/twitter.png" alt="Twitter logo">
            </a>
        </div>
    </nav>
    <div class="search-container">
        <div class="search-bar">
            <input type="text" id="search-input" placeholder="Find your dream location" onkeyup="filterListings()">
            <button onclick="filterListings()"><img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAglJREFUSEu1lcurTWEYh58nMtBBUS4TIWHgFiUDR3GKUKYuxYAUhQFl4A8gEzodwoBCUv4AGSmETJASUUpkQA6R++W13qyjfS57r11n73e41rfe53svv9+SNodtzk9dQERMBTYBa4EF5UXuA1eAS+qrZi43CBARY4ELwPoGCQK4DGxTvzQC9QNExGjgLjAX+A6cBrrV55kkImYA+4AdwKjybKf6sx5kIOA8sAV4CaxWHw/1YUTMB64WF5gCHFX3VwIiYh7wEPhV9HmJmv2uGxGxHLgO/ACmq6+HOvy/gojoAXYDx9U9zQwwIi4CmwvIQfVwFeAZMDP7rz5qErACuAbcVLOiQVFbwWcghzxC/dMkYDzwDuhVJ1QBPgJjgA41YZURER3AJ+CtOrEK8KAU1GL1XmX2f2u7tNi2O9kmtasKcAQ4AJxSdzUJOAdsBXrUvVWAWcAT4HeTa9oJ3CiT1q16oNDOpPyBF8Aq9WkdoS0shTYp1a7urBRaaQW1VvENOAkcU1PZ2fOsMq1iOzCyTJozSNXnsOuvad+biBgHpIDWNZjDh8KLDhUt3QgsAlL1K9V83i8a2fW0UqVrgPSer4XD5nbdBk6o7yMidZBCSzvPLewqht1bSxj2D6eE3ALmAOkGy9Q3fZBhA8rZpMhyo2bnfNSzLQWUkMnABrW7pS2qEmRLWtQI0nbAX/OZthnpLYPRAAAAAElFTkSuQmCC" />
            </button>
        </div>
    </div>
    <div class="listings" id="listings-container">
        <div class="listing" data-location="udaipur">
            <a href="room.php">
                <div class="image-container">
                    <img src="images/udaipur.jpg" alt="Udaipur Lake View">
                </div>
                <div class="details">
                    <h3>Udaipur, India</h3>
                    <p>Luxury Lake View Resort</p>
                    <p>Starts at: ₹12,500/night</p>
                </div>
            </a>
        </div>
        <div class="listing" data-location="manali">
            <a href="room.php">
                <div class="image-container">
                    <img src="images/manali.jpg" alt="Manali Cottage">
                </div>
                <div class="details">
                    <h3>Manali, India</h3>
                    <p>Cozy Wooden Cottage</p>
                    <p>Starts at: ₹5,800/night</p>
                </div>
            </a>
        </div>
        <div class="listing" data-location="goa">
            <a href="room.php">
                <div class="image-container">
                    <img src="images/goa.jpg" alt="Goa Beach House">
                </div>
                <div class="details">
                    <h3>Goa, India</h3>
                    <p>Beachfront Villa</p>
                    <p>Starts at: ₹9,999/night</p>
                </div>
            </a>
        </div>
        <div class="listing" data-location="alleppey">
            <a href="room.php">
                <div class="image-container">
                    <img src="images/kerala.jpg" alt="Kerala Backwater Houseboat">
                </div>
                <div class="details">
                    <h3>Alleppey, India</h3>
                    <p>Backwater Houseboat</p>
                    <p>Starts at: ₹7,500/night</p>
                </div>
            </a>
        </div>
        <div class="listing" data-location="rishikesh">
            <a href="room.php">
                <div class="image-container">
                    <img src="images/rishikesh.jpg" alt="Rishikesh Riverside Cottage">
                </div>
                <div class="details">
                    <h3>Rishikesh, India</h3>
                    <p>Riverside Cottage</p>
                    <p>Starts at: ₹6,000/night</p>
                </div>
            </a>
        </div>
        <div class="listing" data-location="jaipur">
            <a href="room.php">
                <div class="image-container">
                    <img src="images/jaipur.jpg" alt="Jaipur Heritage Haveli">
                </div>
                <div class="details">
                    <h3>Jaipur, India</h3>
                    <p>Heritage Haveli</p>
                    <p>Starts at: ₹8,500/night</p>
                </div>
            </a>
        </div>
        <div class="listing" data-location="shimla">
            <a href="room.php">
                <div class="image-container">
                    <img src="images/shimla.jpg" alt="Shimla Hilltop Cabin">
                </div>
                <div class="details">
                    <h3>Shimla, India</h3>
                    <p>Hilltop Wooden Cabin</p>
                    <p>Starts at: ₹7,200/night</p>
                </div>
            </a>
        </div>
        <div class="listing" data-location="mumbai">
            <a href="room.php">
                <div class="image-container">
                    <img src="images/mumbai.jpg" alt="Mumbai Skyline Apartment">
                </div>
                <div class="details">
                    <h3>Mumbai, India</h3>
                    <p>Luxury Skyline Apartment</p>
                    <p>Starts at: ₹15,000/night</p>
                </div>
            </a>
        </div>
        <div class="listing" data-location="darjeeling">
            <a href="room.php">
                <div class="image-container">
                    <img src="images/darjeeling.jpg" alt="Darjeeling Tea Estate Bungalow">
                </div>
                <div class="details">
                    <h3>Darjeeling, India</h3>
                    <p>Tea Estate Bungalow</p>
                    <p>Starts at: ₹6,500/night</p>
                </div>
            </a>
        </div>
        <div class="listing" data-location="pondicherry">
            <a href="room.php">
                <div class="image-container">
                    <img src="images/pondicherry.jpg" alt="Pondicherry French Villa">
                </div>
                <div class="details">
                    <h3>Pondicherry, India</h3>
                    <p>French Heritage Villa</p>
                    <p>Starts at: ₹9,200/night</p>
                </div>
            </a>
        </div>
        <div class="listing" data-location="kodaikanal">
            <a href="room.php">
                <div class="image-container">
                    <img src="images/kodaikanal.jpg" alt="Kodaikanal Mountain Retreat">
                </div>
                <div class="details">
                    <h3>Kodaikanal, India</h3>
                    <p>Mountain Retreat</p>
                    <p>Starts at: ₹7,800/night</p>
                </div>
            </a>
        </div>
        <div class="listing" data-location="andaman">
            <a href="room.php">
                <div class="image-container">
                    <img src="images/andaman.jpg" alt="Andaman Beachfront Cottage">
                </div>
                <div class="details">
                    <h3>Andaman, India</h3>
                    <p>Beachfront Wooden Cottage</p>
                    <p>Starts at: ₹11,000/night</p>
                </div>
            </a>
        </div>
        <div class="listing" data-location="leh-ladakh">
            <a href="room.php">
                <div class="image-container">
                    <img src="images/leh.jpg" alt="Leh Ladakh Eco Resort">
                </div>
                <div class="details">
                    <h3>Leh, Ladakh, India</h3>
                    <p>Eco-Friendly Mountain Resort</p>
                    <p>Starts at: ₹12,000/night</p>
                </div>
            </a>
        </div>
        <div class="listing" data-location="ooty">
            <a href="room.php">
                <div class="image-container">
                    <img src="images/ooty.jpg" alt="Ooty Colonial Bungalow">
                </div>
                <div class="details">
                    <h3>Ooty, India</h3>
                    <p>Colonial Heritage Bungalow</p>
                    <p>Starts at: ₹9,800/night</p>
                </div>
            </a>
        </div>
        <div class="listing" data-location="srinagar">
            <a href="room.php">
                <div class="image-container">
                    <img src="images/kashmir.jpg" alt="Kashmir Houseboat">
                </div>
                <div class="details">
                    <h3>Srinagar, Kashmir, India</h3>
                    <p>Luxury Dal Lake Houseboat</p>
                    <p>Starts at: ₹10,500/night</p>
                </div>
            </a>
        </div>
        <div class="listing" data-location="mahabaleshwar">
            <a href="room.php">
                <div class="image-container">
                    <img src="images/mahabaleshwar.jpg" alt="Mahabaleshwar Cliffside Retreat">
                </div>
                <div class="details">
                    <h3>Mahabaleshwar, India</h3>
                    <p>Cliffside Retreat with Valley View</p>
                    <p>Starts at: ₹7,900/night</p>
                </div>
            </a>
        </div>

        <div class="listing" data-location="rann-of-kutch">
            <a href="room.php">
                <div class="image-container">
                    <img src="images/rann.jpg" alt="Rann of Kutch Desert Resort">
                </div>
                <div class="details">
                    <h3>Rann of Kutch, India</h3>
                    <p>Traditional Desert Bhunga</p>
                    <p>Starts at: ₹8,600/night</p>
                </div>
            </a>
        </div>

        <div class="listing" data-location="kolkata">
            <a href="room.php">
                <div class="image-container">
                    <img src="images/kolkata.jpg" alt="Kolkata Heritage Apartment">
                </div>
                <div class="details">
                    <h3>Kolkata, India</h3>
                    <p>Vintage Heritage Apartment</p>
                    <p>Starts at: ₹6,300/night</p>
                </div>
            </a>
        </div>

        <div class="listing" data-location="spiti-valley">
            <a href="room.php">
                <div class="image-container">
                    <img src="images/spiti.jpg" alt="Spiti Valley Monastery Stay">
                </div>
                <div class="details">
                    <h3>Spiti Valley, India</h3>
                    <p>Traditional Monastery Stay</p>
                    <p>Starts at: ₹9,500/night</p>
                </div>
            </a>
        </div>

        <div class="listing" data-location="andaman-overwater">
            <a href="room.php">
                <div class="image-container">
                    <img src="images/andaman2.jpg" alt="Andaman Overwater Villa">
                </div>
                <div class="details">
                    <h3>Andaman, India</h3>
                    <p>Luxury Overwater Villa</p>
                    <p>Starts at: ₹15,500/night</p>
                </div>
            </a>
        </div>

        <div class="listing" data-location="chennai">
            <a href="room.php">
                <div class="image-container">
                    <img src="images/chennai.jpg" alt="Chennai Beach House">
                </div>
                <div class="details">
                    <h3>Chennai, India</h3>
                    <p>Luxury Beach House</p>
                    <p>Starts at: ₹13,500/night</p>
                </div>
            </a>
        </div>

    </div>

    <div class="foot">
        <div class="footer-section">
            <h4>Support</h4>
            <ul>
                <li>Help Centre</li>
                <li>AirCover</li>
                <li>Anti-discrimination</li>
                <li>Disability support</li>
                <li>Cancellation options</li>
                <li>Report neighbourhood concern</li>
            </ul>
        </div>
        <div class="footer-section">
            <h4>Hosting</h4>
            <ul>
                <li>Airbnb your home</li>
                <li>AirCover for Hosts</li>
                <li>Hosting resources</li>
                <li>Community forum</li>
                <li>Hosting responsibly</li>
                <li>Join a free Hosting class</li>
                <li>Find a co-host</li>
            </ul>
        </div>
        <div class="footer-section">
            <h4>Airbnb</h4>
            <ul>
                <li>Newsroom</li>
                <li>New features</li>
                <li>Careers</li>
                <li>Investors</li>
                <li>Airbnb.org emergency stays</li>
            </ul>
        </div>
    </div>
    <div class="footer">
        <p>Developed by:<br>Ananya Singh(2205790) | Adnan Imam(22051225) | Krishna Agrawal(22051258) | Shrestha
            Srivastava(22051281)</p>
    </div>

    <script>
        function filterListings() {
            const searchInput = document.getElementById('search-input').value.toLowerCase();
            const listings = document.querySelectorAll('.listing');

            listings.forEach(listing => {
                const location = listing.getAttribute('data-location').toLowerCase();
                listing.style.display = location.includes(searchInput) ? "block" : "none";
            });
        }
    </script>
</body>

</html>