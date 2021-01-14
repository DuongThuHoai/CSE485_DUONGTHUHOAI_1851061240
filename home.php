<!doctype html>
<html lang="en">
  <head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link href="styles/ihover.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="ccs/fuction/normalize.css">
    <link rel="stylesheet" href="css/function/ionicons.min.css">
    <link rel="stylesheet" href="css/function/ionicons.css">
    <link rel="stylesheet" type="text/css" href="css/function/1.3 grid.css.css">
    <link rel="stylesheet" href="fonts"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home..css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap" rel="stylesheet">
  </head>
  <body>
      <header>
        <?php include('header.php'); ?>
      </header>
      <div class="container">
        <div class="row">
          <div class="col-md-6 ">
            <img alt="photo" src="css/image/flow.jpeg" class="rounded-circle" />
          </div>
          <div class="col-md-6 ">
            <h1 class="hi">Xin Chào!<br> Tôi là Dương Thu Hoài <br>&hearts;Daisy Thu&hearts;</h1>
            <p class="long-copy">
              Cám ơn vì đã ghé thăm CV của tôi :) <br> Hãy khám phá trang web để tìm hiểu thêm về tôi,
  nền tảng của tôi và những gì tôi phải cung cấp. Nếu bạn có thắc mắc hoặc muốn thảo luận về cơ hội làm việc cùng nhau, vui lòng liên hệ.
            </p>
          </div>
        </div>
      </div>
      <div class="slider-container">
        <figure id="carousel--3d">
          <input type="radio" name="carousel-3d" id="carousel-3d-controller-1" />
          <input type="radio" name="carousel-3d" id="carousel-3d-controller-2" />
          <input type="radio" name="carousel-3d" id="carousel-3d-controller-3" />
          <label for="carousel-3d-controller-1" class="carousel-3d-item">
						<div class="slide-img">
							<img src="css/image/code.jpeg" alt="" class="rounded-circle"/>
						</div>
					</label>
					<label for="carousel-3d-controller-2" class="carousel-3d-item">
						<div class="slide-img">
							<img src="css/image/html.jpeg" alt="" class="rounded-circle"/>
						</div>
					</label>
					<label for="carousel-3d-controller-3" class="carousel-3d-item">
						<div class="slide-img">
							<img src="css/image/web.jpeg" alt="" class="rounded-circle"/>
						</div>
					</label>
        </figure>
      </div>
      <?php include('bg.php'); ?>
      <footer>
        <?php include('footer.php'); ?>
      </footer>
     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/carousel.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
