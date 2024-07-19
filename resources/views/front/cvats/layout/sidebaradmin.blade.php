<!--  BEGIN SIDEBAR  -->

    <!-- Isi sidebar Anda di sini -->
    <style>
    

        .menu svg {
            fill: #502ACD; /* Warna ikon normal */
            transition: fill 0.3s; /* Transisi untuk efek hover/focus */
        }

        .menu a:hover svg,
        .menu a:focus svg {
            fill: #0080ff; /* Warna ikon saat hover atau focus */
        }
    </style>
    

<div class="sidebar-wrapper "> <!-- Atur lebar sidebar sesuai kebutuhan -->
    <nav id="sidebar" style="background-color: #ffffff;">
        <!-- Isi sidebar Anda di sini -->
        
        

        <ul class="list-unstyled menu-categories" id="accordionExample">

            <li class="menu" style="color: black;">
                <a href="/profile" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 64 64">
                            <circle cx="32" cy="32" r="32" fill="#502ACD"/>
                            <circle cx="32" cy="24" r="16" fill="#ffffff"/>
                            <path d="M32 40c-11.046 0-20 8.954-20 20v4h40v-4c0-11.046-8.954-20-20-20z" fill="#ffffff"/>
                          </svg>
                          
                        <span style="font-size: 16px; color: black;"> Profile</span>
                    </div>
                </a>
            </li>

            <li class="menu" style="color: black;">
                <a href="#submenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512">
                            <!-- Ganti dengan ikon "data" yang sesuai -->
                            <path fill="currentColor" d="M416 0H32C14.33 0 0 14.33 0 32v448c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32V32c0-17.67-14.33-32-32-32zM224 448H64v-64h160v64zm0-128H64v-64h160v64zm0-128H64v-64h160v64zm160 256H224v-64h160v64zm0-128H224v-64h160v64zm0-128H224v-64h160v64zm128 256H352v-64h160v64zm0-128H352v-64h160v64zm0-128H352v-64h160v64z"/>
                        </svg>
                        <span style="font-size: 18px; color: black;"> Lengkapi DataDiri</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                
                <ul class="collapse submenu  list-unstyled" id="submenu" data-parent="#accordionExample">

                    <li class="menu" style="color: black;">
                        <a href="/informasipribadi" aria-expanded="false" class="dropdown-toggle">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
                                </svg>
                                <span style="font-size: 18px; color: black;">Informasi Pribadi</span>
                            </div>
                        </a>
                    </li>
                    

                    <li class="menu" style="color: black;">
                        <a href="/pengalaman" aria-expanded="false" class="dropdown-toggle">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/>
                                </svg>
                                <span style="font-size: 18px; color: black;">Riwayat Pekerjaan</span>
                            </div>
                        </a>
                    </li>
                    

                    <li class="menu" style="color: black;">
                        <a href="#submenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512">
                                    <path fill="currentColor" d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z"/>
                                </svg>
                                <span style="font-size: 18px; color: black;"> Pendidikan</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        

                        <ul class="collapse submenu  list-unstyled" id="submenu" data-parent="#accordionExample">
                            <li>
                                
                                <a href="/formal" style="font-size: 16px;color: black;" > Formal </a>
                            </li>
                            <li>
                                <a href="/nonformal " style="font-size: 14px; color: black;"> Non Formal</a>
                            </li>
                         
        
                        </ul>
                    
                    </li>

                   

                    <li class="menu">
                        <a href="/skill" aria-expanded="false" class="dropdown-toggle">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M160 80c0-26.5 21.5-48 48-48h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H208c-26.5 0-48-21.5-48-48V80zM0 272c0-26.5 21.5-48 48-48H80c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V272zM368 96h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H368c-26.5 0-48-21.5-48-48V144c0-26.5 21.5-48 48-48z"/>
                                </svg>
                                <span style="font-size: 18px; color: black;">Skill</span>
                            </div>
                        </a>
                    </li>
                    

                    <li class="menu" style="color: black;">
                        <a href="/sosiallink/create" aria-expanded="false" class="dropdown-toggle">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512">
                                    <path fill="currentColor" d="M579.8 267.7c56.5-56.5 56.5-148 0-204.5c-50-50-128.8-56.5-186.3-15.4l-1.6 1.1c-14.4 10.3-17.7 30.3-7.4 44.6s30.3 17.7 44.6 7.4l1.6-1.1c32.1-22.9 76-19.3 103.8 8.6c31.5 31.5 31.5 82.5 0 114L422.3 334.8c-31.5 31.5-82.5 31.5-114 0c-27.9-27.9-31.5-71.8-8.6-103.8l1.1-1.6c10.3-14.4 6.9-34.4-7.4-44.6s-34.4-6.9-44.6 7.4l-1.1 1.6C206.5 251.2 213 330 263 380c56.5 56.5 148 56.5 204.5 0L579.8 267.7zM60.2 244.3c-56.5 56.5-56.5 148 0 204.5c50 50 128.8 56.5 186.3 15.4l1.6-1.1c14.4-10.3 17.7-30.3 7.4-44.6s-30.3-17.7-44.6-7.4l-1.6 1.1c-32.1 22.9-76 19.3-103.8-8.6C74 372 74 321 105.5 289.5L217.7 177.2c31.5-31.5 82.5-31.5 114 0c27.9 27.9 31.5 71.8 8.6 103.9l-1.1 1.6c-10.3 14.4-6.9 34.4 7.4 44.6s34.4 6.9 44.6-7.4l1.1-1.6C433.5 260.8 427 182 377 132c-56.5-56.5-148-56.5-204.5 0L60.2 244.3z"/>
                                </svg>
                                <span style="font-size: 18px; color: black;">Sosial Link</span>
                            </div>
                        </a>
                    </li>
                    

                    

                    
            
                  
                 

                </ul>
            </li>


            
            <li class="menu" style="color: black;">
                <a href="/preview/index" aria-expanded="false" class="dropdown-toggle">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                            <path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V304H176c-35.3 0-64 28.7-64 64V512H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM176 352h32c30.9 0 56 25.1 56 56s-25.1 56-56 56H192v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V448 368c0-8.8 7.2-16 16-16zm32 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H192v48h16zm96-80h32c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H304c-8.8 0-16-7.2-16-16V368c0-8.8 7.2-16 16-16zm32 128c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H320v96h16zm80-112c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H448v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H448v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V432 368z"/>
                        </svg>
                        <span style="font-size: 16px; color: black;">Down CVATS</span>
                    </div>
                </a>
            </li>

            <li class="menu" style="color: black;">
                <a href="/templatesrt" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#502ACD}</style><path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V304H176c-35.3 0-64 28.7-64 64V512H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM176 352h32c30.9 0 56 25.1 56 56s-25.1 56-56 56H192v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V448 368c0-8.8 7.2-16 16-16zm32 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H192v48h16zm96-80h32c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H304c-8.8 0-16-7.2-16-16V368c0-8.8 7.2-16 16-16zm32 128c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H320v96h16zm80-112c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H448v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H448v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V432 368z"/></svg>
                        <span style="font-size: 16px; color: black;"> Down Surat Lamaran</span>
                    </div>
                </a>
            </li>


           

        </ul>

        <ul class="list-unstyled menu-categories" id="accordionExample">

       
        </ul>
    </nav>

</div>



<script>
    document.addEventListener("DOMContentLoaded", function() {
        const menuItems = document.querySelectorAll('.menu');

        menuItems.forEach(item => {
            const link = item.querySelector('a');
            const href = link.getAttribute('href');

            // Menentukan halaman saat ini
            const currentLocation = window.location.pathname;

            // Mengatur kelas 'active' untuk halaman saat ini
            if (currentLocation === href) {
                item.classList.add('active');
            }

            // Menambahkan event listener untuk setiap item menu
            item.addEventListener('click', function() {
                // Menghapus kelas 'active' dari semua menu
                menuItems.forEach(menu => {
                    menu.classList.remove('active');
                });

                // Menambahkan kelas 'active' ke menu yang sedang diklik
                this.classList.add('active');
            });
        });
    });
</script>




<!--  END SIDEBAR  -->
