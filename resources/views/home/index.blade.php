<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>{{__('主页 - 拉格朗工作室')}}</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}"/>
    <!--link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css"/-->
    <noscript>
        <link rel="stylesheet" href="{{asset('assets/css/noscript.css')}}"/>
    </noscript>
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <div class="logo">
            <span class="icon fa-gem"></span>
        </div>
        <div class="content">
            <div class="inner">
                <h1>{{__('拉格朗工作室')}}</h1>
                <p>{{__('拉格朗工作室是一个专注于工程建设行业执业资格考试教育培训、技术标（或施工组织设计、施工方案等）编写')}}<br/>
                    {{__('以及提供工程造价咨询和相关专业人力资源服务的工作室。')}}</p>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="#intro">{{__('简介')}}</a></li>
                <li><a href="#work">{{__('作品')}}</a></li>
            <!--li><a href="#about">{{__('关于')}}</a></li-->
                <li><a href="#contact">{{__('联系')}}</a></li>
                <!--<li><a href="#elements">Elements</a></li>-->
            </ul>
        </nav>
    </header>

    <!-- Main -->
    <div id="main">

        <!-- Intro -->
        <article id="intro">
            <h2 class="major">{{__('简介')}}</h2>
            <span class="image main"><img src="images/pic01.jpg" alt=""/></span>
            <p>{{__('拉格朗工作室（Lagran\'s studio）成立于2020年6月11日，是一家专注于工程建设行业执业资格考试教育培训、技术标（或施工组织设计、施工方案等）编写以及提供相关专业人力资源服务的工作室。我们一贯秉持“客户至上、服务第一”的理念宗旨，力求为广大工程建设行业企事业单位、个人提供最专业、最便捷、最全面的服务。')}}</p>
            <p>{{__('在这里，我们将展示部分工作室的')}}<a href="#work">{{__('作品')}}</a>{{__('给大家。')}}</p>
        </article>

        <!-- Work -->
        <article id="work">
            <h2 class="major">作品</h2>
            <section>
                <h3 class="major">视频教程 - 2020一级建造师（市政实务）</h3>
                <div class="table-wrapper">
                    <table>
                        <thead>
                        <tr>
                            <th>序号</th>
                            <th>章节</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>第一节</td>
                            <td>录制中</td>
                            <td><a href="{{route('home.index')}}/player?url={{route('home.index')}}/v/bgm1/index.m3u8"
                                   target="_blank" class="button">点击播放</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>第二节</td>
                            <td>录制中</td>
                            <td><a href="#" class="button disabled">敬请期待</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            <section>
                <h3 class="major">施工组织设计（技术标、施工方案等）</h3>
                <div class="table-wrapper">
                    <table>
                        <thead>
                        <tr>
                            <th>序号</th>
                            <th>名称</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>某快速路工程项目投标文件技术部分（部分内容）</td>
                            <td><a href="{{route('home.index')}}/reader/#../file/get?id=01&type=pdf}}"
                                   target="_blank" class="button">点击查看</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>某新建工厂（包含厂房和宿舍）项目投标文件技术部分（部分内容）</td>
                            <td><a href="{{route('home.index')}}/reader/#../file/get?id=02&type=pdf"
                                   target="_blank" class="button">点击查看</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>某医院改造项目投标文件技术部分（部分内容）</td>
                            <td><a href="{{route('home.index')}}/reader/#../file/get?id=03&type=pdf"
                                   target="_blank" class="button">点击查看</a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>某污水处理厂二期扩建及一期提标工程投标文件技术部分（部分内容）</td>
                            <td><a href="{{route('home.index')}}/reader/#../file/get?id=04&type=pdf"
                                   target="_blank" class="button">点击查看</a></td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td>... ...</td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </section>
        </article>

        <!-- About -->
        <article id="about">
            <h2 class="major">关于</h2>
            <span class="image main"><img src="images/pic03.jpg" alt=""/></span>
            <p>Lorem ipsum dolor sit amet, consectetur et adipiscing elit. Praesent eleifend dignissim arcu, at eleifend
                sapien imperdiet ac. Aliquam erat volutpat. Praesent urna nisi, fringila lorem et vehicula lacinia quam.
                Integer sollicitudin mauris nec lorem luctus ultrices. Aliquam libero et malesuada fames ac ante ipsum
                primis in faucibus. Cras viverra ligula sit amet ex mollis mattis lorem ipsum dolor sit amet.</p>
        </article>

        <!-- Contact -->
        <article id="contact">
            <h2 class="major">联系</h2>
            <form method="post" action="#">
                <div class="fields">
                    <div class="field half">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name"/>
                    </div>
                    <div class="field half">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email"/>
                    </div>
                    <div class="field">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" rows="4"></textarea>
                    </div>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="Send Message" class="primary"/></li>
                    <li><input type="reset" value="Reset"/></li>
                </ul>
            </form>
            <ul class="icons">
                <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
            </ul>
        </article>

        <!-- Elements -->
        <article id="elements">
            <h2 class="major">Elements</h2>

            <section>
                <h3 class="major">Text</h3>
                <p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
                    This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
                    This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this
                        is a link</a>.</p>
                <hr/>
                <h2>Heading Level 2</h2>
                <h3>Heading Level 3</h3>
                <h4>Heading Level 4</h4>
                <h5>Heading Level 5</h5>
                <h6>Heading Level 6</h6>
                <hr/>
                <h4>Blockquote</h4>
                <blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus
                    euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis
                    volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor
                    sit amet nullam adipiscing eu felis.
                </blockquote>
                <h4>Preformatted</h4>
                <pre><code>i = 0;

