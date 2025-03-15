<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Call Room</title>
    <script src="https://download.agora.io/sdk/release/AgoraRTC_N-4.17.0.js"></script>
</head>
<body>
    <div id="video-streams"></div>
    <div id="controls">
        <button id="camera-btn">Toggle Camera</button>
        <button id="mic-btn">Toggle Mic</button>
        <button id="leave-btn">Leave Call</button>
    </div>
    <script src="{{ asset('js/agora-video-call.js') }}"></script>
</body>
</html>
<script>
    async function joinVideoCall(channel) {
    try {
        const response = await fetch('/get-token', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ channel: channel })
        });
        const data = await response.json();
        
        sessionStorage.setItem('token', data.token);
        sessionStorage.setItem('room', channel);
        sessionStorage.setItem('UID', data.uid);
        
        window.open('/video-call-room', '_blank');
    } catch (error) {
        console.error('Error joining video call:', error);
    }
}
</script>