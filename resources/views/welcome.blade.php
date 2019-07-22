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
      <script type="text/javascript" src="js/dynamic-form.js"></script>

  </head>

<body>

    

    <div class="container mt-3">
        <h4 class="mb-2">SAVE PRODUCT</h4>

        <form method="POST" action="/welcome">

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
                <legend>GARANTIE:</legend>
                <div class="form-group" id="garantie">
                    <div class="row">
                        <div class="col-md-3">
                            <!-- <label for="dommagescouverts"></label> -->
                            <input type="text" name="dommagescouverts" id="dommagescouverts" placeholder="Dommage Couvert" class="form-control">
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
                        </div>
                    </div>
                </div>
            </fieldset>

            <fieldset>
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
            </fieldset><br>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>

    <script>
        $(document).ready(function() {
            var garantie =  $("#garantie").dynamicForm("#garantie","#plus5", "#minus5", {
                limit:15,
                formPrefix : "garantie",
                normalizeFullForm : false
            });

            $("#garantie #minus5").on('click', function(){
                var initDynamicId = $(this).closest('#garantie').parent().find("[id^='garantie']").length;
                if (initDynamicId === 2) {
                    $(this).closest('#garantie').next().find('#minus5').hide();
                }
                $(this).closest('#garantie').remove();
            });

            var formule =  $("#formule").dynamicForm("#formule","#plus", "#minus", {
                limit:15,
                formPrefix : "formule",
                normalizeFullForm : false
            });

            $("#formule #minus").on('click', function(){
                var initDynamicId = $(this).closest('#formule').parent().find("[id^='formule']").length;
                if (initDynamicId === 2) {
                    $(this).closest('#formule').next().find('#minus').hide();
                }
                $(this).closest('#formule').remove();
            });

            $('form').on('submit', function(event){
                var values = {};
                $.each($('form').serializeArray(), function(i, field) {
                    values[field.name] = field.value;
                });
                console.log(values)
                event.preventDefault();
            })
        });
    </script>
</body>


</html>
