<form action="register.php" method = "POST">
    <fieldset>
        <input required="required" type="text" name="email" placeholder="Enter your Email"/><br/>
        <input required="required" type="text" name="name" placeholder="Enter your name"/><br/>
        <select name="place" required="required" placeholder="Select Place">
                    <option value="Udupi">Udupi</option>
                    <option value="Manipal">Manipal</option>
                    <option value="Mangalore">Mangalore</option>
                    <option value="Uppala">Uppala</option>
                    <option value="Kumbla">Kumbla</option>
                    <option value="Kasaragod">Kasaragod</option>
                 </select><br/>
        <input required="required" type="password" name="password" placeholder="Enter password"/><br/>
        <input required="required" type="password" name="password-retype" placeholder="Re-type password"/><br/>
        Gender : <input type="radio" value="male" name="gender" checked>Male &nbsp;&nbsp;<input type="radio" value="female" name="gender">Female <br/>
        <button type="submit">
            Register
        </button><br/>        
    </fieldset>
</form>
<div>
    or <a href="login.php">Log In</a>
</div>