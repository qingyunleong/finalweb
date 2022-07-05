<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Landing Page</title>

    <style>
        @media screen and (max-width: 1300px) {
            .a {
                width: 100%;
            }
        }

        @media screen and (min-width: 1300px) {
            .a {
                width: 1300px;
                margin: 0 auto;
            }
        }
    </style>

</head>

<body>
    <div class="a w3-container">

        <header class="w3-center w3-padding-64" style="background-color: #133764 ; color:white">
            <h1>My Tutor</h1>
        </header>

        <div style="display:flex; justify-content:center">
            <div class="w3-container w3-padding w3-margin" style="width:1000px">

                <div class="w3-half">
                    <div class="w3-container">
                        <div class="w3-container w3-padding w3-margin">

                            <h1><b>Become A Tutor With MyTutor</b></h1>
                            <p>Want to be a tutor? Tutor vacancies on MyTutor!</p>
                            <p style="text-align:justify">MyTutor is a free, online platform that advertises your lessons and attracts students.
                                MyTutor believes in the importance of sharing our passion and is based on the trust of our community.
                                We are currently in 37 countries and in 18 languages, with more than 10 million tutors.
                                Create your tutor listing in minutes, find student to tutor easily!</p>

                            <p style="text-align:justify">With MyTutor you can set your own rates💰, manage your own time⏰, and connect with 1,000s of students👨‍🎓.</p>
                            <p style="text-align:justify">It is completely free to create tutor listings, become a tutor today!</p>
                            <p style="text-align:justify">Do you have any questions?</p>
                            <p style="text-align:justify">Send an email to: 💻 mytutor@yuelle.com</p>

                        </div>
                    </div>
                </div>

                <div class="w3-half">
                    <div class="w3-container">
                        <div class="w3-padding w3-margin">

                            <p><b>REGISTER WITH MYTUTOR TODAY!</b></p>
                            <a class="w3-bar-item w3-button w3-round w3-padding-16" href="{{ url('registration') }}" style="width:70%; background-color: #133764 ; color:white">Register</a><br>
                            <br>
                            <p><b>ALREADY HAVE ACCOUNT?</b></p>
                            <a class="w3-bar-item w3-button w3-round w3-padding-16" href="{{ url('login') }}" style="width:70%; background-color: #133764 ; color:white">Login</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <footer class="w3-footer w3-center w3-margin" style="background-color: #133764 ; color:white">
            <p>Find me on social media.</p>

            <a href="https://www.facebook.com/qingyunleong" target="_blank"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
            <a href="https://www.instagram.com/qingyunleong" target="_blank"><i class="fa fa-instagram w3-hover-opacity"></i></a>
            <a href="https://github.com/qingyunleong" target="_blank"><i class="fa fa-git w3-hover-opacity"></i></a>
            <p>Copyright MyTutor&copy;</p>
        </footer>
    </div>
</body>

</html>