<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang chủ - Du lịch</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <!-- Header -->
    <header class="bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center p-4">
            <h1 class="text-xl font-bold text-blue-600">Shark Tour</h1>
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="#" class="text-gray-700 hover:text-blue-600">Trang chủ</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-blue-600">Tour trong nước</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-blue-600">Tour quốc tế</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-blue-600">Liên hệ</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Banner -->
    <section class="bg-blue-600 text-white py-20">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-4">Khám phá những chuyến đi tuyệt vời</h2>
            <p class="text-lg mb-6">Đặt tour ngay hôm nay để trải nghiệm du lịch đáng nhớ!</p>
            <a href="#tours" class="bg-white text-blue-600 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition">Xem tour</a>
        </div>
    </section>

    <!-- Tours nổi bật -->
    <section id="tours" class="py-16">
        <div class="container mx-auto">
            <h3 class="text-2xl font-bold text-center mb-10">Tour nổi bật</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($tours as $item): ?>
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
                    <div class="h-48 w-full overflow-hidden">
                        <?php 
                            $imgs = json_decode($item['hinh_anh'], true);
                            $imgUrl = $imgs[0] ?? 'https://bvhttdl.mediacdn.vn/291773308735864832/2021/9/28/avatar1632818655447-1632818657363964609168.jpg';
                        ?>
                        <img src="<?= $imgUrl ?>" alt="<?= $item['ten_tour'] ?>" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4">
                        <h4 class="text-lg font-semibold mb-2"><?= $item['ten_tour'] ?></h4>
                        <p class="text-gray-600 mb-2">Danh mục: <?= $item['danh_muc'] ?></p>
                        <a href="#" class="text-blue-600 font-semibold hover:underline">Xem chi tiết</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 mt-16">
        <div class="container mx-auto text-center">
            <p>&copy; 2025 Shark Tour. All rights reserved.</p>
            <div class="mt-2 flex justify-center space-x-4">
                <a href="#" class="hover:text-blue-400">Facebook</a>
                <a href="#" class="hover:text-blue-400">Instagram</a>
                <a href="#" class="hover:text-blue-400">Twitter</a>
            </div>
        </div>
    </footer>

</body>
</html>
