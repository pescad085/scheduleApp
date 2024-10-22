<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize user input
    $event = htmlspecialchars($_POST['event']);
    $date = htmlspecialchars($_POST['date']);
    $time = htmlspecialchars($_POST['time']);
    
    // Format the event details
    $data = "Event: $event \nDate: $date\nTime: $time\n\n";
    
    // Append the event to the file
    file_put_contents('events.html', $data, FILE_APPEND);
    
    // Output success message
    echo "Event has been scheduled successfully.";
    include "events.html";
    

} else {
    echo "Invalid Request";
}
