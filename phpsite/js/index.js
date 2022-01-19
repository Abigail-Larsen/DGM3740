function toggleMenu() {
    console.log(document.getElementsByTagName("NAV")[0], 'hit bitches')
    document.getElementsByTagName("NAV")[0].classList.toggle("open");
}
const x = document.getElementById('theButton');
x.onclick = toggleMenu; 