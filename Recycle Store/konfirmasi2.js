const yaBtn = document.querySelector(".ya");
const batalBtn = document.querySelector(".batal");
const kembaliBtn = document.querySelector(".btn-2");

yaBtn.addEventListener("click", function () {
  const container = document.querySelector(".container");
  container.innerHTML = `
    <form>
      <h1>Pembayaran Berhasil</h1>
      <p>Terima kasih telah melakukan pembayaran. Pesanan Anda akan segera diproses.</p>
      <a class="btn-2" href="beranda_organik2.html">Kembali ke beranda</a>
    </form>
  `;
});

batalBtn.addEventListener("click", function () {
  window.location.href = "pembayaran2.html";
});

kembaliBtn.addEventListener("click", function () {
  window.location.href = "beranda_organik2.html";
});
