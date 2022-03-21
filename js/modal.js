const modal = document.querySelector("#privacypolicyModal");
const body = document.querySelector("body");

modal.addEventListener('shown.bs.modal', function () {
    // Disable scroll
    body.style.overflow = "hidden";
})

modal.addEventListener('hidden.bs.modal', function (event) {
    // Enable scroll
    body.style.overflow = "auto";
})

// const showModal = function (e) {
//     modal.classList.toggle("hidden");

//     if (!modal.classList.contains("hidden")) {
//         // Disable scroll
//         body.style.overflow = "hidden";
//     } else {
//         // Enable scroll
//         body.style.overflow = "auto";
//     }
// };