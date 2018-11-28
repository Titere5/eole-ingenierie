
{{ content() }}

<div class="page-header">
    <h1 style="color:blue;">Ajouter un produit</h1>
</div>

{{ form('products/addProduct', 'id': 'productForm', 'onbeforesubmit': 'return false') }}

    <fieldset>


        <div class="control-group">
            {{ form.label('nom', ['class': 'control-label']) }}
            <div class="controls">
                {{ form.render('nom', ['class': 'form-control']) }}
                <p class="help-block"></p>
                <div class="alert alert-warning" id="prenom_alert">
                    Veuillez entrez le nom du produit
                </div>
            </div>
        </div>

        <div class="control-group">
            {{ form.label('prix', ['class': 'control-label']) }}
            <div class="controls">
                {{ form.render('prix', ['class': 'form-control']) }}
                <p class="help-block">(requis)</p>
                <div class="alert alert-warning" id="email_alert">
                     Veuillez entrez le prix du produit.
                </div>
            </div>
        </div>

        <div class="control-group">
            {{ form.label('description', ['class': 'control-label']) }}
            <div class="controls">
                {{ form.render('description', ['class': 'form-control']) }}
                <p class="help-block">(requis)</p>
                <div class="alert alert-warning" id="telephone_alert">
                   Veuillez entrez la description du produit.
                </div>
            </div>
        </div>

        <div class="control-group">
            {{ form.label('stock', ['class': 'control-label']) }}
            <div class="controls">
                {{ form.render('stock', ['class': 'form-control']) }}
                <p class="help-block">(requis)</p>
                <div class="alert alert-warning" id="telephone_alert">
                     veuillez entrez le nombre de produit en stock.
                </div>
            </div>
        </div>

        <div class="control-group">
            {{ form.label('id_Categorie', ['class': 'control-label']) }}
            <div class="controls">
                {{ form.render('id_Categorie', ['class': 'form-control']) }}
                <p class="help-block">(requis)</p>
                <div class="alert alert-warning" id="telephone_alert">
                    Veuillez entrez la catégorie du produit
                </div>
            </div>
        </div>

       
        <div class="form-actions">
            {{ submit_button('Ajouter', 'class': 'btn btn-primary') }}
            <p class="help-block">En vous inscrivant, vous acceptez les termes d'utilisations et de confidentialités.</p>
        </div>

    </fieldset>
</form>