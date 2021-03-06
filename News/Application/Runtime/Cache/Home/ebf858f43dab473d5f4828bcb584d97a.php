<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>云适配</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="alternate icon" type="image/png" href="/yun/Public/Home/i/favicon.png">
    <link rel="stylesheet" href="/yun/Public/Home/css/amazeui.min.css"/>
    <link rel="stylesheet" href="/yun/Public/Home/css/app.css"/>
</head>
<body>
<!-- 手机版侧滑菜单 -->
<div id="navPush" class="am-offcanvas nav-push-content">
    <div class="am-offcanvas-bar">
        <div class="am-offcanvas-content ">
            <ul class="am-menu am-menu-offcanvas1  menu-main am-no-layout">
                <li><a href="/yun/index.php/Home/Index/index" class="am-active">首页</a></li>
                <li><a href="/yun/index.php/Home/Product/index">产品</a></li>
                <li><a href="/yun/index.php/Home/Case/index">案例</a></li>
                <li><a href="/yun/index.php/Home/Signup/index">合作</a></li>
                <li><a href="/yun/index.php/Home/Product/pricing">定制</a></li>
                <li><a href="/yun/index.php/Home/About/index">关于</a></li>
                <li><button class="am-btn am-btn-secondary am-topbar-btn am-btn-sm"><span class="am-icon-pencil"></span> 注册</button></li>
                <li><button class="am-btn am-btn-primary am-topbar-btn am-btn-sm"><span class="am-icon-user"></span> 登录</button></li>
            </ul>
        </div>
    </div>
</div>

<!-- 电脑和平板 菜单-->
<header class="am-topbar am-topbar-fixed-top">
    <div class="am-container">
        <h1 class="am-topbar-brand">
            <a href="#"><img src="/yun/Public/Home/images/logo.png" /></a>
        </h1>
        <button class="am-btn am-btn-primary am-show-sm-only nav-push-btn am-topbar-toggle " data-am-offcanvas="{target: '#navPush', effect: 'push'}">
            <span class="am-sr-only">导航切换</span>
            <span class="am-icon-bars"></span>
        </button>
        <div class="am-collapse am-topbar-collapse" id="collapse-head">
            <ul class="am-nav am-nav-pills am-topbar-nav">
                <li><a href="/yun/index.php/Home/Index/index" class="am-active">首页</a></li>
                <li><a href="/yun/index.php/Home/Product/index">产品</a></li>
                <li><a href="/yun/index.php/Home/Case/index">案例</a></li>
                <li><a href="/yun/index.php/Home/Signup/index">合作</a></li>
                <li><a href="/yun/index.php/Home/Product/pricing">定制</a></li>
                <li><a href="/yun/index.php/Home/About/index">关于</a></li>
                <!-- 如果有二级菜单 以下是二级菜单代码 -->
                <!--<li class="am-dropdown" data-am-dropdown>
                  <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                    案例 <span class="am-icon-caret-down"></span>
                  </a>
                  <ul class="am-dropdown-content">
                    <li class="am-dropdown-header">标题</li>
                    <li><a href="#">1. 默认样式</a></li>
                    <li><a href="#">2. 基础设置</a></li>
                    <li><a href="#">3. 文字排版</a></li>
                    <li><a href="#">4. 网格系统</a></li>
                  </ul>
                </li>-->
                <!-- 登录注册按钮 -->
                <div class="am-topbar-right">
                    <button class="am-btn am-btn-secondary am-topbar-btn am-btn-sm"><span class="am-icon-pencil"></span> 注册</button>
                </div>
                <div class="am-topbar-right">
                    <button class="am-btn am-btn-primary am-topbar-btn am-btn-sm"><span class="am-icon-user"></span> 登录</button>
                </div>
            </ul>
        </div>
    </div>
</header>


<!-- banner -->
<div class="other-banner-mod am-vertical-align">
    <div class="am-vertical-align-middle">
      <h1>One Web,Any Device</h1>
      <h2>万物互联，无缝体验</h2>
    </div>
</div>

<!-- 链接icon -->
<div class="about-menu-mod">
  <div class="am-container">
    <ul class="about-menu am-avg-md-4 am-avg-sm-4">
      <li>
        <a href="about.html"><i class="menu-icon"></i><span>关于我们</span></a>
      </li>
      <li>
        <a href="reports.html"><i class="menu-icon"></i><span>媒体报道</span></a>
      </li>
      <li>
        <a href="contacts.html"><i class="menu-icon"></i><span>联系方式</span></a>
      </li>
      <li class="active">
        <a href="join.html"><i class="menu-icon"></i><span>加入我们</span></a>
      </li>
    </ul>
  </div>
