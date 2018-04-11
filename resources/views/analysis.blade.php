<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>舆情分析</title>
    </head>
    <script src="/js/jquery-3.3.1.min.js"></script>
    @include('import')
    <body>
        <h1 class="ui center aligned header">舆情分析</h1>
        <div class="ui main text container">
            <div class="ui sizer vertical segment">
              <h2 class="ui big center aligned header smallheader">跟踪警报</h2>
              <!-- <p style="margin-top:-10px; color:#DF5A26;"></p> -->
              <p>
                  贴吧默认帖子排列顺序是按照最后的活跃时间（最后的跟帖时间，最后的回复时间等）进行排序，
                  即每一次帖子被顶到前排就意味着帖子的内容有了更新。根据这一特性，
                  我们定时监控前贴吧前几页的帖子即可实现对贴吧的实时监控。
                  使用多进程爬虫可以解决效率问题使得及时性较好，并且一次任务和一次任务间不存在影响。
              </p>
              <p>
                  <strong>关键词警报</strong>
                  <p>
                      根据提前设定好的关键词对最近一次爬到的数据进行筛选和高亮。
                      亮黄色高亮的词汇为该帖子的内容分析得出的主题性关键词，
                      红色高为提前设定好的警告词。卡片中还包括有发帖人名、
                      发帖时间、高亮后的帖子内容、主题标签、活跃度、情感得分（根据积极度显示百分比和颜色）等。
                  </p>
                  <div class="ui two column centered grid">
                    <div class="column"></div>
                    <div class="sixteen column centered row">
                      <div class="seven wide column">
                          <div class="ui link card">
                              <div class="content">
                                <div class="header">童文娜</div>
                                <div class="meta">
                                    <strong>
                                        2017-03-01 16:59
                                    </strong>
                                </div>
                                <div class="description">
                                  <p>
                                      有没有学长学姐愿意给些
                                      <strong id="super_strong">&nbsp考研&nbsp</strong>。
                                      建议，或者是专业课资料愿意出售的，合工大一直都想去的学校，18
                                      <strong id="super_strong">&nbsp考研&nbsp</strong>，勇毅笃行
                                  </p>
                                  <a class="ui tiny tag label">考研</a>
                                </div>
                              </div>
                              <div class="extra content" style="color:#474C4E">
                                  <i class="user icon"></i> 121 活跃度
                                  <span class="right floated" style="color:#F9A36A;">
                                      <strong><i class="heart icon"></i> 86% 情感得分
                                      </strong>
                                  </span>
                              </div>
                            </div>
                      </div>
                      <div class="seven wide column">

                          <div class="ui link card">
                              <div class="content">
                                <div class="header">闪光钻石bhr</div>
                                <div class="meta">2017-09-10 08:20</div>
                                <div class="description">
                                  <p>
                                      坐标新区，昨晚看到五个
                                      <strong id="super_strong">&nbsp食堂&nbsp</strong>。
                                      的圈存机器全部
                                      <strong id="warning_strong">&nbsp断网&nbsp</strong>。
                                      了没法用，
                                      <strong id="super_strong">&nbsp校园卡&nbsp</strong>。
                                      里的钱也不够刷东西了，现在要怎么办?
                                  </p>
                                  <a class="ui tiny tag label">食堂</a>
                                  <a class="ui tiny tag label">校园卡</a>
                                </div>
                              </div>
                              <div class="extra content" style="color:#474C4E"><i class="user icon"></i> 59 活跃度
                                  <span class="right floated" style="color:#47B648;">
                                      <strong><i class="heart icon"></i> 26% 情感得分
                                      </strong>
                                  </span>
                              </div>
                            </div>
                      </div>
                    </div>
                  </div>
              </p>
              <h3 class="ui big center aligned header smallheader" style="margin-top:10px;">[上图为警报跟踪效果展示]</h3>
              <p>
                  <strong>情感偏向预警</strong>
                  <p>
                      对一个帖子内所有的回帖进行情感分析（分析方法见后面），然后对每一个帖子的情感积极性打分，
                      再评价得出整个帖子所讨论的内容的情感倾向。该数据可反映情感倾向，可及时发现消极情绪集中的情况。
                  </p>
              </p>
              <p>
                  上述效果会以周报、月报形式进行反馈。
              </p>


              <!-- <div id="user_platform" class="ui container" style="width: 600px;height:400px;"></div>
              <h3 class="ui big center aligned header smallheader">[各大平台活跃度问卷调查结果]</h3> -->



              <h2 class="ui big center aligned header smallheader">主题提取</h2>
              <p>
                  <strong>使用算法</strong>
                  <p>
                      使用了tf-idf、textrank进行帖子关键词主题的提取，这两种算法对分词效果要求很高。
                      一般的分词工具所使用的字典对贴吧和针对大学的内容没有对应的优化，
                      缺少一些与高校学生相关并且与平台贴吧平台相辅的关键词字典，
                      会对分词效果有很大的影响。
                  </p>
                  <p>
                      因此我们比较分词的效果自己只做了专用的字典（235词）。分词效果显著提升，
                      并且对比关键词效果制作了停用词字典（921词 + 1400词），关键词提取的效果显著提升。
                  </p>
                  <div class="ui two column centered grid">
                    <div class="column">
                        <img class="ui centered bordered segment rounded image" height="80%" src="/img/dict.png">
                    </div>
                    <div class="column">
                        <img class="ui centered bordered segment rounded image" height="80%" src="/img/stop_dict.png">
                    </div>
                    </div>
                  <h3 class="ui big center aligned header smallheader" style="margin-top:-140px;">[上图为部分自定义字典和停用词字典]</h3>
                  <p>
                      对优化过后提取到的关键词分析后可以发现，总共有几大类贴吧话题。筛选后总结归类为7大类，分别为
                      <strong>学习</strong>、
                      <strong>公选专业</strong>、
                      <strong>新生问题</strong>、
                      <strong>校内生活</strong>、
                      <strong>校外生活</strong>、
                      <strong>就业</strong>、
                      <strong>考研</strong>。
                  </p>
              </p>

              <div id="classify" class="ui centered" style="width: 120%;height:3500px;"></div>

              <!-- <div id="WCI" class="ui container" style="width: 600px;height:500px;"></div>
              <h3 style="margin-top:1.5em;" class="ui big center aligned header smallheader">[微信公众号活跃度结果]</h3> -->

              <h2 class="ui big center aligned header smallheader">情感分析</h2>
      <!-- <div class="ui container"><div id="WeiBo" style="width: 100%;height:1000px; margin-top:-200px;"></div></div>
      <h3 style="margin-top:-50px;" class="ui big center aligned header smallheader">[微博核心用户关系图]</h3> -->
              <h2 class="ui big center aligned header smallheader">用户跟踪</h2>
              <a href="/thanks"><h2 class="ui big center aligned header smallheader" style="margin-top:2em;">
                  感谢
                  <i class="angle double right icon"></i>
              </h2></a>
            </div>
        </div>
    </body>
    <script src="/js/analysis.js" charset="utf-8"></script>
    <style>
        #super_strong {
            background-color: #FCF94E;
            color: #000000;
            border-radius:5px;
        }
        #warning_strong {
            background-color: red;
            color: #FFFFFF;
            border-radius:5px;
        }
    </style>
</html>
