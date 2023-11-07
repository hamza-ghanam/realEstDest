<!DOCTYPE html>
<html>
<head>
    <style>
        /* Add your certificate styling here */
        body {
            background-image: url("{{ public_path('dist/img/cert1600w-JVxoTWdqFMc.jpg') }}");
            background-size: cover;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
        }

    </style>
</head>
<body>
<div class="certificate">
    <div class="student-info">
        <h1>Certificate of Achievement</h1>
        <p>This is to certify that</p>
        <h2>{{ $student->name }}</h2>
        <p>has successfully completed the course</p>
        <h3>{{ $student->email }}</h3>
        <p>on {{ date('F j, Y', strtotime($student->created_at)) }}</p>
    </div>
</div>
</body>
</html>
