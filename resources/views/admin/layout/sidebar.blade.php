<!--  BEGIN SIDEBAR  -->
<div class="sidebar-wrapper sidebar-theme">

    <div id="dismiss" class="d-lg-none"><i class="flaticon-cancel-12"></i></div>

    <nav id="sidebar" style="background-color: #FFB901;">


        <ul class="list-unstyled menu-categories" id="accordionExample">


            <li class="menu" style="color: black;">
                <a href="/dashboard" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 24 24">
                            <style>
                                svg {
                                    fill: #502ACD;
                                }
                            </style>
                            <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8v-10h-8v10zm0-18v6h8V3h-8z" />
                        </svg>

                        <span style="font-size: 18px; color: black;">Dashboard</span>
                    </div>
                </a>
            </li>

            @if(Auth::user()->role_id == 0)
            <li class="menu" style="color: black;">
                <a href="/aksespengguna" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <style>
                                svg {
                                    fill: #502ACD
                                }
                            </style>
                            <path
                                d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                        </svg>
                        <span style="font-size: 18px; color: black;">Akses Pengguna</span>
                    </div>
                </a>
            </li>
            @endif





            <li class="menu">
                <a href="/inputdata" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 24 24">
                            <style>
                                svg {
                                    fill: #502ACD;
                                }
                            </style>
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17h-2v-6h2v6zm0-8h-2V7h2v4zm6 8h-2v-6h2v6zm0-8h-2V7h2v4z" />
                        </svg>

                        <span style="font-size: 18px; color: black;">Input Data</span>
                    </div>
                </a>
            </li>
            @if(Auth::user()->role_id == 0 || Auth::user()->role_id == 3)
            <li class="menu">
                <a href="/list-lamaran" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 24 24">
                            <style>
                                svg {
                                    fill: #502ACD;
                                }
                            </style>
                            <path
                                d="M16 2H7c-1.1 0-2 .9-2 2v18c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V6l-6-4zM8 4h8v4h-8V4zm1 14v-2h6v2H9zm0-4v-2h6v2H9zm0-4V9h6v2H9zm10 7H8v-4h11v4z" />
                        </svg>



                        <span style="font-size: 18px; color: black;">Lamaran Pekerjaan</span>
                    </div>
                </a>
            </li>
            @endif





        </ul>
    </nav>

</div>



<!--  END SIDEBAR  -->