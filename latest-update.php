<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/webp" href="images/logog.webp">
    <title>Latest Update at GNC Dehradun</title>
</head>
<?php require "common/header.php" ?>
<div class="kingster-page-title-wrap  kingster-style-custom kingster-left-align" style="background-image: url(upload/latest-update-head.webp) ;">
    <div class="kingster-page-title-bottom-gradient"></div>
    <div class="kingster-page-title-container kingster-container">
        <div class="kingster-page-title-content kingster-item-pdlr" style="padding-top: 560px ;padding-bottom: 60px ;">
            <div class="kingster-page-caption" style="font-size: 21px ;font-weight: 400 ;letter-spacing: 0px ;">Latest Update </div>
            <h1 class="kingster-page-title" style="font-size: 48px ;font-weight: 700 ;text-transform: none ;letter-spacing: 0px ;color: #ffffff ;"><small>at</small> Guru Nanak College</h1>
        </div>
    </div>
</div>
<section class="container mt-5 mb-5 ">
    <div class="row">
        <?php
        $jsonFilePath = 'latest_update.json';
        $jsonData = file_get_contents($jsonFilePath);
        $data = json_decode($jsonData, true);
        if ($data && isset($data['latest_update']) && is_array($data['latest_update'])) {
            foreach ($data['latest_update'] as $item) {
                echo ' <div class="col-lg-4 col-sm-12">';
                echo '<div class="card">';
                echo '<img src="' . $item['banner'] . '" class="card-img-top" alt="' . $item['title'] . '" />';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $item['title'] . '</h5>';
                echo '<p class="card-text">' . $item['description'] . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo 'Invalid JSON data or structure.';
        }
        ?>
    </div>
</section>
<?php require "common/footer.php" ?>