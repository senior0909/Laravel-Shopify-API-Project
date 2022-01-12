<?php
    
    // var_dump(file_get_contents("https://shopping.yahooapis.jp/ShoppingWebService/V3/itemSearch?appid=dj00aiZpPWtDWmJZeElxNHdmZiZzPWNvbnN1bWVyc2VjcmV0Jng9ZTg-&query=%E8%AE%83%E5%B2%90%E3%81%86%E3%81%A9%E3%82%93"));

?>



<span class="yconnectLogin"></span>

<script type="text/javascript">
window.yconnectInit = function() {
    YAHOO.JP.yconnect.Authorization.init({
        button: {
            format: "image",
            type: "a",
            textType:"a",
            width: 196,
            height: 38,
            className: "yconnectLogin"
        },
        authorization: {
            // clientId: "dj00aiZpPWtDWmJZeElxNHdmZiZzPWNvbnN1bWVyc2VjcmV0Jng9ZTg-",
            clientId: "dj00aiZpPXFXS0tFM0xEMnpnTSZzPWNvbnN1bWVyc2VjcmV0Jng9MWY-",
            redirectUri: "https://www.admin.todoku-yo.net/yahooCallback",
            scope: "openid",
            state: "",
            nonce: "",
            windowWidth: "500",
            windowHeight: "400"
        },
        onError: function(res) {
            // エラー発生時のコールバック関数
        },
        onCancel: function(res) {
            // 同意キャンセルされた時のコールバック関数
        }
    });
};
(function(){
var fs = document.getElementsByTagName("script")[0], s = document.createElement("script");
s.setAttribute("src", "https://s.yimg.jp/images/login/yconnect/auth/1.0.3/auth-min.js");
fs.parentNode.insertBefore(s, fs);
})();
</script>