<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Under development</title>
</head>
<style>
    body{
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
.logo{
    display: flex;
    justify-content: center;
}
.logo img{
    width: 200px;
    margin: 50px;
}
.content{
    margin: auto;
    width: 90%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.content img{
    width: 80%;
}
.text{
    text-align: center
}
</style>
<body>
    <div>
        <div>
            <div class="logo">
                <img src="{{asset("./images/logo.png")}}" alt="">
            </div>

            <div class="content">
                <div>
                    <img src="{{asset("./images/build.png")}}" alt="">
                </div>
                <div class="text">
                    <h1>Under development</h1>
                    <p>This part of the website is currently
                        Under development.
                    </p>
                    <p>We should be ready shortly.Thank you for
                        your patience.
                    </p>
                    <a href="/">Back to home page</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
