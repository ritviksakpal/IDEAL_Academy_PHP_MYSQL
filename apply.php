<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>:IDEAL ACADEMY::APPLY</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap"
        rel="stylesheet" />
</head>

<body>
    <div class="container">
        <a id="topbtn" href="#navbar">TOP</a>
        <div id="navbar" class="navbar">
            <a href="index.php">
                <div class="logo">
                    <div class="main-l">IDEAL</div>
                    <div class="l-small">ACADEMY</div>
                </div>
            </a>
            <div class="nav-links">
                <ul>
                    <li><a href="apply.php">Apply</a></li>
                    <li><a href="visit.php">Visit Us</a></li>
                </ul>
            </div>
            <div class="burger">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <div class="sub_navbar">
            <ul>
                <li><a href="about.php" id="ab">ABOUT</a></li>
                <li><a href="index.php">GALLERY</a></li>
                <li><a href="index.php">ADMISSION</a></li>
                <li><a href="classes.php">CLASSES</a></li>
                <li><a href="sitemap.php">SITEMAP</a></li>
            </ul>
        </div>
        <div id="apply-inner" class="inner">
            <form id="applyform" method="post" action="connect.php">
                <label for="name" class="form-label">NAME</label>
                <input type="text" name="name" id="name" required /> <br />
                <label for="email" class="form-label">EMAIL</label>
                <input type="email" name="email" id="email" required /><br />
                <label for="phone" class="form-label">PHONE</label>
                <input type="tel" id="phone" name="phone" required /><br />


                <label for="">COURSE SELECTION</label>
                <select name="course" id="course" required>
                    <option value="commerce">Commerce</option>
                    <option value="science">Science</option>
                    <option value="arts">Arts</option>
                    <option value="vocational">Vocational Courses</option>
                </select><br />
                <p>all the fields are required<span style="color: red">*</span></p>
                <button id="apply-submit" type="submit">Submit</button>
            </form>
        </div>
        <div class="footer">
            <p>Copyright &copy; 2020-21 Ritvik Sakpal. All Rights Reserved</p>
        </div>
    </div>
    <script src="JS\app.js"></script>

</body>

</html>