

/* main tabbing */

const homeMain = document.getElementById('home_main');
const profileMain = document.getElementById('profile_main');
const requestMain = document.getElementById('request_main');
const progressMain = document.getElementById('progress_main');
const notificationMain = document.getElementById('notification_main');
const feedbackMain = document.getElementById('feedback_main');

const homeContent = document.getElementById('main_home_tab');
const profileContent = document.getElementById('main_profile_tab');
const requestContent = document.getElementById('main_request_tab');
const progressContent = document.getElementById('main_progress_tab');
const notificationContent = document.getElementById('main_notification_tab');
const feedbackContent = document.getElementById('main_feedback_tab');


function displayHomeContent(){

  homeMain.style.backgroundColor = '#387E9C';
  profileMain.style.backgroundColor = '#94BD9F';
  requestMain.style.backgroundColor = '#94BD9F';
  progressMain.style.backgroundColor = '#94BD9F';
  notificationMain.style.backgroundColor = '#94BD9F';
  feedbackMain.style.backgroundColor = '#94BD9F';

  homeContent.style.display = 'flex';
  profileContent.style.display = 'none';
  requestContent.style.display = 'none';
  progressContent.style.display = 'none';
  notificationContent.style.display = 'none';
  feedbackContent.style.display = 'none';
}

function displayProfileContent(){

  homeMain.style.backgroundColor = '#94BD9F';
  profileMain.style.backgroundColor = '#387E9C';
  requestMain.style.backgroundColor = '#94BD9F';
  progressMain.style.backgroundColor = '#94BD9F';
  notificationMain.style.backgroundColor = '#94BD9F';
  feedbackMain.style.backgroundColor = '#94BD9F';

  homeContent.style.display = 'none';
  profileContent.style.display = 'flex';
  requestContent.style.display = 'none';
  progressContent.style.display = 'none';
  notificationContent.style.display = 'none';
  feedbackContent.style.display = 'none';
}

function displayRequestContent(){

  homeMain.style.backgroundColor = '#94BD9F';
  profileMain.style.backgroundColor = '#94BD9F';
  requestMain.style.backgroundColor = '#387E9C';
  progressMain.style.backgroundColor = '#94BD9F';
  notificationMain.style.backgroundColor = '#94BD9F';
  feedbackMain.style.backgroundColor = '#94BD9F';

  homeContent.style.display = 'none';
  profileContent.style.display = 'none';
  requestContent.style.display = 'flex';
  progressContent.style.display = 'none';
  notificationContent.style.display = 'none';
  feedbackContent.style.display = 'none';
}

function displayProgressContent(){

  homeMain.style.backgroundColor = '#94BD9F';
  profileMain.style.backgroundColor = '#94BD9F';
  requestMain.style.backgroundColor = '#94BD9F';
  progressMain.style.backgroundColor = '#387E9C';
  notificationMain.style.backgroundColor = '#94BD9F';
  feedbackMain.style.backgroundColor = '#94BD9F';

  homeContent.style.display = 'none';
  profileContent.style.display = 'none';
  requestContent.style.display = 'none';
  progressContent.style.display = 'flex';
  notificationContent.style.display = 'none';
  feedbackContent.style.display = 'none';
}

function displayNotificationContent(){

  homeMain.style.backgroundColor = '#94BD9F';
  profileMain.style.backgroundColor = '#94BD9F';
  requestMain.style.backgroundColor = '#94BD9F';
  progressMain.style.backgroundColor = '#94BD9F';
  notificationMain.style.backgroundColor = '#387E9C';
  feedbackMain.style.backgroundColor = '#94BD9F';

  homeContent.style.display = 'none';
  profileContent.style.display = 'none';
  requestContent.style.display = 'none';
  progressContent.style.display = 'none';
  notificationContent.style.display = 'flex';
  feedbackContent.style.display = 'none';
}

