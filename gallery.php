<?php
$dir = "img/events"; // folder containing images
$images = glob($dir . "/*.{jpg,jpeg,png,gif}", GLOB_BRACE);

// Function to create a readable caption and group key
function getCaptionAndKey($filename) {
    $base = basename($filename);
    $name = pathinfo($base, PATHINFO_FILENAME); // remove extension
    $nameForKey = preg_replace('/\d+/', '', $name); // remove numbers for grouping
    $key = str_replace(['-', '_'], ' ', $nameForKey); // replace - and _ with space
    $caption = str_replace(['-', '_'], ' ', $name); // caption keeps numbers for clarity
    return ['caption' => ucwords($caption), 'key' => ucwords(trim($key))];
}

// Group images and prepare flat arrays for lightbox
$groups = [];
$flatImages = [];
$flatCaptions = [];
foreach ($images as $img) {
    $info = getCaptionAndKey($img);
    $groups[$info['key']][] = ['file' => $img, 'caption' => $info['caption']];
    $flatImages[] = $img;
    $flatCaptions[] = $info['caption'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Degree College Shikaripara | Gallery</title>
    <link rel="icon" type="image/png" href="img/college_logo.jpg">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; background: #f0f0f0; }
        h1 { text-align: center; }

        .group { margin-bottom: 40px; }
        .group-title { font-size: 24px; margin-bottom: 15px; text-align: center; }
        .gallery { display: flex; flex-wrap: wrap; gap: 10px; justify-content: center; }
        .gallery-item { text-align: center; }
        .gallery img { width: 200px; height: 150px; object-fit: cover; border: 2px solid #ccc; border-radius: 5px; cursor: pointer; transition: transform 0.2s, border-color 0.2s; }
        .gallery img:hover { transform: scale(1.05); border-color: #333; }
        .caption { margin-top: 5px; font-size: 14px; color: #333; }

        /* Lightbox overlay */
        .lightbox { display: none; position: fixed; z-index: 999; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.9); justify-content: center; align-items: center; flex-direction: column; }
        .lightbox img { max-width: 90%; max-height: 70%; border-radius: 5px; }
        .lightbox-caption { margin-top: 10px; color: #fff; font-size: 18px; text-align: center; }
        .close, .prev, .next { position: absolute; top: 50%; transform: translateY(-50%); color: white; font-size: 40px; text-decoration: none; padding: 10px; cursor: pointer; user-select: none; }
        .close { top: 20px; right: 30px; font-size: 30px; transform: none; }
        .prev { left: 20px; }
        .next { right: 20px; }
    </style>
</head>

<body id="gallery">
<div class="wrapper">
    <?php include 'header.php'; ?>  

    <div class="contents-wrapper">
        <div class="content">

        <?php foreach($groups as $groupName => $items): ?>
            <div class="group">
                <div class="group-title"><?php echo $groupName; ?></div>
                <div class="gallery">
                    <?php foreach($items as $index => $imgData): ?>
                        <?php $flatIndex = array_search($imgData['file'], $flatImages); ?>
                        <div class="gallery-item">
                            <img src="<?php echo $imgData['file']; ?>" alt="<?php echo $imgData['caption']; ?>" onclick="openLightbox(<?php echo $flatIndex; ?>)">
                            <div class="caption"><?php echo $imgData['caption']; ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>

        </div>
    </div>

    <?php include 'footer.php'; ?>  
</div>

<!-- Lightbox -->
<div id="lightbox" class="lightbox">
    <a class="close" onclick="closeLightbox()">&times;</a>
    <a class="prev" onclick="changeImage(-1)">&#10094;</a>
    <img id="lightbox-img" src="" alt="Image">
    <div id="lightbox-caption" class="lightbox-caption"></div>
    <a class="next" onclick="changeImage(1)">&#10095;</a>
</div>

<script>
let images = <?php echo json_encode($flatImages); ?>;
let captions = <?php echo json_encode($flatCaptions); ?>;
let currentIndex = 0;

function openLightbox(index) {
    currentIndex = index;
    document.getElementById('lightbox').style.display = 'flex';
    updateLightbox();
}

function closeLightbox() { document.getElementById('lightbox').style.display = 'none'; }

function changeImage(direction) {
    currentIndex += direction;
    if(currentIndex < 0) currentIndex = images.length - 1;
    if(currentIndex >= images.length) currentIndex = 0;
    updateLightbox();
}

function updateLightbox() {
    document.getElementById('lightbox-img').src = images[currentIndex];
    document.getElementById('lightbox-caption').textContent = captions[currentIndex];
}

// Click outside to close
document.getElementById('lightbox').addEventListener('click', function(e) {
    if(e.target.id === 'lightbox') closeLightbox();
});

// Keyboard
document.addEventListener('keydown', function(e) {
    if(document.getElementById('lightbox').style.display === 'flex') {
        if(e.key === 'ArrowRight') changeImage(1);
        if(e.key === 'ArrowLeft') changeImage(-1);
        if(e.key === 'Escape') closeLightbox();
    }
});

// Touch swipe
let touchStartX = 0;
let touchEndX = 0;
const lightboxDiv = document.getElementById('lightbox');
lightboxDiv.addEventListener('touchstart', e => { touchStartX = e.changedTouches[0].screenX; });
lightboxDiv.addEventListener('touchend', e => { touchEndX = e.changedTouches[0].screenX; handleSwipe(); });
function handleSwipe() {
    const swipeThreshold = 50;
    if(touchEndX < touchStartX - swipeThreshold) changeImage(1);
    if(touchEndX > touchStartX + swipeThreshold) changeImage(-1);
}
</script>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
