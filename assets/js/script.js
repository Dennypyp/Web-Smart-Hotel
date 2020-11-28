
// resto


const container = document.querySelector(".contain");
const full = document.querySelector(".full");
const thumbs = document.querySelectorAll(".thumb");

container.addEventListener("click", (e) => {
    // check apakah yang diklik adalah thumbs
    if (e.target.className == "thumb") {
        full.src = e.target.src;
        full.classList.add("fade");
        setTimeout(() => {
            full.classList.remove("fade");
        }, 500);

        thumbs.forEach((thumb) => {
            // if (thumb.classList.contains("active")) {
            //     thumb.classList.remove("active");
            // }
            thumb.className = "thumb";
        });
        e.target.classList.add("active");
    }
});



// Akhir resto



