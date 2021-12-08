<!DOCTYPE html>
<html>
    <head>
        <h1>PHP includes many things</h1>
    </head>
    <body>
    <?php include 'list-group.php' ?>
        <P>
        <?php
            $name="Lewis Marte";
            $thing1="It is a lot of fun";
            $thing2="Great creative outlet";
            $thing3="very useful in everyday life";
            echo "<h3>My name is $name and...</h3>";
            echo "<h3>These are 3 things I like about coding</h3>";
            echo "$thing1";
            echo "<br>";
            echo "$thing2";
            echo "<br>";
            echo "$thing3";
        ?>
        </P>
    </body>
</html>