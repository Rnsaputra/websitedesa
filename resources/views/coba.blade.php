<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swiper dengan Tailwind CSS</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <style>
        .swiper-container {
            width: 300px;
            height: 400px;
        }

        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body class="bg-gray-100 p-4">

    <div class="swiper-container mx-auto">
        <div class="swiper-wrapper">
            <div class="swiper-slide bg-blue-200">Slide 1</div>
            <div class="swiper-slide bg-green-200">Slide 2</div>
            <div class="swiper-slide bg-yellow-200">Slide 3</div>
            <div class="swiper-slide bg-red-200">Slide 4</div>
            <div class="swiper-slide bg-purple-200">Slide 5</div>
        </div>
    </div>


    <script>
        const swiper = new Swiper('.swiper-container', {
            direction: 'vertical',
            slidesPerView: 2,
            spaceBetween: 10,
        });
    </script>
</body>

</html>
