<!doctype html>
<html lang="en">
  <head>
    <title>About me</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link href="styles/ihover.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/about.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kristi&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
        <?php include('header.php'); ?>
    </header>
    <svg version="1.1" id="Ebene_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
      width="100%" height="200px" viewBox="0 0 600 200">
	  <defs>
		  <filter id="filter">
		    <feFlood flood-color="black" result="black" />
		    <feFlood flood-color="red" result="flood1" />
		    <feFlood flood-color="limegreen" result="flood2" />
        <feOffset in="SourceGraphic" dx="3" dy="0" result="off1a"/>
        <feOffset in="SourceGraphic" dx="2" dy="0" result="off1b"/>
        <feOffset in="SourceGraphic" dx="-3" dy="0" result="off2a"/>
        <feOffset in="SourceGraphic" dx="-2" dy="0" result="off2b"/>
		    <feComposite in="flood1" in2="off1a" operator="in"  result="comp1" />
		    <feComposite in="flood2" in2="off2a" operator="in" result="comp2" />
 		  	<feMerge x="0" width="100%" result="merge1">
				<feMergeNode in = "pink" />
				<feMergeNode in = "comp1" />
				<feMergeNode in = "off1b" />
				<animate 
					attributeName="y" 
		    		id = "y"
		    		dur ="4s"
		    		
		    		values = '104px; 104px; 30px; 105px; 30px; 2px; 2px; 50px; 40px; 105px; 105px; 20px; 6ßpx; 40px; 104px; 40px; 70px; 10px; 30px; 104px; 102px'

		    		keyTimes = '0; 0.362; 0.368; 0.421; 0.440; 0.477; 0.518; 0.564; 0.593; 0.613; 0.644; 0.693; 0.721; 0.736; 0.772; 0.818; 0.844; 0.894; 0.925; 0.939; 1'

		    		repeatCount = "indefinite" />
 
				<animate attributeName="height" 
		    		id = "h" 
		    		dur ="4s"
		    		
		    		values = '10px; 0px; 10px; 30px; 50px; 0px; 10px; 0px; 0px; 0px; 10px; 50px; 40px; 0px; 0px; 0px; 40px; 30px; 10px; 0px; 50px'

		    		keyTimes = '0; 0.362; 0.368; 0.421; 0.440; 0.477; 0.518; 0.564; 0.593; 0.613; 0.644; 0.693; 0.721; 0.736; 0.772; 0.818; 0.844; 0.894; 0.925; 0.939; 1'

		    		repeatCount = "indefinite" />
		    </feMerge>
 			  <feMerge x="0" width="100%" y="60px" height="65px" result="merge2">
				<feMergeNode in = "#cff3d588" />
				<feMergeNode in = "comp2" />
				<feMergeNode in = "off2b" />
				<animate attributeName="y" 
		    		id = "y"
		    		dur ="4s"
		    		values = '103px; 104px; 69px; 53px; 42px; 104px; 78px; 89px; 96px; 100px; 67px; 50px; 96px; 66px; 88px; 42px; 13px; 100px; 100px; 104px;' 

		    		keyTimes = '0; 0.055; 0.100; 0.125; 0.159; 0.182; 0.202; 0.236; 0.268; 0.326; 0.357; 0.400; 0.408; 0.461; 0.493; 0.513; 0.548; 0.577; 0.613; 1'

 		    		repeatCount = "indefinite" />
				<animate attributeName="height" 
		    		id = "h"
		    		dur = "4s"
					values = '0px; 0px; 0px; 16px; 16px; 12px; 12px; 0px; 0px; 5px; 10px; 22px; 33px; 11px; 0px; 0px; 10px'
		    		keyTimes = '0; 0.055; 0.100; 0.125; 0.159; 0.182; 0.202; 0.236; 0.268; 0.326; 0.357; 0.400; 0.408; 0.461; 0.493; 0.513;  1'
		    		repeatCount = "indefinite" />
		    </feMerge>
        <feMerge>
          <feMergeNode in="SourceGraphic" />	
          <feMergeNode in="merge1" /> 
        <feMergeNode in="merge2" />
		    </feMerge>
	    </filter>
	  </defs>
    <g>
      <text x="0" y="100">Xin Chào</text>
    </g>
    </svg>
    <div class="container-fluid">
	    <div class="row">
        <div class="col-md-6">
          <div class="tdimension">
            <ul>
              <h1>
                Thông tin cá nhân
              </h1>
              <li class="list-item">
              <i class="far fa-calendar-alt"></i>
               30/08/2000
              </li>
              <li class="list-item">
              <i class="fas fa-venus"></i>
               Nữ
              </li>
              <li class="list-item">
              <i class="fas fa-phone"></i>
               0981972418
              </li>
              <li class="list-item">
              <i class="fas fa-envelope-square"></i>
               duongthuhoai30082000@gmail.com
              </li>
              <li class="list-item">
              <i class="fas fa-map-marked-alt"></i>
               Phượng Cách - Quốc Oai - Hà Nội
              </li>
              <img src="css/image/132043378_251336879706932_7603093169022024834_n.jpg" alt="img" class="imgg">
              <li class="list-itemm">
              <i class="fas fa-signature"></i>
                hoai &mdash; daisy
              </li>
            </ul>
            
          </div>
        </div>
        <div class="col-md-6">
          <div class = "tdimension">
            <ul>
              <h1>Một số thông tin thêm</h1>
              <li class="list-item">
              &hearts; Là một người điềm tĩnh, thích ứng nhanh với môi trường mới, không ngại khó khăn, hứng thú trong 
việc tìm ra hướng giải quyết cho vấn đề.
              </li>
              <li class="list-item">
              &hearts;Có trách nhiệm với công việc
              </li>
              <li class="list-item">
              &hearts; Hoạt bát, nhiệt tình, thật thà và cẩn thận.
              </li>
              <li class="list-item">
              &hearts;Thích tìm tòi, chinh phục những tri thức, công việc mà mình chưa biết đến.
              </li>
              <li class="list-item">
              &hearts;Chưa có kinh nghiệm và luôn muốn tích lũy thật nhiều kinh nghiệm làm việc
cũng như sự hiểu biết về công việc để trở thành một nhân viên chuyên
nghiệp, đóng góp một phần cho sự phát triển của công ty.
              </li>
              <h1>Sở thích</h1>
              <li class="list-item">
              &hearts;Xem phim, nghe nhạc, du lịch, ngủ, đọc sách, nấu ăn, âm nhạc...
              </li>
            </ul>
		</div>
	</div>
</div>
</div>
    <footer>
        <?php include('footer.php'); ?>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
