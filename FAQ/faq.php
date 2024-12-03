<?php
// faq.php

$faq_items = [
    [
        "title" => "General Questions",
        "content" => "Some general questions and answers..."
    ],
    [
        "title" => "Job Search",
        "content" => "Information about job searching..."
    ],
    [
        "title" => "Application Process",
        "content" => "Details about applying for jobs..."
    ],
    [
        "title" => "Profile Management",
        "content" => "Help with managing user profiles..."
    ],
    [
        "title" => "Payment & Billing",
        "content" => "Information about payment and billing..."
    ],
    [
        "title" => "Technical Support",
        "content" => "Guidance on technical issues..."
    ]
];

// Function to generate FAQ HTML
function generate_faq() {
    global $faq_items;
    $output = '<div class="faq-sections">';
    
    $half = ceil(count($faq_items) / 2);
    $columns = array_chunk($faq_items, $half);

    foreach ($columns as $column) {
        $output .= '<div class="faq-column">';
        foreach ($column as $faq) {
            $output .= '<div class="faq-item">';
            $output .= '<h3>' . $faq["title"] . ' :</h3>';
            $output .= '<p>' . $faq["content"] . '</p>';
            $output .= '</div>';
        }
        $output .= '</div>';
    }

    $output .= '</div>';
    return $output;
}
?>
