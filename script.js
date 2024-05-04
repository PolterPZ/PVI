
let ParentElem = document.getElementById("notifyPop__list");
let Notify = document.getElementById("_active-notify");

function toggle() {
  let notify = document.getElementById("notifyPop");
  let user = document.getElementById("userPop");
  let popup = document.getElementById("closePop");
  let overlay = document.getElementById("overlay");
  popup.classList.toggle("show");
  overlay.classList.toggle("show");
  user.classList.add("userPop_toggle");
  notify.classList.add("notifyPop_toggle");
}
function mainBtn() {
  let notify = document.getElementById("notifyPop");
  let user = document.getElementById("userPop");
  let popup = document.getElementById("mainPop");
  let overlay = document.getElementById("overlay");

  popup.classList.toggle("show");
  overlay.classList.toggle("show");
  user.classList.add("userPop_toggle");
  notify.classList.add("notifyPop_toggle");
}
function editBtn() {
  let notify = document.getElementById("notifyPop");
  let user = document.getElementById("userPop");
  let popup = document.getElementById("editPop");
  let overlay = document.getElementById("overlay");

  popup.classList.toggle("show");
  overlay.classList.toggle("show");
  user.classList.add("userPop_toggle");
  notify.classList.add("notifyPop_toggle");
}
function closeBtn() {
  let notify = document.getElementById("notifyPop");
  let user = document.getElementById("userPop");
  let popup = document.getElementById("closePop");
  let overlay = document.getElementById("overlay");

  popup.classList.toggle("show");
  overlay.classList.toggle("show");
  user.classList.add("userPop_toggle");
  notify.classList.add("notifyPop_toggle");
}

let parentBlock = 0;
function closeBtnArg(button) {
  let title = document.getElementsByClassName("closePop__body");
  parentBlock = button.closest(".table-main__row");
  let m = parentBlock.children;
  title[0].textContent = "Are sure you want to delete " + m[2].textContent;
  toggle();
}

function deleteBtn() {
  parentBlock.remove();
  parentBlock = 0;
  toggle();
}

function addBtn() {
  let svgEdit = document.createElementNS("http://www.w3.org/2000/svg", "svg");
  svgEdit.setAttribute("class", "w-6 h-6 text-gray-800 dark:text-white");
  svgEdit.setAttribute("aria-hidden", "true");
  svgEdit.setAttribute("xmlns", "http://www.w3.org/2000/svg");
  svgEdit.setAttribute("fill", "none");
  svgEdit.setAttribute("viewBox", "0 0 24 24");

  // Create path element
  let pathEdit = document.createElementNS("http://www.w3.org/2000/svg", "path");
  pathEdit.setAttribute("stroke", "currentColor");
  pathEdit.setAttribute("stroke-linecap", "round");
  pathEdit.setAttribute("stroke-linejoin", "round");
  pathEdit.setAttribute("stroke-width", "2");
  pathEdit.setAttribute(
    "d",
    "m10.8 17.8-6.4 2.1 2.1-6.4m4.3 4.3L19 9a3 3 0 0 0-4-4l-8.4 8.6m4.3 4.3-4.3-4.3m2.1 2.1L15 9.1m-2.1-2 4.2 4.2"
  );

  // Append path to SVG
  svgEdit.appendChild(pathEdit);

  ////////////////////////////////////////////////////////////////////////////////////////////////////

  let svgClose = document.createElementNS("http://www.w3.org/2000/svg", "svg");
  svgClose.setAttribute("class", "w-6 h-6 text-gray-800 dark:text-white");
  svgClose.setAttribute("aria-hidden", "true");
  svgClose.setAttribute("xmlns", "http://www.w3.org/2000/svg");
  svgClose.setAttribute("fill", "none");
  svgClose.setAttribute("viewBox", "0 0 24 24");

  let path = document.createElementNS("http://www.w3.org/2000/svg", "path");
  path.setAttribute("stroke", "currentColor");
  path.setAttribute("stroke-linecap", "round");
  path.setAttribute("stroke-linejoin", "round");
  path.setAttribute("stroke-width", "2");
  path.setAttribute("d", "M6 18 18 6m0 12L6 6");
  svgClose.appendChild(path);

  let popup = document.getElementById("mainPop");
  let overlay = document.getElementById("overlay");
  let table = document.getElementById("myTable");
  popup.classList.toggle("show");
  overlay.classList.toggle("show");

  let selectGroup = document.getElementById("mainGroup");
  let fName = document.getElementById("mainfName");
  let lName = document.getElementById("mainlName");
  let gender = document.getElementById("mainGenderSelect");
  let birthday = document.getElementById("mainBirthdaySelect");

  let checkbox = document.createElement("input");
  checkbox.type = "checkbox";
  checkbox.id = "myCheckbox";
  checkbox.className = "table-main__checkbox";

  let status = document.createElement("div");
  status.classList = "_status";

  let edit = document.createElement("button");
  edit.classList = "table-main__btn _edit";
  edit.appendChild(svgEdit);
  edit.onclick = function () {
    editBtn(thisObj);
  };

  let close = document.createElement("button");
  close.classList = "table-main__btn _close";
  close.appendChild(svgClose);
  close.onclick = function () {
    closeBtnArg(this);
  };

  let fullName = { value: fName.value + " " + lName.value };
  let fullGroup = { value: "PZ-" + selectGroup.value };
  let inputTableCells = [fullGroup, fullName, gender, birthday];
  let selectTableSells = [status, edit, close];

  var newRow = table.insertRow();
  newRow.classList = "table-main__row";

  var cell = newRow.insertCell();
  cell.classList = "table-main__col";

  cell.appendChild(checkbox);
  for (let i = 0; i < inputTableCells.length; i++) {
    var cell = newRow.insertCell();
    cell.classList = "table-main__col";
    if (inputTableCells[i] === birthday) {
      cell.textContent = inputTableCells[i].value
        .split("-")
        .reverse()
        .join(".");
    } else cell.textContent = inputTableCells[i].value;
  }
  cell = newRow.insertCell();
  cell.classList = "table-main__col";
  cell.appendChild(selectTableSells[0]);
  cell = newRow.insertCell();
  cell.classList = "table-main__col";
  cell.appendChild(selectTableSells[1]);
  cell.appendChild(selectTableSells[2]);
}

function notifyBtn() {
  let notify = document.getElementById("notifyPop");
  let user = document.getElementById("userPop");

  notify.classList.toggle("notifyPop_toggle");
  user.classList.add("userPop_toggle");
}

function userBtn() {
  let user = document.getElementById("userPop");
  let notify = document.getElementById("notifyPop");

  user.classList.toggle("userPop_toggle");
  notify.classList.add("notifyPop_toggle");
}

if (ParentElem.children.length === 0) {
  Notify.classList.remove("_active-notify");
} else {
  Notify.classList.add("_active-notify");
}

