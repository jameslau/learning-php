<?php

    // indexable array
    $colors = array( 'red', 'blue', 'green' );
    
    // list out the array in one line 
    print_r( $colors );

    // if we want a specific color or an indexable array
    echo $colors[1];
    echo '<p>' . $colors[1] . '</p>';

    $colors[] = 'yellow';

    print_r( $colors );

    // associative arrays
    $home_towns = array(
        // arrow operator
        'Jake' => 'Boston, MA',
        'James' => 'Portland, ME',
        'Katelyn' => 'San Francisco, CA',
        'Kimi' => 'Chicago, IL'
    );

    // use pre to make the text appear not inline
    echo '<pre>';
    print_r( $home_towns );
    echo '</pre>';
    
    // if you want to pull just one of the arrays, you insert the name. Note, the name is case sensitive.
    echo '<p>' . $home_towns['Jake'] . '</p>';
    
?>



<?php

    // multidimensional array
    $family = array( 
        'Jake' => array( 
            'age' => 3,
            'job' => 'toddler',
            'state' => 'MA',
        ),
        'James' => array( 
            'age' => 33,
            'job' => 'photographer',
            'state' => 'ME',
        ),
        'Katelyn' => array( 
            'age' => 32,
            'job' => 'designer',
            'state' => 'CA',
        ),
        'Kimi' => array( 
            'age' => 11,
            'job' => 'manager',
            'state' => 'IL',
        ),
    );

    // clean array layout
    echo '<pre>';
    print_r( $family );
    echo '</pre>';

    echo '<p>' . $family['Jake']['state'] . '</p>';

?>