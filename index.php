<?php 
    require_once"phpmailer.php";
    require_once"class.sp.php";
    $mail = new PHPMAILER();
    $mail -> STMPDebug =3;
    $mail ->isSTMP();
    $mail ->Host ='smtp.gmail.com';
    $mail ->SMTPAuth =true;
    $mail ->Username ='duongthuhoai30082000@gmail.com';
    $mail ->Password = 'spkfzybrwluchfyr';
    $mail ->STMPSecure ='tls';
    $mail ->Port =587;
    $mail ->setForm('web2code2vn@gmail.com', 'web2code2vn');
    $mail ->addAddress('web2code2vn@gmail.com');
    $mail ->addReplyTo('web2code2vn@gmail.com','Information');
    // $mail -> addCC('dungkt@tlu.edu.vn');
    // $mail -> AddBCC('kieutuandung@wru.vn');
    $mail ->IsHTML(true);

    $mail ->Subject ='Dương Thu Hoài - 1851061240 - 60TH4';
    $mail ->Body = 'Hello';
    if($mail ->send())
    {
        echo 'Message has been sent';
    }
    else{
        echo'Message could not be sent';
    }
?>
js:
    <p>
        hiiiiiiiiiiiiiiiiiiiiiii! welcomeeeeeeeeeeee to my cv
    </p>
    <p>
        Long time no see u.
    </p>
    <input type="button" id ='btnJS' value='Click here'>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>
        // alert('helloo');dung de bao loi
        // console.log('hiiiii');
        // document.getElementByTagName('p')[0].textContent ="hello! glad to see u";
        // var phantuP = document.getElementsByTagName('p');
        // phantuP[0].textContent ='hellooooo';
        // phantuP[1].innerHTML ='<b>glad to see u</b>';
        //b1 xac dinh phan tu se tac dong
        var phantuP = document.getElementsByTagName('p');
        var nutnhan = document.getElementById('btnJS');
        //b2 bat su kien tac dong
        nutnhan.addEventListener('click',ham);
        //b3 viet noi dung ham xu ly
        function ham(){
            phantuP[0].textContent ='hellooooo';
            phantuP[1].innerHTML ='<b>glad to see u</b>';
        }
    </script>