function displayFeedbackContent(){

  homeMain.style.backgroundColor = '#94BD9F';
  profileMain.style.backgroundColor = '#94BD9F';
  requestMain.style.backgroundColor = '#94BD9F';
  progressMain.style.backgroundColor = '#94BD9F';
  notificationMain.style.backgroundColor = '#94BD9F';
  feedbackMain.style.backgroundColor = '#387E9C';

  homeContent.style.display = 'none';
  profileContent.style.display = 'none';
  requestContent.style.display = 'none';
  progressContent.style.display = 'none';
  notificationContent.style.display = 'none';
  feedbackContent.style.display = 'flex';
}

homeMain.onclick = displayHomeContent;
profileMain.onclick = displayProfileContent;
requestMain.onclick = displayRequestContent;
progressMain.onclick = displayProgressContent;
notificationMain.onclick = displayNotificationContent;
feedbackMain.onclick = displayFeedbackContent;

/* TOP NOTIFICATION NAVIGATION */

const notificationIcon = document.getElementById('notification_icon');
notificationIcon.onclick = displayNotificationContent;

/* HOME NAVIGATION KEYS */

const homeToRequest = document.getElementById('home_to_request');
const homeToProgress = document.getElementById('home_to_progress');
const homeToNotications = document.getElementById('home_to_notification');

homeToRequest.onclick = displayRequestContent;
homeToProgress.onclick = displayProgressContent;
homeToNotications.onclick = displayNotificationContent;


/* PROFILE FUNCTIONALITIES */

document.addEventListener("DOMContentLoaded", function() {
  const editIcon = document.getElementById("edit_icon");
  const saveButton = document.getElementById("profile_screen_save");
  const lastNameInput = document.getElementById("last_name");
  const firstNameInput = document.getElementById("first_name");
  const middleNameInput = document.getElementById("middle_name");
  const studentNumberInput = document.getElementById("user_student_number");
  const profileImage = document.getElementById("sample_profile");
  const sampleStudentNumber = document.getElementById("sample_student_number");
  const sampleStudentName = document.getElementById("sample_student_name");

  let savedStudentNumber = sampleStudentNumber.textContent;
  let savedStudentName = sampleStudentName.textContent;

  // Initialize input fields with saved values
  lastNameInput.value = savedStudentName.split(',')[0].trim();
  firstNameInput.value = savedStudentName.split(',')[1].trim().split(' ')[0];
  middleNameInput.value = savedStudentName.split(',')[1].trim().split(' ')[1];
  studentNumberInput.value = savedStudentNumber;

  // Disable all inputs and the save button initially
  makeInputsNonEditable();
  disableSaveButton();

  // Event listener for the edit icon
  editIcon.addEventListener("click", function() {
    // Make inputs editable
    makeInputsEditable();
    // Enable the save button
    enableSaveButton();
    // Restore input fields with saved values
    lastNameInput.value = savedStudentName.split(',')[0].trim();
    firstNameInput.value = savedStudentName.split(',')[1].trim().split(' ')[0];
    middleNameInput.value = savedStudentName.split(',')[1].trim().split(' ')[1];
    studentNumberInput.value = savedStudentNumber;
  });

  // Event listener for the save button
  saveButton.addEventListener("click", function() {
    if (studentNumberInput.value !== "") {
      sampleStudentNumber.textContent = studentNumberInput.value;
      savedStudentNumber = studentNumberInput.value;
    }

    const enteredName = `${lastNameInput.value}, ${firstNameInput.value} ${middleNameInput.value}`;
    if (enteredName !== ",  ") {
      sampleStudentName.textContent = enteredName;
      savedStudentName = enteredName;
    }

    makeInputsNonEditable(); // Make inputs non-editable
    disableSaveButton(); // Disable the save button
    profileImage.style.pointerEvents = "none"; // Disable clicking on the image
    saveButton.style.backgroundColor = "#96AC7E"; // Restore save button color
    //clearInputFields(); // Clear input fields
  });

  // Function to make inputs editable
  function makeInputsEditable() {
    const inputs = document.querySelectorAll("#profile_screen_body input, #profile_screen_body select");
    inputs.forEach(input => input.disabled = false);
  }

  // Function to make inputs non-editable
  function makeInputsNonEditable() {
    const inputs = document.querySelectorAll("#profile_screen_body input, #profile_screen_body select");
    inputs.forEach(input => input.disabled = true);
  }

  // Function to disable the save button
  function disableSaveButton() {
    saveButton.disabled = true;
  }

  // Function to clear input fields
  function clearInputFields() {
    lastNameInput.value = "";
    firstNameInput.value = "";
    middleNameInput.value = "";
    studentNumberInput.value = "";
  }
});

