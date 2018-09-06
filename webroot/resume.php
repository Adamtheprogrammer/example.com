<?php 
$meta = [];
$meta['title']='Adami Walker';
$meta['description']='Developing the future one day at a time';
$meta['keywords']='AdamWalker, FullStack , Mobile Developer';
$content = <<<EQT

        <main>
            <section class="intro">
                <h1>Adam Walker</h1>

                <a href="https:www.linkedin.com/in/adamwalker/" target="_blank" rel="nooponer">Linkedin</a>
                &#x25cf;
                <a href="https://github.com/adamtheprogrammer" target="_blank" rel="noopner">Github</a>
                &#x25cf;
                Chicago, Ill


                <h2 class="text-initial">Fullstack Web and Hybrid Mobile Application Developer</h2>
                <p>I create neatly written code to optimize performance and user activity.
                   I enjoy Coding because it gives me nature ability to creat something from scratch and unique.
                   The projects I enjoy building have value to a user or multiple users. 
                   I am fully invested in building projects that will make life generally more easy to handle by using a
                   mobile application.
                </p>
                    <ul>
                        <li>Computer Savvy</li>
                        <li>Strong attention to detail</li>
                    </ul>
                

            
                    <h3 class="text-initial">Core Competencies</h3>

                    <ul class="cc-left">
                        <li>Full Stack Development</li> 
                        <li>Front End Development</li>
                        <li>Server-Side Development</li>
                    </ul>

                    <ul class="cc-right">
                        <li>Hybrid Mobile Development</li> 
                        <li>Savy Mobile Solver</li>
                        <li>Strong Eye For Design</li>
                    </ul>
            </section>
            <section class="certs">
                    <h2>Certification and Technical Proficiences</h2>

                    <ul>
                        <li>
                            <em>Certification</em>
                            Agile Certified Scrum Master
                        </li>
                        <li>
                            <em>Platform</em>
                            Linux, LAMP, Mean, Node.js
                         </li>

                        <li>
                            <em>Database</em>
                            Mysql, MongoDB
                        </li>
                        <li>
                            <em>Tools</em>
                            VScode, SSH, Gulp, Git
                         </li>
                         <li>
                            <em>Languages</em>
                            Html, CSS, SASS, Javascript, ES6, PHP, Bash, Sql, Typescript.
                         </li>

                    </ul>
            </section>

                <section class="emp">
                    <h2>Professional Experience</h2>
            
                   
                        <h3>Central Building Preservation - chicago, Il <span class="date">2015 - 2017</span></h3>
                        <p>The employer I previously worked for was very organized but not busy. The company itself is a very good company to work for but at some times 
                           can be a little slow picking up work.
                        </p>

                        <h4>Job Title</h4>
                        <ul>
                            <li><h4>Construction</h4></li>
                            <span>Perform laborer skills in order to prep the bricklayers and tuckpointer for there start of ther day.</span>
                            
                        </ul>            

                    </section>
            <section class="edu">
                    <h2>Education</h2>
                    <section>
                            <h3>Microtrain Technologies - Chicago,Il <span class="date">2018</span></h3>
                            <h4>Agile FullStack Web and Hybrid Application developer</h4>
                    </section>

                    <section>
                            <h3>Midwest High School- chicago, il <span class="date"> 2009</span></h3>
                            <h4>High School Diploma</h4>
                    </section>
            </section>
</main>
            <script>

                    var toggleMenu = document.getElementById('toggleMenu');
                    var nav = document.querySelector('nav');
                    toggleMenu.addEventListener(
                        'click',
                        function(){
                            if(nav.style.display=='block'){
                              nav.style.display='none';
                            }else{
                              nav.style.display='block';
                            }
                          }
                        );
             </script>  
EQT;

include '../core/layout.php';