while (!deck.isInOrder()) {
    print 'Iteration ' + i;
    deck.shuffle();
    i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
            </section>

            <section>
                <h3 class="major">Lists</h3>

                <h4>Unordered</h4>
                <ul>
                    <li>Dolor pulvinar etiam.</li>
                    <li>Sagittis adipiscing.</li>
                    <li>Felis enim feugiat.</li>
                </ul>

                <h4>Alternate</h4>
                <ul class="alt">
                    <li>Dolor pulvinar etiam.</li>
                    <li>Sagittis adipiscing.</li>
                    <li>Felis enim feugiat.</li>
                </ul>

                <h4>Ordered</h4>
                <ol>
                    <li>Dolor pulvinar etiam.</li>
                    <li>Etiam vel felis viverra.</li>
                    <li>Felis enim feugiat.</li>
                    <li>Dolor pulvinar etiam.</li>
                    <li>Etiam vel felis lorem.</li>
                    <li>Felis enim et feugiat.</li>
                </ol>
                <h4>Icons</h4>
                <ul class="icons">
                    <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
                </ul>

                <h4>Actions</h4>
                <ul class="actions">
                    <li><a href="#" class="button primary">Default</a></li>
                    <li><a href="#" class="button">Default</a></li>
                </ul>
                <ul class="actions stacked">
                    <li><a href="#" class="button primary">Default</a></li>
                    <li><a href="#" class="button">Default</a></li>
                </ul>
            </section>

            <section>
                <h3 class="major">Table</h3>
                <h4>Default</h4>
                <div class="table-wrapper">
                    <table>
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Item One</td>
                            <td>Ante turpis integer aliquet porttitor.</td>
                            <td>29.99</td>
                        </tr>
                        <tr>
                            <td>Item Two</td>
                            <td>Vis ac commodo adipiscing arcu aliquet.</td>
                            <td>19.99</td>
                        </tr>
                        <tr>
                            <td>Item Three</td>
                            <td> Morbi faucibus arcu accumsan lorem.</td>
                            <td>29.99</td>
                        </tr>
                        <tr>
                            <td>Item Four</td>
                            <td>Vitae integer tempus condimentum.</td>
                            <td>19.99</td>
                        </tr>
                        <tr>
                            <td>Item Five</td>
                            <td>Ante turpis integer aliquet porttitor.</td>
                            <td>29.99</td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td>100.00</td>
                        </tr>
                        </tfoot>
                    </table>
                </div>

                <h4>Alternate</h4>
                <div class="table-wrapper">
                    <table class="alt">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Item One</td>
                            <td>Ante turpis integer aliquet porttitor.</td>
                            <td>29.99</td>
                        </tr>
                        <tr>
                            <td>Item Two</td>
                            <td>Vis ac commodo adipiscing arcu aliquet.</td>
                            <td>19.99</td>
                        </tr>
                        <tr>
                            <td>Item Three</td>
                            <td> Morbi faucibus arcu accumsan lorem.</td>
                            <td>29.99</td>
                        </tr>
                        <tr>
                            <td>Item Four</td>
                            <td>Vitae integer tempus condimentum.</td>
                            <td>19.99</td>
                        </tr>
                        <tr>
                            <td>Item Five</td>
                            <td>Ante turpis integer aliquet porttitor.</td>
                            <td>29.99</td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td>100.00</td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </section>

            <section>
                <h3 class="major">Buttons</h3>
                <ul class="actions">
                    <li><a href="#" class="button primary">Primary</a></li>
                    <li><a href="#" class="button">Default</a></li>
                </ul>
                <ul class="actions">
                    <li><a href="#" class="button">Default</a></li>
                    <li><a href="#" class="button small">Small</a></li>
                </ul>
                <ul class="actions">
                    <li><a href="#" class="button primary icon solid fa-download">Icon</a></li>
                    <li><a href="#" class="button icon solid fa-download">Icon</a></li>
                </ul>
                <ul class="actions">
                    <li><span class="button primary disabled">Disabled</span></li>
                    <li><span class="button disabled">Disabled</span></li>
                </ul>
            </section>

            <section>
                <h3 class="major">Form</h3>
                <form method="post" action="#">
                    <div class="fields">
                        <div class="field half">
                            <label for="demo-name">Name</label>
                            <input type="text" name="demo-name" id="demo-name" value="" placeholder="Jane Doe"/>
                        </div>
                        <div class="field half">
                            <label for="demo-email">Email</label>
                            <input type="email" name="demo-email" id="demo-email" value=""
                                   placeholder="jane@untitled.tld"/>
                        </div>
                        <div class="field">
                            <label for="demo-category">Category</label>
                            <select name="demo-category" id="demo-category">
                                <option value="">-</option>
                                <option value="1">Manufacturing</option>
                                <option value="1">Shipping</option>
                                <option value="1">Administration</option>
                                <option value="1">Human Resources</option>
                            </select>
                        </div>
                        <div class="field half">
                            <input type="radio" id="demo-priority-low" name="demo-priority" checked>
                            <label for="demo-priority-low">Low</label>
                        </div>
                        <div class="field half">
                            <input type="radio" id="demo-priority-high" name="demo-priority">
                            <label for="demo-priority-high">High</label>
                        </div>
                        <div class="field half">
                            <input type="checkbox" id="demo-copy" name="demo-copy">
                            <label for="demo-copy">Email me a copy</label>
                        </div>
                        <div class="field half">
                            <input type="checkbox" id="demo-human" name="demo-human" checked>
                            <label for="demo-human">Not a robot</label>
                        </div>
                        <div class="field">
                            <label for="demo-message">Message</label>
                            <textarea name="demo-message" id="demo-message" placeholder="Enter your message"
                                      rows="6"></textarea>
                        </div>
                    </div>
                    <ul class="actions">
                        <li><input type="submit" value="Send Message" class="primary"/></li>
                        <li><input type="reset" value="Reset"/></li>
                    </ul>
                </form>
            </section>
        </article>

    </div>

    <!-- Footer -->
    <footer id="footer">
        <p class="copyright">&copy; <a href="{{route('home.index')}}">{{__('拉格朗工作室')}}</a></p>
    </footer>

</div>

<!-- BG -->
<div id="bg"></div>

<!-- Scripts -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/browser.min.js')}}"></script>
<script src="{{asset('assets/js/breakpoints.min.js')}}"></script>
<script src="{{asset('assets/js/util.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<!--script src="//cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script-->
<script>
    $("article#video .close").click(
        function () {
            dp.toggle();
        }
    )
</script>
</body>
</html>