<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tivoli Jaerold S. Belen Resume</title>
    <style>
        body {
            font-family: 'Times New Roman', serif;
            margin: 1in; 
            line-height: 1.5;
        }
        h1 {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }
        hr {
            border: 1px solid black;
        }
        .contact-info {
            text-align: center;
            margin-bottom: 20px;
        }
        .section-title {
            font-size: 14pt;
            font-weight: bold;
            margin-top: 20px;
            text-decoration: underline;
        }
        .content {
            margin-left: 30px;
            font-size: 12pt;
        }
        .signature {
            margin-top: 40px;
            text-align: center;
        }
        .signature p {
            margin-bottom: 0;
        }
    </style>
</head>
<body>

    <h1>{{$data['name']}}</h1>
    <div class="contact-info">
        <p>{{$data['location']}}</p>
        <p>Email: <a href="mailto:tivolibelen19@gmail.com">{{$data['email']}}</a> | Contact No.: {{$data['phone']}}</p>
    </div>
    <hr>

    <div class="section-title">Objective:</div>
    <p class="content">
    {{$data['about']}}
    </p>
    <hr>

    <div class="section-title">Educational Attainment:</div>
    <div class="content">
        <p><strong>Tertiary: </strong> {{$data['tertiary']}}<br>
        S.Y.: 2021 - Present</p>

        <p><strong>Secondary: </strong> {{$data['secondary']}}<br>
        S.Y.: 2014 – 2021</p>

        <p><strong>Primary: </strong> {{$data['primary']}}<br>
        S.Y.: 2008 - 2014</p>
    </div>
    <hr>

    <div class="section-title">Personal Information:</div>
    <div class="content">
        <p><strong>Date of Birth:</strong> {{$data['birth']}}</p>
        <p><strong>Age:</strong> {{$data['age']}}</p>
        <p><strong>Gender:</strong> {{$data['gender']}}</p>
        <p><strong>Religion:</strong> {{$data['religion']}}</p>
        <p><strong>Nationality:</strong> {{$data['nationality']}}</p>
        <p><strong>Civil Status:</strong> {{$data['civil_status']}}</p>
    </div>
    <hr>

    <p>I hereby declare that the above information is true and correct to the best of my knowledge and belief.</p>

    <div class="signature">
        <p>____________________________</p>
        <p>{{$data['name']}}</p>
        <p>{{$data['job_title']}}</p>
    </div>

</body>
</html>