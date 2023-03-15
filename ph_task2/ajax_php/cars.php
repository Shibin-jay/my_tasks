<?php
$cars = array(
    array(
        'name' => 'M5',
        'brand' => 'BMW',
        'year' => '2021',
        'description' => 'High-performance sports sedan from BMW.',
        'image' => 'images/car3.jpg'
    ),
    array(
        'name' => 'Chiron',
        'brand' => 'Bugatti',
        'year' => '2023',
        'description' => 'French hypercar from Bugatti.',
        'image' => 'images/car1.jpg'
    ),
    array(
        'name' => 'Cullinan',
        'brand' => 'Rolls-Royce',
        'year' => '2021',
        'description' => 'Luxury SUV from Rolls-Royce.',
        'image' => 'images/car3.jpg'
    ),
    array(
        'name' => 'Taycan',
        'brand' => 'Porsche',
        'year' => '2022',
        'description' => 'Electric sports sedan from Porsche.',
        'image' => 'images/car4.jpg'
    ),
    array(
        'name' => 'Audi R8',
        'brand' => 'Audi',
        'year' => '2021',
        'description' => 'Mid-engine sports car from Audi.',
        'image' => 'images/car6.jpg'
    ),
    array(
        'name' => 'F-PACE',
        'brand' => 'Jaguar',
        'year' => '2022',
        'description' => 'Luxury mid-size SUV from Jaguar.',
        'image' => 'images/car5.jpg'
    ),
    array(
        'name' => 'Q7',
        'brand' => 'Audi',
        'year' => '2021',
        'description' => 'Luxury mid-size SUV from Audi.',
        'image' => 'images/car7.jpg'
    ),
    array(
        'name' => 'Ghibli',
        'brand' => 'Maserati',
        'year' => '2022',
        'description' => 'Luxury sports sedan from Maserati.',
        'image' => 'images/car8.jpg'
    ),
    array(
        'name' => 'Bentayga',
        'brand' => 'Bentley',
        'year' => '2023',
        'description' => 'Luxury SUV from Bentley.',
        'image' => 'images/car9.jpg'
    ),
    array(
        'name' => 'S60',
        'brand' => 'Volvo',
        'year' => '2021',
        'description' => 'Luxury mid-size sedan from Volvo.',
        'image' => 'images/car10.jpg'
    ),
    array(
        'name' => 'Golf GTI',
        'brand' => 'Volkswagen',
        'year' => '2022',
        'description' => 'Sporty compact car from Volkswagen.',
        'image' => 'images/car11.jpg'
    ),
    array(
        'name' => 'Mustang GT',
        'brand' => 'Ford',
        'year' => '2021',
        'description' => 'American muscle car from Ford.',
        'image' => 'images/car12.jpg'
    ),
    array(
        'name' => 'S-Class',
        'brand' => 'Mercedes-Benz',
        'year' => '2022',
        'description' => 'Luxury full-size sedan from Mercedes-Benz.',
        'image' => 'images/car13.jpg'
    ),
    array(
        'name' => 'M4',
        'brand' => 'BMW',
        'year' => '2023',
        'description' => 'Luxury sports car from BMW.',
        'image' => 'images/car14.jpg'
    ),
    array(
        'name' => 'E-PACE',
        'brand' => 'Jaguar',
        'year' => '2021',
        'description' => 'Luxury compact SUV from Jaguar.',
        'image' => 'images/car15.jpg'
    ),
    array(
        'name' => 'G-Class',
        'brand' => 'Mercedes-Benz',
        'year' => '2022',
        'description' => 'Luxury SUV from Mercedes-Benz.',
        'image' => 'images/car16.jpg'
    ),
    array(
        'name' => 'RS 5 Sportback',
        'brand' => 'Audi',
        'year' => '2023',
        'description' => 'Luxury sports car from Audi.',
        'image' => 'images/car19.jpg'
    ),
    array(
        'name' => 'Range Rover Velar',
        'brand' => 'Land Rover',
        'year' => '2021',
        'description' => 'Luxury mid-size SUV from Land Rover.',
        'image' => 'images/car17.jpg'
    ),
    array(
        'name' => 'DB11',
        'brand' => 'Aston Martin',
        'year' => '2022',
        'description' => 'Luxury sports car from Aston Martin.',
        'image' => 'images/car18.jpg'
    ),    
);
$cars_json=json_encode($cars);
header('Content-Type: application/json');
echo  $cars_json;

?>
