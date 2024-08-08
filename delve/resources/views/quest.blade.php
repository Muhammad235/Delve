<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- @dd($scene) --}}

    <h1>{{ $quest->title }}</h1>
    <p>Dificulty: {{  $quest->difficulty_level }}</p>
    <p>Lv 1</p>


    <h4>mission breif:</h4>
    <p>
        {{ $quest->description }}
    </p>

    <div>
        <p>Dragon(computer): {{ $timestamp->description }}</p>
    </div>

    {{-- <div>
        <button>Speak</button>
    </div> --}}
{{-- 
    <div class="audio-recording-container">
        <h1 class="title">Audio Recording API Demo</h1>
        <i class="start-recording-button fa fa-microphone" aria-hidden="true"></i>
        <div class="recording-contorl-buttons-container hide">
            <i class="cancel-recording-button fa fa-times-circle-o" aria-hidden="true"></i>
            <div class="recording-elapsed-time">
                <i class="red-recording-dot fa fa-circle" aria-hidden="true"></i>
                <p class="elapsed-time"></p>
            </div>
            <i class="stop-recording-button fa fa-stop-circle-o" aria-hidden="true"></i>
        </div>
        <div class="text-indication-of-audio-playing-container">
            <p class="text-indication-of-audio-playing hide">Audio is playing<span>.</span><span>.</span><span>.</span></p>
        </div>
    </div>
    <div class="overlay hide">
        <div class="browser-not-supporting-audio-recording-box">
            <p>To record audio, use browsers like Chrome and Firefox that support audio recording.</p>
            <button type="button" class="close-browser-not-supported-box">Ok.</button>
        </div>
    </div>

    <audio controls class="audio-element hide">
    </audio> --}}
{{--
    <script src="js/audio-recording.js"></script>
    <script src="js/index.js"></script> --}}

</body>
</html>