</div>

<!--时间线简介 -->
<div class="join-description-mod module-wrap">
  <div class="am-container">
    <ul class="join-description-container">
      <li>
        <div class="join-arrow"></div>
        <div class="am-u-md-6 am-u-sm-12">
          <div class="description-word">
            <h4>我们的优势</h4>
            我们成立了两年，正用自己的技术力量一步一步改变世界<br />
            我们开创了中国首个开源HTML5跨屏前端框架、可见即可得的IDE、无障碍网页<br />
            我们是全球独一无二的云适配技术，我们的目标是打造极致的网页体验<br />   
          </div>
        </div>
        <div class="am-u-md-6 am-u-sm-12">
          <div class="description-pic">
            <img src="/yun/Public/Home/images/about/join-pic1.jpg"/>  
          </div>
        </div>
      </li>

      <li>
        <div class="join-arrow"></div>
        <div class="am-u-md-6 am-u-sm-12">
          <div class="description-word">
            <h4>我们的团队</h4>
            成员既有超级学霸（来自Harvard、Google、香港科技大学、中国科技大学），也有来自行业的技术大拿 
          </div>
        </div>
        <div class="am-u-md-6 am-u-sm-12">
          <div class="description-pic">
            <img src="/yun/Public/Home/images/about/join-pic2.jpg"/> 
            <img src="/yun/Public/Home/images/about/join-pic3.jpg"/> 
            <img src="/yun/Public/Home/images/about/join-pic4.jpg"/> 
            <img src="/yun/Public/Home/images/about/join-pic5.jpg"/>  
          </div>
        </div>
      </li>
      
      <li>
        <div class="join-arrow"></div>
        <div class="am-u-md-6 am-u-sm-12">
          <div class="description-word">
            <h4>我们的团队</h4>
            我们是2014年6月比尔盖茨私访中国时会见的寥寥数个创业公司中的一个 
          </div>
        </div>
        <div class="am-u-md-6 am-u-sm-12">
          <div class="description-pic">
            <img src="/yun/Public/Home/images/about/join-pic6.jpg"/>  
          </div>
        </div>
      </li>

      <li>
        <div class="join-arrow"></div>
        <div class="am-u-md-6 am-u-sm-12">
          <div class="description-word">
            <h4>我们的估值</h4>
            我们得到了各路知名VC的青睐，目前估值已经超过9位数啦
          </div>
        </div>
        <div class="am-u-md-6 am-u-sm-12">
          <div class="description-pic">
            <img src="/yun/Public/Home/images/about/join-pic7.jpg"/>  
          </div>
        </div>
      </li>

      <li>
        <div class="join-arrow"></div>
        <div class="am-u-md-6 am-u-sm-12">
          <div class="description-word">
            <h4>我们的位置</h4>
            地处中关村创业街，36K、3W咖啡馆顶级创业资源齐备
          </div>
        </div>
        <div class="am-u-md-6 am-u-sm-12">
          <div class="description-pic">
            <img src="/yun/Public/Home/images/about/join-pic8.jpg"/> 
            <img src="/yun/Public/Home/images/about/join-pic9.jpg"/> 
            <img src="/yun/Public/Home/images/about/join-pic10.jpg"/> 
          </div>
        </div>
      </li>

      <li>
        <div class="join-arrow"></div>
        <div class="am-u-md-6 am-u-sm-12">
          <div class="description-word">
            <h4>我们的设备</h4>
            顶配iMac、MacBook Pro、MacBook Air3台瑞士Air空气净化器，PM2.5常年低于50
          </div>
        </div>
        <div class="am-u-md-6 am-u-sm-12">
          <div class="description-pic">
            <img src="/yun/Public/Home/images/about/join-pic11.jpg"/> 
            <img src="/yun/Public/Home/images/about/join-pic12.jpg"/> 
          </div>
        </div>
      </li>

      <li>
        <div class="join-arrow"></div>
        <div class="am-u-md-6 am-u-sm-12">
          <div class="description-word">
            <h4>我们的趴体</h4>
            Demo大趴每月一次，周三享用不尽的免费零食、饮料、水果
          </div>
        </div>
        <div class="am-u-md-6 am-u-sm-12">
          <div class="description-pic">
            <img src="/yun/Public/Home/images/about/join-pic13.jpg"/> 
            <img src="/yun/Public/Home/images/about/join-pic14.jpg"/> 
            <img src="/yun/Public/Home/images/about/join-pic15.jpg"/> 
          </div>
        </div>
      </li>

      <li>
        <div class="join-arrow"></div>
        <div class="am-u-md-6 am-u-sm-12">
          <div class="description-word">
            <h4>我们的环境</h4>
            舒适办公场地，扁平化管理、帅哥美女是标配
          </div>
        </div>
        <div class="am-u-md-6 am-u-sm-12">
          <div class="description-pic">
            <img src="/yun/Public/Home/images/about/join-pic16.jpg"/> 
            <img src="/yun/Public/Home/images/about/join-pic17.jpg"/> 
            <img src="/yun/Public/Home/images/about/join-pic18.jpg"/> 
            <img src="/yun/Public/Home/images/about/join-pic19.jpg"/> 
            <img src="/yun/Public/Home/images/about/join-pic20.jpg"/> 
          </div>
        </div>
      </li>

      <li>
        <div class="join-arrow"></div>
        <div class="am-u-md-6 am-u-sm-12">
          <div class="description-word">
            <h4>我们的队友</h4>
            充满热情的队友，也是一起撸串、篮球、足球、动感单车、甚至桌上足球组队互虐的好基友
          </div>
        </div>
        <div class="am-u-md-6 am-u-sm-12">
          <div class="description-pic">
            <img src="/yun/Public/Home/images/about/join-pic21.jpg"/> 
            <img src="/yun/Public/Home/images/about/join-pic22.jpg"/> 
            <img src="/yun/Public/Home/images/about/join-pic23.jpg"/> 
          </div>
        </div>
      </li>

    </ul>
  </div>
