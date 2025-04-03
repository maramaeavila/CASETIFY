document.addEventListener("DOMContentLoaded", function () {
  const modalContent = document.getElementById("modalContent");

  document.querySelectorAll(".social-icons i").forEach((icon) => {
    icon.addEventListener("click", function () {
      let type = this.getAttribute("data-type");
      let content = "";

      if (type === "facebook") {
        content = `
                    <p><i class="fa-brands fa-facebook text-primary"></i> <strong>Facebook Page</strong><br>
                    <a href="https://www.facebook.com/share/1BbvxnttwU/" target="_blank">Click here to view</a></p>
                    <p><i class="fa-brands fa-facebook text-primary"></i> <strong>Facebook Group</strong><br>
                    <a href="https://www.facebook.com/groups/450965345860062/?ref=share&mibextid=NSMWBT" target="_blank">Join the group</a></p>
                `;
      } else if (type === "phone") {
        content = `<p><i class="fa-solid fa-phone text-success"></i> <strong>Phone:</strong> +63 912 345 6789</p>`;
      } else if (type === "email") {
        content = `<p><i class="fa-solid fa-envelope text-danger"></i> <strong>Email:</strong> contact@example.com</p>`;
      }

      modalContent.innerHTML = content;
    });
  });
});
