<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="{{ asset('js/html5-qrcode.min.js') }}"></script>
</head>
<body class="body">
    <div class="container mt-4 mb-5">
        <div class="qrcode-content">
            <div class="logo">
                <img src="{{ url('upload/bigballoonlogo.png') }}">
            </div>
            <!-- <canvas id="canvas" width="320" height="240"></canvas> -->
            <div style="width: 250px;margin: 0 auto;" id="reader"></div>

            <!-- <video id="video" width="250" height="240" autoplay style="display: none;"></video>
            <div class="btn-container">
                <input type="file" class="custom-input-file">
                <button type="submit" class="btn btn-block submit-btn mt-5" id="start-camera">SCAN</button>  
            </div>  --> 
            <!-- <button id="click-photo">Click Photo</button> -->
            
        </div>
    </div>
    <script>
function onScanSuccess(decodedText, decodedResult) {
    // Handle on success condition with the decoded text or result.
    console.log(`Scan result: ${decodedText}`, decodedResult);
}

var html5QrcodeScanner = new Html5QrcodeScanner(
    "reader", { fps: 10, qrbox: 250 });
html5QrcodeScanner.render(onScanSuccess);
// let camera_button = document.querySelector("#start-camera");
// let video = document.querySelector("#video");
// let click_button = document.querySelector("#click-photo");
// let canvas = document.querySelector("#canvas");

// camera_button.addEventListener('click', async function() {
// let stream = await navigator.mediaDevices.getUserMedia({ video: true, audio: false });
// video.srcObject = stream;
// $('.qrcode-content video').toggleClass('showvideo');
// });
</script>
</body>
</html>
