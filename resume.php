<!doctype html>
<html lang="en">
  <head>
    <title>Resume</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/resume..css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kristi&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <header>
        <?php include('header.php'); ?>
    </header>
    <section class="content">
      <div class="Content">
        <h2>
          Trình độ học vấn
        </h2>
        <blockquote>
          <p>Trường Đại học Thủy Lợi - Chuyên ngành Công nghệ thông tin <br> Sinh viên năm 3
          </p>
          <footer>8/2018 - <cite>6/2023</cite></footer>
        </blockquote>
        <h2>Kinh nghiệm</h2>
        <div class="contentt">
          <div class="content__container">
            <p class="content__container__text">
              Đã ...
            </p>
            <ul class="content__container__list">
              <li class="content__container__list__item"> <i class="fas fa-heart-broken"></i>chưa có!</li>
            </ul>
          </div>
        </div>
        <h2 style ="margin-top : 180px;">
          Kĩ năng
        </h2>
        <div class="experience">
          <div class="bar"> </div>
          <div class="points">15/100</div>
          <div class="level">html</div>
        </div>
      </div>
      
    </section>
    <footer>
        <?php include('footer.php'); ?>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/text.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<!-- .experience
  .bar 
  .points 20/100
  .level html/css
.experience
  .bar_1
  .points_1 10/100
  .level php
.experience
  .bar_2
  .points_2 40/100
  .level_2 sql/mysql
.experience
  .bar_3
  .points_3 30/100
  .level_3 c#/c++
.experience
  .bar_4
  .points_4 30/100
  .level_4 English -->
<!-- 
  body {
  background-color: hsl(205°, 65%, 34%);
}

.experience {
  position: relative;
  margin: 4em auto;
  max-width: 500px;
  height: 2em;
  background: hsl(205, 65%, 14%);
  border-radius: 5px;
  box-shadow: 0 0.2em 0.5em rgba(0,0,0,0.5);
  color: white;
  font-family: sans-serif;
  font-weight: bold;
  text-shadow: 0 0.15em 0.15em rgba(0,0,0,0.8);
  .bar {
    margin-left: calc(3em - 10px);
    height: 100%;
    width:26%;
    background: linear-gradient(0deg, hsl(205, 100%, 50%), hsl(205, 100%, 68%));
    border-radius: 5px;
  }
  .points {
    position: absolute;
    top: 0;
    height: 100%;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2em;
  }
  .level {
    position: absolute;
    height: 2em;
    width: 4.4em;
    top: -0.5em;
    left: -0.5em;
    background: linear-gradient(45deg, hsl(205, 100%, 50%), hsl(205, 100%, 68%));
    box-shadow: 0 0.2em 0.5em rgba(0,0,0,0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.8em;
    border-radius: 8px;
  }
}
  .bar_1 {
    margin-left: calc(3em - 10px);
    height: 100%;
    width:20%;
    background: linear-gradient(0deg, hsl(205, 100%, 50%), hsl(205, 100%, 68%));
    border-radius: 5px;
  }
  .bar_2 {
    margin-left: calc(3em - 10px);
    height: 100%;
    width:40%;
    background: linear-gradient(0deg, hsl(205, 100%, 50%), hsl(205, 100%, 68%));
    border-radius: 5px;
  }
.level_2 {
    position: absolute;
    height: 2em;
    width: 6em;
    top: -0.5em;
    left: -0.5em;
    background: linear-gradient(45deg, hsl(205, 100%, 50%), hsl(205, 100%, 68%));
    box-shadow: 0 0.2em 0.5em rgba(0,0,0,0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.8em;
    border-radius: 8px;
  }
.level_3 {
    position: absolute;
    height: 2em;
    width: 4em;
    top: -0.5em;
    left: -0.5em;
    background: linear-gradient(45deg, hsl(205, 100%, 50%), hsl(205, 100%, 68%));
    box-shadow: 0 0.2em 0.5em rgba(0,0,0,0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.8em;
    border-radius: 8px;
  } -->