document.addEventListener("DOMContentLoaded", function() {
  const editIcon = document.getElementById("edit_icon");
  const saveButton = document.getElementById("profile_screen_save");
  const lastNameInput = document.getElementById("last_name");
  const firstNameInput = document.getElementById("first_name");
  const middleNameInput = document.getElementById("middle_name");
  const studentNumberInput = document.getElementById("user_student_number");
  const profileImage = document.getElementById("sample_profile");
  const sampleStudentNumber = document.getElementById("sample_student_number");
  const sampleStudentName = document.getElementById("sample_student_name");

  let savedStudentNumber = sampleStudentNumber.textContent;
  let savedStudentName = sampleStudentName.textContent;

  // Initialize input fields with saved values
  lastNameInput.value = savedStudentName.split(',')[0].trim();
  firstNameInput.value = savedStudentName.split(',')[1].trim().split(' ')[0];
  middleNameInput.value = savedStudentName.split(',')[1].trim().split(' ')[1];
  studentNumberInput.value = savedStudentNumber;

  // Disable all inputs and the save button initially
  makeInputsNonEditable();
  disableSaveButton();

  // Event listener for the edit icon
  editIcon.addEventListener("click", function() {
    // Make inputs editable
    makeInputsEditable();
    // Enable the save button
    enableSaveButton();
    // Restore input fields with saved values
    lastNameInput.value = savedStudentName.split(',')[0].trim();
    firstNameInput.value = savedStudentName.split(',')[1].trim().split(' ')[0];
    middleNameInput.value = savedStudentName.split(',')[1].trim().split(' ')[1];
    studentNumberInput.value = savedStudentNumber;
  });

  // Event listener for the save button
  saveButton.addEventListener("click", function() {
    if (studentNumberInput.value !== "") {
      sampleStudentNumber.textContent = studentNumberInput.value;
      savedStudentNumber = studentNumberInput.value;
    }

    const enteredName = `${lastNameInput.value}, ${firstNameInput.value} ${middleNameInput.value}`;
    if (enteredName !== ",  ") {
      sampleStudentName.textContent = enteredName;
      savedStudentName = enteredName;
    }

    makeInputsNonEditable(); // Make inputs non-editable
    disableSaveButton(); // Disable the save button
    profileImage.style.pointerEvents = "none"; // Disable clicking on the image
    saveButton.style.backgroundColor = "#96AC7E"; // Restore save button color
  });

  // Function to make inputs editable
  function makeInputsEditable() {
    const inputs = document.querySelectorAll("#profile_screen_body input, #profile_screen_body select");
    inputs.forEach(input => input.disabled = false);
  }

  // Function to make inputs non-editable
  function makeInputsNonEditable() {
    const inputs = document.querySelectorAll("#profile_screen_body input, #profile_screen_body select");
    inputs.forEach(input => input.disabled = true);
  }

  // Function to disable the save button
  function disableSaveButton() {
    saveButton.disabled = true;
  }

  // Function to clear input fields
  function clearInputFields() {
    lastNameInput.value = "";
    firstNameInput.value = "";
    middleNameInput.value = "";
    studentNumberInput.value = "";
  }
});

// INPUT DISABLING

document.addEventListener("DOMContentLoaded", function() {
  makeInputsNonEditable();
  disableSaveButton();

  document.getElementById("edit_icon").onclick = function() {
    makeInputsEditable();
    enableSaveButton();
  };

  document.getElementById("profile_screen_save").onclick = function() {
    makeInputsNonEditable();
    disableSaveButton();
  };
});

