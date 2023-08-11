<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is The Test Form</title>
    <style>
        body {
            background-color: aliceblue;
            color: rgb(54, 54, 54);
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        div {
            display: flex;
            flex-direction: column;
            gap: 16px;

        }

        input {
            padding: 8px;
            border-radius: 5px;
            border: 1px solid rgb(139, 137, 137);
        }

        label {
            padding-top: 24px;
        }
        input[type="submit"] {
    background-color: #3498db;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    margin-top: 24px;
}
    </style>
</head>

<body>
    <div class="container">
        <h1>This is the tTest Form That Takes the Input records And insert Them into the database</h1>
        <div>
            <form action="record_server.php" method="POST">
                <h2>This is the Register Form</h2>
                <div><label for="fname">First Name</label>
                    <input type="text" name="firstName" id="fname" placeholder="Enter your First Name">
                    
                </div>
                <div><label for="lname">Last Name</label>
                    <input type="text" name="lastName" id="lname" placeholder="Enter your Last Name">
                </div>
                <div><label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your Email">
                </div>
                <div>
                    <label for="password">Password </label>
                    <input type="password" name="password" id="password" placeholder="*************">
                </div>
                <div>
                    <label for="comfirmPassword">Comfirm Password</label>
                    <input type="password" name="comfirmPassword" id="comfirmPassword" placeholder="*************">
                </div>
                <input type="submit" value="Send Data">
            </form>
        </div>
    </div>
</body>

</html>