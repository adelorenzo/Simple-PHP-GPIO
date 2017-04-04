<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=-1" />
<meta charset="UTF-8"> 
<title>Switch Control</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
        <body>
        <center>
        <strong>Desk lights:
        <form action="index.php">
                <input type="submit" class="btn btn-info btn-lg" value="On" name="r-on">
                <input type="submit" class="btn btn-danger btn-lg" value="Off" name="r-off">
        </form>
        Fan:
        <form action="index.php">
                <input type="submit" class="btn btn-info btn-lg" value="On" name="w-on">
                <input type="submit" class="btn btn-danger btn-lg" value="Off" name="w-off">
        </form>
        Switch 3:
        <form action="index.php">
                <input type="submit" class="btn btn-info btn-lg" value="On" name="sw3-on">
                <input type="submit" class="btn btn-danger btn-lg" value="Off" name="sw3-off">
        </form>
        Switch 4:</strong>
        <form action="index.php">
                <input type="submit" class="btn btn-info btn-lg" value="On" name="sw4-on">
                <input type="submit" class="btn btn-danger btn-lg" value="Off" name="sw4-off">
        </form>
	</center>
        <?php
        if(isset($_GET['r-on'])){
                $gpio_on = shell_exec('gpio write 1 1');
        }
        else if(isset($_GET['r-off'])){
                $gpio_off = shell_exec('gpio write 1 0');
        }
        if(isset($_GET['w-on'])){
                $gpio_on = shell_exec('gpio write 2 1');
        }
        else if(isset($_GET['w-off'])){
                $gpio_off = shell_exec('gpio write 2 0');
        }
        if(isset($_GET['sw3-on'])){
                $gpio_on = shell_exec('gpio write 3 1');
        }
        else if(isset($_GET['sw3-off'])){
                $gpio_off = shell_exec('gpio write 3 0');
        }
        if(isset($_GET['sw4-on'])){
                $gpio_on = shell_exec('gpio write 4 1');
        }
        else if(isset($_GET['sw4-off'])){
                $gpio_off = shell_exec('gpio write 4 0');
        }
        ?>
        </body>
</html>
