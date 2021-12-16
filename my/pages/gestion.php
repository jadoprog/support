<section class="blc-account-management">
    <section class="nav-account-management">
        <div class="title account-management">Gestions de compte</div>
        <div class="blc-search-account-svg-filtre-btn">
            <!-- <div class="blc-search-account-svg"> -->
                <form action="">
                    <?php
                        $form = new Form();
        
                        $form->input('search', array(
                            'type' => 'text',
                            'class' => 'search-account-management',
                            'placeholder' => 'Recherchez...'
                        ))
                    ?>
                    <!-- <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="svg-search svg-inline--fa fa-search fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path></svg> -->
                </form>
            <!-- </div>      -->
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="list" class="svg-list svg-inline--fa fa-list fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M80 368H16a16 16 0 0 0-16 16v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16v-64a16 16 0 0 0-16-16zm0-320H16A16 16 0 0 0 0 64v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16V64a16 16 0 0 0-16-16zm0 160H16a16 16 0 0 0-16 16v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16v-64a16 16 0 0 0-16-16zm416 176H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0-320H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16V80a16 16 0 0 0-16-16zm0 160H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16z"></path></svg>
            <button class="btn-new-compte">Crée un compte</button>
        </div>
    </section> 
           
    <section class="title-list-gestion">
             <div class="contain-name-firstname">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="id-card" class="svg-card svg-title-gestion svg-inline--fa fa-id-card fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M528 32H48C21.5 32 0 53.5 0 80v16h576V80c0-26.5-21.5-48-48-48zM0 432c0 26.5 21.5 48 48 48h480c26.5 0 48-21.5 48-48V128H0v304zm352-232c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16zm0 64c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16zm0 64c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16zM176 192c35.3 0 64 28.7 64 64s-28.7 64-64 64-64-28.7-64-64 28.7-64 64-64zM67.1 396.2C75.5 370.5 99.6 352 128 352h8.2c12.3 5.1 25.7 8 39.8 8s27.6-2.9 39.8-8h8.2c28.4 0 52.5 18.5 60.9 44.2 3.2 9.9-5.2 19.8-15.6 19.8H82.7c-10.4 0-18.8-10-15.6-19.8z"></path></svg>
                <p class=" filter-modified-account name-firstname-gestion ">Prénom et Nom</p>
            </div>
                <div class="contain-identifiant">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="key" class="svg-key svg-title-gestion svg-inline--fa fa-key fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M512 176.001C512 273.203 433.202 352 336 352c-11.22 0-22.19-1.062-32.827-3.069l-24.012 27.014A23.999 23.999 0 0 1 261.223 384H224v40c0 13.255-10.745 24-24 24h-40v40c0 13.255-10.745 24-24 24H24c-13.255 0-24-10.745-24-24v-78.059c0-6.365 2.529-12.47 7.029-16.971l161.802-161.802C163.108 213.814 160 195.271 160 176 160 78.798 238.797.001 335.999 0 433.488-.001 512 78.511 512 176.001zM336 128c0 26.51 21.49 48 48 48s48-21.49 48-48-21.49-48-48-48-48 21.49-48 48z"></path></svg>
                    <p class=" filter-modified-account identifiant-gestion ">Identifiant</p>
                </div>
                    <div class="contain-email">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="at" class="svg-envelope svg-title-gestion svg-inline--fa fa-at fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C118.941 8 8 118.919 8 256c0 137.059 110.919 248 248 248 48.154 0 95.342-14.14 135.408-40.223 12.005-7.815 14.625-24.288 5.552-35.372l-10.177-12.433c-7.671-9.371-21.179-11.667-31.373-5.129C325.92 429.757 291.314 440 256 440c-101.458 0-184-82.542-184-184S154.542 72 256 72c100.139 0 184 57.619 184 160 0 38.786-21.093 79.742-58.17 83.693-17.349-.454-16.91-12.857-13.476-30.024l23.433-121.11C394.653 149.75 383.308 136 368.225 136h-44.981a13.518 13.518 0 0 0-13.432 11.993l-.01.092c-14.697-17.901-40.448-21.775-59.971-21.775-74.58 0-137.831 62.234-137.831 151.46 0 65.303 36.785 105.87 96 105.87 26.984 0 57.369-15.637 74.991-38.333 9.522 34.104 40.613 34.103 70.71 34.103C462.609 379.41 504 307.798 504 232 504 95.653 394.023 8 256 8zm-21.68 304.43c-22.249 0-36.07-15.623-36.07-40.771 0-44.993 30.779-72.729 58.63-72.729 22.292 0 35.601 15.241 35.601 40.77 0 45.061-33.875 72.73-58.161 72.73z"></path></svg>
                        <p class=" filter-modified-account email-gestion ">Email</p>
                    </div>
                <div class="contain-grade">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shield-alt" class="svg-shield svg-title-gestion svg-inline--fa fa-shield-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M466.5 83.7l-192-80a48.15 48.15 0 0 0-36.9 0l-192 80C27.7 91.1 16 108.6 16 128c0 198.5 114.5 335.7 221.5 380.3 11.8 4.9 25.1 4.9 36.9 0C360.1 472.6 496 349.3 496 128c0-19.4-11.7-36.9-29.5-44.3zM256.1 446.3l-.1-381 175.9 73.3c-3.3 151.4-82.1 261.1-175.8 307.7z"></path></svg>
                    <p class=" filter-modified-account grade-gestion ">Grade</p>
                </div>
            <div class="contain-status">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" class="svg-check svg-title-gestion svg-inline--fa fa-check-circle fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg>
                <p class=" filter-modified-account status-gestion ">Statut</p>
            </div>
    </section>


    <section class="info-account-list">
        <?php 
                        function addNewListAdmin(){?>
        <div class="bloc-info-account-list">
                <div class="part-all-name-firstname">
                    <div class="icon-profile red">K</div>
                    <p class="list-name-firstname">Kevin Jashari</p>
                </div>
                <div class="part-all-identifiant">
                    <div class="list-identifiant list">kjashari</div>
                </div>
                <div class="part-all-email">
                    <div class="list-email list">kevin.jashari@support.com</div>
                </div>
                <div class="part-all-grade">
                    <div class="list-grade list">Administrateur</div>
                </div>
                <div class="part-all-input">
                    <input type="checkbox" name="" id=""class="checkbox">
                </div>
        </div>
        <hr class=" separating-filter-info ">

        <?php } ?>

                <?php addNewListAdmin(); ?>
                <?php addNewListAdmin(); ?>
                <?php addNewListAdmin(); ?>
                <?php addNewListAdmin(); ?>
                <?php addNewListAdmin(); ?>
                <?php addNewListAdmin(); ?>
                <?php addNewListAdmin(); ?>

                <?php 
                        function addNewListClient(){?>

            <div class="bloc-info-account-list">
                <div class="part-all-name-firstname">
                    <div class="icon-profile red">K</div>
                    <p class="list-name-firstname">Kevin Jashari</p>
                </div>
                <div class="part-all-identifiant">
                    <div class="list-identifiant list">kjashari</div>
                </div>
                <div class="part-all-email">
                    <div class="list-email list">kevin.jashari@support.com</div>
                </div>
                <div class="part-all-grade">
                    <div class="list-grade list">client</div>
                </div>
                <div class="part-all-input">
                    <input type="checkbox" name="" id=""class="checkbox">
                </div>
        </div>
        <hr class=" separating-filter-info ">
        <?php } ?>

                <?php addNewListClient(); ?>
                <?php addNewListClient(); ?>
                <?php addNewListClient(); ?>
                <?php addNewListClient(); ?>
                <?php addNewListClient(); ?>
                <?php addNewListClient(); ?>
                <?php addNewListClient(); ?>

    </section>
</section>