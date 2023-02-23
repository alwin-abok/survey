 <?php
    session_start();
    include('./templates/head.php');
    include('connect.php');

    if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
        // destroy_session();
    }
    ?>


 <body>
     <h2>Enquête sur l’IA</h2>
     <p>.Ci-dessous, les utilisateurs peuvent exprimer leurs points de vue sur certaines des questions.</p>



     <form action="index.php" method="post">

         <div class="row">
             <div class="col-sm-6">
                 <div class="card">
                     <div class="card-body">
                         <div class="card bg-warning mb-3" style="max-width: 18rem;">
                             <div class="card-body">
                                 <p class="card-text">
                                 <h4>Conception</h4>
                                 <p>
                                     Mesures mises en oeuvre pour garantir la bonne conception
                                 </p>
                                 <h5>
                                     L'objectif (finalité') du système d'IA est-il clairement défini?
                                 </h5>

                                 <div class="radio">
                                     <label><input type="radio" name="choice" value="Non Applicable" required> Non Applicable</label>
                                     <label><input type="radio" name="choice" value="Non/Ne sait pas"> Non/ Ne sait pas</label>
                                     <label><input type="radio" name="choice" value="Point identifie' non traite">Point identifie' non traite</label>
                                     <label><input type="radio" name="choice" value="En cours de mise en oeuvre"> En cours de mise en oeuvre</label>
                                     <label><input type="radio" name="choice" checked value="Défini/Mis en ouvre">Défini/Mis en ouvre</label>

                                     <div class="form-group">
                                         <label for="comment">Exemples de preuve:Expression des besoins,Specifications</label>
                                         <input name='comment' required value='' placeholder='Entrez votre réponse'></input>
                                     </div>

                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>


             <div class="col-sm-6">
                 <div class="card">
                     <div class="card-body">
                         <div class="card bg-success mb-3" style="max-width: 18rem;">
                             <div class="card-body">
                                 <p class="card-text">Les critères d’évaluation de la performance du système d'IA ont-ils été clairement définis? </p>

                                 <div class="radio">
                                     <label><input type="radio" name="choice" value="Non Applicable" required> Non Applicable</label>
                                     <label><input type="radio" name="choice" value="Non/Ne sait pas"> Non/ Ne sait pas</label>
                                     <label><input type="radio" name="choice" value="Point identifie' non traite">Point identifie' non traite</label>
                                     <label><input type="radio" name="choice" value="En cours de mise en oeuvre"> En cours de mise en oeuvre</label>
                                     <label><input type="radio" name="choice" value="Défini/Mis en ouvre">Défini/Mis en ouvre</label>

                                     <div class="form-group">
                                         <label for="comment">preuve</label>
                                         <input name='comment' required value='' type="text" placeholder='Entrez votre réponse'></input>
                                     </div>

                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

         </div>


         <div class="row">

             <div class="col-sm-6">
                 <div class="card">
                     <div class="card-body">
                         <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">

                             <div class="card-body">
                                 <p class="card-text">Quelle métriques son utilisées pour juger de la qualité des sorties du système d'IA?</p>
                                 <div class="radio">
                                     <label><input type="radio" name="choice" value="yes" required> Oui </label>
                                     <div class="radio">
                                         <label><input type="radio" name="choice" value="no"> Non</label>
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <label for="comment">Précision</label>
                                     <input name='comment' type="text" required value='' placeholder='Entrez votre réponse'></input>
                                 </div>

                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-sm-6">

                 <div class="card">
                     <div class="card-body">
                         <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">

                             <div class="card-body">
                                 <p class="card-text">Des données personnelles sont-elles traitées par le système? </p>
                                 <div class="radio">
                                     <label><input type="radio" name="choice" value="yes" required> Oui </label>
                                     <div class="radio">
                                         <label><input type="radio" name="choice" value="no"> Non</label>
                                     </div>
                                 </div>

                             </div>
                         </div>
                     </div>
                 </div>
             </div>

         </div>



         <div class="row">

             <div class="col-sm-6">
                 <div class="card">
                     <div class="card-body">
                         <div class="card text-white bg-info mb-3" style="max-width: 18rem;">

                             <div class="card-body">
                                 <p class="card-text">Le traitement pourra-t-il viser directement ou indirectement des personnes vulnérables(par ex:enfants,patients, employés)? </p>
                                 <div class="radio">
                                     <input type="radio" name="choice" value="yes" required> Oui </input>
                                     <div class="radio">
                                         <input type="radio" name="choice" value="no"> Non</input>
                                     </div>
                                 </div>

                             </div>
                         </div>
                     </div>
                 </div>
             </div>


             <div class="col-sm-6">
                 <div class="card">
                     <div class="card-body">
                         <div class="card text-white bg-success mb-3" style="max-width: 18rem;">

                             <div class="card-body">
                                 <p class="card-text">Le traitement pourra-t-il entraîner des consequences juridiques, financiers ou physiques sur la sante, le statut ou la sécurité des personnes visées directement ou indirectement par le système d' IA?</p>
                                 <div class="radio">
                                     <label><input type="radio" name="choice" value="yes" required> Oui </label>
                                     <div class="radio">
                                         <label><input type="radio" name="choice" value="no"> Non</label>
                                     </div>
                                 </div>

                             </div>
                         </div>
                     </div>
                 </div>
             </div>

         </div>

         <div class="row">

             <div class="col-sm-6">
                 <div class="card">
                     <div class="card-body">
                         <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                             <div class="card-body">
                                 <p class="card-text">Les caractéristiques(age, genre, spécificités physiques, etc.) des personnes concernées par le système d'IA ont-elles été étudiées?</p>
                                 <div class="radio">
                                     <label><input type="radio" name="choice" value="yes" required> Oui </label>
                                     <div class="radio">
                                         <label><input type="radio" name="choice" value="no"> Non</label>
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <label for="comment">Preuves</label>
                                     <input name='comment' type="text" required value='' placeholder='Entrez votre réponse'></input>
                                 </div>

                             </div>
                         </div>
                     </div>
                 </div>
             </div>


             <form action="indexx.php" method="post">

                 <div class="col-sm-6">
                     <div class="card">
                         <div class="card-body">
                             <div class="card text-white bg-warning mb-3" style="max-width: 18rem;" name='quiz'>
                                 <div class="card-body">
                                     <p class="card-text">Exist-t-il une charte ou politique interne encadrant la conception et le déploiement de système s'IA?

                                     <div class="radio">
                                         <label><input type="radio" name="choice" value="yes" required> Oui </label>
                                         <div class="radio">
                                             <label><input type="radio" name="choice" value="no"> Non</label>
                                         </div>
                                     </div>

                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

         </div>

         <div class="row">

             <div class="col-sm-6">
                 <div class="card">
                     <div class="card-body">
                         <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                             <div class="card-body">
                                 <p class="card-text">Les personnes impliquées dans la conception, développement et maintenance du système d'IA ont-elles été sensibilisées aux enjeux juridiques, techniques, éthiques et moraux de l'IA?</p>

                                 <div class="radio">
                                     <label><input type="radio" name="choice" value="yes" required> Oui </label>
                                     <div class="radio">
                                         <label><input type="radio" name="choice" value="no"> Non</label>
                                     </div>
                                 </div>

                             </div>
                         </div>
                     </div>
                 </div>
             </div>


             <div class="col-sm-6">
                 <div class="card">
                     <div class="card-body">
                         <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                             <div class="card-body">
                                 <p class="card-text">Les personnes en charge développement du système d'IA ,de son déploiement et de son contrôle sont-elles clairement définies?</p>
                             </div>
                             <div class="radio">
                                 <label><input type="radio" name="choice" value="yes" required> Oui </label>
                                 <div class="radio">
                                     <label><input type="radio" name="choice" value="no"> Non</label>
                                 </div>
                             </div>

                         </div>
                     </div>
                 </div>
             </div>

         </div>


         <form action="index.php" method="post">

             <div class="col-sm-6">
                 <div class="card">
                     <div class="card-body">
                         <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                             <div class="card-body">
                                 <p class="card-text">Les personnes physiques en charge du development du système ont-elle la formation adequate?</p>
                                 <div class="radio">
                                     <label><input type="radio" name="choice" value="yes" required> Oui </label>
                                     <div class="radio">
                                         <label><input type="radio" name="choice" value="no"> Non</label>
                                     </div>
                                 </div>

                             </div>
                         </div>
                     </div>
                 </div>
             </div>


             <div class="col-sm-6">
                 <div class="card">
                     <div class="card-body">
                         <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">

                             <div class="card-body">
                                 <p class="card-text">Les personnes en charge du maintien du système d'IA ,de la correction des problèmes et de l'intervention sur son fonctionnement sont-elles clairement identifiées et connues de tous?</p>
                                 <div class="radio">
                                     <label><input type="radio" name="choice" value="yes" required> Oui </label>
                                     <div class="radio">
                                         <label><input type="radio" name="choice" value="no"> Non</label>
                                     </div>
                                 </div>

                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             </div>


             <div class="row">

                 <div class="col-sm-6">
                     <div class="card">
                         <div class="card-body">
                             <div class="card text-white bg-info mb-3" style="max-width: 18rem;">

                                 <div class="card-body">
                                     <p class="card-text">Un suivi est-il effectue afin d'assurer une permanence de ce service,par exemple en période de conges?</p>
                                     <div class="radio">
                                         <label><input type="radio" name="choice" value="yes" required> Oui </label>
                                         <div class="radio">
                                             <label><input type="radio" name="choice" value="no"> Non</label>
                                         </div>
                                     </div>

                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>


                 <div class="col-sm-6">
                     <div class="card">
                         <div class="card-body">
                             <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                                 <div class="card-body">
                                     <p class="card-text">quel type d'algorithme est utilise?

                                     <div class="radio">
                                         <label><input type="radio" name="choice" required value="Apprentissage supervise"> Apprentissage supervise
                                         </label>
                                         <label><input type="radio" name="choice" value="Apprentissage non-supervise"> Apprentissage non-supervise
                                         </label>
                                         <label><input type="radio" name="choice" checked value="Apprentissage par renforcement">Apprentissage par renforcement
                                         </label>
                                         <label><input type="radio" name="choice" value="Apprentissage continu"> Apprentissage continu
                                         </label>
                                         <label><input type="radio" name="choice" value="Apprentissage fédéré"> Apprentissage fédéré
                                         </label>
                                     </div>

                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

             </div>



             <div class="row">

                 <div class="col-sm-6">
                     <div class="card">
                         <div class="card-body">
                             <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                                 <div class="card-body">
                                     <p class="card-text">Des libraries Open Source on-elles été utilises ? Si oui lesquelles?
                                     <div class="radio">
                                         <label><input type="radio" name="choice" value="yes" required> Oui </label>
                                     </div>
                                     <div class="radio">
                                         <label><input type="radio" name="choice" value="no">Non
                                         </label>
                                     </div>

                                     <div class="form-group">
                                         <label for="comment"> </label>
                                         <input name='comment' type="text" required value='' placeholder='Entrez votre réponse'></input>
                                     </div>

                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>


                 <div class="col-sm-6">
                     <div class="card">
                         <div class="card-body">
                             <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">

                                 <div class="card-body">
                                     <p class="card-text">Des strategies telles que par exemple la validation croisée sont elles utilises?</p>
                                     <div class="radio">
                                         <label><input type="radio" name="choice" value="yes" required> Oui </label>
                                         <div class="radio">
                                             <label><input type="radio" name="choice" value="no"> Non</label>
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <label for="comment">Précision</label>
                                         <input name='comment' type="text" required value='' placeholder='Entrez votre réponse'></input>
                                     </div>

                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

             </div>



             <div class="row">

                 <div class="col-sm-6">
                     <div class="card">
                         <div class="card-body">
                             <a href="index.php">
                                 <h4><i>Découvrez d’autres sondages!</i></h4>
                             </a>

                         </div>
                     </div>
                 </div>


                 <div class="col-sm-6">
                     <div class="card">
                         <div class="card-body">
                             <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">

                                 <div class="card-body">
                                     <p class="card-text">Les métriques permettent-elles de mesurer la performance du système de maniéré satisfaisante et en prenant en compte les consequences pour les personnes concernées?</p>
                                     <div class="radio">
                                         <label><input type="radio" name="choice" value="yes" required> Oui </label>
                                         <div class="radio">
                                             <label><input type="radio" name="choice" value="no"> Non</label>
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <label for="comment">Précision</label>
                                         <input type="text" name='comment' required value='' placeholder='Entrez votre réponse'></input>
                                     </div>

                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>


             </div>
             <div>
                 <button type="submit" name='answer' onclick="insert();">Soumettre et terminer l’enquête</button>
             </div>
         </form>






         Après avoir terminé l’enquête, vous pouvez vous <a href="logout.php"><button style="background-color:lightblue;">déconnecter</button></a>.</p>



         <script type="text/javascript">
             var form = document.getElementById('myForm');
         </script>
 </body>

 <?php
    include('./templates/foot.php');
    ?>

 </html>