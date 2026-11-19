<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <Title>full-stack login&register form with user& Admin page |codehal</Title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="Logo" width="100px" height="100px">
        </div>
        <h1>NETHERET IT SUPPORT</h1>
        <br> <br> 
    </header>
    <div class ="login container">
    <link rel="login" href="login.php">
    <style>

        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            margin: 0;
            background: #e9e3dc;
            color: #111;
        }

        /* ---------- HEADER ---------- */

        header {
            height: 125px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-bottom: 3px solid black;
            position: relative;
        }

        /* ---------- LOGIN ---------- */

        .login-container {
            width: 65%;
            margin: 30px auto;
            background: white;
            border: 7px solid black;
            padding: 30px 50px;
            min-height: 600px;
        }

        .login-title {
            text-align: center;
            border: 4px solid #e9e3dc;
            border-radius: 15px;
            padding: 12px;
            width: 300px;
            margin: 0 auto 40px;
            font-size: 26px;
        }

        .form-row {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 25px;
            gap: 25px;
        }

        .form-row label {
            width: 230px;
            text-align: right;
            font-size: 22px;
        }

        input, select, textarea {
            background: #e9e3dc;
            border: none;
            border-radius: 25px;
            padding: 15px;
            font-size: 16px;
        }

        .form-row input {
            width: 260px;
        }

        textarea {
            border-radius: 15px;
            width: 300px;
            height: 100px;
            resize: none;
        }

        .main-button {
            background: #e9e3dc;
            border: none;
            border-radius: 25px;
            padding: 13px 35px;
            font-size: 18px;
            cursor: pointer;
        }

        .main-button:hover {
            background: #d5cec5;
        }

        .forgot {
            border: 4px solid black;
            background: white;
            border-radius: 25px;
            padding: 10px 20px;
            cursor: pointer;
        }

        /* ---------- APP ---------- */

        #app {
            display: none;
        }

        .app-layout {
            display: flex;
            min-height: calc(100vh - 125px);
        }

        /* ---------- SIDE MENU ---------- */

        .sidebar {
            width: 225px;
            background: white;
            padding: 40px 15px;
        }

        .nav-button {
            width: 100%;
            border: none;
            background: #e9e3dc;
            border-radius: 20px;
            padding: 10px;
            margin-bottom: 35px;
            font-size: 17px;
            cursor: pointer;
        }

        .nav-button:hover {
            background: #d5cec5;
        }

        /* ---------- MAIN CONTENT ---------- */

        .content {
            flex: 1;
            padding: 45px;
        }

        .page {
            display: none;
        }

        .page.active {
            display: block;
        }

        .welcome {
            font-size: 25px;
            margin-bottom: 60px;
        }

        /* ---------- DASHBOARD CARDS ---------- */

        .cards {
            display: flex;
            gap: 60px;
            margin-bottom: 60px;
        }

        .card {
            width: 210px;
            height: 170px;
            background: white;
            border: 6px solid black;
            border-radius: 45px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-size: 22px;
        }

        .card-number {
            font-size: 28px;
            margin-bottom: 10px;
        }

        /* ---------- REQUEST BOX ---------- */

        .request-box {
            background: white;
            border: 6px solid black;
            border-radius: 40px;
            padding: 25px;
            max-width: 750px;
        }

        .request {
            padding: 15px;
            border-bottom: 1px solid #aaa;
            cursor: pointer;
        }

        .request:hover {
            background: #f2efeb;
        }

        /* ---------- TABLE ---------- */

        table {
            width: 100%;
            max-width: 900px;
            border-collapse: collapse;
            background: white;
        }

        th, td {
            border: 2px solid black;
            padding: 15px;
            text-align: left;
        }

        th {
            background: #e9e3dc;
        }

        /* ---------- FORM ---------- */

        .form-container {
            background: white;
            border: 5px solid black;
            border-radius: 30px;
            padding: 30px;
            max-width: 800px;
        }

        .form-container .form-row {
            justify-content: flex-start;
            margin-left: 0;
        }

        /* ---------- KNOWLEDGE BASE ---------- */

        .article {
            background: white;
            border: 3px solid black;
            border-radius: 20px;
            padding: 20px;
            max-width: 700px;
            margin: 15px 0;
        }

        /* ---------- BOTTOM NAV ---------- */

        .bottom-nav {
            display: none;
        }

        /* ---------- MOBILE ---------- */

        @media (max-width: 800px) {

            .sidebar {
                display: none;
            }

            .content {
                padding: 25px;
                padding-bottom: 100px;
            }

            .cards {
                flex-wrap: wrap;
                gap: 20px;
            }

            .card {
                width: 150px;
                height: 130px;
            }

            .bottom-nav {
                display: flex;
                position: fixed;
                bottom: 0;
                left: 0;
                right: 0;
                background: white;
                border-top: 2px solid black;
                justify-content: space-around;
                padding: 12px;
            }

            .bottom-nav button {
                background: none;
                border: none;
                font-size: 14px;
            }
        }

    </style>