</div>

<!-- 职位介绍 -->
<!-- 手机版 侧边栏 选项卡title -->
<div id="class-nav" class="am-offcanvas">
  <div class="am-offcanvas-bar">
    <ul class="class-nav-list">  
      <li class="am-active">
        <a href="[data-tab-panel-0]">销售总监</a>
      </li>
      <li>
        <a href="[data-tab-panel-1]">高级产品经理</a>
      </li>
      <li>
        <a href="[data-tab-panel-2]">机器学习算法工程师</a>
      </li>
      <li>
        <a href="[data-tab-panel-3]">渠道推广专员</a>
      </li>
      <li>
        <a href="[data-tab-panel-4]">高级渠道经理</a>
      </li>
      <li>
        <a href="[data-tab-panel-5]">渠道经理</a>
      </li>
      <li>
          <a href="[data-tab-panel-6]">电话销售</a>
      </li>
      <li>
        <a href="[data-tab-panel-7]">大客户经理（天津）</a>
      </li>
      <li>
        <a href="[data-tab-panel-8]">UI设计师（天津）</a>
      </li>
      <li>
        <a href="[data-tab-panel-9]">WEB前端攻城狮（天津）</a>
      </li>  
    </ul>
  </div>
</div>

<!-- 选项卡主体-->
<div class="join-main-mod module-wrap no-borderb">
  <div class="am-container">
    <div class="job-title">
      <span>职位介绍</span>
    </div>
    <div class="am-show-sm-only launch-class"><button type="button" class="am-btn am-btn-secondary" data-am-offcanvas="{target: '#class-nav'}">显示所有职位</button></div>
    <div data-am-widget="tabs" class="am-tabs am-tabs-default job-tabs">
      <ul class="am-tabs-nav am-cf am-hide-sm-only">
        <li class="am-active">
          <a href="[data-tab-panel-0]">销售总监</a>
        </li>
        <li>
          <a href="[data-tab-panel-1]">高级产品经理</a>
        </li>
        <li>
          <a href="[data-tab-panel-2]">机器学习算法工程师</a>
        </li>
        <li>
          <a href="[data-tab-panel-3]">渠道推广专员</a>
        </li>
        <li>
          <a href="[data-tab-panel-4]">高级渠道经理</a>
        </li>
        <li>
          <a href="[data-tab-panel-5]">渠道经理</a>
        </li>
        <li>
          <a href="[data-tab-panel-6]">电话销售</a>
        </li>
        <li>
          <a href="[data-tab-panel-7]">大客户经理（天津）</a>
        </li>
        <li>
          <a href="[data-tab-panel-8]">UI设计师（天津）</a>
        </li>
        <li>
          <a href="[data-tab-panel-9]">WEB前端攻城狮（天津）</a>
        </li>
      </ul>
      <div class="am-tabs-bd">
        <div data-tab-panel-0 class="am-tab-panel am-active job-desc-item">
          <h5>销售总监</h5>
          <dl>
            <dt>工作职责：</dt>
            <dd>
              <p>根据公司整体战略，制定并组织实施区域拓展的策略及推进计划；</p>
              <p>负责区域市场分析，把握市场发展动态，收集、分析、整理、归档客户需求，挖掘销售线索；</p>
              <p>负责公司的产品业务拓展、销售运作，建立完整的客户关系管理体系，并转变成销售成果；</p>
              <p>建立和管理销售队伍，招募、培训、激励、考核下属员工，提升部门工作效率。</p>
            </dd>
            <dt>职位要求：</dt>
            <dd> 
              <p>五年以上IT企业销售管理经验；</p>
              <p>精通熟悉营销、管理相关知识，具备目标绩效管理、过程控制、发展合作、冲突管理等方面的知识与实践技巧；</p>
              <p>具备一定的政府客户和渠道资源，以往业绩在千万者优先；</p>
              <p>优秀的市场拓展、项目协调、谈判能力，具有高度的工作热情和责任感；</p>
              <p>良好的沟通协调能力和团队合作意识，能够主动总结和分享自己的销售经验。</p>  
            </dd>
          </dl>
          <a href="mailto:jobs@yunshipei.com" class="upload-btn">jobs@yunshipei.com</a>
        </div>
        <div data-tab-panel-1 class="am-tab-panel job-desc-item">
          <h5>高级产品经理</h5>
          <dl>
            <dt>工作职责：</dt>
            <dd>
              <p>负责云适配产品的管理推进，研究移动互联网Web App以及网页跨屏浏览体验的发展方向、HTML5技术应用、商业可行性等。</p>
              <p>完成产品原型设计，交互设计，推动产品项目完成，上线，用户反馈，迭代。</p>         
              <p>根据公司产品战略，参与网站产品的定位、规划；</p>        
              <p>负责部门之间的协调沟通，保证产品从设计、开发、上线的如期顺利完成；</p>        
              <p>监控产品运行效果，收集用户反馈，分析用户行为统计数据，挖掘并发现用户需求，对产品进行持续改进；</p>
              <p>推动技术及运营团队，对产品质量进行持续监督和监控。</p>
            </dd>
            <dt>职位要求：</dt>
            <dd>
              热爱互联网，热爱新技术，关注新趋势和用户行为变化，3年以上互联网产品经理经验；<br/>
              优秀的逻辑思维与系统分析能力；<br/>
              出色的沟通. 组织和协调能力；<br/>
              具有敏锐的市场意识. 良好的运营思维和创新意识。<br/> 
            </dd>
          </dl>
          <a href="mailto:jobs@yunshipei.com" class="upload-btn">jobs@yunshipei.com</a>
        </div>
        <div data-tab-panel-2 class="am-tab-panel job-desc-item">
          <h5>机器学习算法工程师</h5>
          <dl>
            <dt>工作职责：</dt>
            <dd>
              <p>负责机器学习及推荐算法调研、开发、策略研发和用户行为研究；</p>
              <p>应用机器学习、文本分类与聚类技术来处理海量数据，分析与挖掘各种潜在关联，为用户提供更加精准的推荐和服务；</p>
              <p>通过对技术的不断完善，推动产品的深化，使得技术成为公司成长的驱动，体现技术价值。</p>
            </dd>
            <dt>职位要求：</dt>
            <dd>
              <p>硕士及以上学历，计算机专业机器学习、数据挖掘处理方向；数学专业统计学、应用数学方向优先；</p>
              <p>熟悉常见的数据挖掘或机器学习算法；</p>
              <p>有机器学习相关论文优先；</p>
              <p>对数据敏感，工作积极严谨，有较强的学习能力以及快速解决问题的能力；</p>
              <p>富有激情和创新精神，具备强烈的责任心和良好的沟通能力。</p> 
            </dd>
          </dl>
          <a href="mailto:jobs@yunshipei.com" class="upload-btn">jobs@yunshipei.com</a>
        </div>
        <div data-tab-panel-3 class="am-tab-panel job-desc-item">
          <h5>渠道推广专员</h5>
          <dl>
            <dt>工作职责：</dt>
            <dd>
              <p>负责App的市场和渠道推广工作，以提升APP用户下载量</p>
              <p>根据公司要求制定有效的APP渠道推广计划并实施。负责APP推广渠道的合作、接入，推广。负责公司产品在各媒介平台的广告策划及投放。对推广数据的监控跟踪，根据推广数据进行分析，有针对性的调整推广策略；</p>
              <p>定期策划并执行线上营销活动，采取各种方法提高产品曝光率、下载量及安装量；</p>
              <p>定期对运营数据、用户行为数据等进行分析和挖掘。提出改进APP运营质量、改善用户体验的建议；</p>  
            </dd>
            <dt>职位要求：</dt>
            <dd>
              <p>移动互联网行业3年以上工作经验，APP渠道推广2年以上经验；</p>
              <p>熟悉移动互联网行业，熟悉各种软件应用市场、手机厂商或渠道商，了解Android产品各市场的规则，熟悉IOS和Android平台及App产品；</p>
              <p>在各推广渠道有一定的人脉，有在安卓、应用宝、小米、360、安智、91、App store等软件市场上推广移动客户端经验者优先；</p>
              <p>具备较强的市场分析、营销、策划、推广能力，熟知移动营销的基本方法；</p>
              <p>有较强的数据分析能力，能够独立完成营销活动的策划制定、组织执行、评估改进。</p>
            </dd>
          </dl>
          <a href="mailto:jobs@yunshipei.com" class="upload-btn">jobs@yunshipei.com</a>
        </div>
        <div data-tab-panel-4 class="am-tab-panel job-desc-item">
          <h5>高级渠道经理</h5>
          <dl>
            <dt>工作职责：</dt>
            <dd>              
              <p>按照公司的渠道规划开展渠道开发拓展工作；</p>          
              <p>有2年以上互联网渠道团队管理经验，组建、管理团队，带领团队完成渠道部门计划任务及各项考核指标；</p>
              <p>负责带领团队完成所管辖区内的代理商开发，签约、回款、培训、支持等管理工作；</p>       
              <p>有效开发、维护、管理渠道商、运用各种策略技能提升代理商销售效能和市场业绩；</p>        
              <p>负协助做好区域市场信息的调研工作；</p>         
              <p>摸索并不断实验新型的业务拓展方法，并定期提供良好建议报告；</p>        
              <p>定期参与制定并举办区域代理商拓展、培训等活动。</p>             
            </dd>
            <dt>职位要求：</dt>
            <dd>
              <p>专科以上学历，形象好，气质佳，沟通表达能力较强，具有强烈的开拓精神和成功欲望</p>         
              <p>3年以上互联网产品渠道开发经验，有独立开拓及维护渠道商经验</p>        
              <p>互联网产品有代理商资源的优先</p>        
              <p>能够承受较大工作压力，有较好的团队合作意识</p>        
              <p>熟悉渠道运作流程，具有良好的计划，执行，沟通，协调能力</p>        
              <p>熟悉互联网、了解微信、APP等移动端软件的发展和商业应用。</p>             
            </dd>
          </dl>
          <a href="mailto:jobs@yunshipei.com" class="upload-btn">jobs@yunshipei.com</a>
        </div>
        <div data-tab-panel-5 class="am-tab-panel job-desc-item">
          <h5>渠道经理</h5>
          <dl>
            <dt>工作职责：</dt>
            <dd>               
              <p>负责指定区域内渠道代理商的开发、拓展工作，具备主动开发代理商的能力；</p>         
              <p>根据渠道部业绩要求，完成代理商的拓展、沟通、签约、回款等渠道部销售任务指标；</p>       
              <p>贯彻公司渠道政策，对负责区域内的代理商进行有效管理、支持，提升代理商的业务销售；</p>         
              <p>及时反馈客户、渠道与竞争信息；</p>        
              <p>与渠道代理商建立良好的合作关系，确保销售目标的实现；</p>       
              <p>负责传达和解释公司相关渠道销售、市场政策；</p>      
            </dd>
            <dt>职位要求：</dt>
            <dd>
              <p>大专及以上学历，形象好气质佳，1年以上互联网渠道工作经验；</p>        
              <p>熟悉互联网、了解微信、APP等移动端软件的发展和商业应用的优先；</p>         
              <p>有互联网渠道资源者优先；</p>         
              <p>为人正直、忠诚；</p>        
              <p>有强烈的赚钱欲望及良好的职业生涯规划。</p>             
            </dd>
          </dl>
          <a href="mailto:jobs@yunshipei.com" class="upload-btn">jobs@yunshipei.com</a>
        </div>
        <div data-tab-panel-6 class="am-tab-panel job-desc-item">
          <h5>电话销售</h5>
          <dl>
            <dt>工作职责：</dt>
            <dd>
              <p>收集互联网公司、广告公司、软件公司资料，根据渠道业绩要求定期完成客户资料储备；</p>
              <p>通过前期的电话沟通，开拓渠道代理商，建立初步合作意向，并转发给渠道经理深入跟踪洽谈；</p>
              <p>及时搜集、反馈客户、渠道与竞争者信息；</p>
              <p>及时搜寻掌握互联网行业动态、展会等信息，定期提供给渠道部助理进行汇总。</p>
            </dd>
            <dt>职位要求：</dt>
            <dd>
              <p>专科以上学历；（招收实习生）</p>              
              <p>有互联网电话销售工作经验1年以上者优先；</p>
              <p>具有良好的沟通，团队合作及创新能力；</p>
              <p>能够承受较强的工作压力，具有很好的开拓精神；</p>
              <p>有百度，谷歌，360，等等互联网搜素引擎推广经验优先考虑。</p> 
            </dd>
          </dl>
          <a href="mailto:jobs@yunshipei.com" class="upload-btn">jobs@yunshipei.com</a>
        </div>
        <div data-tab-panel-7 class="am-tab-panel job-desc-item">
          <h5>大客户经理（天津）</h5>
          <dl>
            <dt>工作职责：</dt>
            <dd> 
              <p>负责向行业客户及大客户介绍公司产品以及提供服务；</p>
              <p>开拓全国范围内的客户，做好市场信息的收集、整理和反馈，提供行业方案所需基础数据信息</p>
              <p>通过电话/面谈拜访后签单，完成公司指定销售目标；</p>
              <p>与团队成员共享并及时更新市场信息；</p>
              <p>协助公司不断完善、优化对大客户的开发及运营管理制度及流程；</p>
              <p>协助公司不断优化对大客户市场资源配置，节约招商及运营管理成本；</p>
              <p>具体协调和衔接对大客户的技术支持和技术保障工作。</p>  
            </dd>
            <dt>职位要求：</dt>
            <dd> 
              <p>市场营销相关专业，3年以上大客户营销经验；</p>
              <p>必须在政府、医院、学校其一领域有营销经验，有资源者优先；</p>
              <p>有良好的交际、开拓市场能力；</p>
              <p>稳重、踏实、不怕吃苦，能够在一定压力下完成销售目标。</p>
            </dd>
          </dl>
          <a href="mailto:jobs@yunshipei.com" class="upload-btn">jobs@yunshipei.com</a>
        </div>
        <div data-tab-panel-8 class="am-tab-panel job-desc-item">
          <h5>UI设计师（天津）</h5>
          <dl>
            <dt>工作职责：</dt>
            <dd>               
              <p>负责公司日常宣传、策划设计等制作；</p>        
              <p>平面设计、UI设计制作及其它图文处理，企业宣传资料的设计、制作与创新；</p>        
              <p>协助其他部门人员对设计及美学方面的工作顺利完成；</p>       
              <p>协助网页设计人员对公司网站风格的把握，色调搭配，布局合理性，图片整理、企业徽标处理等等；</p>         
              <p>建立规范以保持设计执行高品质、高可靠性和高安全性标准；</p>        
              <p>负责设计控制的执行和维护，不断改进设计水平，以达到公司日益发展的要求；</p>         
              <p>利用自身的行业背景和知识，在设计和制作上有效的控制成本。</p>              
            </dd>
            <dt>职位要求：</dt>
            <dd> 
              <p>美术、设计相关专业，3年以上平面设计、UI设计工作经验；</p>
              <p>过硬的专业设计能力，掌握移动和web基本规范；</p>       
              <p>可根据需要做出不同风格的设计</p>       
              <p>学习能力强，可通过内驱力完成有挑战的任务；</p>        
              <p>有较强的创新意识；</p>             
            </dd>
          </dl>
          <a href="mailto:jobs@yunshipei.com" class="upload-btn">jobs@yunshipei.com</a>
        </div>
        <div data-tab-panel-9 class="am-tab-panel job-desc-item">
          <h5>WEB前端攻城狮（天津）</h5>
          <dl>
            <dt>工作职责：</dt>
            <dd> 
              <p>精通HTML/XHTML、CSS等网页制作技术，熟悉页面架构和布局 </p>
              <p>理解一个完整Web项目的工作原理，对Node.js有一定了解更好；</p>        
              <p>加分项：使用过除jQuery、Bootstrap外的现代前端框架，用过Angular.js的更好；</p>         
              <p>加分项：遵守一定的代码规范，习惯使用Grunt、Git等工具；</p>       
              <p>加分项：其它编程经验，对用户体验有自己的见解，有设计、交互方面的经验或特长。</p>               
            </dd>
            <dt>职位要求：</dt>
            <dd>
              <p>计算机相关专业，1年以上WEB前端开发工作经验；</p>
              <p>熟悉HTML、CSS和JS，（至少）对HTML5、CSS3有一定了解，（至少）对原生JS语法有一定了解；</p>
              <p>良好的沟通与表达能力、思路清晰，较强的动手能力与逻辑分析能力；</p>
              <p>对Web技术发展有强烈兴趣，有良好的学习能力和强烈的进取心 。</p>
            </dd>
          </dl>
          <a href="mailto:jobs@yunshipei.com" class="upload-btn">jobs@yunshipei.com</a>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- footer -->
