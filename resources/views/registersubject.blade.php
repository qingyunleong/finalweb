<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Register Subject</title>

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
        <div class="w3-bar" style="background-color: #133764; color:white">
            <a href="{{ url('mainpage') }}" class="w3-bar-item w3-button w3-right">Back</a>
        </div>
        <br>

        <div class="w3-modal-content w3-round" style="width:500px">
            <header class="w3-row" style="background-color: #D6EEEE">
                <h4 class="w3-margin-left">Subject Registration Form</h4>
            </header>

            <div class="w3-padding">
                <form method="post" action="{{route('insertsubject')}}" style="width:470px">
                    <p>
                        {{csrf_field()}}

                        <label for="password"><b>Subject Title</b></label>
                        <input class="w3-input w3-round w3-border" type="text" name="subjectTitle" placeholder="Please Enter Subject Title">
                    <p>

                        <label for="password"><b>Subject Description</b></label>
                        <input class="w3-input w3-round w3-border" type="text" name="subjectDescription" placeholder="Please Enter Subject Description">
                    <p>

                        <label for="password"><b>Subject Price</b></label>
                        <input class="w3-input w3-round w3-border" type="number" name="subjectPrice" placeholder="Please Enter Subject Price" step="any">
                    <p>

                        <label for="password"><b>Subject Total Learning Hours</b></label>
                        <input class="w3-input w3-round w3-border" type="number" name="subjectTotalhours" placeholder="Please Enter Subject Total Learning Hours">
                    <p>

                    <div class="w3-row">
                        <button class="w3-button w3-round w3-border w3-right" style="background-color: #D6EEEE" type="submit">Insert</button>
                    </div>
                    <br>

                </form>
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