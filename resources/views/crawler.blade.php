<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>贴吧爬虫</title>
    </head>
    <script src="/js/jquery-3.3.1.min.js"></script>

    @include('import')
    <body>
        <h1 class="ui center aligned header">百度贴吧爬虫</h1>
        <div class="ui main text container">
            <div class="ui sizer vertical segment">
              <h2 class="ui big center aligned header smallheader">目标功能</h2>
              <p>
                  项目目标构建大学生
                  <strong>舆情汇集</strong>、
                  <strong>舆情分析研判</strong>、
                  <strong>舆情预防监控</strong>、
                  <strong>舆情干预处置</strong>、
                  <strong>舆情跟踪反馈</strong>系统。
                  在确定百度贴吧作为数据源后，百度贴吧所需要实现的效果是：
                  <p style="margin-top:-10px;">
                      <strong>
                          第一：汇集完整数据。
                      </strong>
                      编写爬虫尽可能获取到所有的数据，
                      包括页面及html代码中显示出来的所用用户数据和信息包括
                      （用户id，用户名，用户当前活跃度，用户等级，用户性别，用户吧龄，
                      用户参与过的帖子，用户发帖或回复的时间，内容，客户端等）
                  </p>
                  <p style="margin-top:-10px;">
                      <strong>
                          第二：快速采集数据。
                      </strong>
                      采用多线程，多进程的方式进行数据的爬取，
                      爬虫可以大幅度缩减获取数据消耗的时间提高效率。
                  </p>
                  <p style="margin-top:-10px;">
                      <strong>
                          第三：定时采集监控。
                      </strong>
                      第三：定时采集监控。编写定时服务程序和关键词监控程序，进行定时监控。
                      贴吧的帖子排列顺序是按照最后活跃的时间，所以活跃的帖子会被顶在首页，
                      很久没人关注的帖子就被排在后面，
                      所以每隔一定实现重新爬取前几页的帖子就可以实现监控的效果。
                  </p>
                  <p style="margin-top:-10px;">
                      <strong>
                          第四：长时间运行稳定。
                      </strong>
                      将程序部署在阿里云服务器运行，
                      并使用完善的日志系统，可以快速检测程序错误，并迭代更新。
                  </p>
              </p>
              <!-- <p style="margin-top:-10px; color:#DF5A26;"></p> -->

              <!-- <div id="user_platform" class="ui container" style="width: 600px;height:400px;"></div>
              <h3 class="ui big center aligned header smallheader">[各大平台活跃度问卷调查结果]</h3> -->


              <h2 class="ui big center aligned header smallheader">可获取的内容</h2>
              <h4 class="ui horizontal divider header" style="margin-top:50px;">
              <div class="ui tiny statistic">
                  <div class="value">1</div>
                  <div class="label">基本帖子内容 </div>
              </div>
              </h4>
              <p>
                  帖子内容主要有帖子标题、帖子内容、楼层、发帖时间、
                  发帖客户端类型、发帖用户、发帖用户称号。如下图示。
              </p>
              <img class="ui centered bordered segment rounded image" src="/img/tiezi1.png">

              <div class="ui section divider"></div>
              <h4 class="ui horizontal divider header" style="margin-top:50px;">
              <div class="ui tiny statistic">
                  <div class="value">2</div>
                  <div class="label">用户基本内容 </div>
              </div>
              </h4>
              <p>
                  将鼠标置于用户头像上方还可以获取到用户的性别，吧龄，总发帖数。如下图示。
              </p>
              <img class="ui centered bordered segment rounded image" src="/img/personal.png">

              <div class="ui section divider"></div>

              <h4 class="ui horizontal divider header" style="margin-top:50px;">
              <div class="ui tiny statistic">
                  <div class="value">3</div>
                  <div class="label">隐藏内容 </div>
              </div>
              </h4>
              <p>
                  在网页的代码中还有更多相关信息用户id、用户性别、用户等级、用户活跃度、是否为吧务、
                  是否为匿名贴、帖子、当前楼层回复数等。如下图示。
                  <strong>（由于时间有限，还有很多数据可以发掘分析）</strong>
              </p>
              <img class="ui centered bordered segment rounded image" src="/img/yincang.png">

              <h4 class="ui horizontal divider header" style="margin-top:50px;">
              <div class="ui tiny statistic">
                  <div class="value">4</div>
                  <div class="label">回复内容 </div>
              </div>
              </h4>
              <p>
                  在楼层的回复中还有评论信息，包括评论用户，被回复人信息，评论内容，评论时间。如下图示。
              </p>
              <img class="ui centered bordered segment rounded image" src="/img/huifu1.png">

              <!-- <div id="WCI" class="ui container" style="width: 600px;height:500px;"></div>
              <h3 style="margin-top:1.5em;" class="ui big center aligned header smallheader">[微信公众号活跃度结果]</h3> -->

              <h2 class="ui big center aligned header smallheader">效果展示</h2>

              <h4 class="ui horizontal divider header" style="margin-top:50px;"><div class="ui tiny statistic">
                  <div class="value">1</div>
                  <div class="label">用户数据 </div></div>
              </h4>
              <p>
                  用户信息包括id、昵称、性别、头像连接、是否喜欢、等级、称号、当前得分（活跃）、
                  是否为吧务、吧龄、活跃度（尚未计算）、发过的帖子id、回帖id、评论id。如下图示。
              </p>
              <img class="ui centered bordered segment rounded image" src="/img/saved_info.png">

              <h4 class="ui horizontal divider header" style="margin-top:50px;"><div class="ui tiny statistic">
                  <div class="value">2</div>
                  <div class="label">帖子数据 </div></div>
              </h4>
              <p>
                  帖子信息包括帖子id、发帖人id、发帖时间、回贴数、活跃度、楼层id列表。如下图示。
              </p>
              <img class="ui centered bordered segment rounded image" src="/img/saved_post.png">

              <h4 class="ui horizontal divider header" style="margin-top:50px;"><div class="ui tiny statistic">
                  <div class="value">3</div>
                  <div class="label">楼层数据 </div></div>
              </h4>
              <p>
                  楼层数据包括所属帖子id、楼层id、楼层用户id、发布客户端、发布时间、楼层数、评论数、活跃度、
                  评论列表、评论id、评论人用户名、评论内容、评论时间。如下图示。
              </p>
              <img class="ui centered bordered segment rounded image" src="/img/saved_comment.png">


              <h4 class="ui horizontal divider header" style="margin-top:50px;">
              <div class="ui tiny statistic">
                  <div class="value">5</div>
                  <div class="label">已获取数据量 </div>
              </div>
              </h4>


              <div class="ui center aligned three column stackable grid" style="margin-top:20px;">
                  <div class="column" style="margin:0px 0px 0px -50px;">
                      <div class="ui large statistic">
                          <div class="value">
                              45,833
                          </div>
                          <div class="label">用户数量 </div>
                      </div>
                  </div>
                  <div class="column" style="margin:0px 30px 0px 30px;">
                      <div class="ui large statistic">
                          <div class="value">
                              47,719
                          </div>
                          <div class="label">帖子数 </div>
                      </div>
                  </div>
                  <div class="column" style="margin:0px -50px 0px 0px;">
                      <div class="ui large statistic">
                          <div class="value">
                              512,439
                          </div>
                          <div class="label">总楼层数 </div>
                      </div>
                  </div>
              </div>
              <h2 class="ui big center aligned header smallheader">舆情分析</h2>
              <p>
                  使用自然语言处理工具，结合已获取的数据进行舆情数据的分析，
                  并且将系统部署在服务器上，定时监控，定时分析，初步形成较完整的舆情系统。
              </p>


              <a href="/analysis"><h2 class="ui big center aligned header smallheader" style="margin-top:2em;">
                  舆情分析
                  <i class="angle double right icon"></i>
              </h2></a>
            </div>
        </div>
    </body>
    <script src="/js/crawler.js" charset="utf-8"></script>
</html>
