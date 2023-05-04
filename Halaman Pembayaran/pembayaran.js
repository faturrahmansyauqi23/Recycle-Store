// Function to handle form submission
function handleFormSubmission(event) {
  event.preventDefault(); // Prevent form from submitting

  // Get form input values
  let metodePembayaran = document.getElementById("metode-pembayaran").value;

  // Validate form input
  if (!metodePembayaran) {
    alert("Harap pilih metode pembayaran");
    return;
  }

  // TODO: Handle payment using selected payment method (e.g. redirect to payment gateway)
}

// Attach event listener to form submit button
document.querySelector("form").addEventListener("submit", handleFormSubmission);
