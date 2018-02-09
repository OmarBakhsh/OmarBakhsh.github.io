 <script language="javascript"> <!--
     var mobile = (/iphone|ipad|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));
              if (mobile) {
                  alert("MOBILE DEVICE DETECTED");
                  document.write("<b>------------------------------------------<br>")
                  document.write("<b>" + navigator.userAgent + "<br>")
                  document.write("<b>------------------------------------------<br>")
                  var userAgent = navigator.userAgent.toLowerCase();
                  if ((userAgent.search("android") > -1) && (userAgent.search("mobile") > -1))
                         document.write("<b> ANDROID MOBILE <br>")
                   else if ((userAgent.search("android") > -1) && !(userAgent.search("mobile") > -1))
                       document.write("<b> ANDROID TABLET <br>")
                   else if ((userAgent.search("blackberry") > -1))
                       document.write("<b> BLACKBERRY DEVICE <br>")
                   else if ((userAgent.search("iphone") > -1))
                       document.write("<b> IPHONE DEVICE <br>")              
                   else if ((userAgent.search("ipod") > -1))
                       document.write("<b> IPOD DEVICE <br>")
               else if ((userAgent.search("ipad") > -1))
                       document.write("<b> IPAD DEVICE <br>")
                       else
                   document.write("<b> UNKNOWN DEVICE <br>")
              }
              else
                  alert("NO MOBILE DEVICE DETECTED"); //--> </script>