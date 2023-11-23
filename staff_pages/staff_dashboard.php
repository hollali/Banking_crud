<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Employee Dashboard</title>
    <link rel="stylesheet" href="style.css" />
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header class="header">
        <div class="logo">
            <a href="#">EasyPay</a>
            <div class="search_box">
                <input type="text" placeholder="Search EasyPay">
                <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
            </div>
        </div>

        <div class="header-icons">
            <i class="fas fa-bell"></i>
            <div class="account">
                <img src="../images/plane2.jpg" alt="">
                <h4>Social Surge</h4>
            </div>
        </div>
    </header>
    <div class="container">
        <nav>
            <div class="side_navbar">
                <span>Main Menu</span>
                <a href="#" class="active">Dashboard</a>
                <a href="#">Profile</a>
                <a href="#">History</a>
                <a href="#">Application</a>
                <a href="#">My Account</a>
                <a href="#">Documents</a>

                <div class="links">
                    <span>Quick Link</span>
                    <a href="#">Paypal</a>
                    <a href="#">EasyPay</a>
                    <a href="#">SadaPay</a>
                </div>
            </div>
        </nav>

        <div class="main-body">
            <h2>Dashboard</h2>
            <div class="promo_card">
                <h1>Welcome to EasyPay</h1>
                <span>Lorem ipsum dolor sit amet.</span>
                <button>Learn More</button>
            </div>

            <div class="history_lists">
                <div class="list1">
                    <div class="row">
                        <h4>History</h4>
                        <a href="#">See all</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Dates</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>2, Aug, 2022</td>
                                <td>Sam Tonny</td>
                                <td>Premium</td>
                                <td>$2000.00</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>29, July, 2022</td>

                                <td>Code Info</td>
                                <td>Silver</td>
                                <td>$5,000.00</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>15, July, 2022</td>

                                <td>John David</td>
                                <td>Startup</td>
                                <td>$3000.00</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>5, July, 2022</td>
                                <td>Salina Gomiz</td>
                                <td>Premium</td>
                                <td>$7000.00</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>29, June, 2022</td>
                                <td>Gomiz</td>
                                <td>Gold</td>
                                <td>$4000.00</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>28, June, 2022</td>
                                <td>Elyana John</td>
                                <td>Premium</td>
                                <td>$2000.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="list2">
                    <div class="row">
                        <h4>Documents</h4>
                        <a href="#">Upload</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Type</th>
                                <th>Uploaded</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>CNIC</td>
                                <td>PDF</td>
                                <td>20</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Passport</td>
                                <td>PDF</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>License</td>
                                <td>PDF</td>
                                <td>9</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Pic</td>
                                <td>Jpg</td>
                                <td>22</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>CNIC</td>
                                <td>Jpg</td>
                                <td>22</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Docx</td>
                                <td>Word</td>
                                <td>22</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="sidebar">
            <h4>Account Balance</h4>

            <div class="balance">
                <i class="fas fa-dollar icon"></i>
                <div class="info">
                    <h5>Dollar</h5>
                    <span><i class="fas fa-dollar"></i>25,000.00</span>
                </div>
            </div>

            <div class="balance">
                <i class="fa-solid fa-rupee-sign icon"></i>
                <div class="info">
                    <h5>PKR</h5>
                    <span><i class="fa-solid fa-rupee-sign"></i>300,000.00</span>
                </div>
            </div>

            <div class="balance">
                <i class="fas fa-euro icon"></i>
                <div class="info">
                    <h5>Euro</h5>
                    <span><i class="fas fa-euro"></i>25,000.00</span>
                </div>
            </div>

            <div class="balance">
                <i class="fa fa-inr fa-2x" aria-hidden="true"></i>
                <div class="info">
                    <h5>INR</h5>
                    <span><i class="fa fa-inr" aria-hidden="true"></i>220,000.00</span>
                </div>
            </div>

            <div class="balance">
                <i class="fa-solid fa-sterling-sign icon"></i>
                <div class="info">
                    <h5>Pound</h5>
                    <span><i class="fa-solid fa-sterling-sign"></i>30,000.00</span>
                </div>
            </div>

        </div>
    </div>
    <style>
        /*  import google fonts */
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

        * {
            margin: 0;
            padding: 0;
            border: none;
            outline: none;
            text-decoration: none;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            background: rgb(219, 219, 219);
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 60px;
            padding: 20px;
            background: #fff;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo a {
            color: #000;
            font-size: 18px;
            font-weight: 600;
            margin: 2rem 8rem 2rem 2rem;
        }

        .search_box {
            display: flex;
            align-items: center;
        }

        .search_box input {
            padding: 9px;
            width: 250px;
            background: rgb(228, 228, 228);
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
        }

        .search_box i {
            padding: 0.66rem;
            cursor: pointer;
            color: #fff;
            background: #000;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
        }

        .header-icons {
            display: flex;
            align-items: center;
        }

        .header-icons i {
            margin-right: 2rem;
            cursor: pointer;
        }

        .header-icons .account {
            width: 130px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .header-icons .account img {
            width: 35px;
            height: 35px;
            cursor: pointer;
            border-radius: 50%;
        }

        .container {
            margin-top: 10px;
            display: flex;
            justify-content: space-between;
        }

        /* Side menubar section */
        nav {
            background: #fff;
        }

        .side_navbar {
            padding: 1px;
            display: flex;
            flex-direction: column;
        }

        .side_navbar span {
            color: gray;
            margin: 1rem 3rem;
            font-size: 12px;
        }

        .side_navbar a {
            width: 100%;
            padding: 0.8rem 3rem;
            font-weight: 500;
            font-size: 15px;
            color: rgb(100, 100, 100);
        }

        .links {
            margin-top: 5rem;
            display: flex;
            flex-direction: column;
        }

        .links a {
            font-size: 13px;
        }

        .side_navbar a:hover {
            background: rgb(235, 235, 235);
        }

        .side_navbar .active {
            border-left: 2px solid rgb(100, 100, 100);
        }

        /* Main Body Section */
        .main-body {
            width: 70%;
            padding: 1rem;
        }

        .promo_card {
            width: 100%;
            color: #fff;
            margin-top: 10px;
            border-radius: 8px;
            padding: 0.5rem 1rem 1rem 3rem;
            background: rgb(37, 37, 37);
        }

        .promo_card h1,
        .promo_card span,
        button {
            margin: 10px;
        }

        .promo_card button {
            display: block;
            padding: 6px 12px;
            border-radius: 5px;
            cursor: pointer;
        }

        .history_lists {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 1rem 0;
        }

        table {
            background: #fff;
            padding: 1rem;
            text-align: left;
            border-radius: 10px;
        }

        table td,
        th {
            padding: 0.2rem 0.8rem;
        }

        table th {
            font-size: 15px;
        }

        table td {
            font-size: 13px;
            color: rgb(100, 100, 100);
        }



        /* Sidebar Section */
        .sidebar {
            width: 15%;
            padding: 2rem 1rem;
            background: #fff;
        }

        .sidebar h4 {
            margin-bottom: 1.5rem;
        }

        .sidebar .balance {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }

        .balance .icon {
            color: #fff;
            font-size: 20px;
            border-radius: 6px;
            margin-right: 1rem;
            padding: 1rem;
            background: rgb(37, 37, 37);
        }

        .balance .info h5 {
            font-size: 16px;
        }

        .balance .info span {
            font-size: 14px;
            color: rgb(100, 100, 100);
        }

        .balance .info i {
            margin-right: 2px;
        }
    </style>
</body>

</html>