
        <br>
        <div class="row slideanim">
            <!-- Menu -->
            <div class="col-md-3">
                <div class="card card2 floatLeft">
                    <div class="card-header">
                        <h3><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Menu</h3>
                    </div>
                    <div class="card-content">
                        <div class="list-group" role="tablist">
                            <a href="#intro" class="list-group-item active" aria-controls="intro" role="tab" data-toggle="tab"><h4>Introduction</h4></a>
                            <a href="#message" class="list-group-item" aria-controls="message" role="tab" data-toggle="tab"><h4>HOD's Message</h4></a>
                            <a href="#faculty" class="list-group-item" aria-controls="faculty" role="tab" data-toggle="tab"><h4>Faculty Page</h4></a>
                            <a href="#research" class="list-group-item" aria-controls="research" role="tab" data-toggle="tab"><h4>Research Paper and Workshop Details</h4></a>
                            <a href="#achievements" class="list-group-item" aria-controls="achievements" role="tab" data-toggle="tab"><h4>Student's Achievements</h4></a>
                            <!--<a href="#rooms" class="list-group-item" aria-controls="rooms" role="tab" data-toggle="tab"><h4>Class Rooms</h4></a>-->
                            <a href="#labs" class="list-group-item" aria-controls="labs" role="tab" data-toggle="tab"><h4>Labs</h4></a>
                            <a href="#coe" class="list-group-item" aria-controls="coe" role="tab" data-toggle="tab"><h4>Center of Excellence</h4></a>
                            <a href="#wss" class="list-group-item" aria-controls="wss" role="tab" data-toggle="tab"><h4>Winter/Summer School</h4></a>
                            <a href="#skill" class="list-group-item" aria-controls="skill" role="tab" data-toggle="tab"><h4>Skill Development</h4></a>
                            <a href="#seminar" class="list-group-item" aria-controls="seminar" role="tab" data-toggle="tab"><h4>Conference/Seminar/FDP</h4></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Department -->
            <div class="col-md-9">
                <div class="card">
                    <!-- <div class="card-header">
          <h3><span class="glyphicon glyphicon-bookmark"></span> About Department</h3>
        </div> -->
                    <div class="card-content" style="padding: 20px;">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="intro">
                                <h2><b>About Us</b></h2>
                                <div align="justify">
                                    <p>Welcome to the Department of Computer Science and Engineering at Krishna Engineering College!!
                                        <br>
                                        <br>
                                        <b>Aim</b>
                                        <br> The aim of the department is to provide high quality education along with training the students with all the new advancements in the computers field. The department places emphasis on all the important aspects of computers such as High speed networks, mobile networks , Algorithm Design, Operational research, Advance database systems, Theory of computation , Computer Graphics, Software Engineering and many more. The department also takes initiative to improve the soft skills, analytical capabilities and verbal communication of the students so that they can face the competition in the corporate world confidently.
                                        <br>
                                        <br>
                                        <b>Scope:</b>
                                        <br> The scope of computer science& Information Technology is endless. The students of the computer science and engineering & Information Technology are highly demanded by the recruiters of the top companies. The department provides platform for the students to achieve their career goals.
                                        <br>
                                        <br>
                                        <b>Vision:</b>
                                        <br> To be recognized as a center of excellence for education & research in the field of Computer Science and Engineering with an aim of building IT professionals with a positive mind-set coupled with societal concern .
                                        <br>
                                        <br>
                                        <b>Mision:</b>
                                        <br> To train students to develop inquisitive mind for the true understanding of real life problems and to build optimal computer solutions for the benefit of society at large.
                                        <br>
                                        <Br>
                                        <br><b>Programme Educational Objectives:</b>
                                        <br>
                                        <ol>
                                            <li>Students will acquire core competence in basic-science and engineering fundamentals necessary to formulate, analyze, and solve engineering problems and to pursue advanced study.</li>
                                            <li>Students will acquire capabilities to succeed as computer engineering professionals with an aptitude for higher education and entrepreneurship.</li>
                                            <li>The graduates will have the curiosity and desire of learning for life and self-confidence to adapt to changes.</li>
                                            <li>Students will maintain high professionalism and ethical standards, effective oral and written communication skills, work as part of teams on multidisciplinary projects under diverse professional environments, and relate engineering issues to the society, global economy and to emerging technologies.</li>
                                        </ol>
                                    </p>
                                </div>
                                <bR>
                            </div>
                            
                            <div role="tabpanel" class="tab-pane" id="message">
                                <h2><b>HOD's Message</b></h2>
                                <br>
                                <div class="row">
                                  <div class="col-md-4" align="center">
                                    <img class="img-responsive" src="<?php echo base_url();?><?php echo $hod->image;?>" width="250"><br><br>
                                    </div>
                                    <div class="col-md-8">
                                    <h4><b><a href="#" target="_blank"><?php echo $hod->name;?></a></b></h4>
                                    <br>
                                    <b><?php echo $hod->qualification;?></b><br><br>
                            <p align="justify">
                            <?php echo $hod->message;?></p><br><br>
                            </div>
                            </div>
                            </div>
                            
                                <div role="tabpanel" class="tab-pane" id="faculty">
                                <h2><b>Faculty Page</b></h2>
                                <br>
                                <!-- One row has four images. Notice the class names in column and image. -->
                                <div class="row">
                                <?php $count = 0;?>
                                <?php foreach ($faculty as $faculty): ?>
                                <?php if($count%4==0):?>
                                </div>
                                <div class="row">
                                <?php endif ;?>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="thumbnail">
                                            <img class="faculty" src="<?php echo base_url();?><?php echo $faculty['image'];?>" style="max-height: 180px">
                                            <div class="caption">
                                            <a href="/departments/teacher/1" target="_blank"><h3><?php echo $faculty['name'];?></h3></a>
                                            <b><p><?php echo $faculty['designation'];?></p></b>

                                        </div>
                                        </div>
                                    </div>
                                    <?php $count = $count+1;?>
                                <?php endforeach;?>
                                    
                                
                                </div>    
                                </div>
                            <div role="tabpanel" class="tab-pane" id="research">
                                <h2><b>Research Paper and Workshop Details</b></h2>
                                <br>
                                <div align="justify">
                                    <table class="table table-striped table-bordered">
                                        <tbody>
                                            <tr height="25">
                                                <td width="64" height="25" valign="top">
                                                    <div align="center"></div>
                                                </td>
                                                <td width="643">
                                                    <div align="center"><strong>Department of Computer Science    &amp; Engineering</strong></div>
                                                </td>
                                            </tr>
                                            <tr height="25">
                                                <td height="25" valign="top">
                                                    <div align="center"></div>
                                                </td>
                                                <td>
                                                    <div align="center"><strong>List of Some Research Papers</strong></div>
                                                </td>
                                            </tr>
                                            <tr height="43">
                                                <td height="43" align="right" valign="top">
                                                    <div align="center">1</div>
                                                </td>
                                                <td width="643">Astha Gupta, and Neeraj Singhal (2012. Advice Generation using fuzzy logic in OMR Pheonix Technique, International Journal of computer Application, vol 52(16).</td>
                                            </tr>
                                            <tr height="35">
                                                <td height="35" align="right" valign="top">
                                                    <div align="center">2</div>
                                                </td>
                                                <td width="643">Avantika Yadav, and Archana Singh(2014). International Journal of Engineering and Management Research, Effect of similarity measures on AGNES based hierarchical clustering, vol. 4(3), p.p.257-263.</td>
                                            </tr>
                                            <tr height="35">
                                                <td height="35" align="right" valign="top">
                                                    <div align="center">3</div>
                                                </td>
                                                <td width="643">Avantika Yadav, and Archana Singh(2014).Hybrid Approach of Hierarchical Clustering, World Applied Science Journal.</td>
                                            </tr>
                                            <tr height="35">
                                                <td height="35" align="right" valign="top">
                                                    <div align="center">4</div>
                                                </td>
                                                <td width="643">Avantika Yadav, and Archana Singh(2013).K-means with three different distance metrics,International Journal of Computer Science and Applications,Vol.67(10)</td>
                                            </tr>
                                            <tr height="35">
                                                <td height="35" align="right" valign="top">
                                                    <div align="center">5</div>
                                                </td>
                                                <td width="643">Avantika Yadav,(2013).Designing Digital Hardware using AOP and OOP, Cloud computing Driving New Initiatives for E-governance and Education,</td>
                                            </tr>
                                            <tr height="38">
                                                <td height="38" align="right" valign="top">
                                                    <div align="center">6</div>
                                                </td>
                                                <td width="643">Leenu Singh, and Syed Imtiyaz Hassan, (2013). Virtualization Evolution for Transparent Malware Analysis, IJSR, vol 2(6). P.p.101-104.</td>
                                            </tr>
                                            <tr height="39">
                                                <td height="39" align="right" valign="top">
                                                    <div align="center">7</div>
                                                </td>
                                                <td width="643">Sandhya Awasthi, and Avinash Dwivedi (2013). Prediction of Mobile User Behavior Using Clustering, International Journal of Scientific and Research Publications, vol 3(2).</td>
                                            </tr>
                                            <tr height="43">
                                                <td height="43" align="right" valign="top">
                                                    <div align="center">8</div>
                                                </td>
                                                <td width="643">Sandhya Awasthi, and Avinash Dwivedi (2013). Temporal Mobile Sequential Pattern Mining via Clustering and Time Segmentation, Advances in Energy&nbsp; Engineering (Book published by IIT BHU),p.p.85-90.</td>
                                            </tr>
                                            <tr height="29">
                                                <td height="29" align="right" valign="top">
                                                    <div align="center">9</div>
                                                </td>
                                                <td width="643">Shelly Gupta, and Avinash Dwivedi, (2012). EKSS: An efficient approach for similarity search, (ICCICT) IEEE Explore,&nbsp;</td>
                                            </tr>
                                            <tr height="35">
                                                <td height="35" align="right" valign="top">
                                                    <div align="center">10</div>
                                                </td>
                                                <td width="643">Shelly Gupta, and Avinash Dwivedi,(2012)An Efficient Similarity Search Approach to Incremental Multidimensional Data in Presence of Obstacles, (FICTA) Advances in Intelligent Systems and Computing Springer, vol 199, p.p. 93-101.</td>
                                            </tr>
                                            <tr height="63">
                                                <td height="63" align="right" valign="top">
                                                    <div align="center">11</div>
                                                </td>
                                                <td>Harish Kumar(2011) “New Approach for secure Audio Steganography using LSB and Fibonacci Number” for National Conference organized by Department of Computer Science &amp; Engineering, Bhartiya Vidya Peeth, Delhi. INDIACOM .</td>
                                            </tr>
                                            <tr height="42">
                                                <td height="42" align="right" valign="top">
                                                    <div align="center">12</div>
                                                </td>
                                                <td>Harish Kumar(2010) “Audio Steganography step toward the secure data transmission” for National Conference organized by ITS Ghaziabad, held on OCT 2010</td>
                                            </tr>
                                            <tr height="63">
                                                <td height="63" align="right" valign="top">
                                                    <div align="center">13</div>
                                                </td>
                                                <td>&nbsp;Harish Kumar(2010) “Information and Communication Technology a Ram Ban for development of Uttar Pradesh” in INDIACOM 10 (National Conference) in Feb 2010 Organized by Department of Computer Science &amp; Engineering, Bhartiya Vidya Peeth, Delhi.</td>
                                            </tr>
                                            <tr height="63">
                                                <td height="63" align="right" valign="top">
                                                    <div align="center">14</div>
                                                </td>
                                                <td>Harish Kumar(2009)&nbsp; “New Approach to Network management architecture” in ITBT09 (National Conference) on May 2009. Organized by Department of computer science &amp; engineering, Ajay Kumar Garg Engineering College, Ghaziabad</td>
                                            </tr>
                                            <tr height="63">
                                                <td height="63" align="right" valign="top">
                                                    <div align="center">15</div>
                                                </td>
                                                <td>Harish Kumar(2009)&nbsp; “JENA: an open source java Tool kit: an OVERVIEW” in INDIACOM 09 (National Conference) in Feb 2009 Organized by Department of Computer Science &amp; Engineering, Bhartiya Vidya Peeth, Delhi.</td>
                                            </tr>
                                            <tr height="63">
                                                <td height="63" align="right" valign="top">
                                                    <div align="center">16</div>
                                                </td>
                                                <td>Harish Kumar, Dr. Anil Kumar Solanki (2014) “AN EFFICIENT APPROACH FOR STUDENT’S BEHAVIOR ANALYSIS WITH SUPPORT OF CLUSTERING TECHNIQUES” paper selected for International Conference ICIIE 2014, Malaysia (IEEE Conference).</td>
                                            </tr>
                                            <tr height="63">
                                                <td height="63" align="right" valign="top">
                                                    <div align="center">17</div>
                                                </td>
                                                <td>&nbsp;Harish Kumar, Dr. Anil Kumar Solanki(2014) “ARTIFICIAL NEURAL NETWORK APPROACH FOR STUDENT’S BEHAVIOR ANALYSIS” paper selected for International Journal of Soft Computing and Engineering ISSN No2231-2307 for Feb 2014 Issue.</td>
                                            </tr>
                                            <tr height="63">
                                                <td height="63" align="right" valign="top">
                                                    <div align="center">18</div>
                                                </td>
                                                <td>&nbsp;Harish Kumar, Dr. Anil Kumar Solanki(2013)&nbsp; “HIERARCHICAL CLUSTERING WITH WEBASTRO FOR USER BEHAVIOR ANALYSIS AND WEB SITE MODIFICATION” paper published in International Conference WISM'13-AICI'13, China (IEEE Conference)</td>
                                            </tr>
                                            <tr height="84">
                                                <td height="84" align="right" valign="top">
                                                    <div align="center">19</div>
                                                </td>
                                                <td>&nbsp;Harish Kumar, Dr. Anil Kumar Solanki (2013) “ADVANCE CLUSTERING TECHNIQUE BASED ON MARKOV CHAIN FOR PREDICTING NEXT USER MOVEMENT” Paper presented and published in Third International Conference on Advances in Information&nbsp; Technology and Mobile Communication – AIM 2013 Springer Conference(LNCS).</td>
                                            </tr>
                                            <tr height="63">
                                                <td height="63" align="right" valign="top">
                                                    <div align="center">20</div>
                                                </td>
                                                <td>&nbsp;Harish Kumar, Dr. Anil Kumar Solanki “EFFECTIVE CLEANING OF EDUCATIONAL WEBSITE USAGE PATTERNS AND PREDICTING THEIR NEXT VISIT” (Volume 53 Nov 12) International Journal (USA) IJCA (Impact Factor=0.814) ISSN NO 0975-8887.&nbsp;</td>
                                            </tr>
                                            <tr height="84">
                                                <td height="84" align="right" valign="top">
                                                    <div align="center">21</div>
                                                </td>
                                                <td>&nbsp;Harish Kumar, Dr. Anil Kumar Solanki (2011)“ANALYSIS OF EDUCATIONAL WEB PATTERN USING ADAPTIVE MARKOV CHAIN FOR NEXT PAGE ACCESS PREDICTION” (Vol. 9 No. 7 JUL 2011) International Journal (USA) IJCSIS (Impact Factor=0.423) ISSN NO1646-3692 .</td>
                                            </tr>
                                            <tr height="63">
                                                <td height="63" align="right" valign="top">
                                                    <div align="center">22</div>
                                                </td>
                                                <td>Harish Kumar, Dr. Anil Kumar Solanki(2011)&nbsp; “NEW APPROACH OF WEB USAGE MINING FOR E-EDUCATIONAL WEB SITES” paper published in (ETCSIT-2011) International Conference, Gulzar group of Institution, Khanna (Punjab).</td>
                                            </tr>
                                            <tr height="63">
                                                <td height="63" align="right" valign="top">
                                                    <div align="center">23</div>
                                                </td>
                                                <td>Harish Kumar, Dr. Anil Kumar Solanki (2010)&nbsp; “CLUSTERING TECHNIQUE FOR WEB SITE IMPROVEMENT: AN OVERVIEW” INDIACOMM-10 National Conference&nbsp;ISSN&nbsp;0973-7529, 2010.</td>
                                            </tr>
                                            <tr height="41">
                                                <td height="41" align="right" valign="top">
                                                    <div align="center">24</div>
                                                </td>
                                                <td width="643">Lokesh Jain, (2011). Preserving privacy in routing in Mobile Ad hoc environment through non-linear dimension reduction techniques, ICNICT, p.p. 78-83.</td>
                                            </tr>
                                            <tr height="33">
                                                <td height="33" align="right" valign="top">
                                                    <div align="center">25</div>
                                                </td>
                                                <td width="643">Lokesh Jain, (2011). Establish trust in Social Network for Mobile Marketing, ICCMS, p.p. 233-238.</td>
                                            </tr>
                                            <tr height="35">
                                                <td height="35" align="right" valign="top">
                                                    <div align="center">26</div>
                                                </td>
                                                <td width="643">Lokesh Jain (2010). A new approach to Supervise Security in Social Network through Quantum cryptography and Non-Linear Dimension Reduction Techniques, IJCSI, vol 4, p.p. 65-70</td>
                                            </tr>
                                            <tr height="28">
                                                <td height="28" align="right" valign="top">
                                                    <div align="center">27</div>
                                                </td>
                                                <td width="643">Lokesh Jain (2010).Finding Expert Teacher in Education using Social Network and Fuzzy Logic,ICDM, p.p.168-171</td>
                                            </tr>
                                            <tr height="28">
                                                <td height="28" align="right" valign="top">
                                                    <div align="center">28</div>
                                                </td>
                                                <td width="643">Lokesh Jain,(2010) Privacy in Social Network through Link Mining and Fuzzy Logic, CUT, p.p.221-224</td>
                                            </tr>
                                            <tr height="28">
                                                <td height="28" align="right" valign="top">
                                                    <div align="center">29</div>
                                                </td>
                                                <td width="643">Lokesh Jain,(2010)Congestion and Power aware Reliable Protocol for MANET, TRACE, p.p.147-152</td>
                                            </tr>
                                            <tr height="35">
                                                <td height="35" align="right" valign="top">
                                                    <div align="center">30</div>
                                                </td>
                                                <td width="643">Shruti Asmita, SugandhaAgarwal, and Pramod Ku. Sethy(2013).Real Time Simple Face-Tracking Algorithm based on Minimum Facial Features, International Journal of Computer Application, vol 79(12), p.p.28-34</td>
                                            </tr>
                                            <tr height="35">
                                                <td height="35" align="right" valign="top">
                                                    <div align="center">31</div>
                                                </td>
                                                <td width="643">Ruchi Gupta,Pramod Ku. Sethy(2012).A Reliable And Scalable Multicast Model(RSM2), International Journal of Recent Technology and Engineering, vol.1(2), p.p.47-52.</td>
                                            </tr>
                                            <tr height="52">
                                                <td height="52" align="right" valign="top">
                                                    <div align="center">32</div>
                                                </td>
                                                <td width="643">Rahul Deva,and&nbsp; Garima Kulshreshtha, (2010). Role of Soft Computing to Improve Human Work Efficiency in Noisy Environment Enhancement, 2nd International Conference, “Innovative Practices in Management and Information Technology for Excellence”- SRIJAN’10,&nbsp; MAIMT, Jagadhri, Haryana.</td>
                                            </tr>
                                            <tr height="52">
                                                <td height="52" align="right" valign="top">
                                                    <div align="center">33</div>
                                                </td>
                                                <td width="643">Rahul Deva, and Garima Kulshreshtha, (2010). Towards improvement in Human Work Efficiency using Soft Computing, 1st National Conference, “Emerging Trends in Advanced Computing &amp; Informatics” - (CICON-2010),&nbsp; Shobhit University, Meerut.</td>
                                            </tr>
                                            <tr height="52">
                                                <td height="52" align="right" valign="top">
                                                    <div align="center">34</div>
                                                </td>
                                                <td width="643">Avinash Dwivedi, and Rahul Deva, (2010).&nbsp; Strengthening anonymity in anonymous remailers, 1st National Conference, “Emerging Trends in Computational Sciences &amp; Engineering(ETCOSE), Krishna Engineering College, Ghaziabad.</td>
                                            </tr>
                                            <tr height="52">
                                                <td height="52" align="right" valign="top">
                                                    <div align="center">35</div>
                                                </td>
                                                <td width="643">Rahul Deva, and Garima Kulshreshtha, (2010). Packet Traffic Modeling using Neural Network, 1st National Conference, “Emerging Trends in Computational Sciences &amp; Engineering(ETCOSE), Krishna Engineering College, Ghaziabad,.</td>
                                            </tr>
                                            <tr height="35">
                                                <td height="35" align="right" valign="top">
                                                    <div align="center">36</div>
                                                </td>
                                                <td width="643">Tarun Kumar, Mayank Singh, Arun Sharma, “D- A Powerful General Purpose Application Programming Language”, Accepted for publication in International Journal of Computer Application, October 2014 edition.</td>
                                            </tr>
                                            <tr height="52">
                                                <td height="52" align="right" valign="top">
                                                    <div align="center">37</div>
                                                </td>
                                                <td width="643">Nitesh Chouhan, Maitreyee Dutta, Mayank Singh, “A Code Analysis Based Regression Test Selection Technique for D Programming Language”, Accepted in International Conference on Computational Intelligence and Communication Networks, Udaipur, 2014.</td>
                                            </tr>
                                            <tr height="52">
                                                <td height="52" align="right" valign="top">
                                                    <div align="center">38</div>
                                                </td>
                                                <td width="643">Nitesh Chouhan, Maitreyee Dutta, Mayank Singh, “A Program Model Based Regression Test Selection Technique for D Programs”, Published in International Journal of Latest Technology in Engineering, Management &amp; Applied Science, Vol 3, Issue 7, 2014.</td>
                                            </tr>
                                            <tr height="52">
                                                <td height="52" align="right" valign="top">
                                                    <div align="center">39</div>
                                                </td>
                                                <td width="643">Pragya Kaushik, Sreesh Gaur, Mayank Singh, “Use of Query Logs for Providing Cache Support to the Search Engine”, Published in 8th INDIACom International Conference on Computing for Sustainable Global Development, BVICAM, New Delhi, 5th – 7th March, 2014.</td>
                                            </tr>
                                            <tr height="52">
                                                <td height="52" align="right" valign="top">
                                                    <div align="center">40</div>
                                                </td>
                                                <td width="643">Nitesh Chouhan, Maitreyee Dutta, Mayank Singh, “A Program Model Based Regression Test Selection Technique for Object Oriented Program”, Accepted for publication in International conference of Advancement in Information Technology International Conference, Indonesia, 2013.</td>
                                            </tr>
                                            <tr height="69">
                                                <td height="69" align="right" valign="top">
                                                    <div align="center">41</div>
                                                </td>
                                                <td width="643">Vishal Jain, Mayank Singh, “A Framework to convert Relational Database to Ontology for Knowledge Database in Semantic Web”, “International Journal of Scientific &amp; Technology Research (IJSTR), France, Vol. 2, No. 10, October 2013,&nbsp;&nbsp; page no. 9 to 12 , having ISSN No. 2277-8616, and index with EBSCO, ISSUU, DRJI, Index Copernicus with impact factor 0.675.</td>
                                            </tr>
                                            <tr height="52">
                                                <td height="52" align="right" valign="top">
                                                    <div align="center">42</div>
                                                </td>
                                                <td width="643">Vishal Jain, Mayank Singh, “Ontology Development and Query Retrieval using Protégé Tool”, International Journal of Intelligent Systems and Applications (IJISA), China,&nbsp; Vol. 5, No. 9, August 2013,&nbsp; page no. 67-75,&nbsp; having ISSN No. 2074-9058, DOI: 10.5815/ijisa.2013.09.08 and index with , EBSCO, Proquest, DOAJ, Index Copernicus.</td>
                                            </tr>
                                            <tr height="52">
                                                <td height="52" align="right" valign="top">
                                                    <div align="center">43</div>
                                                </td>
                                                <td width="643">Vishal Jain, Gagan Narula, Mayank Singh, “Ontology Development Using Hozo and Semantic Analysis for Information Retrieval in Semantic Web”, Published in Second IEEE International Conference on Image Information Processing at Jaypee University of Information Technology, Solan, December, 2013.</td>
                                            </tr>
                                            <tr height="103">
                                                <td height="103" align="right" valign="top">
                                                    <div align="center">44</div>
                                                </td>
                                                <td width="643">Vishal Jain, Mayank Singh, “Ontology Based Pivoted Normalization using Vector – Based Approach for Information Retrieval”, IEEE Co-Sponsored 7th International Conference on Advanced Computing and Communication Technologies (ICACCT),&nbsp; In association with INDERSCIENCE Publishers, UK, IETE and Technically Co-sponsored by Computer Society Chapter IEEE Delhi Section, held on 16th November, 2013, organized by Asia Pacific Institute of Information Technology SD India, Panipat, India and proceeding published by Inderscience Publishers.</td>
                                            </tr>
                                            <tr height="69">
                                                <td height="69" align="right" valign="top">
                                                    <div align="center">45</div>
                                                </td>
                                                <td width="643">Vishal Jain, Mayank Singh, “Ontology Based Web Crawler to Search Documents in the Semantic Web”, “Wilkes100 - Second International Conference on Computing Sciences”, in association with International Neural Network Society and Advanced Computing Research Society, held on 15th and 16th November, 2013 organized by Lovely Professional University, Phagwara, Punjab, India and proceeding published by Elsevier Science.</td>
                                            </tr>
                                            <tr height="52">
                                                <td height="52" align="right" valign="top">
                                                    <div align="center">46</div>
                                                </td>
                                                <td width="643">Niranjan Lal, Shamimul Qamar, Mayank Singh, “Detailed Dominant Approach Cloud Computing Integration with WSN”, Published in Springer Lecture Notes of the Institute for Computer Science, Social Informatics and Telecommunication Engineering, Vol. 113, 2013, PP – 894-903.</td>
                                            </tr>
                                            <tr height="52">
                                                <td height="52" align="right" valign="top">
                                                    <div align="center">47</div>
                                                </td>
                                                <td width="643">Vishal Jain, Gagan Narula, Mayank Singh, “Implementation of Multi Agent Systems with Ontology in Data Mining”, International Journal of Research in Computer Application and Management (IJRCM) January, 2013 having ISSN No. 2231 – 1009 and index with Index Copernicus, DOAJ, J-Gate, Ulrich’s, EBSCO, Poland IC Value is 5.09.</td>
                                            </tr>
                                            <tr height="52">
                                                <td height="52" align="right" valign="top">
                                                    <div align="center">48</div>
                                                </td>
                                                <td width="643">Vishal Jain, Gagan Narula, Mayank SIngh, “Implementation of Data Mining in Online Shopping System using TANAGRA Tool”, International Journal for Computer Science Engineering (IJCSE). USA, January 2013 having ISSN No. 2278-9979, with impact factor (2012) 2.91.</td>
                                            </tr>
                                            <tr height="52">
                                                <td height="52" align="right" valign="top">
                                                    <div align="center">49</div>
                                                </td>
                                                <td width="643">Nitin Sharma, Mayank Singh, “Image Compression Tool in Wavelets Domain for Direct Application to Revolutionize, Modeling and Imaging Technique through Crossbreeding Wavelet and Cosine Transformation”, Published in International Journal of Computer Applications, Vol. 69, No. 28, May 2013.</td>
                                            </tr>
                                            <tr height="52">
                                                <td height="52" align="right" valign="top">
                                                    <div align="center">50</div>
                                                </td>
                                                <td width="643">Vishal Jain, Mayank Singh, “Architecture Model for Communication between Multi Agent Systems with Ontology”, Published in International Journal of Advanced Research in Computer Science, Vol. 4, No. 8, June 2013. IC Value is 5.47.</td>
                                            </tr>
                                            <tr height="52">
                                                <td height="52" align="right" valign="top">
                                                    <div align="center">51</div>
                                                </td>
                                                <td width="643">PVL Narayana Rao, Mayank Singh, Salehu Anteneh, “Strategic Information Planning: Alignment of IT Planning with Business Planning”, Published in International Journal of Engineering Research and Development, Vol. 7, No. 4, May 2013, PP. 40-46.</td>
                                            </tr>
                                            <tr height="69">
                                                <td height="69" align="right" valign="top">
                                                    <div align="center">52</div>
                                                </td>
                                                <td width="643">Vishal Jain, Dr. Mayank Singh, “Ontology Based Information Retrieval in Semantic Web: A Survey”, International Journal of Information Technology and Computer Science (IJITCS), China, Vol. 5, No. 10, September 2013, page no. 62-69, having ISSN No. 2074-9015, DOI: 10.5815/ijitcs.2013.10.06 and index with EBSCO, Proquest, DOAJ, Index Copernicus.</td>
                                            </tr>
                                            <tr height="35">
                                                <td height="35" align="right" valign="top">
                                                    <div align="center">53</div>
                                                </td>
                                                <td width="643">Neetu Narwal, Mayank Singh, “Web Content Extraction A Heuristic Approach”, Published in International Journal of Computer Science and Information Security, Vol. 11, No. 1, January 2013.</td>
                                            </tr>
                                            <tr height="52">
                                                <td height="52" align="right" valign="top">
                                                    <div align="center">54</div>
                                                </td>
                                                <td width="643">Gagandeep Singh, Vishal Jain, Mayank Singh, “An Approach For Information Extraction using Jade: A Case Study”, Published in Journal of Global Research in Computer Science, Vol.4 No. 4 April, 2013, page no. 186-191. Impact Factor is 0.60.</td>
                                            </tr>
                                            <tr height="52">
                                                <td height="52" align="right" valign="top">
                                                    <div align="center">55</div>
                                                </td>
                                                <td width="643">Sharad Saxena, Shailendra Mishra, Mayank Singh, “Clustering Based on Node Density in Heterogeneous Under-Water Sensor Network”, Published in International Journal of Information Technology and Computer Science, Vol. 5, No. 7, June 2013.</td>
                                            </tr>
                                            <tr height="35">
                                                <td height="35" align="right" valign="top">
                                                    <div align="center">56</div>
                                                </td>
                                                <td width="643">Neetu Anand, Mayank Singh, “A New Approach To Monitor Children’s Computer Usage Pattern”, Published in International Journal of Computer Science and Information Security, Vol. 11, No. 1, January 2013.</td>
                                            </tr>
                                            <tr height="35">
                                                <td height="35" align="right" valign="top">
                                                    <div align="center">57</div>
                                                </td>
                                                <td width="643">Tarun Kumar, Mayank Singh, “D: A Programming Language Ready for Real World Development”, Accepted in ACM SIGSOFT for May 2013 Edition.</td>
                                            </tr>
                                            <tr height="52">
                                                <td height="52" align="right" valign="top">
                                                    <div align="center">58</div>
                                                </td>
                                                <td width="643">Shobha Rani malik, Mayank Singh, “Economic Worth Estimation of A Software Reuse Based Program”, Published in International Journal of Advanced Research In Computer Science and Software Engineering, Vol. 3, No. 1, January 2013.</td>
                                            </tr>
                                            <tr height="35">
                                                <td height="35" align="right" valign="top">
                                                    <div align="center">59</div>
                                                </td>
                                                <td width="643">Mayank Singh, Shailendra Mishra, Rajib Mall, “ULMTT: An Automated Unit Level Mutation Testing Tool for AspectJ Programs”, Accepted for publication in Elsevier Journal of Information and Software Technology, 2014.</td>
                                            </tr>
                                            <tr height="35">
                                                <td height="35" align="right" valign="top">
                                                    <div align="center">60</div>
                                                </td>
                                                <td width="643">Mayank Singh, Shailendra Mishra, Rajib Mall, “Accessing and Evaluating AspectJ Based Mutation Testing Tools”, Published in International Journal of Computer Applications, New York, USA, 2011.</td>
                                            </tr>
                                            <tr height="52">
                                                <td height="52" align="right" valign="top">
                                                    <div align="center">61</div>
                                                </td>
                                                <td width="643">Mayank Singh, Shailendra Mishra, Rajib Mall, “SLMUTT: An Automated System Level Mutation Testing Tool for AspectJ Systems”, Published in Journal of Advanced Computational Intelligence and Intelligent Informatics, Fuji Press, Japan, 2013.</td>
                                            </tr>
                                            <tr height="52">
                                                <td height="52" align="right" valign="top">
                                                    <div align="center">62</div>
                                                </td>
                                                <td width="643">Mayank Singh, Pradeep Kumar Gupta, Shailendra Mishra, “Automated Test Data Generation for Mutation Testing Using AspectJ Programs”, Published in International Conference on Image Information processing (ICIIP -2011) in conjunction with IEEE, Jaypee University, Solan India, 2011.</td>
                                            </tr>
                                            <tr height="35">
                                                <td height="35" align="right" valign="top">
                                                    <div align="center">63</div>
                                                </td>
                                                <td width="643">Mayank Singh, Shailendra Mishra, Rajib Mall, “Extended Firm Mutation: A Cost Reduction Technique for Mutation Testing”, Accepted in International Journal of Computer Science Issues, Mahebourg Republic of Mauritius, 2014.</td>
                                            </tr>
                                            <tr height="52">
                                                <td height="52" align="right" valign="top">
                                                    <div align="center">64</div>
                                                </td>
                                                <td width="643">Mayank Singh, Anuranjan Mishra, Raghav Mehra, Jugnesh Kumar, Shailendra Mishra, “Novel Approach to Automated Test Data Generation for AOP”, Published in International Journal of Information and Education Technology, Vol. 1 No. 2, June 2011.</td>
                                            </tr>
                                            <tr height="52">
                                                <td height="52" align="right" valign="top">
                                                    <div align="center">65</div>
                                                </td>
                                                <td width="643">Mayank Singh, Raghav Mehra, Anuranjan Mishra, Sachin Agrawal, Shailendra Mishra, “Automated Generation of Test Data for Evolutionary Testing Using AspectJ Programs”, (Published in IEEE International Conf. on Engineering and Information Management, 2011.) paper id A0227C00264&nbsp;</td>
                                            </tr>
                                            <tr height="35">
                                                <td height="35" align="right" valign="top">
                                                    <div align="center">66</div>
                                                </td>
                                                <td width="643">Mayank Singh, Shailendra Mishra, “Generation of Mutants for Aspect Oriented Programs”, Published in International Journal of Engineering Science and Technology, 2010. Paper Id: IJEST10-02-12-229.</td>
                                            </tr>
                                            <tr height="35">
                                                <td height="35" align="right" valign="top">
                                                    <div align="center">67</div>
                                                </td>
                                                <td width="643">Mayank Singh, Shailendra Mishra, “Generation of Mutation Operators for AOP”, Published in International Journal of Computer Science and Information Security, Vol. 8, No. 9, December 2010.</td>
                                            </tr>
                                            <tr height="35">
                                                <td height="35" align="right" valign="top">
                                                    <div align="center">68</div>
                                                </td>
                                                <td width="643">Mayank Singh, Shailendra Mishra, “Mutant Generation for Aspect Oriented Programs”, Published in International Journal of Computer Science and Engineering, Vol. 1, No. 4, 2010.</td>
                                            </tr>
                                            <tr height="52">
                                                <td height="52" align="right" valign="top">
                                                    <div align="center">69</div>
                                                </td>
                                                <td width="643">Mayank Singh, Shailendra Mishra, Rajib Mall, “Automated Generation of Test Data for Evolutionary Testing with Empirical Study Using AspectJ Programs”, Published in International Journal of Software Engineering and Computing, China, 2009.</td>
                                            </tr>
                                            <tr height="52">
                                                <td height="52" align="right" valign="top">
                                                    <div align="center">70</div>
                                                </td>
                                                <td width="643">Vishal Jain, Gagandeep Singh and Mayank Singh, “Comparative Study of Search Engine and Semantic Search Engine: A Survey”, NCACT-2013, held on 30th March, 2013 page no. 57-61 at Department of Computer Science &amp; Applications, M.D. University, Rohtak.</td>
                                            </tr>
                                            <tr height="35">
                                                <td height="35" align="right" valign="top">
                                                    <div align="center">71</div>
                                                </td>
                                                <td width="643">Mayank Singh, Dr. Shailendra Mishra, Dr. Rajib Mall “Software configuration Management: What and Why” at National seminar organized by IEI Udaipur, September 2009.</td>
                                            </tr>
                                            <tr height="52">
                                                <td height="52" align="right" valign="top">
                                                    <div align="center">72</div>
                                                </td>
                                                <td width="643">Mayank Singh, Parteek Bhatia “Handling of Relations in UNL text generation for Hindi Language” at National Conference On Technological Advances And Emerging Societal Implications, Department of Humanities &amp; Social Sciences, in National Institute of Technology, Rourkela on March 24-25, 2007.</td>
                                            </tr>
                                            <tr height="52">
                                                <td height="52" align="right" valign="top">
                                                    <div align="center">73</div>
                                                </td>
                                                <td width="643">Mayank Singh, Parteek Bhatia “Rule generation for Handling Relations in UNL text Generation for Hindi Sentence” (Paper id: RIMT/CSE/COIT/231079), at National Conference on Challenges and Opportunities in Information Technology at RIMT-IET, Mandi Gobindgarh on March 23, 2007.</td>
                                            </tr>
                                            <tr height="35">
                                                <td height="35" align="right" valign="top">
                                                    <div align="center">74</div>
                                                </td>
                                                <td width="643">Mayank Singh, “ERP: En Emerging Technology”, at National Conference on Technology Challenges at Punjab University, Amritsar.</td>
                                            </tr>
                                            <tr height="35">
                                                <td height="35" align="right" valign="top">
                                                    <div align="center">75</div>
                                                </td>
                                                <td width="643">Mayank Singh, Amit Rathi “Plagiarism” in National Conference at Thapar Institute of Engineering and Technology, Patiala.</td>
                                            </tr>
                                            <tr height="52">
                                                <td height="52" align="right" valign="top">
                                                    <div align="center">76</div>
                                                </td>
                                                <td width="643">Mayank Singh, Parteek Bhatia “Formation of Rules for handling Relations in UNL text Generation for Hindi Sentence” at National Conference on Emerging Trends and Applications in computer Engineering in Ajmer Engineering College, Ajmer on April 13, 2007.</td>
                                            </tr>
                                            <tr height="20">
                                                <td height="20" align="right" valign="top">
                                                    <div align="center">77</div>
                                                </td>
                                                <td width="643">Saloni, Mamta Rani(2013). Fractal Texture&nbsp; : A Survey Advances in Computational Research ,</td>
                                            </tr>
                                            <tr height="20">
                                                <td height="20" align="right" valign="top">
                                                    <div align="center">78</div>
                                                </td>
                                                <td width="643">Saloni, Mamta Rani(2013).Fractals : A Research, IJCET, Vol 4(4).</td>
                                            </tr>
                                            <tr height="35">
                                                <td height="35" align="right" valign="top">
                                                    <div align="center">79</div>
                                                </td>
                                                <td width="643">Shweta Garg, (2014).Social Networking&nbsp; as a Complex Network Modeling,&nbsp; Electrical, Electronics And Computer Sciences 'Innovation For Humanity'</td>
                                            </tr>
                                            <tr height="35">
                                                <td height="35" align="right" valign="top">
                                                    <div align="center">80</div>
                                                </td>
                                                <td width="643">Shweta Garg, (ICICT-2014)Modeling and Analyzing Information Diffusion Behaviour of&nbsp; Social Networks,&nbsp; Issues and Challenges in Intelligent Computing Techniques.&nbsp;</td>
                                            </tr>
                                            <tr height="35">
                                                <td height="35" align="right" valign="top">
                                                    <div align="center">81</div>
                                                </td>
                                                <td width="643">Shweta Garg,(2014)Analyzing Parameters of Social Network Dynamics,&nbsp; Advancement in era of multi-disciplinary System Special issue of Elsevier.</td>
                                            </tr>
                                            <tr height="20">
                                                <td height="20" align="right" valign="top">
                                                    <div align="center">82</div>
                                                </td>
                                                <td width="643">Shweta Garg (2012).Page Ranking of Search Engine, Computer Application and Software Engineering of CASE.&nbsp;</td>
                                            </tr>
                                            <tr height="31">
                                                <td height="31" align="right" valign="top">
                                                    <div align="center">83</div>
                                                </td>
                                                <td width="643">Vinit Kumar(2014). Energy-Efficient Routing Protocol for Wireless Sensor Networks Using Efficient Data Replication and Load Balancing, International Journal of Computer Science Trends and Technology (IJCST) V2(4): p.p.192-196.</td>
                                            </tr>
                                            <tr height="35">
                                                <td height="35" align="right" valign="top">
                                                    <div align="center">84</div>
                                                </td>
                                                <td width="643">Vinit Kumar(2014). "An Efficient Read Dominant Data Replication Protocol under Serial Isolation using Quorum Consensus Approach," in the journal of arXiv: Distributed parallel and cloud Computing.&nbsp; arXiv:1406.7423 (2014).</td>
                                            </tr>
                                            <tr height="35">
                                                <td height="35" align="right" valign="top">
                                                    <div align="center">85</div>
                                                </td>
                                                <td width="643">Vinit Kumar(2014). “HT-Paxos: High Throughput State-Machine Replication Protocol for Large Clustered Data Centers,” in the journal of arXiv: Distributed Parallel and cloud Computing, arXiv:1407.1237 (2014).</td>
                                            </tr>
                                            <tr height="35">
                                                <td height="35" align="right" valign="top">
                                                    <div align="center">86</div>
                                                </td>
                                                <td width="643">Vinit Kumar(2011). “Generalized grid quorum consensus for replica control protocol,” in proceedings of IEEE International Conference on Computational Intelligence and Communication Systems, pp 395-400.</td>
                                            </tr>
                                            <tr height="52">
                                                <td height="52" align="right" valign="top">
                                                    <div align="center">87</div>
                                                </td>
                                                <td width="643">Vinit Kumar(2011). “Multi dimensional grid quorum consensus for high capacity and availability in replica control protocol” has been published in the proceedings of HPAC-2011, CCIS 169, pp. 67-78, Springer-Verlag Berlin Heidelberg.</td>
                                            </tr>
                                            <tr height="35">
                                                <td height="35" align="right" valign="top">
                                                    <div align="center">88</div>
                                                </td>
                                                <td width="643">Vinit Kumar(2007). “Optimization of Number of Switches for Optical Interconnection network” has been published in the “international Journal of intelligent Information Processing,&nbsp;&nbsp; volume 1(1-2)p.p. 71-78.&nbsp;</td>
                                            </tr>
                                            <tr height="35">
                                                <td height="35" align="right" valign="top">
                                                    <div align="center">89</div>
                                                </td>
                                                <td width="643">Vinit Kumar(2007). “Information Technology Implementation in Rural India; challenges and their solutions” has been published in the “international Journal of intelligent Information Processing,&nbsp;&nbsp; volume 1(1-2), pp. 105-109.&nbsp;</td>
                                            </tr>
                                            <tr height="35">
                                                <td height="35" align="right" valign="top">
                                                    <div align="center">90</div>
                                                </td>
                                                <td width="643">Vinit Kumar(2007). “Information and Communication Technology in Water Pollution Monitoring and Management” has been published in the “Journal of advanced research in computer Engineering, volume 1(1-2), pp. 79-90.&nbsp;</td>
                                            </tr>
                                            <tr height="35">
                                                <td height="35" align="right" valign="top">
                                                    <div align="center">91</div>
                                                </td>
                                                <td width="643">Vinit Kumar(2007). “Mobile Learning: Core Aspects of Content Delivery and Challenges” has been published in the “international Journal of intelligent Information Processing,&nbsp;&nbsp; volume 1(1-2), pp. 111-117.&nbsp;</td>
                                            </tr>
                                            <tr height="69">
                                                <td height="69" align="right" valign="top">
                                                    <div align="center">92</div>
                                                </td>
                                                <td width="643">Vinit Kumar(2007). “Study of change in climate conditions by using the temporal and Spectral Analysis of Remote sensed data over free land and structures” has been published in the proceedings of National Conference on Computing for national development (INDIACom-2007) held at Bharati Vidyapeeth’s Institute of Computer Applications and Management, New Delhi.&nbsp;</td>
                                            </tr>
                                            <tr height="69">
                                                <td height="69" align="right" valign="top">
                                                    <div align="center">93</div>
                                                </td>
                                                <td width="643">Vinit Kumar(2007). “Image Analysis of Remote Sensing Data Integrating Spectral and Spatial Features of Objects: A Case Study on Meerut City” has been published in the proceedings of National Conference on Computing for national development (INDIACom-2007) held at Bharati Vidyapeeth’s Institute of Computer Applications and Management, New Delhi.</td>
                                            </tr>
                                            <tr height="52">
                                                <td height="52" align="right" valign="top">
                                                    <div align="center">94</div>
                                                </td>
                                                <td width="643">Vinit Kumar(2007). “Mobile Learning: Core Aspects of Content Delivery and Challenges” has been published in the proceedings of National Conference on Challenges and Opportunities in information technology held at RIMT-Institute of Engineering and Technology, Mandi Gobindgarh, Punjab.</td>
                                            </tr>
                                            <tr height="52">
                                                <td height="52" align="right" valign="top">
                                                    <div align="center">95</div>
                                                </td>
                                                <td width="643">Vinit Kumar(2007).r “Information Technology Implementation in Rural India; Challenges and their Solutions” has been published in the proceedings of National Conference on Research Opportunities and Challenges in IT held at Sri Sai Ram Engineering College, Sai Leo Nagar, West Tambaram Chennai.</td>
                                            </tr>
                                            <tr height="35">
                                                <td height="35" align="right" valign="top">
                                                    <div align="center">96</div>
                                                </td>
                                                <td width="643">Vinit Kumar(2006). “MLP Neural Network Model for optical character Recognition” has been published in the proceedings of National Conference on Computer Science and Technology held at KIET Ghaziabad.</td>
                                            </tr>
                                            <tr height="20">
                                                <td height="20" align="right" valign="top">
                                                    <div align="center">97</div>
                                                </td>
                                                <td width="643">Vishwajeet Pattanaik, and Shweta Suran(2014). Inducing Human-like Motion in Robots, ACM Digital Library</td>
                                            </tr>
                                            <tr height="35">
                                                <td height="35" align="right" valign="top">
                                                    <div align="center">98</div>
                                                </td>
                                                <td width="643">Vishu Tyagi(2010). Emerging Trends in Software Engineering: Software as a Service,Pragyaan: Journal of Information Technology, VIII, p.p. 17-20</td>
                                            </tr>
                                            <tr height="35">
                                                <td height="35" align="right" valign="top">
                                                    <div align="center">99</div>
                                                </td>
                                                <td width="643">Vishwajeet Pattanaik Shweta Suran(2014).Discovering Shortest Path between Points in Cerebrovascular System, ACM Digital Library.</td>
                                            </tr>
                                            <tr height="42">
                                                <td height="42" align="right" valign="top">
                                                    <div align="center">100</div>
                                                </td>
                                                <td>Vikas Chaudhary “A Novel Self-Organizing Map (SOM) Learning Algorithm with Nearest and Farthest Neurons”, Elsevier (Accepted)</td>
                                            </tr>
                                            <tr height="42">
                                                <td height="42" align="right" valign="top">
                                                    <div align="center">101</div>
                                                </td>
                                                <td>Vikas Chaudhary “An Efficient Self-Organizing Map (E-SOM) Learning Algorithm Using Group of Neurons” Taylor &amp; Francis, (Accepted)</td>
                                            </tr>
                                            <tr height="42">
                                                <td height="42" align="right" valign="top">
                                                    <div align="center">102</div>
                                                </td>
                                                <td>&nbsp;Vikas Chaudhary “The self-organizing map learning algorithm with inactive and relative winning frequency of active neurons”, HKIE Transactions, Taylor &amp; Francis, vol. 21, issue 1, pp. 62-67, 2014</td>
                                            </tr>
                                            <tr height="42">
                                                <td height="42" align="right" valign="top">
                                                    <div align="center">103</div>
                                                </td>
                                                <td>&nbsp;Vikas Chaudhary “Growing Neural Networks using Soft Competitive&nbsp;&nbsp; Learning” International Journal of Computer Applications, pp. 1-6,vol. 21 - No. 3 , 2011.</td>
                                            </tr>
                                            <tr height="42">
                                                <td height="42" align="right" valign="top">
                                                    <div align="center">104</div>
                                                </td>
                                                <td>Vikas Chaudhary, "A Modified Zero Knowledge Identification Scheme using ECC" Journal of Computing, pp. 102-105, vol. 3, Issue 5, May 2011.</td>
                                            </tr>
                                            <tr height="67">
                                                <td height="67" align="right" valign="top">
                                                    <div align="center">105</div>
                                                </td>
                                                <td>Vikas Chaudhary “An Efficient Self-Organizing Map Learning Algorithm with Winning Frequency of Neurons for Clustering Application” IEEE 3rd Advanced Computing Conference (IACC), pp. 672 - 676, Feb. 2013.</td>
                                            </tr>
                                            <tr height="63">
                                                <td height="63" align="right" valign="top">
                                                    <div align="center">106</div>
                                                </td>
                                                <td>Vikas Chaudhary “An Efficient Self-Organizing Map Learning Algorithm Using the Set of Nearest Neurons”, IEEE 6th International Conference on Contemporary Computing (IC3), pp. 154-158, Aug. 2013</td>
                                            </tr>
                                            <tr height="63">
                                                <td height="63" align="right" valign="top">
                                                    <div align="center">107</div>
                                                </td>
                                                <td>Vikas Chaudhary “A novel self-organizing map learning technique using community neuron on the map ”, IEEE International Conference on Issues and Challenges in Intelligent Computing Techniques (ICICT), pp. 872 – 875, Feb. 2014.</td>
                                            </tr>
                                            <tr height="84">
                                                <td height="84" align="right" valign="top">
                                                    <div align="center">108</div>
                                                </td>
                                                <td>Vikas Chaudhary,&nbsp; "K means Clustering Algorithm with High Performance using large data” presented and published in proceeding of "National Conference on Innovation and Entrepreneurship in Information and Communication Technology" by CSI Ghaziabad Chapter and MTU, Noida on 14-15 May 2011.&nbsp;</td>
                                            </tr>
                                            <tr height="84">
                                                <td height="84" align="right" valign="top">
                                                    <div align="center">109</div>
                                                </td>
                                                <td>Vikas Chaudhary "A Comparative Study to Solve Job Shop Scheduling Problem Using Genetic Algorithms and Neural Network” presented and published in proceeding of "National Conference on Innovation and Entrepreneurship in Information and Communication Technology" by CSI Ghaziabad Chapter and MTU, Noida on 14-15 May 2011.&nbsp;</td>
                                            </tr>
                                            <tr height="63">
                                                <td height="63" align="right" valign="top">
                                                    <div align="center">110</div>
                                                </td>
                                                <td>Vikas Chaudhary "A Comprehensive Study of Adaptive Resonance Theory” presented and published in proceeding of "National Conference on Innovation and Entrepreneurship in Information and Communication Technology" by CSI Ghaziabad Chapter and MTU, Noida 2011.&nbsp;</td>
                                            </tr>
                                            <tr height="63">
                                                <td height="63" align="right" valign="top">
                                                    <div align="center">111</div>
                                                </td>
                                                <td>Vikas Chaudhary "Fuzzy C-Mean Algorithm using different variants" presented and published in proceeding of "National Conference on Innovation and Entrepreneurship in Information and Communication Technology" by CSI Ghaziabad Chapter and MTU, Noida on 2011.&nbsp;</td>
                                            </tr>
                                            <tr height="63">
                                                <td height="63" align="right" valign="top">
                                                    <div align="center">112</div>
                                                </td>
                                                <td>Vikas Chaudhary "A Comprehensive Study of Web Security Protocols" presented and published in proceeding of "National Conference on Innovation and Entrepreneurship in Information and Communication Technology" by CSI Ghaziabad Chapter and MTU, Noida on 2011.&nbsp;</td>
                                            </tr>
                                            <tr height="67">
                                                <td height="67" align="right" valign="top">
                                                    <div align="center">113</div>
                                                </td>
                                                <td>Vikas Chaudhary “Improve TCP Performance over Single Hop-Wireless IP Networks” Presented and published in proceeding of “National Conference Emerging Trends In Computer Science &amp; Information Technology” on 24th April 2010.</td>
                                            </tr>
                                            <tr height="63">
                                                <td height="63" align="right" valign="top">
                                                    <div align="center">114</div>
                                                </td>
                                                <td>&nbsp;Vikas Chaudhary “ A Comprehensive Study on TCP/IP Performance over Mobile Wireless Networks” Presented and published in proceeding of “National Conference on Emerging Trends in Computational Sciences &amp; Engineering ” by KEC, Ghaziabad on 27-28 March 2010.</td>
                                            </tr>
                                            <tr height="63">
                                                <td height="63" align="right" valign="top">
                                                    <div align="center">115</div>
                                                </td>
                                                <td>Vikas Chaudhary “Watchdog and Pathrater Used to Make Network More Secure” Presented and published in proceeding of “National conference on Emerging Technology in Electrical, Electronics &amp; Computer Science” on 18 April 2009.</td>
                                            </tr>
                                            <tr height="84">
                                                <td height="84" align="right" valign="top">
                                                    <div align="center">116</div>
                                                </td>
                                                <td>Vikas Chaudhary “Using object-oriented constraint satisfaction for Automated configuration generation” Presented and published in proceeding of “National conference on Emerging Trends in Electrical, Electronics &amp; Computer Technologies” Co-sponsored by IEEE at AKGEC, Ghaziabad on 5-6 Sept 2008.</td>
                                            </tr>
                                            <tr height="92">
                                                <td height="92" align="right" valign="top">
                                                    <div align="center">117</div>
                                                </td>
                                                <td>Vikas Chaudhary “Web services for creating simulator from WSDL &amp; generating WSDL from java file Presented and published in proceeding of ” National conference on Technology for Rural India Challenges &amp; Perspectives” organized by ISTE (New Delhi section) at NSIT, New Delhi on 31st May-1st June 2008.</td>
                                            </tr>
                                            <tr height="63">
                                                <td height="63" align="right" valign="top">
                                                    <div align="center">118</div>
                                                </td>
                                                <td>Vikas Chaudhary “Security Challenges for routing protocols in Ad-hoc network” presented and published in proceeding of “National conference on “Issues &amp; Challenges in Internet &amp; Mobile Computing” by IMR, Ghaziabad on 28 Mar 2008.</td>
                                            </tr>
                                            <tr height="20">
                                                <td height="20"></td>
                                                <td width="643"></td>
                                            </tr>
                                            <tr height="20">
                                                <td height="20"></td>
                                                <td width="643"></td>
                                            </tr>
                                            <tr height="20">
                                                <td height="20"></td>
                                                <td width="643">BOOK PUBLICATION</td>
                                            </tr>
                                            <tr height="35">
                                                <td height="35"></td>
                                                <td width="643">“Artificial Intelligence A Rational Approach” (ISBN 13: 978-93-5011-501-5) by Rahul Deva Published by Shroff Publishers &amp; Distributors Pvt. Ltd, Navi Mumbai-400703, in March 2014.</td>
                                            </tr>
                                            <tr height="20">
                                                <td height="20"></td>
                                                <td width="643"></td>
                                            </tr>
                                            <tr height="35">
                                                <td height="35"></td>
                                                <td width="643">“Soft Computing” (ISBN 13: 978-93-5110-175-8)&nbsp; by Rahul Deva, Garima Kulshreshtha&nbsp; Published by Shroff Publishers &amp; Distributors Pvt. Ltd, Navi Mumbai-400703, September 2013.</td>
                                            </tr>
                                            <tr height="20">
                                                <td height="20"></td>
                                                <td></td>
                                            </tr>
                                            <tr height="21">
                                                <td height="21"></td>
                                                <td>Faculty Name:Vikas Chaudhary</td>
                                            </tr>
                                            <tr height="21">
                                                <td height="21"></td>
                                                <td></td>
                                            </tr>
                                            <tr height="21">
                                                <td height="21"></td>
                                                <td>BOOK WRITTEN&nbsp;</td>
                                            </tr>
                                            <tr height="21">
                                                <td height="21"></td>
                                                <td></td>
                                            </tr>
                                            <tr height="42">
                                                <td height="42"></td>
                                                <td>“Cryptography &amp; Network Security”, ISBN:&nbsp;978-93-5014-139-7, S. K. Kataria &amp; Sons, New Delhi.</td>
                                            </tr>
                                            <tr height="21">
                                                <td height="21"></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <br>
                                <br>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="achievements">
                                <h2><b>Student's Achievements</b></h2>
                                <br>
                                <ol>
                                    <li>Ms. Priyanka Vashishtha AKTU University Toppers (3rd rank from CSE 2016).</li>
                                    <li>Ms. Purvi Goyal AKTU University Toppers (I rank from CSE 2015).</li>
                                    <li>Gate Toppers (AIR 6 in CSE) and many scorers above 99 percentile.</li>
                                    <li>MSME grants for 3 projects in CSE.</li>
                                    <li>Faculties published papers in reputed journals like Elsevier, IEEE, Springer etc.</li>
                                    <li>Open Wiki is functional now in CS Department.</li>
                                    <li>Mr. Shashank Saxena of CS branch has opened a private ltd. Company Atrima and he is giving consultacy to various national and International companies.</li>
                                    <li>Our software cell has developed an admission Monitoring system this year.</li>
                                    <li>Hina Arora of CS 3rd year was winner of I CAN CONFERENCE at IIT Delhi, September, 2014.</li>
                                </ol>
                                <br>
                                <br>
                            </div>
                            <!--<div role="tabpanel" class="tab-pane" id="rooms">
            <h2><b>Class Rooms</b></h2>
            <bR>
            <table class="table table-striped">

                        <tbody><tr height="44">
                                         <td height="44" width="121"><b>Class</b></td>
                                         <td width="140"><b>Class Room Nos.</b></td>
                                         <td width="118"><b>Total    Classrooms&nbsp;</b></td>
                                       </tr>
                                       <tr height="24">
                                         <td height="24">B.Tech CS-2A</td>
                                         <td>F-09</td>
                                         <td></td>
                                       </tr>
                                       <tr height="24">
                                         <td height="24">B.Tech CS-2B</td>
                                         <td>F-11</td>
                                         <td></td>
                                       </tr>
                                       <tr height="24">
                                         <td height="24">B.Tech CS-2C</td>
                                         <td>F-12</td>
                                         <td></td>
                                       </tr>
                                       <tr height="24">
                                         <td height="24">B.Tech CS-2D</td>
                                         <td>F-13</td>
                                         <td></td>
                                       </tr>

                                       <tr height="24">
                                         <td height="24">B.Tech CS-3A</td>
                                         <td>F-23</td>
                                         <td></td>
                                       </tr>
                                       <tr height="24">
                                         <td height="24">B.Tech CS-3B</td>
                                         <td>F-21</td>
                                         <th>14</th>
                                       </tr>
                                       <tr height="24">
                                         <td height="24">B.Tech CS-3C</td>
                                         <td>F-19</td>
                                         <td></td>
                                       </tr>
                                       <tr height="24">
                                         <td height="24">B.Tech CS-3D</td>
                                         <td>F-20</td>
                                         <td></td>
                                       </tr>

                                       <tr height="24">
                                         <td height="24">B.Tech CS-4A</td>
                                         <td>G-23</td>
                                         <td></td>
                                       </tr>
                                       <tr height="24">
                                         <td height="24">B.Tech CS-4B</td>
                                         <td>G-20</td>
                                         <td></td>
                                       </tr>
                                        <tr height="24">
                                         <td height="24">B.Tech CS-4C</td>
                                         <td>G-18</td>
                                         <td></td>
                                       </tr>


                                     </tbody></table><br><br>




            </div>-->
                            <div role="tabpanel" class="tab-pane" id="labs">
                                <h2><b>Labs</b></h2>
                                <br>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="thumbnail">
                                            <a href="internetlab34.html" target="_blank">
                                                <img class="faculty" src="../../static/img/cs%20lab/lab34.jpg">
                                                <div class="caption">
                                                    <h3>Project Lab</h3></a>
                                            <b>Faculty Incharge: <p>Mr. Vikas Mishra</p></b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="thumbnail">
                                            <a href="oslab.html" target="_blank">
                                                <img class="faculty" src="../../static/img/cs%20lab/lab5.jpg">
                                                <div class="caption">
                                                    <h3>Operating System Lab</h3></a>
                                            <b>Faculty Incharge: <p>Ms. Astha Gupta</p></b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="thumbnail">
                                            <a href="compiler.html" target="_blank">
                                                <img class="faculty" src="../../static/img/cs%20lab/lab6.jpg">
                                                <div class="caption">
                                                    <h3>Compiler Design Lab</h3></a>
                                            <b>Faculty Incharge: <p>Mr. Birendra Kumar</p></b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="thumbnail">
                                            <a href="internetlab7.html" target="_blank">
                                                <img class="faculty" src="../../static/img/cs%20lab/lab7.jpg">
                                                <div class="caption">
                                                    <h3>Internet Lab</h3></a>
                                            <b>Faculty Incharge: <p>Mr. Vimal Kr. Dwivedi</p></b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="thumbnail">
                                            <a href="cnlab8.html" target="_blank">
                                                <img class="faculty" src="../../static/img/cs%20lab/lab8.jpg">
                                                <div class="caption">
                                                    <h3>Computer Network Lab</h3></a>
                                            <b>Faculty Incharge: <p>Mr. Gaurav Singh</p></b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="thumbnail">
                                            <a href="cnlab10.html" target="_blank">
                                                <img class="faculty" src="../../static/img/cs%20lab/lab10.jpg">
                                                <div class="caption">
                                                    <h3>Computer Network Lab</h3></a>
                                            <b>Faculty Incharge: <p>Mr. Parikshit Joshi</p></b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="thumbnail">
                                            <a href="flp12.html" target="_blank">
                                                <img class="faculty" src="../../static/img/cs%20lab/lab12.jpg">
                                                <div class="caption">
                                                    <h3>Functional and Logic Programming Lab </h3></a>
                                            <b>Faculty Incharge: <p>Ms. Himani</p></b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="thumbnail">
                                            <a href="cglab.html" target="_blank">
                                                <img class="faculty" src="../../static/img/cs%20lab/lab13.jpg">
                                                <div class="caption">
                                                    <h3>Computer Graphics Lab</h3></a>
                                            <b>Faculty Incharge: <p>Mr. Rahul Chaturvedi</p></b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="thumbnail">
                                            <a href="flp14.html" target="_blank">
                                                <img class="faculty" src="../../static/img/cs%20lab/lab14.jpg">
                                                <div class="caption">
                                                    <h3>Functional and Logic Programming Lab </h3></a>
                                            <b>Faculty Incharge: <p>Mr. Sandeep Saxena</p></b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="thumbnail">
                                            <a href="selab.html" target="_blank">
                                                <img class="faculty" src="../../static/img/cs%20lab/lab15.jpg">
                                                <div class="caption">
                                                    <h3>Software Engineering Lab</h3></a>
                                            <b>Faculty Incharge: <p>Ms. Karuna Lochab</p></b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <Br>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="coe">
                                <h2><b>Center of Excellence</b></h2>
                                <br>
                                <div align="center"><img src="../../static/img/ms.jpg" class="img-responsive" width="300px"></div>
                                <div align="justify">
                                    <h3>By joining the Microsoft Imagine Academy (MSIA) programme, you will get a full curriculum for teaching technology courses and learning tools that help students achieve success.</h3>
                                    <p>ITA enables you to offer training not only on fundamental technology skills, but also technical courses for your students, faculty and staff who are interested in pursuing a career in IT after graduation.</p>
                                    <br>
                                    <b>Productivity.</b> Help students learn to be productive using Microsoft Office and other software tools for a wide range of jobs and other life pursuits.
                                    <br>
                                    <br>
                                    <b>Computer science.</b> Prepare students for college and career roles in software and app development.
                                    <br>
                                    <br>
                                    <b>IT infrastructure</b> Provide the core technical skills required to build a sustainable technology career managing infrastructure for cloud, clients, devices databases, and Office 365.
                                    <br>
                                    <br>
                                    <h3><b>Curriculum</b></h3>
                                    <ul>
                                        <li>The <b>Microsoft Official Academic Course</b> (MOAC) series delivers a complete learning and teaching framework developed specifically for use in an academic setting.</li>
                                        <li>The <b>Microsoft Online Learning curriculum</b> provides unlimited access for more than 400 courses.</li>
                                        <li>Ready-to-use, customisable <b>lesson plans</b> include links to relevant Microsoft Online Learning and free demos and videos.</li>
                                        <li>The Microsoft <b>Digital Literacy curriculum</b> provides essential computing skills for learners new to computing.</li>
                                        <li><b>Microsoft Official Courseware</b> (MOC) is instructor-led training intended for IT professionals and developers who build, support, and implement solutions by using Microsoft technologies.</li>
                                    </ul>
                                    <h3><b>Professional Development</b></h3>
                                    <ul>
                                        <li><b>Teaching with Technology</b> Curriculum is online learning that helps teachers integrate Information and Communications Technology (ICT) into their practice</li>
                                        <li>Ten <b>Microsoft Certified Educator</b> (MCE) certification exam vouchers enable teachers to validate that they have the global educator technology literacy competencies needed to provide a rich, custom learning experience for students</li>
                                        <li><b>Professional Development</b> benefits include exam vouchers for Microsoft Office Specialist (MOS) and Microsoft Technology Associate (MTA) certification exams to enable teachers to obtain globally recognised certification.</li>
                                        <li><b>Microsoft Certified Trainer</b> (MCT) provides 1 MCT exam voucher, tools, resources, and other benefits to support and help Microsoft Imagine Academy teachers thrive as both technologists and teachers</li>
                                    </ul>
                                    <h3><b>Certification</b></h3> Microsoft Certifications differentiate students in today's competitive job market and broaden their employment opportunities.
                                    <br>
                                    <br>
                                    <ul>
                                        <li><b>Microsoft Office Specialist</b> (MOS) exams prepare your students to be more productive in school and business careers.</li>
                                        <li><b>Microsoft Technology Associate</b> (MTA) exams provide an entry-level opportunity to explore various technical careers.</li>
                                        <li><b>Microsoft Certifications Solutions Associate/Expert</b> (MCSA/MCSE) exams provide steps to the validation of a student's ability to design and build innovative solutions across multiple technologies, both on-premises and in the cloud.</li>
                                        <li>Microsoft Imagine Academy provides the steps to establish a Certiport or Pearson VUE test centre on your campus. Microsoft Imagine Academy members receive academic discounts for Microsoft Certification exams.</li>
                                    </ul>
                                    <h3><b>Resources</b></h3>
                                    <ul>
                                        <li>Easy to Use Private Members Site with access to all programme information, support, and resources in one place</li>
                                        <li>Microsoft Imagine Academy blog, social media and monthly newsletters that can help you stay up to date with announcements and benefits</li>
                                        <li>Download and print co-branded 'Certificate of Completion' certificates for students who have completed Microsoft Certifications</li>
                                        <li>Marketing materials, communications, PR guidelines and videos to help promote your Microsoft Imagine Academy to parents, communities and governmental leaders.</li>
                                        <li>Access to the Microsoft Regional Support Centre for programme enquiries and assistance</li>
                                    </ul>
                                    <h3><b>Under Microsoft Imaging Academy, we provide training in Microsoft Technologies.</b></h3>
                                </div>
                                <br>
                                <br>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="wss">
                                <h2><b>Winter School</b></h2>
                                <br>
                                <p>Following Winter Schools were organized at Computer Science Department, Krishna Engineering College, Ghaziabad from 26 Dec. 2016 to 05 Jan. 2017 in which 450 KEC students had participated enthusiastically.</p>
                                <br>
                                <ul>
                                    <li>NET Programming Language</li>
                                    <li>JAVA Programming Language</li>
                                    <li>C/C ++</li>
                                    <li>Computer H/W &amp; Networking</li>
                                    <li>Spoken English</li>
                                    <li>Soft Skills</li>
                                    <li>Web Technologies</li>
                                    <li>C &amp; Data Structures for competitions</li>
                                    <li>Aptitude</li>
                                </ul>
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="../../static/img/winterschool/2.jpg" class="img-responsive">
                                    </div>
                                    <div class="col-md-4">
                                        <img src="../../static/img/winterschool/3.jpg" class="img-responsive">
                                    </div>
                                    <div class="col-md-4">
                                        <img src="../../static/img/winterschool/5.jpg" class="img-responsive">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="../../static/img/winterschool/1.jpg" class="img-responsive">
                                    </div>
                                    <div class="col-md-6">
                                        <img src="../../static/img/winterschool/6.jpg" class="img-responsive">
                                    </div>
                                </div>
                                <br>
                                <br>
                                <h4><b><div align="center">GATE classes are also being conducted for 3rd and 4th Year Students</div></b></h4>
                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="../../static/img/GATEclasses/1.jpg" class="img-responsive">
                                    </div>
                                    <div class="col-md-4">
                                        <img src="../../static/img/GATEclasses/2.jpg" class="img-responsive">
                                    </div>
                                    <div class="col-md-4">
                                        <img src="../../static/img/GATEclasses/3.jpg" class="img-responsive">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="../../static/img/GATEclasses/4.jpg" class="img-responsive">
                                    </div>
                                    <div class="col-md-4">
                                        <img src="../../static/img/GATEclasses/5.jpg" class="img-responsive">
                                    </div>
                                    <div class="col-md-4">
                                        <img src="../../static/img/GATEclasses/6.jpg" class="img-responsive">
                                    </div>
                                </div>
                                <br>
                                <br>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="skill">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#hardware" aria-controls="hardware" role="tab" data-toggle="tab">Hardware Cell</a></li>
                                    <li role="presentation"><a href="#software" aria-controls="software" role="tab" data-toggle="tab">Software Cell</a></li>
                                    <li role="presentation"><a href="#programming" aria-controls="programming" role="tab" data-toggle="tab">Programming Club</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="hardware">
                                        <h2><b>Hardware Cell</b></h2>
                                        <br>
                                        <div align="center"><img class="img-responsive" src="../../static/img/hardware.jpg" width="500px"></div>
                                        <br> Skill development center, Hardware Cell provides training to students for Computer Assembling, installation, Networking (Physical and Wireless) and Maintenance of Computer as per following schedule:
                                        <br>
                                        <br>
                                        <ol>
                                            <li>Introduction to Computer H/w (All individual components), Assembling of Computer System</li>
                                            <li>Installation of Different OS : Windows, Linux, Installation of different App S/w & Troubleshooting</li>
                                            <li>Introduction to Networking, OSI Reference model, Topologies etc Straight and Cross Cable Connections</li>
                                            <li>Installing & Configuring Windows and Linux Server</li>
                                            <li>Introduction to Computer H/w (All individual components), Assembling of Computer System</li>
                                            <li>Installation of Different OS : Windows, Linux, Installation of different App S/w & Troubleshooting</li>
                                            <li>Introduction to Networking, OSI Reference model, Topologies etc Straight and Cross Cable Connections</li>
                                            <li>Installing & Configuring Windows and Linux Server</li>
                                            <li>Introduction to Computer H/w (All individual components), Assembling of Computer System</li>
                                            <li>Installation of Different OS : Windows, Linux, Installation of different App S/w & Troubleshooting</li>
                                            <li>Introduction to Networking, OSI Reference model, Topologies etc Straight and Cross Cable Connections</li>
                                            <li>Installing & Configuring Windows and Linux Server</li>
                                            <li>Introduction to Computer H/w (All individual components), Assembling of Computer System</li>
                                            <li>Installation of Different OS : Windows, Linux, Installation of different App S/w & Troubleshooting</li>
                                            <li>Introduction to Networking, OSI Reference model, Topologies etc Straight and Cross Cable Connections</li>
                                            <li>Installing & Configuring Windows and Linux Server</li>
                                        </ol>
                                        <BR>
                                        <br>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="software">
                                        <h2><b>Software Development Cell</b></h2>
                                        <br>
                                        <h3><b>Overview</b></h3>
                                        <p align="justify">
                                            Software Development Cell of Krishna Engineering College came into existence in 2014. The cell comprises of faculty and student members who believe that innovative working is essential for achieving superior long term results.
                                            <br>
                                            <br> Software Development Cell assist Krishna Engineering College in exploring best practices and offer solutions that improve the effectiveness of our students, process, and technology to work together for optimum performance. In Software Development Cell, we offer an environment where innovative ideas are allowed to flourish using individuals with diverse perspective.
                                        </p>
                                        <br>
                                        <h3><b>Objective</b></h3>
                                        <ul>
                                            <li>To gain knowledge about latest technologies prevalent in industry.</li>
                                            <li>To provide an Industry Friendly environment for students and faculties.</li>
                                            <li>To encourage students to develop more and more applications for college.</li>
                                            <li>To motivate students about Team Work.</li>
                                            <li>To conduct workshops and seminars for the benefit of students and Faculties.</li>
                                        </ul>
                                        <br>
                                        <h3><b>Project Details</b></h3>
                                        <br>
                                        <h4>Project Details (Developed / Under Maintenance)</h4>
                                        <ol>
                                            <li>Krishna Engineering College Website
                                                <br>
                                                <b>Faculty Incharge:</b> Mr. Vimal Dwivedi
                                                <br>
                                                <b>Students Associated:</b> Mr. Anuj Sharma, Mr. Rohit Kapoor</li>
                                            <br>
                                            <li>Attendance Management System
                                                <Br>
                                                <b>Faculty Incharge:</b> Mr. Vikas Mishra</li>
                                            <br>
                                            <li>Feedback System
                                                <br>
                                                <b>Faculty Incharge:</b> Mr. Vikas Mishra</li>
                                            <br>
                                            <li>Library System
                                                <br>
                                                <b>Faculty Incharge:</b> Mr. Vikas Mishra</li>
                                            <br>
                                            <li>HR Portal
                                                <br>
                                                <b>Faculty Incharge:</b> Mr. Vimal Dwivedi</li>
                                            <br>
                                            <li>Biometrics for Contractual Employees</li>
                                            <br>
                                            <li>KEC Digital Connect</li>
                                            <br>
                                            <li>Online Backup system</li>
                                            <br>
                                            <li>Information Portal</li>
                                            <Br>
                                            <li>KEC Blog</li>
                                            <br>
                                            <li>Inventory Management for KEC</li>
                                            <br>
                                            <li>KEC Video Library</li>
                                            <br>
                                            <li>Google Maps + GPS Services for user/Vehicle Tracking</li>
                                            <br>
                                            <li>Moodle (E- Learning Plateform for 4th Yr. Students)</li>
                                            <br>
                                        </ol>
                                        <br>
                                        <h3><b>Development Environment</b></h3>
                                        <br>
                                        <table class="table table-striped table-bordered">
                                            <tr>
                                                <th>Item</th>
                                                <th>Applied For</th>
                                            </tr>
                                            <tr>
                                                <th colspan='2'>Server Side</th>
                                            </tr>
                                            <tr>
                                                <td>Visual Studio 2010-12</td>
                                                <td>Server Side Coding (IDE)</td>
                                            </tr>
                                            <tr>
                                                <td>ASP.net</td>
                                                <td>Server Side Coding</td>
                                            </tr>
                                            <tr>
                                                <td>C#</td>
                                                <td>Server Side Programming</td>
                                            </tr>
                                            <tr>
                                                <td> HTML5 , CSS3</td>
                                                <td>Designing</td>
                                            </tr>
                                            <tr>
                                                <td>SQL Server 2005-2008</td>
                                                <td>Database</td>
                                            </tr>
                                            <tr>
                                                <th colspan='2'>Client Side</th>
                                            </tr>
                                            <tr>
                                                <td>Javascript, Jquery</td>
                                                <td>Client side Scripting</td>
                                            </tr>
                                            <tr>
                                                <td>Bootstrap</td>
                                                <td>Responsiveness</td>
                                            </tr>
                                            <tr>
                                                <td>Tortoise SVN</td>
                                                <td>Versioning</td>
                                            </tr>
                                        </table>
                                        <br>
                                        <br>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="programming">
                                        Content for programming club
                                    </div>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="seminar">
                                <h2><b>Conference</b></h2>
                                <br>
                                <br>
                                <Br>
                                <p align="justify">
                                    ICACDS-2016 was held at Krishna Engineering College, Ghaziabad (UP) India on November 11-12, 2016. ICACDS was a major conference organized with the objective of bringing together researchers, developers and practitioners from academia and industry working in the area of Advanced Computing. Original, previously unpublished and high quality research papers addressing research challenges and advances in Advanced Computing had been appreciated. Selected good quality papers were published with Springer in Communications in Computer and Information Science (CCIS), Science & Engineering Research Support soCiety (SERSC) Journal [Scopus Indexed], International Journal of Control Theory and Applications [Scopus Indexed] and Special Issue of Inderscience’s International Journal of Internet of Things and Cyber-Assurance.
                                </p>
                                <h4>For more information, <a href="http://icacds2016.krishnacollege.ac.in/" target="_blank"><b>Click here</b></a></h4>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
