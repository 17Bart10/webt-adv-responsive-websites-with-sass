<?php
namespace Htlw3r\Bootube;
require('vendor/autoload.php');

$myYoutbe1 = new YouTubeVideo('SUS TIKTOKS für D4DDY REZO und B4BY MEXI! 😳', '80uklabAqQs');
$myYoutbe2 = new YouTubeVideo('50 Genius Animals Caught On Camera', 'mRsNPxff54c');
$myYoutbe3 = new YouTubeVideo('Nazi-Bücher: Liefert „Der Schelm“ (einfach) weiter? | STRG_F', 'rG9sui3GgzI');
$myYoutbe4 = new YouTubeVideo('NIE WIEDER FIFA', 'vt6tzHwpL-E');
$myYoutbe5 = new YouTubeVideo('Owiwi - My World (Official Music Video)', 'Mz60uGfNRGU');

$myVimeo1 = new VimeoVideo('Ben Raemers Forever', '343970762');
$myVimeo2 = new VimeoVideo('六 六 (Liu Liu)', '357554616');
$myVimeo3 = new VimeoVideo('Torren Martyn - TESORO ENTERRADO - Full Film', '348839862');
$myVimeo4 = new VimeoVideo('NOMÁD', '346913013');
$myVimeo5 = new VimeoVideo('DPS Cinematic // Stone’s Throw', '364912471');

echo '<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="stylesheet" href="src/css/index.css">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>';

echo '<div class="text-center">';
echo '<div class="fs-2 text-white">BooTube - BOO - BE SCARED</div>';
echo '</div>';

echo '<div class="container text-center">
<div class="row row-cols-4">';

echo '<div class="col mt-3">' . $myYoutbe1->getVideoEmbedCode() . '</div>';
echo '<div class="col mt-3">' . $myYoutbe2->getVideoEmbedCode() . '</div>';
echo '<div class="col mt-3">' . $myYoutbe3->getVideoEmbedCode() . '</div>';
echo '<div class="col mt-3">' . $myYoutbe4->getVideoEmbedCode() . '</div>';
echo '<div class="col mt-3">' . $myYoutbe5->getVideoEmbedCode() . '</div>';

echo '
<div></div>
<div></div>
<div></div>';

echo '<div class="col mt-3">' . $myVimeo1->getVideoEmbedCode() . '</div>';
echo '<div class="col mt-3">' . $myVimeo2->getVideoEmbedCode() . '</div>';
echo '<div class="col mt-3">' . $myVimeo3->getVideoEmbedCode() . '</div>';
echo '<div class="col mt-3">' . $myVimeo4->getVideoEmbedCode() . '</div>';
echo '<div class="col mt-3">' . $myVimeo5->getVideoEmbedCode() . '</div>';


// echo '<div class="col mt-3">';
// echo '<div style="padding:60% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/343970762?h=2727f0b010&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>';
// echo '</div>';


echo '</div>';