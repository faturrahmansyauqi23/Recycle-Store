// Function to handle form submission
function handleFormSubmission(event) {
	event.preventDefault(); // Prevent form from submitting

	// Get form input values
	let namaBarang = document.getElementById("nama").value;
	let hargaBarang = document.getElementById("harga").value;
	let deskripsiBarang = document.getElementById("deskripsi").value;
	let gambarBarang = document.getElementById("gambar").value;

	// Validate form input
	if (!namaBarang || !hargaBarang || !deskripsiBarang || !gambarBarang) {
		alert("Harap lengkapi semua field");
		return;
	}

	// TODO: Handle form submission (e.g. send data to server using AJAX)
}

// Attach event listener to form submit button
document.querySelector("form").addEventListener("submit", handleFormSubmission);
