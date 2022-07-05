<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Register Tutor</title>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

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
        .w3-padding {
            width: 550px;
            margin: 0 auto;
        }

    </style>

</head>

<body>
    <div class="a w3-container">

        <header class="w3-center w3-padding-64" style="background-color: #133764 ; color:white">
            <h1>My Tutor</h1>
        </header>
        <br>

        <div class="w3-padding">

            <header class="w3-xxlarge">
                <h1><b>Sign Up</b></h1>
            </header>

            <div class="w3-padding ">
                <form action=" {{route('register.post') }}" method="post">
                    {{csrf_field()}}

                    <label for="name">Name</label>
                    <p><input id="name" class="w3-input w3-round w3-border" type="name" name="name" placeholder="Please enter your name" required></p>
                    @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif

                    <label for="email">Email</label>
                    <p><input id="email" class="w3-input w3-round w3-border" type="email" name="email" placeholder="Please enter your email" required></p>
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif

                    <label for="phone">Phone Number</label>
                    <p><input id="phone" class="w3-input w3-round w3-border" type="phone" name="phone" placeholder="Please enter your phone number" required></p>
                    @if ($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                    @endif

                    <label for="address">Mailing Address</label>
                    <p><input id="address" class="w3-input w3-round w3-border" type="address" name="address" placeholder="Please enter your mailing address" required></p>
                    @if ($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address') }}</span>
                    @endif

                    <label for="state">State</label>
                    <p><select class="w3-select w3-border w3-round" name="state">
                            <option value="Please Select Your State" selected disabled>Please Select Your State</option>
                            <option value="Kedah">Kedah</option>
                            <option value="Perlis">Perlis</option>
                            <option value="Pulau Pinang">Pulau Pinang</option>
                            <option value="Perak">Perak</option>
                            <option value="Pahang">Pahang</option>
                            <option value="Terengganu">Terengganu</option>
                            <option value="Kelantan">Kelantan</option>
                            <option value="Melaka">Melaka</option>
                            <option value="Negeri Sembilan">Negeri Sembilan</option>
                            <option value="Johor">Johor</option>
                            <option value="Sabah">Sabah</option>
                            <option value="Sarawak">Sarawak</option>
                        </select></p>
                    @if ($errors->has('state'))
                    <span class="text-danger">{{ $errors->first('state') }}</span>
                    @endif

                    <label for="password">Password</label>
                    <p><input id="password" class="w3-input w3-round w3-border" type="password" name="password" placeholder="Please enter your password" required></p>
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif

                    <div class="w3-row">
                        <button class="w3-button w3-round w3-border w3-right" style="background-color: #133764 ; color:white">Register</button>
                    </div>
                </form>
                <p>Already registered? <a href="{{ url('login') }}"><u>Sign In here.</u></a></p>
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