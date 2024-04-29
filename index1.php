<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SOUTH 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        

    <link rel="stylesheet" href="./css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="./js/script.js"></script>

</head>

<body>
    <style>
        <?php
        for ($i =1; $i < 55; $i++): ?>.option:nth-child(<?php echo $i;

            $ang =$i - 1; ?>) {
            transform: rotate(<?php echo $ang * 9 - 4.5; ?>deg);
        }

        <?php endfor;
        ?><?php $time =time();
        $wera =floor($time / 60);
        $firts_time_left =($wera + 1) * 60 - $time;
       
        ?>
    </style>
    <div class=" d-flex  align-items-center ">
        <aside class="">
            <ul class="list-unstyled  d-flex flex-column justify-content-around  ">
                <li>
                    <a href="#"
                        class="d-flex text-decoration-none flex-column align-items-center text-white-50 text-aside ">
                        <img src="data:image/svg+xml,%3Csvg fill='%239fb1d5' width='40px' height='40px' viewBox='0 0 512 512' xml:space='preserve' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' stroke='%239fb1d5'%3E%3Cg id='SVGRepo_bgCarrier' stroke-width='0'%3E%3C/g%3E%3Cg id='SVGRepo_tracerCarrier' stroke-linecap='round' stroke-linejoin='round'%3E%3C/g%3E%3Cg id='SVGRepo_iconCarrier'%3E%3Cg id='gift_box-box_-heart-love-valentine'%3E%3Cpath d='M408,160h-64c15.55-0.021,28.483-12.719,28.504-28.269c0.021-15.55-12.568-28.139-28.118-28.118 c0.023-17.486-15.9-31.228-34.048-27.504C297.124,78.82,288,91.085,288,104.575v5.667c-4.256-3.838-9.831-6.242-16-6.242h-32 c-6.169,0-11.744,2.404-16,6.242v-5.667c0-13.491-9.124-25.755-22.339-28.467c-18.148-3.724-34.071,10.018-34.048,27.504 c-15.549-0.021-28.138,12.568-28.118,28.118C139.517,147.281,152.45,159.979,168,160h-64c-17.673,0-32,14.327-32,32v8 c0,17.673,14.327,32,32,32h96v16H96v161.28c0,16.966,13.754,30.72,30.72,30.72H200c8.837,0,16-7.163,16-16V168h80v256 c0,8.837,7.163,16,16,16h73.28c16.966,0,30.72-13.754,30.72-30.72V248H312v-16h96c17.673,0,32-14.327,32-32v-8 C440,174.327,425.673,160,408,160z M232,152v-24c0-4.41,3.586-8,8-8h32c4.414,0,8,3.59,8,8v24H232z'%3E%3C/path%3E%3C/g%3E%3Cg id='Layer_1'%3E%3C/g%3E%3C/g%3E%3C/svg%3E" />
                        <div class="tooltiptext">Бонус</div>

                    </a>
                </li>
                <li>
                    <a href="#"
                        class="d-flex text-decoration-none flex-column align-items-center text-white-50 text-aside ">
                        <img src="data:image/svg+xml,%3Csvg fill='%239fb1d5' xmlns='http://www.w3.org/2000/svg' width='45px' height='45px' viewBox='0 0 100 100' xml:space='preserve'%3E%3Cg id='SVGRepo_bgCarrier' stroke-width='0'%3E%3C/g%3E%3Cg id='SVGRepo_tracerCarrier' stroke-linecap='round' stroke-linejoin='round'%3E%3C/g%3E%3Cg id='SVGRepo_iconCarrier'%3E%3Cg%3E%3Cg%3E%3Cpath d='M38,29h4c0.6,0,1-0.4,1-1v-3h14v3c0,0.6,0.4,1,1,1h4c0.6,0,1-0.4,1-1v-3c0-3.3-2.7-6-6-6H43c-3.3,0-6,2.7-6,6 v3C37,28.6,37.4,29,38,29z'%3E%3C/path%3E%3C/g%3E%3Cg%3E%3Cpath d='M74,35H26c-3.3,0-6,2.7-6,6v32c0,3.3,2.7,6,6,6h48c3.3,0,6-2.7,6-6V41C80,37.7,77.3,35,74,35z'%3E%3C/path%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E" />
                        <div class="tooltiptext">Партнерство</div>


                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex text-decoration-none flex-column align-items-center text-aside  ">
                        <img src="data:image/svg+xml,%3Csvg width='40px' height='40px' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cg id='SVGRepo_bgCarrier' stroke-width='0'%3E%3C/g%3E%3Cg id='SVGRepo_tracerCarrier' stroke-linecap='round' stroke-linejoin='round'%3E%3C/g%3E%3Cg id='SVGRepo_iconCarrier'%3E%3Cpath d='M21.9999 8.16234L21.9999 8.23487C21.9999 9.09561 21.9999 9.52598 21.7927 9.8781C21.5855 10.2302 21.2093 10.4392 20.4569 10.8572L19.6636 11.298C20.2102 9.44984 20.3926 7.46414 20.4601 5.76597C20.4629 5.69316 20.4662 5.61945 20.4695 5.54497L20.4718 5.49279C21.1231 5.71896 21.4887 5.88758 21.7168 6.20408C22 6.59692 22 7.11873 21.9999 8.16234Z' fill='%239fb1d5'%3E%3C/path%3E%3Cpath d='M2 8.16234L2 8.23487C2.00003 9.09561 2.00004 9.52598 2.20723 9.8781C2.41442 10.2302 2.79063 10.4392 3.54305 10.8572L4.33681 11.2982C3.79007 9.45001 3.60767 7.46422 3.54025 5.76597C3.53736 5.69316 3.5341 5.61945 3.53081 5.54497L3.5285 5.49266C2.87701 5.7189 2.51126 5.88752 2.2831 6.20408C1.99996 6.59692 1.99997 7.11873 2 8.16234Z' fill='%239fb1d5'%3E%3C/path%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M12.0002 2C13.7837 2 15.2531 2.15709 16.3771 2.34674C17.5159 2.53887 18.0852 2.63494 18.5609 3.22083C19.0367 3.80673 19.0115 4.43998 18.9612 5.70647C18.7886 10.0545 17.8503 15.4853 12.75 15.9657V19.5H14.1802C14.6569 19.5 15.0673 19.8365 15.1608 20.3039L15.35 21.25H18C18.4142 21.25 18.75 21.5858 18.75 22C18.75 22.4142 18.4142 22.75 18 22.75H6C5.58579 22.75 5.25 22.4142 5.25 22C5.25 21.5858 5.58579 21.25 6 21.25H8.65L8.83922 20.3039C8.93271 19.8365 9.34312 19.5 9.8198 19.5H11.25V15.9657C6.14996 15.4851 5.21169 10.0544 5.03907 5.70647C4.98879 4.43998 4.96365 3.80673 5.43937 3.22083C5.91508 2.63494 6.48445 2.53887 7.62318 2.34674C8.74724 2.15709 10.2166 2 12.0002 2ZM12.9524 6.19887L12.8541 6.02251C12.4741 5.34084 12.2841 5 12 5C11.7159 5 11.5259 5.34084 11.1459 6.02251L11.0476 6.19887C10.9397 6.39258 10.8857 6.48944 10.8015 6.55334C10.7173 6.61725 10.6125 6.64097 10.4028 6.68841L10.2119 6.73161C9.47396 6.89857 9.10501 6.98205 9.01723 7.26432C8.92945 7.54659 9.18097 7.84072 9.68403 8.42898L9.81418 8.58117C9.95713 8.74833 10.0286 8.83191 10.0608 8.93532C10.0929 9.03872 10.0821 9.15023 10.0605 9.37327L10.0408 9.57632C9.96476 10.3612 9.92674 10.7536 10.1565 10.9281C10.3864 11.1025 10.7318 10.9435 11.4227 10.6254L11.6014 10.5431C11.7978 10.4527 11.8959 10.4075 12 10.4075C12.1041 10.4075 12.2022 10.4527 12.3986 10.5431L12.5773 10.6254C13.2682 10.9435 13.6136 11.1025 13.8435 10.9281C14.0733 10.7536 14.0352 10.3612 13.9592 9.57632L13.9395 9.37327C13.9179 9.15023 13.9071 9.03872 13.9392 8.93532C13.9714 8.83191 14.0429 8.74833 14.1858 8.58117L14.316 8.42898C14.819 7.84072 15.0706 7.54659 14.9828 7.26432C14.895 6.98205 14.526 6.89857 13.7881 6.73161L13.5972 6.68841C13.3875 6.64097 13.2827 6.61725 13.1985 6.55334C13.1143 6.48944 13.0603 6.39258 12.9524 6.19887Z' fill='%239fb1d5'%3E%3C/path%3E%3C/g%3E%3C/svg%3E" />
                        <div class="tooltiptext">Топ</div>



                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex text-decoration-none flex-column align-items-center text-aside  ">
                    <img src="data:image/svg+xml,%3Csvg fill='%239fb1d5' width='35px' height='40px' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cg id='SVGRepo_bgCarrier' stroke-width='0'%3E%3C/g%3E%3Cg id='SVGRepo_tracerCarrier' stroke-linecap='round' stroke-linejoin='round'%3E%3C/g%3E%3Cg id='SVGRepo_iconCarrier'%3E%3Cpath d='M12 2C6.486 2 2 6.486 2 12v4.143C2 17.167 2.897 18 4 18h1a1 1 0 0 0 1-1v-5.143a1 1 0 0 0-1-1h-.908C4.648 6.987 7.978 4 12 4s7.352 2.987 7.908 6.857H19a1 1 0 0 0-1 1V18c0 1.103-.897 2-2 2h-2v-1h-4v3h6c2.206 0 4-1.794 4-4 1.103 0 2-.833 2-1.857V12c0-5.514-4.486-10-10-10z'%3E%3C/path%3E%3C/g%3E%3C/svg%3E" />
                        <div class="tooltiptext">Техподдержка</div>



                    </a>
                </li>

            </ul>
        </aside>
        <main class="d-flex flex-column ">

            <div class="header mb-4 d-flex align-items-center">
                <a href="https://south1.net/" class="d-flex text-decoration-none me-4">
                    <img src="./img/logo.png" class="logo" alt="logo">

                </a>
                <nav class="d-flex">
                    <ul class="list-unstyled d-flex  ">
                        <li class="">
                            <a class="text-decoration-none d-flex" href="https://south1.net/spinner"> <img
                                    src="./img/spiner p.png" class="nav-img icon-link" alt="spin">Спиннер</a>
                        </li>
                        <li class="">
                            <a class="text-decoration-none d-flex" href="https://south1.net/freebie"> <img
                                    src="./img/freebe p.png" class="nav-img" alt="spin">Халява</a>
                        </li>
                        <li class="">
                            <a class="text-decoration-none d-flex" href="https://south1.net/space"><img
                                    src="./img/speis p.png" class="nav-img" alt="spin">Космос</a>
                        </li>
                        <li class="">
                            <a class="text-decoration-none d-flex" href="https://south1.net/trade"> <img
                                    src="./img/birja p.png" class="nav-img" alt="spin">Торговля</a>
                        </li>

                    </ul>
                </nav>


                <div class="d-flex menu-bar gap-2 ">
                    <div class="d-flex align-items-center coins ">
                        
                        

                            <p class="coin-ico m-0 currency_CSF">0.00</p>
                        
                        <button class="button-deposit">Deposit</button>
                    </div>
                    <a href="#" class="user-ico  d-block ">
                        <img src="./img/Безымянный-1.jpg" class="user-img" alt="usr">
                        <div class="level">1 lvl</div>
                    </a>
                    <div class="notification d-flex align-items-center justify-content-center">
                    <img src="data:image/svg+xml,%3Csvg width='15px' height='15px' viewBox='0 -2.5 20 20' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' fill='%23000000'%3E%3Cg id='SVGRepo_bgCarrier' stroke-width='0'%3E%3C/g%3E%3Cg id='SVGRepo_tracerCarrier' stroke-linecap='round' stroke-linejoin='round'%3E%3C/g%3E%3Cg id='SVGRepo_iconCarrier'%3E%3Ctitle%3Eemail %5B%231572%5D%3C/title%3E%3Cdesc%3ECreated with Sketch.%3C/desc%3E%3Cdefs%3E%3C/defs%3E%3Cg id='Page-1' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='Dribbble-Light-Preview' transform='translate(-340.000000, -922.000000)' fill='%237084ac'%3E%3Cg id='icons' transform='translate(56.000000, 160.000000)'%3E%3Cpath d='M294,774.474 L284,765.649 L284,777 L304,777 L304,765.649 L294,774.474 Z M294.001,771.812 L284,762.981 L284,762 L304,762 L304,762.981 L294.001,771.812 Z' id='email-%5B%231572%5D'%3E%3C/path%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E" />

                    </div>
                    <div class="notification d-flex align-items-center justify-content-center">
                    <img src="data:image/svg+xml,%3Csvg width='15px' height='15px' viewBox='0 -3.5 21 21' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' fill='%23000000'%3E%3Cg id='SVGRepo_bgCarrier' stroke-width='0'%3E%3C/g%3E%3Cg id='SVGRepo_tracerCarrier' stroke-linecap='round' stroke-linejoin='round'%3E%3C/g%3E%3Cg id='SVGRepo_iconCarrier'%3E%3Ctitle%3Esettings %5B%231389%5D%3C/title%3E%3Cdesc%3ECreated with Sketch.%3C/desc%3E%3Cdefs%3E%3C/defs%3E%3Cg id='Page-1' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='Dribbble-Light-Preview' transform='translate(-99.000000, -760.000000)' fill='%237084ac'%3E%3Cg id='icons' transform='translate(56.000000, 160.000000)'%3E%3Cpath d='M53.5,603 C53.5,602.647 53.5756,602 53.6932,602 L43,602 L43,604 L53.6932,604 C53.5756,604 53.5,603.353 53.5,603 L53.5,603 Z M61.7068,602 C61.27315,601 60.1192,600 58.75,600 C57.01015,600 55.6,601.343 55.6,603 C55.6,604.657 57.01015,606 58.75,606 C60.1192,606 61.27315,605 61.7068,604 L64,604 L64,602 L61.7068,602 Z M53.5,611 C53.5,611.353 53.4244,611.686 53.3068,612 L64,612 L64,610 L53.3068,610 C53.4244,610 53.5,610.647 53.5,611 L53.5,611 Z M51.4,611 C51.4,612.657 49.98985,614 48.25,614 C46.8808,614 45.72685,613 45.2932,612 L43,612 L43,610 L45.2932,610 C45.72685,609 46.8808,608 48.25,608 C49.98985,608 51.4,609.343 51.4,611 L51.4,611 Z' id='settings-%5B%231389%5D'%3E%3C/path%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E" />
                    </div>

                </div>


            </div>
            <section class="d-flex">
                <div class="me-3 ">
                    <div class="bet_field">
                        <div class="bf_header bfw">
                            <span class="bf_title ">Колесо</span>
                            <div class="bf_i"></div>
                        </div>
                        <div class="bf_body ">
                            <div class="bf_balance mb-3 ">

                            <img src="data:image/svg+xml,%3Csvg width='30px' height='30px' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cg id='SVGRepo_bgCarrier' stroke-width='0'%3E%3C/g%3E%3Cg id='SVGRepo_tracerCarrier' stroke-linecap='round' stroke-linejoin='round'%3E%3C/g%3E%3Cg id='SVGRepo_iconCarrier'%3E%3Cpath d='M22.0002 12.6216V14.6816C22.0002 15.2416 21.5402 15.7016 20.9702 15.7016H19.0402C17.9602 15.7016 16.9702 14.9116 16.8802 13.8316C16.8202 13.2016 17.0602 12.6116 17.4802 12.2016C17.8502 11.8216 18.3602 11.6016 18.9202 11.6016H20.9702C21.5402 11.6016 22.0002 12.0616 22.0002 12.6216Z' fill='%231a3d36'%3E%3C/path%3E%3Cpath d='M15.38 13.9584C15.29 12.9084 15.67 11.8784 16.43 11.1284C17.07 10.4784 17.96 10.0984 18.92 10.0984H19.49C19.77 10.0984 20 9.86844 19.96 9.58844C19.69 7.64844 18.01 6.14844 16 6.14844H6C3.79 6.14844 2 7.93844 2 10.1484V17.1484C2 19.3584 3.79 21.1484 6 21.1484H16C18.02 21.1484 19.69 19.6484 19.96 17.7084C20 17.4284 19.77 17.1984 19.49 17.1984H19.04C17.14 17.1984 15.54 15.7784 15.38 13.9584ZM13 11.8984H7C6.59 11.8984 6.25 11.5684 6.25 11.1484C6.25 10.7284 6.59 10.3984 7 10.3984H13C13.41 10.3984 13.75 10.7384 13.75 11.1484C13.75 11.5584 13.41 11.8984 13 11.8984Z' fill='%231a3d36'%3E%3C/path%3E%3Cpath d='M14.2106 3.98156C14.4706 4.25156 14.2406 4.65156 13.8606 4.65156H6.03064C4.94064 4.65156 3.92064 4.97156 3.07064 5.52156C2.68064 5.77156 2.15064 5.50156 2.34064 5.07156C2.90064 3.76156 4.21064 2.85156 5.72064 2.85156H11.3406C12.5006 2.85156 13.5306 3.26156 14.2106 3.98156Z' fill='%231a3d36'%3E%3C/path%3E%3C/g%3E%3C/svg%3E" />
                                <div>



                                    <div class="d-flex align-items-center gap-1">
                                        <span class="">
                                            <?php //echo $user_balance['coin']; ?>

                                           
                                        </span>
                                        <div class="bal_value currency_CSF">
                                            0
                                            <?php //echo number_format($user_balance['amount'], 8, '.', ',') ?>
                                        </div>
                                    </div>
                                    <div class="user-balans">Баланс</div>


                                </div>

                            </div>

                            <div class="bet_status hidden d-none  no_select">
                                <div class="bf_header bfh_s">
                                    Ставка
                                </div>
                                <div class="bs_bet_value"></div>
                                <div class="na">на</div>
                                <div class="bcf_container">
                                    <div class="bcf">x</div>
                                </div>
                            </div>

                            <div class="bet_screen">
                                <div class="form_subheader">
                                    Выберите цвет
                                </div>
                                <div class="bet_color_selector no_select mb-3 ">
                                    <div class="bcs bcs_blue">X 2</div>
                                    <div class="bcs bcs_green">X 3</div>
                                    <div class="bcs bcs_violet">X 5</div>
                                    <div class="bcs bcs_gold">X 34</div>
                                </div>
                                <div class="form_subheader">
                                    Введите сумму ставки
                                </div>
                                <div class="bet_sum_selector">
                                    <div class="sum_wrapper">
                                        <div class="sum_symbol currency_CSF">
                                            
                                        </div>

                                        <input class="sum_value" value="0.01000000" default="0.01000000" />
                                        <button class="reset_to_min">
                                           <img src="data:image/svg+xml,%3Csvg viewBox='0 0 16 16' height='25px' width='25px' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3Cpath id='path-1' d='m.902369.195262c.195262.195262.195262.511845 0 .707107s-.511845.195262-.707107 0c-.195262-.195262-.195262-.511845 0-.707107.195262-.195262.511845-.195262.707107 0' fill='%23000000' style='fill: rgb(255, 255, 255);'%3E%3C/path%3E%3C/defs%3E%3Cuse transform='translate(9.967 12.951)' xlink:href='%23path-1'%3E%3C/use%3E%3Cuse transform='translate(7.967 14.951)' xlink:href='%23path-1'%3E%3C/use%3E%3Cpath d='m1.80474.390524c.390524.390524.390524 1.02369 0 1.41421-.390524.390524-1.02369.390524-1.41421 0-.390524-.390524-.390524-1.02369 0-1.41421.390524-.390524 1.02369-.390524 1.41421 0' transform='translate(10.918 13.902)' fill='%23000000' style='fill: rgb(255, 255, 255);'%3E%3C/path%3E%3Cpath d='m4.59253 0c-.553711 0-1.0752.244141-1.43018.669922l-3.16235 3.79462c.233032.107178.457825.233765.669189.384582.595642.425293 1.0329.982178 1.3338 1.5954l3.78192-3.15204c.425781-.35498.669922-.876465.669922-1.43018-.0000002-1.02686-.835449-1.8623-1.8623-1.8623z' transform='translate(9.561)' fill='%23000000' style='fill: rgb(255, 255, 255);'%3E%3C/path%3E%3Cpath d='m9.66553.913574v-.0004882c-1.28027-.913086-3.05664-.811035-4.22217.240723-.728027.657227-2.94287 2.65674-5.01807 3.10791l-.425293.0927734s.0317383 1.396.454834 2.02557c.828674-.0925903 1.49951-.263977 1.72986-.494324-.509277.602356-.896667 1.0379-1.19678 1.36371.246826.329895.550781.643066.892212.945068 1.22424-.520874 2.31616-1.42108 2.67242-1.7774-.718018 1.19672-1.30194 2.09552-1.60895 2.55853.683228-.397522 1.51593-.914185 2.29523-1.49292-.291321.291321-.673462 1.20648-.982544 2.25171.344604.16626 1.31354.514587 1.31354.514587 1.48779-.113281 4.07178-3.61816 4.94189-4.95898.937988-1.44482.566406-3.36768-.846191-4.37646z' transform='translate(-.016 4.75)' fill='%23000000' style='fill: rgb(255, 255, 255);'%3E%3C/path%3E%3C/svg%3E" />
                                        </button>

                                    </div>
                                </div>

                                <div class="quickbets_selector no_select">
                                    <div class="quik_bet" data-val="0.01000000"><span>+&nbsp&nbsp</span>1</div>
                                    <div class="quik_bet" data-val="0.05000000"><span>+&nbsp&nbsp</span>5</div>
                                    <div class="quik_bet" data-val="0.10000000"><span>+&nbsp&nbsp</span>10</div>
                                    <div class="quik_bet" data-val="1.534599348">max</div>
                                </div>

                                <button class="set_bet bet_off">
                                    Поставить
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="raund-info">
                        <div>
                        <img src="data:image/svg+xml,%3Csvg width='18px' height='18px' viewBox='0 0 48 48' xmlns='http://www.w3.org/2000/svg' fill='%2366d08a'%3E%3Cg id='SVGRepo_bgCarrier' stroke-width='0'%3E%3C/g%3E%3Cg id='SVGRepo_tracerCarrier' stroke-linecap='round' stroke-linejoin='round'%3E%3C/g%3E%3Cg id='SVGRepo_iconCarrier'%3E%3Ctitle%3Esecurity-verified-solid%3C/title%3E%3Cg id='Layer_2' data-name='Layer 2'%3E%3Cg id='invisible_box' data-name='invisible box'%3E%3Crect width='48' height='48' fill='none'%3E%3C/rect%3E%3C/g%3E%3Cg id='icons_Q2' data-name='icons Q2'%3E%3Cpath d='M24,2S6,7.1,6,8V26.2c0,9.2,13.3,17.3,17,19.5a1.8,1.8,0,0,0,2,0c3.8-2.1,17-10.3,17-19.5V8C42,7.1,24,2,24,2Zm9.4,16.4-11,11a1.9,1.9,0,0,1-2.8,0l-4.9-4.9a2.2,2.2,0,0,1-.4-2.7,2,2,0,0,1,3.1-.2L21,25.2l9.6-9.6a2,2,0,0,1,2.8,2.8Z'%3E%3C/path%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E" />
                            <span> Раунд </span>
                            <span id="numder-of-game"> #2345678</span>
                        </div>
                        <div>
                            <span>5tgy89..6789<span>
                            <img src="data:image/svg+xml,%3Csvg width='18px' height='18px' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cg id='SVGRepo_bgCarrier' stroke-width='0'%3E%3C/g%3E%3Cg id='SVGRepo_tracerCarrier' stroke-linecap='round' stroke-linejoin='round'%3E%3C/g%3E%3Cg id='SVGRepo_iconCarrier'%3E%3Cpath d='M15.24 2H11.3458C9.58159 1.99999 8.18418 1.99997 7.09054 2.1476C5.96501 2.29953 5.05402 2.61964 4.33559 3.34096C3.61717 4.06227 3.29833 4.97692 3.14701 6.10697C2.99997 7.205 2.99999 8.60802 3 10.3793V16.2169C3 17.725 3.91995 19.0174 5.22717 19.5592C5.15989 18.6498 5.15994 17.3737 5.16 16.312L5.16 11.3976L5.16 11.3024C5.15993 10.0207 5.15986 8.91644 5.27828 8.03211C5.40519 7.08438 5.69139 6.17592 6.4253 5.43906C7.15921 4.70219 8.06404 4.41485 9.00798 4.28743C9.88877 4.16854 10.9887 4.1686 12.2652 4.16867L12.36 4.16868H15.24L15.3348 4.16867C16.6113 4.1686 17.7088 4.16854 18.5896 4.28743C18.0627 2.94779 16.7616 2 15.24 2Z' fill='%2366d08a'%3E%3C/path%3E%3Cpath d='M6.6001 11.3974C6.6001 8.67119 6.6001 7.3081 7.44363 6.46118C8.28716 5.61426 9.64481 5.61426 12.3601 5.61426H15.2401C17.9554 5.61426 19.313 5.61426 20.1566 6.46118C21.0001 7.3081 21.0001 8.6712 21.0001 11.3974V16.2167C21.0001 18.9429 21.0001 20.306 20.1566 21.1529C19.313 21.9998 17.9554 21.9998 15.2401 21.9998H12.3601C9.64481 21.9998 8.28716 21.9998 7.44363 21.1529C6.6001 20.306 6.6001 18.9429 6.6001 16.2167V11.3974Z' fill='%2366d08a'%3E%3C/path%3E%3C/g%3E%3C/svg%3E" />
                        </div>
                    </div>
                </div>
                <div class="d-flex  game_board flex-column" data-spintime="<?php echo $spin_time;?>" data-fgleft="<?php echo $firts_time_left;?>">
                    <div class="d-flex">
                        <div class="wheal-main  me-2">
                            <div class="mheal-game-display">
                                <div class="wheel_wrapper">
                                    <div class="wheal-game-information">
                                    
                                    <div class="item">
                                        <h2 >0</h2>
                                    <h4>ДО СТАРТА<h4>        
                                               
                                            </div>
                                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xml:space='preserve' width='15px' height='15px' style=' shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd' viewBox='0 0 6.85 6.85' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:xodm='http://www.corel.com/coreldraw/odm/2003'%3E%3Cdefs%3E%3C/defs%3E%3Cg id='Слой_x0020_1'%3E%3Cmetadata id='CorelCorpID_0Corel-Layer' /%3E%3Cpath class='fil0' fill='%23b3c3ec' d='M3.43 0c1.89,0 3.42,1.53 3.42,3.43 0,1.89 -1.53,3.42 -3.42,3.42 -1.9,0 -3.43,-1.53 -3.43,-3.42 0,-1.9 1.53,-3.43 3.43,-3.43zm-1.13 3.27l0.67 -1.23c0.04,-0.07 0.11,-0.11 0.18,-0.11l0.05 0c0.1,0 0.18,0.07 0.2,0.17l0.5 2.48c0.02,0.06 0,0.12 -0.04,0.17 -0.04,0.05 -0.1,0.08 -0.16,0.08l-0.55 0c-0.1,0 -0.18,-0.07 -0.2,-0.17l-0.1 -0.52 -0.36 0.67c-0.03,0.06 -0.1,0.1 -0.18,0.1l-0.04 0c-0.08,0 -0.14,-0.03 -0.18,-0.1l-0.41 -0.71 -0.1 0.56c-0.02,0.1 -0.11,0.17 -0.21,0.17l-0.51 0c-0.07,0 -0.12,-0.03 -0.16,-0.08 -0.04,-0.05 -0.06,-0.11 -0.05,-0.17l0.5 -2.48c0.02,-0.1 0.11,-0.17 0.21,-0.17l0.04 0c0.07,0 0.14,0.04 0.18,0.11l0.72 1.23zm2.56 -0.27l0.38 -0.86c0.03,-0.08 0.11,-0.13 0.19,-0.13l0.56 0c0.08,0 0.14,0.04 0.18,0.1 0.04,0.06 0.04,0.13 0.01,0.2l-1.13 2.49c-0.03,0.07 -0.1,0.12 -0.19,0.12l-0.04 0c-0.08,0 -0.15,-0.05 -0.19,-0.12l-1.13 -2.49c-0.03,-0.07 -0.03,-0.14 0.01,-0.2 0.04,-0.06 0.11,-0.1 0.18,-0.1l0.61 0c0.08,0 0.16,0.05 0.19,0.13l0.37 0.86z' /%3E%3C/g%3E%3C/svg%3E" />
                                            <span id="col-user currency_CSF">80</span>
                                            <img src="data:image/svg+xml,%3Csvg fill='%23b3c3ec' width='25px' height='25px' viewBox='0 0 1024 1024' xmlns='http://www.w3.org/2000/svg'%3E%3Cg id='SVGRepo_bgCarrier' stroke-width='0'%3E%3C/g%3E%3Cg id='SVGRepo_tracerCarrier' stroke-linecap='round' stroke-linejoin='round'%3E%3C/g%3E%3Cg id='SVGRepo_iconCarrier'%3E%3Ccircle cx='435.2' cy='409.5' r='102.4'%3E%3C/circle%3E%3Cpath d='M588.8 409.5c0 17.6-3.1 34.5-8.6 50.3 2.9.2 5.7.9 8.6.9 56.6 0 102.4-45.8 102.4-102.4 0-56.6-45.8-102.4-102.4-102.4-26.1 0-49.7 10.1-67.8 26.2 40.9 27.7 67.8 74.4 67.8 127.4zM435.2 563.1c-128 0-179.2 25.6-179.2 102.4v102.6h358.4V665.5c0-77.3-51.2-102.4-179.2-102.4z'%3E%3C/path%3E%3Cpath d='M588.8 511.9c-14.5 0-27.9.4-40.5 1.1-2.3 2.5-4.6 4.9-7 7.2 63.7 13.5 124.2 49.5 124.2 145.3v51.4H768V614.3c0-77.3-51.2-102.4-179.2-102.4z'%3E%3C/path%3E%3C/g%3E%3C/svg%3E" />
                                        <span>4</span>
                                </div>
                                    <div class="shadow-wheal">
                                    <div class="wheel_top">
                                        <div class="wheel_cup">

                                            

                                            <div class="spingoing hidden">
                                                <div>
                                                    <div>
                                                        <div>
                                                            <div>
                                                                <div>
                                                                    <div>
                                                                        <div>
                                                                            <div>
                                                                                <div>
                                                                                    <div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="spinresult hidden">
                                                <div class="spr_title">Выпал</div>
                                                <div class="spr spr_blue hidden">X 2</div>
                                                <div class="spr spr_green hidden">X 3</div>
                                                <div class="spr spr_violet hidden">X 5</div>
                                                <div class="spr spr_gold hidden">X 34</div>
                                                <div class="spr spr_red hidden">Халява!</div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="wheel_body">

                                        <div class="option c_blue cc_01">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_green">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_red">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_blue">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_violet">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_blue">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_green">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_violet">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_blue">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_red">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_blue cc_11">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_green">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_blue">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_gold">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_blue">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_violet">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_green">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_blue">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_red">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_blue">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_green cc_21">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_violet">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_blue">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_green">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_blue">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_red">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_green">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_blue">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_violet">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_blue">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_green cc_31">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_blue">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_red">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_green">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_blue">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_green">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_blue">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_violet">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_blue">
                                            <div class="row"></div>
                                        </div>
                                        <div class="option c_green">
                                            <div class="row"></div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="bet_win_field">
                            <div class="win_field d-flex flex-column  justify-content-around align-content-between  ">

                                <div class=" win-status-bar mb-3 p-2 ">
                                    <div class="fs_subheader mb-3">
                                        Последние <br> 100 раундов
                                    </div>
                                    <div class="last_blocks no_select d-flex">
                                        <div class="win-stistic-block bcs_blue wd_blue">
                                            <?php //echo $ini_wd['stats']['blue']; ?>7
                                        </div>
                                        <div class="win-stistic-block bcs_green wd_green">
                                            <?php //echo $ini_wd['stats']['green']; ?>12
                                        </div>

                                        <div class=" win-stistic-block bcs_violet wd_violet">9
                                            <?php // echo $ini_wd['stats']['violet']; ?>
                                        </div>
                                        <div class="win-stistic-block bcs_gold wd_gold">0
                                            <?php //echo $ini_wd['stats']['gold']; ?>
                                        </div>

                                        <div class="win-stistic-block bcs_red wd_red">4
                                            <?php //echo $ini_wd['stats']['red']; ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="">
                                    <div class="last_colors">
                                        <div class="fs_subheader mb-2">
                                            Предыдущие<br> игры
                                        </div>
                                        <a
                                            href="https://south1.net<?php //echo JText::_('COM_BM_LANGUAGE_PREFIX');?>/wheel-history">
                                            <div class="last_colors_monitor d-flex">

                                                <?php// for ($i=0; $i < count($ini_wd['last_n']); $i++) : ?>

                                                <div class="lc lc_red <?php// echo $ini_wd['last_n'][$i]; ?>"></div>
                                                <div class="lc lc_green <?php// echo $ini_wd['last_n'][$i]; ?>"></div>
                                                <div class="lc lc_red <?php// echo $ini_wd['last_n'][$i]; ?>"></div>
                                                <div class="lc lc_blue <?php// echo $ini_wd['last_n'][$i]; ?>"></div>
                                                <div class="lc lc_red <?php// echo $ini_wd['last_n'][$i]; ?>"></div>
                                                <div class="lc lc_green <?php// echo $ini_wd['last_n'][$i]; ?>"></div>
                                                <div class="lc lc_red <?php// echo $ini_wd['last_n'][$i]; ?>"></div>
                                                <div class="lc lc_green <?php// echo $ini_wd['last_n'][$i]; ?>"></div>
                                                <div class="lc lc_blue <?php// echo $ini_wd['last_n'][$i]; ?>"></div>
                                                <?php// endfor; ?>

                                            </div>
                                        </a>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="player-columns">
                        <div class="wheel-game-color">
                        
                            <div class="color-header">
                                <div class="color-header__left">
                                    <div class="color-header__title color-header__title-first"> 2x </div>
                                    <div class="color-header__bank currency_CSF"> 
                                       10.31

                                    </div>
                                </div>
                                <div class="color-header__users">
                                    <div class="color-header__icon icon icon_users-bold">

                                    </div>
                                    <div class="color-header__users-count">
                                    <img src="data:image/svg+xml,%3Csvg fill='%23cddbff' width='20px' height='20px' viewBox='0 0 1024 1024' xmlns='http://www.w3.org/2000/svg'%3E%3Cg id='SVGRepo_bgCarrier' stroke-width='0'%3E%3C/g%3E%3Cg id='SVGRepo_tracerCarrier' stroke-linecap='round' stroke-linejoin='round'%3E%3C/g%3E%3Cg id='SVGRepo_iconCarrier'%3E%3Ccircle cx='435.2' cy='409.5' r='102.4'%3E%3C/circle%3E%3Cpath d='M588.8 409.5c0 17.6-3.1 34.5-8.6 50.3 2.9.2 5.7.9 8.6.9 56.6 0 102.4-45.8 102.4-102.4 0-56.6-45.8-102.4-102.4-102.4-26.1 0-49.7 10.1-67.8 26.2 40.9 27.7 67.8 74.4 67.8 127.4zM435.2 563.1c-128 0-179.2 25.6-179.2 102.4v102.6h358.4V665.5c0-77.3-51.2-102.4-179.2-102.4z'%3E%3C/path%3E%3Cpath d='M588.8 511.9c-14.5 0-27.9.4-40.5 1.1-2.3 2.5-4.6 4.9-7 7.2 63.7 13.5 124.2 49.5 124.2 145.3v51.4H768V614.3c0-77.3-51.2-102.4-179.2-102.4z'%3E%3C/path%3E%3C/g%3E%3C/svg%3E" />
                                        9

                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="bets">
                                    <img src="./img/Безымянный-1.jpg" class=" bets-img" alt="usr">
                                    <div class="user-info">
                                        <div class="currency_CSF">
                                            2.02
                                        </div>
                                        <div class="user-name">
                                            Epic
                                        </div>

                                    </div>

                                </div>
                                <div class="bets">
                                    <img src="./img/Безымянный-1.jpg" class=" bets-img" alt="usr">
                                    <div class="user-info">
                                        <div class="currency_CSF">
                                            2.02
                                        </div>
                                        <div class="user-name">
                                            Epic
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="wheel-game-color">

                            <div class="color-header">
                           
                                <div class="color-header__left">
                                    <div class="color-header__title color-header__title-second"> 3x </div>
                                    <div class="color-header__bank currency_CSF">
                                    10.31

                                    </div>
                                </div>
                                <div class="color-header__users">
                                    <div class="color-header__icon icon icon_users-bold">

                                    </div>
                                    <div class="color-header__users-count">
                                    <img src="data:image/svg+xml,%3Csvg fill='%23cddbff' width='20px' height='20px' viewBox='0 0 1024 1024' xmlns='http://www.w3.org/2000/svg'%3E%3Cg id='SVGRepo_bgCarrier' stroke-width='0'%3E%3C/g%3E%3Cg id='SVGRepo_tracerCarrier' stroke-linecap='round' stroke-linejoin='round'%3E%3C/g%3E%3Cg id='SVGRepo_iconCarrier'%3E%3Ccircle cx='435.2' cy='409.5' r='102.4'%3E%3C/circle%3E%3Cpath d='M588.8 409.5c0 17.6-3.1 34.5-8.6 50.3 2.9.2 5.7.9 8.6.9 56.6 0 102.4-45.8 102.4-102.4 0-56.6-45.8-102.4-102.4-102.4-26.1 0-49.7 10.1-67.8 26.2 40.9 27.7 67.8 74.4 67.8 127.4zM435.2 563.1c-128 0-179.2 25.6-179.2 102.4v102.6h358.4V665.5c0-77.3-51.2-102.4-179.2-102.4z'%3E%3C/path%3E%3Cpath d='M588.8 511.9c-14.5 0-27.9.4-40.5 1.1-2.3 2.5-4.6 4.9-7 7.2 63.7 13.5 124.2 49.5 124.2 145.3v51.4H768V614.3c0-77.3-51.2-102.4-179.2-102.4z'%3E%3C/path%3E%3C/g%3E%3C/svg%3E" />
                                        9

                                    </div>
                                </div>
                            </div>
                            <div class="user-bet-oder">
                                <div class="bets">
                                    <img src="./img/Безымянный-1.jpg" class=" bets-img" alt="usr">
                                    <div class="user-info">
                                        <div class="currency_CSF">
                                            2.02
                                        </div>
                                        <div class="user-name">
                                            Epic-cupamgjgjgmgjjgkhrtkhlrkhlerkhkrk
                                        </div>

                                    </div>

                                </div>
                                <div class="bets">
                                    <img src="./img/Безымянный-1.jpg" class=" bets-img" alt="usr">
                                    <div class="user-info">
                                        <div class="currency_CSF">
                                            2.02
                                        </div>
                                        <div class="user-name">
                                            Epic-cupamgjgjgmgjjgkhrtkhlrkhlerkhkrk
                                        </div>

                                    </div>

                                </div>
                                <div class="bets">
                                    <img src="./img/Безымянный-1.jpg" class=" bets-img" alt="usr">
                                    <div class="user-info">
                                        <div class="currency_CSF">
                                            2.02
                                        </div>
                                        <div class="user-name">
                                            Epic-cupamgjgjgmgjjgkhrtkhlrkhlerkhkrk
                                        </div>

                                    </div>

                                </div>
                                <div class="bets">
                                    <img src="./img/Безымянный-1.jpg" class=" bets-img" alt="usr">
                                    <div class="user-info">
                                        <div class="currency_CSF">
                                            2.02
                                        </div>
                                        <div class="user-name">
                                            Epic-cupamgjgjgmgjjgkhrtkhlrkhlerkhkrk
                                        </div>

                                    </div>

                                </div>
                                <div class="bets">
                                    <img src="./img/Безымянный-1.jpg" class=" bets-img" alt="usr">
                                    <div class="user-info">
                                        <div class="currency_CSF">
                                            2.02
                                        </div>
                                        <div class="user-name">
                                            Epic-cupamgjgjgmgjjgkhrtkhlrkhlerkhkrk
                                        </div>

                                    </div>

                                </div>
                                <div class="bets">
                                    <img src="./img/Безымянный-1.jpg" class=" bets-img" alt="usr">
                                    <div class="user-info">
                                        <div class="currency_CSF">
                                            2.02
                                        </div>
                                        <div class="user-name">
                                            Epic
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="wheel-game-color">

                            <div class="color-header">
                                <div class="color-header__left">
                                    <div class="color-header__title color-header__title-third"> 4x </div>
                                    <div class="color-header__bank currency_CSF">10.31

                                    </div>
                                </div>
                                <div class="color-header__users">
                                    <div class="color-header__icon icon icon_users-bold">

                                    </div>
                                    <div class="color-header__users-count">
                                    <img src="data:image/svg+xml,%3Csvg fill='%23cddbff' width='20px' height='20px' viewBox='0 0 1024 1024' xmlns='http://www.w3.org/2000/svg'%3E%3Cg id='SVGRepo_bgCarrier' stroke-width='0'%3E%3C/g%3E%3Cg id='SVGRepo_tracerCarrier' stroke-linecap='round' stroke-linejoin='round'%3E%3C/g%3E%3Cg id='SVGRepo_iconCarrier'%3E%3Ccircle cx='435.2' cy='409.5' r='102.4'%3E%3C/circle%3E%3Cpath d='M588.8 409.5c0 17.6-3.1 34.5-8.6 50.3 2.9.2 5.7.9 8.6.9 56.6 0 102.4-45.8 102.4-102.4 0-56.6-45.8-102.4-102.4-102.4-26.1 0-49.7 10.1-67.8 26.2 40.9 27.7 67.8 74.4 67.8 127.4zM435.2 563.1c-128 0-179.2 25.6-179.2 102.4v102.6h358.4V665.5c0-77.3-51.2-102.4-179.2-102.4z'%3E%3C/path%3E%3Cpath d='M588.8 511.9c-14.5 0-27.9.4-40.5 1.1-2.3 2.5-4.6 4.9-7 7.2 63.7 13.5 124.2 49.5 124.2 145.3v51.4H768V614.3c0-77.3-51.2-102.4-179.2-102.4z'%3E%3C/path%3E%3C/g%3E%3C/svg%3E" />
                                        9

                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="bets">
                                    <img src="./img/Безымянный-1.jpg" class=" bets-img" alt="usr">
                                    <div class="user-info">
                                        <div class="currency_CSF">
                                            2.02
                                        </div>
                                        <div class="user-name">
                                            Epic
                                        </div>

                                    </div>

                                </div>
                                <div class="bets">
                                    <img src="./img/Безымянный-1.jpg" class=" bets-img" alt="usr">
                                    <div class="user-info">
                                        <div class="currency_CSF">
                                            2.02
                                        </div>
                                        <div class="user-name">
                                            Epic
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="wheel-game-color">

                            <div class="color-header">
                                <div class="color-header__left">
                                    <div class="color-header__title color-header__title-firth"> x34 </div>
                                    <div class="color-header__bank currency_CSF">10.31

                                    </div>
                                </div>
                                <div class="color-header__users">
                                    <div class="color-header__icon icon icon_users-bold">

                                    </div>
                                    <div class="color-header__users-count">
                                    <img src="data:image/svg+xml,%3Csvg fill='%23cddbff' width='20px' height='20px' viewBox='0 0 1024 1024' xmlns='http://www.w3.org/2000/svg'%3E%3Cg id='SVGRepo_bgCarrier' stroke-width='0'%3E%3C/g%3E%3Cg id='SVGRepo_tracerCarrier' stroke-linecap='round' stroke-linejoin='round'%3E%3C/g%3E%3Cg id='SVGRepo_iconCarrier'%3E%3Ccircle cx='435.2' cy='409.5' r='102.4'%3E%3C/circle%3E%3Cpath d='M588.8 409.5c0 17.6-3.1 34.5-8.6 50.3 2.9.2 5.7.9 8.6.9 56.6 0 102.4-45.8 102.4-102.4 0-56.6-45.8-102.4-102.4-102.4-26.1 0-49.7 10.1-67.8 26.2 40.9 27.7 67.8 74.4 67.8 127.4zM435.2 563.1c-128 0-179.2 25.6-179.2 102.4v102.6h358.4V665.5c0-77.3-51.2-102.4-179.2-102.4z'%3E%3C/path%3E%3Cpath d='M588.8 511.9c-14.5 0-27.9.4-40.5 1.1-2.3 2.5-4.6 4.9-7 7.2 63.7 13.5 124.2 49.5 124.2 145.3v51.4H768V614.3c0-77.3-51.2-102.4-179.2-102.4z'%3E%3C/path%3E%3C/g%3E%3C/svg%3E" />
                                        9

                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="bets">
                                    <img src="./img/Безымянный-1.jpg" class=" bets-img" alt="usr">
                                    <div class="user-info">
                                        <div class="currency_CSF">
                                            2.02
                                        </div>
                                        <div class="user-name">
                                            Epic
                                        </div>

                                    </div>

                                </div>
                                <div class="bets">
                                    <img src="./img/Безымянный-1.jpg" class=" bets-img" alt="usr">
                                    <div class="user-info">
                                        <div class="currency_CSF">
                                            2.02
                                        </div>
                                        <div class="user-name">
                                            Epic
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>


        </main>

    </div>

</body>