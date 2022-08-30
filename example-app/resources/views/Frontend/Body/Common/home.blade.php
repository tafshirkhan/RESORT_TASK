<section class="home" id="home">
    <div class="head_container">
        <div class="box">
            <div class="text">
                <h1>WELCOME TO OUR PAGE</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. </p>
                <button class="btn_more">MORE DETAILS</button>
            </div>
        </div>
        <div class="image">
            <img src="Image/home1.jpg" class="slide">
        </div>
        <div class="image_item">
            <img src="image/home2.jpg" alt="" class="slide active" onclick="img('image/home2.jpg')">
            <img src="image/home3.jpg" alt="" class="slide" onclick="img('image/home3.jpg')">
            <img src="image/home4.jpg" alt="" class="slide" onclick="img('image/home4.jpg')">
            <img src="image/home5.jpg" alt="" class="slide" onclick="img('image/home5.jpg')">
        </div>
    </div>
</section>

<script>
    function img(anything) {
        document.querySelector('.slide').src = anything;
    }

    function change(change) {
        const line = document.querySelector('.image');
        line.style.background = change;
    }
</script>
