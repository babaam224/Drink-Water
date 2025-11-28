```
<?php
    $title = "Contact Information";
    $name = "John Doe";
    $email = "john@apu.edu.my";
    $address[0] = "Lot & Technology Park Malaysia";
    $address[1] = "Bukit Jalil";
    $address[2] = "Kuala Lumpur";
    $postcode = "57000";
    $telephone = "0123456789";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Info</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
            margin: 0;
        }
        .contact-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        .contact-card h1 {
            color: #333;
            margin-bottom: 20px;
        }
        .contact-card p {
            color: #555;
            margin: 10px 0;
        }
        .contact-card ul {
            list-style-type: none;
            padding: 0;
        }
        .contact-card li {
            background-color: #ddd;
            margin: 5px 0;
            padding: 10px;
            border-radius: 5p
        }
    </style>
</head>
<body>
    <div class="contact-card">
        <h1><?php echo $title?></h1>
        <?php
            echo "<h1>$title</h1>";
            echo '<h1>'.$title.'</h1>';
        ?>
        <p><?php echo $name?></p>
        <p>
            <a herf="mailto:<?php echo $email ?>">
                <?php echo $email ?>
            </a>
        </p>
        <p><?php echo $postcode?></p>
        <p>
            <a herf="mailto:<?php echo $telephone ?>">
                <?php echo $telephone ?>
            </a>
        </p>

        <ul>
            <?php
                $i = 0;
                while($i < 3){
                    echo "<li>$address[$i]</li>";
                $i++;
                }
            ?>
        </ul>
    </div>

</body>
</html>
```