function makeInputsEditable() {
  const inputs = document.querySelectorAll("#profile_screen_body input, #profile_screen_body select");
  inputs.forEach(function(input) {
    input.disabled = false;
  });
}

function makeInputsNonEditable() {
  const inputs = document.querySelectorAll("#profile_screen_body input, #profile_screen_body select");
  inputs.forEach(function(input) {
    input.disabled = true;
  });
}

function disableSaveButton() {
  document.getElementById("profile_screen_save").disabled = true;
}

function enableSaveButton() {
  document.getElementById("profile_screen_save").disabled = false;
}

// CHANGE IMAGE 

document.addEventListener("DOMContentLoaded", function() {
  const editIcon = document.getElementById("edit_icon");
  const profileImage = document.getElementById("sample_profile");

  profileImage.style.pointerEvents = "none"; // Initially disable clicking on the image

  editIcon.addEventListener("click", function() {
    profileImage.style.pointerEvents = "auto"; // Enable clicking on the image
  });

  profileImage.addEventListener("click", function() {
    const input = document.createElement("input");
    input.type = "file";
    input.accept = "image/*";
    input.onchange = function(event) {
      const file = event.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(event) {
          profileImage.src = event.target.result;
        };
        reader.readAsDataURL(file);
      }
    };
    input.click();
  });
});

// COLOR MANIPULATION

document.addEventListener("DOMContentLoaded", function() {
  const editIcon = document.getElementById("edit_icon");
  const saveButton = document.getElementById("profile_screen_save");

  editIcon.addEventListener("click", function() {
    saveButton.style.backgroundColor = "#495F32"; // Change save button color
  });

  saveButton.addEventListener("click", function() {
    saveButton.style.backgroundColor = "#96AC7E"; // Restore save button color
  });
});

// MANIPULATE NAME 

document.addEventListener("DOMContentLoaded", function() {
  const saveButton = document.getElementById("profile_screen_save");
  const lastNameInput = document.getElementById("last_name");
  const firstNameInput = document.getElementById("first_name");
  const middleNameInput = document.getElementById("middle_name");
  const studentNumberInput = document.getElementById("user_student_number");
  const sampleStudentNumber = document.getElementById("sample_student_number");
  const sampleStudentName = document.getElementById("sample_student_name");

  let savedStudentNumber = sampleStudentNumber.textContent;
  let savedStudentName = sampleStudentName.textContent;

  saveButton.addEventListener("click", function() {
    // Update sample student number if user entered a new one
    if (studentNumberInput.value !== "") {
      sampleStudentNumber.textContent = studentNumberInput.value;
      savedStudentNumber = studentNumberInput.value;
    }

    // Update sample student name if user entered a new one
    const enteredName = `${lastNameInput.value}, ${firstNameInput.value} ${middleNameInput.value}`;
    if (enteredName !== ",  ") {
      sampleStudentName.textContent = enteredName;
      savedStudentName = enteredName;
    }

    saveButton.style.backgroundColor = "#96AC7E";
  });

  // Event listener to change the save button color when edit icon is clicked
  document.getElementById("edit_icon").addEventListener("click", function() {
    saveButton.style.backgroundColor = "#495F32";
  });

  // Event listener to restore the sample student number and name when edit icon is clicked
  document.getElementById("edit_icon").addEventListener("click", function() {
    sampleStudentNumber.textContent = savedStudentNumber;
    sampleStudentName.textContent = savedStudentName;
  });
});

// REQUEST TAB

// MAIN NAVIGATION TABS OF REQUEST TAB

const chooseDocumentButton = document.getElementById('choose_a_document_text');
const purposeRequestButton = document.getElementById('purpose_of_request_text');
const modeDeliveryButton = document.getElementById('mode_of_delivery_text');
const receiptRequestButton = document.getElementById('receipt_of_request_text');

const chooseDocumentContent = document.getElementById('choose_a_document_subtab');
const purposeRequestContent = document.getElementById('purpose_of_request_subtab');
const modeDeliveryContent = document.getElementById('mode_of_delivery_subtab');
const receiptRequestContent = document.getElementById('receipt_of_request_subtab');

