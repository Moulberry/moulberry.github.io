<html>
	<!--Favicon.ico initialization-->
	<link rel="shortcut icon" type="image/x-icon" href="https://raw.githubusercontent.com/Moulberry/moulberry.github.io/master/favicon.ico">
    <head>
        <title>Moulberry's Online Repository</title>
    </head>
    <body>
        <script language="javascript">
            function check(form) {
			    var Usernames = ["Jonah", "Camoleopard", "Moulberry"];
				var Passwords = ["Jonah123", "Camoleopard123", "Moulberry123"];
				
				for (i = 0; i < Usernames.length; i++) {
					if(form.Username.value == Usernames[i] && form.Password.value == Passwords[i]) {
						window.location.pathname("admin.html")
						break;
					}
					else {
						window.location = "http://bringvictory.com";
					}
				}        
            }
        </script>
        <p>This is my repository! <br>
        Thanks for visiting, it is hosted by github if you were wondering xD <br>
        <br>
        Because a website is <b>much</b> cooler than dropbox!    
        </p>
        <form name="login">
            Username<input type="text" name="Username"/>
            Password<input type="password" name="Password"/>
            <input type="button" onclick="check(this.form)" value="Login"/>
            <input type="reset" value="Cancel"/>
        </form>
    </body>
</html>
