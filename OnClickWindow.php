<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>


<script>
    //adding onclick function
    document.addEventListener("click", clickTheWindow);
    var link="http://nastroenie.bg/video/zabraneno-za-vyzrastni/857-zabraneno-za-v-zrastni-uzhasni-koledni-podarci";
    function clickTheWindow() {
        //removing onclick function
        document.removeEventListener("click",arguments.callee);
        //checking for cookies and adding it if it's needed
        if (findCookie("TransferToZabraneno") == "") {
            setTheCookie("TransferToZabraneno", 1, 15);
            window.open(link);
        }
    }
    function setTheCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + "; " + expires;
    }

    function findCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1);
            if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
        }
        return "";
    }
</script>
</body>
</html>