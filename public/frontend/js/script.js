const audio = document.getElementById('audio');
const playButton = document.getElementById('play');
const prevButton = document.getElementById('prev');
const nextButton = document.getElementById('next');
const progress = document.getElementById('progress');
const currentTimeDisplay = document.getElementById('current-time');
const durationDisplay = document.getElementById('duration');
const songList = document.getElementById('song-list');
const currentSongTitle = document.getElementById('current-song-title');
const buttons = document.querySelectorAll('.music-player-btn');

let currentSongIndex = 0; // شروع از اولین آهنگ
const songs = Array.from(songList.children);

function loadSong(index) {
  const selectedSong = songs[index];
  audio.src = selectedSong.dataset.src; // بارگذاری منبع آهنگ

  // انتخاب نام آهنگ و هنرمند
  const trackName = selectedSong.querySelector(
    '.track-neme.text-brand'
  ).textContent; // نام آهنگ
  const artistName = selectedSong.querySelector(
    '.track-neme.text-gray-600'
  ).textContent; // نام هنرمند

  // ترکیب نام آهنگ و هنرمند
  currentSongTitle.textContent = `${trackName} - ${artistName}`;

  songs.forEach((song) => song.classList.remove('active'));
  selectedSong.classList.add('active');

  audio.load(); // بارگذاری آهنگ

  // تنظیم پروگرس بار و زمان جاری به صفر
  progress.value = 0;
  currentTimeDisplay.textContent = formatTime(0);

  // پخش آهنگ
  audio.play().catch((error) => {
    console.error('Error playing the audio:', error);
  });
}

function playSong() {
  audio.play();
}

function pauseSong() {
  audio.pause();
}

playButton.addEventListener('click', () => {
  if (audio.paused) {
    playSong();
    playButton.innerHTML = '<img src="/frontend/assets/icons/pause.svg" alt="Pause">'; // تغییر دکمه به توقف
  } else {
    pauseSong();
    playButton.innerHTML = '<img src="frontend/assets/icons/play.svg" alt="Play">'; // تغییر دکمه به پخش
  }
});

prevButton.addEventListener('click', () => {
  currentSongIndex = (currentSongIndex - 1 + songs.length) % songs.length;
  loadSong(currentSongIndex);
  playSong();
});

nextButton.addEventListener('click', () => {
  currentSongIndex = (currentSongIndex + 1) % songs.length;
  loadSong(currentSongIndex);
  playSong();
});

// اینجا برای بازگشت به آهنگ اول پس از پایان پخش آهنگ
audio.addEventListener('ended', () => {
  currentSongIndex = (currentSongIndex + 1) % songs.length; // به آهنگ بعدی بروید
  loadSong(currentSongIndex);
  playSong();
});

audio.addEventListener('loadedmetadata', () => {
  durationDisplay.textContent = formatTime(audio.duration);
});

audio.addEventListener('timeupdate', () => {
  if (audio.duration > 0) {
    // اطمینان از اینکه طول آهنگ بیشتر از صفر است
    progress.value = (audio.currentTime / audio.duration) * 100;
    currentTimeDisplay.textContent = formatTime(audio.currentTime);
  }
});

progress.addEventListener('input', () => {
  const newTime = (progress.value / 100) * audio.duration;
  audio.currentTime = newTime;
});

songs.forEach((song, index) => {
  song.addEventListener('click', () => {
    currentSongIndex = index;
    loadSong(currentSongIndex);
    playSong();
  });
});

function formatTime(seconds) {
  const minutes = Math.floor(seconds / 60);
  const secs = Math.floor(seconds % 60);
  return String(minutes).padStart(2, '0') + ':' + String(secs).padStart(2, '0');
}

window.addEventListener('load', () => {
  if (audio.paused) {
    playButton.innerHTML = '<img src="/frontend/assets/icons/play.svg" alt="Play">'; // اگر متوقف است، دکمه را به Play تغییر دهید
  } else {
    playButton.innerHTML = '<img src="/frontend/assets/icons/pause.svg" alt="Pause">'; // اگر در حال پخش است، دکمه را به Pause تغییر دهید
  }
});

loadSong(currentSongIndex);
