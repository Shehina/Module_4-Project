<!DOCTYPE html>
<html lang="en">

<head>
    <title>login system</title>
    <!-- insert style.css file inside index.html-->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="frm">
        <img src = "../images/adminlogin.jpg" alt="admin" width="500" height="300" />
        <form name="f1" action="authentication.php" onsubmit="return validation()" method="POST">
            <p>
                <label><b> UserName: </b></label>
                <input type="text" id="user" name="user" />
            </p>
            <p>
                <label><b> Password:</b> </label>
                <input type="password" id="pass" name="pass" />
            </p>
            <p>
                <input type="submit" id="click" value="Login" />
                <input type="reset" id="click" value="Cancel" />
        </form>
        </div>
    <!-- validation for empty field -->
    <script>
        function validation() {
            var id = document.f1.user.value;
            var ps = document.f1.pass.value;
            if (id.length == "" && ps.length == "") {
                alert("User Name and Password fields are empty");
                return false;
            } else {
                if (id.length == "") {
                    alert("User Name is empty");
                    return false;
                }
                if (ps.length == "") {
                    alert("Password field is empty");
                    return false;
                }
            }
        }
    </script>
</body>

</html>