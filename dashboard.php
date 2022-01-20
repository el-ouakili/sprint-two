<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css" />
    <!-- bootstrap icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="./style.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
  </head>
  <body>
    <main>
      <!-- page container -->
      <div class="container-fluid">
        <div class="row flex-nowrap">
          <!-- sidebar -->
          <?php include('./templates/sidebar.html')?>
          <!-- main page  -->
          <div class="container-fluid m-0 col-9">
            <!-- header -->
            <div class="row align-items-center mt-2">
              <div class="col-1">
                <!-- hide icone here -->
                <i class="bi bi-arrow-left-circle"></i>
              </div>
              <!--this to keep search and bell at the right side-->
              <div class="col-6"></div>
              <div class="col-4">
                <!-- serch input here -->
                <div class="input-group">
                  <input
                    type="search"
                    id="form1"
                    class="form-control"
                    placeholder="search"
                  />
                  <button type="button" class="btn">
                    <i class="bi bi-search"></i>
                  </button>
                </div>
              </div>
              <div class="col-1">
                <!-- notification bell here -->
                <i class="bi bi-bell"></i>
              </div>
            </div>
            <!-- cards of info -->
            <div class="row mt-4">
              <!-- students card -->
              <div class="col-xl-3 col-md-6 mb-3">
                <div class="col-12 rounded-3 p-3 pb-1 bg-student">
                  <svg
                    width="48"
                    height="35"
                    viewBox="0 0 48 30"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M45.912 7.42895L26.037 1.06989C24.7013 0.643127 23.2995 0.643127 21.9638 1.06989L2.08875 7.42895C0.8205 7.83492 0 8.94227 0 10.25C0 11.5577 0.8205 12.6651 2.088 13.0711L4.31625 13.7836C4.06875 14.2422 3.88575 14.7358 3.7665 15.2531C2.96475 15.6375 2.4 16.4339 2.4 17.375C2.4 18.3198 2.96775 19.1206 3.77475 19.5029L2.421 27.805C2.30025 28.5464 2.71425 29.25 3.2715 29.25H6.32775C6.885 29.25 7.29975 28.5464 7.17825 27.805L5.82525 19.5029C6.63225 19.1206 7.2 18.3198 7.2 17.375C7.2 16.5883 6.78825 15.9248 6.19275 15.4921C6.3045 15.1462 6.47775 14.8345 6.6855 14.5413L10.6958 15.8246L9.6 24.5C9.6 27.1236 16.047 29.25 24 29.25C31.953 29.25 38.4 27.1236 38.4 24.5L37.3043 15.8246L45.912 13.0703C47.1795 12.6651 48 11.5577 48 10.25C48 8.94227 47.1795 7.83492 45.912 7.42895ZM35.961 24.3412C35.154 25.1821 31.053 26.875 24 26.875C16.947 26.875 12.846 25.1821 12.039 24.3412L13.0208 16.5682L21.9638 19.4294C22.1588 19.4917 23.8928 20.1144 26.037 19.4294L34.98 16.5682L35.961 24.3412ZM45.171 10.8126L25.296 17.1716C24.4478 17.4433 23.5523 17.4433 22.704 17.1716L9.52875 12.956L24.2205 10.2292C24.8723 10.109 25.3013 9.48852 25.179 8.84356C25.0575 8.19785 24.417 7.77555 23.7795 7.89578L8.496 10.7309C7.566 10.9031 6.73275 11.2987 6.015 11.8316L2.82825 10.8118C2.2395 10.6226 2.26875 9.86629 2.82825 9.68742L22.7033 3.32836C23.8358 2.96617 24.7913 3.16731 25.2952 3.32836L45.1703 9.68742C45.7245 9.86481 45.7635 10.6226 45.171 10.8126Z"
                      fill="#74C1ED"
                    />
                  </svg>
                  <p class="text-secondary">Students</p>
                  <div class="text-end">
                    <h3 class="d-inline">243</h3>
                  </div>
                </div>
              </div>
              <!-- courses card -->
              <div class="col-xl-3 col-md-6 mb-3">
                <div class="col-12 rounded-3 p-3 pb-1 bg-course">
                  <svg
                    width="28"
                    height="35"
                    viewBox="0 0 28 35"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M3.5 0H24.5C26.433 0 28 1.46904 28 3.28125V35L14 27.3438L0 35V3.28125C0 1.46904 1.56698 0 3.5 0ZM2.33333 31.1915L14 24.8113L25.6667 31.1915V3.28125C25.6667 2.67818 25.1433 2.1875 24.5 2.1875H3.5C2.85673 2.1875 2.33333 2.67818 2.33333 3.28125V31.1915Z"
                      fill="#EE95C5"
                    />
                  </svg>

                  <p class="text-secondary">Course</p>
                  <div class="text-end">
                    <h3 class="d-inline">13</h3>
                  </div>
                </div>
              </div>
              <!-- payments card -->
              <div class="col-xl-3 col-md-6 mb-3">
                <div class="col-12 rounded-3 p-3 pb-1 bg-payments">
                  <svg
                    width="35"
                    height="35"
                    viewBox="0 0 35 40"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M20.6484 19.5859L15.0234 18.0078C14.0781 17.7422 13.4141 16.8828 13.4141 15.9219C13.4141 14.7266 14.4141 13.75 15.6406 13.75H19.1562C20.0312 13.75 20.8672 14.0312 21.5469 14.5391C21.7969 14.7266 22.1406 14.6953 22.3594 14.4766L23.2422 13.5781C23.5078 13.3125 23.4766 12.875 23.1797 12.6406C22.0391 11.7344 20.6328 11.2422 19.1484 11.2422H18.75V8.11719C18.75 7.77344 18.4688 7.49219 18.125 7.49219H16.875C16.5312 7.49219 16.25 7.77344 16.25 8.11719V11.2422H15.6406C13.0391 11.2422 10.9141 13.3359 10.9141 15.9141C10.9141 17.9922 12.3281 19.8359 14.3438 20.4062L19.9688 21.9844C20.9141 22.25 21.5781 23.1094 21.5781 24.0703C21.5781 25.2656 20.5781 26.2422 19.3516 26.2422H15.8359C14.9609 26.2422 14.125 25.9609 13.4453 25.4531C13.1953 25.2656 12.8516 25.2969 12.6328 25.5156L11.75 26.4141C11.4844 26.6797 11.5156 27.1172 11.8125 27.3516C12.9531 28.2578 14.3594 28.75 15.8438 28.75H16.25V31.875C16.25 32.2188 16.5312 32.5 16.875 32.5H18.125C18.4688 32.5 18.75 32.2188 18.75 31.875V28.75H19.3594C21.9609 28.75 24.0859 26.6562 24.0859 24.0781C24.0781 22 22.6719 20.1562 20.6484 19.5859ZM31.25 2.5H3.75C1.67969 2.5 0 4.17969 0 6.25V33.75C0 35.8203 1.67969 37.5 3.75 37.5H31.25C33.3203 37.5 35 35.8203 35 33.75V6.25C35 4.17969 33.3203 2.5 31.25 2.5ZM32.5 33.75C32.5 34.4375 31.9375 35 31.25 35H3.75C3.0625 35 2.5 34.4375 2.5 33.75V6.25C2.5 5.5625 3.0625 5 3.75 5H31.25C31.9375 5 32.5 5.5625 32.5 6.25V33.75Z"
                      fill="#00C1FE"
                    />
                  </svg>

                  <p class="text-secondary">Payments</p>
                  <div class="text-end">
                    <span>DHS</span>
                    <h3 class="d-inline">556,000</h3>
                  </div>
                </div>
              </div>
              <!-- users card -->
              <div class="col-xl-3 col-md-6 mb-3">
                <div class="col-12 rounded-3 p-3 pb-1 bg-users">
                  <svg
                    width="34"
                    height="35"
                    viewBox="0 0 34 34"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M17 2.125C21.1039 2.125 24.4375 5.45859 24.4375 9.5625C24.4375 13.6664 21.1039 17 17 17C12.8961 17 9.5625 13.6664 9.5625 9.5625C9.5625 5.45859 12.8961 2.125 17 2.125ZM25.5 23.375C29.0129 23.375 31.875 26.2371 31.875 29.75V31.875H2.125V29.75C2.125 26.2371 4.98711 23.375 8.5 23.375C14.1445 23.375 12.9691 24.4375 17 24.4375C21.0441 24.4375 19.8488 23.375 25.5 23.375ZM17 0C11.7207 0 7.4375 4.2832 7.4375 9.5625C7.4375 14.8418 11.7207 19.125 17 19.125C22.2793 19.125 26.5625 14.8418 26.5625 9.5625C26.5625 4.2832 22.2793 0 17 0ZM25.5 21.25C19.3641 21.25 20.7852 22.3125 17 22.3125C13.2281 22.3125 14.6293 21.25 8.5 21.25C3.80508 21.25 0 25.0551 0 29.75V31.875C0 33.0504 0.949609 34 2.125 34H31.875C33.0504 34 34 33.0504 34 31.875V29.75C34 25.0551 30.1949 21.25 25.5 21.25Z"
                      fill="white"
                    />
                  </svg>

                  <p class="text-secondary">Users</p>
                  <div class="text-end">
                    <h3 class="d-inline">3</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
