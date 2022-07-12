<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realtime Chatting Application</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Realtime Chatting App</header>
            <form action="#">
                <div class="error-txt">This is an error message</div>

                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" placeholder="Enter your email">
                </div>

                <div class="field input">
                    <label>Passowrd</label>
                    <input type="password" placeholder="Enter your password">
                    <i class="fas fa-eye"></i>
                </div>

                <div class="field button">
                    <input type="submit" value="Continue to Chat">
                </div>
            </form>

            <div class="link">Not yet Signed Up? <a href="#">Sign Up Now </a></div>
        </section>
    </div>

    <script src="./javascript/pass-show-hide.js"></script>
</body>
</html>