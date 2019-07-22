<!-- <!doctype html>
<html>
<head>
	
</head>
<body>
	<form action="" method="POST">
		@csrf
		<div class="form group">
			<label for="name">your name</label>
			<input type="text" class="form controll" name="nom">

			<button type="submit" class="btn btn-primary">Send</button>
		</div>
	</form>
</body>
</html> -->


<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title></title>
      <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.1.3/darkly/bootstrap.min.css"> -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <!-- <script type="text/javascript" src="js/dynamic-form.js"></script> -->

  </head>

<body>

    

    <!-- <div class="container mt-3">
        <h4 class="mb-2">SAVE PRODUCT</h4>

        <form method="POST" action="">

        	@csrf -->

            <!-- <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="nomproduit">Nom du Produit</label>
                    <input type="text" class="form-control" id="nomproduit" name="nomproduit" placeholder="Nom du Produit">
                </div>

                <div class="form-group col-sm-6">
                    <label for="imagproduct">Image du Product</label>
                    <input type="file" class="form-control" id="imagproduct" name="imagproduct" placeholder="">
                </div>
            </div>

            <div class="form-group">
                <label for="cible">Cible</label>
                <input type="text" class="form-control" id="cible" name="cible" placeholder="Cible">
            </div>

            <div class="form-row">
                <div class="form-group col-sm-4">
                    <label for="periodedecarence">Periode de Carence</label>
                    <input type="text" class="form-control" id="periodedecarence" name="periodedecarence"  placeholder="Periode de Carence" onkeyup = "if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')";>
                </div>

                <div class="form-group col-sm-4">
                    <label for="primeannuelle">Prime Annuelle</label>
                    <input type="text" class="form-control" id="primeannuelle" name="primeannuelle" onkeyup = "if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')";>
                </div>

                <div class="form-group col-sm-4">
                    <label for="dommagescouverts">Categoie</label>
                    <select name="dommagescouverts" id="dommagescouverts" class="form-control">
                        <option selected disabled>Categorie</option>
                        <option value="...">...</option>
                    </select>
                </div>
            </div> -->

            <!-- <fieldset>
                <legend>GARANTIE:</legend>
                <div class="form-group" id="garantie">
                    <div class="row">
                        <div class="col-md-3"> -->
                            <!-- <label for="dommagescouverts"></label> -->
                           <!--  <input type="text" name="dommagescouverts" id="dommagescouverts" placeholder="Dommage Couvert" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="garantieofferte" id="garantieofferte" placeholder="Garantie Offerte" onkeyup = "if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')";>
                        </div>
                        <div class="col-md-4">
                            <textarea class="form-control" rows="1" name="moyendepreuve" placeholder="Moyens de Preuve" id="moyendepreuve"></textarea>
                        </div>
                        <div class="button-group">
                            <a href="javascript:void(0)" class="btn btn-primary" id="plus5">Add More</a>
                            <a href="javascript:void(0)" class="btn btn-danger" id="minus5">Remove</a>
                        </div> -->
                        <!-- dommagescouvertsgarantieoffertemoyendepreuve -->
                    <!-- </div>
                </div>
            </fieldset> -->

            <!-- <fieldset>
                <legend>FORMULE :</legend>
                <div class="form-group" id="formule">
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="period">Frequence</label>
                            <select name="period" id="period" class="form-control">
                                <option value="" selected disabled>Frequency</option>
                                <option value="jour">Jour</option>
                                <option value="semaine">Semaine</option>
                                <option value="mois">Mois</option>
                                <option value="trimestre">Trimestre</option>
                                <option value="semestre">Semestre</option>
                                <option value="annelle">Annuelle</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <input type="text" class="form-control" name="prix" id="prix" placeholder="Prix" onkeyup = "if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')";>
                        </div>

                        <div class="button-group">
                            <a href="javascript:void(0)" class="btn btn-primary" id="plus">Add More</a>
                            <a href="javascript:void(0)" class="btn btn-danger" id="minus">Remove</a>
                        </div>
                    </div>
                </div>
            </fieldset><br> -->

            <!-- <button type="submit" class="btn btn-primary">Submit</button>

        </form> -->


        <form action="" method="POST">

        	@csrf

        	<h4>SAVE PRODUCT</h4>

        	<div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="nomproduit">Nom du Produit</label>
                    <input type="text" class="form-control" id="nomproduit" name="nomproduit" placeholder="Nom du Produit">
                </div>

                <div class="form-group col-sm-6">
                    <label for="imagproduct">Image du Product</label>
                    <input type="file" class="form-control" id="imagproduct" name="imagproduct" placeholder="">
                </div>
            </div>

            <div class="form-group">
                <label for="cible">Cible</label>
                <input type="text" class="form-control" id="cible" name="cible" placeholder="Cible">
            </div>

            <div class="form-row">
                <div class="form-group col-sm-4">
                    <label for="periodedecarence">Periode de Carence</label>
                    <input type="text" class="form-control" id="periodedecarence" name="periodedecarence"  placeholder="Periode de Carence" onkeyup = "if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')";>
                </div>

                <div class="form-group col-sm-4">
                    <label for="primeannuelle">Prime Annuelle</label>
                    <input type="text" class="form-control" id="primeannuelle" name="primeannuelle" onkeyup = "if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')";>
                </div>

                <div class="form-group col-sm-4">
                    <label for="category">Categoie</label>
                    <select name="category" id="category" class="form-control">
                        <option selected disabled>Categorie</option>
                        <option value="...">...</option>
                    </select>
                </div>
            </div>

        	<fieldset>

        		<div class="form-group col-sm-2">
					<button class="form-control btn btn-primary" id="add-guarantee">+ Add GARANTIE:</button>
				</div>

				<legend>GARANTIE:</legend>
                <div class="form-group" id="guarantee">
                    <div class="row">
                        <div class="col-md-3">
                            <!-- <label for="dommagescouverts"></label> -->
                            <input type="text" name="dommagescouverts[1]" id="dommagescouverts[1]" placeholder="Dommage Couvert" class="form-control">
                        </div>
                        <div class="col-md-3">
                        	<input type="text" class="form-control" name="garantieofferte[1]" id="garantieofferte[1]" placeholder="Garantie Offerte" onkeyup = "if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')";>
                        </div>
                        <div class="col-md-4">
                            <textarea class="form-control" rows="1" name="moyendepreuve[1]" placeholder="Moyens de Preuve" id="moyendepreuve[1]"></textarea>
                        </div>
                    </div>
                </div>

        	</fieldset>

        	<fieldset>

        		<div class="form-group col-sm-2">
					<button class="form-control btn btn-primary" id="add-formule">+ Add garantieofferte</button>
				</div>

        		<legend>FORMULE :</legend>
        		

				<div class="form-group" id="formule">

					<div class="row">
	                    <!-- <label for="dommagescouverts">Categoie</label> -->
	                    <select name="period[1]" id="period[1]" class="col-md-4 form-control">
	                        <option value="" disabled>Frequence</option>
	                        <option value="jour">Jour</option>
	                        <option value="semaine">Semaine</option>
	                        <option value="Mois">Mois</option>
	                        <option value="trimestre">Trimestre</option>
                            <option value="semestre">Semestre</option>
                            <option value="annelle">Annuelle</option>
	                    </select>

		                <div class="col-md-4">
	                        <input type="text" class="form-control" name="price[1]" id="price[1]" placeholder="Prix" onkeyup = "if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')";>
	                    </div>
	                </div>
				</div>
        	</fieldset>

        	

			<button type="submit" class="btn btn-primary">Send DATAS</button>
        </form>
    </div>

    <script>
        $(document).ready(function() {
		    var max_fields      = 32; //maximum input boxes allowed
		    var guarantee         = $("#guarantee"); //Fields guarantee
		    var add_guarantee      = $("#add-guarantee"); //Add button ID

		    var x = 1; //initlal text box count
		    $(add_guarantee).click(function(e){ //on add input button click
		        e.preventDefault();
		        if(x < max_fields){ //max input box allowed
		            x++; //text box increment
		            $(guarantee).append('<div class="form-group" id="guarantee"><div class="row"><div class="col-md-3"><input type="text" name="dommagescouverts['+x+']" id="dommagescouverts['+x+']" placeholder="Dommage Couvert" class="form-control"></div><div class="col-md-3"><input type="text" class="form-control" name="garantieofferte['+x+']" id="garantieofferte['+x+']" placeholder="Garantie Offerte"></div><div class="col-md-4"><textarea class="form-control" rows="1" name="moyendepreuve['+x+']" placeholder="Moyens de Preuve" id="moyendepreuve['+x+']"></textarea></div><a href="#" class="remove-garantieofferte">remove</a></div>');
				}
		    });
		    
		       $(guarantee).on("click",".remove-garantieofferte", function(e){ //user click on remove text
		        e.preventDefault(); $(this).parent('div').remove();
		       
		   //     $(".guarantee").each(function(elm){
		   //          var count = elm + 1
		   //          $(this).attr("name", "garantieofferte " + count);
		   //          $(this).attr("value", "garantieofferte " + count);    
					// x = elm+ 1;            
		   //      });	
		    })
		});


		$(document).ready(function() {
		    var max_fields      = 32; //maximum input boxes allowed
		    var formule         = $("#formule"); //Fields formule
		    var add_formule = $("#add-formule");
		    
		    var x = 1; //initlal text box count
		    $(add_formule).click(function(e){ //on add input button click
		        e.preventDefault();
		        if(x < max_fields){ //max input box allowed
		            x++; //text box increment
		            $(formule).append('<div class="form-group" id="formule"><div class="row"><div class="col-md-4"><select name="period['+x+']" id="period['+x+']" class="form-control"><option value="" disabled>Frequence</option><option value="jour">Jour</option><option value="semaine">Semaine</option><option value="Mois">Mois</option><option value="trimestre">Trimestre</option><option value="semestre">Semestre</option><option value="annelle">Annuelle</option></select><div class="col-md-4"><input type="text" class="form-control" name="price['+x+']" id="price['+x+']" placeholder="Prix"></div></div><a href="#" class="remove-formule">remove</a></div>');
				}
		    });
		    
		       $(formule).on("click",".remove-formule", function(e){ //user click on remove text
		        e.preventDefault(); $(this).parent('div').remove();
		       
		   //     $(".formule").each(function(elm){
		   //          var count = elm + 1
		   //          $(this).attr("name", "prix " + count);
		   //          $(this).attr("value", "prix " + count);    
					// x = elm+ 1;            
		   //      });	
		    })
		});
    </script>
</body>


</html>