</head>

<body>


<!-- ================= LOGIN ================= -->

<div id="login">

    <div class="login-container">
        <form action="">

        <div class="login-title">
            LOGIN
        </div>

        <div class="form-row">
            <label>STAFF NAME:</label>
            <input type="text" id="staffName">
        </div>

        <div class="form-row">
            <label>EMAIL:</label>
            <input type="email" id="email">
        </div>

        <div class="form-row">
            <label>PASSWORD:</label>
            <input type="password" id="password">
        </div>

            <button type="submit" name="Login">LOGIN</button>
            <p> Don't have an account? <a href="#">Register here</a></p>
             <link to dashboard page after login> 
           </form>
        </div>

    </div>

</div>
<!-- ================= REGISTER ================= -->
 <div id="register">

    <div class="login-container">
        <form action="login.php"method="POST" onsubmit="return validateRegister()"></form>

        <div class="login-title">
            REGISTER
        </div>

        <div class="form-row">
            <label>STAFF NAME:</label>
            <input type="text" id="staffName">
        </div>

        <div class="form-row">
            <label>EMAIL:</label>
            <input type="email" id="email">
        </div>

        <div class="form-row">
            <label>PASSWORD:</label>
            <input type="password" id="password">
        </div>

    <div class="form-row">
        <label for="confirmPassword">CONFIRM PASSWORD:</label>
        <input type="password" id="confirmPassword" name="confirmPassword">

        <div id="errorMessage"></div>
             <div>
            <button type="submit">REGISTER</button>
            <p> Already have an account? <a href="#">Login here</a></p>
             
           </form>
        </div>

    </div>

</div>

<!-- ================= APP ================= -->

