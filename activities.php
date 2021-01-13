<!doctype html>
<html lang="en">
  <head>
    <title>Activities</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/activities..css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap" rel="stylesheet">
  </head>
  <body style="background-color: #cff3d588;">
  <header>
        <?php include('header.php'); ?>
    </header>
    <section class="content">
       
        <div class="container-fluid">
        
          <div class="row"><h2>Hoạt động</h2>
            <div class="col-md-12">
            <div class="accordion">
          <div class="contentt">
            <div class="label">Tham gia CLB</div>
            <div class="Content">
              <p> CLB Tiếng anh trường Đại học Thủy Lợi: Tổ chức cuộc thi tiếng anh không
                      chuyên trong trường, tham gia làm video dự thi Olympic tiếng anh toàn
                      quốc, hỗ trợ thực hiện kì thi olympic TA không chuyên cho sinh viên TLU, tổ chức lớp ôn thi A2...</p>
            </div>
          </div>
          <div class="contentt">
            <div class="label">Tham gia tình nguyện</div>
            <div class="Content">
              <p> Tham gia chương trình "Trung thu cho em" do đoàn trường ĐH Thủy Lợi tổ
                  chức để quyên góp cho những trẻ em bị bệnh hiểm nghèo.</p>
            </div>
          </div>
        </div>
            </div>
          </div>
        </div>
    </section>
    <footer>
        <?php include('footer.php'); ?>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script >
      const accordion =document.getElementsByClassName('contentt');
      for(i=0; i<accordion.length; i++){
        accordion[i].addEventListener('click', function(){
        this.classList.toggle('active')
      })
    }
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
