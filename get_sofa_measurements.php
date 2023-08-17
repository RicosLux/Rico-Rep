<?php

if(isset($_POST['sofaType'])) {
    $sofaType = $_POST['sofaType'];
    
    $templates = [
        'Sectional Sofas' => 'Length of each section: <input type="text" name="section_length"><br> Width of each section: <input type="text" name="section_width"><br> Depth of each section: <input type="text" name="section_depth"><br> Length, width, and thickness of each removable cushion: <input type="text" name="cushion_dimensions"><br>',
        'Chesterfield' => 'Total length: <input type="text" name="total_length"><br> Total depth: <input type="text" name="total_depth"><br> Total height: <input type="text" name="total_height"><br> Length and height of the back: <input type="text" name="back_dimensions"><br> Length and width of the seat: <input type="text" name="seat_dimensions"><br>',
        'Lawson Sofa' => 'Total length: <input type="text" name="total_length"><br> Total depth: <input type="text" name="total_depth"><br> Total height: <input type="text" name="total_height"><br> Length and height of the back: <input type="text" name="back_dimensions"><br> Length and width of the seat: <input type="text" name="seat_dimensions"><br> Thickness of any seat cushions: <input type="text" name="cushion_thickness"><br>',
        'Tuxedo Sofa' => 'Total length: <input type="text" name="total_length"><br> Total depth: <input type="text" name="total_depth"><br> Total height: <input type="text" name="total_height"><br> Length and height of the back: <input type="text" name="back_dimensions"><br> Length and width of the seat: <input type="text" name="seat_dimensions"><br>',
        'English Rolled Arm Sofa' => 'Total length: <input type="text" name="total_length"><br> Total depth: <input type="text" name="total_depth"><br> Total height: <input type="text" name="total_height"><br> Length and height of the back: <input type="text" name="back_dimensions"><br> Length and width of the seat: <input type="text" name="seat_dimensions"><br>',
        'Bridgewater Sofa' => 'Total length: <input type="text" name="total_length"><br> Total depth: <input type="text" name="total_depth"><br> Total height: <input type="text" name="total_height"><br> Length and height of the back: <input type="text" name="back_dimensions"><br> Length and width of the seat: <input type="text" name="seat_dimensions"><br>',
        'Cabriole Sofa' => 'Total length: <input type="text" name="total_length"><br> Total depth: <input type="text" name="total_depth"><br> Total height: <input type="text" name="total_height"><br> Length and height of the back: <input type="text" name="back_dimensions"><br> Length and width of the seat: <input type="text" name="seat_dimensions"><br>',
        'Camelback Sofa' => 'Total length: <input type="text" name="total_length"><br> Total depth: <input type="text" name="total_depth"><br> Total height: <input type="text" name="total_height"><br> Length and height of the back: <input type="text" name="back_dimensions"><br> Length and width of the seat: <input type="text" name="seat_dimensions"><br>',
        'Chaise Lounge' => 'Total length: <input type="text" name="total_length"><br> Total depth: <input type="text" name="total_depth"><br> Total height: <input type="text" name="total_height"><br> Length and height of the back: <input type="text" name="back_dimensions"><br> Length and width of the seat: <input type="text" name="seat_dimensions"><br>',
        'Sleeper Sofas' => 'Sofa form total length, depth, height: <input type="text" name="sofa_form_dimensions"><br> Bed form total length, width, height: <input type="text" name="bed_form_dimensions"><br> Length, width, and thickness of the mattress/cushion: <input type="text" name="mattress_dimensions"><br>',
        'Loveseats' => 'Total length: <input type="text" name="total_length"><br> Total depth: <input type="text" name="total_depth"><br> Total height: <input type="text" name="total_height"><br> Length and height of the back: <input type="text" name="back_dimensions"><br> Length and width of the seat: <input type="text" name="seat_dimensions"><br>',
        'Divan' => 'Total length: <input type="text" name="total_length"><br> Total depth: <input type="text" name="total_depth"><br> Total height: <input type="text" name="total_height"><br> Length and width of the seat: <input type="text" name="seat_dimensions"><br>',
        'Settee Sofas' => 'Total length: <input type="text" name="total_length"><br> Total depth: <input type="text" name="total_depth"><br> Total height: <input type="text" name="total_height"><br> Length and height of the back: <input type="text" name="back_dimensions"><br> Length and width of the seat: <input type="text" name="seat_dimensions"><br>',
        'Recliner Sofas' => 'Total length in non-reclining and reclining form: <input type="text" name="total_length"><br> Total depth in non-reclining and reclining form: <input type="text" name="total_depth"><br> Total height: <input type="text" name="total_height"><br> Length and height of the back: <input type="text" name="back_dimensions"><br> Length and width of the seat: <input type="text" name="seat_dimensions"><br>',
        'Futon' => 'Sofa form total length, depth, height: <input type="text" name="sofa_form_dimensions"><br> Bed form total length, width, height: <input type="text" name="bed_form_dimensions"><br> Length, width, and thickness of the mattress/cushion: <input type="text" name="mattress_dimensions"><br>',
        'Knole Sofa' => 'Total length: <input type="text" name="total_length"><br> Total depth: <input type="text" name="total_depth"><br> Total height: <input type="text" name="total_height"><br> Length and height of the back: <input type="text" name="back_dimensions"><br> Length and width of the seat: <input type="text" name="seat_dimensions"><br>',
        'Mid-century Modern Sofa' => 'Total length: <input type="text" name="total_length"><br> Total depth: <input type="text" name="total_depth"><br> Total height: <input type="text" name="total_height"><br> Length and height of the back: <input type="text" name="back_dimensions"><br> Length and width of the seat: <input type="text" name="seat_dimensions"><br>',
    ];

    echo $templates[$sofaType] ?? '';
}

?>