function displayChooseDocumentContent(){

  chooseDocumentContent.style.display = 'flex';
  purposeRequestContent.style.display = 'none';
  modeDeliveryContent.style.display = 'none';
  receiptRequestContent.style.display = 'none';

  chooseDocumentButton.style.backgroundColor = '#FFFFFC';
  purposeRequestButton.style.backgroundColor = '#D6E4D0';
  modeDeliveryButton.style.backgroundColor = '#D6E4D0';
  receiptRequestButton.style.backgroundColor = '#D6E4D0';
}

function displayPurposeRequestContent(){

  chooseDocumentContent.style.display = 'none';
  purposeRequestContent.style.display = 'flex';
  modeDeliveryContent.style.display = 'none';
  receiptRequestContent.style.display = 'none';

  chooseDocumentButton.style.backgroundColor = '#D6E4D0';
  purposeRequestButton.style.backgroundColor = '#FFFFFC';
  modeDeliveryButton.style.backgroundColor = '#D6E4D0';
  receiptRequestButton.style.backgroundColor = '#D6E4D0';
}


function displayModeDeliveryContent(){

  chooseDocumentContent.style.display = 'none';
  purposeRequestContent.style.display = 'none';
  modeDeliveryContent.style.display = 'flex';
  receiptRequestContent.style.display = 'none';

  chooseDocumentButton.style.backgroundColor = '#D6E4D0';
  purposeRequestButton.style.backgroundColor = '#D6E4D0';
  modeDeliveryButton.style.backgroundColor = '#FFFFFC';
  receiptRequestButton.style.backgroundColor = '#D6E4D0';
}

function displayReceiptRequestContent(){

  chooseDocumentContent.style.display = 'none';
  purposeRequestContent.style.display = 'none';
  modeDeliveryContent.style.display = 'none';
  receiptRequestContent.style.display = 'flex';

  chooseDocumentButton.style.backgroundColor = '#D6E4D0';
  purposeRequestButton.style.backgroundColor = '#D6E4D0';
  modeDeliveryButton.style.backgroundColor = '#D6E4D0';
  receiptRequestButton.style.backgroundColor = '#FFFFFC';
}

chooseDocumentButton.onclick = displayChooseDocumentContent;
purposeRequestButton.onclick = displayPurposeRequestContent;
modeDeliveryButton.onclick = displayModeDeliveryContent;
receiptRequestButton.onclick = displayReceiptRequestContent;


// OTHERS ARE UNCLICKABLE BY DEFAULT

const purposeClickable = document.getElementById('purpose_of_request_text');
const modeClickable = document.getElementById('mode_of_delivery_text');
const receiptClickable = document.getElementById('receipt_of_request_text');

purposeClickable.style.pointerEvents = 'none';
modeClickable.style.pointerEvents = 'none';
receiptClickable.style.pointerEvents = 'none';

// CHOOSE A DOCUMENT SUBTAB

/* ADDITIONAL INFO */

/* I BUTTONS*/

const goodMoralInfoButton = document.getElementById('good_moral_info');
const form137InfoButton = document.getElementById('Form137A_info');
const COGInfoButton = document.getElementById('COG_info');

/* INFORMATION TO DISPLAY */
const goodMoralAdditionalInfo = document.getElementById('good_moral_additional_information');
const form137AdditionalInfo = document.getElementById('form137_additional_information');
const COGAdditionalInfo = document.getElementById('COG_additional_information');

/* CLOSE BUTTONS */

const goodMoralClose = document.getElementById('good_moral_close');
const form137Close = document.getElementById('form137_close');
const COGClose = document.getElementById('COG_close');

function displayExtraGoodMoral(){

  chooseDocumentContent.style.display = 'none';

  goodMoralAdditionalInfo.style.display = 'flex';
  form137AdditionalInfo.style.display = 'none';
  COGAdditionalInfo.style.display = 'none';
}

