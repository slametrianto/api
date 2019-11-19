// let mahasiswa = {
//     nama: "mamet",
//     nrp: "090900",
//     email: "mamet@gmail.com"
// }
// console.log(JSON.stringify(mahasiswa));

//jd objek
let xhr = new XMLHttpRequest();
xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {


        let mahasiswa = JSON.parse(this.responseText);
        console.log(mahasiswa);
    }
}
xhr.open('GET', 'coba.js', true);
xhr.send();


//menggunakan jquery
$.getJSON('coba.js', function (data) {
    console.log(data);
});