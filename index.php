<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WIFI ID LOGINER</title>
    <link href="./style.css" rel="stylesheet" />
    <script>
        var gwId;
        var clientMac;
        var wlan;
        var username = 'rr@ut.ac.id';
        var password = '2018210011998';
        function loginFunction(){
            var http = new XMLHttpRequest();
        var currentLocation = window.location;
        let url = 'https://welcome2.wifi.id/authnew/login/check_login.php?ipc=10.208.179.15&gw_id='+ gwId+'&mac='+ clientMac+'&redirect=&wlan='+wlan+'&load_wp=524';
        var params = 'username='+username+'@com.ut&password='+password+'&landURL=' ;
        http.open('POST', url, true);

        //Send the proper header information along with the request
        http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        http.onreadystatechange = function() {//Call a function when the state changes.
        if(http.readyState == 4 && http.status == 200) {
            document.getElementById('result').value = document.getElementById('result').value + '\n\n' + http.responseText;
        }
        }
        http.send(params);
            
        }
        function getUrlParameter(url, parameterName) {
        parameterName = parameterName.replace(/[\[\]]/g, '\\$&');
        var regex = new RegExp('[?&]' + parameterName + '(=([^&#]*)|&|#|$)');
        var results = regex.exec(url);
        
        if (!results) return null;
        if (!results[2]) return '';
        
        return decodeURIComponent(results[2].replace(/\+/g, ' '));
        }
       
    </script>
</head>
<body>
        <div class="container">
        <p>ONE CLICK LOGIN !</p>
        <p style='color: rgb(200, 4, 4);margin:0'>@WIFI.ID</p>
        <input type="text" id="link-login" placeholder="https://welcome2.wifi.id/login/?gw_id=xxxx">
        <textarea style="resize:none;margin-bottom:10px" id="result" cols="45" rows="10" readonly>Masukkan Link Login Di Atas</textarea>
        <select onchange="selectChange()"id="account-select">
        <option value="1">Akun 1</option>
        <option value="2">Akun 2</option>
        <option value="3">Akun 3</option>
        <option value="4">Akun 4</option>
        <option value="5">Akun 5</option>
        </select>
        <button onclick="loginFunction()"type="button">LOGIN</button>
        <a href="http://instagram.com/wrdhana.a">By : @wrdhana.dev</a>
        </div>
        <script>
             var url = document.getElementById('link-login');
        url.addEventListener("input", function() {
            gwId = getUrlParameter(url.value, 'gw_id');
            clientMac = getUrlParameter(url.value, 'client_mac');
            wlan = getUrlParameter(url.value, 'wlan');
            if(gwId == null || clientMac == null || wlan == null){
                document.getElementById('result').value = 'Silahkan Masukkan Link Login Yang Valid'
            }else{
                document.getElementById('result').value = 'GW-ID : ' + gwId + '\nMAC : ' +clientMac + '\nWLAN : ' +wlan
            }
            });
            var selectVal =document.getElementById('account-select');
            function selectChange(){
            if(selectVal.value=='1'){
                username = '041299781@ut.ac.id';
                password = '2019129031980';
            }else if(selectVal.value=='2'){
                username = '031166734@ut.ac.id';
                password = '2018212032000';
            }else if(selectVal.value=='3'){
                username = '041296106@ut.ac.id';
                password = '2019128091992';
            }else if(selectVal.value=='4'){
                username = '030988415@ut.ac.id';
                password = '2018212121998';
            }else if(selectVal.value=='5'){
                username = '030914894@ut.ac.id';
                password = '2018206042000';
            }
        }
        </script>
</body>
</html>