function closeExtraGoodMoral(){

  chooseDocumentContent.style.display = 'flex';

  goodMoralAdditionalInfo.style.display = 'none';
  form137AdditionalInfo.style.display = 'none';
  COGAdditionalInfo.style.display = 'none';
}

function displayExtraForm137(){

  chooseDocumentContent.style.display = 'none';

  goodMoralAdditionalInfo.style.display = 'none';
  form137AdditionalInfo.style.display = 'flex';
  COGAdditionalInfo.style.display = 'none';
}

function closeExtraForm137(){

  chooseDocumentContent.style.display = 'flex';

  goodMoralAdditionalInfo.style.display = 'none';
  form137AdditionalInfo.style.display = 'none';
  COGAdditionalInfo.style.display = 'none';
}

function displayExtraCOG(){

  chooseDocumentContent.style.display = 'none';

  goodMoralAdditionalInfo.style.display = 'none';
  form137AdditionalInfo.style.display = 'none';
  COGAdditionalInfo.style.display = 'flex';
}

function closeExtraCOG(){

  chooseDocumentContent.style.display = 'flex';

  goodMoralAdditionalInfo.style.display = 'none';
  form137AdditionalInfo.style.display = 'none';
  COGAdditionalInfo.style.display = 'none';
}

goodMoralInfoButton.onclick = displayExtraGoodMoral;
goodMoralClose.onclick = closeExtraGoodMoral;

form137InfoButton.onclick = displayExtraForm137;
form137Close.onclick = closeExtraForm137;

COGInfoButton.onclick = displayExtraCOG;
COGClose.onclick = closeExtraCOG;

/* COUNTERS */

const documentsChosen = document.getElementById('documents_chosen_count')
const currentAmountCount = document.getElementById('current_amount_count')

const goodMoral = document.getElementById('good_moral_certificate');
const form137A = document.getElementById('Form137A');
const COG = document.getElementById('COG')

const goodMoralCount = document.getElementById('good_moral_counter');
const goodMoralPlus = document.getElementById('good_moral_plus');
const goodMoralMinus = document.getElementById('good_moral_minus');

const form137ACount = document.getElementById('Form137A_counter');
const form137APlus = document.getElementById('Form137A_plus');
const form137AMinus = document.getElementById('Form137A_minus');

const COGCount = document.getElementById('COG_counter');
const COGPlus = document.getElementById('COG_plus');
const COGMinus = document.getElementById('COG_minus');

const finalChooseButton = document.getElementById('choose_documents_button');
const documentChosen = document.getElementById('documents_count');
const currentAmount = document.getElementById('current_amount');

// COLOR UPDATER FUNCTIONS

function updateGoodMoralColor(count) {
  if (count >= 1) {
    goodMoral.style.backgroundColor = '#6AA47A';
  } else {
    goodMoral.style.backgroundColor = '';
  } 
}

function updateForm137Color(count) {
  if (count >= 1) {
    form137A.style.backgroundColor = '#6AA47A';
  } else {
    form137A.style.backgroundColor = '';
  } 
}

function updateCOGColor(count) {
  if (count >= 1) {
    COG.style.backgroundColor = '#6AA47A';
  } else {
    COG.style.backgroundColor = '';
  } 
}

function updateFinalChooseButton(count) {
  if (count >= 1) {
    finalChooseButton.style.backgroundColor = '#6AA47A';
    documentChosen.style.backgroundColor = '#6AA47A';
    currentAmount.style.backgroundColor = '#6AA47A';
    finalChooseButton.disabled = false; 
  } else {
    finalChooseButton.style.backgroundColor = '';
    documentChosen.style.backgroundColor = '';
    currentAmount.style.backgroundColor = '';
    finalChooseButton.disabled = true; 
  } 
}

