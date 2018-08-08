<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
      <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <h4 class="text-xs-center">Responsive Chat Template</h4>
                <div class="col-xs-6 offset-xs-7 col-md-3 offset-md-5">
                    <div class="btn-group">
                        <button class="btn btn-primary dropdown-toggle btn-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="fa fa-comments float-xs-left">Chat
                        </button>
                        <ul class="dropdown-menu pb-chat-dropdown">
                            <li>
                                <div class="card card-info pb-chat-panel">
                                    <div class="card card-header pb-chat-panel-heading">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <a href="#">
                                                    <label id="support_label">Lorem support</label>
                                                </a>
                                                <a href="#"><span class="fa fa-cog float-xs-right pb-chat-top-icons"></span></a>
                                                <a href="#"><span class="fa fa-share float-xs-right pb-chat-top-icons"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <form>
                                            <div class="form-group">
                                                <span class="fa fa-lg fa-user pb-chat-fa-user"></span><span class="tag label-default pb-chat-labels pb-chat-labels-left">Hi, how are you?</span>
                                            </div>
                                            <hr>
                                            <div class="form-group float-xs-right pb-chat-labels-right">
                                                <span class="tag label-primary pb-chat-labels pb-chat-labels-primary">Hi, i'm fine, you?</span><span class="fa fa-lg fa-user pb-chat-fa-user"></span>
                                            </div>
                                            <div class="clearfix"></div>
                                            <hr>
                                            <div class="form-group">
                                                <span class="fa fa-lg fa-user pb-chat-labels pb-chat-fa-user"></span><span class="tag label-default pb-chat-labels pb-chat-labels-left">I'm great, wanna hangout?</span>
                                            </div>
                                            <hr>
                                            <div class="form-group float-xs-right pb-chat-labels-right">
                                                <span class="tag label-primary pb-chat-labels pb-chat-labels-primary">No, huehuehue</span><span class="fa fa-lg fa-user pb-chat-fa-user"></span>
                                            </div>
                                            <div class="clearfix"></div>
                                            <hr>
                                            <div class="form-group float-xs-right pb-chat-labels-right">
                                                <span class="tag label-primary pb-chat-labels pb-chat-labels-primary">I'm busy hanging out :D</span><span class="fa fa-lg fa-user pb-chat-fa-user"></span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-xs-10">
                                                <textarea class="form-control pb-chat-textarea" placeholder="Type your message here..."></textarea>
                                            </div>
                                            <div class="col-xs-2 pb-btn-circle-div">
                                                <button class="btn btn-primary btn-circle pb-chat-btn-circle"><span class="fa fa-chevron-right"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </body>
</html>
