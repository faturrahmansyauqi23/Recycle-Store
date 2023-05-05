function handleFormSubmission(event) {
  event.preventDefault(); // Prevent form from submitting

  // Get form input values
  let metodePembayaran = document.getElementById("metode-pembayaran").value;

  // Validate form input
  if (!metodePembayaran) {
    alert("Harap pilih metode pembayaran");
    return;
  }

  // Redirect to confirmation page
  window.location.href = "konfirmasi.html";
}

document.querySelector("form").addEventListener("submit", handleFormSubmission);
