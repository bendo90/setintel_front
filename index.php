<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/style.css" />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
  <?php include ("header.php"); ?>
  <nav class="absolute border-b border-solid border-prime-gray-200 w-full py-3 bg-inherit">
      <div class="container mx-auto">
          <div class="w-full flex flex-col lg:flex-row">
              <div class=" w-full lg:flex lg:pl-11">
                  <div class="dropdown relative inline-flex">
                      <button type="button" data-target="dropdown-country" class="dropdown-toggle inline-flex justify-center items-center gap-2 text-sm text-gray-900 rounded-full cursor-pointer font-semibold text-center shadow-xs transition-all duration-500">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                              <g clip-path="url(#clip0_5666_39071)">
                                  <path d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#F0F0F0"></path>
                                  <path d="M12 -0.000976562C7.24248 -0.000976562 3.13173 2.7677 1.19073 6.78165H22.8092C20.8683 2.7677 16.7575 -0.000976562 12 -0.000976562Z" fill="#FF9811"></path>
                                  <path d="M12 23.9997C16.7575 23.9997 20.8683 21.231 22.8093 17.217H1.19073C3.13173 21.231 7.24248 23.9997 12 23.9997Z" fill="#6DA544"></path>
                                  <path d="M12.0004 16.1732C14.3055 16.1732 16.1743 14.3045 16.1743 11.9993C16.1743 9.69415 14.3055 7.82544 12.0004 7.82544C9.69519 7.82544 7.82648 9.69415 7.82648 11.9993C7.82648 14.3045 9.69519 16.1732 12.0004 16.1732Z" fill="#000088"></path>
                                  <path d="M12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z" fill="#F0F0F0"></path>
                                  <path d="M12 8L12.1253 11.0482L13.0353 8.1363L12.3674 11.1131L14 8.5359L12.5844 11.2384L14.8284 9.17157L12.7616 11.4156L15.4641 10L12.8869 11.6326L15.8637 10.9647L12.9518 11.8747L16 12L12.9518 12.1253L15.8637 13.0353L12.8869 12.3674L15.4641 14L12.7616 12.5844L14.8284 14.8284L12.5844 12.7616L14 15.4641L12.3674 12.8869L13.0353 15.8637L12.1253 12.9518L12 16L11.8747 12.9518L10.9647 15.8637L11.6326 12.8869L10 15.4641L11.4156 12.7616L9.17157 14.8284L11.2384 12.5844L8.5359 14L11.1131 12.3674L8.1363 13.0353L11.0482 12.1253L8 12L11.0482 11.8747L8.1363 10.9647L11.1131 11.6326L8.5359 10L11.2384 11.4156L9.17157 9.17157L11.4156 11.2384L10 8.5359L11.6326 11.1131L10.9647 8.1363L11.8747 11.0482L12 8Z" fill="#000088"></path>
                              </g>
                              <defs>
                                  <clipPath id="clip0_5666_39071">
                                      <rect width="24" height="24" fill="white"></rect>
                                  </clipPath>
                              </defs>
                          </svg>
                          <svg class="dropdown-open:rotate-180 w-2.5 h-2.5 text-gray-900" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                          </svg>
                      </button>
                      <div id="dropdown-country" class="dropdown-menu rounded-xl shadow-lg bg-white absolute top-full w-72 mt-2 open hidden" aria-labelledby="dropdown-default">
                          <ul class="py-2">
                              <li>
                                  <a class="block px-6 py-2 hover:bg-gray-100 text-gray-900 font-medium flex items-center gap-2" href="javascript:;">
                                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <g clip-path="url(#clip0_5666_39117)">
                                              <path d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#F0F0F0"></path>
                                              <path d="M2.74292 4.36307H21.257C20.5732 3.53502 19.7801 2.80073 18.9003 2.18127H5.09965C4.21986 2.80063 3.42678 3.53498 2.74292 4.36307Z" fill="#F0F0F0"></path>
                                              <path d="M0 12.0005C0 12.3684 0.0174844 12.732 0.049875 13.0915H23.9501C23.9825 12.732 24 12.3684 24 12.0005C24 11.6327 23.9825 11.2691 23.9501 10.9097H0.049875C0.0174844 11.2691 0 11.6327 0 12.0005Z" fill="#F0F0F0"></path>
                                              <path d="M1.3089 17.4546H22.6918C23.0451 16.7634 23.3333 16.0335 23.5485 15.2728H0.452209C0.667319 16.0335 0.9556 16.7634 1.3089 17.4546Z" fill="#F0F0F0"></path>
                                              <path d="M5.09965 21.818H18.9003C19.7801 21.1986 20.5732 20.4643 21.257 19.6362H2.74292C3.42678 20.4642 4.21986 21.1986 5.09965 21.818Z" fill="#F0F0F0"></path>
                                              <path d="M0.452087 8.72782H23.5484C23.3333 7.96713 23.045 7.23719 22.6917 6.54602H1.30882C0.955525 7.23719 0.667244 7.96713 0.452087 8.72782Z" fill="#F0F0F0"></path>
                                              <path d="M5.73846 2.18192H18.8997C16.9478 0.807638 14.5679 0.00012207 11.9993 0.00012207C10.4341 0.00012207 7.69034 0.807638 5.73846 2.18192Z" fill="#D80027"></path>
                                              <path d="M11.4782 6.54532H22.6914C22.2923 5.76471 21.8103 5.03351 21.257 4.36353H11.4782V6.54532Z" fill="#D80027"></path>
                                              <path d="M11.4782 10.9085H23.9501C23.8826 10.1593 23.7469 9.42976 23.5481 8.72668H11.4782V10.9085Z" fill="#D80027"></path>
                                              <path d="M0.451439 15.2737H23.5477C23.7465 14.5707 23.8822 13.8411 23.9497 13.0919H0.0494385C0.116938 13.8411 0.252595 14.5706 0.451439 15.2737Z" fill="#D80027"></path>
                                              <path d="M2.7426 19.6369H21.2567C21.8101 18.9668 22.2921 18.2356 22.6911 17.4551H1.30823C1.70727 18.2357 2.18924 18.9669 2.7426 19.6369Z" fill="#D80027"></path>
                                              <path d="M11.9993 24.0005C14.5679 24.0005 16.9477 23.193 18.8996 21.8187H5.09894C7.05081 23.193 9.43066 24.0005 11.9993 24.0005Z" fill="#D80027"></path>
                                              <path d="M0.45188 8.72692C0.253036 9.43004 0.117427 10.1596 0.0499268 10.9087H12V-0.000366211C6.50724 -0.000366211 1.8765 3.6902 0.45188 8.72692Z" fill="#0052B4"></path>
                                              <path d="M7.14363 3.13049L7.92058 5.52182H10.4352L8.40095 6.99989L9.17786 9.39136L7.14363 7.91339L5.1093 9.39136L5.88639 6.99989L3.85211 5.52182H6.36663L7.14363 3.13049Z" fill="#F0F0F0"></path>
                                          </g>
                                          <defs>
                                              <clipPath id="clip0_5666_39117">
                                                  <rect width="24" height="24" fill="white"></rect>
                                              </clipPath>
                                          </defs>
                                      </svg>
                                      <span class="text-xs font-medium text-gray-800">Liberia</span>
                                  </a>
                              </li>
                              <li>
                                  <a class="block px-6 py-2 hover:bg-gray-100 text-gray-900 font-medium flex items-center gap-2" href="javascript:;">
                                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <g clip-path="url(#clip0_5666_39265)">
                                              <path d="M24 12C24 18.6274 18.6274 24 12 24C5.37262 24 0 18.6274 0 12C0 12.0028 12 0.00135937 12 0C18.6274 0 24 5.37262 24 12Z" fill="#0052B4"></path>
                                              <path d="M11.9678 12.0004H11.9999C11.9999 11.9895 11.9999 11.9791 11.9999 11.9683C11.9892 11.979 11.9785 11.9897 11.9678 12.0004Z" fill="#F0F0F0"></path>
                                              <path d="M11.9997 6.26171C11.9997 4.15023 11.9997 2.76662 11.9997 0.000854492H11.9977C5.37125 0.00193262 -0.000244141 5.37404 -0.000244141 12.0008H6.26061V8.47524L9.78617 12.0008H11.9677C11.9784 11.9901 11.9891 11.9794 11.9998 11.9687C11.9998 11.1602 11.9998 10.4389 11.9998 9.78732L8.47419 6.26171H11.9997Z" fill="#F0F0F0"></path>
                                              <path d="M6.07112 1.56567C4.19429 2.63438 2.63401 4.19466 1.56531 6.07149V12.0005H4.69576V4.69617V4.69613H12.0001C12.0001 3.7088 12.0001 2.76821 12.0001 1.56567H6.07112Z" fill="#D80027"></path>
                                              <path d="M12.0004 10.5249L7.73696 6.2615H6.26129C6.26129 6.26145 6.26129 6.2615 6.26129 6.2615L12.0003 12.0005H12.0004C12.0004 12.0005 12.0004 10.9831 12.0004 10.5249Z" fill="#D80027"></path>
                                              <path d="M7.23753 14.0864L7.89613 15.4635L9.38333 15.1198L8.71733 16.4933L9.9133 17.4417L8.42422 17.7774L8.42839 19.3038L7.23753 18.3488L6.04672 19.3038L6.05089 17.7774L4.56177 17.4417L5.75778 16.4933L5.09169 15.1198L6.57899 15.4635L7.23753 14.0864Z" fill="#F0F0F0"></path>
                                              <path d="M17.9671 16.6954L18.2964 17.384L19.04 17.2121L18.7069 17.8989L19.305 18.3731L18.5604 18.5409L18.5625 19.3041L17.9671 18.8266L17.3717 19.3041L17.3737 18.5409L16.6292 18.3731L17.2272 17.8989L16.8942 17.2121L17.6378 17.384L17.9671 16.6954Z" fill="#F0F0F0"></path>
                                              <path d="M14.9034 9.39148L15.2326 10.0801L15.9763 9.90814L15.6433 10.5949L16.2413 11.0691L15.4967 11.2369L15.4988 12.0002L14.9034 11.5227L14.308 12.0002L14.31 11.2369L13.5655 11.0691L14.1635 10.5949L13.8305 9.90814L14.5741 10.0801L14.9034 9.39148Z" fill="#F0F0F0"></path>
                                              <path d="M17.9671 5.21765L18.2964 5.90625L19.04 5.73436L18.707 6.42112L19.3049 6.89531L18.5604 7.06317L18.5625 7.82639L17.9671 7.34887L17.3717 7.82639L17.3737 7.06317L16.6292 6.89531L17.2271 6.42112L16.8942 5.73436L17.6378 5.90625L17.9671 5.21765Z" fill="#F0F0F0"></path>
                                              <path d="M20.6422 8.34778L20.9714 9.03637L21.715 8.86443L21.382 9.5512L21.98 10.0254L21.2355 10.1933L21.2375 10.9565L20.6422 10.479L20.0468 10.9565L20.0488 10.1933L19.3043 10.0254L19.9022 9.5512L19.5692 8.86443L20.3128 9.03637L20.6422 8.34778Z" fill="#F0F0F0"></path>
                                              <path d="M18.7292 12.0004L18.9882 12.7975H19.8264L19.1483 13.2902L19.4074 14.0873L18.7292 13.5947L18.0511 14.0873L18.3101 13.2902L17.632 12.7975H18.4702L18.7292 12.0004Z" fill="#F0F0F0"></path>
                                          </g>
                                          <defs>
                                              <clipPath id="clip0_5666_39265">
                                                  <rect width="24" height="24" fill="white"></rect>
                                              </clipPath>
                                          </defs>
                                      </svg>
                                      <span class="text-xs font-medium text-gray-800">Australia</span>
                                  </a>
                              </li>
                              <li>
                                  <a class="block px-6 py-2 hover:bg-gray-100 text-gray-900 font-medium flex items-center gap-2" href="javascript:;">
                                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <g clip-path="url(#clip0_5666_39136)">
                                              <path d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#F0F0F0"></path>
                                              <path d="M0.413269 15.1299C1.10758 17.7061 2.63782 19.9389 4.69553 21.52V15.1299H0.413269Z" fill="#0052B4"></path>
                                              <path d="M10.9562 23.9538C11.3002 23.9834 11.6481 23.9994 11.9997 23.9994C17.5441 23.9994 22.2093 20.2391 23.5863 15.1299H10.9562V23.9538Z" fill="#0052B4"></path>
                                              <path d="M23.5863 8.86906C22.2093 3.75987 17.5441 -0.000488281 11.9997 -0.000488281C11.6481 -0.000488281 11.3002 0.015543 10.9562 0.045168V8.86906H23.5863Z" fill="#0052B4"></path>
                                              <path d="M4.69553 2.47925C2.63782 4.06034 1.10758 6.29314 0.413269 8.86934H4.69553V2.47925Z" fill="#0052B4"></path>
                                              <path d="M23.8981 10.4352H9.39105H9.39101V0.285645C8.28204 0.531551 7.23068 0.930129 6.26055 1.45949V10.4352H0.101273C0.0344761 10.9476 -0.000305176 11.4699 -0.000305176 12.0004C-0.000305176 12.5309 0.0344761 13.0533 0.101273 13.5656H6.26051H6.26055V22.5413C7.23068 23.0706 8.28204 23.4693 9.39101 23.7151V13.5658V13.5657H23.8981C23.9648 13.0533 23.9997 12.5309 23.9997 12.0004C23.9997 11.4699 23.9648 10.9475 23.8981 10.4352Z" fill="#D80027"></path>
                                          </g>
                                          <defs>
                                              <clipPath id="clip0_5666_39136">
                                                  <rect width="24" height="24" fill="white"></rect>
                                              </clipPath>
                                          </defs>
                                      </svg>
                                      <span class="text-xs font-medium text-gray-800">Iceland</span>
                                  </a>
                              </li>
                              <li>
                                  <a class="block px-6 py-2 hover:bg-gray-100 text-red-500 font-medium flex items-center gap-2" href="javascript:;">
                                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <g clip-path="url(#clip0_5666_39071)">
                                              <path d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#F0F0F0"></path>
                                              <path d="M12 -0.000976562C7.24248 -0.000976562 3.13173 2.7677 1.19073 6.78165H22.8092C20.8683 2.7677 16.7575 -0.000976562 12 -0.000976562Z" fill="#FF9811"></path>
                                              <path d="M12 23.9997C16.7575 23.9997 20.8683 21.231 22.8093 17.217H1.19073C3.13173 21.231 7.24248 23.9997 12 23.9997Z" fill="#6DA544"></path>
                                              <path d="M12.0004 16.1732C14.3055 16.1732 16.1743 14.3045 16.1743 11.9993C16.1743 9.69415 14.3055 7.82544 12.0004 7.82544C9.69519 7.82544 7.82648 9.69415 7.82648 11.9993C7.82648 14.3045 9.69519 16.1732 12.0004 16.1732Z" fill="#000088"></path>
                                              <path d="M12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z" fill="#F0F0F0"></path>
                                              <path d="M12 8L12.1253 11.0482L13.0353 8.1363L12.3674 11.1131L14 8.5359L12.5844 11.2384L14.8284 9.17157L12.7616 11.4156L15.4641 10L12.8869 11.6326L15.8637 10.9647L12.9518 11.8747L16 12L12.9518 12.1253L15.8637 13.0353L12.8869 12.3674L15.4641 14L12.7616 12.5844L14.8284 14.8284L12.5844 12.7616L14 15.4641L12.3674 12.8869L13.0353 15.8637L12.1253 12.9518L12 16L11.8747 12.9518L10.9647 15.8637L11.6326 12.8869L10 15.4641L11.4156 12.7616L9.17157 14.8284L11.2384 12.5844L8.5359 14L11.1131 12.3674L8.1363 13.0353L11.0482 12.1253L8 12L11.0482 11.8747L8.1363 10.9647L11.1131 11.6326L8.5359 10L11.2384 11.4156L9.17157 9.17157L11.4156 11.2384L10 8.5359L11.6326 11.1131L10.9647 8.1363L11.8747 11.0482L12 8Z" fill="#000088"></path>
                                          </g>
                                          <defs>
                                              <clipPath id="clip0_5666_39071">
                                                  <rect width="24" height="24" fill="white"></rect>
                                              </clipPath>
                                          </defs>
                                      </svg>
                                      <span class="text-xs font-medium text-gray-800">India</span>
                                  </a>
                              </li>
                              <li>
                                  <a class="block px-6 py-2 hover:bg-gray-100 text-red-500 font-medium flex items-center gap-2" href="javascript:;">
                                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <g clip-path="url(#clip0_5666_39202)">
                                              <path d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#F0F0F0"></path>
                                              <path d="M11.478 12H23.9997C23.9997 10.9169 23.8554 9.86761 23.5863 8.86951H11.478V12Z" fill="#D80027"></path>
                                              <path d="M11.478 5.73848H22.2385C21.5039 4.5398 20.5647 3.48028 19.4696 2.60803H11.478V5.73848Z" fill="#D80027"></path>
                                              <path d="M11.9997 23.9999C14.8239 23.9999 17.4197 23.0238 19.4695 21.3912H4.52991C6.57975 23.0238 9.17555 23.9999 11.9997 23.9999Z" fill="#D80027"></path>
                                              <path d="M1.7611 18.2598H22.2385C22.8283 17.2975 23.2856 16.2457 23.5864 15.1294H0.413208C0.714005 16.2457 1.17136 17.2975 1.7611 18.2598Z" fill="#D80027"></path>
                                              <path d="M5.55863 1.87397H6.65217L5.63498 2.61295L6.02353 3.80869L5.00639 3.0697L3.98925 3.80869L4.32487 2.7757C3.42928 3.52172 2.64431 4.39575 1.99744 5.36963H2.34783L1.70034 5.84002C1.59947 6.0083 1.50272 6.17925 1.41 6.35273L1.71919 7.30434L1.14234 6.88523C0.998953 7.18903 0.867797 7.49967 0.749906 7.81678L1.09055 8.86528H2.34783L1.33064 9.60427L1.71919 10.8L0.702047 10.061L0.0927656 10.5037C0.0317812 10.9939 0 11.4932 0 12H12C12 5.37262 12 4.59131 12 0C9.62944 0 7.41961 0.687656 5.55863 1.87397ZM6.02353 10.8L5.00639 10.061L3.98925 10.8L4.3778 9.60427L3.36061 8.86528H4.61789L5.00639 7.66955L5.39489 8.86528H6.65217L5.63498 9.60427L6.02353 10.8ZM5.63498 6.10861L6.02353 7.30434L5.00639 6.56536L3.98925 7.30434L4.3778 6.10861L3.36061 5.36963H4.61789L5.00639 4.17389L5.39489 5.36963H6.65217L5.63498 6.10861ZM10.3279 10.8L9.31073 10.061L8.29359 10.8L8.68214 9.60427L7.66495 8.86528H8.92223L9.31073 7.66955L9.69923 8.86528H10.9565L9.93933 9.60427L10.3279 10.8ZM9.93933 6.10861L10.3279 7.30434L9.31073 6.56536L8.29359 7.30434L8.68214 6.10861L7.66495 5.36963H8.92223L9.31073 4.17389L9.69923 5.36963H10.9565L9.93933 6.10861ZM9.93933 2.61295L10.3279 3.80869L9.31073 3.0697L8.29359 3.80869L8.68214 2.61295L7.66495 1.87397H8.92223L9.31073 0.678234L9.69923 1.87397H10.9565L9.93933 2.61295Z" fill="#0052B4"></path>
                                          </g>
                                          <defs>
                                              <clipPath id="clip0_5666_39202">
                                                  <rect width="24" height="24" fill="white"></rect>
                                              </clipPath>
                                          </defs>
                                      </svg>
                                      <span class="text-xs font-medium text-gray-800">United States</span>
                                  </a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </nav>
    <div id="heroVideoContainer" class="relative h-[calc(50vh-54px)] w-full overflow-hidden lg:h-[calc(50vh-78px)] bg-[url('./images/banner1.png')]">
