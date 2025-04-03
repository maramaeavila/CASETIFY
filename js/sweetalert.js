function showAlert(type, title, message, redirectUrl = null) {
  Swal.fire({
    icon: type,
    title: title,
    text: message,
    showConfirmButton: true,
    backdrop: false,
  }).then(() => {
    if (redirectUrl) {
      window.location.href = redirectUrl;
    }
  });
}
