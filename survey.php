 <?php

    include('./templates/head.php');
    include('connect.php');

    if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
    }
    ?>


 <body>
     <div id="main">
         <h2 style="color:yellow">Enquête sur l’IA</h2>
         <p style="color:yellow">Ci-dessous, les utilisateurs peuvent exprimer leurs points de vue sur certaines des questions.</p>
         <div>
             <p style="color:yellow">Après avoir terminé l’enquête, vous pouvez vous </p>
             <a href="index.php">
                 <h4><i><button style="background-color:aqua">déconnecter</button></i></h4>
             </a>
         </div>


         <form id="myForm" action="" method="post" autocomplete="off">

             <div class="row">
                 <div class="col-sm-6">
                     <div class="card">
                         <div class="card-body">
                             <div class="card bg-warning mb-3" style="max-width: 18rem;">
                                 <div class="card-body">
                                     <p class="card-text" name='q1'>
                                     <h4>Conception</h4>
                                     Mesures mises en oeuvre pour garantir la bonne conception

                                     <h5>
                                         L'objectif (finalité') du système d'IA est-il clairement défini?
                                     </h5>
                                     </p>
                                     <div class="checkbox">
                                         <label><input type="checkbox" name="choice1" value="Non Applicable"> Non Applicable</label>
                                         <label><input type="checkbox" name="choice1" value="Non/Ne sait pas"> Non/ Ne sait pas</label>
                                         <label><input type="checkbox" name="choice1" value="Point identifie' non traite">Point identifie' non traite</label>
                                         <label><input type="checkbox" name="choice1" value="En cours de mise en oeuvre"> En cours de mise en oeuvre</label>
                                         <label><input type="checkbox" name="choice1" checked value="Défini/Mis en ouvre">Défini/Mis en ouvre</label>

                                         <div class="form-group">
                                             <label for="comment1">Exemples de preuve:Expression des besoins,Specifications</label>
                                             <input name='comment1' value='' placeholder='Entrez votre réponse'></input>
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
                                     <p class="card-text" name='q2'>Les critères d’évaluation de la performance du système d'IA ont-ils été clairement définis? </p>

                                     <div class="radio">
                                         <label><input type="checkbox" name="choice2" value="Non Applicable"> Non Applicable</label>
                                         <label><input type="checkbox" name="choice2" value="Non/Ne sait pas"> Non/ Ne sait pas</label>
                                         <label><input type="checkbox" name="choice2" value="Point identifie' non traite">Point identifie' non traite</label>
                                         <label><input type="checkbox" name="choice2" value="En cours de mise en oeuvre"> En cours de mise en oeuvre</label>
                                         <label><input type="checkbox" name="choice2" value="Défini/Mis en ouvre">Défini/Mis en ouvre</label>

                                         <div class="form-group">
                                             <label for="comment">preuve</label>
                                             <input name='comment2' value='' type="text" placeholder='Entrez votre réponse'></input>
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
                                     <p class="card-text" name='q3'>Quelle métriques son utilisées pour juger de la qualité des sorties du système d'IA?</p>
                                     <div class="radio">
                                         <label><input type="radio" name="choice3" value="oui" required> Oui </label>
                                         <div class="radio">
                                             <label><input type="radio" name="choice3" value="non"> Non</label>
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <label for="comment">Précision</label>
                                         <input name='comment3' type="text" value='' placeholder='Entrez votre réponse'></input>
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
                                     <p class="card-text" name='q4'>Des données personnelles sont-elles traitées par le système? </p>
                                     <div class="radio">
                                         <label><input type="radio" name="choice4" value="oui" required> Oui </label>
                                         <div class="radio">
                                             <label><input type="radio" name="choice4" value="non"> Non</label>
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
                                     <p class="card-text" name='q5'>Le traitement pourra-t-il viser directement ou indirectement des personnes vulnérables(par ex:enfants,patients, employés)? </p>
                                     <div class="radio">
                                         <input type="radio" name="choice5" value="oui" required> Oui </input>
                                         <div class="radio">
                                             <input type="radio" name="choice5" value="non"> Non</input>
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
                                     <p class="card-text" name='q6'>Le traitement pourra-t-il entraîner des consequences juridiques, financiers ou physiques sur la sante, le statut ou la sécurité des personnes visées directement ou indirectement par le système d' IA?</p>
                                     <div class="radio">
                                         <label><input type="radio" name="choice6" value="oui" required> Oui </label>
                                         <div class="radio">
                                             <label><input type="radio" name="choice6" value="non"> Non</label>
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
                                     <p class="card-text" name='q7'>Les caractéristiques(age, genre, spécificités physiques, etc.) des personnes concernées par le système d'IA ont-elles été étudiées?</p>
                                     <div class="radio">
                                         <label><input type="radio" name="choice7" value="oui" required> Oui </label>
                                         <div class="radio">
                                             <label><input type="radio" name="choice7" value="non"> Non</label>
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <label for="comment">Preuves</label>
                                         <input name='comment7' type="text" required value='' placeholder='Entrez votre réponse'></input>
                                     </div>

                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>



                 <div class="col-sm-6">
                     <div class="card">
                         <div class="card-body">
                             <div class="card text-white bg-warning mb-3" style="max-width: 18rem;" name='quiz'>
                                 <div class="card-body">
                                     <p class="card-text" name='q8'>Exist-t-il une charte ou politique interne encadrant la conception et le déploiement de système s'IA?

                                     <div class="radio">
                                         <label><input type="radio" name="choice8" value="oui" required> Oui </label>
                                         <div class="radio">
                                             <label><input type="radio" name="choice8" value="non"> Non</label>
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
                                     <p class="card-text" name='q9'>Les personnes impliquées dans la conception, développement et maintenance du système d'IA ont-elles été sensibilisées aux enjeux juridiques, techniques, éthiques et moraux de l'IA?</p>

                                     <div class="radio">
                                         <label><input type="radio" name="choice9" value="oui" required> Oui </label>
                                         <div class="radio">
                                             <label><input type="radio" name="choice9" value="non"> Non</label>
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
                                     <p class="card-text" name='q10'>Les personnes en charge développement du système d'IA ,de son déploiement et de son contrôle sont-elles clairement définies?</p>
                                 </div>
                                 <div class="radio">
                                     <label><input type="radio" name="choice10" value="oui" required> Oui </label>
                                     <div class="radio">
                                         <label><input type="radio" name="choice10" value="non"> Non</label>
                                     </div>
                                 </div>

                             </div>
                         </div>
                     </div>
                 </div>



                 <div class="col-sm-6">
                     <div class="card">
                         <div class="card-body">
                             <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                                 <div class="card-body">
                                     <p class="card-text" name='q11'>Les personnes physiques en charge du development du système ont-elle la formation adequate?</p>
                                     <div class="radio">
                                         <label><input type="radio" name="choice11" value="oui" required> Oui </label>
                                         <div class="radio">
                                             <label><input type="radio" name="choice11" value="non"> Non</label>
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
                                     <p class="card-text" name='q12'>Les personnes en charge du maintien du système d'IA ,de la correction des problèmes et de l'intervention sur son fonctionnement sont-elles clairement identifiées et connues de tous?</p>
                                     <div class="radio">
                                         <label><input type="radio" name="choice12" value="oui" required> Oui </label>
                                         <div class="radio">
                                             <label><input type="radio" name="choice12" value="non"> Non</label>
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
                                         <p class="card-text" name='q13'>Un suivi est-il effectue afin d'assurer une permanence de ce service,par exemple en période de conges?</p>
                                         <div class="radio">
                                             <label><input type="radio" name="choice13" value="oui" required> Oui </label>
                                             <div class="radio">
                                                 <label><input type="radio" name="choice13" value="non"> Non</label>
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
                                         <p class="card-text" name='q14'>quel type d'algorithme est utilise?

                                         <div class="checkbox">
                                             <label><input type="checkbox" name="choice14" value="Apprentissage supervise"> Apprentissage supervise
                                             </label>
                                             <label><input type="checkbox" name="choice14" value="Apprentissage non-supervise"> Apprentissage non-supervise
                                             </label>
                                             <label><input type="checkbox" name="choice14" checked value="Apprentissage par renforcement">Apprentissage par renforcement
                                             </label>
                                             <label><input type="checkbox" name="choice14" value="Apprentissage continu"> Apprentissage continu
                                             </label>
                                             <label><input type="checkbox" name="choice14" value="Apprentissage fédéré"> Apprentissage fédéré
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
                                         <p class="card-text" name='q15'>Des libraries Open Source on-elles été utilises ? Si oui lesquelles?
                                         <div class="radio">
                                             <label><input type="radio" name="choice15" value="oui" required> Oui </label>
                                         </div>
                                         <div class="radio">
                                             <label><input type="radio" name="choice15" value="non">Non
                                             </label>
                                         </div>

                                         <div class="form-group">
                                             <label for="comment"> </label>
                                             <input name='comment15' type="text" required value='' placeholder='Entrez votre réponse'></input>
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
                                         <p class="card-text" name='q16'>Des strategies telles que par exemple la validation croisée sont elles utilises?</p>
                                         <div class="radio">
                                             <label><input type="radio" name="choice16" value="oui" required> Oui </label>
                                             <div class="radio">
                                                 <label><input type="radio" name="choice16" value="non"> Non</label>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="comment">Précision</label>
                                             <input name='comment16' type="text" required value='' placeholder='Entrez votre réponse'></input>
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
                             <div class="card-body" style="background-color: pink;">
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
                                         <p class="card-text" name='q17'>Les métriques permettent-elles de mesurer la performance du système de maniéré satisfaisante et en prenant en compte les consequences pour les personnes concernées?</p>
                                         <div class="radio">
                                             <label><input type="radio" name="choice17" value="oui" required> Oui </label>
                                             <div class="radio">
                                                 <label><input type="radio" name="choice17" value="non"> Non</label>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="comment">Précision</label>
                                             <input type="text" name='comment17' required value='' placeholder='Entrez votre réponse'></input>
                                         </div>

                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>


                 </div>
                 <div>
                     <br>
                     
                         <a href="index.php">
                             <button style="background-color: pink;" type="submit" name='button' onclick="insert();alert('Thank you for taking the survey!')">Soumettre et terminer lenquête</button>
                         </a>

         </form>


         <script type="text/javascript">
             var form = document.getElementById('myForm');

             function handleForm(e) {
                 e.preventDefault();
             }
             form.addEventListener('submit', handleForm)

             function insert() {
                 $(document).ready(function() {
                     var choice1 = []
                     $("input[name=choice1]").each(function() {
                         if ($(this).is(":checked")) {
                             choice1.push($(this).val())
                         }

                     })

                     var choice2 = []
                     $("input[name=choice2]").each(function() {
                         if ($(this).is(":checked")) {
                             choice2.push($(this).val())
                         }

                     })

                     var choice14 = []
                     $("input[name=choice14]").each(function() {
                         if ($(this).is(":checked")) {
                             choice14.push($(this).val())
                         }

                     })
                     $.ajax({
                         url: 'index.php',
                         type: 'POST',
                         data: {
                             q1: $("input[name=q1]").val(),
                             q2: $("input[name=q2]").val(),
                             q3: $("input[name=q3]").val(),
                             q4: $("input[name=q4]").val(),
                             q5: $("input[name=q5]").val(),
                             q6: $("input[name=q6]").val(),
                             q7: $("input[name=q7]").val(),
                             q8: $("input[name=q8]").val(),
                             q9: $("input[name=q9]").val(),
                             q10: $("input[name=q10]").val(),
                             q11: $("input[name=q11]").val(),
                             q12: $("input[name=q12]").val(),
                             q13: $("input[name=q13]").val(),
                             q14: $("input[name=q14]").val(),
                             q15: $("input[name=q15]").val(),
                             q16: $("input[name=q16]").val(),
                             q17: $("input[name=q17]").val(),


                             choice1: choice1.toString(),
                             comment1: $("input[name=comment1]").val(),
                             choice2: choice2.toString(),

                             comment2: $("input[name=comment2]").val(),
                             choice3: $("input[name=choice3]:checked").val(),
                             comment3: $("input[name=comment3]").val(),
                             choice4: $("input[name=choice4]:checked").val(),
                             choice5: $("input[name=choice5]:checked").val(),
                             choice6: $("input[name=choice6]:checked").val(),
                             choice7: $("input[name=choice7]:checked").val(),
                             comment7: $("input[name=comment7]").val(),
                             choice8: $("input[name=choice8]:checked").val(),
                             choice9: $("input[name=choice9]:checked").val(),
                             choice10: $("input[name=choice10]:checked").val(),
                             choice11: $("input[name=choice11]:checked").val(),
                             choice12: $("input[name=choice12]:checked").val(),
                             choice13: $("input[name=choice13]:checked").val(),
                             choice14: choice14.toString(),
                             choice15: $("input[name=choice15]:checked").val(),
                             comment15: $("input[name=comment15]").val(),
                             choice16: $("input[name=choice16]:checked").val(),

                             comment16: $("input[name=comment16]").val(),
                             choice17: $("input[name=choice17]:checked").val(),
                             comment17: $("input[name=comment17]").val(),
                             action: "insert"
                         },
                         success: function(response) {
                             if (response == 1) {
                                 alert('data added succesfully')
                             }
                         }
                     })
                 })
             }
         </script>
     </div>
 </body>

 <?php
    include('./templates/foot.php');
    ?>

 </html>