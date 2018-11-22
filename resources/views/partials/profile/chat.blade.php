<!--main content start-->
    <div class="wrapper">
      <section id="content">
        <!-- page start-->
        <div class="chat-room mt">
          <aside class="mid-side">
            <div class="chat-room-head">
              <h3>Chat Room</h3>
            </div>

            <div class="group-rom">
              <div class="first-part odd">Pikachu</div>
              <div class="second-part">Pika pika?</div>
              <div class="third-part">12:30</div>
            </div>
            <div class="group-rom">
              <div class="first-part">Squirtle</div>
              <div class="second-part">Squirtle squirt</div>
              <div class="third-part">12:31</div>
            </div>

            <footer>
              <div class="chat-txt">
                <input type="text" class="form-control">
              </div>
              <div class="btn-group hidden-sm hidden-xs">
                <button type="button" class="btn btn-white"><i class="fa fa-meh-o"></i></button>
                <button type="button" class="btn btn-white"><i class=" fa fa-paperclip"></i></button>
              </div>
              <button class="btn btn-theme">Send</button>
            </footer>
          </aside>
          <aside class="right-side">
            <div class="user-head">
              <a href="#" class="chat-tools btn-theme"><i class="fa fa-cog"></i> </a>
            </div>
            <div class="invite-row">
              <h4 class="pull-left">Friends</h4>
              <a href="#" class="btn btn-theme04 pull-right">+ Invite</a>
            </div>
            <ul class="chat-available-user">
              <li>
                <a href="chat_room.html">
                  <img class="img-circle" src="{{URL::to('img/pika.png')}}" width="32">
                  Pikachu
                  </a>
              </li>
              <li>
                <a href="chat_room.html">
                  <img class="img-circle" src="{{URL::to('img/squirtle.png')}}" width="32">
                  Squirtle
                  </a>
              </li>
            </ul>
          </aside>
        </div>
        <!-- page end-->
      </section>
      <!-- /wrapper -->
    </div>
