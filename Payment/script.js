function validateCardNumber(cardNumber) {
  return /^\d{16}$/.test(cardNumber);
}

document.getElementById("paymentForm").addEventListener("submit", function (e) {
  const cardNumber = document.getElementById("card-number").value;

  if (!validateCardNumber(cardNumber)) {
    alert("Invalid card number. It should be 16 digits.");
    e.preventDefault();
  }
});

function cancelPayment() {
  window.location.href = "index.html"; // Redirect to cancel or homepage
}