function moveToRequestPurpose(){

  purposeClickable.style.pointerEvents = 'auto';

  const goodMoralPurpose = document.getElementById('purpose_good_moral');
  const form137Purpose = document.getElementById('purpose_form137'); 
  const COGPurpose = document.getElementById('purpose_COG');  

  function checkGoodMoralCount() {
    if (parseInt(goodMoralCount.innerHTML) > 0) {
      goodMoralPurpose.style.display = 'flex';
    } else {
      goodMoralPurpose.style.display = 'none';                      
    }
  }

  function checkform137Count() {
    if (parseInt(form137ACount.innerHTML) > 0) {
      form137Purpose.style.display = 'flex';
    } else {
      form137Purpose.style.display = 'none';
    }
  }

  function checkCOGCount() {
    if (parseInt(COGCount.innerHTML) > 0) {
      COGPurpose.style.display = 'flex';
    } else {
      COGPurpose.style.display = 'none';
    }
  }
  checkGoodMoralCount();
  checkform137Count();
  checkCOGCount();
}

// GOOD MORAL COUNTERS

goodMoralPlus.onclick = function(){
  let goodMoralCurrentCount = parseInt(goodMoralCount.innerHTML);
  goodMoralCount.innerHTML = goodMoralCurrentCount + 1;

  let goodMoralChosen = parseInt(documentsChosen.innerHTML);
  documentsChosen.innerHTML = goodMoralChosen + 1; 

  let goodMoralAmountCount = parseInt(currentAmountCount.innerHTML);
  currentAmountCount.innerHTML = goodMoralAmountCount + 30

  updateGoodMoralColor(goodMoralCurrentCount + 1);
  updateFinalChooseButton(parseInt(currentAmountCount.innerHTML));
}

goodMoralMinus.onclick = function() {
  let goodMoralCurrentCount = parseInt(goodMoralCount.innerHTML);

  if (goodMoralCurrentCount > 0) {
    goodMoralCount.innerHTML = goodMoralCurrentCount - 1;

    let goodMoralChosen = parseInt(documentsChosen.innerHTML);
    documentsChosen.innerHTML = goodMoralChosen - 1;

    let goodMoralAmountCount = parseInt(currentAmountCount.innerHTML);
    currentAmountCount.innerHTML = goodMoralAmountCount - 30;
  }

  updateGoodMoralColor(goodMoralCurrentCount - 1);
  updateFinalChooseButton(parseInt(currentAmountCount.innerHTML));

}

updateGoodMoralColor(parseInt(goodMoralCount.innerHTML));

// FORM 137 COUNTERS

form137APlus.onclick = function(){
  let form137ACurrentCount = parseInt(form137ACount.innerHTML);
  form137ACount.innerHTML = form137ACurrentCount + 1;

  let form137AChosen = parseInt(documentsChosen.innerHTML);
  documentsChosen.innerHTML = form137AChosen + 1; 

  let form137AAmountCount = parseInt(currentAmountCount.innerHTML);
  currentAmountCount.innerHTML = form137AAmountCount + 20

  updateForm137Color(form137ACurrentCount + 1);
  updateFinalChooseButton(parseInt(currentAmountCount.innerHTML));
}

form137AMinus.onclick = function() {
  let form137ACurrentCount = parseInt(form137ACount.innerHTML);

  if (form137ACurrentCount > 0) {
    form137ACount.innerHTML = form137ACurrentCount - 1;

    let form137AChosen = parseInt(documentsChosen.innerHTML);
    documentsChosen.innerHTML = form137AChosen - 1;

    let form137AAmountCount = parseInt(currentAmountCount.innerHTML);
    currentAmountCount.innerHTML = form137AAmountCount - 20;
  }

  updateForm137Color(form137ACurrentCount - 1);
  updateFinalChooseButton(parseInt(currentAmountCount.innerHTML));
}

updateForm137Color(parseInt(form137ACount.innerHTML));

// COG COUNTERS

COGPlus.onclick = function(){
  let COGCurrentCount = parseInt(COGCount.innerHTML);
  COGCount.innerHTML = COGCurrentCount + 1;

  let COGChosen = parseInt(documentsChosen.innerHTML);
  documentsChosen.innerHTML = COGChosen + 1; 

  let COGAmountCount = parseInt(currentAmountCount.innerHTML);
  currentAmountCount.innerHTML = COGAmountCount + 50

  updateCOGColor(COGCurrentCount + 1);
  updateFinalChooseButton(parseInt(currentAmountCount.innerHTML));
}

