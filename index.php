<?php
    include "Loging/db.php";

    $sql = "select * from products";
    $result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopUS</title>
    <link rel="icon" href="Images/Shopping app icon.jpg">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="styles2.css">
    <link
  href="https://cdn.jsdelivr.net/npm/remixicon@4.9.0/fonts/remixicon.css"
  rel="stylesheet"
    />
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="Images/Shopping app icon.jpg" alt="logo"><span>ShopUs</span>
        </div>
            <ul id="navLinks">
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#product">Product</a>
                </li>
                <li>
                    <a href="#contact">Contact</a>
                </li>
                <li>
                    <a href="#about">About Us</a>
                </li>
                <li>
                    <a href="Loging/login.php">Admin Login</a>
                </li>
            </ul>
        </nav>
    <section class="hero-section" id="home">
        <div class="hero-text">
            <h2>Welcome to the Home of your preferences.</h2>
            <p>Welcome to ShopUs. We invite you to explore our collection at your leisure — each piece thoughtfully chosen with an eye for quality. Should you have questions or simply wish to connect, we would be delighted to hear from you.</p>
           <a href="#contact"><button>Get in touch<i class="ri-arrow-right-line"></i></button></a>
        </div>
    </section>
    <section class="product-section product" id="product">
        <h2>Our Products</h2>
        <h3>Checkout Our Collection</h3>
        <div class="men">
            <?php  while($row = mysqli_fetch_assoc($result)){
        ?>
            <div class="product"> 
                <div class="image-container">
                    <img src="Images4Kids/<?php echo $row['image'] ?>" alt="shirt">
                </div>
                <h4><?php echo $row['name'] ?></h4>
                <p> $<?php echo $row['price'] ?></p>
                <button onclick="showAdded();cartCount()">Add to cart (<span id="cartCount">0</span>)</button>
            </div>
        <?php  
        }
        ?>
            <!-- <div>
                <div class="image-container"><img src="Images/Riolio Men Dressing Shoes Formal for Men's Casual Shoe Leather Social Wedding Designer Pointed Toe Black Office Winter Shoes Brand - Brown _ 41.jpg" alt="shirt"> </div>
                <h4>Shoes</h4>
                <p>$255.88</p>
                <button>Add to cart</button>
            </div>
            <div>
                <div class="image-container"><img src="Images/Men's Double LA Jeans.jpg" alt="shirt"></div>
                <h4>Jeans</h4>
                <p>$255.88</p>
                <button>Add to cart</button>
            </div>
            <div>
                <img src="Images/Manchester united home jersey 25_26.jpg" alt="shirt" width="100">
                <h4>Jersey</h4>
                <p>$255.88</p>
                <button>Add to cart</button>
            </div>
            <div>
                <img src="Images/BULLIANT Mens Belt, Elasticated Stretch Weave Belt 1 3_8_,Casual Braided Woven Golf Belts for Mens Womens Jeans.jpg" alt="shirt" width="100">
                <h4>Belt</h4>
                <p>$255.88</p>
                <button>Add to cart</button>
            </div>
            <div>
                <img src="Images/Lower East Boxershorts American 6er Pack _ 10er Pack, Homme.jpg" alt="shirt" width="100">
                <h4>Draws</h4>
                <p>$255.88</p>
                <button>Add to cart</button>
            </div>
        </div>
        <h3>Lady's Collection</h3>
        <div class="ladies">
            <div>
                <img src="Images/Opgeslagen en ingewisselde shirt-backprint - Opgeslagen en ingewisselde shirt-backprint.jpg" alt="shirt" width="100">
                <h4>Shirt</h4>
                <p>$255.88</p>
                <button>Add to cart</button>
            </div>
            <div>
                <img src="Images/Loft Buckle Slide Sandals Size 10 Denim Blue Melange Women's.jpg" alt="shirt" width="100">
                <h4>Shoes</h4>
                <p>$255.88</p>
                <button>Add to cart</button>
            </div>
            <div>
                <img src="Images/flared plants.jpg" alt="shirt" width="100">
                <h4>Jeans</h4>
                <p>$255.88</p>
                <button>Add to cart</button>
            </div>
            <div>
                <img src="Images/Real Madrid Home Jersey 25_26.jpg" alt="shirt" width="100"/>
                <h4>Jersey</h4>
                <p>$255.88</p>
                <button>Add to cart</button>
            </div>
            <div>
                <img src="Images/sundress.jpg" alt="shirt" width="100">
                <h4>Dress</h4>
                <p>$255.88</p>
                <button>Add to cart</button>
            </div>
            <div>
                <img src="Images/Ensemble de 5 Sous-vêtements Sans Couture Femme.jpg" alt="shirt" width="100">
                <h4>Nickers</h4>
                <p>$255.88</p>
                <button>Add to cart</button>
            </div>
        </div>
        <h3>Children's Collection</h3>
        <div class="children">
            <div>
                <img src="Images4Kids/✨ تشكيلة BOSS المميزة ✨ متوفرة من مقاس 12-18 شهر….jpg" alt="shirt" width="100">
                <h4>Track Suit</h4>
                <p>$255.88</p>
                <button>Add to cart</button>
            </div>
            <div>
                <img src="Images4Kids/Shop Unisex Two-piece set ✨  Available in age….jpg" alt="shirt" width="100">
                <h4>Two Piece</h4>
                <p>$255.88</p>
                <button>Add to cart</button>
            </div>
            <div>
                <img src="Images4Kids/2-9T Flower Girls Floral Dresses Toddler Pageant Striped Dress.jpg" alt="shirt" width="100">
                <h4>Floral Dress</h4>
                <p>$255.88</p>
                <button>Add to cart</button>
            </div>
            <div>
                <img src="Images4Kids/Huniam Kids Boys Basketball Kit - 2-Piece Tank Top and Shorts Set, Sleeveless Training Jersey, Gifts for 3-14 Years Old Child.jpg" alt="shirt" width="100"/>
                <h4>Sports Fit</h4>
                <p>$255.88</p>
                <button>Add to cart</button>
            </div>
            <div>
                <img src="Images4Kids/Garotos Camiseta & Shorts Gráfica Letras Dois tons.jpg" alt="shirt" width="100">
                <h4>Casual Wear</h4>
                <p>$255.88</p>
                <button>Add to cart</button>
            </div>
            <div>
                <img src="Images4Kids/Tarpop 3 Pcs Kids African Clothes Dashiki Skirt Toddler Girl Bohemian Head Wrap Dangle Earring African Outfits Costume.jpg" alt="shirt" width="100">
                <h4>Ankara</h4>
                <p>$255.88</p>
                <button>Add to cart</button>
            </div> -->
        </div>
    </section>
    <section class="contact-section" id="contact">
        <h2>Contact Us</h2>
        <form  onsubmit='validateForm()'>
            <label for="name">Full Name:</label>
            <input type="text" placeholder="your full name"> <br> 
            <label for="email">Email:</label>
            <input type="email" placeholder="someone@gmail.com"> <br>
            <label for="gender">Gender: </label>
            <input type="radio" name="gender" id="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female">
            <label for="female">Female</label> <br>
            <label for="phone">Phone: </label>
            <input type="tel" placeholder="+256-000-000-000"> <br> 
            <label for="message">Message: </label>
            <textarea name="" id="" placeholder="your message here"></textarea>
            <button type="submit">Submit</button>
        </form>
    </section>


    <section class="about-section" id="about">
        <h2>About Us</h2>
        <div class="about-us">
            <div>
            <p>
                We are ShopUS — a modern clothing brand dedicated to bringing you stylish, affordable, and high-quality fashion for every occasion. 
                Our collections are carefully curated to reflect current trends while ensuring comfort and confidence in every piece you wear
                At ShopUS, we believe fashion is more than just clothing — it’s a way to express who you are. That’s why we focus on delivering designs that are versatile, unique, and made to fit your lifestyle
            </p>
        </div>
        <div>
           <h3> Our Address</h3>
            <p>
                Head Office <br> ShopUS Ltd Plot 12, <br> Kampala Road Kampala, Uganda <br> Phone: +256 780512605 <br> Email: shopus@gmail.com
            </p>
        </div>
        </div>
        
    </section>


    <section class="cart-section" id="cart">
        <h2>Your Cart</h2>
        <table>
            <tr>
                <th>Item</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>
            <tr >
                <td rowspan="1">Shirt</td>
                <td>$200.44</td>
                <td>5</td>
            </tr>
            <tr>
                <td>Jeans</td>
                <td>$10.44</td>
                <td>2</td>
            </tr>
            <tr>
                <td>Cap</td>
                <td>$100.14</td>
                <td>1</td>
            </tr>
        </table>
    <h2>Total: $4343</h2>
    <button>Checkout</button>
    </section>

    <footer class="footer" >
        <section class="footer-section">
    <div class="footer-box">
        <div class="footer-image">
         <img src="Images/Shopping app icon.jpg" alt="" width="50px" height="50px">
       <span>ShopUs</span>
     </div>
    <div class="social">
           <a href="#"><i class="ri-facebook-fill   icon"></i></a>
            <a href="#"><i class="ri-twitter-fill icon"></i></a>
            <a href="#"><i class="ri-instagram-fill  icon"></i></a>
            <a href="#"><i class="ri-tiktok-fill icon"></i></a>
    </div>
