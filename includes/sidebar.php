   <div class="sidebar">
    <?php

    //Get current page name
    $current_page = basename($_SERVER["PHP_SELF"]); 

    // Set pages to levels 
    $pages = [  
        'Lv1-Login.php' => 'Level 1', 
        'Lv2-Vuln.php' => 'Level 2',
        'Lv3-Login.php' => 'Level 3',  
        'Lv4-Vuln.php' => 'Level 4', 
        'Lv5-Vuln.php' => 'Level 5', 
        'Lv6-Vuln.php' => 'Level 6', 
        'Lv7-Vuln.php' => 'Level 7', 
        'Lv8-Vuln.php' => 'Level 8', 
        'Lv9-Vuln.php' => 'Level 9', 
        'end.php' => 'Level 10',
    ];
    
    // disply side bar with current page highlighted 
    echo '<ul class="sidebar">'; 
    foreach ($pages as $page => $title) {
        $active = ($current_page == $page) ? 'class="active"' : ''; 
        echo "<li $active><a href=\"\">$title</a></li>"; 
    } 
    echo '</ul>';
    ?>
</div>