<!--      <video autoplay muted>-->
<!--        <source src="./assets/home-Ck27GsdL.mp4" type="video/mp4" />-->
<!--        <source src="./assets/home-qvvV6RXz.webm" type="video/webm" />-->
<!--        <source src="./assets/home-B7_8yO-C.ogg" type="video/ogg" />-->
<!--        Your browser does not support the video tag.-->
<!--      </video>-->

      <p class="rubik-700 cont absolute left-1/2 top-1/2 text-[42px]  -translate-x-1/2 -translate-y-1/2 text-center lg:text-[64px] text-white lg:block" style="text-shadow: black 1px 1px 2px">
        When Sports and Innovation <br> Play Together
      </p>
    </div>


  <div class="w-32 h-32 rounded-md bg-gradient-to-tr from-indigo-600 to-pink-600 p-0.5">
      <div class="w-full h-full rounded-md bg-white  flex items-center justify-center">
          <p class="text-lg font-manrope font-bold text-transparent bg-gradient-to-tr from-indigo-600 to-pink-600 bg-clip-text">Pagedone</p>
      </div>
  </div>


    <div class="h-16" style="background-color: #f0f9fa;"></div>
    <div class=" flex items-center justify-center" style="background-color: #f0f9fa;">
      <div class="bg-white rounded-lg max-w-7xl p-6 md:p-12 shadow-lg -mt-12 mb-20">
        <h1 class="text-center text-3xl font-bold mb-12 text-gray-800">
          Setintel - Where Sports And Innovation Play Together
        </h1>

        <div class="md:flex md:space-x-6">
          <div class="md:w-2/4 space-y-4">
            <p class="text-gray-700 leading-relaxed">
              Welcome to Setintel, where innovation meets sports media.
              Leveraging our extensive experience, we excel in facilitating
              partnerships with local sports media and broadcasters, offering
              cutting-edge inventory solutions tailored to enhance your
              business. Our expertise spans the integration of gambling
              companies into sports ad platforms, significantly boosting
              engagement and driving growth.
            </p>
            <p class="text-gray-700 leading-relaxed pt-5">
              Our journey began with the successful operation of the Adjarsport
              OTT platform in Georgia, where our strategic partnership with
              AdjaraBet, the market's leading gambling company, delivered
              impressive advertising results. Now, with the launch of Setanta's
              sports OTT platform, we continue to push boundaries and set new
              standards in the industry.
            </p>
            <p class="text-gray-700 leading-relaxed pt-5">
              At Setintel, we are dedicated to helping our partners achieve
              remarkable growth. Our innovative strategies have proven to
              increase first-time deposits (FTD) by up to 30%, double bet
              counts, triple bet amounts, and enhance monthly retention rates by
              4%. Join us as we revolutionize the sports media landscape with
              unparalleled expertise and visionary solutions.
            </p>
          </div>

          <div class="md:w-2/4 flex justify-center mt-6 md:mt-0">
            <img
              class="rounded-lg shadow-lg w-full"
              src="images/9.png"
              alt="Working on laptop"
            />
          </div>
        </div>
      </div>
    </div>




  <?php include ("footer.php"); ?>

  </body>
</html>
