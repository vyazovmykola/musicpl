const tracks = {
    "tyler": [
        { src: "music/01. St. Chroma.mp3", img: "chromakopia.jpg", name: "St. Chroma", artist: "Tyler, The Creator" },
        { src: "music/02. Rah Tah Tah.mp3", img: "chromakopia.jpg", name: "Rah Tah Tah", artist: "Tyler, The Creator" },
        { src: "music/03. Noid.mp3", img: "chromakopia.jpg", name: "Noid", artist: "Tyler, The Creator" },
        { src: "music/04. Darling, I.mp3", img: "chromakopia.jpg", name: "Darling, I", artist: "Tyler, The Creator" }       
    ],
    "frank": [
        { src: "music/Frank Ocean – Pyramids.mp3", img: "channel-orange.jpg", name: "Pyramids", artist: "Frank Ocean" },
        { src: "music/Frank Ocean – white ferrari.mp3", img: "blonde.jpg", name: "White Ferrari", artist: "Frank Ocean" }
    ]
};

function loadTracks(artist) {
    let trackListContainer = document.getElementById("track-list");
    trackListContainer.innerHTML = ""; 
    let welcome_text_clear = document.getElementById("welcome_text");
    welcome_text_clear.innerHTML = "enjoy your songs";

    tracks[artist].forEach(track => {
        let button = document.createElement("button");
        button.classList.add("track_list");
        button.innerHTML = `
            <img class="image" src="${track.img}">
            ${track.name} <br> ${track.artist}
        `;
        button.onclick = () => playTrack(track.src);
        trackListContainer.appendChild(button);
    });
}

function playTrack(src) {
    let player = document.getElementById("audio_player");
    if (!player) {
        console.error("error");
        return;
    }
    player.src = src;
    player.play();
}

document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".artist-link").forEach(link => {
        link.addEventListener("click", function(e) {
            e.preventDefault();
            const artist = this.getAttribute("data-artist");
            loadTracks(artist);
        });
    });
});
