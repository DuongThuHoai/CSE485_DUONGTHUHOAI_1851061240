<!doctype html>
<html lang="en">
  <head>
    <title>Contact</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap" rel="stylesheet">
  </head>
  <body style="background-color: #cff3d588;">
  <header>
        <?php include('header.php'); ?>
    </header>
    <div class="container">
  <div id="block-webform-client-block-22" class="block block-webform form-contact animation-contact contextual-links-region">
    <h2 class="text-center">Contact me</h2>
    <div class="content">
      <form class="webform-client-form-webform-client-form-22" action="process-contact.php" method="post" id="webform-client-form-22" accept-charset="UTF-8">
        <div class="form-mail-wrap">
          <div id="mail-svg-bottom">
            <svg version="1.1" id="svg-full-mail" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 660 400" style="enable-background:new 0 0 660 400;" xml:space="preserve">
              <polygon id="top" class="st-full" points="330,199 1, 1 660,1 " style="visibility:hidden" />
              <polygon id="left" class="st-full" points="1,0 331,200 1,400 " />
              <polygon id="right" class="st-full" points="659,0 329,200 659,400 " />
              <polygon id="bottom" class="st-full" points="329,199 -1,399 659,399 " />
            </svg>
          </div>
          <div class="mail-top">
            <div class="mail-top-out">
              <svg version="1.1" id="svg-mail-top" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 662 253" style="enable-background:new 0 0 662 253;" xml:space="preserve">
                <style type="text/css">
                  .st0 {
                    fill: #8A9DC7;
                  }

                  .st1 {
                    fill: none;
                    stroke: #8797B9;
                    stroke-width: 2;
                    stroke-miterlimit: 10;
                  }
                </style>
                <path class="st0" d="M642.6,510.7" />
                <polyline class="st1" points="662,253 331,1.5 0,253 " />
              </svg>
            </div>
          </div>
          <div class="form-mail-content">
            <div class="form-item webform-component webform-component-display webform-component--zagolovok">
              
            </div>
            <div class="form-contact-group form-item webform-component webform-component-textfield webform-component--name">
              <label class="element-invisible" for="edit-submitted-name">name </label>
              <input placeholder="Enter your name" class="form-control form-contact form-text" type="text" id="edit-submitted-name" name="name" value="" size="60" maxlength="50">
            </div>
            <div class="form-contact-group form-item webform-component webform-component-textfield webform-component--phone">
              <label class="element-invisible" for="edit-submitted-phone">phone <span class="form-required" title="phone"></span></label>
              <input required="required" placeholder="Enter your phone number " class="form-control form-contact form-text required" type="text" id="edit-submitted-phone" name="phone" value="" size="60" maxlength="25">
            </div>
            <div class="form-contact-group form-item webform-component webform-component-email webform-component--email">
              <label class="element-invisible" for="edit-submitted-email">E-mail </label>
              <input class="email form-control form-contact form-text form-email" placeholder="E-mail" type="email" id="edit-submitted-email" name="email" size="60">
            </div>
            <div class="form-contact-group form-item webform-component webform-component-textarea webform-component--messages">
              <label class="element-invisible" for="edit-submitted-messages">Message</label>
              <div class="form-textarea-wrapper resizable textarea-processed resizable-textarea">
                <textarea placeholder="Message" class="form-control form-contact form-textarea" type="text" id="edit-submitted-messages" name="message" cols="60" rows="3"></textarea>
                <div class="grippie"></div>
              </div>
            </div>
          </div>
          <div class="form-actions">
            <div class="form-actions-wrap">
              <div class="loader-wrap" style="opacity: 0;">
                <div class="loader-20"></div>
              </div>
              <input class="webform-submit button-primary btn btn-primary form-submit" type="submit" name="op" value="Send">
              <!--<div class="before"></div>-->
            </div>
          </div>
        </div>
      </form>
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
