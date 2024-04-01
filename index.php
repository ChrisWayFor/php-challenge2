<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <?php
        $secretCodeOne = "0@sn9sirppa@#?ia'jgtvryko1";
        $secretCodeTwo = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
        $secretCodeThree = "aopi?sgnirts@#?sedhtg+p9l!";
        // my variable secretcode

        $lengthone = strlen($secretCodeOne);
        $numberkey = floor($lengthone / 2);
        $underchain = substr($secretCodeOne, 5, $numberkey);
        $underchain = str_replace('@#?', ' ', $underchain);
        $finalchain = strrev($underchain);
        echo $finalchain;
        echo ' ';

        // first code 

        $lengthone = strlen($secretCodeTwo);
        $numberkey = floor($lengthone / 2);
        $underchain = substr($secretCodeTwo, 5, $numberkey);
        $underchain = str_replace('@#?', ' ', $underchain);
        $finalchain = strrev($underchain);
        echo $finalchain;
        echo ' ';
        // second code 

        $lengthone = strlen($secretCodeThree);
        $numberkey = floor($lengthone / 2);
        $underchain = substr($secretCodeThree, 5, $numberkey);
        $underchain = str_replace('@#?', ' ', $underchain);
        $finalchain = strrev($underchain);
        echo $finalchain;
        // three code
        ?>
    </main>
</body>

</html>