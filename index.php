<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nexora Tech</title>

<!-- Favicon -->
<link rel="icon" href="photo/Futuristic Logo with Geometric Icon and Text.png" type="image/png">

<link rel="stylesheet" href="css/style.css">
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="js/main.js" defer></script>
<script src="js/products.js" defer></script>
</head>

<body>

<nav>
    <div class="logo-container">
        <img src="photo/Futuristic Logo with Geometric Icon and Text.png" alt="Logo">
        <h2 class="logo-text">Nexora Tech</h2>
    </div>

    <!-- SEARCH -->
    <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search...">
        <button><i class="fa fa-search"></i></button>
    </div>

    <nav>
      <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#products">Products</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
          <li>
              <button id="darkModeToggle" aria-label="Toggle Dark Mode">
                  <i class="fa-solid fa-moon"></i>
              </button>
          </li>
      </ul>
    </nav>
</nav>

<header>
    <h1>Welcome To Nexora Tech</h1>
    <p>High Quality Electronics</p>
</header>

<section class="products" id="products">

    <div class="product">
        <img src="./photo/kari-shea-1SAnrIxw5OY-unsplash.jpg" alt="Laptop">
        <h3>Laptop <i class="fa-solid fa-laptop" style="color: rgb(0, 0, 0);"></i></h3>
        <a href="laptop.html" target="_blank" class="info-btn">More</a>
    </div>

    <div class="product">
        <img src="./photo/rishabh-malhotra-83ypHTv6J2M-unsplash.jpg" alt="Mobile Phone">
        <h3>Mobile Phone <i class="fa-solid fa-mobile" style="color: rgb(0, 0, 0);"></i></h3>
        <a href="phone.html" target="_blank" class="info-btn">More</a>
    </div>

    <div class="product">
        <img src="./photo/francois-hoang-15LQr2QttqU-unsplash.jpg" alt="Tablet">
        <h3>Tablet <i class="fa-solid fa-tablet" style="color: rgb(0, 0, 0);"></i></h3>
        <a href="tablet.html" target="_blank" class="info-btn">More</a>
    </div>

    <div class="product">
        <img src="./photo/sebastian-banasiewcz-oXXc-s5nNy8-unsplash.jpg" alt="Headphones">
        <h3>Headphones <i class="fa-solid fa-headphones" style="color: rgb(0, 0, 0);"></i></h3>
        <a href="headphones.html" target="_blank" class="info-btn">More</a>
    </div>

    <div class="product">
        <img src="./photo/daniel-romero-AgLMrojqjAM-unsplash.jpg" alt="AirPods">
        <h3>AirPods</h3>
        <a href="airpodss.html" target="_blank" class="info-btn">More</a>
    </div>

    <div class="product">
        <img src="./photo/lars-kaizer-VZFgKK_9dYc-unsplash.jpg" alt="Accessories">
        <h3>cases</h3>
        <a href="cases.html" target="_blank" class="info-btn">More</a>
    </div>

    <!-- 👇 الرسالة هنا -->
    <p id="noResults"><i class="fa-solid fa-xmark" style="color: rgb(255, 0, 0);"></i> No Results Found</p>
</section>

<section class="about" id="about">
    <div class="about-container">

        <!-- الصورة -->
        <div class="about-image">
            <img src="./photo/about.jpg" alt="Tech Store">
        </div>

        <!-- المحتوى -->
        <div class="about-content">
            <h2>About Nexora Tech</h2>

            <p>
                Nexora Tech is your ultimate destination for the latest laptops,
                smartphones, tablets, headphones, earbuds, and accessories.
                We combine cutting-edge technology with unbeatable prices to
                deliver a premium shopping experience.
            </p>

            <div class="features">
                <div class="feature-box">
                    <span><i class="fa-solid fa-laptop" style="color: rgb(10, 148, 241);"></i></span>
                    <h4>Top Brands</h4>
                    <p>Apple, Samsung, Dell & more</p>
                </div>

                <div class="feature-box">
                    <span><i class="fa-solid fa-bolt" style="color: rgb(116, 192, 252);"></i></span>
                    <h4>Best Prices</h4>
                    <p>Competitive market deals</p>
                </div>

                <div class="feature-box">
                    <span><i class="fa-solid fa-car" style="color: rgb(116, 192, 252);"></i></span>
                    <h4>Fast Delivery</h4>
                    <p>Anywhere, anytime</p>
                </div>
            </div>

            <a href="#products" class="about-btn">Shop Now</a>
        </div>

    </div>