<div id="app">

    <div class="app-layout">


        <!-- SIDE MENU -->

        <nav class="sidebar">

            <button class="nav-button" onclick="showPage('dashboard')">
                DASHBOARD
            </button>

            <button class="nav-button" onclick="showPage('requests')">
                REQUESTS
            </button>

            <button class="nav-button" onclick="showPage('jobs')">
                JOBS
            </button>

            <button class="nav-button" onclick="showPage('schedule')">
                STAFF SCHEDULE
            </button>

            <button class="nav-button" onclick="showPage('performance')">
                PERFORMANCE
            </button>

            <button class="nav-button" onclick="showPage('messages')">
                MESSAGES
            </button>

            <button class="nav-button" onclick="showPage('knowledge')">
                KNOWLEDGE BASE
            </button>

        </nav>


        <!-- MAIN CONTENT -->

        <main class="content">


            <!-- DASHBOARD -->

            <section id="dashboard" class="page active">

                <div class="welcome">
                    WELCOME BACK, <span id="displayName">STAFF</span>!
                </div>

                <div class="cards">

                    <div class="card">
                        <div class="card-number">12</div>
                        OPEN
                    </div>

                    <div class="card">
                        <div class="card-number">5</div>
                        URGENT
                    </div>

                    <div class="card">
                        <div class="card-number">8</div>
                        TODAY
                    </div>

                </div>

                <h2>RECENT SUPPORT REQUESTS</h2>

                <div class="request-box">

                    <div class="request">
                        #1042 - Network Problem - URGENT
                    </div>

                    <div class="request">
                        #1043 - Software Issue - OPEN
                    </div>

                    <div class="request">
                        #1044 - Printer Problem - CLOSED
                    </div>

                </div>

            </section>


            <!-- SUPPORT REQUESTS -->

            <section id="requests" class="page">

                <h1>SUPPORT REQUESTS</h1>

                <button class="main-button"
                        onclick="showPage('newRequest')">
                    + NEW REQUEST
                </button>

                <br><br>

                <table>

                    <tr>
                        <th>ID</th>
                        <th>Problem</th>
                        <th>Priority</th>
                        <th>Tier</th>
                        <th>Status</th>
                    </tr>

                    <tr>
                        <td>#1042</td>
                        <td>Network Problem</td>
                        <td>Urgent</td>
                        <td>Tier 1</td>
                        <td>In Progress</td>
                    </tr>

                    <tr>
                        <td>#1043</td>
                        <td>Software Issue</td>
                        <td>Medium</td>
                        <td>Tier 2</td>
                        <td>Open</td>
                    </tr>

                    <tr>
                        <td>#1044</td>
                        <td>Printer Problem</td>
                        <td>Low</td>
                        <td>Tier 1</td>
                        <td>Completed</td>
                    </tr>

                </table>

            </section>


            <!-- NEW REQUEST -->

            <section id="newRequest" class="page">

                <h1>NEW SUPPORT REQUEST</h1>

                <div class="form-container">

                    <div class="form-row">
                        <label>Customer:</label>
                        <input type="text" id="customer">
                    </div>

                    <div class="form-row">
                        <label>Problem:</label>
                        <textarea id="problem"></textarea>
                    </div>

                    <div class="form-row">

                        <label>Priority:</label>

                        <select id="priority">

                            <option value="">Select</option>
                            <option>Low</option>
                            <option>Medium</option>
                            <option>High</option>
                            <option>Urgent</option>

                        </select>

                    </div>

                    <div class="form-row">

                        <label>Support Tier:</label>

                        <select id="tier">

                            <option value="">Select</option>
                            <option>Tier 1</option>
                            <option>Tier 2</option>
                            <option>Tier 3</option>

                        </select>

                    </div>

                    <button class="main-button"
                            onclick="submitRequest()">
                        SUBMIT REQUEST
                    </button>

                </div>

            </section>


            <!-- JOBS -->

            <section id="jobs" class="page">

                <h1>JOBS</h1>

                <table>

                    <tr>
                        <th>Job</th>
                        <th>Customer</th>
                        <th>Technician</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>

                    <tr>
                        <td>Network Maintenance</td>
                        <td>ABC Business</td>
                        <td>Technician 1</td>
                        <td>06/10/2026</td>
                        <td>Scheduled</td>
                    </tr>

                    <tr>
                        <td>Server Maintenance</td>
                        <td>XYZ Ltd</td>
                        <td>Technician 2</td>
                        <td>06/10/2026</td>
                        <td>In Progress</td>
                    </tr>

                </table>

            </section>


            <!-- STAFF SCHEDULE -->

            <section id="schedule" class="page">

                <h1>STAFF SCHEDULE</h1>

                <div class="request-box">

                    <h2>MY SCHEDULE</h2>

                    <p>
                        <strong>09:00 - 10:30</strong><br>
                        Network Maintenance<br>
                        ABC Business<br>
                        Tier 2
                    </p>

                    <hr>

                    <p>
                        <strong>13:00 - 15:00</strong><br>
                        Server Maintenance<br>
                        XYZ Ltd<br>
                        Tier 3
                    </p>

                </div>

            </section>


            <!-- KNOWLEDGE BASE -->

            <section id="knowledge" class="page">

                <h1>KNOWLEDGE BASE</h1>

                <input
                    type="text"
                    id="search"
                    placeholder="Search troubleshooting..."
                    onkeyup="searchArticles()"
                >

                <div id="articles">

                    <div class="article">
                        <h2>Wi-Fi Connection Problems</h2>
                        <p>
                            Check the network connection and restart
                            the router before escalating the issue.
                        </p>
                    </div>

                    <div class="article">
                        <h2>Printer Problems</h2>
                        <p>
                            Check that the printer is connected and
                            has the correct drivers installed.
                        </p>
                    </div>

                    <div class="article">
                        <h2>Password Problems</h2>
                        <p>
                            Check the user's account and follow the
                            password reset procedure.
                        </p>
                    </div>

                </div>

            </section>


            <!-- PERFORMANCE -->

            <section id="performance" class="page">

                <h1>PERFORMANCE</h1>

                <div class="cards">

                    <div class="card">
                        <div class="card-number">156</div>
                        TOTAL
                    </div>

                    <div class="card">
                        <div class="card-number">128</div>
                        COMPLETED
                    </div>

                    <div class="card">
                        <div class="card-number">28</div>
                        OPEN
                    </div>

                </div>

                <div class="request-box">

                    <h2>REQUESTS BY SUPPORT TIER</h2>

                    <p>Tier 1: 82 requests</p>
                    <p>Tier 2: 46 requests</p>
                    <p>Tier 3: 28 requests</p>

                    <h2>AVERAGE RESPONSE TIME</h2>

                    <p>2 hours 15 minutes</p>

                </div>

            </section>


            <!-- MESSAGES -->

            <section id="messages" class="page">

                <h1>MESSAGES</h1>

                <div class="request-box">

                    <p>
                        <strong>Job #205</strong>
                    </p>

                    <p>
                        Technician arrived at customer site.
                    </p>

                    <p>
                        Network equipment is currently being checked.
                    </p>

                    <button class="main-button">
                        + ADD UPDATE
                    </button>

                </div>

            </section>


        </main>

    </div>


    <!-- MOBILE BOTTOM NAV -->

    <div class="bottom-nav">

        <button onclick="showPage('dashboard')">
            🏠<br>HOME
        </button>

        <button onclick="showPage('requests')">
            🎫<br>TICKETS
        </button>

        <button onclick="showPage('jobs')">
            💻<br>JOBS
        </button>

        <button onclick="showPage('messages')">
            ☰<br>MENU
        </button>

    </div>

