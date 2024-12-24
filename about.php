<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link  rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <?php require('inc/links.php'); ?>
  <title><?php echo $settings_r['site_title'] ?> - GIỚI THIỆU</title>
  <style>
    body {
      font-family: 'Roboto', sans-serif;
    }
    h1, h2, h3, h4, h5, h6, .title {
      font-family: 'Montserrat', sans-serif;
    }
    .box{
      border-top-color: var(--teal) !important;
    }
    .mx-3 {
      text-align: center;
      /* width: 1000px;
      margin-left: 800px; */
    }
    .dmm  {
    display: flex;
    justify-content: center;
align-items: center;
; /* Chiều cao toàn màn hình */
    width: 1000px;
    margin-left: 500px;
    margin-top: 20px;
  }
  .w-100{
    height: 500px;
  }
  </style>
</head>
<body class="bg-light">

  <?php require('inc/header.php'); ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center" style="font-family: 'Montserrat', sans-serif; font-weight: 700; text-align: center;">GIỚI THIỆU</h2>
    <div class="h-line bg-dark"></div>
    <div class="dmm">
      <p class="text-center mx-3" style="font-family: 'Roboto', sans-serif; font-weight: 400;">
  
      4AM Hotel không chỉ là một khách sạn, mà còn là hiện thân của cuộc
            sống xa hoa ngay giữa lòng thành phố. Với nhiều phòng và suite được
            thiết kế tỉ mỉ, cơ sở xa hoa này đặt ra một chuẩn mực mới về sự tinh
            tế và thoải mái. Mỗi phòng và suite đều mang đến một chốn ẩn náu sang
            trọng và yên tĩnh, với đồ nội thất sang trọng, tiện nghi hiện đại và
            tầm nhìn ngoạn mục ra đường chân trời thành phố.
      </p>
    </div>
  </div>

  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
        <h3 class="mb-3" style="font-family: 'Montserrat', sans-serif;">4AM Luxury Hotel</h3>
        <p style="font-family: 'Roboto', sans-serif; font-weight: 400;">
        Nhưng sự sang trọng còn vượt ra ngoài ranh giới của các phòng nghỉ.
          4AM Hotel tự hào có một loạt các tiện nghi và tiện ích đẳng cấp thế
          giới được thiết kế để đáp ứng mọi nhu cầu và mong muốn. Quầy bar trên
          tầng thượng đầy phong cách của khách sạn, tự hào có 120 chỗ ngồi, nơi
          du khách có thể thưởng thức những ly cocktail tươi mát và ngắm nhìn
          quang cảnh tuyệt đẹp của thành phố bên dưới.
        </p>
        <p style="font-family: 'Roboto', sans-serif; font-weight: 400;">Đối với những ai tìm kiếm các lựa chọn ăn uống đặc biệt, 4AM Hotel đáp
          ứng mọi nhu cầu. Với hai nhà hàng phục vụ nhiều món ăn hấp dẫn, du
          khách có thể thưởng thức ẩm thực Việt Nam và quốc tế hảo hạng trong
          một không gian sang trọng và hấp dẫn. Ngoài ra, khách sạn còn có phòng
          chờ rượu vang tinh tế, nơi du khách có thể thư giãn và thưởng thức
          nhiều loại rượu vang hảo hạng từ khắp nơi trên thế giới.<br />4AM
          Hotel định nghĩa lại cuộc sống xa hoa tại Sài Gòn với dịch vụ hoàn hảo
          và tiện nghi đẳng cấp thế giới, hứa hẹn mang đến trải nghiệm khó quên
          về sự thanh lịch và tinh tế.</p>
      </div>
      <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
        <img src="images\images\facade-night-2439_0611-200095-scaled.jpg" class="w-100" >
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/hotel.svg" width="70px">
          <h4 class="mt-3" style="font-family: 'Montserrat', sans-serif; font-weight: 500; text-align: center;">100+ PHÒNG</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/customers.svg" width="70px">
          <h4 class="mt-3" style="font-family: 'Montserrat', sans-serif; font-weight: 500; text-align: center;">200+ KHÁCH HÀNG</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/rating.svg" width="70px">
          <h4 class="mt-3" style="font-family: 'Montserrat', sans-serif; font-weight: 500; text-align: center;">150+ ĐÁNH GIÁ</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/staff.svg" width="70px">
          <h4 class="mt-3" style="font-family: 'Montserrat', sans-serif; font-weight: 500; text-align: center;">200+ NHÂN VIÊN</h4>
        </div>
      </div>
    </div>
  </div>

  <h3 class="my-5 fw-bold h-font text-center" style="font-family: 'Montserrat', sans-serif; font-weight: 600; text-align: center;">ĐỘI NGŨ</h3>

  <div class="container px-4">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <?php 
          $about_r = selectAll('team_details');
          $path=ABOUT_IMG_PATH;
          while($row = mysqli_fetch_assoc($about_r)){
            echo<<<data
              <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                <img src="$path$row[picture]" class="w-100">
                <h5 class="mt-2">$row[name]</h5>
              </div>
            data;
          }
        
        ?>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>


  <?php require('inc/footer.php'); ?>

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 40,
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 3,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
  </script>


</body>
</html>