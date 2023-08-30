
<?php
    $countries = ['Belgium', 'Netherlands'];
    $spoken_languages = [
        'Dutch' => false,
        'French' => false,
        'German' => false,
        'English' => false,
    ];

    foreach ($countries as $country) {
        match($country) {
            'Belgium' => [
                $spoken_languages['Dutch'] = true,
                $spoken_languages['French'] = true,
                $spoken_languages['German'] = true,
            ],
            'Netherlands' => [
                $spoken_languages['Dutch'] = true,
                $spoken_languages['English'] = true,
            ],
            'Germany' => $spoken_languages['German'] = false,
            'United Kingdom' => $spoken_languages['English'] = false,
        };
    }

    var_export($spoken_languages); 
    // array ( 'Dutch' => true, 'French' => true, 'German' => true, 'English' => false, )

?>


<?php
    $Error_Code=(int) 401;
    $message=(string) match($Error_Code){
        200=>"OK",
        400=>"Bad Request",
        401=>"Unauthorized",
        403=>"Forbidden",
        404=>"Not Found",
        default=>"Unknown Error"
    };
    var_dump($message); // string(11) "Bad Request" 
?>