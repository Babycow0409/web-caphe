<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arabica - Cà Phê Đậm Đà</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto:wght@400&display=swap" rel="stylesheet">
    <style>
        * { 
            margin: 0; 
            padding: 0; 
            box-sizing: border-box; 
            font-family: 'Roboto', sans-serif; 
        }
        body { 
            padding-top: 100px; 
            line-height: 1.6; 
        }
        header { 
            background-color: #3c2f2f; 
            color: white; 
            padding: 1rem; 
            position: fixed; 
            width: 100%; 
            top: 0; 
            z-index: 1000; 
        }
        nav { 
            display: flex; 
            flex-wrap: wrap; 
            justify-content: space-between; 
            align-items: center; 
            max-width: 1200px; 
            margin: 0 auto; 
        }
        .logo { 
            font-family: 'Playfair Display', serif; 
            font-size: 1.8em; 
            padding: 10px; 
        }
        .nav-links { 
            display: flex; 
            flex-wrap: wrap; 
            align-items: center; 
            padding: 10px; 
        }
        nav a { 
            color: white; 
            text-decoration: none; 
            margin: 10px 15px; 
            font-weight: bold; 
        }
        nav a:hover { 
            color: #d4a373; 
        }
        h1, h2 { 
            font-family: 'Playfair Display', serif; 
            color: #3c2f2f; 
            text-align: center; 
            margin: 40px 0 20px; 
        }
        .btn { 
            padding: 10px 20px; 
            background-color: #d4a373; 
            color: white; 
            text-decoration: none; 
            border: none; 
            border-radius: 50px; 
            cursor: pointer; 
            transition: all 0.3s; 
            display: block; 
            text-align: center;
            margin: 10px auto;
        }
        .btn:hover { background-color: #8b4513; transform: scale(1.05); }
        .products { max-width: 1200px; margin: 50px auto; padding: 20px; }
        .product-grid { 
            display: grid; 
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); 
            gap: 30px; 
            padding: 20px;
        }
        .product-card { 
            background-color: #fffaf0; 
            padding: 20px; 
            border-radius: 10px; 
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); 
            transition: transform 0.3s; 
            display: flex; 
            flex-direction: column;
        }
        .product-card:hover { transform: scale(1.05); }
        .product-card img { width: 100%; border-radius: 5px; height: 200px; object-fit: cover; cursor: pointer; }
        .product-card h3 { margin: 15px 0; color: #3c2f2f; cursor: pointer; }
        .product-card h3:hover { color: #d4a373; }
        .product-card p { color: #555; margin-bottom: 15px; }
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #3c2f2f;
            min-width: 160px;
            box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {
            background-color: #d4a373;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        
        @media (max-width: 768px) { 
            nav { 
                flex-direction: column; 
                padding: 10px; }
            .nav-links { 
                flex-direction: column; 
                margin-top: 15px; 
            }
            nav a { 
                margin: 8px 0; }
            .product-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">Cà Phê Đậm Đà</div>
            <div class="nav-links">
                <a href="index.php">Trang chủ</a>
                <div class="dropdown">
                    <a href="products.php">Sản phẩm</a>
                    <div class="dropdown-content">
                        <a href="products.php">Tất cả</a>
                        <a href="arabica.php">Arabica</a>
                        <a href="robusta.php">Robusta</a>
                        <a href="chon.php">Chồn</a>
                        <a href="Khac.php">Khác</a>
                    </div>
                </div>
                <a href="#about">Giới thiệu</a>
                <a href="#contact">Liên hệ</a>
                <a href="cart.php">Giỏ hàng</a>
            </div>
        </nav>
    </header>

    <section class="products">
        <h1>Cà phê Arabica</h1>
        
        <div class="info-section">
            <h2>Giới thiệu về cà phê Arabica</h2>
            <p>
                Cà phê Arabica được biết đến là loại cà phê cao cấp nhất thế giới, chiếm khoảng 60% sản lượng cà phê toàn cầu. Hạt cà phê Arabica có hình dáng ovan, phẳng và dài hơn so với các loại cà phê khác, với một đường cong đặc trưng.
            </p>
            <p>
                Cà phê Arabica nổi tiếng với hương vị tinh tế, cân bằng và phức tạp. Đặc trưng của loại cà phê này là vị chua nhẹ dễ chịu, hương thơm phong phú có thể bao gồm các nốt hương hoa, trái cây, hạt, socola hoặc caramel tùy thuộc vào nguồn gốc trồng trọt. Arabica thường có hàm lượng caffeine thấp hơn so với các loại cà phê khác, nhưng lại mang đến trải nghiệm thưởng thức tinh tế hơn.
            </p>
        </div>
        
        <div style="text-align: center; margin-bottom: 20px;">
            <form action="search.php" method="get">
                <input type="text" id="searchInput" name="q" placeholder="Tìm kiếm sản phẩm..." style="padding: 10px; width: 300px; border: 1px solid #d4a373; border-radius: 5px;">
                <button type="submit" class="btn">Tìm kiếm</button>
            </form>
        </div>
        <div class="product-grid" id="productGrid">
            <?php
            $products = [
                [
                    'id' => 1,
                    'name' => 'Cà phê Arabica',
                    'price' => 150000,
                    'image' => 'https://lh6.googleusercontent.com/proxy/ULqvKQ2UCFsMhYAqAbJE1VXiCR4I6IDe6dtj5t5h7qBXzhy4bqhlzOC3FlzOXHrOcvWBb_oiCQRi0U4ZXBOK3vA',
                    'weight' => '500g'
                ],
                [
                    'id' => 14,
                    'name' => 'Cà phê Arabica Đặc Biệt',
                    'price' => 380000,
                    'image' => 'https://centurycoffee.vn/uploads/images/2024/12/545x545-1733215387-single_product1-gol.jpg',
                    'weight' => '500g'
                ],
                [
                    'id' => 15,
                    'name' => 'Cà phê Arabica Colombia',
                    'price' => 400000,
                    'image' => 'https://covi.vn/wp-content/uploads/2021/06/ca-phe-arabica-colombia-3.jpg',
                    'weight' => '500g'
                ],
                [
                    'id' => 16,
                    'name' => 'Cà phê Arabica Brazil',
                    'price' => 700000,
                    'image' => 'https://khoinghiepcafe.com/wp-content/uploads/khoi-nghiep-cafe-hat-arabica-bourbon-brazil-chau-my-cao-cap-nguyen-chat-sach-100-pha-may-espresso-chuan-y-qua-tang-viet-nam.jpg.webp',
                    'weight' => '500g'
                ],
                [
                    'id' => 17,
                    'name' => 'Cà phê Arabica Ethiopia',
                    'price' => 540000,
                    'image' => 'https://thecoffeeholic.vn/storage/photos/2/Tr%C3%A0%20CF/4.jpg',
                    'weight' => '250g'
                ]
            ];

            foreach ($products as $product) {
                echo "
                <div class='product-card'>
                    <a href='product-detail.php?id={$product['id']}'>
                        <img src='{$product['image']}' alt='{$product['name']}'>
                    </a>
                    <a href='product-detail.php?id={$product['id']}'><h3>{$product['name']}</h3></a>
                    <p>" . number_format($product['price'], 0, ',', '.') . " VNĐ / {$product['weight']}</p>
                    <a href='#' class='btn' onclick=\"addToCart('{$product['name']} - {$product['weight']}', {$product['price']})\">Thêm vào giỏ</a>
                </div>";
            }
            ?>
        </div>
    </section>

    <script>
        let cart = JSON.parse(localStorage.getItem("cart")) || [];
        const products = <?php echo json_encode($products); ?>;
        const productGrid = document.getElementById('productGrid');
        const searchInput = document.getElementById('searchInput');

        function displayProducts(filteredProducts) {
            productGrid.innerHTML = filteredProducts.map(product => `
                <div class='product-card'>
                    <a href='product-detail.php?id=${product.id}'>
                        <img src='${product.image}' alt='${product.name}'>
                    </a>
                    <a href='product-detail.php?id=${product.id}'><h3>${product.name}</h3></a>
                    <p>${new Intl.NumberFormat('vi-VN').format(product.price)} VNĐ / ${product.weight}</p>
                    <a href='#' class='btn' onclick="addToCart('${product.name} - ${product.weight}', ${product.price})">Thêm vào giỏ</a>
                </div>
            `).join('');
        }

        searchInput.addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const filteredProducts = products.filter(product => 
                product.name.toLowerCase().includes(searchTerm)
            );
            displayProducts(filteredProducts);
        });

        // Hiển thị tất cả sản phẩm khi trang được tải
        displayProducts(products);

        function addToCart(name, price) {
            const existingItem = cart.find(item => item.name === name);
            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cart.push({ name, price, quantity: 1 });
            }
            localStorage.setItem("cart", JSON.stringify(cart));
            alert(`${name} đã được thêm vào giỏ hàng!`);
        }
    </script>
</body>
</html> 