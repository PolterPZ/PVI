<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Klymenko Mykuta. Lab_2" />
    <meta name="theme-color" content="#317EFB" />
    <!-- <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" /> -->
    <!-- <link rel="manifest" href="/manifest.json" /> -->

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/template.css" />

    <title>Лабораторна №1</title>
  </head>
  <body>

   

    <div class="overlay" id="overlay"></div>
    <header class="hedaer">
      <a href="" class="header__logo"> CMS </a>
      <div class="header__info">
        <button
          onclick="notifyBtn()"
          id="header__notify"
          aria-label="Notification list button"
          class="header__notify"
        >
          <div class="_active-notify" id="_active-notify"></div>
          <svg
            class="w-6 h-6 text-gray-800 dark:text-white"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
          >
            <path
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M12 5.4V3m0 2.4a5.3 5.3 0 0 1 5.1 5.3v1.8c0 2.4 1.9 3 1.9 4.2 0 .6 0 1.3-.5 1.3h-13c-.5 0-.5-.7-.5-1.3 0-1.2 1.9-1.8 1.9-4.2v-1.8A5.3 5.3 0 0 1 12 5.4ZM8.7 18c.1.9.3 1.5 1 2.1a3.5 3.5 0 0 0 4.6 0c.7-.6 1.3-1.2 1.4-2.1h-7Z"
            />
          </svg>
        </button>
        <button
          onclick="userBtn()"
          aria-label="Profile settings button"
          class="header__account account-header"
        >
          <span class="account-header__logo">
            <svg
              class="w-6 h-6 text-gray-800 dark:text-white"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
            >
              <path
                stroke="currentColor"
                stroke-width="2"
                d="M7 17v1c0 .6.4 1 1 1h8c.6 0 1-.4 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
              />
            </svg>
          </span>
          <span class="account-header__nickname">Mykyta Klymenko</span>
        </button>
      </div>
    </header>
    <main class="main">
      <aside class="main__aside aside-main">
        <ul class="aside-main__list">
          <li class="aside-main__item"><a href="#">Dashboard</a></li>
          <li class="aside-main__item _active"><a href="#">Students</a></li>
          <li class="aside-main__item"><a href="#">Tasks</a></li>
        </ul>
      </aside>
      <section class="main__container">
        <div class="main__header">
          <h1 class="main__title">Students</h1>
          <button
            class="main__btn button-flow-animation"
            id="mainAddStudent"
            aria-label="Add student to the table button"
            onclick="mainBtn(this)"
            type="button"
          >
            <svg
              class="w-6 h-6 text-gray-800 dark:text-white"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M5 12h14m-7 7V5"
              />
            </svg>
          </button>
        </div>
        <table class="main__table table-main" id="myTable">
          <thead class="table-main__header">
            <tr class="table-main__row">
              <td class="table-main__col">
                <input type="checkbox" name="checkbox" id="checkbox" />
              </td>
              <td class="table-main__col">Group</td>
              <td class="table-main__col">
                <label for="checkbox">Name</label>
              </td>
              <td class="table-main__col">Gender</td>
              <td class="table-main__col">Birthday</td>
              <td class="table-main__col">Status</td>
              <td class="table-main__col">Options</td>
            </tr>
          </thead>
          <tbody class="table-main__body">
            <tr class="table-main__row">
              <td class="table-main__col">
                <input
                  type="checkbox"
                  class="table-main__checkbox"
                  name="checkbox1"
                  id="checkbox1"
                />
              </td>
              <td class="table-main__col">PZ-26</td>
              <td class="table-main__col">
                <label for="checkbox1">Mykyta Klymenko</label>
              </td>
              <td class="table-main__col">M</td>
              <td class="table-main__col">
                <span>11</span><span>.</span><span>05</span><span>.</span
                ><span>2004</span>
              </td>
              <td class="table-main__col"><div class="_status"></div></td>
              <td class="table-main__col">
                <button
                  class="table-main__btn _edit"
                  aria-label="Edit Student in table"
                  onclick="editBtn(this)"
                  type="button"
                >
                  <svg
                    class="w-6 h-6 text-gray-800 dark:text-white"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="m10.8 17.8-6.4 2.1 2.1-6.4m4.3 4.3L19 9a3 3 0 0 0-4-4l-8.4 8.6m4.3 4.3-4.3-4.3m2.1 2.1L15 9.1m-2.1-2 4.2 4.2"
                    />
                  </svg>
                </button>
                <button
                  class="table-main__btn _edit"
                  aria-label="Delete student from table"
                  onclick="closeBtnArg(this)"
                  type="button"
                >
                  <svg
                    class="w-6 h-6 text-gray-800 dark:text-white"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M6 18 18 6m0 12L6 6"
                    />
                  </svg>
                </button>
              </td>
            </tr>
            <tr class="table-main__row">
              <td class="table-main__col">
                <input type="checkbox" name="checkbox2" id="checkbox2" />
              </td>
              <td class="table-main__col">PZ-26</td>
              <td class="table-main__col">
                <label for="checkbox2">Mykyta Klymenko</label>
              </td>
              <td class="table-main__col">M</td>
              <td class="table-main__col">
                <span>11</span><span>.</span><span>05</span><span>.</span
                ><span>2004</span>
              </td>
              <td class="table-main__col"><div class="_status"></div></td>
              <td class="table-main__col">
                <button
                  class="table-main__btn _edit"
                  aria-label="Edit Student in table"
                  type="button"
                  onclick="editBtn(this)"
                >
                  <svg
                    class="w-6 h-6 text-gray-800 dark:text-white"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="m10.8 17.8-6.4 2.1 2.1-6.4m4.3 4.3L19 9a3 3 0 0 0-4-4l-8.4 8.6m4.3 4.3-4.3-4.3m2.1 2.1L15 9.1m-2.1-2 4.2 4.2"
                    />
                  </svg>
                </button>
                <button
                  class="table-main__btn _edit"
                  aria-label="Delete student from table"
                  type="button"
                  onclick="closeBtnArg(this)"
                >
                  <svg
                    class="w-6 h-6 text-gray-800 dark:text-white"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M6 18 18 6m0 12L6 6"
                    />
                  </svg>
                </button>
              </td>
            </tr>
            <tr class="table-main__row">
              <td class="table-main__col">
                <input type="checkbox" name="checkbox3" id="checkbox3" />
              </td>
              <td class="table-main__col">PZ-26</td>
              <td class="table-main__col">
                <label for="checkbox3">Mykyta Klymenko</label>
              </td>
              <td class="table-main__col">M</td>
              <td class="table-main__col">
                <span>11</span><span>.</span><span>05</span><span>.</span
                ><span>2004</span>
              </td>
              <td class="table-main__col"><div class="_status"></div></td>
              <td class="table-main__col">
                <button
                  class="table-main__btn _edit"
                  aria-label="Edit Student in table"
                  type="button"
                  onclick="editBtn(this)"
                >
                  <svg
                    class="w-6 h-6 text-gray-800 dark:text-white"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="m10.8 17.8-6.4 2.1 2.1-6.4m4.3 4.3L19 9a3 3 0 0 0-4-4l-8.4 8.6m4.3 4.3-4.3-4.3m2.1 2.1L15 9.1m-2.1-2 4.2 4.2"
                    />
                  </svg>
                </button>
                <button
                  class="table-main__btn _edit"
                  aria-label="Delete student from table"
                  type="button"
                  onclick="closeBtnArg(this)"
                >
                  <svg
                    class="w-6 h-6 text-gray-800 dark:text-white"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M6 18 18 6m0 12L6 6"
                    />
                  </svg>
                </button>
              </td>
            </tr>
            <tr class="table-main__row">
              <td class="table-main__col">
                <input type="checkbox" name="checkbox4" id="checkbox4" />
              </td>
              <td class="table-main__col">PZ-26</td>
              <td class="table-main__col">
                <label for="checkbox4">Mykyta Klymenko</label>
              </td>
              <td class="table-main__col">M</td>
              <td class="table-main__col">
                <span>11</span><span>.</span><span>05</span><span>.</span
                ><span>2004</span>
              </td>
              <td class="table-main__col">
                <div class="_status _active-status"></div>
              </td>
              <td class="table-main__col">
                <button
                  class="table-main__btn _edit"
                  aria-label="Edit Student in table"
                  type="button"
                  onclick="editBtn(this)"
                >
                  <svg
                    class="w-6 h-6 text-gray-800 dark:text-white"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="m10.8 17.8-6.4 2.1 2.1-6.4m4.3 4.3L19 9a3 3 0 0 0-4-4l-8.4 8.6m4.3 4.3-4.3-4.3m2.1 2.1L15 9.1m-2.1-2 4.2 4.2"
                    />
                  </svg>
                </button>
                <button
                  class="table-main__btn _edit"
                  aria-label="Delete student from table"
                  type="button"
                  onclick="closeBtnArg(this)"
                >
                  <svg
                    class="w-6 h-6 text-gray-800 dark:text-white"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M6 18 18 6m0 12L6 6"
                    />
                  </svg>
                </button>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="table-main__navegation nav-table-main">
          <button
            class="nav-table-main__leftArrow"
            aria-label="Open previous page of table"
          >
            <svg
              class="w-6 h-6 text-gray-800 dark:text-white"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M5 12h14M5 12l4-4m-4 4 4 4"
              />
            </svg>
          </button>
          <div class="nav-table-main__body">
            <button aria-label="page 1" class="nav-table-main__link">1</button>
            <button aria-label="page 2" class="nav-table-main__link">2</button>
            <button aria-label="page 3" class="nav-table-main__link">3</button>
          </div>
          <button
            class="nav-table-main__rightArrow"
            aria-label="Open next page of table"
          >
            <svg
              class="w-6 h-6 text-gray-800 dark:text-white"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M19 12H5m14 0-4 4m4-4-4-4"
              />
            </svg>
          </button>
        </div>
      </section>
    </main>

    <div class="mainPop" id="mainPop">
      <div class="mainPop__header">
        <h2 class="mainPop__title">Add Student</h2>
        <button type="button" class="mainPop__closeBtn" onclick="mainBtn()">
          X
        </button>
      </div>

      <div class="_line"></div>

      <div class="mainPop__body">
        <div class="mainPop__form">
          <label for="mainGroup" class="mainPop__label">Group</label>
          <select name="mainSelectGroup" class="mainPop__select" id="mainGroup">
            <option value="21" class="mainPop__option">21</option>
            <option value="22" class="mainPop__option">22</option>
            <option value="23" class="mainPop__option">23</option>
            <option value="24" class="mainPop__option">24</option>
            <option value="25" class="mainPop__option">25</option>
            <option value="26" class="mainPop__option">26</option>
            <option value="27" class="mainPop__option">27</option>
          </select>
        </div>
        <div class="mainPop__form">
          <label for="mainfName" class="mainPop__label">First Name</label>
          <input
            type="text"
            class="mainPop__input"
            name="formFirstName"
            id="mainfName"
          />
        </div>
        <div class="mainPop__form">
          <label for="mainlName" class="mainPop__label">Last Name</label>
          <input
            type="text"
            class="mainPop__input"
            name="formLastName"
            id="mainlName"
          />
        </div>
        <div class="mainPop__form">
          <label for="mainGenderSelect" class="mainPop__label">Gender</label>
          <select
            name="selectGroup"
            class="mainPop__select"
            id="mainGenderSelect"
          >
            <option value="M" class="mainPop__option">M</option>
            <option value="F" class="mainPop__option">F</option>
            <option value="AH" class="mainPop__option">
              Attack Helicopter
            </option>
          </select>
        </div>
        <div class="mainPop__form">
          <label for="birthday" class="mainPop__label">Birthday</label>
          <input
            name="selectBirthday"
            class="mainPop__select"
            id="mainBirthdaySelect"
            type="date"
          />
        </div>
      </div>
      <div class="_line"></div>
      <div class="mainPop__footer">
        <button type="button" class="mainPop__ok" onclick="mainBtn()">
          Ok
        </button>
        <button type="button" class="mainPop__create" onclick="addBtn()">
          Create
        </button>
      </div>
    </div>
    <div class="editPop" id="editPop">
      <div class="editPop__header">
        <h2 class="editPop__title">Edit Student</h2>
        <button type="button" class="editPop__closeBtn" onclick="editBtn(this)">
          X
        </button>
      </div>

      <div class="_line"></div>

      <div class="editPop__body">
        <div class="editPop__form">
          <label for="group" class="editPop__label">Group</label>
          <select name="#" class="editPop__select" id="group">
            <option value="1" class="editPop__option">1</option>
            <option value="2" class="editPop__option">1</option>
            <option value="3" class="editPop__option">1</option>
          </select>
        </div>
        <div class="editPop__form">
          <label for="fName" class="editPop__label">First Name</label>
          <input type="text" class="editPop__input" name="#" id="fName" />
        </div>
        <div class="mainPop__form">
          <label for="lName" class="editPop__label">Last Name</label>
          <input type="text" class="editPop__input" name="#" id="lName" />
        </div>
        <div class="mainPop__form">
          <label for="gender" class="editPop__label">Gender</label>
          <select name="#" class="editPop__select" id="gender">
            <option value="1" class="editPop__option">M</option>
            <option value="2" class="editPop__option">F</option>
            <option value="3" class="editPop__option">Attack Helicopter</option>
          </select>
        </div>
        <div class="editPop__form">
          <label for="birthday" class="editPop__label">Birthday</label>
          <input name="#" class="editPop__select" id="birthday" type="date" />
        </div>
      </div>
      <div class="_line"></div>
      <div class="editPop__footer">
        <button type="button" class="editPop__ok" onclick="editBtn(this)">
          Ok
        </button>
        <button type="button" class="editPop__create" onclick="editBtn(this)">
          Save
        </button>
      </div>
    </div>

   

    <div class="closePop" id="closePop">
      <div class="closePop__header">
        <h2 class="closePop__title">Edit Student</h2>
        <button type="button" class="closePop__closeBtn" onclick="closeBtn()">
          X
        </button>
      </div>

      <div class="_line"></div>

      <div class="closePop__body">Are you sure you want to delete :LKSD</div>
      <div class="_line"></div>
      <div class="closePop__footer">
        <button type="button" class="closePop__ok" onclick="deleteBtn()">
          Ok
        </button>
        <button type="button" class="closePop__create" onclick="closeBtn()">
          Cancel
        </button>
      </div>
    </div>
    <div class="notifyPop notifyPop_toggle" id="notifyPop">
      <ul class="notifyPop__list" id="notifyPop__list">
        <li class="notifyPop__item item-notifyPop">
          <div class="item-notifyPop__img">
            <svg
              class="w-6 h-6 text-gray-800 dark:text-white"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
            >
              <path
                stroke="currentColor"
                stroke-width="2"
                d="M7 17v1c0 .6.4 1 1 1h8c.6 0 1-.4 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
              />
            </svg>
          </div>
          <div class="item-notifyPop__text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia,
            commodi!
          </div>
        </li>
        <li class="notifyPop__item item-notifyPop">
          <div class="item-notifyPop__img">
            <svg
              class="w-6 h-6 text-gray-800 dark:text-white"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
            >
              <path
                stroke="currentColor"
                stroke-width="2"
                d="M7 17v1c0 .6.4 1 1 1h8c.6 0 1-.4 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
              />
            </svg>
          </div>
          <div class="item-notifyPop__text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia,
            commodi!
          </div>
        </li>
        <li class="notifyPop__item item-notifyPop">
          <div class="item-notifyPop__img">
            <svg
              class="w-6 h-6 text-gray-800 dark:text-white"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
            >
              <path
                stroke="currentColor"
                stroke-width="2"
                d="M7 17v1c0 .6.4 1 1 1h8c.6 0 1-.4 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
              />
            </svg>
          </div>
          <div class="item-notifyPop__text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia,
            commodi!
          </div>
        </li>
        <li class="notifyPop__item item-notifyPop">
          <div class="item-notifyPop__img">
            <svg
              class="w-6 h-6 text-gray-800 dark:text-white"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
            >
              <path
                stroke="currentColor"
                stroke-width="2"
                d="M7 17v1c0 .6.4 1 1 1h8c.6 0 1-.4 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
              />
            </svg>
          </div>
          <div class="item-notifyPop__text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia,
            commodi!
          </div>
        </li>
        <li class="notifyPop__item item-notifyPop">
          <div class="item-notifyPop__img">
            <svg
              class="w-6 h-6 text-gray-800 dark:text-white"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
            >
              <path
                stroke="currentColor"
                stroke-width="2"
                d="M7 17v1c0 .6.4 1 1 1h8c.6 0 1-.4 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
              />
            </svg>
          </div>
          <div class="item-notifyPop__text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia,
            commodi!
          </div>
        </li>
      </ul>
    </div>
    <div class="userPop userPop_toggle" id="userPop">
      <ul class="userPop__list">
        <li class="userPop__item">
          <a href="#">Profile</a>
        </li>
        <li class="userPop__item">
          <a href="#">Log out</a>
        </li>
      </ul>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="css/popup.css" />
    <link rel="stylesheet" href="css/mainPop.css" />
    <link rel="stylesheet" href="css/editPop.css" />
    <link rel="stylesheet" href="css/closePop.css" />
    <link rel="stylesheet" href="css/notifyPop.css" />
    <link rel="stylesheet" href="css/userPop.css" />
    <link rel="stylesheet" href="css/createAndEditPop.css" />
    <link rel="stylesheet" href="css/animation.css" />
  </body>
</html>
