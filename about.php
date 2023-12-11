<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="./uploaded_img/aboutus.png" alt="">
      </div>

      <div class="content">
         <h3>Tại sao chọn chúng tôi?</h3>
         <p>Chào mừng đến với GUNVES -  Thiên đường của những chiến binh Gundam!

GUNVES là địa điểm lý tưởng cho những đam mê Gundam và đam mê mô hình, nơi bạn có thể khám phá và sở hữu những mô hình Gundam chất lượng nhất. Với bộ sưu tập đa dạng và phong phú, chúng tôi tự hào cung cấp những sản phẩm chính hãng, đảm bảo mang lại trải nghiệm tuyệt vời nhất cho cộng đồng người hâm mộ.

Tại GUNVES, chúng tôi cam kết đem đến cho bạn không chỉ là những sản phẩm chất lượng cao mà còn là trải nghiệm mua sắm trực tuyến thuận lợi và an toàn. Chúng tôi liên tục cập nhật bộ sưu tập để đáp ứng sở thích và mong muốn của cộng đồng người hâm mộ Gundam đang ngày càng phát triển.

Hãy đặt chân đến GUNVES để khám phá thế giới rộng lớn của Gundam, tận hưởng niềm vui sưu tập và xây dựng những chiến binh huyền thoại trong tay bạn. Cùng GUNVES, chúng tôi hướng đến việc làm cho mỗi người hâm mộ trở thành những nhà sưu tập chính hiệu và đắm chìm trong vũ trụ đầy phép màu của Gundam.</p>
         <a href="contact.php" class="btn">Liên hệ chúng tôi</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">Những đánh giá của khách hàng</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="./uploaded_img/chiquyen.jpg" alt="">
         <p>GUNVES không chỉ cung cấp những mô hình Gundam chất lượng cao mà còn mang lại trải nghiệm mua sắm vô cùng thuận lợi. Tôi rất ấn tượng với sự đa dạng và phong phú của bộ sưu tập. Giao hàng nhanh chóng và sản phẩm đến tay tôi với tình trạng hoàn hảo. Tôi chắc chắn sẽ quay lại GUNVES để mua sắm thêm.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Chí Quyền</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="./uploaded_img/phattran.jpg" alt="">
         <p>GUNVES thực sự là nơi tốt nhất để mua các mô hình Gundam. Sự chăm sóc chi tiết và chất lượng sản phẩm vô cùng ấn tượng. Mọi chi tiết nhỏ đều được tái tạo một cách chân thực, làm cho bức tranh của Gundam càng sống động. Tôi rất hài lòng với sự chất lượng và chắc chắn sẽ giới thiệu GUNVES cho bạn bè.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Phát Trần</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="./uploaded_img/hoanglong.jpg" alt="">
         <p>GUNVES không chỉ là một cửa hàng bán mô hình Gundam mà còn là ngôi nhà của những người hâm mộ. Dịch vụ khách hàng tại đây thực sự tận tâm và nhiệt huyết. Họ luôn sẵn lòng giải đáp mọi thắc mắc của tôi và đảm bảo rằng tôi có được trải nghiệm mua sắm tốt nhất. Sự chuyên nghiệp và thân thiện của đội ngũ làm cho GUNVES trở thành nơi tuyệt vời để mua sắm.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Hoàng Long</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="./uploaded_img/vannhan.jpg" alt="">
         <p>GUNVES thực sự biết cách chiều lòng khách hàng với các ưu đãi và khuyến mãi hấp dẫn. Tôi đã có cơ hội mua những mô hình Gundam ưa thích với giá ưu đãi đặc biệt, điều này làm cho trải nghiệm mua sắm của tôi trở nên thêm phần phấn khích. Không chỉ có sản phẩm chất lượng, mà còn có giá trị tốt - điều mà tôi rất đánh giá.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Văn Nhân</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="./uploaded_img/thanhphi.jpg" alt="">
         <p>GUNVES không chỉ ấn tượng với sản phẩm mà còn với dịch vụ giao hàng nhanh chóng và an toàn. Tôi nhận được đơn hàng của mình một cách rất nhanh chóng và sản phẩm được đóng gói cẩn thận, đảm bảo an toàn cho hành trình đến tay khách hàng. Sự chuyên nghiệp trong việc xử lý và vận chuyển là một điểm mạnh lớn của GUNVES.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Thanh Phi</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="./uploaded_img/huutoan.jpg" alt="">
         <p>GUNVES không chỉ là nơi mua sắm, mà còn là một cộng đồng nơi những người hâm mộ Gundam có thể kết nối và chia sẻ đam mê. Tôi đã tham gia vào các diễn đàn và sự tương tác với cộng đồng rất tích cực. GUNVES đã tạo ra không gian tuyệt vời để gặp gỡ những người có cùng sở thích và chia sẻ niềm đam mê với Gundam.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Hữu Toàn</h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>