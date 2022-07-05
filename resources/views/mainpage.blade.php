<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>MainPage</title>
    <style>
        tr:nth-child(even) {
            background-color: rgba(150, 212, 212, 0.4);
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
    </style>

</head>

<body>
    @if (session('save'))
    <script>
        alert("Success");
    </script>
    @endif
    @if (session('error'))
    <script>
        alert("Failed");
    </script>
    @endif

    <div class="a w3-container">

        <div class="w3-bar" style="background-color: #133764 ; color:white">
            <a class="w3-bar-item w3-button w3-right" href="{{route('logout')}}"> Logout</a>
        </div>

        <header class="w3-center w3-padding-64" style="background-color: #133764 ; color:white">
            <h1>My Tutor</h1>
        </header>

        <div>
            <a class="w3-bar-item w3-button w3-round  w3-right w3-margin w3-border" href="{{ url('registersubject') }}" style="width:15%; background-color: #D6EEEE">+ New Subject</a><br>
        </div>

        <div class="w3-container" style="max-width:1000px;margin:auto">
            <table class="w3-table w3-bordered w3-card-4">
                <thead>
                    <th>No</th>
                    <th>Subject ID</th>
                    <th>Subject Title</th>
                    <th>Subject Description</th>
                    <th>Subject Price</th>
                    <th>Subject Total Learning Hours</th>
                    <th>Operations</th>
                </thead>

                @foreach ($listSubjects as $listItem)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $listItem->id}}</td>
                    <td>{{ $listItem->subject_title}}</td>
                    <td>{{ $listItem->subject_description}}</td>
                    <td>{{ $listItem->subject_price}}</td>
                    <td>{{ $listItem->subject_totalhours}}</td>
                    <td>
                        <div class="w3-cell">
                            <form method="post" action="{{route('subjectDelete',$listItem->id)}}" accept-charset="UTF-8" onsubmit="return confirm('Are you sure you want delete this subject?');">
                                {{csrf_field()}}
                                <button class="w3-button w3-round w3-block" type="submit">
                                    <i class="fa fa-trash"> </i></button>
                            </form>
                        </div>
                        <div class="w3-cell">
                            <button class="w3-button w3-round w3-block" onclick="document.getElementById('{{$loop->iteration}}').style.display='block';return false;"><i class="fa fa-pencil-square-o"></i></button>
                        </div>

                        <!-- update product form -->
                        <div id="{{$loop->iteration}}" class="w3-modal w3-animate-zoom">
                            <div class="w3-modal-content w3-round" style="width:500px">
                                <header class="w3-row" style="background-color: #D6EEEE"> <span onclick="document.getElementById('{{$loop->iteration}}').style.display='none'" class="w3-button w3-display-topright w3-small">&times;</span>
                                    <h4 class="w3-margin-left">Update Subject Form</h4>
                                </header>

                                <div class="w3-padding">
                                    <form method="post" action="{{route('subjectUpdate',$listItem->id)}}" style="width:470px">
                                        <p>
                                            {{csrf_field()}}

                                            <label for="password"><b>Subject Title</b></label>
                                            <input class="w3-input w3-round w3-border" type="text" name="subjectTitle" placeholder="Please Enter Subject Title" value="{{ $listItem->subject_title}}">
                                        <p>

                                            <label for="password"><b>Subject Description</b></label>
                                            <input class="w3-input w3-round w3-border" type="text" name="subjectDescription" placeholder="Please Enter Subject Description" value="{{ $listItem->subject_description}}">
                                        <p>

                                            <label for="password"><b>Subject Price</b></label>
                                            <input class="w3-input w3-round w3-border" type="number" name="subjectPrice" placeholder="Please Enter Subject Price" step="any" value="{{ $listItem->subject_price}}">
                                        <p>

                                            <label for="password"><b>Subject Total Learning Hours</b></label>
                                            <input class="w3-input w3-round w3-border" type="number" name="subjectTotalhours" placeholder="Please Enter Subject Total Learning Hours" value="{{ $listItem->subject_totalhours}}">
                                        <p>

                                        <div class="w3-row">
                                            <button class="w3-button w3-round w3-border w3-right" style="background-color: #D6EEEE" type="submit">Update</button>
                                        </div>
                                        <br>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach

            </table>
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