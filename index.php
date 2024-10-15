<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <?php
    $myFamili = [
        "markos",
        "yaye",
        "selmi",
        "enati",
        "antea",
        "addis",
        "friether",
        "antea"
    ]
        ?>
    <h1>
        my beloved families
    </h1>

    <h1>
        this is how we can list down the elements
        <?php
        foreach ($myFamili as $person) {
            echo "<li>$person</li>";
            ;
        }
        ?>
        this is what is what if there is special character that i can pass
        <?php
        foreach ($myFamili as $person) {
            echo "<li>{$person}</li>";
        }
        ?>
        this is quickly messy
        <?php
        foreach ($myFamili as $person) {
            echo "<li><div>$person</div></li>";
          
        }
        ?>
        we can fix the above error here 
        <?php foreach ($myFamili as $person): ?>
        <li>
            <?= "<div>$person;</div>"?>
        </li>
        <?php endforeach ?>

    </h1>
</body>

</html>