</div>


<script>

    /* ---------- LOGIN ---------- */

    function login() {

        const name = document.getElementById("staffName").value;
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;
        const confirmPassword =
            document.getElementById("confirmPassword").value;

        if (name === "" ||
            email === "" ||
            password === "" ||
            confirmPassword === "") {

            alert("Please complete all required fields.");
            return;
        }

        if (password !== confirmPassword) {

            alert("Passwords do not match.");
            return;
        }

        document.getElementById("login").style.display = "none";
        document.getElementById("app").style.display = "block";

        document.getElementById("displayName").textContent =
            name.toUpperCase();
    }


    /* ---------- PAGE NAVIGATION ---------- */

    function showPage(pageID) {

        const pages = document.querySelectorAll(".page");

        pages.forEach(function(page) {

            page.classList.remove("active");

        });

        document.getElementById(pageID).classList.add("active");
    }


    /* ---------- NEW REQUEST ---------- */

    function submitRequest() {

        const customer =
            document.getElementById("customer").value;

        const problem =
            document.getElementById("problem").value;

        const priority =
            document.getElementById("priority").value;

        const tier =
            document.getElementById("tier").value;


        if (customer === "" ||
            problem === "" ||
            priority === "" ||
            tier === "") {

            alert("Please complete all fields.");

            return;
        }


        alert("Support request successfully submitted.");

        document.getElementById("customer").value = "";
        document.getElementById("problem").value = "";
        document.getElementById("priority").value = "";
        document.getElementById("tier").value = "";

        showPage("requests");
    }


    /* ---------- KNOWLEDGE BASE SEARCH ---------- */

    function searchArticles() {

        const searchValue =
            document.getElementById("search").value.toLowerCase();

        const articles =
            document.querySelectorAll(".article");


        articles.forEach(function(article) {

            const text =
                article.textContent.toLowerCase();

            if (text.includes(searchValue)) {

                article.style.display = "block";

            } else {

                article.style.display = "none";

            }

        });

    }

</script>

</body>
</html>   
  
    