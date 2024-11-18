document.getElementById("paymentMethod").addEventListener("change", function () {
    const method = this.value;
  
    document.querySelectorAll(".payment-method").forEach((element) => {
      element.style.display = "none";
    });
  
    switch (method) {
      case "card":
        document.getElementById("cardDetails").style.display = "block";
        break;
      case "netBanking":
        document.getElementById("netBankingDetails").style.display = "block";
        break;
      case "upi":
        document.getElementById("upiDetails").style.display = "block";
        break;
      case "qr":
        document.getElementById("qrDetails").style.display = "block";
        break;
    }
  });
  
  document.getElementById("payNow").addEventListener("click", function () {
    const method = document.getElementById("paymentMethod").value;
    const statusMessage = document.getElementById("statusMessage");
  
    statusMessage.textContent = `Processing ${method.toUpperCase()} payment...`;
    statusMessage.style.color = "green";
  
    // Simulate a payment success
    setTimeout(() => {
      statusMessage.textContent = "Payment Successful!";
    }, 2000);
  });
  