<!DOCTYPE html>
<html>
    <head>
        <title>Denzel</title>
    <style>
        body {
            background-color: white;
        }

        .wrap {
            width: 800px;
            margin:auto;
            margin: top 800px;
            padding-left: 55%;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.6);
            transition: 0.4s;
            width: 300px;
            background: grey;
            text-align: center;
            font-size: 16px;
            font-family: Poppins;
            float:right;
            margin: 10px;
            padding-top: 3%;
        }

        .header {
            font-family: Poppins;
            text-align: center;
            padding-left: 15%;
            padding-right: 15%;
        }

        .profile {
            width: 800px;
            margin:auto;
            margin: top 800px;
            padding-right: 30%;
        }

        .face {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.6);
            transition: 0.4s;
            width: 550px;
            height: 700px;
            background: gray;
            text-align: center;
            font-size: 20px;
            font-family: Poppins;
            float:left;
            margin: 10px;
            padding-top: 10%;
        }

    </style>
    </head>
        <body>
            <div class = "header">
            <h1>who am i?</h1>
            <h3>i am a fourth year Information Systems student studying in University of Cebu Banilad Campus,  
                in my 3+ years in this course, i have acquired certain skills such as programming in HTML, CSS, C#. 
                Although there is a difference in my course with Information Technology because there skills that we also 
                acquired such as IT Auditing, Financial Management, Strategy and Acquisition and Business Process Management.</h3>
            </div>
            <div class ="profile">
                <div class = "face">
                    <img src ="{{asset('images/Photograph Portrait.jpg')}}" style = "width:200px;height:200px ;" alt= "htmlcss">
                    <div class ="container">
                        <h4><b>JOHN DENZEL B. ARAÑAS</b></h4>
                        <p>BS. INFORMATION SYSTEMS</p>
                        <p>4TH YR. S.Y. 2023-2024</p>
                </div>
            </div>
            <div class = "wrap">
                <div class = "card">
                    <img src ="images/html and css.png" style = "width:200px;height:200px ;" alt= "htmlcss">
                    <div class ="container">
                        <h4><b>HTML and CSS</b></h4>
                        <p>Web Development</p>
                        <p>2ND Year</p>
                    </div>
                </div>

                <div class = "card">
                    <img src ="images/flutter.png" style = "width:200px;height:200px ;" alt = "htmlcss">
                    <div class ="container">
                        <h4><b>FLUTTER</b></h4>
                        <p>IS Evaluation of Business</p>
                        <p>4TH Year</p>
                    </div>
                </div>

                <div class = "card">
                    <img src ="images/python prog.png" style = "width:200px;height:200px ;" alt = "htmlcss">
                    <div class ="container">
                        <h4><b>PYTHON PROGRAMMING</b></h4>
                        <p>IS Business Analytics</p>
                        <p>3RD Year</p>
                    </div>
                </div>

                <div class = "card">
                    <img src ="images/mysql.png" style = "width:200px;height:200px ;" alt = "htmlcss">
                    <div class ="container">
                        <h4><b>MYSQL</b></h4>
                        <p>DATABASE SYSTEMS</p>
                        <p>2ND Year</p>
                    </div>
                </div>
            </div>

        </body>
</html>