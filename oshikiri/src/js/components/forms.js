export default function Forms() {
  const contact = document.querySelector(".contact");
  const confirmButton = document.querySelector(".contact-button-confirm");
  const fileUploads = document.querySelectorAll(".js-contact-upload-file");
  const uploadButton = document.querySelectorAll(".contact-upload-button");
  const fileClear = document.querySelectorAll(".js-upload-fileclear");
  const inputFileUpload = document.querySelectorAll(".js-file-upload");
  const outputFilenames = document.querySelectorAll(
    ".js-contact-upload-filename"
  );
  const resumeUpload = document.getElementById("resume");

  const agree = document.querySelector(".contact-agree-checkbox");

  if (contact) {
    // uploadButton.forEach((el, index) => {
    //   el.addEventListener("click", (e) => {
    //     fileUploads[index].click();
    //   });
    // });

    // resumeUpload.addEventListener("change", function (e) {
    //   console.log("change");
    // });

    inputFileUpload.forEach((el, index) => {
      el.addEventListener("change", function (e) {
        console.log("e", e);
        let file = e.target.files[0];
        if (file) {
          fileClear[index].classList.add("is-show");
        }
        console.log("file", file);
        outputFilenames[index].innerHTML = file.name;
      });

      fileClear[index].addEventListener("click", function () {
        fileClear[index].classList.remove("is-show");
        inputFileUpload[index].value = "";
        outputFilenames[index].innerHTML = "";
      });
    });

    // fileUploads.forEach((el, index) => {
    //   const inputName = el.getAttribute("name");
    //   el.addEventListener("change", (e) => {
    //     let filename = e.target.files[0].name;
    //     outputFilenames[index].innerHTML = filename;
    //   });

    //   fileClear[index].document
    //     .querySelector(`[data-mwform-file-delete="${inputName}"]`)
    //     .addEventListener("click", (e) => {
    //       outputFilenames[index].innerHTML = "";
    //       el.click();
    //     });
    // });

    agree.addEventListener("click", (e) => {
      agree.checked
        ? confirmButton.classList.remove("is-disabled")
        : confirmButton.classList.add("is-disabled");
    });
  }
}
