<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" href="/img/favicon.ico" />
    <title><?= $title; ?></title>



    <!--  Bootstrap css file  -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--  font awesome icons  -->
    <link rel="stylesheet" href="/vendor/homepage/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!--  Magnific Popup css file  -->
    <link rel="stylesheet" href="/vendor/homepage/vendor/Magnific-Popup/dist/magnific-popup.css" />

    <!--  Owl-carousel css file  -->
    <link rel="stylesheet" href="/vendor/homepage/vendor/owl-carousel/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="/vendor/homepage/vendor/owl-carousel/css/owl.theme.default.min.css" />

    <!--  custom css file  -->
    <link rel="stylesheet" href="/vendor/homepage/css/style.css" />

    <!--  Responsive css file  -->
    <link rel="stylesheet" href="/vendor/homepage/css/responsive.css" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />

    <!--JQuery-->
    <script type="text/javascript" src="/vendor/homepage/vendor/whatsapp/jquery-3.3.1.min.js"></script>
    <!--Floating WhatsApp css-->
    <link rel="stylesheet" href="/vendor/homepage/vendor//whatsapp/floating-wpp.min.css" />
    <!--Floating WhatsApp javascript-->
    <script type="text/javascript" src="/vendor/homepage/vendor//whatsapp/floating-wpp.min.js"></script>
    <link rel="stylesheet" href="/css/mystyle.css" />


    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</head>

<body>

    <?= $this->include('/layout/navbar'); ?>
    <?= $this->renderSection('content'); ?>


    <!--  Bootstrap js file  -->
    <script src="/vendor/homepage/js/bootstrap.min.js"></script>

    <!--  isotope js library  -->
    <script src="/vendor/homepage/vendor/isotope/isotope.min.js"></script>

    <!--  Magnific popup script file  -->
    <script src="/vendor/homepage/vendor/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>

    <!--  Owl-carousel js file  -->
    <script src="/vendor/homepage/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!--  custom js file  -->
    <script src="/vendor/homepage/js/main.js"></script>

    <script type="text/javascript">
        $(function() {
            $("#WAButton").floatingWhatsApp({
                phone: "+628113828890", //WhatsApp Business phone number
                headerTitle: "Ta'angka Event Organizer !", //Popup Title
                popupMessage: "Halo, apa ada yang bisa kami bantu ?", //Popup Message
                showPopup: true, //Enables popup display
                buttonImage: '<img src="/vendor/homepage/vendor/whatsapp/whatsapp.svg" />', //Button Image
                //headerColor: 'crimson', //Custom header color
                //backgroundColor: 'crimson', //Custom background button color
                position: "right", //Position: left | right
            });
        });
    </script>
</body>

</html>