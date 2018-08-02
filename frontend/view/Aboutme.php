<section id="about" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-12">
                    <div class="about-thumb">
                         <div class="wow fadeInUp section-title" data-wow-delay="0.4s">
                              <h1><?php echo $reponseaboutme['titre1']; ?></h1>
                              <p class="color-yellow"><?php echo $reponseaboutme['sous_titre1']; ?></p>
                         </div>
                         <div class="wow fadeInUp" data-wow-delay="0.8s">
                              <p><?php echo $reponseaboutme['content1']; ?></p>
                              <p><?php echo $reponseaboutme['content1_2']; ?></p>
                         </div>
                    </div>
               </div>

               <div class="col-md-3 col-sm-6">
                    <div class="background-image about-img"></div>
               </div>

               <div class="bg-yellow col-md-3 col-sm-6">
                    <div class="skill-thumb">
                         <div class="wow fadeInUp section-title color-white" data-wow-delay="1.2s">
                              <h1><?php echo $reponseaboutme['titre2']; ?></h1>
                              <p class="color-white"><?php echo $reponseaboutme['sous_titre2']; ?></p>
                         </div>

                         <div class=" wow fadeInUp skills-thumb" data-wow-delay="1.6s">
                         <?php echo $reponseaboutme['content2_1']; ?>
                              <span class="color-white pull-right"><?php echo $reponseaboutme['value2_1']; ?></span>
                                   <div class="progress">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                   </div>

                         <?php echo $reponseaboutme['content2_2']; ?>
                              <span class="color-white pull-right"><?php echo $reponseaboutme['value2_2']; ?></span>
                                   <div class="progress">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                   </div>

                         <?php echo $reponseaboutme['content2_3']; ?>
                              <span class="color-white pull-right"><?php echo $reponseaboutme['value2_3']; ?></span>
                                   <div class="progress">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                   </div>
                         </div>

                    </div>
               </div>

          </div>
     </div>
</section>
