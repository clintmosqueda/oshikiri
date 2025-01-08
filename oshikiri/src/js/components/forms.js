export default function Forms() {
  const form = document.querySelector('.wpcf7-form');
  const contact = document.querySelector('.contact');
  const submitButton = document.querySelector('.contact-button-submit');
  const confirmButton = document.querySelector('.contact-button-confirm');
  const fileUploads = document.querySelectorAll('.js-contact-upload-file');
  const uploadButton = document.querySelectorAll('.contact-upload-button');
  const fileClear = document.querySelectorAll('.js-upload-fileclear');
  const inputFileUpload = document.querySelectorAll('.js-file-upload');
  const textarea = document.querySelector('.contact-textarea textarea');
  const outputFilenames = document.querySelectorAll(
    '.js-contact-upload-filename'
  );
  const resumeUpload = document.getElementById('resume');

  const agree = document.querySelector(
    '.contact-agree-checkbox input[type="checkbox"]'
  );
  const agreeLabel = document.querySelector('.contact-agree-label');

  let isCheck = false;

  const requiredInputs = document.querySelectorAll(
    'input[aria-required="true"], textarea[aria-required="true"], select[aria-required="true"]'
  );

  function preventEnterSubmission(e) {
    if (e.key === 'Enter') {
      if (!isCheck) e.preventDefault();
    }
  }

  if (form) {
    form.addEventListener('keydown', preventEnterSubmission);

    if (textarea) {
      textarea.addEventListener('keydown', function (e) {
        if (e.which == 13) {
          e.stopPropagation();
        }
      });
    }
  }

  function checkRequiredFields() {
    const allRequiredFilled = Array.from(requiredInputs).every((input) => {
      if (input.tagName === 'SELECT') {
        return input.value.trim() !== '';
      }
      return input.value.trim() !== '';
    });

    if (allRequiredFilled && isCheck) {
      submitButton.classList.remove('is-disabled');
    } else {
      submitButton?.classList.add('is-disabled');
      // form.addEventListener('keydown', preventEnterSubmission);
    }
  }

  if (contact) {
    inputFileUpload.forEach((el, index) => {
      el.addEventListener('change', function (e) {
        let file = e.target.files[0];
        if (file) {
          fileClear[index].classList.add('is-show');
        }
        outputFilenames[index].innerHTML = file.name;
      });

      fileClear[index].addEventListener('click', function () {
        fileClear[index].classList.remove('is-show');
        inputFileUpload[index].value = '';
        outputFilenames[index].innerHTML = '';
      });
    });

    if (!!confirmButton) {
      agree.addEventListener('click', (e) => {
        agree.checked
          ? confirmButton.classList.remove('is-disabled')
          : confirmButton.classList.add('is-disabled');
      });
    }

    requiredInputs.forEach((field) => {
      field.addEventListener('input', checkRequiredFields);
    });

    if (!!submitButton) {
      agree.addEventListener('click', (e) => {
        if (agree.checked) {
          agreeLabel.classList.add('is-checked');
        } else {
          agreeLabel.classList.remove('is-checked');
        }
        agree.checked ? (isCheck = true) : (isCheck = false);
        checkRequiredFields();
      });
    }

    checkRequiredFields();
  }
}
