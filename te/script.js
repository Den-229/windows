var mediaRecorder;
var chunks = [];

function startRecording() {
    navigator.mediaDevices.getUserMedia({ audio: true })
        .then(function(stream) {
            mediaRecorder = new MediaRecorder(stream);
            mediaRecorder.start();

            mediaRecorder.ondataavailable = function(e) {
                chunks.push(e.data);
            }

            mediaRecorder.onstop = function(e) {
                var blob = new Blob(chunks, { 'type' : 'audio/ogg; codecs=opus' });
                chunks = [];

                var audioURL = URL.createObjectURL(blob);
                var audioPlayer = document.getElementById('audio-player');
                audioPlayer.src = audioURL;
            }
        })
        .catch(function(err) {
            console.log('Error: ' + err);
        });
}

function stopRecording() {
    mediaRecorder.stop();
}

function sendAudioMessage() {
    var blob = new Blob(chunks, { 'type' : 'audio/ogg; codecs=opus' });
    var formData = new FormData();
    formData.append('audio', blob, 'audio_message.ogg');

    fetch('upload.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        appendAudioMessage('You', data.audioURL);
    })
    .catch(error => console.error('Error:', error));
}

function appendAudioMessage(sender, audioURL) {
    var chatBox = document.getElementById('chat-box');
    var messageDiv = document.createElement('div');
    messageDiv.className = 'message';
    messageDiv.innerHTML = '<strong>' + sender + ':</strong> <audio controls><source src="' + audioURL + '" type="audio/ogg"></audio>';
    chatBox.appendChild(messageDiv);
    chatBox.scrollTop = chatBox.scrollHeight;
}
