<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Document</title>
</head>
<body>
<h1>About Me!</h1>
<p>
    <div>Hi, <b>{{ $name }}</b></div>
    <div>Your grade is <i>{{ $grade }}</i></div>
    @if ($grade >= 50)
            <div>You passed, Congratulations!</div>
    @else
            <div>You failed, try again next year!</div>
    @endif
</p>
</body>
</html>