 <?php

    include('./templates/head.php');
    include('connect.php');
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
                            //  q1: $("input[name=q1]").val(),
                            //  q2: $("input[name=q2]").val(),
                            //  q3: $("input[name=q3]").val(),
                            //  q4: $("input[name=q4]").val(),
                            //  q5: $("input[name=q5]").val(),
                            //  q6: $("input[name=q6]").val(),
                            //  q7: $("input[name=q7]").val(),
                            //  q8: $("input[name=q8]").val(),
                            //  q9: $("input[name=q9]").val(),
                            //  q10: $("input[name=q10]").val(),
                            //  q11: $("input[name=q11]").val(),
                            //  q12: $("input[name=q12]").val(),
                            //  q13: $("input[name=q13]").val(),
                            //  q14: $("input[name=q14]").val(),
                            //  q15: $("input[name=q15]").val(),
                            //  q16: $("input[name=q16]").val(),
                            //  q17: $("input[name=q17]").val(),


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