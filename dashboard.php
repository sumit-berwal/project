<?php

include 'authentication/user_authentication.php';
include_once 'common_files/header.php';
?>



<div class="header">
        <div class="header-content">
        <h5>The Best Cleaning Service Ever!</h5>
        <h2>Professional Cleaner</h2>
        <h5>Our professional and experienced cleaning staff<br> does the job right the first time.</h5>
        <button class="headbtn">See Our Best Offer</button>
    </div>
    </div>
    <!-- header section end -->
<!-- second section start -->
<div class="contaner">
    <div class="images">
        <img src="images/second_image.jpg" alt="image" class="rectangel1">
        <img src="images/third_image.jpg" alt="image" class="rectangel2">
    </div>
        <div class="text">
            <div class="housetext">
            <h2>Our Dairy Your Milk<br> 
                Quality Is Our Motive</h2>
                <p>The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog.
                    The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog.
                    The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog.
                    The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog.
                    The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog.
                </p>
                <ul>
                    <li>Experienced Team</li>
                    <li>Keep The Some For Every Visit</li>
                    <li>One-Off,Weekly or fortnightly visits</li>
                    <li>Book, manage & pay online</li>
                </ul>
                <div class="btnnum">
                <button>Book a service</button>
                <a href=" "><p>239-57-324</p></a>
            </div>
        </div>
        
    </div>
</div>
<script>
    function setNewImage(){
        document.getElementById('img').src="images/carimg.png";
    }
    function setOldImage(){
        document.getElementById('img').src="images/oliver.png";
    }
    function setNewImage1(){
        document.getElementById('img').src="images/carpetimg.png";
    }
    function setOldImage1(){
        document.getElementById('img').src="images/oliver.png";
    }
    function setNewImage2(){
        document.getElementById('img').src="images/sofaimg.png";
    }
    function setOldImage2(){
        document.getElementById('img').src="images/oliver.png";
    }
    function setNewImage3(){
        document.getElementById('img').src="images/Rectangle 26.png";
    }
    function setOldImage3(){
        document.getElementById('img').src="images/oliver.png";
    }
    function setNewImage4(){
        document.getElementById('img').src="images/officeimg.png";
    }
    function setOldImage4(){
        document.getElementById('img').src="images/oliver.png";
    }
    function setNewImage5(){
        document.getElementById('img').src="images/kitchanimg.png";
    }
    function setOldImage5(){
        document.getElementById('img').src="images/oliver.png";
    }

</script>
 <!-- First secsion end -->
<!--Second section start-->
<div class="second">
<div class="haf">
<h3>WHY CHOOSE US</h3>
<h2>We Provide Professional 
    Services</h2>
    <div class="services">
    <div class="car one"><img id="imagess" onmouseover="setNewImage()" onmouseout="setOldImage()" src="images/car-service.png" alt="car-icon"><p>Car Cleaning</p></div>
    <div class="carpet one"><img onmouseover="setNewImage1()" onmouseout="setOldImage1()" src="images/carpet.png" alt="carpet-icon"><p>Carpet Cleaning</p></div>
    <div class="sofa one"><img onmouseover="setNewImage2()" onmouseout="setOldImage2()" src="images/furniture.png" alt="sofa-icon"><p>Sofa Cleaning</p></div>
</div>
    <div class="services2">
    <div class="house one"><img onmouseover="setNewImage3()" onmouseout="setOldImage3()" src="images/mop.png" alt="house-icon"><p>House Cleaning</p></div>
    <div class="office one"><img onmouseover="setNewImage4()" onmouseout="setOldImage4()" src="images/office-furniture.png" alt="office-icon"><p>Office Cleaning</p></div>
    <div class="kitchan one"><img onmouseover="setNewImage5()" onmouseout="setOldImage5()" src="images/faucet.png" alt="kitchan-icon"><p>Kitchan Cleaning</p></div>
</div>
</div>

<div class="secondhaf">
    <img id="img" src="images/oliver.png" alt="image">
</div>
</div>
<div class="thirdsec">
    <h2>About Our Company</h2>
    <h3>Let's Talk About Clean</h3>
</div>




<?php
include_once 'common_files/footer.php';
?>