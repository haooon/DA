<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>数据的重要性</title>
    </head>
    <script src="/js/jquery-3.3.1.min.js"></script>
    @include('import')
    <body>
        <h1 class="ui center aligned header">选择合适的平台</h1>
        <div class="ui main text container">
            <div class="ui sizer vertical segment">
              <h2 class="ui big center aligned header smallheader">主要选项</h2>
              <p>
                  因为需要针对大学生网络舆情信息进行
                  <strong>舆情的研判</strong>、
                  <strong>舆情的预防监控</strong>、
                  <strong>舆情干预处置</strong>、
                  <strong>舆情跟踪反馈</strong>。
                  首先要做舆情分析就要保证舆情满足舆情，不能有过多的干预，
                  其次项目主要分析对象是大学生，同时还需要能实现跟踪反馈，
                  这里就需要信息能技术获取到，并能同步分析
                  所以我们就有了选择网络平台的准则。
              </p>
              <p style="margin-top:-10px; color:#DF5A26;">
                  第一：要针对大学生群体、
                  第二：要绝对保证学生的隐私、
                  第三：要保证数据的完整性、
                  第四：要保证数据持续更新、
                  第五：要保证数据真实且自由。
              </p>
              <p>针对需求准则我们对学生进行了问卷调查，结果如下。</p>
              <div id="user_platform" class="ui container" style="width: 600px;height:400px;"></div>
              <h3 class="ui big center aligned header smallheader">[各大平台活跃度问卷调查结果]</h3>
              <p>
                  问卷调查的结果显示，大学生日常接触使用的网络信息分享共享平台或工具大致有以下几种：
                  （ QQ空间、微信朋友圈、微信公众号、新浪微博、新闻网站、各类论坛、百度贴吧、博客、其他动态网站 ）
              </p>
              <p>
                  通过前面得到的准则可以进行平台数据源的过滤，
                  首先各类论坛、新闻网站、各类博客，此类平台面向社会相对开放，不集中于大学生
                  不满足准则一，QQ空间以及微信朋友圈设计过多个人隐私不满足准则二。
                  在筛选后我们对剩下的平台进行详细的分析（微信公众号、新浪微博、百度贴吧）。
              </p>

              <h2 class="ui big center aligned header smallheader">微信公众号</h2>
              <p style="margin-bottom:-10px;"><strong>优点：</strong></p>
              <p>
                  选择由校方运营的微信公众号可以确保参与者基本为大学生，
                  可选择公众号进行跟踪，收集数据并进行分析。
              </p>
              <p>
                  以合肥工业大学几大公众号作为数据源进行筛选，选择较活跃的公众号进行跟踪分析。
                  我们选择的公众号有：
                  合肥工业大学、
                  合肥工业大学团委、
                  微言合工大、
                  工大后院儿、
                  合肥工业大学学生会、
                  合工大建艺、
                  仪器风发、
                  合工大食品学院、
                  合工大材料学院、
                  合工大资环学院。
                  对这些公众号进行活跃度的分析得到活跃度排行。
              </p>
              <p>
                  这里使用新榜NRI算法活跃度算法进行排序，使用清博WCI算法进行验证。
                  新榜NRI算法和清博WCI算法用于多维度衡微信公众号的影响力。
                  用于衡量中国移动互联渠道新媒体(主要指两微一端)的传播能力，此指数反映该新媒体主体的热度和发展趋势。使用大量历史数据，
                  用户反馈得出的科学计算方法。
              </p>
              <h4 style="text-align: left; margin-top: -10px;">
                  新榜NRI算法：<a href="http://www.newrank.cn/public/about/reference.pdf" target="_blank">
                  http://www.newrank.cn/public/about/reference.pdf
                </a>
              </h4>
              <h4 style="text-align: left; margin-top: -10px;">
                  清博WCI算法：
                  <a href="http://www.gsdata.cn/site/usage" target="_blank">
                      http://www.gsdata.cn/site/usage
                  </a>
              </h4>
              <div id="WCI" class="ui container" style="width: 600px;height:500px;"></div>
              <h3 style="margin-top:1.5em;" class="ui big center aligned header smallheader">[微信公众号活跃度结果]</h3>
              <p style="margin-bottom:-10px;"><strong>缺点：</strong></p>
              <p>
                  所选公众号由校方运营，虽说可以确保用户质量，但是不能保证数据质量，
                  学生在公众号文章下的评论要先经过公众号后台的审核，审核通过才可以发布，
                  这会降低用户反馈的真实性。并且公众号的活跃度确实不高，达不到实现跟踪分析的数据量。
                  故放弃使用微信公众号作为数据源。
              </p>



              <h2 class="ui big center aligned header smallheader">微博微博</h2>
              <p>
                  微博数据源通过，抓包制作爬虫进行数据的收集，并尝试进行用户关系的分析
                  主要选取合肥工业大学相关的几大官方微博进行数据的跟踪分析。
                  主要想法通过官方微博账号的粉丝确定监控的用户群体，
                  通过多个官方微博账号的粉丝进行比较选出核心关注的用户作为重点关注对象。
                  再通过收集用户转发或发布的相关微博进行内容分类、情感分析等其他分析。
              </p>
              <p>
                  选取的校官方微博账号有（
                  <strong>合肥工业大学</strong>，
                  <strong>合肥工业大学团委</strong>，
                  <strong>合肥工业大学学生会</strong>，
                  <strong>合肥工业大学计算机与信息学院</strong>，
                  <strong>合肥工业大学图书馆</strong>，
                  <strong>合肥工业大学广播台</strong>
                  ）
              </p>

          </div>
      </div>

      <div class="ui container">
            <div id="WeiBo" style="width: 100%;height:1000px; margin-top:-200px;"></div>
      </div>
      <h3 style="margin-top:-50px;" class="ui big center aligned header smallheader">
          [微博核心用户关系图]
      </h3>


      <div class="ui main text container">
          <div class="ui sizer vertical segment">
              <div class="ui center aligned three column stackable grid" style="margin-left:40px;">
                  <div class="column" style="margin-left:-50px;margin-right:50px;">
                      <div class="ui huge statistic">
                          <div class="value">
                              89,937
                          </div>
                          <div class="label">实际总粉丝数 </div>
                      </div>
                  </div>
                  <div class="column" style="margin-top:25px;">
                      <div class="ui small statistic">
                          <div class="value">
                              13,428
                          </div>
                          <div class="label">已采集粉丝数 </div>
                      </div>
                  </div>
                  <div class="column" style="margin-top:15px;">
                      <div class="ui large statistic">
                          <div class="ui red statistic">
                              <div class="value">
                                  74,732
                              </div>
                              <div class="label">微博数据保护粉丝数 </div>
                          </div>
                      </div>
                  </div>
              </div>
                  <p>
                      经过初步的试探，爬取六大官方微博粉丝进行分析效果十分不理想，
                      原因主要是新浪微博的数据保护机制，在尝试过各平台微博的爬虫后最终获取到的用户数只有总数的
                      <strong style="color:#DB2828">14.7%</strong>，
                      <!-- ，进行核心用户过滤后（通过用户关注两个及以上校官方客户端进行筛选）只剩下
                      <strong style="color:#DB2828">1443人</strong>， -->
                      再进行活跃要求过滤后（通过用户关注过校官方客户端且发帖数大于50且关注数量大于20，粉丝数量大于20进行筛选）剩下
                      <strong style="color:#DB2828">不到9000人</strong>。
                  </p>
                  <p>
                      尝试破解数据保护扩增用户后（在已有用户基础上搜索已有用户粉丝获取未知用户*单层搜索*，
                      保证用户关注过一个校方官方微博，且满足活跃度要求）增加到
                      <strong style="color:#DB2828">12000左右</strong>。
                      这里新浪微博的数据保护机制使我们能获取到的用户大约只有总数的
                      <strong style="color:#DB2828">13.3%</strong>。
                  </p>
                  <p>
                      相比微信公众号新浪微博内容的审核更加宽松，更加适舆情的分析，
                      但是考虑到部分用户可能为学生家长，教师，学校周边商贩等，
                      并且用户转发内容较多，原创内容较少，图片视频内容较多，
                      文本内容较少，故放弃微博作为舆情分析的数据源。
                  </p>

              <h2 class="ui big center aligned header smallheader">百度贴吧</h2>
              <p>
                  相比较微信公众号以及新浪微博，百度贴吧具备两者的优点，
                  <strong>第一用户的质量有保证</strong>，
                  虽然合工大贴吧中会包含少数他校学生以及少量社会人员，
                  但肯定是以合工大的学生为主。
                  <strong>第二数据量以及数据完整性有保证</strong>，
                  百度贴吧没有和新浪微博类似的数据保护措施，可以大规模爬取数据，
                  并且可以定时稳定地进行数据的收集跟踪。
                  并且<strong>数据不会涉及到学生隐私</strong>，
                  且<strong>数据具有一定的自由度适合用于舆情分析</strong>，
                  帖子内容及回复内容均出自用户并且没有严格的审查。
              </p>
              <p>
                  <strong>
                      贴吧具备所有的有事，满足所有要求，最终我们选择贴吧进行舆情分析和跟踪。
                  </strong>
              </p>

              <a href="/crawler"><h2 class="ui big center aligned header smallheader" style="margin-top:2em;">贴吧爬虫 >></h2></a>
            </div>
        </div>
    </body>
    <script src="/js/platform.js" charset="utf-8"></script>
</html>
