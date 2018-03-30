    <?php if (!View::checkForActiveController($filename, "index") && !View::checkForActiveController($filename, "login") && !View::checkForActiveController($filename, "register")) { ?>
    
<!--     <footer id="foot" style="background-color: #fff; bottom:0; height: 5%; width: 100%;margin-top: 5px; padding-top: 10px; position: absolute !important; padding-bottom: 0px; box-shadow: 0px -2px 5px #bdbdbd;">
        <div class="container">
            <div class="row">
                <div class="col-3"></div>
            <div class="col-6">
                © 2018 CEOSIM  | Simulador de Estrategia Empresarial
            </div>
            <div class="col-3 ">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" style="color: #3b5998;" href="https://www.facebook.com/ceosim.cl/"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #2ECCFA;" href="https://twitter.com/CEOsim_Chile"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: red;" href="https://www.youtube.com/channel/UC1C8wXqh3Mx_8Jm4WHG6-Yg"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
            </div>
        </div>
    </footer> -->
    <style>
        .btn-fb {
        background-color: #3b5998!important;
        color: #fff!important;
    }
    .btn-tw {
    background-color: #55acee!important;
    color: #fff!important;
}
.btn-li {
    background-color: #0082ca!important;
    color: #fff!important;
}
.btn-yt {
    background-color: red!important;
    color: #fff!important;
}
.btn-floating.btn-sm {
    width: 36.15385px;
    height: 36.15385px;
}.btn-floating {
    width: 47px;
    height: 47px;
    position: relative;
    z-index: 1;
    vertical-align: middle;
    display: inline-block;
    overflow: hidden;
    -webkit-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
    margin: 10px;
    border-radius: 50%;
    padding: 0;
    cursor: pointer;
}
    </style>
    <footer class="page-footer font-small stylish-color-dark pt-2 mt-2">

    <hr>

    <!--Social buttons-->
    <div class="text-center">
        <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-fb mx-1 " href="https://www.facebook.com/ceosim.cl/">
                    <i class="fa fa-facebook mt-2"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-tw mx-1" href="https://twitter.com/CEOsim_Chile">
                    <i class="fa fa-twitter mt-2"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-yt mx-1" href="https://www.youtube.com/channel/UC1C8wXqh3Mx_8Jm4WHG6-Yg">
                    <i class="fa fa-youtube-play mt-2"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-li mx-1">
                    <i class="fa fa-linkedin mt-2"> </i>
                </a>
            </li>
        </ul>
    </div>
    <!--/.Social buttons-->

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
        © 2018 Copyright:
        <a href="http://ceosim.cl/"> E-learning  | Lorem ipsum dolor sit amet, consectetur adipiscing elit </a>
    </div>
    <!--/.Copyright-->
    <?php } ?>
<!-- Global site tag (gtag.js) - Google Analytics -->

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-87353549-1');
</script>

</script>
</body>
</html>