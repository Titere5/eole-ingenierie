
{{ content() }}

<div class="page-header">
    <h1 style="color:blue;">Ajouter une fiche projet</h1>
</div>

{{ form('project/addProject', 'id': 'projectForm', 'onbeforesubmit': 'return false',  'enctype': "multipart/form-data") }}

    <fieldset>
        <div class="control-group">
            {{ form.label('titre', ['class': 'control-label']) }}
            <div class="controls">
                {{ form.render('titre', ['class': 'form-control']) }}
                <p class="help-block"></p>
                <div class="alert alert-warning" id="prenom_alert">
                    Veuillez entrez le titre de votre projet
                </div>
            </div>
        </div>



        <div class="control-group">
            {{ form.label('description', ['class': 'control-label']) }}
            <div class="controls">
                {{ form.render('description', ['class': 'form-control']) }}
                <p class="help-block">(requis)</p>
                <div class="alert alert-warning" id="telephone_alert">
                   Veuillez entrez la description de votre projet.
                </div>
            </div>
        </div>




        <div class="clearfix">
           {# <label for="email">Fichier</label> #}
           {# <div class="input"> #}
               {{ file_field("file", "size": "30", "class": "span6") }}
               <div class="alert" id="email_alert" style="color:red" >
                   <strong>Attention </strong> Veuillez entrer un format de fichier pdf jpg jpeg
               </div>
           {# </div> #}
       </div>


        <div class="form-actions">
            {{ submit_button('Ajouter', 'class': 'btn btn-primary') }}
        </div>

    </fieldset>
</form>
