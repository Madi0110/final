@extends('main')
@section('content')
<body>
    <header>



    </header>
    <main>
        <link rel="stylesheet" href="public/css/main.css">
        <link rel="stylesheet" href="public/css/1.css">

<div class="container" >
        <div class="card">
            <div class="card-header">

            </div>
            <div class="card-body">
                <h5 class="card-title">About Us</h5>
                <p class="card-text">Black and white photograph of elder and bald John Houlding, wearing beard and bow tie. John Houlding, the founder of Liverpool F.C. Liverpool F.C. was founded following a dispute between the Everton committee and John Houlding, club president and owner of the land at Anfield. After eight years at the stadium,
                    Everton relocated to Goodison Park in 1892 and Houlding founded Liverpool F.C. to play at Anfield.Originally named "Everton F.C. and Athletic Grounds Ltd" (Everton Athletic for short), the club became Liverpool F.C.</p>
                <a href="{{url('/about')}}" class="btn btn-primary">More...</a>
            </div>
        </div>



        <div class="card">
            <div class="card-header">

            </div>
            <div class="card-body">
                <h5 class="card-title">Emblem</h5>
                <p class="card-text">For much of Liverpool's history its home colours have been all red, but when the club was founded its kit was more like the contemporary Everton kit. The blue and white quartered shirts were used until 1894, when the club adopted the city's colour of red.
                    The city's symbol of the liver bird was adopted as the club's badge in 1901, although it was not incorporated into the kit until 1955.
                    Liverpool continued to wear red shirts and white shorts until 1964, when manager Bill Shankly decided to change to an all red strip.</p>
                <a href="{{url('/emblem')}}" class="btn btn-primary">More...</a>
            </div>
        </div>



    </div>
    </main>


    </body>
    </html>



@endsection
