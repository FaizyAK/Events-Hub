<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Post events</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/jquery.js"></script>
    
    <style>
        fieldset{
            max-width:50%;
        }
    </style>

</head>
<body>
    

<div class="form-group">
<form action="sell.php" id ="post_form"  method="POST" enctype="multipart/form-data">
    <fieldset>
                <select class="form-control" name="category" required="required" placeholder="Category">
                    <option value="Leisure">Leisure Events</option>
                    <option value="Sports">Sports Events</option>
                    <option value="Organization">Organizational Events</option>
                    <option value="Special">Special Events</option>
                    <option value="Others">Others</option>
                 </select><br/>
        <input type="text" class="form-control" required autofocus placeholder="Enter the title" minlength="4" name="title"/><br/>
        <input type="text" class="form-control" required placeholder="Enter the Description" name="description"/><br/>
        <input type="text" class="form-control" required placeholder="Enter your Contact" minlength="4" name="contact"/><br/>
        <input type="text" class="form-control" name="time" required placeholder="Enter the time of event"><br/>
        <input type="text" class="form-control" name="place" required placeholder="Enter the Venue of event"><br/>
        Upload Image:<input class="form-control" type="file" name="image" accept="image/*"><br/><br/>
        <button class="form-control" type="submit">
            Submit
        </button>
    </fieldset>
</form>
</div>
</body>
</html>
