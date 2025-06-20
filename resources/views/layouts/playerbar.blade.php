<div class="player-bar">
    <div class="now-playing">
        <img src="{{ asset('assets/images/musics/' . $song_playerbar['image_url']) }}" alt="Now Playing">
        <div class="track-info">
            <div class="track-name">{{ $song_playerbar['name'] }}</div>
            <div class="artist-name">{{ $artist_playerbar['name'] }}</div>
        </div>
        <i class="bi bi-heart ms-3" style="color: var(--text-secondary); cursor: pointer;"></i>
    </div>


    <div class="player-controls">
        <div class="control-buttons">
            <i class="bi bi-shuffle control-btn" id="shuffle"></i>
            <i class="bi bi-skip-start-fill control-btn" id="skipPrevious"></i>
            <i class="bi bi-play-circle-fill control-btn main" id="playMusic"></i>
            <i class="bi bi-skip-end-fill control-btn" id="skipNext"></i>
            <i class="bi bi-repeat control-btn"></i>
        </div>
        <div class="progress-container">
            <div class="progress-time" id="startTime">0:00</div>
            <div class="progress-bar">
                <input type="range" id="progressBar" value="0" min="0" step="1" max="10">
            </div>
            <div class="progress-time" id="endTime">{{ $song_playerbar['duration'] }}</div>
        </div>
        <audio src="{{ asset('assets/musics/' . $song_playerbar['source']) }}" id="audio"></audio>
    </div>

    <div class="volume-controls">
        <i class="bi bi-volume-up volume-icon" id="volumeMusic"></i>
        <input type="range" id="volumeBar" value="100" min="0" step="1" max="100"
            class="volume-bar">
    </div>
    <div class="d-none">
        <form action={{ route('skip.next') }} method="POST" id="skipNextForm">
            @csrf
            <input name="skip" value="next">
            <input name="id" value={{ $song_playerbar['id'] }}>
            <input name="currentTime" id="currentTime" value="0">
        </form>
        <form action={{ route('skip.previous') }} method="POST" id="skipPreviousForm">
            @csrf
            <input name="skip" value="previous">
            <input name="id" value={{ $song_playerbar['id'] }}>
            <input name="current_time" id="currentTime">
        </form>
    </div>
</div>
<script>
    let playMusic = document.getElementById('playMusic');
    let audio = document.getElementById('audio');
    let volumeMusic = document.getElementById('volumeMusic');
    let startTime = document.getElementById('startTime');
    let endTime = document.getElementById('endTime');
    let progressBar = document.getElementById('progressBar');
    let volumeBar = document.getElementById('volumeBar');
    let skipNext = document.getElementById('skipNext');
    let shuffle = document.getElementById('shuffle');
    let musicTime = localStorage.getItem('musicTime');
    window.addEventListener("beforeunload", function() {
        localStorage.setItem("musicTime", audio.currentTime);
    });

    window.addEventListener('popstate', function() {
        localStorage.setItem("musicTime", audio.currentTime);
    })

    shuffle.addEventListener('click', function() {
        // audio.currentTime;
    })

    skipNext.addEventListener('click', function() {
        document.getElementById('skipNextForm').submit();
    })

    skipPrevious.addEventListener('click', function() {
        document.getElementById('skipPreviousForm').submit();
    })

    volumeBar.addEventListener('input', function() {
        audio.volume = volumeBar.value / 100;
    })

    audio.addEventListener('timeupdate', function() {
        progressBar.value = audio.currentTime;
        startTime.textContent = formatTime(audio.currentTime);
    })

    audio.addEventListener('loadedmetadata', function() {
        let musicTime = parseFloat(localStorage.getItem('musicTime')) || 0;
        console.log(musicTime);
        audio.currentTime = musicTime;
        startTime.textContent = formatTime(musicTime);
        progressBar.max = parseInt(audio.duration);
        endTime.textContent = formatTime(audio.duration);
    })

    playMusic.addEventListener('click', function() {
        if (audio.paused == true) {
            audio.play();
            playMusic.className = 'bi bi-pause-circle-fill control-btn main';
        } else {
            audio.pause();
            playMusic.className = 'bi bi-play-circle-fill control-btn main';
        }
    })

    volumeMusic.addEventListener('click', function() {
        if (audio.muted == false || audio.volume == 0) {
            audio.muted = true;
            volumeMusic.className = 'bi bi-volume-mute volume-icon';
        } else {
            audio.muted = false;
            volumeMusic.className = 'bi bi-volume-up volume-icon';
        }
    })

    function formatTime(time) {
        time = parseInt(time);
        if (time < 10) {
            return '0:0' + time;
        } else if (time < 60) {
            return '0:' + time;
        } else {
            if ((time % 60) == 0) {
                return (time / 60) + ':00';
            } else {
                let minutes = (time - (time % 60)) / 60;
                let seconds = time - (minutes * 60);
                if (seconds < 10) {
                    seconds = '0' + seconds;
                };
                return minutes + ':' + seconds;
            }
        }
    }
</script>