</section>
<!-- ===== Contact Section =====  -->
<section class="contact" id="contact">
  <h2 class="text-black dark:text-white">Contact Us</h2>

  <div class="form-container mt-4 p-4 rounded-lg shadow-sm">

    <h2 class="text-black dark:text-white font-bold text-lg">
      Shipping Label Address Form
    </h2>

    <form id="contactForm" method="POST">

      <input type="hidden" name="form_type" value="contact">

      <div class="mt-4">
        <label class="text-black dark:text-white">Name</label>
        <input name="name" placeholder="Your name" type="text"
          class="w-full rounded-md border px-2 py-1 bg-white dark:bg-gray-800 dark:text-white placeholder-gray-500 dark:placeholder-gray-400">
      </div>

      <div class="mt-4">
        <label class="text-black dark:text-white">Address</label>
        <textarea name="address" placeholder="Your address"
          class="w-full rounded-md border px-2 py-1 bg-white dark:bg-gray-800 dark:text-white placeholder-gray-500 dark:placeholder-gray-400"></textarea>
      </div>

      <div class="mt-4 flex gap-2">
        <div class="flex-1">
          <label class="text-black dark:text-white">City</label>
          <input name="city" placeholder="Your city" type="text"
            class="w-full rounded-md border px-2 py-1 bg-white dark:bg-gray-800 dark:text-white placeholder-gray-500 dark:placeholder-gray-400">
        </div>

        <div class="flex-1">
          <label class="text-black dark:text-white">State</label>
          <input name="state" placeholder="Your state" type="text"
            class="w-full rounded-md border px-2 py-1 bg-white dark:bg-gray-800 dark:text-white placeholder-gray-500 dark:placeholder-gray-400">
        </div>
      </div>

      <div class="mt-4 flex gap-2">
        <div class="flex-1">
          <label class="text-black dark:text-white">ZIP</label>
          <input name="zip" placeholder="ZIP code" type="text"
            class="w-full rounded-md border px-2 py-1 bg-white dark:bg-gray-800 dark:text-white placeholder-gray-500 dark:placeholder-gray-400">
        </div>

        <div class="flex-1">
          <label class="text-black dark:text-white">Country</label>
          <select id="country" name="country" class="w-full rounded-md border px-2 py-1 bg-white dark:bg-gray-800 dark:text-white">
            <option value=""></option>
          </select>
        </div>
      </div>

      <div class="mt-4 flex justify-end">
        <button type="submit" class="bg-blue-400 hover:bg-blue-500 text-white rounded-md px-4 py-1">
          Submit
        </button>
      </div>

    </form>

  </div>

  <p><i class="fa-solid fa-phone"></i> Phone: 01000000000</p>
  <p><i class="fa-solid fa-location-pin"></i> Address: Matrouh, Egypt</p>
</section>
<!-- ===== Footer ===== -->
<footer>
  <div class="footer-top">
    <ul class="social-links">
      <li>
        <a href="https://www.facebook.com/share/18k5xyeB5F/" aria-label="Facebook" data-social="facebook">
          <div class="filled"></div>
          <i class="fab fa-facebook-f"></i>
          <span class="tooltip">Facebook</span>
        </a>
      </li>
      <li>
        <a href="https://www.instagram.com/nexora_tech12?igsh=OXYxczFhdTYwODh1" aria-label="Instagram" data-social="instagram">
          <div class="filled"></div>
          <i class="fab fa-instagram"></i>
          <span class="tooltip">Instagram</span>
        </a>
      </li>
      <li>
        <a href="https://x.com/nexoratec13?s=11" aria-label="Twitter" data-social="twitter">
          <div class="filled"></div>
          <i class="fab fa-twitter"></i>
          <span class="tooltip">Twitter</span>
        </a>
      </li>
      <li>
        <a href="https://www.linkedin.com/in/nexora-tech-232004363?utm_source=share_via&utm_content=profile&utm_medium=member_ios" aria-label="LinkedIn" data-social="linkedin">
          <div class="filled"></div>
          <i class="fab fa-linkedin-in"></i>
          <span class="tooltip">LinkedIn</span>
        </a>
      </li>
    </ul>
    <div class="designer">
      <div>Design By Eng / Abdelrahman Taher</div>
      Design By Eng / Mostafa Elnagar
    </div>
  </div>
  <div class="footer-bottom">
    <p>© 2026 Nexora Tech | All Rights Reserved</p>
  </div>
</footer>

<!-- زرار الرجوع لأعلى الصفحة -->
<button id="topBtn">
  <i class="fa-solid fa-arrow-up"></i>
</button>

<!-- Cart Icon -->
<div class="cart-wrapper">
  <a href="shoppingPasket.html" class="cart-icon">
    <i class="fa-solid fa-cart-arrow-down" style="color: rgb(255, 254, 251);"></i>
  </a>
</div>
</body>
</html>