function generateLink() {
  let number = document.form_main.number.value;
  let message = document.form_main.message.value;
  let url = "https://wa.me/";
  let end_url = `${url}${number}?text=${message}`;
  document.getElementById("end_url").innerText =
    "Silahkan di copy \n" + end_url;
  alert("Link berhasil di generate ");
}
