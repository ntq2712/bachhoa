<hr>
    <section class="app-contenr">
        <p> Tải ứng dụng Bách Hóa Ngọc Diệp</p>
        <div class="app-google">
            <img src="../uploads/app-store.png">
            <img src="../uploads/gg-play.png">
        </div>
        <p> Nhập bản tin của Bách Hóa Ngọc Diệp</p>
        <input type="text" placeholder="Nhập email của bạn....">
    </section>
   
    <div class="footer-top">
        <li> <a href=""><img src="../uploads/thongbao.png"></a></li>
        <li> <a href="">Liên hệ</a></li>
        <li> <a href="">Tuyển dụng</a></li>
        <li> <a href="">Giới thiệu</a></li>
        <li>
            <a href=""><img src="../uploads/fb.png"></a>
            <a href=""><img src="../uploads/yt.jpg"></a>
            <a href=""><img src="../uploads/tw.png"></a>
        </li>
    </div>
    <div class="footer-center">
        <p>
           Cửa hàng Bách Hóa Ngọc Diệp với số đăng ký kinh doanh: 0105777651 <br>
            Địa chỉ đăng ký: Đường 30/4, Thị Xã Cây Lại, Tỉnh Tiền Giang<br>
            Đặt hàng online : <b>0397516328</b> .
        </p>
    </div>
    <div class="footer-bottom">
        ©NgocDiep All rights reserved
    </div>

</body>
<script>
    const header = document.querySelector("header")
    window.addEventListener("scroll", function(){
        x = window.pageYOffset
        if (x > 0){
            header.classList.add("sticky")
        }else{
            header.classList.remove("sticky")
        }
    })
    const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
    const imgContenr = document.querySelector(".aspect-ratio-169")
    const dotItem = document.querySelectorAll(".dot")
    let imgNuber = imgPosition.length
    let index = 0
    imgPosition.forEach(function(image, index){
         image.style.left = index*100 + "%"
         dotItem[index].addEventListener("click", function (){
            slide (index)
         })
    })
    function imgSlide (){
        index++
        if ( index >= imgNuber ) {index=0}
        slide (index)
    }
    function slide (index){
        imgContenr.style.left = '-' + index*100 + '%'
        const dotActive = document.querySelector(".active")
        dotActive.classList.remove('active')
        dotItem[index].classList.add('active')
    }
 setInterval(imgSlide, 5000)

    const itemliderbar = document.querySelectorAll(".menu-right-li")
    itemliderbar.forEach(function(menu, index){
    menu.addEventListener("click", function(){
        menu.classList.toggle("block")
    }) 
    })
const itemliderbar = document.querySelectorAll(".cartegory-left-li")
itemliderbar.forEach(function(menu, index){
menu.addEventListener("click", function(){
    menu.classList.toggle("block")
}) 
})
</script>
</html>