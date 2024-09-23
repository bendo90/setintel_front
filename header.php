<?php
$p = @$_GET['p'];
?>
<nav class="absolute top-0 border-solid border-gray-200 w-full border-b py-3 bg-white z-50 bg-inherit">
    <div class="container mx-auto">
        <div class="w-full flex flex-col lg:flex-row">
            <div class="flex items-center gap-3 lg:flex-row">
                <a href="javascript:;" class="flex items-center justify-center text-gray-500 transition-all duration-300 hover:text-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M21 15H11C8.17157 15 6.75736 15 5.87868 14.1213C5 13.2426 5 11.8284 5 9V5C5 3.89543 4.10457 3 3 3M10 19.5C10 20.3284 9.32843 21 8.5 21C7.67157 21 7 20.3284 7 19.5C7 18.6716 7.67157 18 8.5 18C9.32843 18 10 18.6716 10 19.5ZM18 19.5C18 20.3284 17.3284 21 16.5 21C15.6716 21 15 20.3284 15 19.5C15 18.6716 15.6716 18 16.5 18C17.3284 18 18 18.6716 18 19.5ZM12.5 11H16.5C17.9045 11 18.6067 11 19.1111 10.6629C19.3295 10.517 19.517 10.3295 19.6629 10.1111C20 9.60669 20 8.90446 20 7.5C20 6.09554 20 5.39331 19.6629 4.88886C19.517 4.67048 19.3295 4.48298 19.1111 4.33706C18.6067 4 17.9045 4 16.5 4H12.5C11.0955 4 10.3933 4 9.88886 4.33706C9.67048 4.48298 9.48298 4.67048 9.33706 4.88886C9 5.39331 9 6.09554 9 7.5C9 8.90446 9 9.60669 9.33706 10.1111C9.48298 10.3295 9.67048 10.517 9.88886 10.6629C10.3933 11 11.0955 11 12.5 11Z" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"></path>
                    </svg>
                </a>
                <a href="javascript:;" class="flex items-center justify-center text-gray-500 transition-all duration-300 hover:text-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M5 11H19M5 11C4.05719 11 3.58579 11 3.29289 10.7071C3 10.4142 3 9.94281 3 9V8C3 7.05719 3 6.58579 3.29289 6.29289C3.58579 6 4.05719 6 5 6H19C19.9428 6 20.4142 6 20.7071 6.29289C21 6.58579 21 7.05719 21 8V9C21 9.94281 21 10.4142 20.7071 10.7071C20.4142 11 19.9428 11 19 11M5 11L5 17C5 18.8856 5 19.8284 5.58579 20.4142C6.17157 21 7.11438 21 9 21H15C16.8856 21 17.8284 21 18.4142 20.4142C19 19.8284 19 18.8856 19 17V11M12 6V21M12 6V4.5M12 6H9V4.5C9 3.67157 9.67157 3 10.5 3C11.3284 3 12 3.67157 12 4.5M12 6H15V4.5C15 3.67157 14.3284 3 13.5 3C12.6716 3 12 3.67157 12 4.5" stroke="currentColor" stroke-width="1.6"></path>
                    </svg>
                </a>
                <div class="dropdown relative inline-flex">
                    <button type="button" data-target="dropdown-icon" class="dropdown-toggle inline-flex justify-center items-center gap-1 text-sm text-gray-500 rounded-full cursor-pointer font-semibold text-center shadow-xs transition-all duration-300 hover:text-gray-900">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M15.9998 7C15.9998 9.20914 14.2089 11 11.9998 11C9.79067 11 7.99981 9.20914 7.99981 7C7.99981 4.79086 9.79067 3 11.9998 3C14.2089 3 15.9998 4.79086 15.9998 7Z" stroke="currentColor" stroke-width="1.6"></path>
                            <path d="M11.9998 14C9.15153 14 6.65091 15.3024 5.23341 17.2638C4.48341 18.3016 4.10841 18.8204 4.6654 19.9102C5.2224 21 6.1482 21 7.99981 21H15.9998C17.8514 21 18.7772 21 19.3342 19.9102C19.8912 18.8204 19.5162 18.3016 18.7662 17.2638C17.3487 15.3024 14.8481 14 11.9998 14Z" stroke="currentColor" stroke-width="1.6"></path>
                        </svg>
                        <svg class="dropdown-open:rotate-180 w-2.5 h-2.5" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                        </svg>
                    </button>
                    <div id="dropdown-icon" class="dropdown-menu rounded-xl shadow-lg bg-white absolute top-full w-72 mt-2 open" aria-labelledby="dropdown-default">
                        <ul class="py-2">
                            <li>
                                <a class="block px-6 py-2 hover:bg-gray-100 text-gray-900 font-medium" href="javascript:;"> Downloads </a>
                            </li>
                            <li>
                                <a class="block px-6 py-2 hover:bg-gray-100 text-gray-900 font-medium" href="javascript:;"> Saved Files </a>
                            </li>
                            <li>
                                <a class="block px-6 py-2 hover:bg-gray-100 text-gray-900 font-medium" href="javascript:;"> Notifications </a>
                            </li>
                            <li>
                                <a class="block px-6 py-2 hover:bg-gray-100 text-red-500 font-medium" href="javascript:;"> Log Out </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>