COGMinus.onclick = function() {
  let COGCurrentCount = parseInt(COGCount.innerHTML);

  if (COGCurrentCount > 0) {
    COGCount.innerHTML = COGCurrentCount - 1;

    let COGChosen = parseInt(documentsChosen.innerHTML);
    documentsChosen.innerHTML = COGChosen - 1;

    let COGAmountCount = parseInt(currentAmountCount.innerHTML);
    currentAmountCount.innerHTML = COGAmountCount - 50;
  }

  updateCOGColor(COGCurrentCount - 1);
  updateFinalChooseButton(parseInt(currentAmountCount.innerHTML));
}

updateCOGColor(parseInt(COGCount.innerHTML));
updateFinalChooseButton(parseInt(currentAmountCount.innerHTML));

finalChooseButton.onclick = function() {
  displayPurposeRequestContent();
  moveToRequestPurpose();
};

// PURPOSE OF REQUEST

const goodMoralPurposeInput = document.getElementById('good_moral_purpose_input');
const goodMoralPurposeEntry = document.getElementById('good_moral_purpose_entry');
const goodMoralPurposeReason = document.getElementById('good_moral_purpose_reason');
const goodMoralPurposeSubmit = document.getElementById('good_moral_purpose_submit');
const goodMoralPurposeBackgroundColor = document.getElementById('purpose_good_moral');
const goodMoralPurposeFilled = document.getElementById('good_moral_no_purpose');

goodMoralPurposeSubmit.disabled = true;

goodMoralPurposeEntry.onclick = function() {
  goodMoralPurposeInput.style.display = 'flex';
  goodMoralPurposeReason.oninput = function(){
    goodMoralPurposeSubmit.disabled = false;

  goodMoralPurposeSubmit.onclick = function(){
    goodMoralPurposeInput.style.display = 'none';
    goodMoralPurposeBackgroundColor.style.backgroundColor = '#6AA47A'
    goodMoralPurposeFilled.src = 'images/check_icon.png'
  }
}}

const form137PurposeInput = document.getElementById('form137_purpose_input');
const form137PurposeEntry = document.getElementById('form137_purpose_entry');
const form137PurposeReason = document.getElementById('form137_purpose_reason');
const form137PurposeSubmit = document.getElementById('form137_purpose_submit');
const form137PurposeBackgroundColor = document.getElementById('purpose_form137');
const form137PurposeFilled = document.getElementById('form137_no_purpose');

form137PurposeSubmit.disabled = true;

form137PurposeEntry.onclick = function() {
  form137PurposeInput.style.display = 'flex';
  form137PurposeReason.oninput = function(){
    form137PurposeSubmit.disabled = false;

  form137PurposeSubmit.onclick = function(){
    form137PurposeInput.style.display = 'none';
    form137PurposeBackgroundColor.style.backgroundColor = '#6AA47A'
    form137PurposeFilled.src = 'images/check_icon.png'
  }
  }
}

const COGPurposeInput = document.getElementById('COG_purpose_input');
const COGPurposeEntry = document.getElementById('COG_purpose_entry');
const COGPurposeReason = document.getElementById('COG_purpose_reason');
const COGPurposeSubmit = document.getElementById('COG_purpose_submit');
const COGPurposeBackgroundColor = document.getElementById('purpose_COG');
const COGPurposeFilled = document.getElementById('COG_no_purpose');

COGPurposeSubmit.disabled = true;

COGPurposeEntry.onclick = function() {
  COGPurposeInput.style.display = 'flex';
  COGPurposeReason.oninput = function(){
    COGPurposeSubmit.disabled = false;

  COGPurposeSubmit.onclick = function(){
    COGPurposeInput.style.display = 'none';
    COGPurposeBackgroundColor.style.backgroundColor = '#6AA47A'
    COGPurposeFilled.src = 'images/check_icon.png'
  }
  }
};

