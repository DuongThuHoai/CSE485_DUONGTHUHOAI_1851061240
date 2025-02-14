<?php include('config.php') ?>
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
    <link rel="stylesheet" href="css/resumee.css">
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
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-12">
        <h2>Trình độ học vấn</h2>
        <?php
        $sql_read= "SELECT * FROM educationn where id = '1'";
        $result = mysqli_query($conn,$sql_read);
        $rows= mysqli_fetch_array($result);
        
      ?>
        <blockquote style="margin-left:20%; padding-bottom:20px;">
          <p><?php echo $rows['addr'];?>-<?php echo $rows['name'];?> <br> <?php echo $rows['sting'];?>
          </p>
          <footer><?php echo $rows['date'];?></footer>
        </blockquote>
        <div class="col-md-12">
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
      </div>
        </div>
      </div>  
    </div>
    </section>
    <?php
        $sql_read= "SELECT * FROM resume where id = '1'";
        $result = mysqli_query($conn,$sql_read);
        $rows= mysqli_fetch_array($result);
        
      ?>
  
    <section class="experiences">
        <div class="experience">
          <div class="level">
          <h1>Kĩ Năng</h1>
          </div>
          <div class="bar"> </div>
          <div class="points"><?php echo $rows['percent'];?>%</div>
          <div class="level"><?php echo $rows['name'];?></div>
        </div>
        <?php
        $sql_read= "SELECT * FROM resume where id = '2'";
        $result = mysqli_query($conn,$sql_read);
        $rows= mysqli_fetch_array($result);
        
      ?>
        <div class="experience">
          <div class="bar_1"></div>
          <div class="points"><?php echo $rows['percent'];?>%</div>
          <div class="level"><?php echo $rows['name'];?></div>
        </div>
        <?php
        $sql_read= "SELECT * FROM resume where id = '3'";
        $result = mysqli_query($conn,$sql_read);
        $rows= mysqli_fetch_array($result);
        
      ?>
        <div class="experience">
          <div class="bar_2"></div>
          <div class="points"><?php echo $rows['percent'];?>%</div>
          <div class="level"><?php echo $rows['name'];?></div>
        </div>
        <?php
        $sql_read= "SELECT * FROM resume where id = '4'";
        $result = mysqli_query($conn,$sql_read);
        $rows= mysqli_fetch_array($result);
        
      ?>
        <div class="experience">
          <div class="bar_3"></div>
          <div class="points"><?php echo $rows['percent'];?>%</div>
          <div class="level"><?php echo $rows['name'];?></div>
        </div>
        <?php
        $sql_read= "SELECT * FROM resume where id = '5'";
        $result = mysqli_query($conn,$sql_read);
        $rows= mysqli_fetch_array($result);
        
      ?>
        <div class="experience">
          <div class="bar_3"></div>
          <div class="points"><?php echo $rows['percent'];?>%</div>
          <div class="level"><?php echo $rows['name'];?></div>
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
