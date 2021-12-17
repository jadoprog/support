<section class="sec-conversation" id="sec-conversation">


<div class="container">
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card chat-app">
                <div id="plist" class="people-list">
                    <div class="input-group input-search-bar">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-search"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                    <ul class="list-unstyled chat-list mt-2 mb-0">
                        <?php
                            $ticket = new Ticket();
                            $ticket::getTicket(true);
                        ?>
                    </ul>
                </div>
                <div class="chat">
                    <div class="chat-header clearfix">
                        <div class="row">
                        <div id="icon-profil-blc-user" class="icon-profile <?php getInfo(1, 'colorProfil') ?>"><?php getInfo(2, 'firstname') ?></div>
                            <p class="list-name-firstname">Kevin Jashari</p>
                        </div>
                    </div>
                    <div class="chat-history">
                        <ul class="m-b-0">
                            <li class="clearfix me-msg">
                                <div class="message-data text-right">
                                    <div class="message-data-time">10:10 AM, Today</div>
                                   
                                    <div id="icon-profil-blc-user" class="icon-profile <?php getInfo(1, 'colorProfil') ?>"><?php getInfo(2, 'firstname') ?></div>
                                </div>
                                <div class="message other-message float-right"> Hi Aiden, how are you? How is the project coming along? </div>
                            </li>
                            <li class="clearfix">
                                <div class="message-data">
                                    <div id="icon-profil-blc-user" class="icon-profile <?php getInfo(1, 'colorProfil') ?>"><?php getInfo(2, 'firstname') ?></div>
                                    <div class="message-data-time">10:12 AM, Today</div>
                                </div>
                                <div class="message my-message">Are we meeting today?</div>                                    
                            </li>                               
                            <li class="clearfix">
                                <div class="message-data">
                                    <div id="icon-profil-blc-user" class="icon-profile <?php getInfo(1, 'colorProfil') ?>"><?php getInfo(2, 'firstname') ?></div>
                                    <div class="message-data-time">10:15 AM, Today</div>
                                </div>
                                <div class="message my-message">Project has been already finished and I have results to show you.</div>
                            </li>
                        </ul>
                    </div>
                    <div class="chat-message clearfix">
                        <div class="input-group mb-0 chat-text-message">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-send"></i></span>
                            </div>
                            <input type="text" class="form-control message-text" placeholder="Enter text here...">                                    
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paper-plane" class="svg-paper-plane svg-inline--fa fa-paper-plane fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M476 3.2L12.5 270.6c-18.1 10.4-15.8 35.6 2.2 43.2L121 358.4l287.3-253.2c5.5-4.9 13.3 2.6 8.6 8.3L176 407v80.5c0 23.6 28.5 32.9 42.5 15.8L282 426l124.6 52.2c14.2 6 30.4-2.9 33-18.2l72-432C515 7.8 493.3-6.8 476 3.2z"></path></svg>
                            
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section> 