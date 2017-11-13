<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <title>Simple Calculator</title>
</head>
<body>

<br>
<h1>Simple Calculator</h1>
<br>

<ul>
<div class="col-xs-12">
    <div class="col-xs-6" >
        <form action="/php_intro/phpCalc/calc.php" method="post">
            <input type="text" name="fnumber" placeholder="Insert numbers">
            <br/>
            <select name="option">
                <option value="add">add</option>
                <option value="substract">substract</option>
            </select>
            <br/>
            <input type="submit" value="Submit number" class="btn btn-success">
        </form>
    </div>

    <div class="col-xs-6">
        <strong>result : <?php echo $_SESSION['sum']; ?></strong>
    </div>
</ul>

</div>

</body>
</html>