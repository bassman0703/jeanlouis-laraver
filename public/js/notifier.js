// ###############################################
// Notification bar for cookies (CMS-355)
// ###############################################
(function() {
    var alreadyAccept = getCookie('wbCookieNotifier');
    if(alreadyAccept != 1) showWbCookieNotifier();

    window.closeWbCookieNotifier = function(){
        window.wbCookieNotifier.style.display = "none";
        if (document.getElementById('wb_body') != null) {
            document.getElementById('wb_body').style.margin = 'auto';
        }
    }

    function showWbCookieNotifier(){
        var el = document.createElement("div");
        el.id = "cookies_notifier"; el.className = "__wads_no_click";
        el.style.display = "table"; el.style.position = "fixed"; el.style.top = "0"; el.style.left = "0"; el.style.color = "#FFF"; el.style.background = "#000"; el.style.zIndex = "9999";
        el.style.width = "100%"; el.style.minHeight = "35px"; el.style.fontFamily = "Verdana"; el.style.fontSize = "10px"; /*el.style.lineHeight = "35px";*/ el.style.textAlign = "center";

        var p = document.createElement("p"); 
        p.style.display = "table-cell"; p.style.verticalAlign = "middle"; p.style.padding = "0 30px";
        p.innerHTML = LABEL_JS_COOKIES_NOTIFICATION;

        var a = document.createElement("a"); 
        a.style.position = "absolute"; a.style.top = "0"; a.style.right = "0"; a.style.display = "block"; a.style.width = "25px"; a.style.lineHeight = "25px"; a.style.backgroundColor = "#656565"; 
        a.style.color = "#FFF"; a.style.textDecoration = "none"; a.href="javascript:closeWbCookieNotifier();"
        a.innerHTML = "X";
        
        document.body.appendChild(el); el.appendChild(p); el.appendChild(a);
        window.wbCookieNotifier = el;
        
        if (document.getElementById('wb_body') != null) {
            document.getElementById('wb_body').style.margin = window.wbCookieNotifier.clientHeight + 'px 0 0 0';
        }

        setCookie('wbCookieNotifier', 1, 730);
    }    

    function setCookie(e,t,n){var r=new Date;r.setDate(r.getDate()+n);var i=escape(t)+(n==null?"":"; expires="+r.toUTCString());document.cookie=e+"="+i}
    function getCookie(e){var t,n,r,i=document.cookie.split(";");for(t=0;t<i.length;t++){n=i[t].substr(0,i[t].indexOf("="));r=i[t].substr(i[t].indexOf("=")+1);n=n.replace(/^\s+|\s+$/g,"");if(n==e){return unescape(r)}}}
})();