<footer>
    <div class="am-container">
        <div class="footer-logo">
            <img src="/yun/Public/Home/images/logo-colorful.png" />
        </div>
        <ul class="social-links-list">
            <li>
                <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=744071477&amp;site=qq&amp;menu=yes" target="_blank" title="qq">
                    <i class="am-icon-qq am-icon-sm"></i>
                </a>
            </li>
            <li>
                <a href="" target="_blank" id="wechat" title="微信">
                    <i class="am-icon-weixin am-icon-sm"></i>
                </a>
            </li>
            <li>
                <a href="http://weibo.com/allmobilize" target="_blank" title="新浪微博">
                    <i class="am-icon-weibo am-icon-sm"></i>
                </a>
            </li>
        </ul>
        <ul class="footer-nav">
            <li>
                <a href="/about.html">关于我们</a>
            </li>
            <li>
                <a href="/faq.html">常见问题</a>
            </li>
            <li>
                <a href="/build.html">移动建站白皮书</a>
            </li>
            <li>
                <a href="http://dev.yunshipei.com/">开发者中心</a>
            </li>
        </ul>
        <ul class="friend-links">
            <li>友情链接：</li>
            <li>
                <a href="http://segmentfault.com/" target="_blank" title="SegmentFault">SegmentFault</a>
            </li>
            <li>
                <a href="http://www.zjgsq.com/" target="_blank" title="Web前端">Web前端</a>
            </li>
            <li>
                <a href="http://apicloud.com/" target="_blank" title="APICloud">APICloud</a>
            </li>
            <li>
                <a href="http://www.w3cdream.com/" target="_blank" title="W3C梦想站">W3C梦想站</a>
            </li>
            <li>
                <a href="http://bbs.egret-labs.org/" target="_blank" title="Egret社区">Egret社区</a>
            </li>
            <li>
                <a href="https://meiqia.com/integrations" target="_blank" title="美洽客服">美洽客服</a>
            </li>
        </ul>
    </div>
</footer>

<!-- 微信弹出框 -->
<div class="weixin-mod">
    <div class="weixin-inner">
        <a class="weixin-close"><i class="am-icon-times-circle"></i></a>
        <div class="qrcode-weixin">
            <img src="/yun/Public/Home/images/qrcode-weixin.jpg" alt="">
        </div>
        <div class="weixin-info">在微信上关注我们</div>
    </div>
</div>
</body>
<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/yun/Public/Home/js/polyfill/rem.min.js"></script>
<script src="/yun/Public/Home/js/polyfill/respond.min.js"></script>
<script src="/yun/Public/Home/js/amazeui.legacy.js"></script>
<![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/yun/Public/Home/js/jquery.min.js"></script>
<script src="/yun/Public/Home/js/amazeui.min.js"></script>
<script src="/yun/Public/Home/js/app.js"></script>
<!--<![endif]-->
</html>