<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ISI FORM</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h4>Sign Up Form</h4>
    <div id="form"  >
    <form action="/welcome" method="GET">
        <p>First name:</p>
        <span><input type="text" name="f_name" required></span>
        <p>Last name:</p>
        <span><input type="text" name="l_name" required></span>
            <div id="gender">
                    <p>Gender:</p>
                    <span><input type="radio" name="gender">Male</span>
                    <br>
                    <span><input type="radio" name="gender">Female</span>
                    <br>
                    <span><input type="radio" name="gender">Other</span>
            </div>
            <div id="nationality">
                    <p>Nationality</p>
                    <select id="national">
                        <option value="indonesia">Indonesian</option>
                        <option value="singapore">Singaporean</option>
                        <option value="australia">Australian</option>
                        <option value="malaysia">Malaysian</option>
                    </select>
                </div>
                <div id="language">
                    <p>Language Spoken:</p>
                    <span><input type="checkbox" name="indonesia">Bahasa Indonesia</span>
                    <br>
                    <span><input type="checkbox" name="english">English</span>
                    <br>
                    <span><input type="checkbox" name="other">Other</span>
            </div>
            <div id="bio">
                <p>Bio:</p>
                <span><textarea id="bio-desc" cols="30" rows="10"></textarea></span>
            </div>
            <span><a href="/welcome"><button type="submit">Sign Up!</button></a></span>
    </div> 
    </form>
</body>
</html>