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
                  第二：要绝对学生的隐私、
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
              <div id="WCI" class="ui container" style="width: 600px;height:400px;"></div>
              <h3 style="margin-top:1.5em;" class="ui big center aligned header smallheader">[微信公众号活跃度结果]</h3>
              <p style="margin-bottom:-10px;"><strong>缺点：</strong></p>
              <p>
                  所选公众号由校方运营，虽说可以确保用户质量，但是不能保证数据质量，
                  学生在公众号文章下的评论要先经过公众号后台的审核，审核通过才可以发布，
                  这会降低用户反馈的真实性。并且公众号的活跃度确实不高，达不到实现跟踪分析的数据量。
                  故放弃使用微信公众号作为数据源。
              </p>



              <h2 class="ui big center aligned header smallheader">微博微博</h2>
              <h2 class="ui big center aligned header smallheader">百度贴吧</h2>
              <div id="user_time" class="ui container" style="width: 600px;height:400px;"></div>
              <h3 class="ui big center aligned header smallheader">[大学生日常网上活动时间结果]</h3>


              <a href="/crawler"><h2 class="ui big center aligned header smallheader" style="margin-top:2em;">贴吧爬虫 >></h2></a>
            </div>
        </div>
    </body>
    <script src="/js/platform.js" charset="utf-8"></script>
</html>
