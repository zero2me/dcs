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

// Group images
$groups = [];
foreach ($images as $img) {
    $info = getCaptionAndKey($img);
    $groups[$info['key']][] = ['file' => $img, 'caption' => $info['caption']];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Degree College Shikaripara | Gallery</title>
    <!--Style Starts-->
    <link rel="icon" type="image/png" href="img/college_logo.jpg">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
   <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; background: #f0f0f0; }
        h1 { text-align: center; }

        .group {
            margin-bottom: 40px;
        }

        .group-title {
            font-size: 24px;
            margin-bottom: 15px;
            text-align: center;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
        }

        .gallery-item {
            text-align: center;
        }

        .gallery img {
            width: 200px;
            height: 150px;
            object-fit: cover;
            border: 2px solid #ccc;
            border-radius: 5px;
            cursor: pointer;
            transition: transform 0.2s, border-color 0.2s;
        }

        .gallery img:hover {
            transform: scale(1.05);
            border-color: #333;
        }

        .caption {
            margin-top: 5px;
            font-size: 14px;
            color: #333;
        }

        /* Lightbox overlay */
        .lightbox {
            display: none;
            position: fixed;
            z-index: 999;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(0,0,0,0.9);
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .lightbox img {
            max-width: 90%;
            max-height: 70%;
            border-radius: 5px;
        }

        .lightbox-caption {
            margin-top: 10px;
            color: #fff;
            font-size: 18px;
            text-align: center;
        }

        .close, .prev, .next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: white;
            font-size: 40px;
            text-decoration: none;
            padding: 10px;
            cursor: pointer;
            user-select: none;
        }

        .close { top: 20px; right: 30px; font-size: 30px; transform: none; }
        .prev { left: 20px; }
        .next { right: 20px; }
    </style>
</head>

<body id="gallery">
<!-- Start Your Body Code From here -->
<div class="wrapper">
    <!-- header starts here -->
 <?php include 'header.php'; ?>  
    <!-- /header -->
    <!-- Content wrapper -->
    <div class="contents-wrapper">
        <!-- Contents starts here -->
        <div class="content">
          <div class="gallery">
  <?php foreach($groups as $groupName => $items): ?>
    <div class="group">
        <div class="group-title"><?php echo $groupName; ?></div>
        <div class="gallery">
            <?php foreach($items as $index => $imgData): ?>
                <div class="gallery-item">
                    <img src="<?php echo $imgData['file']; ?>" alt="<?php echo $imgData['caption']; ?>" onclick="openLightbox('<?php echo $imgData['file']; ?>', '<?php echo $imgData['caption']; ?>')">
                    <div class="caption"><?php echo $imgData['caption']; ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endforeach; ?>
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
let imageElements = Array.from(document.querySelectorAll('.gallery img'));
let images = imageElements.map(img => img.src);
let captions = imageElements.map(img => img.alt);

let currentIndex = 0;

function openLightbox(src, caption) {
    currentIndex = images.indexOf(src);
    document.getElementById('lightbox').style.display = 'flex';
    updateLightbox();
}

function closeLightbox() {
    document.getElementById('lightbox').style.display = 'none';
}

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

// Close lightbox when clicking outside image
document.getElementById('lightbox').addEventListener('click', function(e) {
    if(e.target.id === 'lightbox') closeLightbox();
});

// Keyboard navigation
document.addEventListener('keydown', function(e) {
    if(document.getElementById('lightbox').style.display === 'flex') {
        if(e.key === 'ArrowRight') changeImage(1);
        if(e.key === 'ArrowLeft') changeImage(-1);
        if(e.key === 'Escape') closeLightbox();
    }
});

// Touch swipe support
let touchStartX = 0;
let touchEndX = 0;

const lightboxDiv = document.getElementById('lightbox');

lightboxDiv.addEventListener('touchstart', function(e) {
    touchStartX = e.changedTouches[0].screenX;
}, false);

lightboxDiv.addEventListener('touchend', function(e) {
    touchEndX = e.changedTouches[0].screenX;
    handleSwipe();
}, false);

function handleSwipe() {
    const swipeThreshold = 50;
    if(touchEndX < touchStartX - swipeThreshold) changeImage(1); // swipe left → next
    if(touchEndX > touchStartX + swipeThreshold) changeImage(-1); // swipe right → prev
}
</script>
        </div>
    </div>
    <!-- Footer -->
  <?php include 'footer.php'; ?>  
</div>
<!--Scripts Starts-->
<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/434d359724.js"></script>
<script src="js/imagesloaded.pkgd.js"></script>
<script src="https://npmcdn.com/masonry-layout@4.0/dist/masonry.pkgd.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script>
    $(document).ready(function () {
        var $grid = $('.grid').imagesLoaded(function () {
            $grid.masonry({
                itemSelector: '.grid-item',
                percentPosition: true,
                columnWidth: '.grid-sizer'
            });
        });

        $('.grid').magnificPopup({
            delegate: 'a', // child items selector, by clicking on it popup will open
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            zoom: {
                enabled: true,
                duration: 300,
                easing: 'ease-in-out'
            },
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0,1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                verticalFit: true
            }
            // other options
        });
    })
</script>
<script>
    $(document).on('click', function (e) {
        var
                $popover,
                $target = $(e.target);

        //do nothing if there was a click on popover content
        if ($target.hasClass('popover') || $target.closest('.popover').length) {
            return;
        }

        $('[data-toggle="popover"]').each(function () {
            $popover = $(this);

            if (!$popover.is(e.target) &&
                    $popover.has(e.target).length === 0 &&
                    $('.popover').has(e.target).length === 0) {
                $popover.popover('hide');
            } else {
                //fixes issue described above
                $popover.popover('toggle');
            }
        });
    })


</script>
</body>
</html>
