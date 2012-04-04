<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Intro</title>
  <meta http-equiv="imagetoolbar" content="no" />
  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
  <link rel="stylesheet" type="text/css" href="intro.css" />
  <script type="text/javascript" src="jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $("#nav li").addClass("parent");
      $("#nav li li").removeClass("parent");
      function normalize(){
         window_height = $(window).height();
         window_width = $(window).width();
         $("#introImages").css({"width":window_width, "height":window_height});
         //$("#flashIntro").css({"width":window_width, "height":window_height});
         //alert(window_height)
      }
      normalize();
      $(window).load(function(){normalize();})
      $(window).resize(function(){normalize()});

      //nav

      $("#nav li.parent").hover(function(){
            $("#nav li.parent").find("div.sub").hide();
            $(this).find("div.sub").show();
            $(this).css("height", "200px");
      }, function(){
           $(this).find("div.sub").hide();
           $("#nav li.parent").css("height", "auto");
      })

      /*$("#nav").hover(function(){}, function(){
           $(this).find("div.sub").hide();
           $("#nav li.parent").css("height", "auto");
      })*/
    });

  </script>
</head>
<body>
     <div id="container">
         <div id="introImages">
         <script type="text/javascript">
             function getFlash(){
             $("#introImages embed").remove();
              var embed = document.createElement('embed');
                  embed.setAttribute("type", "application/x-shockwave-flash");
                  embed.setAttribute("src", "imagerotator.swf");
                  embed.setAttribute("id", "flashIntro");
                  embed.setAttribute("width", "100%");
                  embed.setAttribute("height", "100%");
                  embed.setAttribute("wmode", "transparent");
                  embed.setAttribute("allowscriptaccess", "always");
                  embed.setAttribute("allowfullscreen", "false");
                  embed.setAttribute("flashvars", "file=intro.xml?transition=fade&shownavigation=false&overstretch=true&shuffle=false&rotatetime=5");
             document.getElementById('introImages').appendChild(embed);
             //document.getElementById('introImages').innerHTML='<embed type="application/x-shockwave-flash" src="imagerotator.swf" id="flashIntro" width="100%" height="100%" wmode="transparent" allowscriptaccess="always" allowfullscreen="false" flashvars="file=intro.xml&transition=random&shownavigation=false&overstretch=true&shuffle=false"></embed>';
            }
             window.onload = getFlash;
             window.onresize = getFlash;
         </script>
      <!--<embed
      type="application/x-shockwave-flash"
      src="imagerotator.swf"
      id="flashIntro"
      width="100%"
      height="100%"
      wmode="transparent"
      allowscriptaccess="always"
      allowfullscreen="false"
      flashvars="file=intro.xml&transition=random&shownavigation=false&overstretch=true&shuffle=false"
    ></embed>-->



    <!--<div id="treeanimation">
        <img src="img/intro/t.jpg" alt="" />
    </div>-->

    <div id="flashoverlay">&nbsp;</div>
         </div>

    <div id="header">
            <div id="headerbg">&nbsp;</div>
            <div id="headerContent">
                 <a href="#" class="logo"></a>
                <ul id="nav">
                  <li><a href="#">Omnitom</a>
                      <div class="sub">
                            <div class="subbg"></div>
                            <ul>
                              <li><a href="#">Behind the brand</a></li>
                              <li><a href="#">Omnitom atelier</a></li>
                              <li><a href="#">Press</a></li>
                              <li><a href="#">News</a></li>
                              <li><a href="#">Where to find us</a></li>
                            </ul>
                      </div>
                  </li>
                  <li><a href="#">Omnitom World</a>
                     <div class="sub">
                              <div class="subbg"></div>
                          <ul>
                            <li><a href="#">Charity</a></li>
                            <li><a href="#">Friends</a></li>
                            <li><a href="#">Upload picture</a></li>
                            <li><a href="#">Yoga off the mat</a></li>
                          </ul>
                      </div>
                  </li>
                  <li><a href="#">Get in touch</a>
                     <div class="sub">
                          <div class="subbg"></div>
                          <ul>
                            <li><a href="#">Contacts</a></li>
                            <li><a href="#">Become a distributor</a></li>
                          </ul>
                      </div>
                  </li>
                  <li><a href="#">Collections</a>
                    <div class="sub">
                        <div class="subbg"></div>
                        <ul>
                          <li><a href="#">Prana Power</a></li>
                          <li><a href="#">Embrace</a></li>
                          <li><a href="#">Chakra Chick</a></li>
                          <li><a href="#">Info</a></li>
                        </ul>
                    </div>
                  </li>
                  <li><a href="#">On-line Shop</a>
                    <div class="sub">
                        <div class="subbg"></div>
                        <ul>
                          <li><a href="#">Tops</a></li>
                          <li><a href="#">Bottoms</a></li>
                          <li><a href="#">Other</a></li>
                        </ul>
                    </div>
                  </li>
                </ul>
            </div>
         </div>
</div><!-- /#container -->
     <!--<a id="skip" href="#">Skip Intro</a>-->
</body>
</html>