<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <?php require('inc/links.php'); ?>
  <title><?php echo $settings_r['site_title'] ?> - TIỆN NGHI</title>
  <style>
    body {
      font-family: 'Roboto', sans-serif;
    }
    h1, h2, h3, h4, h5, h6, .title {
      font-family: 'Montserrat', sans-serif;
    }
    .pop:hover{
      border-top-color: var(--teal) !important;
      transform: scale(1.03);
      transition: all 0.3s;
    }
  </style>
</head>
<body class="bg-light">

  <?php require('inc/header.php'); ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center" style="font-family: 'Montserrat', sans-serif; font-weight: 700; text-align: center;">CÁC TIỆN NGHI</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3" style="font-family: 'Roboto', sans-serif; font-weight: 400;">
      Đến với chúng tôi, quý khách sẽ được trải nghiệm tất
        cả các tiện nghi của chúng tôi,<br> Bao gồm các tiện nghi như tivi, wifi, tủ lạnh, máy gặt,
        điều hoà...
    </p>
  </div>

  <div class="container">
    <div class="row">
      <?php 
        $res = selectAll('facilities');
        $path = FACILITIES_IMG_PATH;

        while($row = mysqli_fetch_assoc($res)){
          echo<<<data
            <div class="col-lg-4 col-md-6 mb-5 px-4">
              <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2">
                  <img src="$path$row[icon]" width="40px">
                  <h5 class="m-0 ms-3">$row[name]</h5>
                </div>
                <p style="font-family: 'Roboto', sans-serif; font-weight: 400;">$row[description]</p>
              </div>
            </div>
          data;
        }
      ?>
    </div>
  </div>


  <?php require('inc/footer.php'); ?>

</body>
</html>