</div>
<div class="footer-box">
        <h3>Support</h3>
        <li><a href="#product">Products</a></li>
        <li><a href="https://thewhitecompany.com" target="_blank">Official Partner</a></li>
        <li><a href="#">Return Policy</a></li>
        <li><a href="#">Terms Of Use</a></li>
        <li><a href="#">FAQ</a></li>
     </div>
     <div class="footer-box">
        <h3>Branches</h3>
        <li><a href="#">Kampala</a></li>
        <li><a href="#">Mbale</a></li>
        <li><a href="#">Kotido</a></li>
        <li><a href="#">Kasese</a></li>
        <li><a href="#">Masindi</a></li>
     </div>
     <div class="footer-box">
        <h3>Payment Method</h3>
        <div class="payment">
        <i class="ri-paypal-fill"></i>
        <i class="ri-mastercard-fill"></i>
        <i class="ri-visa-line"></i>
        <img src="Images/mtn.jpg" alt="">
        <img src="Images/airtel.jpg" alt="">
        </div>
     </div>
 </section>
 <p>&copy; All rights reserved -ShopUs</p>
 </footer>
 <script>
    //JavaScript
   function validateForm(){
    let email = document.querySelector("input[type = 'email']").value;
    if(!email.includes('@gmail.com')){
        alert("Enter a valid email! (@gmail.com symbol missing)");
        return false;
    }
    }

    function showAdded(){
        let added = document.createElement("div");
        added.innerText = "Added to cart";
        added.style.position = "fixed";
        added.style.bottom = "20px"
        added.style.right = "20px"
        added.style.backgroundColor = "brown";
        added.style.color = "white"
        added.style.padding = "10px"
        document.body.appendChild(added);
        setTimeout(() => added.remove(),2000);
    }

    

    /* JS Rotating Image  */
    const imgSlider = document.querySelectorAll(".image-container");
    imgSlider.forEach(img => {
        img.addEventListener("mouseover",() =>{
            img.style.transform = "scale(1.1)"
            /* img.style.transform = "rotate(10deg)" */
        })
        img.addEventListener("mouseout",() =>{
            img.style.transform = "scale(1)"
        })
    })
 </script>
</body>
</html>